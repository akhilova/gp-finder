# WordPress Deployment Bundle

This folder contains everything needed to deploy the Guest Post Finder to WordPress.

## Contents
- `plugins/wmlinks-openai-proxy/` — WordPress plugin that forwards Chat Completions requests to OpenAI.
- `theme-template/wmlinks-guest-post-template.php` — Page template that renders the updated UI and talks to the plugin endpoint.

## How to deploy
1. **Install the plugin**
   - Zip the contents of `plugins/wmlinks-openai-proxy/`.
   - WordPress Admin → Plugins → Add New → Upload Plugin → select the zip → Activate.
   - Add your OpenAI key in `wp-config.php`:
     ```php
     define('OPENAI_API_KEY', 'sk-...');
     ```

2. **Add the page template**
   - Copy `theme-template/wmlinks-guest-post-template.php` into your active theme directory (e.g. `wp-content/themes/your-theme/`).
   - In the WordPress editor create a new Page and pick the template “Wmlinks — AI Guest Post Generator”, then publish.

## Notes
- The template already bundles the latest UI and per-publication pitch logic; no extra assets are required.
- All API calls go through the plugin endpoint at `/wp-json/wmlinks/v1/chat-gp`.
- If the UI shows “OpenAI API key not configured”, double-check the constant in `wp-config.php` and clear caches.
