const express = require('express');
const path = require('path');
const cors = require('cors');
require('dotenv').config();

// Use built-in fetch for Node.js 18+
const fetch = globalThis.fetch || require('node-fetch');

const app = express();
app.use(cors());
app.use(express.json());

// Serve static files
app.use(express.static(path.join(__dirname)));

async function forwardToOpenAI(apiKey, payload){
  try {
    console.log('Making request to OpenAI with payload:', JSON.stringify(payload, null, 2));
    
    const oaiRes = await fetch('https://api.openai.com/v1/chat/completions', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${apiKey}`
      },
      body: JSON.stringify(payload)
    });
    
    console.log('OpenAI response status:', oaiRes.status);
    
    if (!oaiRes.ok) {
      const text = await oaiRes.text();
      console.error('OpenAI error response:', text);
      return { status: oaiRes.status, error: text };
    }
    
    const data = await oaiRes.json();
    console.log('OpenAI response data:', data);
    
    const raw = data.choices?.[0]?.message?.content?.trim() || '{}';
    try{ 
      const parsed = JSON.parse(raw);
      return { status: 200, data: parsed }; 
    }
    catch(e){ 
      console.error('JSON parse error:', e);
      return { status: 502, error: 'Model did not return valid JSON: ' + raw }; 
    }
  } catch (error) {
    console.error('Network error:', error);
    return { status: 500, error: 'Network error: ' + error.message };
  }
}

// Generic endpoint (fallback to OPENAI_API_KEY)
app.post('/api/chat', async (req, res) => {
  const apiKey = process.env.OPENAI_API_KEY;
  if (!apiKey) return res.status(500).json({ error: 'OPENAI_API_KEY is not set' });
  const r = await forwardToOpenAI(apiKey, req.body);
  return r.status===200 ? res.json(r.data) : res.status(r.status).json({ error: r.error });
});

// GP page specific endpoint
app.post('/api/chat/gp', async (req, res) => {
  try {
    console.log('GP endpoint called with body:', req.body);
    const apiKey = process.env.OPENAI_API_KEY_GP || process.env.OPENAI_API_KEY;
    console.log('Using API key:', apiKey ? apiKey.substring(0, 10) + '...' : 'NOT SET');
    
    if (!apiKey) {
      console.error('No API key found');
      return res.status(500).json({ error: 'OPENAI_API_KEY_GP (or OPENAI_API_KEY) is not set' });
    }
    
    const r = await forwardToOpenAI(apiKey, req.body);
    console.log('Forward result:', r);
    
    if (r.status === 200) {
      return res.json(r.data);
    } else {
      return res.status(r.status).json({ error: r.error });
    }
  } catch (error) {
    console.error('GP endpoint error:', error);
    return res.status(500).json({ error: 'Internal server error: ' + error.message });
  }
});

// Index (Guest Post Idea Generator) specific endpoint
app.post('/api/chat/index', async (req, res) => {
  const apiKey = process.env.OPENAI_API_KEY_INDEX || process.env.OPENAI_API_KEY;
  if (!apiKey) return res.status(500).json({ error: 'OPENAI_API_KEY_INDEX (or OPENAI_API_KEY) is not set' });
  const r = await forwardToOpenAI(apiKey, req.body);
  return r.status===200 ? res.json(r.data) : res.status(r.status).json({ error: r.error });
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});
