<?php
/*
Template Name: Wmlinks — AI Guest Post Generator
*/
get_header();
$rest_endpoint = esc_url_raw( rest_url( 'wmlinks/v1/chat-gp' ) );
?>
<div class="pds-container" style="padding-top: 60px; padding-bottom: 60px; background: #FBFBFB;">
  <div style="max-width: 1100px; margin: 0 auto; background: #FFFFFF; border: 1px solid #E5E5E5; border-radius: 16px; padding: 30px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.09);">
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 48px 32px; margin-bottom: 30px; box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3); text-align: center;">
      <div style="display: flex; align-items: center; justify-content: center; gap: 12px; margin-bottom: 16px;">
        <div style="width: 56px; height: 56px; background: #30C48D; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 28px; color: #FFFFFF; box-shadow: 0 4px 12px rgba(48, 196, 141, 0.4);">W</div>
        <h1 style="font-weight: 700; font-size: 32px; line-height: 40px; color: #FFFFFF; margin: 0;">AI Guest Post Idea Generator</h1>
      </div>
      <p style="color: rgba(255, 255, 255, 0.95); font-size: 18px; line-height: 28px; margin: 0; max-width: 700px; margin-left: auto; margin-right: auto; font-weight: 600;">Wmlinks — AI Guest Post Generator</p>
      <p style="color: rgba(255, 255, 255, 0.85); font-size: 16px; line-height: 24px; margin: 12px auto 0; max-width: 700px;">Turn your target site and goals into ready-to-use guest post ideas, outlines, and email drafts in seconds.</p>
    </div>

    <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 20px;">
      <div style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border: 1px solid #E5E7EB; border-radius: 16px; padding: 24px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
        <h3 style="font-weight: 700; font-size: 18px; line-height: 24px; color: #1F2937; margin: 0 0 18px 0; display: flex; align-items: center; gap: 8px;">
          <span style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; width: 28px; height: 28px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700;">1</span>
          Inputs
        </h3>
        <label style="font-size: 12px; color: #717885; display: block; margin-bottom: 5px;">Your domain</label>
        <input id="myDomain" type="text" style="width: 100%; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box; margin-bottom: 10px;" />
        <label style="font-size: 12px; color: #717885; display: block; margin-bottom: 5px; margin-top: 8px;">Your niche</label>
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
          <input id="niche" type="text" style="flex: 1; min-width: 200px; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box;" />
          <select id="audience" style="max-width: 220px; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box;">
            <option value="B2B">Audience: B2B</option>
            <option value="B2C">Audience: B2C</option>
            <option value="SMB">Audience: SMB</option>
            <option value="Enterprise">Audience: Enterprise</option>
            <option value="eSports">eSports & Gaming</option>
            <option value="iGaming">iGaming & Casino</option>
            <option value="Crypto">Cryptocurrency</option>
            <option value="Dating">Dating & Relationships</option>
            <option value="Nutrition">Health & Nutrition</option>
            <option value="Finance">Finance & Investment</option>
            <option value="Tech">Technology</option>
            <option value="E-commerce">E-commerce</option>
          </select>
        </div>
        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 10px;">
          <select id="language" style="flex: 1; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box;">
            <option value="en">Language: English</option>
            <option value="de">Language: German (Deutsch)</option>
            <option value="fr">Language: French (Français)</option>
            <option value="es">Language: Spanish (Español)</option>
            <option value="it">Language: Italian (Italiano)</option>
            <option value="pt">Language: Portuguese (Português)</option>
            <option value="pl">Language: Polish (Polski)</option>
            <option value="nl">Language: Dutch (Nederlands)</option>
            <option value="uk">Language: Ukrainian (Українська)</option>
          </select>
          <select id="tone" style="flex: 1; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box;">
            <option value="practical">Tone: Practical</option>
            <option value="data-driven">Tone: Data-driven</option>
            <option value="opinion">Tone: Opinion</option>
            <option value="beginner">Tone: Beginner-friendly</option>
          </select>
          <select id="contentType" style="flex: 1; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box;">
            <option value="article">Content: Article</option>
            <option value="listicle">Content: Listicle</option>
            <option value="tutorial">Content: Tutorial</option>
            <option value="review">Content: Review</option>
            <option value="case-study">Content: Case Study</option>
            <option value="news">Content: News</option>
          </select>
        </div>
        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 10px;">
          <select id="depth" style="flex: 1; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box;">
            <option value="mid">Depth: Intermediate</option>
            <option value="light">Depth: Light</option>
            <option value="pro">Depth: Advanced</option>
          </select>
          <select id="length" style="flex: 1; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; box-sizing: border-box;">
            <option value="1200-1500">Length: 1200–1500</option>
            <option value="800-1000">Length: 800–1000</option>
            <option value="1800-2200">Length: 1800–2200</option>
          </select>
        </div>
      </div>

      <div style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border: 1px solid #E5E7EB; border-radius: 16px; padding: 24px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
        <h3 style="font-weight: 700; font-size: 18px; line-height: 24px; color: #1F2937; margin: 0 0 18px 0; display: flex; align-items: center; gap: 8px;">
          <span style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; width: 28px; height: 28px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700;">2</span>
          Targets & Anchors
        </h3>
        <label style="font-size: 12px; color: #717885; display: block; margin-bottom: 5px;">Target pages (one per line, max 10)</label>
        <textarea id="targets" style="width: 100%; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; min-height: 100px; resize: vertical; box-sizing: border-box; margin-bottom: 10px;"></textarea>
        <label style="font-size: 12px; color: #717885; display: block; margin-bottom: 5px;">Anchors (one per line, max 10)</label>
        <textarea id="anchors" style="width: 100%; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; min-height: 100px; resize: vertical; box-sizing: border-box;"></textarea>
      </div>

      <div style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border: 1px solid #E5E7EB; border-radius: 16px; padding: 24px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
        <h3 style="font-weight: 700; font-size: 18px; line-height: 24px; color: #1F2937; margin: 0 0 18px 0; display: flex; align-items: center; gap: 8px;">
          <span style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; width: 28px; height: 28px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700;">3</span>
          Target sites <span style="font-size: 12px; color: #9CA3AF; font-weight: 400; margin-left: 4px;">(optional)</span>
        </h3>
        <label style="font-size: 12px; color: #717885; display: block; margin-bottom: 5px;">Enter domains or URLs you want to pitch (one per line)</label>
        <textarea id="pubs" style="width: 100%; background: #FFFFFF; border: 1px solid #E5E5E5; color: #000000; padding: 12px 14px; border-radius: 0; min-height: 120px; resize: vertical; box-sizing: border-box; margin-bottom: 10px;"></textarea>
        <div style="font-size: 12px; color: #717885;">Empty → we generate universal ideas for your niche.</div>
      </div>
    </div>

    <div style="margin-top: 30px; padding: 30px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);">
      <h3 style="font-weight: 700; font-size: 24px; line-height: 32px; color: #FFFFFF; margin: 0 0 20px 0; text-align: center;">Generate Your Ideas</h3>
      <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center; align-items: center;">
        <button id="btnGen" style="background: #30C48D; padding: 15px 70px; text-decoration: none; font-weight: 600; font-size: 16px; line-height: 20px; color: #FFFFFF; border: none; cursor: pointer; border-radius: 0; transition: all 0.3s ease;">Generate Ideas</button>
        <button id="btnRegen" style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.5); padding: 15px 40px; font-weight: 600; font-size: 16px; line-height: 20px; color: #FFFFFF; cursor: pointer; border-radius: 0; transition: all 0.3s ease;" disabled>Regenerate</button>
      </div>
    </div>

    <div id="kpis" style="display:none; margin-top: 20px; grid-template-columns: repeat(3, 1fr); gap: 10px;">
      <div style="background: #FFFFFF; border: 1px solid #E5E5E5; border-radius: 10px; padding: 15px;">
        <div style="font-size: 12px; color: #717885;"># ideas</div>
        <div id="kCount" style="font-size: 18px; font-weight: 800; color: #000000;">0</div>
      </div>
      <div style="background: #FFFFFF; border: 1px solid #E5E5E5; border-radius: 10px; padding: 15px;">
        <div style="font-size: 12px; color: #717885;">Avg length</div>
        <div id="kLen" style="font-size: 18px; font-weight: 800; color: #000000;">—</div>
      </div>
      <div style="background: #FFFFFF; border: 1px solid #E5E5E5; border-radius: 10px; padding: 15px;">
        <div style="font-size: 12px; color: #717885;">Suggested anchor</div>
        <div id="kAnchor" style="font-size: 18px; font-weight: 800; color: #000000;">—</div>
      </div>
    </div>

    <div id="results" style="margin-top: 20px; display: grid; gap: 15px;"></div>

    <div id="tabs" style="display:none; margin: 20px 0; display: flex; gap: 10px; align-items: center; justify-content: center; flex-wrap: wrap;">
      <button id="btnCopyTable" style="background: #FFFFFF; border: 1px solid #E5E5E5; padding: 14px 40px; font-weight: 600; font-size: 16px; color: #000000; cursor: pointer; border-radius: 0; display: flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
        <span>📋</span> Copy as Table
      </button>
      <button id="btnExportCSV" style="background: #FFFFFF; border: 1px solid #E5E5E5; padding: 14px 40px; font-weight: 600; font-size: 16px; color: #000000; cursor: pointer; border-radius: 0; display: flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
        <span>📊</span> Export CSV
      </button>
    </div>
  </div>
</div>

<style>
@keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
#kpis[style*="display:grid"] { display: grid !important; }
#btnGen:hover { background: #45D987 !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.08); }
#btnRegen:hover:not(:disabled) { background: rgba(255, 255, 255, 0.3) !important; border-color: rgba(255, 255, 255, 0.7) !important; }
#btnRegen:disabled { opacity: 0.5; cursor: not-allowed !important; }
#st1.active,#st2.active,#st3.active,#st4.active { background: linear-gradient(90deg, #30C48D, #22c55e) !important; box-shadow: 0 0 0 4px rgba(48,196,141,0.15); }
#btnCopyTable:hover,#btnExportCSV:hover { border-color: #30C48D !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.08); background: #FFFFFF; }
.pds-container > div > div[style*="linear-gradient(145deg"] { transition: all 0.3s ease; }
.pds-container > div > div[style*="linear-gradient(145deg"]:hover { transform: translateY(-4px); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1) !important; }
input, textarea, select { background: #FFFFFF; border: 1px solid #E5E5E5; box-sizing: border-box; padding: 12px 20px; border-radius: 0 !important; transition: all 0.3s ease; }
input:focus, textarea:focus, select:focus { outline: none; border-color: #30C48D !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.08); }
input::placeholder, textarea::placeholder, select::placeholder { font-weight: 500; font-size: 16px; line-height: 20px; color: #717885; }
.idea-badge { font-size: 12px; border: 1px solid #E5E5E5; background: #F0F0F0; padding: 4px 10px; border-radius: 999px; color: #717885; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; }
.idea-tabs { margin-top: 15px; }
.tab-buttons { display: flex; gap: 8px; border-bottom: 1px solid #E5E5E5; }
.tab-btn { background: #F9FAFB; border: 1px solid #E5E5E5; border-bottom: none; padding: 8px 16px; font-weight: 600; font-size: 14px; color: #4B5563; cursor: pointer; transition: all 0.2s ease; }
.tab-btn.active { background: #FFFFFF; color: #111827; border-color: #30C48D #30C48D #FFFFFF #30C48D; position: relative; top: 1px; }
.tab-panel { display: none; padding-top: 15px; }
.tab-panel.active { display: block; }
.outline-list { margin: 15px 0 0 0; padding-left: 20px; color: #000000; }
.outline-list li { margin: 4px 0; font-size: 14px; font-weight: 600; }
.outline-grid { display: grid; gap: 15px; margin-top: 15px; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); }
.outline-label { color: #717885; font-size: 14px; margin-bottom: 8px; font-weight: 600; }
.outline-row { display: flex; gap: 10px; align-items: center; margin-bottom: 5px; color: #111827; font-size: 14px; }
.why-list { color: #717885; margin: 6px 0 0 16px; font-size: 14px; }
.idea-actions { margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap; }
.copy-btn { background: #FFFFFF; border: 1px solid #E5E5E5; padding: 10px 20px; font-weight: 600; font-size: 14px; color: #000000; cursor: pointer; border-radius: 0; transition: all 0.2s ease; }
.copy-btn.primary { background: #30C48D; color: #FFFFFF; border: none; }
.copy-btn:disabled { opacity: 0.6; cursor: not-allowed; }
.pitch-snippet { background: #FAFAFA; border: 1px solid #E5E5E5; border-radius: 8px; padding: 16px; color: #111827; font-size: 14px; white-space: pre-wrap; line-height: 1.5; }
.pitch-subject { font-weight: 700; font-size: 16px; color: #111827; margin-bottom: 8px; }
.pitch-error { border-color: #FECACA !important; background: #FEF2F2 !important; color: #B91C1C !important; }
@media (max-width: 768px) {
  #tabs { justify-content: center !important; }
  #btnCopyTable, #btnExportCSV { flex: 1; justify-content: center; }
}
</style>

<div id="overlay" style="position: fixed; inset: 0; background: rgba(10, 13, 20, 0.72); backdrop-filter: blur(6px); display: none; align-items: center; justify-content: center; z-index: 50;" aria-live="polite" aria-busy="true">
  <div style="display: flex; flex-direction: column; align-items: center; gap: 12px; background: #FFFFFF; padding: 30px; border: 1px solid #E5E5E5; border-radius: 16px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.35); min-width: 320px;">
    <div style="width: 42px; height: 42px; border: 4px solid #E5E5E5; border-top: 4px solid #30C48D; border-radius: 50%; animation: spin 1s linear infinite;" aria-hidden="true"></div>
    <div id="overlayText" style="font-weight: 600; color: #000000;">Preparing prompt…</div>
    <div style="height: 10px; background: #F0F0F0; border-radius: 999px; overflow: hidden; border: 1px solid #E5E5E5; width: 100%;">
      <div id="overlayBar" style="height: 100%; width: 0; background: linear-gradient(90deg, #30C48D, #22c55e);"></div>
    </div>
    <div style="display: flex; gap: 8px; margin-top: 6px;">
      <div id="st1" style="width: 10px; height: 10px; border-radius: 999px; background: #E5E5E5;"></div>
      <div id="st2" style="width: 10px; height: 10px; border-radius: 999px; background: #E5E5E5;"></div>
      <div id="st3" style="width: 10px; height: 10px; border-radius: 999px; background: #E5E5E5;"></div>
      <div id="st4" style="width: 10px; height: 10px; border-radius: 999px; background: #E5E5E5;"></div>
    </div>
    <div style="display: flex; gap: 10px; margin-top: 10px;">
      <button id="btnCancel" style="background: transparent; border: 1px solid #E5E5E5; padding: 10px 20px; font-weight: 600; font-size: 14px; line-height: 17px; color: #000000; cursor: pointer; border-radius: 0;">Cancel</button>
    </div>
  </div>
</div>

<script>
(function(){
  'use strict';
  const WP_ENDPOINT = <?php echo json_encode( $rest_endpoint ); ?>;
  const $ = (id) => document.getElementById(id);
  const qsa = (sel,root=document)=>Array.from(root.querySelectorAll(sel));
  const pitchResultLegacy = document.getElementById('pitchResult');
  if(pitchResultLegacy){ pitchResultLegacy.style.display = 'none'; pitchResultLegacy.innerHTML = ''; }

  function lines(v,max=10){
    return (v||'').split(/\n+/).map((s)=>s.trim()).filter(Boolean).slice(0,max);
  }

  async function postJsonToFirstWorkingEndpoint(payload, signal){
    const endpoints = [WP_ENDPOINT];
    let lastErrText = '';
    for(const ep of endpoints){
      try{
        const res = await fetch(ep, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload),
          signal
        });
        if(res.ok){ return await res.json(); }
        if(res.status === 404 || res.status === 405){
          lastErrText = await res.text();
          continue;
        }
        const t = await res.text();
        throw new Error(`OpenAI error ${res.status}: ${t}`);
      }catch(e){
        lastErrText = String(e && e.message ? e.message : e);
        continue;
      }
    }
    throw new Error(lastErrText || 'No working API endpoint found');
  }

  function normalizeDomain(domain) {
    if (!domain) return 'yourdomain.com';
    domain = domain.trim();
    domain = domain.replace(/^https?:\/\//, '');
    domain = domain.replace(/\/$/, '');
    return domain;
  }

  function slugToTopic(url){
    try{
      const p = new URL(url);
      const seg = p.pathname.split('/').filter(Boolean).slice(-1)[0] || p.hostname;
      return seg.replace(/[-_]/g,' ').replace(/\.[a-z]+$/, '');
    }catch(e){
      return String(url).replace(/^https?:\/\//,'').replace(/[-_]/g,' ');
    }
  }

  let barTimer = null, overlayStep = 0, controller = null, timeoutId = null;
  const creativeMessages = [
    'Brewing some brilliant ideas',
    'Brainstorming your next guest post',
    'Polishing pitches with extra sparkle',
    'Calling the content muses',
    'Mixing anchors with storytelling magic'
  ];
  const emojiPool = ['💡','🧠','✨','🚀','🪄','📝','🎯','📬'];
  let emojiTimer = null;
  let creativeBaseMessage = '';
  function randomItem(arr){ return arr[Math.floor(Math.random()*arr.length)]; }
  async function copyText(value){
    if(!value){ return false; }
    try{
      await navigator.clipboard.writeText(value);
      return true;
    }catch(err){
      const ta = document.createElement('textarea');
      ta.value = value;
      ta.setAttribute('readonly','');
      ta.style.position = 'absolute';
      ta.style.left = '-9999px';
      document.body.appendChild(ta);
      ta.select();
      const ok = document.execCommand && document.execCommand('copy');
      document.body.removeChild(ta);
      return ok;
    }
  }
  function setCopyFeedback(btn, copiedLabel, defaultLabel){
    if(!btn){ return; }
    const original = btn.textContent;
    btn.textContent = copiedLabel;
    btn.disabled = true;
    setTimeout(()=>{
      btn.textContent = defaultLabel || original;
      btn.disabled = false;
    }, 1200);
  }
  function escapeHtml(str){
    return String(str || '').replace(/[&<>"']/g, (ch)=>{
      const map = { '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;', "'":'&#39;' };
      return map[ch] || ch;
    });
  }
  function startCreativeLoading(base){
    creativeBaseMessage = base || randomItem(creativeMessages);
    if(emojiTimer){ clearInterval(emojiTimer); }
    const update = ()=>{
      const dynamicEmoji = [randomItem(emojiPool), randomItem(emojiPool), randomItem(emojiPool)].join(' ');
      $('overlayText').textContent = `${creativeBaseMessage} ${dynamicEmoji}`;
    };
    update();
    emojiTimer = setInterval(update, 400);
  }

  function overlayShow(){
    $('overlay').style.display = 'flex';
    $('overlay').style.opacity = '1';
    $('overlay').style.transition = 'opacity 250ms ease';
    $('overlayText').textContent = 'Preparing prompt…';
    overlayStep = 0; setSteps(1); animateBar();
    if(emojiTimer){ clearInterval(emojiTimer); emojiTimer = null; }
  }
  function overlayUpdate(stage){
    if(stage === 'call'){
      startCreativeLoading();
    }else if(stage === 'pitch'){
      startCreativeLoading('Crafting your outreach email');
    }else{
      if(emojiTimer){ clearInterval(emojiTimer); emojiTimer = null; }
      const map = { prep:'Preparing prompt…', parse:'Parsing response…', render:'Rendering ideas…' };
      $('overlayText').textContent = map[stage] || String(stage);
    }
    overlayStep = Math.min(overlayStep + 1, 4);
    setSteps(overlayStep+1);
  }
  function overlayHide(){
    if(emojiTimer){ clearInterval(emojiTimer); emojiTimer = null; }
    $('overlayText').textContent = 'Done! ✅';
    if(barTimer){ clearInterval(barTimer); barTimer = null; }
    $('overlayBar').style.width = '100%';
    requestAnimationFrame(()=>{
      $('overlay').style.opacity = '0';
      setTimeout(()=>{
        $('overlay').style.display = 'none';
        $('overlayBar').style.width = '0%';
      }, 250);
    });
  }
  function setSteps(active){ ['st1','st2','st3','st4'].forEach((id,i)=> $(id).classList.toggle('active', i<active)); }
  function animateBar(){ const bar=$('overlayBar'); let w=0; if(barTimer) clearInterval(barTimer); barTimer=setInterval(()=>{ w+=Math.random()*6+2; if(w>95) w=10; bar.style.width=w+'%'; }, 120); }

  function renderSkeletons(count){ const root=$('results'); root.innerHTML=''; for(let i=0;i<(count||3);i++){ const el=document.createElement('div'); el.style.cssText='background: #FFFFFF; border: 1px solid #E5E5E5; border-radius: 10px; padding: 20px; position: relative; overflow: hidden;'; el.innerHTML='<div style="height: 22px; width: 110px; margin: 12px; background: #F0F0F0; border-radius: 999px;"></div><div style="height: 18px; width: 65%; margin: 8px 12px; background: #F0F0F0; border-radius: 8px;"></div><div style="height: 12px; width: 90%; margin: 8px 12px; background: #F0F0F0; border-radius: 8px;"></div><div style="height: 12px; width: 70%; margin: 8px 12px; background: #F0F0F0; border-radius: 8px;"></div>'; root.appendChild(el); } }

  function renderIdeas(ideas){
    const root = $('results'); root.innerHTML='';
    const langLabel = $('language').options[$('language').selectedIndex].text;
    const contentLabel = $('contentType').options[$('contentType').selectedIndex].text;
    const lengthLabel = $('length').value;
    const toneLabel = $('tone').value;
    pitchControllers = [];
    ideas.forEach((idea, idx)=>{
      const card = document.createElement('div');
      card.style.cssText = 'background: #FFFFFF; border: 1px solid #E5E5E5; border-radius: 10px; padding: 20px;';
      card.innerHTML =
        '<div style="display: flex; justify-content: space-between; gap: 10px; align-items: flex-start; margin-bottom: 15px;">\n'+
        '  <div>\n'+
        '    <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 8px;"><span class="idea-badge">Publication</span><strong style="color: #000000;">'+ escapeHtml(idea.publication || '—') +'</strong></div>\n'+
        '    <div style="margin-top: 6px; font-size: 18px; font-weight: 800; color: #000000;">'+ escapeHtml(idea.title || '') +'</div>\n'+
        '    <div style="color: #717885; margin-top: 4px; font-size: 14px;">Angle: '+ escapeHtml(idea.angle || '') +'</div>\n'+
        '  </div>\n'+
        '  <div style="justify-self: end; display: flex; flex-direction: column; gap: 5px; align-items:flex-end;">\n'+
        '    <span class="idea-badge">'+ escapeHtml(lengthLabel) +' words</span>\n'+
        '    <span class="idea-badge">'+ escapeHtml(langLabel) +'</span>\n'+
        '    <span class="idea-badge">'+ escapeHtml(contentLabel) +'</span>\n'+
        '    <span class="idea-badge">Tone: '+ escapeHtml(toneLabel) +'</span>\n'+
        '  </div>\n'+
        '</div>';

      const outlineItems = (idea.outline || []).map((item)=>'<li>'+ escapeHtml(item) +'</li>').join('');
      const whyItems = (idea.why || []).map((item)=>'<li>'+ escapeHtml(item) +'</li>').join('');

      const tabs = document.createElement('div');
      tabs.className = 'idea-tabs';

      const tabButtonsEl = document.createElement('div');
      tabButtonsEl.className = 'tab-buttons';

      const outlineTabBtn = document.createElement('button');
      outlineTabBtn.type = 'button';
      outlineTabBtn.className = 'tab-btn active';
      outlineTabBtn.dataset.tab = `outline-${idx}`;
      outlineTabBtn.textContent = 'Outline';

      const pitchTabBtn = document.createElement('button');
      pitchTabBtn.type = 'button';
      pitchTabBtn.className = 'tab-btn';
      pitchTabBtn.dataset.tab = `pitch-${idx}`;
      pitchTabBtn.textContent = 'Pitch idea';

      tabButtonsEl.appendChild(outlineTabBtn);
      tabButtonsEl.appendChild(pitchTabBtn);

      const outlinePanel = document.createElement('div');
      outlinePanel.className = 'tab-panel active';
      outlinePanel.dataset.panel = `outline-${idx}`;
      outlinePanel.innerHTML =
        '<ol class="outline-list">'+ outlineItems +'</ol>\n'+
        '  <div class="outline-grid">\n'+
        '    <div>\n'+
        '      <div class="outline-label">Proposed link placement</div>\n'+
        '      <div class="outline-row"><span class="idea-badge">Anchor</span><strong>'+ escapeHtml(idea.proposed_anchor || '') +'</strong></div>\n'+
        '      <div class="outline-row"><span class="idea-badge">Target</span><span>'+ escapeHtml(idea.target_url || '—') +'</span></div>\n'+
        '    </div>\n'+
        '    <div>\n'+
        '      <div class="outline-label">Why this fits</div>\n'+
        '      <ul class="why-list">'+ whyItems +'</ul>\n'+
        '    </div>\n'+
        '  </div>\n'+
        '  <div class="idea-actions">\n'+
        '    <button type="button" class="copy-btn" data-action="copy-outline">Copy outline</button>\n'+
        '  </div>';

      const pitchPanel = document.createElement('div');
      pitchPanel.className = 'tab-panel';
      pitchPanel.dataset.panel = `pitch-${idx}`;

      const pitchSubject = document.createElement('div');
      pitchSubject.className = 'pitch-subject';
      pitchSubject.textContent = 'Subject: generating…';

      const pitchSnippet = document.createElement('div');
      pitchSnippet.className = 'pitch-snippet';
      pitchSnippet.textContent = 'Crafting outreach email…';

      const pitchActions = document.createElement('div');
      pitchActions.className = 'idea-actions';

      const copySubjectBtn = document.createElement('button');
      copySubjectBtn.type = 'button';
      copySubjectBtn.className = 'copy-btn';
      copySubjectBtn.dataset.action = 'copy-subject';
      copySubjectBtn.textContent = 'Copy subject';
      copySubjectBtn.disabled = true;

      const copyPitchBtn = document.createElement('button');
      copyPitchBtn.type = 'button';
      copyPitchBtn.className = 'copy-btn primary';
      copyPitchBtn.dataset.action = 'copy-pitch';
      copyPitchBtn.textContent = 'Copy pitch';
      copyPitchBtn.disabled = true;

      pitchActions.appendChild(copySubjectBtn);
      pitchActions.appendChild(copyPitchBtn);

      pitchPanel.appendChild(pitchSubject);
      pitchPanel.appendChild(pitchSnippet);
      pitchPanel.appendChild(pitchActions);

      tabs.appendChild(tabButtonsEl);
      tabs.appendChild(outlinePanel);
      tabs.appendChild(pitchPanel);

      const controllerState = pitchControllers[idx] = {
        subjectEl: pitchSubject,
        snippetEl: pitchSnippet,
        copySubjectBtn,
        copyEmailBtn: copyPitchBtn,
        subjectText: '',
        emailText: ''
      };

      const tabButtons = [outlineTabBtn, pitchTabBtn];
      tabButtons.forEach((btn)=>{
        btn.addEventListener('click', ()=>{
          const target = btn.dataset.tab;
          tabButtons.forEach((b)=>b.classList.toggle('active', b === btn));
          tabs.querySelectorAll('.tab-panel').forEach((panel)=>{
            panel.classList.toggle('active', panel.dataset.panel === target);
          });
        });
      });

      const outlineCopyBtn = outlinePanel.querySelector('[data-action="copy-outline"]');
      if(outlineCopyBtn){
        outlineCopyBtn.addEventListener('click', async ()=>{
          const success = await copyText((idea.outline || []).join('\n'));
          if(success){ setCopyFeedback(outlineCopyBtn, 'Copied ✓', 'Copy outline'); }
        });
      }

      copySubjectBtn.addEventListener('click', async ()=>{
        if(copySubjectBtn.disabled) return;
        const success = await copyText(controllerState.subjectText || '');
        if(success){ setCopyFeedback(copySubjectBtn, 'Copied ✓', 'Copy subject'); }
      });

      copyPitchBtn.addEventListener('click', async ()=>{
        if(copyPitchBtn.disabled) return;
        const success = await copyText(controllerState.emailText || '');
        if(success){ setCopyFeedback(copyPitchBtn, 'Copied ✓', 'Copy pitch'); }
      });

      card.appendChild(tabs);
      root.appendChild(card);
    });
  }

  function setPitchLoadingState(idx){
    const controllerState = pitchControllers[idx];
    if(!controllerState) return;
    controllerState.subjectText = '';
    controllerState.emailText = '';
    controllerState.subjectEl.textContent = 'Subject: generating…';
    controllerState.snippetEl.textContent = 'Crafting outreach email…';
    controllerState.snippetEl.classList.remove('pitch-error');
    controllerState.copySubjectBtn.disabled = true;
    controllerState.copyEmailBtn.disabled = true;
  }

  function setPitchResultState(idx, subject, email){
    const controllerState = pitchControllers[idx];
    if(!controllerState) return;
    controllerState.subjectText = subject || '';
    controllerState.emailText = email || '';
    controllerState.subjectEl.textContent = 'Subject: ' + (subject || '');
    controllerState.snippetEl.textContent = email || '';
    controllerState.snippetEl.classList.remove('pitch-error');
    controllerState.copySubjectBtn.disabled = !subject;
    controllerState.copyEmailBtn.disabled = !email;
  }

  function setPitchErrorState(idx, message){
    const controllerState = pitchControllers[idx];
    if(!controllerState) return;
    controllerState.subjectText = '';
    controllerState.emailText = '';
    controllerState.subjectEl.textContent = 'Subject: —';
    controllerState.snippetEl.textContent = message || 'Could not generate outreach email.';
    controllerState.snippetEl.classList.add('pitch-error');
    controllerState.copySubjectBtn.disabled = true;
    controllerState.copyEmailBtn.disabled = true;
  }

  function ideasToMarkdownTable(ideas) {
    if (!ideas || ideas.length === 0) return '';
    let table = '| # | Publication | Title | Angle | Outline | Anchor | Target URL | Content Type | Language |\n';
    table += '|---|-------------|-------|-------|---------|--------|------------|--------------|----------|\n';
    ideas.forEach((idea, idx) => {
      const num = idx + 1;
      const publication = (idea.publication || '—').replace(/\|/g, '\\|');
      const title = (idea.title || '—').replace(/\|/g, '\\|');
      const angle = (idea.angle || '—').replace(/\|/g, '\\|');
      const outline = (idea.outline || []).join('; ').replace(/\|/g, '\\|');
      const anchor = (idea.proposed_anchor || '—').replace(/\|/g, '\\|');
      const target = (idea.target_url || '—').replace(/\|/g, '\\|');
      const contentType = $('contentType').options[$('contentType').selectedIndex].text;
      const language = $('language').options[$('language').selectedIndex].text;
      table += `| ${num} | ${publication} | ${title} | ${angle} | ${outline} | ${anchor} | ${target} | ${contentType} | ${language} |\n`;
    });
    return table;
  }

  function ideasToCSV(ideas) {
    if (!ideas || ideas.length === 0) return '';
    const headers = ['#', 'Publication', 'Title', 'Angle', 'Outline', 'Anchor', 'Target URL', 'Content Type', 'Language', 'Pitch'];
    let csv = headers.map(h => `"${h}"`).join(',') + '\n';
    ideas.forEach((idea, idx) => {
      const row = [
        idx + 1,
        idea.publication || '—',
        idea.title || '—',
        idea.angle || '—',
        (idea.outline || []).join('; '),
        idea.proposed_anchor || '—',
        idea.target_url || '—',
        $('contentType').options[$('contentType').selectedIndex].text,
        $('language').options[$('language').selectedIndex].text,
        (idea.pitch || '').replace(/\n/g, ' ')
      ];
      csv += row.map(cell => `"${String(cell).replace(/"/g, '""')}"`).join(',') + '\n';
    });
    return csv;
  }

  let lastIdeas = [];
  let pitchControllers = [];

  $('btnCancel').addEventListener('click', ()=>{ if(controller){ controller.abort(); } });
  $('btnRegen').addEventListener('click', ()=>{ if(lastIdeas.length){ $('btnGen').click(); } });

  $('btnGen').addEventListener('click', async ()=>{
    const domain = normalizeDomain($('myDomain').value);
    const niche  = ($('niche').value || '').trim();
    const audience = $('audience').value;
    const language = $('language').value;
    const tone = $('tone').value;
    const contentType = $('contentType').value;
    const depth = $('depth').value;
    const length = $('length').value;
    const targets = lines($('targets').value, 10);
    const anchors = lines($('anchors').value, 10);
    const pubs = lines($('pubs').value, 10);
    const model = 'gpt-4o-mini';

    if(!targets.length && !niche){ alert('Add niche or at least one target URL.'); return; }

    function buildPrompt({ domain, niche, audience, language, tone, contentType, depth, length, targets, anchors, pubs }) {
      const topics = targets.length ? targets.map(slugToTopic) : (niche ? [niche] : ['growth']);
      const publications = pubs.length ? pubs : ['businessinsider.com','techradar.com','zapier.com/blog'];
      const preferredAnchor = anchors[0] || 'brand name';
      const languageNames = {
        'en': 'English','de': 'German (Deutsch)','fr': 'French (Français)','es': 'Spanish (Español)',
        'it': 'Italian (Italiano)','pt': 'Portuguese (Português)','pl': 'Polish (Polski)','nl': 'Dutch (Nederlands)','uk': 'Ukrainian (Українська)'
      };
      const contentTypeNames = {
        'article': 'Article','listicle': 'Listicle','tutorial': 'Tutorial','review': 'Review','case-study': 'Case Study','news': 'News'
      };
      return JSON.stringify({
        brand: { domain, niche, audience, voice: tone, content_type: contentType, depth, length },
        inputs: { topics, targets, anchors, publications },
        constraints: {
          language: languageNames[language] || 'English',
          content_type: contentTypeNames[contentType] || 'Article',
          forbidden_topics: ['adult', 'casino', 'crypto'],
          anchor_policy: `Use anchors only from list; ensure at least one H2/title includes a provided anchor verbatim, woven naturally; default "${preferredAnchor}" if uncertain`,
          link_policy: '1 contextual, non-affiliate link insert that helps the reader; no promotional tone',
          outline_policy: [
            'Create 5-8 H2 sections that flow: context -> key insights -> examples -> practical takeaways',
            "Avoid generic headers such as 'Introduction' or 'Conclusion'; keep H2s descriptive and benefit-led",
            'Allow H3 only for subpoints or comparisons',
            'Include a section with a real-world example, mini case study, or data point',
            contentType === 'listicle'
              ? 'Use numbered structure within the outline where relevant'
              : 'Maintain a narrative arc suitable for long-form editorial'
          ].join(' | '),
          style_notes: [
            'No fluff; show frameworks, metrics, or benchmarks',
            'Say where data, quotes, or examples would be placed (no fabricated stats)',
            'Subject lines clear, not clickbait',
            'Ensure anchors feel editorial and relevant to the publication'
          ]
        },
        deliverable: {
          per_publication: 1,
          total_min: Math.min(3, publications.length),
          fields: ['publication','title','angle','outline','proposed_anchor','target_url','why','pitch']
        }
      });
    }

    const prompt = buildPrompt({domain,niche,audience,language,tone,contentType,depth,length,targets,anchors,pubs});

    try{
      overlayShow(); renderSkeletons(4);
      controller = new AbortController();
      timeoutId = setTimeout(()=>{ if(controller){ controller.abort(); } }, 120000);
      overlayUpdate('call');
      const out = await callOpenAI({ model:model, prompt:prompt, signal:controller.signal });
      overlayUpdate('parse');
      lastIdeas = (out && Array.isArray(out.ideas)) ? out.ideas : [];
      if(!lastIdeas.length){ throw new Error('The model returned no ideas.'); }
      if(timeoutId){ clearTimeout(timeoutId); timeoutId = null; }
      controller = null;
      overlayUpdate('render');
      $('kpis').style.display='grid'; $('kCount').textContent=String(lastIdeas.length); $('kLen').textContent=length; $('kAnchor').textContent=(anchors[0]||'brand name');
      $('tabs').style.display='flex';
      renderIdeas(lastIdeas);
      $('btnRegen').disabled=false;
      await generatePitchesForIdeas({ domain, niche, audience, language, tone, contentType, targets, anchors, publications: pubs }, lastIdeas);
    }catch(err){ alert(err && err.message ? err.message : String(err)); }
    finally{ overlayHide(); if(timeoutId){ clearTimeout(timeoutId); timeoutId=null; } }
  });

  const pitchResultLegacy = null; // already handled above

  function buildPitchBrief({ domain, niche, audience, language, tone, contentType, targets, anchors, publications, idea }){
    const normalizedDomain = normalizeDomain(domain);
    const languageNames = { en:'English', de:'German', fr:'French', es:'Spanish', it:'Italian', pt:'Portuguese', pl:'Polish', nl:'Dutch', uk:'Ukrainian' };
    const languageLabel = languageNames[language] || language || 'English';
    const contentTypeNames = { 'article':'article','listicle':'listicle','tutorial':'tutorial','review':'review','case-study':'case study','news':'news article' };
    const formatList = (items, fallback) => (items && items.length ? items.join(', ') : fallback);
    const ideaSummary = idea
      ? [
          idea.title ? `Title: ${idea.title}` : '',
          idea.angle ? `Angle: ${idea.angle}` : '',
          idea.publication ? `Publication: ${idea.publication}` : '',
          idea.target_url ? `Target URL: ${idea.target_url}` : '',
          idea.proposed_anchor ? `Anchor: ${idea.proposed_anchor}` : ''
        ].filter(Boolean).join(' | ')
      : 'no idea provided';
    const primaryPublication = idea && idea.publication ? idea.publication : (publications[0] || '');
    const subjectFocus = primaryPublication
      ? `Reference ${primaryPublication} or its readers`
      : idea && idea.title
        ? `Highlight "${idea.title}"`
        : anchors[0]
          ? `Work in ${anchors[0]}`
          : 'Make it specific to the idea';
    const openingReference = idea && idea.target_url ? idea.target_url : (primaryPublication || targets[0] || domain || 'their site');
    const complimentCue = idea && idea.angle
      ? `Mention how their coverage on ${idea.angle.toLowerCase()} resonated`
      : niche
        ? `Compliment their recent coverage on ${niche}`
        : 'Compliment a recent article or theme that matches the pitch';
    const credibilityHint = niche
      ? `Reference a recent win, project, or insight in ${niche}`
      : `Mention one proof point about ${normalizedDomain || 'our brand'} (project, data point, partnership)`;

    return [
      'Please craft a short guest post outreach email using these inputs:',
      `Domain: ${normalizedDomain || 'not specified'}`,
      `Niche: ${niche || 'general marketing'}`,
      `Audience: ${audience || 'B2B'}`,
      `Language: ${languageLabel}`,
      `Tone: ${tone || 'friendly'}`,
      `Content type: ${contentTypeNames[contentType] || 'article'}`,
      `Targets: ${formatList(targets, 'none provided')}`,
      `Anchors: ${formatList(anchors, 'none provided')}`,
      `Publications: ${formatList(publications, 'none provided')}`,
      `Article idea: ${ideaSummary || 'no idea provided'}`,
      `Subject focus: ${subjectFocus}; keep it under 6 words; no generic "Guest Post Idea" phrasing.`,
      `Opening cue: Reference ${openingReference} in the first sentence so it feels personal.`,
      `Compliment cue: ${complimentCue}.`,
      `Credibility cue: ${credibilityHint}.`,
      'Forbidden openings: never use "I hope this finds you well" or "Hope you\'s doing well".',
      '',
      `Write the email as if you represent ${normalizedDomain || 'our brand'} and want to contribute a valuable, relevant guest post to the listed publication(s).`
    ].join('\n');
  }

  async function generatePitchesForIdeas(context, ideas){
    if(!ideas || !ideas.length) return;
    overlayUpdate('pitch');
    const model = 'gpt-4o-mini';
    for(let idx = 0; idx < ideas.length; idx++){
      const idea = ideas[idx];
      if(!idea){ continue; }
      setPitchLoadingState(idx);
      try{
        controller = new AbortController();
        timeoutId = setTimeout(()=>{ if(controller){ controller.abort(); } }, 120000);
        const prompt = buildPitchBrief({ ...context, idea });
        const out = await callOpenAIWithSystem({ model, systemPrompt: SYSTEM_PROMPT_PITCH, prompt, signal: controller.signal });
        if(!out || !out.subject || !out.email){ throw new Error('The model returned no pitch.'); }
        setPitchResultState(idx, out.subject, out.email);
      }catch(err){
        if(err && err.name === 'AbortError'){
          setPitchErrorState(idx, 'Pitch generation cancelled.');
          break;
        }
        console.error('Pitch generation failed:', err);
        setPitchErrorState(idx, err && err.message ? err.message : 'Failed to generate pitch email.');
      }finally{
        if(timeoutId){ clearTimeout(timeoutId); timeoutId = null; }
        controller = null;
      }
    }
  }

  $('btnCopyTable').addEventListener('click', async () => {
    if (!lastIdeas.length) {
      alert('No ideas to copy. Generate ideas first.');
      return;
    }
    const table = ideasToMarkdownTable(lastIdeas);
    try {
      await navigator.clipboard.writeText(table);
      const btn = $('btnCopyTable');
      const originalHTML = btn.innerHTML;
      btn.innerHTML = '<span>✅</span> Copied!';
      setTimeout(() => {
        btn.innerHTML = originalHTML;
      }, 2000);
    } catch (err) {
      console.error('Failed to copy:', err);
      alert('Failed to copy to clipboard. Please try again.');
    }
  });

  $('btnExportCSV').addEventListener('click', () => {
    if (!lastIdeas.length) {
      alert('No ideas to export. Generate ideas first.');
      return;
    }
    const csv = ideasToCSV(lastIdeas);
    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    const url = URL.createObjectURL(blob);
    const domain = normalizeDomain($('myDomain').value);
    const timestamp = new Date().toISOString().slice(0, 10);
    const filename = `guest-post-ideas-${domain}-${timestamp}.csv`;

    link.setAttribute('href', url);
    link.setAttribute('download', filename);
    link.style.visibility = 'hidden';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);

    const btn = $('btnExportCSV');
    const originalHTML = btn.innerHTML;
    btn.innerHTML = '<span>✅</span> Downloaded!';
    setTimeout(() => {
      btn.innerHTML = originalHTML;
    }, 2000);
  });

  const SYSTEM_PROMPT = `
You are “Insert.link — Senior Digital PR Strategist”.
Goal: generate guest-post suggestions that naturally create an editorial context for a single link insert.

OUTPUT: One JSON object ONLY with key "ideas": [
  {
    "publication": "string",
    "title": "≤80 chars, Title Case, no clickbait",
    "angle": "one-line positioning",
    "outline": ["H2: ...","H2: ...","H3: ..."],
    "proposed_anchor": "from provided anchors; prefer brand/partial; exact only if truly natural",
    "target_url": "one of provided targets",
    "why": [
      "Topical fit & audience benefit",
      "Editorial context: where link sits (e.g., H2 ‘Benchmarks’, paragraph 2)",
      "Authority/experience we bring",
      "Publication style compliance"
    ],
    "pitch": "120–160 words email. First line: Subject: …; body: concise, editorial, no SEO/AI jargon, no affiliate talk."
  }
]

POLICIES:
- Quality > volume; evidence-led, practical, novel angles.
- Match publication style (news/journal/blog).
- US English. Avoid adult/casino/crypto unless niche allows.
- Anchor mix guideline: exact ≤20%, partial 30–40%, brand 30%, URL 10%. Never invent anchors.
- Each idea must justify link placement in WHY (name section/paragraph).
Return JSON only. No markdown fences, no commentary.
`;

  const SYSTEM_PROMPT_PITCH = `
You are a professional outreach strategist who writes short, natural guest post pitches for link-building campaigns.

Your task is to generate a short email pitch (under 140 words) based on structured input fields provided by the frontend form.

Each field corresponds to user input:
- domain → the website of the sender (e.g., wmlinks.net)
- niche → the sender’s industry or topic focus
- audience → who the sender writes for (e.g., B2B, marketers, SaaS founders)
- language → email output language
- tone → writing tone (e.g., practical, friendly, expert)
- contentType → content format proposed (e.g., article, guide, case study)
- targets → list of target pages or URLs from the recipient site
- anchors → keywords or anchor texts suggested for the guest post
- publications → domains or brands to personalize the email
- idea → the article idea already generated by another model or module

GOAL:
Write a persuasive, friendly outreach email offering a guest post idea that fits the publication’s audience and shows clear topical alignment.

STYLE RULES:
- Max length: 140 words
- Format: short paragraphs with natural breaks
- Subject line: <=6 words, directly tied to the article’s theme (no generic "Guest Post Idea")
- Tone: friendly, confident, concise — never robotic or over-salesy
- Opening sentence must reference something relevant about the publication (recent coverage, an article theme, or their audience)
- Mention the article idea and its value to the target site
- Include one concise credibility cue about the sender (e.g., recent projects, data, expertise)
- Include only one clear call to action (e.g., "Would this fit your content plan?")
- Use confident, natural language; avoid phrases like "I'd love to contribute", "I hope this finds you well", or other filler
- One emoji allowed at most (optional)
- End with a realistic signature (e.g., "Best, {Name} from {Brand}")

OUTPUT:
Return only one valid JSON object, no markdown, no code fences, no commentary:
{
  "subject": "string",
  "email": "string"
}
`;

  async function callOpenAI({ model, prompt, signal }) {
    const payload = {
      model,
      messages: [
        { role: "system", content: SYSTEM_PROMPT.trim() },
        { role: "user", content: prompt }
      ],
      temperature: 0.7,
      response_format: { type: "json_object" }
    };
    const data = await postJsonToFirstWorkingEndpoint(payload, signal);
    return data;
  }

  async function callOpenAIWithSystem({ model, systemPrompt, prompt, signal }) {
    const payload = {
      model,
      messages: [
        { role: "system", content: (systemPrompt||'').trim() },
        { role: "user", content: prompt }
      ],
      temperature: 0.7,
      response_format: { type: "json_object" }
    };
    const data = await postJsonToFirstWorkingEndpoint(payload, signal);
    return data;
  }
})();
</script>
<?php get_footer(); ?>


