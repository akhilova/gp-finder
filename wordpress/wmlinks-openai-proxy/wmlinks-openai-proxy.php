<?php
/**
 * Plugin Name: Wmlinks OpenAI Proxy
 * Description: Exposes a REST endpoint to proxy OpenAI Chat Completions for the Guest Post Generator.
 * Version: 1.0.0
 * Author: Wmlinks
 */

if (!defined('ABSPATH')) { exit; }

add_action('rest_api_init', function () {
	register_rest_route('wmlinks/v1', '/chat-gp', [
		'methods'  => 'POST',
		'callback' => 'wmlinks_chat_gp_handler',
		'permission_callback' => '__return_true',
	]);
});

function wmlinks_chat_gp_handler(\WP_REST_Request $request) {
	$has_constant = defined('OPENAI_API_KEY');
	$api_key = $has_constant ? OPENAI_API_KEY : getenv('OPENAI_API_KEY');
	if (!$api_key) {
		return new \WP_REST_Response([
			'error' => 'OpenAI API key not configured. Define OPENAI_API_KEY in wp-config.php.',
			'debug' => [
				'hasOPENAI_API_KEY' => $has_constant || !!getenv('OPENAI_API_KEY')
			]
		], 500);
	}

	$raw_body = $request->get_body();
	$payload = json_decode($raw_body, true);
	if (!$payload) {
		return new \WP_REST_Response(['error' => 'Invalid JSON body'], 400);
	}

	$args = [
		'headers' => [
			'Content-Type'  => 'application/json',
			'Authorization' => 'Bearer ' . $api_key,
		],
		'body'    => wp_json_encode($payload),
		'timeout' => 45,
	];

	$response = wp_remote_post('https://api.openai.com/v1/chat/completions', $args);
	if (is_wp_error($response)) {
		return new \WP_REST_Response(['error' => 'Network error: ' . $response->get_error_message()], 500);
	}

	$status_code = wp_remote_retrieve_response_code($response);
	$body        = wp_remote_retrieve_body($response);
	if ($status_code < 200 || $status_code >= 300) {
		return new \WP_REST_Response(['error' => $body], $status_code);
	}

	$data = json_decode($body, true);
	$raw  = trim($data['choices'][0]['message']['content'] ?? '{}');
	$parsed = json_decode($raw, true);
	if (json_last_error() !== JSON_ERROR_NONE) {
		return new \WP_REST_Response(['error' => 'Model did not return valid JSON: ' . mb_substr($raw, 0, 200)], 502);
	}

	return new \WP_REST_Response($parsed, 200);
}


