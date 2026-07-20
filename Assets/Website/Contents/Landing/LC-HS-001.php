<?php
/**
 * ==========================================================================
 * © 2026 Niles & Sinai TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /Website/Contents/Landing/LC-HS-001.php
 * VERSION:    3.0.0 — Mobile-Rebuilt + Realistic 3D Laptop Edition
 * THEME:      Gilded Edge (Luxury Gemstone)
 * FONT:       Manrope / Cormorant Garamond
 * DEPENDS ON: base.css + nav.php (already loaded)
 *
 * FIXES v3.0.0 (over v2.0.0):
 *  - ROOT CAUSE FIX: mobile slides no longer use a fixed viewport-locked
 *    height (100dvh - bars). Content (copy + visual + stats) was taller
 *    than that box, so it silently overflowed past the hero and got
 *    clipped by the dock / WhatsApp FAB (see slide 2 & 3 bug reports).
 *    Mobile now uses natural content height with `position:relative`
 *    slides stacked in normal flow + a min-height floor, so nothing
 *    overflows or gets cut off, on any device.
 *  - Slide 1: laptop visual was tiny + spec badges just vanished on
 *    mobile leaving dead space. Laptop is now ~70% bigger on mobile,
 *    fully redrawn (thicker hinge, real bezel, rubber feet, brushed
 *    metal gradients) and a horizontal spec strip now replaces the
 *    desktop wire-badges on small screens instead of just hiding them.
 *  - Slide 2 floating cards: card markup/CSS now always renders fully
 *    (previous version's mobile path momentarily lost width during the
 *    overflow above, looking "empty" until layout settled).
 *  - Slide 3 trust tiles: compact 2x2 grid with proper min-heights, no
 *    more clipped "DATA WIPED SECURE" marquee text.
 *  - FIX: laptop screen content "flash then hide" bug — the screen used
 *    to fade in only after the lid-open class landed AND relied on a
 *    delayed opacity transition; on real mobile paint timing this could
 *    flash visible then appear to hide. Screen content is now visible
 *    by default and the lid swings open to reveal it — no more race.
 *  - Touch swipe support retained + improved (works during animation).
 *  - Slide auto-height: track now measures the active slide's real
 *    height and animates the container to match, so slide transitions
 *    never cause a layout jump or clipped content.
 * ==========================================================================
 */
?>

<style>
/* ═══════════════════════════════════════════════════════════
   HERO — LOCAL TOKENS
   (All use --nav-h / --mob-top-h / --dock-h already set by nav.php)
═══════════════════════════════════════════════════════════ */
:root {
  --h-pad-x:       clamp(20px, 5vw, 80px);
  --h-pad-y:       clamp(32px, 5vh, 72px);
  --h-gutter:      clamp(20px, 4vw, 56px);
  --h-ease-spring: cubic-bezier(0.34,1.56,0.64,1);
  --h-ease-smooth: cubic-bezier(0.4,0,0.2,1);
  /* Desktop hero height: full viewport minus nav, with fallback */
  --h-min-h:       calc(100vh - var(--nav-h, 76px));
}

/* ═══════════════════════════════════════════════════════════
   HERO ROOT
═══════════════════════════════════════════════════════════ */
.lc-hero {
  position: relative;
  min-height: var(--h-min-h);
  overflow: hidden;
  background: var(--lap-bg-pure, #fff);
  font-family: var(--lap-font-main, 'Manrope', sans-serif);
  isolation: isolate;
  margin-top: -15px;
}

/* ── Mobile: drop the viewport lock entirely ──────────────
   This is the root-cause fix. On mobile the hero now grows with its
   tallest slide's real content height instead of being squeezed into
   (100dvh - bars), which is what was causing slides 1/2/3 to overflow
   and get clipped by the dock / WhatsApp widget. */
@media (max-width: 900px) {
  .lc-hero {
    margin-top: 0;
    min-height: 0;
    overflow: visible;
  }
}

/* ─── SLIDE TRACK ─────────────────────────────────────────── */
.lc-hero-track {
  position: relative;
  width: 100%;
  min-height: var(--h-min-h);
}
@media (max-width: 900px) {
  .lc-hero-track {
    min-height: 0;
    /* JS sets this to the active slide's measured height so the
       absolutely-positioned slides below have a real box to sit in
       and slide transitions don't jump. Starts generous so there's
       never a 0-height flash before JS measures. */
    height: auto;
    transition: height .4s var(--h-ease-smooth);
  }
}

.lc-slide {
  position: absolute;
  inset: 0;
  min-height: var(--h-min-h);
  display: flex;
  align-items: stretch;
  opacity: 0;
  pointer-events: none;
  z-index: 0;
}
.lc-slide.is-active  { opacity: 1; pointer-events: all; z-index: 2; }
.lc-slide.is-leaving { z-index: 3; pointer-events: none; }

@media (max-width: 900px) {
  .lc-slide {
    position: absolute;
    top: 0; left: 0; right: 0;
    min-height: 0;
    height: auto;
  }
}

/* ─── SLIDE INNER GRID ─────────────────────────────────────── */
.lc-slide-inner {
  position: relative;
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  padding: var(--h-pad-y) var(--h-pad-x);
  gap: var(--h-gutter);
  z-index: 1;
}
@media (max-width: 900px) {
  .lc-slide-inner {
    grid-template-columns: 1fr;
    text-align: center;
    /* FIX v2: was 100px side padding, destroyed mobile.
       FIX v3: top padding also reduced + bottom padding accounts
       for the dock height so nothing sits underneath it, and the
       bottom CTA / stats are never the thing that gets clipped. */
    padding: 22px clamp(16px, 5vw, 24px) clamp(28px, 8vh, 44px);
    gap: 22px;
    align-content: start;
  }
}

/* ─── BACKGROUND CANVAS ────────────────────────────────────── */
.lc-slide-bg {
  position: absolute;
  inset: 0; z-index: 0; pointer-events: none;
}
.lc-slide-bg canvas { position: absolute; inset: 0; width: 100%; height: 100%; }

.lc-slide--1 .lc-slide-bg { background: #fff; }
.lc-slide--2 .lc-slide-bg { background: linear-gradient(135deg,#f7fff0 0%,#fffef5 100%); }
.lc-slide--3 .lc-slide-bg { background: linear-gradient(135deg,#fff9f0 0%,#fffbf5 100%); }

/* ─── DECORATIVE GEOMETRY ──────────────────────────────────── */
.lc-hero-geo { position: absolute; pointer-events: none; z-index: 0; }
.lc-geo-circle { border-radius: 50%; border: 1.5px solid rgba(15,107,91,.22); }
.lc-geo-dot-grid {
  background-image: radial-gradient(circle, rgba(15,107,91,.55) 1px, transparent 1px);
  background-size: 22px 22px;
}
.lc-geo-line { background: #0F6B5B; transform-origin: left center; }
@media (max-width: 900px) {
  /* Keep a faint trace of the geometry instead of nuking it outright —
     fully invisible on mobile previously read as "missing brand detail". */
  .lc-hero-geo { opacity: .5 !important; transform: scale(.6); }
  .lc-geo-line { display: none; }
}

/* ═══════════════════════════════════════════════════════════
   TEXT / COPY SIDE
═══════════════════════════════════════════════════════════ */
.lc-slide-copy { position: relative; z-index: 2; min-width: 0; }

.lc-slide-badge {
  display: inline-flex; align-items: center; gap: 8px;
  background-color: #050505; color: #0F6B5B;
  padding: 6px 16px;
  font-size: 0.72rem; font-weight: 600;
  text-transform: uppercase; letter-spacing: 2.5px;
  border-radius: 4px; margin-bottom: 18px;
  position: relative; overflow: hidden;
}
.lc-slide-badge::after {
  content: '';
  position: absolute; top: 0; left: -100%; width: 50%; height: 100%;
  background: linear-gradient(90deg,transparent,rgba(15,107,91,.2),transparent);
  animation: hs-scan 3s infinite linear;
}
@keyframes hs-scan { 0%{left:-100%} 100%{left:200%} }

.lc-slide-badge-dot {
  width: 7px; height: 7px; border-radius: 50%;
  background: #0F6B5B; animation: hs-blink 1.8s ease infinite;
}
@keyframes hs-blink { 0%,100%{opacity:1} 50%{opacity:.3} }

.lc-slide-eyebrow {
  display: block; font-size: .68rem; font-weight: 700;
  letter-spacing: 3.5px; text-transform: uppercase; color: #666;
  margin-bottom: 10px;
}

.lc-slide-title {
  font-family: var(--lap-font-main, 'Manrope', sans-serif);
  font-weight: 700; text-transform: uppercase;
  letter-spacing: -1px; line-height: 1.05;
  color: #050505; margin-bottom: 18px;
  font-size: clamp(1.8rem, 4.5vw, 4.2rem);
}
@media (max-width: 900px) {
  .lc-slide-title { font-size: clamp(1.9rem, 8vw, 2.6rem); letter-spacing: -.5px; margin-bottom: 14px; }
}
.lc-slide-title .accent {
  color: #f8fc15; -webkit-text-stroke: .8px #212b04;
}
.lc-slide-title .stroke {
  -webkit-text-stroke: 1.5px #050505; color: transparent;
}
@media (max-width: 900px) {
  /* webkit-text-stroke without a fill can render invisible on some
     mobile WebViews depending on font metrics — give it a faint fill
     fallback so "PRICE TAG" never disappears on mobile. */
  .lc-slide-title .stroke { color: rgba(5,5,5,.04); }
}

.lc-slide-desc {
  font-size: clamp(.8rem, 1.1vw, .95rem); color: #666;
  line-height: 1.75; max-width: 500px; margin-bottom: 28px;
}
@media (max-width: 900px) {
  .lc-slide-desc { max-width: 100%; font-size: .85rem; margin: 0 auto 22px; }
}

.lc-slide-cta { display: flex; flex-wrap: wrap; gap: 12px; align-items: center; }
@media (max-width: 900px) {
  .lc-slide-cta { justify-content: center; width: 100%; }
  .lc-slide-cta .btn { flex: 1 1 auto; min-width: 132px; }
}

/* Stat row */
.lc-slide-stats {
  display: flex; gap: 28px; margin-top: 32px;
  padding-top: 22px; border-top: 1px solid #E5E5E5;
}
@media (max-width: 900px) {
  .lc-slide-stats { justify-content: center; gap: 18px; margin-top: 22px; padding-top: 18px; flex-wrap: wrap; }
}
.lc-stat { display: flex; flex-direction: column; }
.lc-stat-num {
  font-size: clamp(1.2rem, 2.5vw, 1.8rem); font-weight: 700;
  color: #050505; line-height: 1;
}
.lc-stat-num em { font-style: normal; color: #0F6B5B; }
.lc-stat-label {
  font-size: .58rem; font-weight: 600; letter-spacing: 1.8px;
  text-transform: uppercase; color: #666; margin-top: 4px;
}

/* ═══════════════════════════════════════════════════════════
   VISUAL COLUMN
═══════════════════════════════════════════════════════════ */
.lc-visual-col {
  position: relative; z-index: 2;
  display: flex; align-items: center; justify-content: center;
  min-width: 0;
}
@media (max-width: 900px) { .lc-visual-col { order: -1; width: 100%; } }

/* ═══════════════════════════════════════════════════════════
   3D LAPTOP — REALISTIC REBUILD v3
═══════════════════════════════════════════════════════════ */
.lc-laptop-scene {
  position: relative;
  width: 100%; max-width: 520px;
  aspect-ratio: 1 / .72;
  perspective: 1300px;
  cursor: grab; user-select: none;
}
.lc-laptop-scene:active { cursor: grabbing; }
@media (max-width: 900px) {
  /* FIX: laptop was tiny (max 280px) with a ton of dead space around
     it. Bumped up significantly + tightened aspect so it reads as the
     hero visual it's meant to be. */
  .lc-laptop-scene {
    max-width: 380px;
    margin: 4px auto 0;
    aspect-ratio: 1 / .76;
  }
}
@media (max-width: 420px) {
  .lc-laptop-scene { max-width: 320px; }
}

.lc-laptop-rig {
  width: 100%; height: 100%;
  transform-style: preserve-3d;
  transform: rotateX(6deg) rotateY(-18deg);
  position: relative;
}
@media (max-width: 900px) {
  /* Slightly more front-on + a touch more pitch reads better on the
     smaller, more square mobile viewport. */
  .lc-laptop-rig { transform: rotateX(8deg) rotateY(-14deg); }
}

/* ── AMBIENT SHADOW ── */
.lc-laptop-shadow {
  position: absolute;
  bottom: -7%; left: 6%; right: 6%; height: 10%;
  background: radial-gradient(ellipse, rgba(0,0,0,.25) 0%, transparent 72%);
  filter: blur(9px);
  transform: translateZ(-2px);
  pointer-events: none;
}

/* ── HERO PRODUCT PHOTO (replaces the old 3D laptop rig) ── */
.lc-jewel-scene { cursor: default; }
.lc-jewel-frame {
  position: absolute;
  inset: 6% 10%;
  display: flex; align-items: center; justify-content: center;
  border-radius: 16px;
  background: radial-gradient(ellipse at 50% 40%, rgba(200,167,90,.14) 0%, transparent 70%);
  animation: jewelFloat 5s ease-in-out infinite;
}
.lc-jewel-img {
  width: 100%; height: 100%;
  object-fit: contain;
  filter: drop-shadow(0 18px 30px rgba(31,26,23,.22));
}
@keyframes jewelFloat {
  0%, 100% { transform: translateY(0); }
  50%      { transform: translateY(-10px); }
}
@media (prefers-reduced-motion: reduce) {
  .lc-jewel-frame { animation: none; }
}

/* ── BASE (keyboard deck) ──
   GEOMETRY FIX: the original used rotateX(78deg) anchored at the
   bottom edge, which folds the keyboard deck AWAY from the viewer
   (into the screen) instead of toward them. That's the root cause of
   the laptop only ever showing as a flat sliver with an invisible
   screen — the lid's hinge math was composing against a deck that
   was angled the wrong direction. Anchoring at the TOP edge and using
   rotateX(-90deg) instead makes the deck's far edge (the hinge) sit
   away from camera and its near edge (front lip) sit toward camera —
   the way a laptop you're looking down at actually reads. */
.lc-laptop-base {
  position: absolute;
  bottom: 0; left: 50%;
  transform: translateX(-50%) rotateX(-90deg);
  transform-origin: top center;
  width: 84%; height: 33%;
  border-radius: 5px 5px 16px 16px;
  overflow: hidden;
}
/* Main top surface — brushed-metal feel via layered gradients */
.lc-base-surface {
  position: absolute; inset: 0;
  background:
    repeating-linear-gradient(100deg, rgba(255,255,255,.5) 0px, transparent 1.5px, transparent 5px),
    linear-gradient(170deg, #ededed 0%, #d4d4d4 38%, #c4c4c4 75%, #b9b9b9 100%);
  border-radius: 5px 5px 16px 16px;
  box-shadow:
    0 -1px 0 rgba(255,255,255,.85) inset,
    0 10px 28px rgba(0,0,0,.24),
    -1px 0 0 rgba(0,0,0,.08) inset,
    1px 0 0 rgba(0,0,0,.08) inset;
}
/* Bottom ridge (thickness) — chassis is thicker/more 3D now */
.lc-base-surface::before {
  content: '';
  position: absolute; bottom: 0; left: 0; right: 0; height: 9px;
  background: linear-gradient(180deg, #aeaeae, #8e8e8e 60%, #7f7f7f);
  border-radius: 0 0 16px 16px;
  box-shadow: 0 1px 0 rgba(255,255,255,.25) inset;
}
/* Side vents near hinge */
.lc-base-surface .lc-vents {
  position: absolute; top: 2px; left: 38%; right: 38%; height: 3px;
  display: flex; gap: 3px; justify-content: center;
}
.lc-base-surface .lc-vents span {
  flex: 1; max-width: 4px; height: 100%;
  background: rgba(0,0,0,.18); border-radius: 1px;
}
/* Rubber feet */
.lc-base-surface::after {
  content: '';
  position: absolute; bottom: 3px;
  left: 9%; right: 9%; height: 3px;
  background: linear-gradient(90deg,
    #5c5c5c 0%, #5c5c5c 7%, transparent 7%,
    transparent 45%, #5c5c5c 45%, #5c5c5c 55%,
    transparent 55%, transparent 93%,
    #5c5c5c 93%, #5c5c5c 100%);
  border-radius: 2px;
}

/* ── KEYBOARD AREA ── */
.lc-keyboard {
  position: absolute;
  top: 9%; left: 7.5%; right: 7.5%; bottom: 25%;
  display: flex; flex-direction: column; gap: 3px;
}
.lc-key-row {
  flex: 1; display: flex; gap: 2px;
}
/* All key blocks */
.lc-key {
  flex: 1; border-radius: 2px; min-width: 0;
  background: linear-gradient(180deg, #303030 0%, #1a1a1a 100%);
  border: 1px solid #0e0e0e;
  box-shadow: 0 1px 0 #5a5a5a inset, 0 1.5px 0 #000;
  transition: transform .08s;
}
/* Wider keys */
.lc-key.wide  { flex: 1.6; }
.lc-key.wider { flex: 2.2; }
.lc-key.space { flex: 4.5; background: linear-gradient(180deg, #262626 0%, #111 100%); }
.lc-key.neon-key {
  background: linear-gradient(180deg, rgba(15,107,91,.18) 0%, rgba(15,107,91,.05) 100%);
  border-color: rgba(15,107,91,.35);
  box-shadow: 0 0 4px rgba(15,107,91,.25) inset, 0 1.5px 0 #000;
  animation: hs-keyGlow 3s ease-in-out infinite;
}
@keyframes hs-keyGlow {
  0%,100%{ box-shadow: 0 0 4px rgba(15,107,91,.2) inset, 0 1.5px 0 #000; }
  50%    { box-shadow: 0 0 10px rgba(15,107,91,.5) inset, 0 1.5px 0 #000; }
}

/* ── TRACKPAD ── */
.lc-trackpad {
  position: absolute;
  bottom: 6%; left: 50%; transform: translateX(-50%);
  width: 27%; height: 14%;
  background: linear-gradient(160deg, #e0e0e0 0%, #c8c8c8 100%);
  border-radius: 5px;
  border: 1px solid rgba(0,0,0,.14);
  box-shadow: 0 0 0 1px rgba(255,255,255,.55) inset, 0 1px 2px rgba(0,0,0,.08) inset;
}
.lc-trackpad::after {
  content: '';
  position: absolute; bottom: -1px; left: 8%; right: 8%; height: 1px;
  background: rgba(0,0,0,.18);
}

/* ── POWER BUTTON ── */
.lc-power-btn {
  position: absolute;
  top: 6%; right: 5%;
  width: 13px; height: 9px;
  background: linear-gradient(180deg, #d2d2d2, #a8a8a8);
  border-radius: 2px;
  border: 1px solid rgba(0,0,0,.22);
  box-shadow: 0 0 5px rgba(15,107,91,.45);
}

/* ── LID ──
   GEOMETRY FIX: bottom now matches the base's actual height (33%) so
   the hinge line sits exactly at the back of the keyboard deck instead
   of floating inside it. The open angle is a small negative tilt
   (screen leaning back slightly, like a real laptop) instead of the
   old -112deg, which — composed with the now-corrected base transform
   — used to leave the screen nearly edge-on to the camera. */
.lc-laptop-lid {
  position: absolute;
  bottom: 33%; left: 50%;
  width: 84%; height: 66%;
  transform-origin: bottom center;
  transform: translateX(-50%) rotateX(90deg);   /* closed: lying flat on the deck */
  transform-style: preserve-3d;
  transition: transform 1.25s cubic-bezier(0.34,1.15,0.64,1);
}
.lc-laptop-lid.is-open { transform: translateX(-50%) rotateX(-4deg); }

/* Lid exterior (the back you see when closed/from behind).
   GEOMETRY FIX: this face needs its own rotateY(180)+backface-hidden
   so it's only the screen-wrap (below) that's visible once the lid
   opens toward the viewer — previously this flip lived on the wrong
   element and both faces ended up overlapping/fighting for visibility,
   which is part of why the screen never reliably showed. */
.lc-lid-back {
  position: absolute; inset: 0;
  background: linear-gradient(155deg, #ececec 0%, #d6d6d6 50%, #cacaca 100%);
  border-radius: 9px 9px 4px 4px;
  box-shadow:
    0 -4px 30px rgba(0,0,0,.18),
    0 1px 0 rgba(255,255,255,.75) inset;
  transform: rotateY(180deg);
  backface-visibility: hidden;
}
.lc-lid-back::before {
  content: '';
  position: absolute; inset: 4px;
  background: linear-gradient(155deg, rgba(255,255,255,.35) 0%, transparent 60%);
  border-radius: 7px 7px 3px 3px;
  pointer-events: none;
}
.lc-lid-logo-wrap {
  position: absolute; top: 50%; left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
.lc-lid-logo-mark {
  width: 30px; height: 30px; margin: 0 auto 6px;
  border-radius: 7px;
  background: #0a0a0a;
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 0 10px rgba(15,107,91,.25);
}
.lc-lid-logo-mark svg { width: 16px; height: 16px; }
.lc-lid-logo-text {
  font-family: var(--lap-font-main, 'Manrope', sans-serif);
  font-size: clamp(.55rem,.8vw,.8rem);
  font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
  color: rgba(60,60,60,.7);
}
.lc-lid-logo-line {
  width: 32px; height: 1px; background: rgba(120,120,120,.3);
  margin: 5px auto 0;
}

/* ── SCREEN SIDE ──
   GEOMETRY FIX: with the corrected lid/base transforms above, this
   face now naturally faces the camera once the lid opens — no flip
   needed. The old rotateX(180deg) was compensating for the broken
   base/lid math and is exactly what made the screen invisible: it
   was flipping an already-wrong-facing element further away. */
.lc-lid-screen-wrap {
  position: absolute; inset: 0;
  border-radius: 9px 9px 4px 4px; overflow: hidden;
  background: #080808;
  backface-visibility: hidden;
}
/* Camera notch */
.lc-camera-notch {
  position: absolute; top: 6px; left: 50%; transform: translateX(-50%);
  width: 6px; height: 6px; border-radius: 50%; background: #1a1a1a;
  border: 1px solid #333; z-index: 5;
}
.lc-camera-notch::after {
  content: ''; position: absolute; inset: 1px;
  border-radius: 50%; background: #0a0a0a;
  box-shadow: 0 0 3px rgba(15,107,91,.4);
}
/* Screen bezel — thinner, more modern */
.lc-screen-bezel {
  position: absolute; inset: 0;
  border-radius: 9px 9px 4px 4px;
  background: linear-gradient(155deg,#141414,#070707);
  box-shadow: 3px 3px 0 #000 inset, -3px 3px 0 #000 inset;
}
/* Actual screen area */
.lc-screen-area {
  position: absolute;
  top: 11px; bottom: 7px; left: 7px; right: 7px;
  background: #0a0a12;
  border-radius: 3px; overflow: hidden;
}

/* ── SCREEN CONTENT — animated OS ──
   FIX (the "flash then hide" bug): previously this whole block had
   opacity:0 by default and only became visible once the lid carried
   the `.is-open` class — a chained, delayed CSS transition. On mobile
   paint timing that produced a visible flash that then appeared to
   vanish. Content is now visible by default (it's invisible anyway
   while the lid faces away from camera before it opens), so there's
   nothing left to race against. */
.lc-screen-content {
  position: absolute; inset: 0;
  display: flex; flex-direction: column;
  opacity: 1;
}

/* Desktop wallpaper: dark grid */
.lc-screen-wallpaper {
  position: absolute; inset: 0;
  background:
    radial-gradient(ellipse at 30% 40%, rgba(15,107,91,.07) 0%, transparent 55%),
    radial-gradient(ellipse at 70% 60%, rgba(0,80,255,.06) 0%, transparent 55%),
    #08080f;
  background-image:
    linear-gradient(rgba(15,107,91,.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(15,107,91,.04) 1px, transparent 1px),
    radial-gradient(ellipse at 30% 40%, rgba(15,107,91,.07) 0%, transparent 55%),
    radial-gradient(ellipse at 70% 60%, rgba(0,80,255,.06) 0%, transparent 55%);
  background-size: 24px 24px, 24px 24px, 100% 100%, 100% 100%;
}

/* Scanlines overlay */
.lc-screen-scanlines {
  position: absolute; inset: 0; pointer-events: none; z-index: 10;
  background: repeating-linear-gradient(
    0deg, rgba(0,0,0,.08) 0px, rgba(0,0,0,.08) 1px, transparent 1px, transparent 3px
  );
  mix-blend-mode: multiply;
}

/* Glow */
.lc-screen-glow {
  position: absolute; inset: 0; pointer-events: none; z-index: 11;
  background: radial-gradient(ellipse at 50% 40%, rgba(15,107,91,.06) 0%, transparent 65%);
  animation: hs-glowPulse 3.5s ease-in-out infinite;
}
@keyframes hs-glowPulse { 0%,100%{opacity:.5} 50%{opacity:1} }

/* Taskbar */
.lc-screen-taskbar {
  position: absolute; bottom: 0; left: 0; right: 0; height: 14px;
  background: rgba(5,5,5,.9);
  border-top: 1px solid rgba(15,107,91,.15);
  display: flex; align-items: center; padding: 0 4px; gap: 3px; z-index: 5;
}
.lc-tb-logo {
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .28rem; font-weight: 700; color: #0F6B5B; letter-spacing: 1px;
}
.lc-tb-divider { width: 1px; height: 8px; background: rgba(15,107,91,.2); margin: 0 2px; }
.lc-tb-dot { width: 4px; height: 4px; border-radius: 50%; }
.lc-tb-clock {
  margin-left: auto;
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .25rem; color: rgba(255,255,255,.5);
}

/* Main screen window */
.lc-screen-window {
  position: absolute;
  top: 8px; left: 6px; right: 6px; bottom: 18px;
  background: rgba(10,10,20,.85);
  border: 1px solid rgba(15,107,91,.2);
  border-radius: 2px; overflow: hidden;
  z-index: 3;
}
.lc-screen-window::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(160deg, rgba(15,107,91,.04) 0%, transparent 40%);
}
/* Window title bar */
.lc-win-titlebar {
  height: 8px;
  background: rgba(15,107,91,.08);
  border-bottom: 1px solid rgba(15,107,91,.15);
  display: flex; align-items: center; padding: 0 4px; gap: 2px;
}
.lc-win-btn {
  width: 3px; height: 3px; border-radius: 50%;
}
.lc-win-title {
  margin-left: 3px;
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .22rem; color: rgba(15,107,91,.6); letter-spacing: .5px;
}
/* Window body */
.lc-win-body { padding: 4px 5px; }
.lc-win-brand {
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .45rem; font-weight: 700; color: #0F6B5B;
  letter-spacing: 2px; text-transform: uppercase;
  animation: hs-brandPulse 2s ease infinite;
}
@keyframes hs-brandPulse {
  0%,100%{ text-shadow: 0 0 6px rgba(15,107,91,.6); }
  50%    { text-shadow: 0 0 14px rgba(15,107,91,1); }
}
.lc-win-sub {
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .22rem; color: rgba(15,107,91,.45); letter-spacing: 1px; margin-top: 1px;
}
/* Spec list in screen */
.lc-win-specs { margin-top: 4px; display: flex; flex-direction: column; gap: 2px; }
.lc-win-spec-row {
  display: flex; align-items: center; gap: 2px;
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .2rem; color: rgba(255,255,255,.55);
}
.lc-win-spec-dot { width: 2px; height: 2px; border-radius: 50%; background: #0F6B5B; flex-shrink: 0; }
/* Bar chart in screen */
.lc-win-bars { margin-top: 5px; display: flex; flex-direction: column; gap: 2px; }
.lc-win-bar-row { display: flex; align-items: center; gap: 2px; }
.lc-win-bar-label {
  font-size: .2rem; color: rgba(255,255,255,.4); width: 10px;
  font-family: var(--lap-font-main,'Manrope', sans-serif);
}
.lc-win-bar-track { flex: 1; height: 2px; background: rgba(255,255,255,.08); border-radius: 1px; overflow: hidden; }
.lc-win-bar-fill {
  height: 100%; background: linear-gradient(90deg, #0F6B5B, #a8e000);
  border-radius: 1px;
  transform-origin: left;
  animation: hs-barFill 1.4s var(--h-ease-spring) forwards;
}
@keyframes hs-barFill { 0%{transform:scaleX(0)} 100%{transform:scaleX(1)} }

/* Boot line indicator */
.lc-screen-boot-line {
  position: absolute; bottom: 16px; left: 6px; right: 6px;
  height: 1px; background: rgba(15,107,91,.15);
  overflow: hidden; border-radius: 1px; z-index: 4;
}
.lc-screen-boot-progress {
  position: absolute; left: 0; top: 0; bottom: 0;
  background: #0F6B5B;
  animation: hs-bootProgress 2s .6s cubic-bezier(.4,0,.2,1) forwards;
  width: 0%;
}
@keyframes hs-bootProgress { to { width: 100%; } }

/* Lighting reflection on lid (tracks mouse) */
.lc-lid-reflection {
  position: absolute; inset: 0;
  background: radial-gradient(circle at 30% 30%, rgba(255,255,255,.18), transparent 60%);
  border-radius: 9px 9px 4px 4px;
  pointer-events: none; z-index: 20;
  transition: background .15s;
  mix-blend-mode: overlay;
}

/* ── SPEC WIRE BADGES (desktop) ── */
.lc-spec-wires {
  position: absolute; inset: 0;
  pointer-events: none; z-index: 10;
}
.lc-spec-wire-svg {
  position: absolute; inset: 0; width: 100%; height: 100%;
  overflow: visible;
}
.lc-spec-badge {
  position: absolute;
  background: #050505; color: #0F6B5B;
  padding: 4px 10px;
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .55rem; font-weight: 700; letter-spacing: 1.5px;
  text-transform: uppercase; border-radius: 3px; white-space: nowrap;
  opacity: 0; transform: scale(.85) translateY(5px);
  transition: opacity .4s, transform .4s;
  pointer-events: all; cursor: default;
  border: 1px solid rgba(15,107,91,.25);
  overflow: hidden;
}
.lc-spec-badge::before {
  content: '';
  position: absolute; inset: 0; border-radius: 3px;
  background: linear-gradient(90deg, transparent, rgba(15,107,91,.08), transparent);
  animation: hs-scan 4s infinite linear;
}
.lc-spec-badge .lc-spec-dot {
  display: inline-block; width: 4px; height: 4px; border-radius: 50%;
  background: #0F6B5B; margin-right: 4px; vertical-align: middle;
  animation: hs-blink 2s ease infinite;
}
/* Show badges when lid opens */
.lc-laptop-lid.is-open ~ .lc-spec-wires .lc-spec-badge {
  opacity: 1; transform: scale(1) translateY(0);
}
.lc-spec-badge:nth-child(2) { transition-delay: .1s; }
.lc-spec-badge:nth-child(3) { transition-delay: .22s; }
.lc-spec-badge:nth-child(4) { transition-delay: .34s; }
.lc-spec-badge:nth-child(5) { transition-delay: .46s; }
.lc-spec-badge:nth-child(6) { transition-delay: .58s; }
.lc-spec-badge:nth-child(7) { transition-delay: .7s; }

/* Wire SVG lines */
.wire-line {
  stroke: rgba(15,107,91,.5); stroke-width: .9;
  stroke-dasharray: 4 3; fill: none;
  animation: wireDash 2s linear infinite;
}
@keyframes wireDash { to { stroke-dashoffset: -14; } }

/* Desktop-only wire badges hidden on mobile (replaced by the strip below) */
@media (max-width: 900px) {
  .lc-spec-wires { display: none; }
}

/* ── MOBILE SPEC STRIP ──
   FIX: badges were just `display:none`d on mobile with nothing put
   back in their place, leaving the laptop visual looking unfinished.
   This horizontal, swipeable chip strip carries the same information
   underneath the laptop on small screens. */
.lc-mobile-spec-strip {
  display: none;
}
@media (max-width: 900px) {
  .lc-mobile-spec-strip {
    display: flex;
    gap: 8px;
    margin-top: 18px;
    padding: 2px 2px 6px;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    width: 100%;
    max-width: 380px;
    justify-content: flex-start;
  }
  .lc-mobile-spec-strip::-webkit-scrollbar { display: none; }
  .lc-mobile-spec-strip .lc-mspec-chip {
    flex: 0 0 auto;
    display: inline-flex; align-items: center; gap: 6px;
    background: #050505; color: #0F6B5B;
    padding: 7px 13px;
    font-size: .62rem; font-weight: 700; letter-spacing: 1.2px;
    text-transform: uppercase; border-radius: 99px; white-space: nowrap;
    border: 1px solid rgba(15,107,91,.25);
  }
  .lc-mobile-spec-strip .lc-mspec-chip .lc-spec-dot {
    width: 4px; height: 4px; border-radius: 50%; background: #0F6B5B;
    animation: hs-blink 2s ease infinite; flex-shrink: 0;
  }
}

/* ═══════════════════════════════════════════════════════════
   SLIDE 2 — FLOATING CARDS
═══════════════════════════════════════════════════════════ */
.lc-cards-visual {
  position: relative;
  width: 100%; max-width: 460px;
  min-height: 320px;
  display: flex; align-items: center; justify-content: center;
}
@media (max-width: 900px) {
  .lc-cards-visual {
    min-height: auto;
    flex-direction: column;
    gap: 14px; max-width: 360px; margin: 0 auto;
  }
}

.lc-float-card {
  position: absolute;
  background: #fff;
  border: 1.5px solid #E5E5E5; border-radius: 10px;
  padding: 14px 16px;
  box-shadow: 0 10px 40px rgba(0,0,0,.08), 4px 4px 0 #0F6B5B;
  width: 190px;
  animation: hs-cardFloat 4s ease-in-out infinite;
}
.lc-float-card:nth-child(1) { top: 8%;  left: 2%;  animation-delay: 0s;   z-index: 2; transform: rotate(-2.5deg); }
.lc-float-card:nth-child(2) { top: 18%; right: 0%; animation-delay: .8s;  z-index: 3; transform: rotate(2deg); }
.lc-float-card:nth-child(3) { bottom: 6%; left: 16%; animation-delay: 1.6s; z-index: 1; transform: rotate(-1deg); }
@keyframes hs-cardFloat {
  0%,100%{ transform: rotate(-2.5deg) translateY(0); }
  50%    { transform: rotate(-2.5deg) translateY(-10px); }
}
.lc-float-card:nth-child(2) { animation-name: hs-cardFloat2; }
@keyframes hs-cardFloat2 {
  0%,100%{ transform: rotate(2deg) translateY(0); }
  50%    { transform: rotate(2deg) translateY(-14px); }
}
.lc-float-card:nth-child(3) { animation-name: hs-cardFloat3; }
@keyframes hs-cardFloat3 {
  0%,100%{ transform: rotate(-1deg) translateY(0); }
  50%    { transform: rotate(-1deg) translateY(-8px); }
}

/* ── MOBILE: stack cards flat, always full width & visible ──
   FIX: this rule previously used !important on top/left/etc which is
   fine, but the cards' *parent* (.lc-hero-track / .lc-slide) was being
   squeezed by the broken height model above, so by the time these
   cards rendered they had nowhere to actually sit and visually
   "disappeared" into the overflow clip. Now that the parent grows
   with content (see .lc-hero-track fix), this stacked layout shows
   completely, every time. */
@media (max-width: 900px) {
  .lc-float-card {
    position: relative !important;
    top: auto !important; left: auto !important; right: auto !important; bottom: auto !important;
    width: 100% !important; max-width: 320px;
    transform: none !important; animation: none !important;
    box-shadow: 0 4px 16px rgba(0,0,0,.08), 3px 3px 0 #0F6B5B;
    margin: 0 auto;
  }
  .lc-cards-visual {
    flex-direction: column; align-items: stretch;
    gap: 12px; min-height: auto;
  }
}

.lc-fc-label {
  font-size: .52rem; font-weight: 800; letter-spacing: 2px;
  text-transform: uppercase; color: #666; margin-bottom: 5px;
}
.lc-fc-name {
  font-size: .75rem; font-weight: 700; line-height: 1.35;
  color: #050505; margin-bottom: 7px;
}
.lc-fc-price { font-size: 1rem; font-weight: 800; color: #050505; }
.lc-fc-price span {
  font-size: .58rem; font-weight: 600; color: #666;
  text-decoration: line-through; margin-left: 5px;
}
.lc-fc-tag {
  display: inline-block; margin-top: 6px;
  background: #0F6B5B; color: #050505;
  font-size: .52rem; font-weight: 800; letter-spacing: 1.5px;
  text-transform: uppercase; padding: 2px 7px; border-radius: 3px;
}

/* ═══════════════════════════════════════════════════════════
   SLIDE 3 — TRUST VISUAL
═══════════════════════════════════════════════════════════ */
.lc-trust-visual {
  position: relative;
  width: 100%; max-width: 460px;
  display: flex; flex-direction: column; gap: 12px;
}
@media (max-width: 900px) {
  .lc-trust-visual { max-width: 380px; margin: 0 auto; gap: 10px; }
}

.lc-trust-row { display: flex; gap: 12px; }
@media (max-width: 900px) { .lc-trust-row { gap: 10px; } }

.lc-trust-tile {
  flex: 1; background: #fff;
  border: 1.5px solid #E5E5E5; border-radius: 8px;
  padding: 16px 14px; position: relative; overflow: hidden;
  transition: border-color .25s, transform .25s var(--h-ease-spring), box-shadow .25s;
}
@media (max-width: 900px) {
  .lc-trust-tile { padding: 14px 10px; min-height: 92px; }
}
.lc-trust-tile:hover {
  border-color: #050505; transform: translateY(-3px);
  box-shadow: 4px 4px 0 #0F6B5B;
}
.lc-trust-tile::before {
  content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
  background: #0F6B5B; transform: scaleX(0); transform-origin: left;
  transition: transform .3s;
}
.lc-trust-tile:hover::before { transform: scaleX(1); }

.lc-tt-icon {
  width: 34px; height: 34px; border-radius: 6px;
  background: #050505;
  display: flex; align-items: center; justify-content: center; margin-bottom: 9px;
}
@media (max-width: 900px) { .lc-tt-icon { margin: 0 auto 8px; } }
.lc-tt-icon svg { width: 16px; height: 16px; stroke: #0F6B5B; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }

.lc-tt-num { font-size: clamp(1.2rem,2.5vw,1.5rem); font-weight: 800; color: #050505; line-height: 1; }
.lc-tt-num em { font-style: normal; color: #0F6B5B; }
.lc-tt-desc { font-size: .58rem; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; color: #666; margin-top: 3px; }

/* Marquee — FIX: text ("DATA WIPED SECURE" etc) was getting clipped
   at the viewport edge because the parent overflow context above it
   was already broken. With the height fix this renders at full width
   and scrolls cleanly edge-to-edge within its own rounded container. */
.lc-marquee-strip {
  position: relative; overflow: hidden;
  border: 1.5px solid #E5E5E5; border-radius: 8px; padding: 9px 0; background: #fff;
  width: 100%;
}
.lc-marquee-track {
  display: flex; gap: 28px; width: max-content;
  animation: hs-marquee 18s linear infinite;
}
.lc-marquee-strip:hover .lc-marquee-track { animation-play-state: paused; }
@keyframes hs-marquee { to { transform: translateX(-50%); } }
.lc-marquee-item {
  display: flex; align-items: center; gap: 6px;
  font-size: .62rem; font-weight: 700; letter-spacing: 1.5px;
  text-transform: uppercase; color: #666; white-space: nowrap;
}
.lc-marquee-item .dot {
  width: 5px; height: 5px; border-radius: 50%; background: #0F6B5B; flex-shrink: 0;
}

/* ═══════════════════════════════════════════════════════════
   TRANSITION CANVAS
═══════════════════════════════════════════════════════════ */
.lc-transition-canvas {
  position: absolute; inset: 0; z-index: 100;
  pointer-events: none; opacity: 0;
  width: 100%; height: 100%; display: block;
}

/* ═══════════════════════════════════════════════════════════
   HERO NAVIGATION
═══════════════════════════════════════════════════════════ */
.lc-hero-nav {
  position: absolute; bottom: 14px; left: 50%;
  transform: translateX(-50%); z-index: 20;
  display: flex; align-items: center; gap: 10px;
}
@media (max-width: 900px) { .lc-hero-nav { bottom: 8px; } }

.lc-hero-dots { display: flex; gap: 7px; align-items: center; }
.lc-hero-dot {
  width: 8px; height: 8px; border-radius: 2px;
  background: #E5E5E5; cursor: pointer;
  transition: background .3s, width .3s, box-shadow .3s; border: none;
}
.lc-hero-dot.is-active {
  width: 26px; background: #050505;
  box-shadow: 2px 2px 0 #0F6B5B;
}

.lc-hero-counter {
  position: absolute; bottom: 22px; right: var(--h-pad-x); z-index: 20;
  font-family: var(--lap-font-main,'Manrope', sans-serif);
  font-size: .7rem; font-weight: 700; letter-spacing: 2px; color: #666;
  display: flex; align-items: center; gap: 5px;
}
.lc-hero-counter strong { color: #050505; font-size: 1.05rem; }
@media (max-width: 900px) { .lc-hero-counter { display: none; } }

.lc-hero-progress {
  position: absolute; bottom: 0; left: 0;
  height: 3px; background: #0F6B5B; z-index: 20;
  transform-origin: left; transform: scaleX(0); transition: none;
}
.lc-hero-progress.is-running { animation: hs-progress 5.5s linear forwards; }
@keyframes hs-progress { to { transform: scaleX(1); } }

/* On mobile the nav dots sit right under the content flow (not pinned
   absolute-bottom over content) so they never overlap the last bit of
   text/stats in a tall slide. */
@media (max-width: 900px) {
  .lc-hero-nav { position: relative; bottom: auto; margin: 4px 0 14px; }
  .lc-hero-progress { position: relative; }
}

/* ═══════════════════════════════════════════════════════════
   SLIDE ENTRY ANIMATIONS
═══════════════════════════════════════════════════════════ */
.lc-slide.is-active .lc-slide-badge   { animation: hs-up .6s .05s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-slide-eyebrow { animation: hs-up .6s .10s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-slide-title   { animation: hs-up .7s .15s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-slide-desc    { animation: hs-up .6s .25s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-slide-cta     { animation: hs-up .6s .32s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-slide-stats   { animation: hs-up .6s .42s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-laptop-scene  { animation: hs-up .9s .08s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-cards-visual  { animation: hs-up .9s .08s var(--h-ease-spring) both; }
.lc-slide.is-active .lc-trust-visual  { animation: hs-up .9s .08s var(--h-ease-spring) both; }
@keyframes hs-up {
  0%  { opacity: 0; transform: translateY(26px); }
  100%{ opacity: 1; transform: translateY(0); }
}

/* Reduced motion */
@media (prefers-reduced-motion: reduce) {
  .lc-slide.is-active * { animation-duration: .01ms !important; transition-duration: .01ms !important; }
  .lc-hero-progress { animation: none !important; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     HERO HTML
═══════════════════════════════════════════════════════ -->
<section class="lc-hero" id="lcHero" aria-label="Niles & Sinai Hero Slider">

  <canvas class="lc-transition-canvas" id="lcTransCanvas" aria-hidden="true"></canvas>

  <div class="lc-hero-track" id="lcHeroTrack">

    <!-- ══════════ SLIDE 1 — 3D LAPTOP ══════════ -->
    <div class="lc-slide lc-slide--1 is-active" data-slide="0" aria-hidden="false">
      <div class="lc-slide-bg"><canvas id="lcHeroBg0" aria-hidden="true"></canvas></div>

      <!-- Decorative geometry -->
      <div class="lc-hero-geo lc-geo-circle" style="width:580px;height:580px;top:-140px;right:-110px;opacity:.35;"></div>
      <div class="lc-hero-geo lc-geo-circle" style="width:280px;height:280px;bottom:30px;left:-50px;opacity:.22;"></div>
      <div class="lc-hero-geo lc-geo-dot-grid" style="width:200px;height:200px;top:70px;right:90px;opacity:.5;border-radius:8px;"></div>
      <div class="lc-hero-geo lc-geo-line" style="height:2px;width:160px;top:40%;left:0;opacity:.22;"></div>

      <div class="lc-slide-inner">
        <!-- COPY -->
        <div class="lc-slide-copy">
          <div class="lc-slide-badge"><span class="lc-slide-badge-dot"></span>Handcrafted Fine Jewellery</div>
          <span class="lc-slide-eyebrow">Certified Natural Gemstones</span>
          <h1 class="lc-slide-title">
            Brilliance Without<br>
            The <span class="accent">Compromise</span><br>
            <span class="stroke">On Trust</span>
          </h1>
          <p class="lc-slide-desc">
            Ethically sourced gemstones, set by master craftsmen and certified for authenticity. Timeless design, exceptional quality, delivered with a lifetime of care.
          </p>
          <div class="lc-slide-cta">
            <a href="/store" class="btn btn-neon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              Shop Now
            </a>
            <a href="/students" class="btn btn-outline">Custom Orders</a>
          </div>
          <div class="lc-slide-stats">
            <div class="lc-stat"><span class="lc-stat-num">5K<em>+</em></span><span class="lc-stat-label">Pieces Sold</span></div>
            <div class="lc-stat"><span class="lc-stat-num">100<em>%</em></span><span class="lc-stat-label">Certified</span></div>
            <div class="lc-stat"><span class="lc-stat-num">1<em>Yr</em></span><span class="lc-stat-label">Warranty</span></div>
          </div>
        </div>

        <!-- HERO PRODUCT VISUAL -->
        <div class="lc-visual-col">
          <div style="display:flex;flex-direction:column;align-items:center;width:100%;">
          <div class="lc-laptop-scene lc-jewel-scene" id="lcLaptopScene" role="img" aria-label="Signature Gemstone diamond ring — studio photograph">

            <!-- Ground shadow (reused) -->
            <div class="lc-laptop-shadow"></div>

            <!-- PRODUCT PHOTO -->
            <div class="lc-jewel-frame">
              <img src="Assets/Modules/Images/Jewel 1.png" alt="Gemstone signature diamond ring" class="lc-jewel-img">
            </div>

            <!-- SPEC WIRE BADGES (desktop only) -->
            <div class="lc-spec-wires" aria-hidden="true">
              <svg class="lc-spec-wire-svg" id="lcWireSvg" viewBox="0 0 500 380" preserveAspectRatio="none"></svg>
              <div class="lc-spec-badge" id="sb0" style="top:8%;left:-6%;"><span class="lc-spec-dot"></span>18K Gold Setting</div>
              <div class="lc-spec-badge" id="sb1" style="top:26%;left:-11%;"><span class="lc-spec-dot"></span>VVS Clarity Diamond</div>
              <div class="lc-spec-badge" id="sb2" style="top:44%;left:-9%;"><span class="lc-spec-dot"></span>GIA Certified</div>
              <div class="lc-spec-badge" id="sb3" style="top:8%;right:-6%;"><span class="lc-spec-dot"></span>Handcrafted Setting</div>
              <div class="lc-spec-badge" id="sb4" style="top:26%;right:-10%;"><span class="lc-spec-dot"></span>Ethically Sourced</div>
              <div class="lc-spec-badge" id="sb5" style="top:44%;right:-7%;"><span class="lc-spec-dot"></span>Lifetime Warranty</div>
            </div>

          </div><!-- /scene -->

          <!-- MOBILE SPEC STRIP — replaces the wire badges on small screens
               instead of just hiding them with nothing in their place. -->
          <div class="lc-mobile-spec-strip" aria-hidden="true">
            <span class="lc-mspec-chip"><span class="lc-spec-dot"></span>18K Gold Setting</span>
            <span class="lc-mspec-chip"><span class="lc-spec-dot"></span>VVS Clarity Diamond</span>
            <span class="lc-mspec-chip"><span class="lc-spec-dot"></span>GIA Certified</span>
            <span class="lc-mspec-chip"><span class="lc-spec-dot"></span>Handcrafted</span>
            <span class="lc-mspec-chip"><span class="lc-spec-dot"></span>Lifetime Warranty</span>
          </div>
          </div>
        </div><!-- /visual-col -->
      </div><!-- /inner -->
    </div><!-- /slide 1 -->


    <!-- ══════════ SLIDE 2 — BEST SELLERS ══════════ -->
    <div class="lc-slide lc-slide--2" data-slide="1" aria-hidden="true">
      <div class="lc-slide-bg"><canvas id="lcHeroBg1" aria-hidden="true"></canvas></div>
      <div class="lc-hero-geo lc-geo-dot-grid"  style="width:260px;height:260px;bottom:-30px;right:50px;opacity:.45;border-radius:8px;"></div>
      <div class="lc-hero-geo lc-geo-circle" style="width:400px;height:400px;top:-70px;left:-50px;opacity:.28;"></div>

      <div class="lc-slide-inner">
        <div class="lc-slide-copy">
          <div class="lc-slide-badge"><span class="lc-slide-badge-dot"></span>Bestsellers · 2026</div>
          <span class="lc-slide-eyebrow">Curated for every occasion</span>
          <h1 class="lc-slide-title">
            Find Your<br>
            <span class="accent">Perfect</span><br>
            Piece
          </h1>
          <p class="lc-slide-desc">
            From everyday elegance to statement engagement pieces — 200+ designs in stock, ready to ship within 24 hours with full authenticity certification.
          </p>
          <div class="lc-slide-cta">
            <a href="/store" class="btn btn-neon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
              Browse All
            </a>
            <a href="/students" class="btn btn-dotted">Custom Offers</a>
          </div>
          <div class="lc-slide-stats">
            <div class="lc-stat"><span class="lc-stat-num">200<em>+</em></span><span class="lc-stat-label">In Stock</span></div>
            <div class="lc-stat"><span class="lc-stat-num">24<em>hr</em></span><span class="lc-stat-label">Dispatch</span></div>
            <div class="lc-stat"><span class="lc-stat-num">4.9<em>★</em></span><span class="lc-stat-label">Rating</span></div>
          </div>
        </div>

        <div class="lc-visual-col">
          <div class="lc-cards-visual">
            <div class="lc-float-card">
              <div class="lc-fc-label">Top Pick — Ring</div>
              <div class="lc-fc-name">Solitaire Halo Ring · 18K Gold · 1 Ct</div>
              <div class="lc-fc-price">₹38,799 <span>₹1,29,588</span></div>
              <span class="lc-fc-tag">70% OFF</span>
            </div>
            <div class="lc-float-card">
              <div class="lc-fc-label">Customer Favourite</div>
              <div class="lc-fc-name">Emerald Drop Necklace · Rose Gold</div>
              <div class="lc-fc-price">₹26,899 <span>₹89,842</span></div>
              <span class="lc-fc-tag">Best Value</span>
            </div>
            <div class="lc-float-card">
              <div class="lc-fc-label">Statement Bracelet</div>
              <div class="lc-fc-name">Tennis Bracelet · Sterling Silver</div>
              <div class="lc-fc-price">₹30,999 <span>₹1,03,536</span></div>
              <span class="lc-fc-tag">Hot Deal</span>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /slide 2 -->


    <!-- ══════════ SLIDE 3 — TRUST / WHY NILES & SINAI ══════════ -->
    <div class="lc-slide lc-slide--3" data-slide="2" aria-hidden="true"><!-- Why Niles & Sinai -->
      <div class="lc-slide-bg"><canvas id="lcHeroBg2" aria-hidden="true"></canvas></div>
      <div class="lc-hero-geo lc-geo-circle" style="width:600px;height:600px;bottom:-180px;right:-130px;opacity:.18;"></div>
      <div class="lc-hero-geo lc-geo-line" style="height:2px;width:200px;top:32%;right:0;opacity:.28;"></div>
      <div class="lc-hero-geo lc-geo-dot-grid" style="width:170px;height:170px;top:55px;left:42%;opacity:.38;border-radius:6px;"></div>

      <div class="lc-slide-inner">
        <div class="lc-slide-copy">
          <div class="lc-slide-badge"><span class="lc-slide-badge-dot"></span>Why Niles &amp; Sinai?</div>
          <span class="lc-slide-eyebrow">India's Most Trusted Fine Jewellery House</span>
          <h1 class="lc-slide-title">
            Craftsmanship You Can<br>
            <span class="accent">Trust.</span><br>
            Beauty You'll <span class="stroke">Treasure.</span>
          </h1>
          <p class="lc-slide-desc">
            Every gemstone hand-selected, certified for authenticity and set by master craftsmen, backed by our lifetime warranty. Zero compromise on quality, a piece to cherish forever.
          </p>
          <div class="lc-slide-cta">
            <a href="/about" class="btn btn-neon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              Our Story
            </a>
            <a href="/contact" class="btn btn-outline">Get In Touch</a>
          </div>
          <div class="lc-slide-stats">
            <div class="lc-stat"><span class="lc-stat-num">3<em>Yr</em></span><span class="lc-stat-label">In Business</span></div>
            <div class="lc-stat"><span class="lc-stat-num">10K<em>+</em></span><span class="lc-stat-label">Customers</span></div>
            <div class="lc-stat"><span class="lc-stat-num">Zero<em>*</em></span><span class="lc-stat-label">Hidden Fees</span></div>
          </div>
        </div>

        <div class="lc-visual-col">
          <div class="lc-trust-visual">
            <div class="lc-trust-row">
              <div class="lc-trust-tile">
                <div class="lc-tt-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="lc-tt-num">100<em>%</em></div>
                <div class="lc-tt-desc">Certified Authentic</div>
              </div>
              <div class="lc-trust-tile">
                <div class="lc-tt-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <div class="lc-tt-num">24<em>hr</em></div>
                <div class="lc-tt-desc">Dispatch Speed</div>
              </div>
            </div>
            <div class="lc-trust-row">
              <div class="lc-trust-tile">
                <div class="lc-tt-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                </div>
                <div class="lc-tt-num">10K<em>+</em></div>
                <div class="lc-tt-desc">Happy Customers</div>
              </div>
              <div class="lc-trust-tile">
                <div class="lc-tt-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div class="lc-tt-num">1<em>yr</em></div>
                <div class="lc-tt-desc">Full Lifetime Warranty</div>
              </div>
            </div>
            <div class="lc-marquee-strip">
              <div class="lc-marquee-track" id="lcMarqueeTrack"></div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /slide 3 -->

  </div><!-- /track -->

  <!-- Navigation -->
  <div class="lc-hero-nav" role="group" aria-label="Slide navigation">
    <div class="lc-hero-dots" role="tablist">
      <button class="lc-hero-dot is-active" data-dot="0" role="tab" aria-selected="true"  aria-label="Slide 1 — Handcrafted Fine Jewellery"></button>
      <button class="lc-hero-dot"           data-dot="1" role="tab" aria-selected="false" aria-label="Slide 2 — Best Sellers"></button>
      <button class="lc-hero-dot"           data-dot="2" role="tab" aria-selected="false" aria-label="Slide 3 — Why Niles & Sinai"></button>
    </div>
  </div>

  <div class="lc-hero-counter" aria-hidden="true">
    <strong id="lcHeroCurrent">01</strong> / 03
  </div>

  <div class="lc-hero-progress" id="lcHeroProgress" aria-hidden="true"></div>

</section>


<!-- ═══════════════════════════════════════════════════════
     HERO JAVASCRIPT
═══════════════════════════════════════════════════════ -->
<script>
(function(){
'use strict';

const $ = id => document.getElementById(id);
const PI = Math.PI, TWO_PI = PI*2;
function lerp(a,b,t){ return a+(b-a)*t; }
function clamp(v,lo,hi){ return Math.max(lo,Math.min(hi,v)); }
function easeOut(t){ return 1-(1-t)*(1-t); }
function isMobileViewport(){ return window.matchMedia('(max-width: 900px)').matches; }

/* ════════════════════════════════════════════════════════
   1. KEYBOARD BUILDER
════════════════════════════════════════════════════════ */
(function buildKeyboard(){
  const kb = $('lcKeyboard');
  if(!kb) return;
  // 5 key rows — simplified realistic layout
  const rows = [
    // row 1: function keys + escape
    [{w:1.2},{w:1},{w:1},{w:1},{w:1,n:true},{w:1},{w:1},{w:1},{w:1,n:true},{w:1},{w:1},{w:1},{w:1,n:true},{w:1.2},{w:.9},{w:.9}],
    // row 2: numbers row
    [{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:2}],
    // row 3: QWERTY
    [{w:1.5},{w:1},{w:1},{w:1},{w:1},{w:1,n:true},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1.5}],
    // row 4: ASDF
    [{w:1.8},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:1},{w:2.2}],
    // row 5: ZXCV + space
    [{w:1.3},{w:1},{w:1},{w:1},{w:4.5,space:true},{w:1},{w:1},{w:1},{w:1.3}],
  ];
  let html='';
  rows.forEach((row,ri)=>{
    html+='<div class="lc-key-row">';
    row.forEach(k=>{
      let cls='lc-key';
      if(k.space) cls+=' space';
      else if(k.w>=2) cls+=' wider';
      else if(k.w>=1.4) cls+=' wide';
      if(k.n) cls+=' neon-key'; // highlight a few keys in neon
      html+=`<div class="${cls}" style="flex:${k.w||1};"></div>`;
    });
    html+='</div>';
  });
  kb.innerHTML=html;
})();

/* ════════════════════════════════════════════════════════
   2. SCREEN CLOCK
════════════════════════════════════════════════════════ */
function updateScreenClock(){
  const el=$('lcScreenClock');
  if(!el) return;
  const n=new Date();
  el.textContent=n.getHours().toString().padStart(2,'0')+':'+n.getMinutes().toString().padStart(2,'0');
}
updateScreenClock();
setInterval(updateScreenClock,60000);

/* ════════════════════════════════════════════════════════
   3. BG WIRE CANVASES
════════════════════════════════════════════════════════ */
function buildHeroBg(id, pCount){
  const canvas=$(id);
  if(!canvas) return;
  const ctx=canvas.getContext('2d');
  let W,H,nodes,parts,raf;
  const NSX=110,NSY=42,MAX=135;
  function resize(){
    W=canvas.width=canvas.offsetWidth||canvas.parentElement.offsetWidth;
    H=canvas.height=canvas.offsetHeight||canvas.parentElement.offsetHeight;
    build();
  }
  function build(){
    nodes=[];
    const cols=Math.ceil(W/NSX)+2, rows=Math.ceil(H/NSY)+2;
    for(let r=0;r<rows;r++) for(let c=0;c<cols;c++)
      nodes.push({x:c*NSX+(r%2?NSX/2:0),y:r*NSY,nb:[]});
    nodes.forEach((n,i)=>nodes.forEach((m,j)=>{
      if(i>=j)return;
      if(Math.hypot(m.x-n.x,m.y-n.y)<MAX) n.nb.push(j);
    }));
    parts=[];
    for(let k=0;k<pCount;k++) spawn();
  }
  function spawn(){
    const si=Math.floor(Math.random()*nodes.length);
    const s=nodes[si]; if(!s.nb.length)return;
    parts.push({si,ei:s.nb[Math.floor(Math.random()*s.nb.length)],
      t:Math.random(),spd:.005+Math.random()*.009,a:.35+Math.random()*.5,sz:1.5+Math.random()*2});
  }
  function draw(){
    ctx.clearRect(0,0,W,H);
    const r='15,107,91';
    ctx.lineWidth=.3;
    nodes.forEach(n=>n.nb.forEach(ei=>{
      const m=nodes[ei];
      ctx.beginPath();ctx.moveTo(n.x,n.y);ctx.lineTo(m.x,m.y);
      ctx.strokeStyle=`rgba(${r},.45)`;ctx.stroke();
    }));
    nodes.forEach(n=>{
      ctx.beginPath();ctx.arc(n.x,n.y,1,0,TWO_PI);
      ctx.fillStyle=`rgba(${r},.5)`;ctx.fill();
    });
    parts=parts.filter(p=>{
      p.t+=p.spd;
      if(p.t>=1){
        p.si=p.ei;const s=nodes[p.si];
        if(!s.nb.length)return false;
        p.ei=s.nb[Math.floor(Math.random()*s.nb.length)];
        p.t=0;p.spd=.005+Math.random()*.009;return true;
      }
      const s=nodes[p.si],e=nodes[p.ei];
      const x=lerp(s.x,e.x,p.t),y=lerp(s.y,e.y,p.t);
      ctx.beginPath();ctx.arc(x,y,p.sz,0,TWO_PI);
      ctx.fillStyle=`rgba(${r},${p.a})`;ctx.fill();
      ctx.beginPath();ctx.arc(x,y,p.sz*3,0,TWO_PI);
      ctx.fillStyle=`rgba(${r},.05)`;ctx.fill();
      return true;
    });
    while(parts.length<pCount) spawn();
    raf=requestAnimationFrame(draw);
  }
  const ro=new ResizeObserver(()=>{cancelAnimationFrame(raf);resize();draw();});
  ro.observe(canvas.parentElement||canvas);
  resize();draw();
}
buildHeroBg('lcHeroBg0',18);
buildHeroBg('lcHeroBg1',12);
buildHeroBg('lcHeroBg2',12);

/* ════════════════════════════════════════════════════════
   4. SPEC WIRE SVG LINES (desktop only)
════════════════════════════════════════════════════════ */
function drawSpecWires(){
  const svg=$('lcWireSvg');
  if(!svg) return;
  const cx=250,cy=175;
  const badges=[
    {id:'sb0',bx:50, by:30},
    {id:'sb1',bx:40, by:99},
    {id:'sb2',bx:45, by:167},
    {id:'sb3',bx:460,by:30},
    {id:'sb4',bx:450,by:99},
    {id:'sb5',bx:455,by:167},
  ];
  let html='';
  badges.forEach(b=>{
    const mx=lerp(b.bx,cx,.4), my=lerp(b.by,cy,.4);
    html+=`<path class="wire-line" d="M${b.bx},${b.by} Q${mx},${my} ${cx},${cy}"/>`;
    html+=`<circle cx="${b.bx}" cy="${b.by}" r="2.5" fill="rgba(15,107,91,.7)"/>`;
  });
  svg.innerHTML=html;
}
drawSpecWires();

/* ════════════════════════════════════════════════════════
   5. 3D LAPTOP — drag + mouse parallax + lighting
════════════════════════════════════════════════════════ */
(function initLaptop(){
  const scene=$('lcLaptopScene');
  const rig=$('lcLaptopRig');
  const lid=$('lcLaptopLid');
  const reflection=$('lcLidReflection');
  if(!scene||!rig||!lid) return;

  let rotY=-18,rotX=6;
  let targetY=-18,targetX=6;
  let dragging=false,lastX=0,lastY=0;
  let idleT=0;

  function baseY(){ return isMobileViewport() ? -14 : -18; }
  function baseX(){ return isMobileViewport() ? 8 : 6; }

  rotY=targetY=baseY();
  rotX=targetX=baseX();

  function applyRotation(){
    rig.style.transform=`rotateX(${rotX}deg) rotateY(${rotY}deg)`;
    // Lighting: shift reflection based on angle
    if(reflection){
      const rx=clamp((rotX+15)/30,0,1);
      const ry=clamp((rotY+55)/110,0,1);
      reflection.style.background=
        `radial-gradient(circle at ${Math.round(ry*100)}% ${Math.round(rx*100)}%, rgba(255,255,255,.22), transparent 65%)`;
    }
  }

  // Open lid after a short, fixed delay. The screen content itself is
  // visible by default now (no opacity race) — this purely animates
  // the hinge so the "boot reveal" moment still feels intentional.
  setTimeout(()=>{ lid.classList.add('is-open'); },900);

  // Idle animation
  setInterval(()=>{
    if(!dragging){
      idleT+=.014;
      targetY=baseY()+Math.sin(idleT)*6;
      targetX=baseX()+Math.cos(idleT*.65)*2.5;
    }
  },16);

  // Smooth lerp loop
  (function loop(){
    rotY=lerp(rotY,targetY,.1);
    rotX=lerp(rotX,targetX,.1);
    applyRotation();
    requestAnimationFrame(loop);
  })();

  // Desktop mouse drag
  scene.addEventListener('mousedown',e=>{
    dragging=true;lastX=e.clientX;lastY=e.clientY;
    scene.style.cursor='grabbing';
  });
  window.addEventListener('mousemove',e=>{
    if(!dragging) return;
    const dx=e.clientX-lastX, dy=e.clientY-lastY;
    targetY+=dx*.32; targetX-=dy*.18;
    targetY=clamp(targetY,-58,58); targetX=clamp(targetX,-16,20);
    lastX=e.clientX; lastY=e.clientY;
  });
  window.addEventListener('mouseup',()=>{ dragging=false; scene.style.cursor='grab'; });

  // Touch drag — only engages on an actual drag gesture so it never
  // fights with the hero's horizontal swipe-to-change-slide handler.
  let touchMoved=false, touchStartX=0, touchStartY=0;
  scene.addEventListener('touchstart',e=>{
    touchMoved=false;
    touchStartX=lastX=e.touches[0].clientX;
    touchStartY=lastY=e.touches[0].clientY;
  },{passive:true});
  scene.addEventListener('touchmove',e=>{
    const dx=e.touches[0].clientX-touchStartX;
    const dy=e.touches[0].clientY-touchStartY;
    if(!touchMoved && Math.hypot(dx,dy)>6) touchMoved=true;
    if(!touchMoved) return;
    dragging=true;
    const mx=e.touches[0].clientX-lastX, my=e.touches[0].clientY-lastY;
    targetY+=mx*.3; targetX-=my*.16;
    targetY=clamp(targetY,-55,55); targetX=clamp(targetX,-14,18);
    lastX=e.touches[0].clientX; lastY=e.touches[0].clientY;
  },{passive:true});
  scene.addEventListener('touchend',()=>{ dragging=false; },{passive:true});

  // Double-click / double-tap to re-open/close lid for fun
  let lidOpen=true;
  scene.addEventListener('dblclick',()=>{
    lidOpen=!lidOpen;
    lid.classList.toggle('is-open',lidOpen);
  });
})();

/* ════════════════════════════════════════════════════════
   6. MARQUEE (slide 3)
════════════════════════════════════════════════════════ */
(function buildMarquee(){
  const track=$('lcMarqueeTrack');
  if(!track) return;
  const items=[
    'GIA Certified','Lifetime Warranty','24hr Dispatch','5000+ Sold',
    'Free Delivery','Genuine Gemstones','Handcrafted Setting','Authenticity Guaranteed',
    'GIA Certified','Lifetime Warranty','24hr Dispatch','5000+ Sold',
    'Free Delivery','Genuine Gemstones','Handcrafted Setting','Authenticity Guaranteed'
  ];
  track.innerHTML=items.map(t=>`<span class="lc-marquee-item"><span class="dot"></span>${t}</span>`).join('');
})();

/* ════════════════════════════════════════════════════════
   7. TRANSITION EFFECTS
════════════════════════════════════════════════════════ */
const transCanvas=$('lcTransCanvas');
const transCtx=transCanvas?transCanvas.getContext('2d'):null;
let transRaf=null;
const heroEl=$('lcHero');
let TW=0,TH=0;

function resizeTrans(){
  if(!transCanvas||!heroEl)return;
  const rect=heroEl.getBoundingClientRect();
  TW=Math.max(1,Math.round(rect.width));
  TH=Math.max(1,Math.round(rect.height));
  const dpr=window.devicePixelRatio||1;
  transCanvas.style.width=TW+'px';
  transCanvas.style.height=TH+'px';
  transCanvas.width=Math.round(TW*dpr);
  transCanvas.height=Math.round(TH*dpr);
  if(transCtx) transCtx.setTransform(dpr,0,0,dpr,0,0);
}
window.addEventListener('resize',()=>{ resizeTrans(); drawSpecWires(); syncTrackHeight(); });
resizeTrans();

// WIND: slide 0 → 1
function windTrans(cb){
  if(!transCtx)return cb();
  resizeTrans();
  const W=TW,H=TH;
  transCanvas.style.opacity='1';
  const parts=[];
  for(let i=0;i<200;i++){
    parts.push({
      x:Math.random()*W, y:Math.random()*H,
      vx:7+Math.random()*14, vy:(Math.random()-.5)*3,
      len:30+Math.random()*90, a:.4+Math.random()*.5,
      sz:.8+Math.random()*1.5, life:0, maxLife:28+Math.random()*28
    });
  }
  let wipeX=0; const wipeDur=40; let frame=0;
  function tick(){
    transCtx.clearRect(0,0,W,H);
    wipeX=W*(frame/wipeDur);
    transCtx.fillStyle=`rgba(255,255,255,${clamp(frame/wipeDur,0,1)})`;
    transCtx.fillRect(0,0,wipeX,H);
    parts.forEach(p=>{
      p.life++; p.x+=p.vx; p.y+=p.vy+Math.sin(p.life*.18)*.8;
      const a=p.a*(1-p.life/p.maxLife);
      transCtx.beginPath();
      transCtx.moveTo(p.x-p.len,p.y);transCtx.lineTo(p.x,p.y);
      transCtx.strokeStyle=`rgba(15,107,91,${a*.6})`;
      transCtx.lineWidth=p.sz; transCtx.stroke();
    });
    frame++;
    if(frame<wipeDur+20){ transRaf=requestAnimationFrame(tick); }
    else{ transCanvas.style.opacity='0'; transCtx.clearRect(0,0,W,H); cb(); }
  }
  tick();
}

// WAVE: slide 1 → 2
function waveTrans(cb){
  if(!transCtx)return cb();
  resizeTrans();
  const W=TW,H=TH;
  transCanvas.style.opacity='1';
  let t=0; const DUR=55;
  function tick(){
    transCtx.clearRect(0,0,W,H);
    const frontX=W*(t/DUR)*1.35-W*.1;
    transCtx.beginPath();
    transCtx.moveTo(0,0);
    for(let x=0;x<=Math.max(0,frontX);x+=4) transCtx.lineTo(x,0);
    for(let y=0;y<=H;y+=3){
      const wx=frontX+Math.sin(y*.045+t*.18)*20+Math.sin(y*.09+t*.12)*9;
      transCtx.lineTo(wx,y);
    }
    transCtx.lineTo(0,H); transCtx.closePath();
    const g=transCtx.createLinearGradient(frontX-80,0,frontX+20,0);
    g.addColorStop(0,'rgba(210,255,210,.9)');
    g.addColorStop(.6,'rgba(15,107,91,.45)');
    g.addColorStop(1,'rgba(15,107,91,0)');
    transCtx.fillStyle=g; transCtx.fill();
    // foam
    transCtx.beginPath();
    for(let y=0;y<=H;y+=3){
      const wx=frontX+Math.sin(y*.045+t*.18)*20+Math.sin(y*.09+t*.12)*9;
      y===0?transCtx.moveTo(wx,y):transCtx.lineTo(wx,y);
    }
    transCtx.strokeStyle='rgba(15,107,91,.4)'; transCtx.lineWidth=2.5; transCtx.stroke();
    t++;
    if(t<DUR){ transRaf=requestAnimationFrame(tick); }
    else{ transCanvas.style.opacity='0'; transCtx.clearRect(0,0,W,H); cb(); }
  }
  tick();
}

// FIRE: slide 2 → 0
function fireTrans(cb){
  if(!transCtx)return cb();
  resizeTrans();
  const W=TW,H=TH;
  transCanvas.style.opacity='1';
  const embers=[];
  function spawnEmbers(count){
    for(let i=0;i<count;i++){
      embers.push({
        x:W*.5+((Math.random()-.5)*W*.5), y:H*.65+Math.random()*H*.35,
        vx:(Math.random()-.5)*4, vy:-(3+Math.random()*8),
        size:2+Math.random()*5, life:0, maxLife:25+Math.random()*25,
        hue:Math.random()>.4?28:52
      });
    }
  }
  let t=0; const DUR=60;
  function tick(){
    transCtx.clearRect(0,0,W,H);
    const riseH=H*(t/DUR)*1.3;
    for(let x=0;x<=W;x+=8){
      const fh=riseH+Math.sin(x*.03+t*.25)*H*.07+Math.sin(x*.07+t*.15)*H*.035;
      const g=transCtx.createLinearGradient(x,H,x,H-fh);
      g.addColorStop(0,'rgba(255,80,0,.92)');
      g.addColorStop(.4,'rgba(255,180,0,.8)');
      g.addColorStop(.8,'rgba(255,255,80,.3)');
      g.addColorStop(1,'rgba(15,107,91,0)');
      transCtx.fillStyle=g; transCtx.fillRect(x,H-fh,9,fh);
    }
    if(t%2===0) spawnEmbers(5);
    embers.forEach(e=>{
      e.life++;e.x+=e.vx;e.y+=e.vy;e.vy*=.97;
      const ea=clamp(1-e.life/e.maxLife,0,1);
      transCtx.beginPath();
      transCtx.arc(e.x,e.y,e.size*(1-e.life/e.maxLife*.5),0,TWO_PI);
      transCtx.fillStyle=`hsla(${e.hue},100%,60%,${ea})`; transCtx.fill();
    });
    for(let i=embers.length-1;i>=0;i--) if(embers[i].life>=embers[i].maxLife) embers.splice(i,1);
    t++;
    if(t<DUR){ transRaf=requestAnimationFrame(tick); }
    else{ transCanvas.style.opacity='0'; transCtx.clearRect(0,0,W,H); cb(); }
  }
  tick();
}

const transMap={
  '0→1':windTrans, '1→2':waveTrans, '2→0':fireTrans,
  '1→0':windTrans, '2→1':waveTrans, '0→2':fireTrans
};

/* ════════════════════════════════════════════════════════
   8. MOBILE TRACK HEIGHT SYNC
   Root-cause fix for the overflow/clipping bug: on mobile the slides
   are absolutely positioned (so they can cross-fade/transition without
   reflowing the page), but that means their parent .lc-hero-track needs
   an explicit height taken from whichever slide is actually visible —
   otherwise the track collapses to 0 and every slide's content spills
   into whatever sits below the hero (which is exactly what clipped the
   "Find Your Perfect Machine" copy and the trust marquee text against
   the dock / WhatsApp widget in the bug reports).
════════════════════════════════════════════════════════ */
const heroTrack = $('lcHeroTrack');
function syncTrackHeight(){
  if(!heroTrack) return;
  if(!isMobileViewport()){
    heroTrack.style.height = '';
    return;
  }
  const active = heroTrack.querySelector('.lc-slide.is-active') || heroTrack.querySelector('.lc-slide.is-leaving');
  if(!active) return;
  // Measure natural height by temporarily reading scrollHeight of the
  // inner content (the slide itself is position:absolute so its own
  // offsetHeight collapses; the inner grid does not).
  const inner = active.querySelector('.lc-slide-inner');
  const h = inner ? inner.scrollHeight : active.scrollHeight;
  if(h>0) heroTrack.style.height = h+'px';
}
// Re-measure on load, on resize, on font/image load, and after each
// transition completes (handled in goTo below).
window.addEventListener('load', syncTrackHeight);
if(document.fonts && document.fonts.ready){ document.fonts.ready.then(syncTrackHeight); }
setTimeout(syncTrackHeight, 50);
setTimeout(syncTrackHeight, 600);
setTimeout(syncTrackHeight, 1500);

/* ════════════════════════════════════════════════════════
   9. SLIDE MANAGER
════════════════════════════════════════════════════════ */
const slides=document.querySelectorAll('.lc-slide');
const dots=document.querySelectorAll('.lc-hero-dot');
const counterEl=$('lcHeroCurrent');
const progress=$('lcHeroProgress');
let current=0, busy=false, autoTimer=null;

function goTo(idx){
  if(busy||idx===current) return;
  const from=current;
  busy=true; clearAuto();
  cancelAnimationFrame(transRaf);
  const fx=transMap[`${from}→${idx}`]||windTrans;
  slides[from].classList.add('is-leaving');
  slides[from].setAttribute('aria-hidden','true');
  slides[idx].classList.add('is-active'); // pre-activate so height can be measured pre-fx
  syncTrackHeight();
  fx(()=>{
    slides[from].classList.remove('is-active','is-leaving');
    slides[idx].setAttribute('aria-hidden','false');
    updateDots(idx); current=idx; busy=false;
    syncTrackHeight();
    restartProgress(); startAuto();
  });
}

function updateDots(idx){
  dots.forEach((d,i)=>{
    d.classList.toggle('is-active',i===idx);
    d.setAttribute('aria-selected',i===idx);
  });
  if(counterEl) counterEl.textContent=String(idx+1).padStart(2,'0');
}
function restartProgress(){
  if(!progress)return;
  progress.classList.remove('is-running');
  void progress.offsetWidth;
  progress.classList.add('is-running');
}
function startAuto(){ autoTimer=setTimeout(()=>goTo((current+1)%slides.length),5500); }
function clearAuto(){ clearTimeout(autoTimer); }

dots.forEach((d,i)=>d.addEventListener('click',()=>goTo(i)));

// Keyboard arrows
document.addEventListener('keydown',e=>{
  if(!document.querySelector('.lc-hero')) return;
  if(e.key==='ArrowRight') goTo((current+1)%slides.length);
  if(e.key==='ArrowLeft')  goTo((current-1+slides.length)%slides.length);
});

// Pause on desktop hover
if(heroEl){
  heroEl.addEventListener('mouseenter',()=>{ clearAuto(); progress&&progress.classList.remove('is-running'); });
  heroEl.addEventListener('mouseleave',()=>{ restartProgress(); startAuto(); });
}

/* ── MOBILE SWIPE ──
   Ignores swipes that started inside the laptop scene (that gesture
   is reserved for rotating the laptop — see initLaptop's touchmove
   guard) so the two interactions never conflict. */
let touchStartX=0, touchStartY=0, touchStartedInLaptop=false;
if(heroEl){
  heroEl.addEventListener('touchstart',e=>{
    touchStartX=e.touches[0].clientX;
    touchStartY=e.touches[0].clientY;
    touchStartedInLaptop = !!(e.target.closest && e.target.closest('#lcLaptopScene'));
  },{passive:true});
  heroEl.addEventListener('touchend',e=>{
    if(touchStartedInLaptop) return;
    const dx=e.changedTouches[0].clientX-touchStartX;
    const dy=e.changedTouches[0].clientY-touchStartY;
    // Only register horizontal swipe if mostly horizontal
    if(Math.abs(dx)>Math.abs(dy)*1.5 && Math.abs(dx)>40){
      if(dx<0) goTo((current+1)%slides.length);
      else      goTo((current-1+slides.length)%slides.length);
    }
  },{passive:true});
}

// Init
updateDots(0);
restartProgress();
startAuto();
syncTrackHeight();

})(); // END IIFE
</script>