# WordPress Setup (Theme + REST)

## What you have in this folder
- `wmlinks-openai-proxy/` — WordPress plugin exposing REST endpoint: `/wp-json/wmlinks/v1/chat-gp`
- `wmlinks-guest-post-template.php` — Page Template to render the generator UI that calls the WP endpoint

## 1) Install the plugin
1. Zip the folder `wmlinks-openai-proxy`
2. In WordPress Admin → Plugins → Add New → Upload Plugin → upload the zip → Activate
3. Add your OpenAI key in `wp-config.php`:
   ```php
   define('OPENAI_API_KEY', 'sk-...your-key...');
   ```

## 2) Add the Page Template to your theme
1. Copy `wmlinks-guest-post-template.php` into your active theme folder, e.g.: `wp-content/themes/your-theme/`
2. In WP Admin → Pages → Add New → right sidebar “Template” → choose “Wmlinks — AI Guest Post Generator” → Publish

That’s it. The page will call the plugin endpoint at `/wp-json/wmlinks/v1/chat-gp`.

## Notes
- No Netlify is required. All runs in your WP.
- The UI uses inline styles, so no extra CSS is required. You can refine styles with theme CSS if desired.
- If you see `OpenAI API key not configured`, ensure the constant is set in `wp-config.php` and flush caches.
