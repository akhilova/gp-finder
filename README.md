# Guest Post Finder

AI-powered tool for generating guest post ideas and finding opportunities.

## Setup

### 1. Install Dependencies

```bash
npm install
```

### 2. Configure OpenAI API Key

1. Copy the example environment file:
   ```bash
   cp .env.example .env
   ```

2. Open `.env` file and add your OpenAI API key:
   ```
   OPENAI_API_KEY=sk-your-actual-api-key-here
   ```

3. You can get your API key from: https://platform.openai.com/api-keys

### 3. Start the Server

```bash
npm start
```

The server will run on http://localhost:3000

## Available Pages

- **http://localhost:3000/index.html** - Guest Post Idea Generator
- **http://localhost:3000/search.html** - Search page
- **http://localhost:3000/gp.html** - AI Guest Post Suggestion Generator

## Security

⚠️ **Important**: Never commit your `.env` file to version control. The `.env` file is already added to `.gitignore` to prevent accidental commits of your API keys.

## Optional: Multiple API Keys

You can use different API keys for different pages by setting:

```env
OPENAI_API_KEY_GP=sk-key-for-gp-page
OPENAI_API_KEY_INDEX=sk-key-for-index-page
```

If these are not set, `OPENAI_API_KEY` will be used for all pages.
