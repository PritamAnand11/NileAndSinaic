<?php
/**
 * ==========================================================================
 * © 2026 Niles & Sinai TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /Assets/Website/Contents/Landing/LC-SS-002.php
 * VERSION:    1.0.0
 * THEME:      Neon Edge (Cyberpunk) Light
 * FONT:       Manrope / Cormorant Garamond
 * DEPENDS ON: base.css + nav.php (already loaded)
 * ==========================================================================
 */
?>

<style>
/* ═══════════════════════════════════════════════════════════
   STATS SECTION — ORBITAL RINGS
═══════════════════════════════════════════════════════════ */
:root {
  --st-pad-y: clamp(64px, 9vw, 110px);
  --st-pad-x: clamp(20px, 6vw, 100px);
  --st-ring-sz:    clamp(168px, 20vw, 236px);
  --st-ring-gap:   clamp(24px,  3vw,  48px);
  --st-ease-spring: cubic-bezier(0.34,1.56,0.64,1);
  --st-ease-smooth: cubic-bezier(0.4,0,0.2,1);
}

/* ── SECTION SHELL ── */
.lc-stats-section {
  position: relative;
  padding: var(--st-pad-y) var(--st-pad-x);
  background: #fff;
  overflow: hidden;
  font-family: var(--lap-font, 'Manrope', sans-serif);
  isolation: isolate;
}

/* ── BACKGROUND TEXTURE ── */
.lc-stats-bg-dots {
  position: absolute;
  inset: 0;
  background-image: radial-gradient(circle, rgba(15,107,91,.35) 1px, transparent 1px);
  background-size: 28px 28px;
  pointer-events: none;
  z-index: 0;
  opacity: .55;
}
.lc-stats-bg-line-h {
  position: absolute;
  left: 0; right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(15,107,91,.4) 30%, rgba(15,107,91,.4) 70%, transparent);
  pointer-events: none;
  z-index: 0;
}
.lc-stats-bg-line-h:nth-child(2) { top: 0; }
.lc-stats-bg-line-h:nth-child(3) { bottom: 0; }

/* ── HEADER ── */
.lc-stats-head {
  position: relative; z-index: 2;
  text-align: center;
  margin-bottom: clamp(40px, 6vw, 72px);
}
.lc-stats-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: .65rem;
  font-weight: 700;
  letter-spacing: 3.5px;
  text-transform: uppercase;
  color: var(--lap-text-muted, #666);
  margin-bottom: 14px;
}
.lc-stats-eyebrow::before,
.lc-stats-eyebrow::after {
  content: '';
  display: block;
  width: 28px;
  height: 1.5px;
  background: var(--lap-neon-accent, #0F6B5B);
}
.lc-stats-title {
  font-size: clamp(1.7rem, 3.5vw, 3rem);
  font-weight: 700;
  letter-spacing: -1px;
  text-transform: uppercase;
  color: var(--lap-text-dark, #050505);
  line-height: 1.1;
}
.lc-stats-title em {
  font-style: normal;
  color: var(--lap-neon-accent, #0F6B5B);
  -webkit-text-stroke: .8px #7fa800;
}

/* ── GRID ── */
.lc-stats-grid {
  position: relative; z-index: 2;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: var(--st-ring-gap);
}

/* ── CONNECTOR LINE (desktop only) ── */
.lc-stats-connector {
  position: absolute;
  top: 50%;
  left: calc(var(--st-pad-x) + var(--st-ring-sz)/2 + 4px);
  right: calc(var(--st-pad-x) + var(--st-ring-sz)/2 + 4px);
  height: 1px;
  background: repeating-linear-gradient(90deg,
    rgba(15,107,91,.55) 0px, rgba(15,107,91,.55) 6px,
    transparent 6px, transparent 14px);
  z-index: 1;
  pointer-events: none;
  transform: translateY(-50%);
}
@media (max-width: 900px) { .lc-stats-connector { display: none; } }

/* ── STAT ORBIT ── */
.lc-stat-orbit {
  position: relative;
  width: var(--st-ring-sz);
  height: var(--st-ring-sz);
  flex-shrink: 0;
  cursor: default;
  /* entry animation */
  opacity: 0;
  transform: translateY(30px) scale(.9);
  transition: opacity .6s var(--st-ease-spring), transform .6s var(--st-ease-spring);
}
.lc-stat-orbit.is-visible {
  opacity: 1;
  transform: translateY(0) scale(1);
}
/* stagger */
.lc-stat-orbit:nth-child(1) { transition-delay: .0s; }
.lc-stat-orbit:nth-child(2) { transition-delay: .12s; }
.lc-stat-orbit:nth-child(3) { transition-delay: .24s; }
.lc-stat-orbit:nth-child(4) { transition-delay: .36s; }

/* ── SVG RINGS ── */
.lc-orbit-svg {
  position: absolute;
  inset: 0;
  width: 100%; height: 100%;
  overflow: visible;
}

/* RING 1 — outer dotted, spins CW */
.lc-ring-outer {
  fill: none;
  stroke: rgba(15,107,91,.55);
  stroke-width: 1.5;
  stroke-dasharray: 4 7;
  animation: spinCW 14s linear infinite;
  transform-origin: 50% 50%;
}
/* RING 2 — middle dashed, spins CCW */
.lc-ring-mid {
  fill: none;
  stroke: rgba(5,5,5,.1);
  stroke-width: 1;
  stroke-dasharray: 10 6;
  animation: spinCCW 20s linear infinite;
  transform-origin: 50% 50%;
}
/* RING 3 — inner solid, subtle */
.lc-ring-inner {
  fill: none;
  stroke: rgba(15,107,91,.18);
  stroke-width: .8;
}

/* Hover: speed up + glow */
.lc-stat-orbit:hover .lc-ring-outer {
  animation-duration: 4s;
  stroke: rgba(15,107,91,.9);
  stroke-width: 2;
  filter: drop-shadow(0 0 6px rgba(15,107,91,.7));
}
.lc-stat-orbit:hover .lc-ring-mid {
  animation-duration: 7s;
  stroke: rgba(5,5,5,.2);
}

@keyframes spinCW  { to { transform: rotate(360deg); } }
@keyframes spinCCW { to { transform: rotate(-360deg); } }

/* ── CORNER TICKS ── */
.lc-ring-tick {
  fill: var(--lap-neon-accent, #0F6B5B);
  animation: spinCW 14s linear infinite;
  transform-origin: 50% 50%;
}
.lc-stat-orbit:hover .lc-ring-tick { animation-duration: 4s; }

/* ── INNER DISC ── */
.lc-orbit-disc {
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%,-50%);
  width: 62%; height: 62%;
  border-radius: 50%;
  background: #fff;
  border: 1.5px solid var(--lap-border-color, #E5E5E5);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 4px;
  transition: border-color .3s, box-shadow .3s, background .3s;
  z-index: 2;
}
.lc-stat-orbit:hover .lc-orbit-disc {
  border-color: var(--lap-text-dark, #050505);
  background: var(--lap-text-dark, #050505);
  box-shadow: 0 0 24px rgba(15,107,91,.25);
}

/* Icon */
.lc-orbit-icon {
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 2px;
}
.lc-orbit-icon svg {
  width: clamp(18px, 2.2vw, 24px);
  height: clamp(18px, 2.2vw, 24px);
  stroke: var(--lap-neon-accent, #0F6B5B);
  fill: none;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: transform .35s var(--st-ease-spring);
}
.lc-stat-orbit:hover .lc-orbit-icon svg { transform: scale(1.2); }

/* Number */
.lc-orbit-num {
  font-size: clamp(1.3rem, 2.2vw, 1.8rem);
  font-weight: 800;
  color: var(--lap-text-dark, #050505);
  line-height: 1;
  letter-spacing: -1px;
  transition: color .3s;
}
.lc-stat-orbit:hover .lc-orbit-num { color: var(--lap-neon-accent, #0F6B5B); }
.lc-orbit-num sup {
  font-size: .5em;
  font-weight: 700;
  vertical-align: super;
  letter-spacing: 0;
}

/* Label */
.lc-orbit-label {
  font-size: clamp(.48rem, .7vw, .62rem);
  font-weight: 700;
  letter-spacing: 1.8px;
  text-transform: uppercase;
  color: var(--lap-text-muted, #666);
  text-align: center;
  line-height: 1.3;
  padding: 0 6px;
  transition: color .3s;
}
.lc-stat-orbit:hover .lc-orbit-label { color: rgba(15,107,91,.65); }

/* ── OUTER NODE DOTS (4 cardinal points) ── */
.lc-orbit-nodes {
  position: absolute;
  inset: 0;
  pointer-events: none;
  animation: spinCW 14s linear infinite;
  transform-origin: 50% 50%;
}
.lc-stat-orbit:hover .lc-orbit-nodes { animation-duration: 4s; }
.lc-orbit-node {
  position: absolute;
  width: 8px; height: 8px;
  border-radius: 50%;
  background: var(--lap-text-dark, #050505);
  border: 2px solid var(--lap-neon-accent, #0F6B5B);
  top: 50%; left: 50%;
  transform-origin: 0 0;
  transition: background .3s;
}
.lc-stat-orbit:hover .lc-orbit-node { background: var(--lap-neon-accent, #0F6B5B); }
/* Positioned around the outer ring */
.lc-orbit-node--n { transform: translate(-50%,calc(-1 * var(--st-ring-sz) / 2)); }
.lc-orbit-node--e { transform: translate(calc( var(--st-ring-sz) / 2 - 4px),-50%); }
.lc-orbit-node--s { transform: translate(-50%, calc( var(--st-ring-sz) / 2 - 8px)); }
.lc-orbit-node--w { transform: translate(calc(-1 * var(--st-ring-sz) / 2 + 4px),-50%); }

/* ── BOTTOM LABEL ── */
.lc-orbit-bottom-label {
  position: absolute;
  bottom: -30px;
  left: 50%;
  transform: translateX(-50%);
  font-size: .6rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--lap-text-muted, #666);
  white-space: nowrap;
  transition: color .3s;
}
.lc-stat-orbit:hover .lc-orbit-bottom-label { color: var(--lap-text-dark, #050505); }

/* ── CONNECTOR DOTS ── */
.lc-stats-conn-dot {
  width: 8px; height: 8px;
  border-radius: 50%;
  background: var(--lap-neon-accent, #0F6B5B);
  border: 2px solid var(--lap-text-dark, #050505);
  flex-shrink: 0;
  align-self: center;
  animation: connPulse 2s ease infinite;
}
.lc-stats-conn-dot:nth-child(2) { animation-delay: .5s; }
.lc-stats-conn-dot:nth-child(4) { animation-delay: 1s; }
@keyframes connPulse {
  0%,100% { box-shadow: 0 0 0 0 rgba(15,107,91,.6); }
  50%      { box-shadow: 0 0 0 6px rgba(15,107,91,0); }
}
@media (max-width: 900px) { .lc-stats-conn-dot { display: none; } }

/* ── BOTTOM BADGE STRIP ── */
.lc-stats-footer {
  position: relative; z-index: 2;
  margin-top: clamp(44px, 6vw, 70px);
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}
.lc-stats-trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  background: var(--lap-text-dark, #050505);
  color: var(--lap-neon-accent, #0F6B5B);
  padding: 7px 18px;
  font-size: .58rem;
  font-weight: 700;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  border-radius: 4px;
  position: relative;
  overflow: hidden;
  transition: box-shadow .25s, transform .2s var(--st-ease-spring);
}
.lc-stats-trust-badge:hover {
  box-shadow: 0 0 16px rgba(15,107,91,.45), 0 0 32px rgba(15,107,91,.2);
  transform: translateY(-3px);
}
.lc-stats-trust-badge::after {
  content: '';
  position: absolute; top: 0; left: -100%; width: 50%; height: 100%;
  background: linear-gradient(90deg, transparent, rgba(15,107,91,.15), transparent);
  animation: cyber-scan 3.5s infinite linear;
}
.lc-stats-trust-badge .dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--lap-neon-accent, #0F6B5B);
  animation: blink 1.8s ease infinite;
}
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }
.lc-stats-sep {
  width: 1px; height: 20px;
  background: var(--lap-border-color, #E5E5E5);
}
@media (max-width: 600px) { .lc-stats-sep { display: none; } }

/* ── COUNTER ANIMATION ── */
.lc-count-up { display: inline; }

/* ── RESPONSIVE ── */
@media (max-width: 900px) {
  .lc-stats-grid {
    gap: clamp(18px, 4vw, 36px);
  }

}
@media (max-width: 540px) {
  :root { --st-ring-sz: 148px; }
  .lc-stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px 12px;
    justify-items: center;
  }
  .lc-orbit-bottom-label { font-size: .52rem; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     STATS SECTION HTML
═══════════════════════════════════════════════════════ -->
<section class="lc-stats-section" id="lcStats" aria-label="Niles & Sinai Impact Numbers">

  <!-- Background texture -->
  <div class="lc-stats-bg-dots" aria-hidden="true"></div>
  <div class="lc-stats-bg-line-h" aria-hidden="true"></div>
  <div class="lc-stats-bg-line-h" aria-hidden="true"></div>

  <!-- Header -->
  <header class="lc-stats-head">
    <div class="lc-stats-eyebrow">Numbers That Speak</div>
    <h2 class="lc-stats-title">Our <em>Craft</em> In Numbers</h2>
  </header>

  <!-- Grid + connector dots -->
  <div class="lc-stats-grid" role="list">

    <!-- ORBIT 1 — Products Sold -->
    <div class="lc-stat-orbit" role="listitem" aria-label="5000+ Pieces Sold">

      <svg class="lc-orbit-svg" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Outer dotted ring -->
        <circle class="lc-ring-outer" cx="120" cy="120" r="115"/>
        <!-- Mid dashed ring -->
        <circle class="lc-ring-mid"   cx="120" cy="120" r="100"/>
        <!-- Inner subtle ring -->
        <circle class="lc-ring-inner" cx="120" cy="120" r="86"/>
        <!-- Arc segment accent -->
        <path d="M 120,5 A 115,115 0 0,1 235,120"
              stroke="rgba(15,107,91,.7)" stroke-width="2.5"
              stroke-dasharray="none" fill="none"
              style="animation: spinCW 14s linear infinite; transform-origin:50% 50%;"/>
        <!-- Tick marks at 90° intervals -->
        <circle class="lc-ring-tick" cx="120" cy="5"   r="4"/>
        <circle class="lc-ring-tick" cx="235" cy="120" r="4"/>
        <circle class="lc-ring-tick" cx="120" cy="235" r="4"/>
        <circle class="lc-ring-tick" cx="5"   cy="120" r="4"/>
      </svg>

      <!-- Cardinal node dots (CSS animated) -->
      <div class="lc-orbit-nodes" aria-hidden="true">
        <span class="lc-orbit-node lc-orbit-node--n"></span>
        <span class="lc-orbit-node lc-orbit-node--e"></span>
        <span class="lc-orbit-node lc-orbit-node--s"></span>
        <span class="lc-orbit-node lc-orbit-node--w"></span>
      </div>

      <!-- Inner disc content -->
      <div class="lc-orbit-disc">
        <div class="lc-orbit-icon">
          <!-- Gem icon -->
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 3h12l4 6-10 12L2 9z"/><path d="M2 9h20"/><path d="M12 21 8 9l2-6"/><path d="m12 21 4-12-2-6"/>
          </svg>
        </div>
        <div class="lc-orbit-num">
          <span class="lc-count-up" data-target="5000" data-suffix="+" data-prefix="">0</span>
        </div>
        <div class="lc-orbit-label">Pieces<br>Sold</div>
      </div>

      <div class="lc-orbit-bottom-label">Orders Fulfilled</div>
    </div>

    <!-- CONNECTOR DOT -->
    <div class="lc-stats-conn-dot" aria-hidden="true"></div>

    <!-- ORBIT 2 — Pincodes Delivered -->
    <div class="lc-stat-orbit" role="listitem" aria-label="800+ Pincodes Delivered">

      <svg class="lc-orbit-svg" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle class="lc-ring-outer" cx="120" cy="120" r="115"
                style="stroke:rgba(15,107,91,.6); stroke-dasharray:6 5;"/>
        <circle class="lc-ring-mid"   cx="120" cy="120" r="100"
                style="stroke-dasharray:3 9; animation-duration:16s;"/>
        <circle class="lc-ring-inner" cx="120" cy="120" r="86"/>
        <path d="M 120,235 A 115,115 0 0,1 5,120"
              stroke="rgba(15,107,91,.7)" stroke-width="2.5" fill="none"
              style="animation: spinCCW 14s linear infinite; transform-origin:50% 50%;"/>
        <circle class="lc-ring-tick" cx="120" cy="5"   r="4"
                style="animation: spinCCW 14s linear infinite;"/>
        <circle class="lc-ring-tick" cx="235" cy="120" r="4"
                style="animation: spinCCW 14s linear infinite;"/>
        <circle class="lc-ring-tick" cx="120" cy="235" r="4"
                style="animation: spinCCW 14s linear infinite;"/>
        <circle class="lc-ring-tick" cx="5"   cy="120" r="4"
                style="animation: spinCCW 14s linear infinite;"/>
      </svg>

      <div class="lc-orbit-nodes" aria-hidden="true"
           style="animation-name:spinCCW; animation-duration:14s;">
        <span class="lc-orbit-node lc-orbit-node--n"></span>
        <span class="lc-orbit-node lc-orbit-node--e"></span>
        <span class="lc-orbit-node lc-orbit-node--s"></span>
        <span class="lc-orbit-node lc-orbit-node--w"></span>
      </div>

      <div class="lc-orbit-disc">
        <div class="lc-orbit-icon">
          <!-- Pin / map icon -->
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C8.69 2 6 4.69 6 8c0 5.25 6 14 6 14s6-8.75 6-14c0-3.31-2.69-6-6-6z"/>
            <circle cx="12" cy="8" r="2.5"/>
          </svg>
        </div>
        <div class="lc-orbit-num">
          <span class="lc-count-up" data-target="800" data-suffix="+" data-prefix="">0</span>
        </div>
        <div class="lc-orbit-label">Pincodes<br>Delivered</div>
      </div>

      <div class="lc-orbit-bottom-label">Pan-India Reach</div>
    </div>

    <!-- CONNECTOR DOT -->
    <div class="lc-stats-conn-dot" aria-hidden="true"></div>

    <!-- ORBIT 3 — CO2 Reduced -->
    <div class="lc-stat-orbit" role="listitem" aria-label="320+ Custom Designs Crafted">

      <svg class="lc-orbit-svg" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle class="lc-ring-outer" cx="120" cy="120" r="115"
                style="stroke:rgba(15,107,91,.5); stroke-dasharray:2 6;"/>
        <circle class="lc-ring-mid"   cx="120" cy="120" r="100"
                style="stroke-dasharray:14 5; animation-duration:24s;"/>
        <circle class="lc-ring-inner" cx="120" cy="120" r="86"/>
        <!-- Double arc segments -->
        <path d="M 120,5 A 115,115 0 0,1 200,172"
              stroke="rgba(15,107,91,.65)" stroke-width="2.5" fill="none"
              style="animation: spinCW 18s linear infinite; transform-origin:50% 50%;"/>
        <path d="M 120,235 A 115,115 0 0,1 40,68"
              stroke="rgba(15,107,91,.35)" stroke-width="1.5" fill="none"
              style="animation: spinCW 18s linear infinite; transform-origin:50% 50%;"/>
        <circle class="lc-ring-tick" cx="120" cy="5"   r="4"
                style="animation-duration:18s;"/>
        <circle class="lc-ring-tick" cx="235" cy="120" r="4"
                style="animation-duration:18s;"/>
        <circle class="lc-ring-tick" cx="120" cy="235" r="4"
                style="animation-duration:18s;"/>
        <circle class="lc-ring-tick" cx="5"   cy="120" r="4"
                style="animation-duration:18s;"/>
      </svg>

      <div class="lc-orbit-nodes" aria-hidden="true"
           style="animation-duration:18s;">
        <span class="lc-orbit-node lc-orbit-node--n"></span>
        <span class="lc-orbit-node lc-orbit-node--e"></span>
        <span class="lc-orbit-node lc-orbit-node--s"></span>
        <span class="lc-orbit-node lc-orbit-node--w"></span>
      </div>

      <div class="lc-orbit-disc">
        <div class="lc-orbit-icon">
          <!-- Sparkle / design icon -->
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2 14 9l7 2-7 2-2 7-2-7-7-2 7-2z"/>
          </svg>
        </div>
        <div class="lc-orbit-num">
          <span class="lc-count-up" data-target="320" data-suffix="+" data-prefix="">0</span>
        </div>
        <div class="lc-orbit-label">Custom<br>Designs</div>
      </div>

      <div class="lc-orbit-bottom-label">Ethically Sourced</div>
    </div>

    <!-- CONNECTOR DOT -->
    <div class="lc-stats-conn-dot" aria-hidden="true"></div>

    <!-- ORBIT 4 — Google Rating -->
    <div class="lc-stat-orbit" role="listitem" aria-label="4.9 Star Google Rating">

      <svg class="lc-orbit-svg" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle class="lc-ring-outer" cx="120" cy="120" r="115"
                style="stroke-dasharray:8 4;"/>
        <circle class="lc-ring-mid"   cx="120" cy="120" r="100"
                style="stroke-dasharray:5 8; animation-duration:22s;"/>
        <circle class="lc-ring-inner" cx="120" cy="120" r="86"/>
        <path d="M 235,120 A 115,115 0 0,1 120,235"
              stroke="rgba(15,107,91,.7)" stroke-width="3" fill="none"
              style="animation: spinCCW 10s linear infinite; transform-origin:50% 50%;"/>
        <circle class="lc-ring-tick" cx="120" cy="5"   r="5" fill="rgba(15,107,91,.9)"
                style="animation: spinCCW 10s linear infinite; filter:drop-shadow(0 0 4px rgba(15,107,91,1));"/>
        <circle class="lc-ring-tick" cx="235" cy="120" r="4"
                style="animation: spinCCW 10s linear infinite;"/>
        <circle class="lc-ring-tick" cx="120" cy="235" r="4"
                style="animation: spinCCW 10s linear infinite;"/>
        <circle class="lc-ring-tick" cx="5"   cy="120" r="4"
                style="animation: spinCCW 10s linear infinite;"/>
      </svg>

      <div class="lc-orbit-nodes" aria-hidden="true"
           style="animation-name:spinCCW; animation-duration:10s;">
        <span class="lc-orbit-node lc-orbit-node--n"></span>
        <span class="lc-orbit-node lc-orbit-node--e"></span>
        <span class="lc-orbit-node lc-orbit-node--s"></span>
        <span class="lc-orbit-node lc-orbit-node--w"></span>
      </div>

      <div class="lc-orbit-disc">
        <div class="lc-orbit-icon">
          <!-- Star icon -->
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
          </svg>
        </div>
        <div class="lc-orbit-num">
          <span class="lc-count-up" data-target="4.9" data-suffix="★" data-prefix="" data-decimals="1">0</span>
        </div>
        <div class="lc-orbit-label">Google<br>Rating</div>
      </div>

      <div class="lc-orbit-bottom-label">Verified Reviews</div>
    </div>

  </div><!-- /grid -->

  <!-- Trust badges strip -->
  <div class="lc-stats-footer" role="list" aria-label="Trust Badges">
    <div class="lc-stats-trust-badge" role="listitem">
      <span class="dot"></span> GIA Certified
    </div>
    <div class="lc-stats-sep" aria-hidden="true"></div>
    <div class="lc-stats-trust-badge" role="listitem">
      <span class="dot"></span> Lifetime Warranty
    </div>
    <div class="lc-stats-sep" aria-hidden="true"></div>
    <div class="lc-stats-trust-badge" role="listitem">
      <span class="dot"></span> Free Delivery
    </div>
    <div class="lc-stats-sep" aria-hidden="true"></div>
    <div class="lc-stats-trust-badge" role="listitem">
      <span class="dot"></span> Secure Payments
    </div>
    <div class="lc-stats-sep" aria-hidden="true"></div>
    <div class="lc-stats-trust-badge" role="listitem">
      <span class="dot"></span> 24hr Support
    </div>
  </div>

</section>

<!-- ═══════════════════════════════════════════════════════
     STATS JAVASCRIPT
═══════════════════════════════════════════════════════ -->
<script>
(function () {
'use strict';

/* ── Intersection Observer → entry animation ── */
const orbits = document.querySelectorAll('.lc-stat-orbit');

const io = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      io.unobserve(entry.target);
    }
  });
}, { threshold: 0.25 });

orbits.forEach(o => io.observe(o));

/* ── Count-up animation ── */
function animateCount(el) {
  const target   = parseFloat(el.dataset.target);
  const suffix   = el.dataset.suffix   || '';
  const decimals = parseInt(el.dataset.decimals || '0', 10);
  const duration = 1800; // ms
  const start    = performance.now();

  function tick(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);
    // ease-out-expo
    const eased = 1 - Math.pow(2, -10 * progress);
    const val   = target * eased;
    el.textContent = (decimals > 0 ? val.toFixed(decimals) : Math.floor(val)) + suffix;
    if (progress < 1) requestAnimationFrame(tick);
    else el.textContent = (decimals > 0 ? target.toFixed(decimals) : Math.floor(target)) + suffix;
  }
  requestAnimationFrame(tick);
}

/* Start count-up when orbit becomes visible */
const countEls = document.querySelectorAll('.lc-count-up');
const countIO = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateCount(entry.target);
      countIO.unobserve(entry.target);
    }
  });
}, { threshold: 0.4 });

countEls.forEach(el => countIO.observe(el));

/* ── Respect reduced-motion ── */
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  document.querySelectorAll('.lc-ring-outer, .lc-ring-mid, .lc-ring-tick, .lc-orbit-nodes')
    .forEach(el => el.style.animationPlayState = 'paused');
}

})();
</script>