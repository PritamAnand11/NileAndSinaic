<?php

$products = [
    [
    'id'       => 'p4',
    'title'    => 'Pearl Drop Diamond Necklace',
    'subtitle' => '14K Gold · Freshwater Pearl · Everyday Wear',
    'price'    => 26899,
    'mrp'      => 89842,
    'stock'    => 20,
    'badge'    => 'Gift Pick',
    'best_for' => 'Everyday & Office Wear',
    'tags'     => ['Earrings','Pearl','Lightweight'],
    'specs'    => ['Natural Freshwater Pearl','14K Gold Hooks','Lightweight Comfort Fit','Hypoallergenic','Gift Box Included'],
    'images'   => [
      'Assets/Modules/Images/Jewel 1.png',
      'Assets/Modules/Images/Jewel front.png',
      'Assets/Modules/Images/Jewel details.png',
    ],
  ],
    [
    'id'       => 'p6',
    'title'    => 'Custom Gemstone Ring',
    'subtitle' => 'Made-to-Order · Your Choice of Stone & Metal',
    'price'    => 36499,
    'mrp'      => 121800,
    'stock'    => 4,
    'badge'    => 'Custom Order',
    'best_for' => 'Personalised Gifting',
    'tags'     => ['Custom','Made-to-Order','Bespoke'],
    'specs'    => ['Choice of Gemstone','Choice of Metal (Gold/Silver/Platinum)','Hand-Engraving Available','4-Week Turnaround','Design Consultation Included'],
    'images'   => [
      'Assets/Modules/Images/Cust Ring.png',
      'Assets/Modules/Images/Cust Ring 1.png',
      'Assets/Modules/Images/Cust Ring 2.png',
    ],
  ],
  [
    'id'       => 'p1',
    'title'    => 'Solitaire Halo Ring',
    'subtitle' => '18K White Gold · 1 Ct Round Cut · VVS Clarity',
    'price'    => 38799,
    'mrp'      => 129588,
    'stock'    => 7,
    'badge'    => 'Best Seller',
    'best_for' => 'Engagements & Proposals',
    'tags'     => ['Engagement','Diamond','GIA Certified'],
    'specs'    => ['1 Ct Center Diamond','VVS Clarity','18K White Gold Band','Halo Setting','GIA Certified'],
    'images'   => [
      'Assets/Modules/Images/Jewel 5.png',
      'Assets/Modules/Images/Jewel 5.png',
      'Assets/Modules/Images/Jewel 5.png',
    ],
  ],
  [
    'id'       => 'p2',
    'title'    => 'Emerald Drop Necklace',
    'subtitle' => '14K Rose Gold · 2 Ct Emerald · Pave Diamonds',
    'price'    => 31499,
    'mrp'      => 105000,
    'stock'    => 12,
    'badge'    => 'Top Pick',
    'best_for' => 'Evening & Formal Wear',
    'tags'     => ['Necklace','Emerald','Rose Gold'],
    'specs'    => ['2 Ct Natural Emerald','Pave Diamond Accents','14K Rose Gold Chain','18" Adjustable Length','Certified Authentic'],
    'images'   => [
      'Assets/Modules/Images/Jewel 3.png',
      'Assets/Modules/Images/Jewel 3.png',
      'Assets/Modules/Images/Jewel 3.png',
    ],
  ],
  [
    'id'       => 'p3',
    'title'    => 'Sapphire Tennis Bracelet',
    'subtitle' => 'Sterling Silver · Blue Sapphire · Prong Set',
    'price'    => 34999,
    'mrp'      => 115000,
    'stock'    => 5,
    'badge'    => 'Fan Favourite',
    'best_for' => 'Everyday Elegance',
    'tags'     => ['Bracelet','Sapphire','Silver'],
    'specs'    => ['Genuine Blue Sapphire','Sterling Silver Setting','Prong-Set Stones','7.5" Length','Secure Clasp'],
    'images'   => [
      'Assets/Modules/Images/Jewel 4.png',
      'Assets/Modules/Images/Jewel 4.png',
      'Assets/Modules/Images/Jewel 4.png',
    ],
  ],
  [
    'id'       => 'p5',
    'title'    => 'Rose Gold Pendant',
    'subtitle' => 'Rose Gold · Diamond Cluster · Petite Chain',
    'price'    => 30999,
    'mrp'      => 103536,
    'stock'    => 9,
    'badge'    => 'Everyday Favourite',
    'best_for' => 'Layering & Daily Wear',
    'tags'     => ['Pendant','Diamond','Rose Gold'],
    'specs'    => ['Diamond Cluster Design','14K Rose Gold','16" Petite Chain','Lightweight Build','Certified Authentic'],
    'images'   => [
      'Assets/Modules/Images/Jewel 2.png',
      'Assets/Modules/Images/Jewel 2.png',
      'Assets/Modules/Images/Jewel 2.png',
    ],
  ],
];
?>

<style>
/* ═══════════════════════════════════════════════════════════
   PRODUCTS SECTION
═══════════════════════════════════════════════════════════ */
:root {
  --pd-pad-y: clamp(64px, 9vw, 110px);
  --pd-pad-x: clamp(20px, 5vw, 80px);
  --pd-card-w: 300px;
  --pd-ease:   cubic-bezier(0.4,0,0.2,1);
  --pd-spring: cubic-bezier(0.34,1.56,0.64,1);
}

/* ── SHELL ── */
.lc-products-section {
  position: relative;
  padding: var(--pd-pad-y) 0;
  background: #fff;
  overflow: hidden;
  font-family: var(--lap-font,'Manrope', sans-serif);
  isolation: isolate;
}
.lc-products-section::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 1px;
  background: linear-gradient(90deg,transparent,rgba(15,107,91,.45) 40%,rgba(15,107,91,.45) 60%,transparent);
}

/* ── HEADER ── */
.lc-pd-head {
  position: relative;
  padding: 0 var(--pd-pad-x) clamp(32px,4vw,52px);
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 20px;
  flex-wrap: wrap;
}
.lc-pd-head-left {
  display: flex; flex-direction: column; gap:6px;
}
.lc-pd-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size:.62rem; font-weight:700; letter-spacing:3.5px;
  text-transform:uppercase; color:var(--lap-text-muted,#666);
  margin-bottom:10px;
}
.lc-pd-eyebrow::before {
  content:'';
  width:28px; height:1.5px;
  background:var(--lap-neon-accent,#0F6B5B);
}
.lc-pd-title {
  font-size: clamp(1.8rem,3.5vw,3rem);
  font-weight:700; letter-spacing:-1px;
  text-transform:uppercase; line-height:1.05;
  color:var(--lap-text-dark,#050505);
}
.lc-pd-title em {
  font-style:normal;
  color:var(--lap-neon-accent,#0F6B5B);
  -webkit-text-stroke:.8px #7fa800;
}
.lc-pd-desc {
  margin-top:10px;
  font-size:clamp(.8rem,1vw,.92rem);
  color:var(--lap-text-muted,#666);
  line-height:1.7; max-width:480px;
}
.lc-pd-head-right {
  display:flex; align-items:center; gap:10px;
}
.lc-pd-view-all {
  display:inline-flex; align-items:center; gap:8px;
  padding:12px 28px;
  background:var(--lap-text-dark,#050505);
  color:var(--lap-neon-accent,#0F6B5B);
  font-family:var(--lap-font,'Manrope', sans-serif);
  font-size:.72rem; font-weight:800; letter-spacing:2px;
  text-transform:uppercase; text-decoration:none;
  border-radius:4px; border:none; cursor:pointer;
  transition: box-shadow .25s, transform .2s var(--pd-spring);
}
.lc-pd-view-all:hover {
  box-shadow:0 0 18px rgba(15,107,91,.45),0 0 36px rgba(15,107,91,.2);
  transform:translateY(-3px);
}
.lc-pd-view-all svg { width:14px; height:14px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }

/* ── SCROLL TRACK ── */
.lc-pd-track-wrap {
  position:relative;
}
/* Fade edges */
.lc-pd-track-wrap::before,
.lc-pd-track-wrap::after {
  content:'';
  position:absolute; top:0; bottom:0; width:80px;
  z-index:10; pointer-events:none;
}
.lc-pd-track-wrap::before {
  left:0;
  background:linear-gradient(90deg,#fff,transparent);
}
.lc-pd-track-wrap::after {
  right:0;
  background:linear-gradient(-90deg,#fff,transparent);
}

.lc-pd-track {
  display:flex;
  gap:20px;
  padding: 12px var(--pd-pad-x) 40px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  cursor: grab;
  user-select: none;
}
.lc-pd-track::-webkit-scrollbar { display:none; }
.lc-pd-track.is-dragging { cursor:grabbing; scroll-snap-type:none; }

/* ── PRODUCT CARD ── */
.lc-pd-card {
  flex: 0 0 var(--pd-card-w);
  width: var(--pd-card-w);
  border: 1.5px solid var(--lap-border-color,#E5E5E5);
  border-radius: 8px;
  background: #fff;
  scroll-snap-align: start;
  position: relative;
  overflow: hidden;
  transition: border-color .25s var(--pd-ease), box-shadow .25s var(--pd-ease), transform .25s var(--pd-spring);
  display:flex; flex-direction:column;
}
.lc-pd-card:hover {
  border-color: var(--lap-text-dark,#050505);
  box-shadow: 5px 5px 0 var(--lap-neon-accent,#0F6B5B);
  transform: translateY(-5px);
}

/* ── IMAGE AREA ── */
.lc-card-img-wrap {
  position: relative;
  width: 100%;
  aspect-ratio: 3/2;
  background: #0a0a0a;
  overflow: hidden;
  border-radius: 6px 6px 0 0;
}
.lc-card-img {
  position: absolute; inset:0;
  width:100%; height:100%;
  object-fit: cover;
  transition: opacity .55s var(--pd-ease), transform .55s var(--pd-ease);
}
.lc-card-img.is-hidden  { opacity:0; transform:scale(1.04); }
.lc-card-img.is-active  { opacity:1; transform:scale(1); }
/* Scanline overlay */
.lc-card-img-scan {
  position:absolute; inset:0; z-index:2; pointer-events:none;
  background: repeating-linear-gradient(0deg,rgba(15,107,91,.03) 0px,rgba(15,107,91,.03) 1px,transparent 1px,transparent 3px);
  opacity:0;
  transition:opacity .3s;
}
.lc-pd-card:hover .lc-card-img-scan { opacity:1; }
/* Image dots indicator */
.lc-card-img-dots {
  position:absolute; bottom:8px; left:50%; transform:translateX(-50%);
  display:flex; gap:5px; z-index:3;
}
.lc-card-img-dot {
  width:5px; height:5px; border-radius:50%;
  background:rgba(255,255,255,.4);
  transition:background .25s, transform .25s;
}
.lc-card-img-dot.is-active { background:var(--lap-neon-accent,#0F6B5B); transform:scale(1.4); }

/* ── BADGE (top-left) ── */
.lc-card-badge {
  position:absolute; top:12px; left:12px; z-index:4;
  background:var(--lap-text-dark,#050505);
  color:var(--lap-neon-accent,#0F6B5B);
  font-size:.52rem; font-weight:800; letter-spacing:2px;
  text-transform:uppercase; padding:4px 10px; border-radius:3px;
  border:1px solid rgba(15,107,91,.3);
}

/* ── COMPARE BTN (top-right) ── */
.lc-card-compare-btn {
  position:absolute; top:10px; right:10px; z-index:4;
  width:34px; height:34px;
  border-radius:50%;
  background:rgba(255,255,255,.9);
  border:1.5px solid var(--lap-border-color,#E5E5E5);
  display:flex; align-items:center; justify-content:center;
  cursor:pointer; backdrop-filter:blur(6px);
  transition:background .2s, border-color .2s, transform .2s var(--pd-spring), box-shadow .2s;
}
.lc-card-compare-btn:hover {
  background:var(--lap-text-dark,#050505);
  border-color:var(--lap-text-dark,#050505);
  transform:scale(1.12);
  box-shadow:2px 2px 0 var(--lap-neon-accent,#0F6B5B);
}
.lc-card-compare-btn svg {
  width:15px; height:15px;
  stroke:var(--lap-text-dark,#050505);
  fill:none; stroke-width:2.2; stroke-linecap:round; stroke-linejoin:round;
  transition:stroke .2s;
}
.lc-card-compare-btn:hover svg { stroke:var(--lap-neon-accent,#0F6B5B); }
.lc-card-compare-btn.is-added {
  background:var(--lap-text-dark,#050505);
  border-color:var(--lap-neon-accent,#0F6B5B);
  box-shadow:0 0 10px rgba(15,107,91,.5);
}
.lc-card-compare-btn.is-added svg { stroke:var(--lap-neon-accent,#0F6B5B); }

/* ── CARD BODY ── */
.lc-card-body {
  padding:16px;
  display:flex; flex-direction:column; gap:8px;
  flex:1;
}
/* Stock */
.lc-card-stock {
  display:inline-flex; align-items:center; gap:6px;
  font-size:.55rem; font-weight:700; letter-spacing:1.8px;
  text-transform:uppercase; color:var(--lap-text-muted,#666);
}
.lc-card-stock-dot {
  width:6px; height:6px; border-radius:50%; flex-shrink:0;
  animation: stockBlink 2s ease infinite;
}
.lc-card-stock-dot.green { background:#22c55e; }
.lc-card-stock-dot.amber { background:#f59e0b; }
@keyframes stockBlink { 0%,100%{opacity:1} 50%{opacity:.4} }
/* Title */
.lc-card-title {
  font-size:.92rem; font-weight:700; letter-spacing:-.3px;
  color:var(--lap-text-dark,#050505); line-height:1.25;
  text-transform:uppercase;
}
.lc-card-subtitle {
  font-size:.68rem; color:var(--lap-text-muted,#666);
  letter-spacing:.3px; line-height:1.4; font-weight:400;
}
/* Price row */
.lc-card-price-row {
  display:flex; align-items:center; gap:8px; flex-wrap:wrap;
  margin-top:2px;
}
.lc-card-price-sale {
  font-size:1.15rem; font-weight:800;
  color:var(--lap-text-dark,#050505); letter-spacing:-.5px;
}
.lc-card-price-mrp {
  font-size:.72rem; color:var(--lap-text-muted,#666);
  text-decoration:line-through;
}
.lc-card-price-off {
  background:var(--lap-neon-accent,#0F6B5B);
  color:var(--lap-text-dark,#050505);
  font-size:.55rem; font-weight:800; letter-spacing:1.5px;
  text-transform:uppercase; padding:3px 8px; border-radius:3px;
}
/* Tags */
.lc-card-tags {
  display:flex; gap:5px; flex-wrap:wrap; margin-top:2px;
}
.lc-card-tag {
  font-size:.5rem; font-weight:700; letter-spacing:1.2px;
  text-transform:uppercase; padding:3px 8px;
  border:1px solid var(--lap-border-color,#E5E5E5);
  border-radius:2px; color:var(--lap-text-muted,#666);
  transition:border-color .2s, color .2s;
}
.lc-pd-card:hover .lc-card-tag {
  border-color:rgba(15,107,91,.5);
  color:var(--lap-text-dark,#050505);
}
/* CTA */
.lc-card-footer {
  padding:0 16px 16px;
  display:flex; gap:8px;
}
.lc-card-btn-primary {
  flex:1;
  display:flex; align-items:center; justify-content:center; gap:7px;
  padding:11px 16px;
  background:var(--lap-text-dark,#050505);
  color:var(--lap-neon-accent,#0F6B5B);
  font-family:var(--lap-font,'Manrope', sans-serif);
  font-size:.65rem; font-weight:800; letter-spacing:1.8px;
  text-transform:uppercase; text-decoration:none;
  border:none; border-radius:4px; cursor:pointer;
  transition:box-shadow .2s, transform .15s var(--pd-spring);
}
.lc-card-btn-primary:hover {
  box-shadow:0 0 16px rgba(15,107,91,.4),0 0 32px rgba(15,107,91,.15);
  transform:translateY(-2px);
}
.lc-card-btn-primary:active { transform:scale(.96); }
.lc-card-btn-primary svg { width:13px; height:13px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }
.lc-card-btn-sec {
  width:40px; height:40px;
  display:flex; align-items:center; justify-content:center;
  border:1.5px solid var(--lap-border-color,#E5E5E5);
  border-radius:4px; background:none; cursor:pointer;
  color:var(--lap-text-dark,#050505);
  transition:border-color .2s, background .2s, color .2s, transform .15s var(--pd-spring);
}
.lc-card-btn-sec:hover {
  border-color:var(--lap-text-dark,#050505);
  background:var(--lap-text-dark,#050505);
  color:var(--lap-neon-accent,#0F6B5B);
  transform:translateY(-2px);
}
.lc-card-btn-sec svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2; stroke-linecap:round; stroke-linejoin:round; }

/* ── COMPARE TRAY (bottom bar) ── */
.lc-cmp-tray {
  position:fixed; bottom:0; left:0; right:0;
  z-index:8500;
  background:var(--lap-text-dark,#050505);
  border-top:2px solid var(--lap-neon-accent,#0F6B5B);
  padding:14px clamp(20px,5vw,80px);
  display:flex; align-items:center; gap:16px; flex-wrap:wrap;
  transform:translateY(100%);
  transition:transform .4s cubic-bezier(0.4,0,0.2,1);
  font-family:var(--lap-font,'Manrope', sans-serif);
  box-shadow:0 -8px 40px rgba(31,26,23,.25);
}
.lc-cmp-tray.is-open { transform:translateY(0); }
@media (max-width:900px) { .lc-cmp-tray { bottom:var(12px,118px); } }
.lc-cmp-tray-label {
  font-size:.6rem; font-weight:700; letter-spacing:2px;
  text-transform:uppercase; color:rgba(15,107,91,.65);
  flex-shrink:0;
}
.lc-cmp-slots {
  display:flex; gap:10px; flex:1; flex-wrap:wrap;
}
.lc-cmp-slot {
  display:flex; align-items:center; gap:8px;
  border:1.5px dashed rgba(15,107,91,.35);
  border-radius:5px; padding:7px 14px; min-width:180px;
  transition:border-color .2s;
}
.lc-cmp-slot.is-filled { border-color:var(--lap-neon-accent,#0F6B5B); border-style:solid; }
.lc-cmp-slot-name {
  font-size:.65rem; font-weight:600; color:#fff;
  white-space:nowrap; overflow:hidden; text-overflow:ellipsis;
  max-width:130px;
  flex:1;
}
.lc-cmp-slot-empty {
  font-size:.6rem; font-weight:600; letter-spacing:1.5px;
  text-transform:uppercase; color:rgba(255,255,255,.3);
}
.lc-cmp-slot-remove {
  background:none; border:none; cursor:pointer;
  width:18px; height:18px;
  display:flex; align-items:center; justify-content:center;
  color:rgba(15,107,91,.6); flex-shrink:0;
  transition:color .15s, transform .15s;
}
.lc-cmp-slot-remove:hover { color:var(--lap-neon-accent,#0F6B5B); transform:rotate(90deg); }
.lc-cmp-slot-remove svg { width:12px; height:12px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; }
.lc-cmp-tray-actions { display:flex; gap:8px; flex-shrink:0; }
.lc-cmp-go-btn {
  display:flex; align-items:center; gap:7px;
  padding:10px 22px;
  background:var(--lap-neon-accent,#0F6B5B);
  color:var(--lap-text-dark,#050505);
  font-family:var(--lap-font,'Manrope', sans-serif);
  font-size:.68rem; font-weight:800; letter-spacing:2px;
  text-transform:uppercase; border:none; border-radius:4px; cursor:pointer;
  transition:box-shadow .2s, transform .15s var(--pd-spring);
}
.lc-cmp-go-btn:hover { box-shadow:0 0 16px rgba(15,107,91,.6); transform:translateY(-2px); }
.lc-cmp-go-btn svg { width:13px; height:13px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }
.lc-cmp-clear-btn {
  display:flex; align-items:center; gap:7px;
  padding:10px 18px;
  background:rgba(255,255,255,.07);
  color:rgba(255,255,255,.7);
  font-family:var(--lap-font,'Manrope', sans-serif);
  font-size:.65rem; font-weight:700; letter-spacing:1.5px;
  text-transform:uppercase; border:1.5px solid rgba(255,255,255,.15);
  border-radius:4px; cursor:pointer;
  transition:background .2s, color .2s, border-color .2s;
}
.lc-cmp-clear-btn:hover { background:rgba(255,255,255,.12); color:#fff; border-color:rgba(255,255,255,.3); }

/* ═══════════════════════════════════════════════════════════
   COMPARISON MODAL
═══════════════════════════════════════════════════════════ */
.lc-cmp-overlay {
  position:fixed; inset:0;
  background:rgba(31,26,23,.7);
  z-index:9700;
  opacity:0; pointer-events:none;
  transition:opacity .35s;
  backdrop-filter:blur(6px);
}
.lc-cmp-overlay.is-open { opacity:1; pointer-events:all; }

.lc-cmp-modal {
  position:fixed;
  top:50%; left:50%;
  transform:translate(-50%,-48%) scale(.96);
  width:min(960px,94vw);
  max-height:88vh;
  background:#fff;
  border:1.5px solid var(--lap-text-dark,#050505);
  border-radius:10px;
  box-shadow:8px 8px 0 var(--lap-neon-accent,#0F6B5B),0 40px 80px rgba(31,26,23,.25);
  z-index:9800;
  opacity:0; pointer-events:none;
  transition:opacity .35s, transform .35s cubic-bezier(0.34,1.56,0.64,1);
  display:flex; flex-direction:column;
  overflow:hidden;
  font-family:var(--lap-font,'Manrope', sans-serif);
}
.lc-cmp-modal.is-open {
  opacity:1; pointer-events:all;
  transform:translate(-50%,-50%) scale(1);
}

/* Modal header */
.lc-cmp-modal-head {
  display:flex; align-items:center; justify-content:space-between;
  padding:20px 28px;
  border-bottom:1.5px solid var(--lap-border-color,#E5E5E5);
  flex-shrink:0;
}
.lc-cmp-modal-head h2 {
  font-size:1rem; font-weight:700; letter-spacing:3px;
  text-transform:uppercase; color:var(--lap-text-dark,#050505);
}
.lc-cmp-modal-close {
  width:36px; height:36px;
  display:flex; align-items:center; justify-content:center;
  border:1.5px solid var(--lap-border-color,#E5E5E5);
  border-radius:50px; background:none; cursor:pointer;
  color:var(--lap-text-dark,#050505);
  transition:all .2s;
}
.lc-cmp-modal-close:hover { background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#0F6B5B); border-color:var(--lap-text-dark,#050505); transform:rotate(90deg); }
.lc-cmp-modal-close svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }

/* Modal body */
.lc-cmp-modal-body { flex:1; overflow-y:auto; padding:0 28px 28px; }

/* ═══════════════════════════════════════════════════════════
   QUICK-VIEW MODAL
═══════════════════════════════════════════════════════════ */
.lc-qv-overlay {
  position:fixed; inset:0;
  background:rgba(31,26,23,.7);
  z-index:9700;
  opacity:0; pointer-events:none;
  transition:opacity .35s;
  backdrop-filter:blur(6px);
}
.lc-qv-overlay.is-open { opacity:1; pointer-events:all; }

.lc-qv-modal {
  position:fixed;
  top:50%; left:50%;
  transform:translate(-50%,-48%) scale(.96);
  width:min(760px,94vw);
  max-height:88vh;
  background:#fff;
  border:1.5px solid var(--lap-text-dark,#1F1A17);
  border-radius:10px;
  box-shadow:8px 8px 0 var(--lap-gold,#C8A75A),0 40px 80px rgba(31,26,23,.25);
  z-index:9800;
  opacity:0; pointer-events:none;
  transition:opacity .35s, transform .35s cubic-bezier(0.34,1.56,0.64,1);
  display:flex; flex-direction:column;
  overflow:hidden;
  font-family:var(--lap-font,'Manrope', sans-serif);
}
.lc-qv-modal.is-open {
  opacity:1; pointer-events:all;
  transform:translate(-50%,-50%) scale(1);
}
.lc-qv-modal-body { flex:1; overflow-y:auto; padding:0 28px 28px; }
.lc-qv-layout { display:grid; grid-template-columns:1fr 1fr; gap:28px; }
@media (max-width:640px) { .lc-qv-layout { grid-template-columns:1fr; } }
.lc-qv-img-wrap {
  border-radius:8px; overflow:hidden; background:#F1ECE2;
  aspect-ratio:1/1;
}
.lc-qv-img-wrap img { width:100%; height:100%; object-fit:cover; }
.lc-qv-stock { display:flex; align-items:center; gap:6px; font-size:.72rem; font-weight:700; text-transform:uppercase; letter-spacing:1px; margin-bottom:8px; }
.lc-qv-stock-dot { width:7px; height:7px; border-radius:50%; }
.lc-qv-stock-dot.green { background:#1F8A5C; }
.lc-qv-stock-dot.amber { background:#C8A75A; }
.lc-qv-title { font-size:1.3rem; font-weight:700; letter-spacing:-.3px; margin-bottom:4px; }
.lc-qv-subtitle { font-size:.85rem; color:var(--lap-text-muted,#6E6257); margin-bottom:14px; }
.lc-qv-price-row { display:flex; align-items:baseline; gap:10px; margin-bottom:14px; }
.lc-qv-price-sale { font-size:1.5rem; font-weight:800; }
.lc-qv-price-mrp { font-size:.85rem; color:var(--lap-text-muted,#6E6257); text-decoration:line-through; }
.lc-qv-price-off { background:var(--lap-neon-accent,#0F6B5B); color:#fff; font-size:.65rem; font-weight:800; letter-spacing:1px; text-transform:uppercase; padding:3px 8px; border-radius:3px; }
.lc-qv-best-for { font-size:.78rem; margin-bottom:14px; }
.lc-qv-best-for strong { text-transform:uppercase; letter-spacing:1px; font-size:.65rem; color:var(--lap-text-muted,#6E6257); display:block; margin-bottom:3px; }
.lc-qv-specs { list-style:none; padding:0; margin:0 0 18px; }
.lc-qv-specs li { display:flex; align-items:flex-start; gap:8px; font-size:.82rem; padding:6px 0; border-bottom:1px solid var(--lap-border-color,#DDD3C6); }
.lc-qv-specs li:last-child { border-bottom:none; }
.lc-qv-specs li svg { width:14px; height:14px; flex-shrink:0; margin-top:2px; stroke:var(--lap-neon-accent,#0F6B5B); stroke-width:2.5; fill:none; }
.lc-qv-tags { display:flex; flex-wrap:wrap; gap:6px; margin-bottom:18px; }
.lc-qv-tag { font-size:.62rem; font-weight:700; letter-spacing:.5px; text-transform:uppercase; padding:4px 10px; border:1px solid var(--lap-border-color,#DDD3C6); border-radius:20px; color:var(--lap-text-muted,#6E6257); }
.lc-qv-cta-row { display:flex; gap:12px; }
.lc-qv-add-btn {
  flex:1; display:flex; align-items:center; justify-content:center; gap:8px;
  padding:13px 20px; background:var(--lap-text-dark,#1F1A17); color:var(--lap-neon-accent,#0F6B5B);
  font-family:var(--lap-font,'Manrope', sans-serif); font-size:.72rem; font-weight:800; letter-spacing:1.8px;
  text-transform:uppercase; border:none; border-radius:5px; cursor:pointer;
  transition:box-shadow .2s, transform .15s;
}
.lc-qv-add-btn:hover { box-shadow:0 0 16px rgba(15,107,91,.4); transform:translateY(-2px); }
.lc-qv-add-btn svg { width:14px; height:14px; stroke:currentColor; fill:none; stroke-width:2.5; }
.lc-qv-add-btn.is-added { background:var(--lap-neon-accent,#0F6B5B); color:#fff; }

/* Best-for banner */
.lc-cmp-best-row {
  display:flex; gap:16px; padding:20px 0 16px;
  flex-wrap:wrap;
}
.lc-cmp-best-card {
  flex:1; min-width:200px;
  border:1.5px solid var(--lap-neon-accent,#0F6B5B);
  border-radius:6px;
  padding:12px 16px;
  display:flex; align-items:flex-start; gap:10px;
  background:linear-gradient(135deg,rgba(15,107,91,.07),transparent);
}
.lc-cmp-best-icon {
  width:34px; height:34px; border-radius:5px;
  background:var(--lap-text-dark,#050505);
  display:flex; align-items:center; justify-content:center;
  flex-shrink:0;
}
.lc-cmp-best-icon svg { width:16px; height:16px; stroke:var(--lap-neon-accent,#0F6B5B); fill:none; stroke-width:2; stroke-linecap:round; stroke-linejoin:round; }
.lc-cmp-best-text {}
.lc-cmp-best-label {
  font-size:.52rem; font-weight:700; letter-spacing:2px;
  text-transform:uppercase; color:var(--lap-text-muted,#666);
}
.lc-cmp-best-value {
  font-size:.78rem; font-weight:700;
  color:var(--lap-text-dark,#050505); margin-top:3px;
}

/* Spec table */
.lc-cmp-table { width:100%; border-collapse:collapse; margin-top:4px; }
.lc-cmp-table th, .lc-cmp-table td {
  padding:11px 14px;
  border-bottom:1px solid var(--lap-border-color,#E5E5E5);
  text-align:left;
  font-family:var(--lap-font,'Manrope', sans-serif);
}
.lc-cmp-table th {
  font-size:.6rem; font-weight:800; letter-spacing:2px;
  text-transform:uppercase; color:var(--lap-text-muted,#666);
  background:#F8F8F8;
}
.lc-cmp-table th.is-product {
  font-size:.72rem; font-weight:700; letter-spacing:-.3px;
  text-transform:uppercase; color:var(--lap-text-dark,#050505);
  background:#fff;
}
.lc-cmp-table td {
  font-size:.75rem; font-weight:500; letter-spacing:.2px;
  color:var(--lap-text-dark,#050505);
}
.lc-cmp-table td.row-label {
  font-size:.6rem; font-weight:700; letter-spacing:1.5px;
  text-transform:uppercase; color:var(--lap-text-muted,#666);
  background:#F8F8F8; white-space:nowrap;
}
.lc-cmp-table td.is-winner {
  color:var(--lap-text-dark,#050505); font-weight:800;
  position:relative;
}
.lc-cmp-table td.is-winner::after {
  content:'✓';
  position:absolute; top:50%; right:10px;
  transform:translateY(-50%);
  width:18px; height:18px; border-radius:50%;
  background:var(--lap-neon-accent,#0F6B5B);
  color:var(--lap-text-dark,#050505);
  font-size:.6rem; font-weight:900;
  display:flex; align-items:center; justify-content:center;
  line-height:1;
}
.lc-cmp-table tr:hover td { background:rgba(15,107,91,.04); }
.lc-cmp-table .price-sale { font-size:.9rem; font-weight:800; }
.lc-cmp-table .price-mrp { font-size:.65rem; color:var(--lap-text-muted,#666); text-decoration:line-through; }
.lc-cmp-table .price-off {
  display:inline-block; margin-top:3px;
  background:var(--lap-neon-accent,#0F6B5B);
  color:var(--lap-text-dark,#050505);
  font-size:.52rem; font-weight:800; letter-spacing:1px;
  text-transform:uppercase; padding:2px 7px; border-radius:2px;
}
/* Modal CTA row */
.lc-cmp-modal-cta {
  display:flex; gap:12px; padding-top:20px; flex-wrap:wrap;
}
.lc-cmp-modal-cta a {
  flex:1; min-width:160px;
  display:flex; align-items:center; justify-content:center; gap:8px;
  padding:12px 20px;
  background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#0F6B5B);
  font-family:var(--lap-font,'Manrope', sans-serif);
  font-size:.65rem; font-weight:800; letter-spacing:2px;
  text-transform:uppercase; text-decoration:none;
  border-radius:5px; cursor:pointer;
  transition:box-shadow .2s, transform .15s var(--pd-spring);
}
.lc-cmp-modal-cta a:hover { box-shadow:0 0 18px rgba(15,107,91,.4); transform:translateY(-2px); }
.lc-cmp-modal-cta a svg { width:13px; height:13px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }
</style>

<!-- ═══════════════════════════════════════════════════════
     PRODUCTS HTML
═══════════════════════════════════════════════════════ -->
<section class="lc-products-section" id="lcProducts" aria-label="Featured Products">

  <!-- Header -->
  <header class="lc-pd-head">
    <div class="lc-pd-head-left">
      <div class="lc-pd-eyebrow">Handpicked For You</div>
      <h2 class="lc-pd-title">Featured <em>Pieces</em></h2>
      <p class="lc-pd-desc">GIA certified, ethically sourced gemstones ready to ship today. Every piece comes with a lifetime warranty and a certificate of authenticity.</p>
    </div>
    <div class="lc-pd-head-right">
      <a href="/store" class="lc-pd-view-all">
        View All
        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
      </a>
    </div>
  </header>

  <!-- Scroll Track -->
  <div class="lc-pd-track-wrap">
    <div class="lc-pd-track" id="lcPdTrack" role="list" aria-label="Product listing">

      <?php foreach($products as $i => $p):
        $off = round((($p['mrp'] - $p['price']) / $p['mrp']) * 100);
        $stockClass = $p['stock'] <= 5 ? 'amber' : 'green';
        $stockLabel = $p['stock'] <= 5
          ? 'Only ' . $p['stock'] . ' left'
          : $p['stock'] . ' in stock';
      ?>
      <article class="lc-pd-card"
               role="listitem"
               data-id="<?= htmlspecialchars($p['id']) ?>"
               data-title="<?= htmlspecialchars($p['title']) ?>"
               data-best-for="<?= htmlspecialchars($p['best_for']) ?>"
               data-price="<?= $p['price'] ?>"
               data-mrp="<?= $p['mrp'] ?>"
               data-off="<?= $off ?>"
               data-stock="<?= $p['stock'] ?>"
               data-specs="<?= htmlspecialchars(json_encode($p['specs'])) ?>"
               data-subtitle="<?= htmlspecialchars($p['subtitle']) ?>"
               data-images="<?= htmlspecialchars(json_encode($p['images'])) ?>">

        <!-- Image area -->
        <div class="lc-card-img-wrap" data-card-imgs>
          <?php foreach($p['images'] as $ii => $img): ?>
          <img class="lc-card-img <?= $ii===0?'is-active':'is-hidden' ?>"
               src="<?= htmlspecialchars($img) ?>"
               alt="<?= htmlspecialchars($p['title']) ?> - view <?= $ii+1 ?>"
               loading="lazy">
          <?php endforeach; ?>
          <!-- scanline -->
          <div class="lc-card-img-scan" aria-hidden="true"></div>
          <!-- dots -->
          <div class="lc-card-img-dots" aria-hidden="true">
            <?php foreach($p['images'] as $ii => $img): ?>
            <span class="lc-card-img-dot <?= $ii===0?'is-active':'' ?>" data-img-dot="<?= $ii ?>"></span>
            <?php endforeach; ?>
          </div>
          <!-- Badge -->
          <span class="lc-card-badge"><?= htmlspecialchars($p['badge']) ?></span>
          <!-- Compare -->
          <button class="lc-card-compare-btn"
                  aria-label="Add to compare"
                  data-compare-btn
                  data-product-id="<?= htmlspecialchars($p['id']) ?>">
            <svg viewBox="0 0 24 24">
              <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/>
            </svg>
          </button>
        </div>

        <!-- Body -->
        <div class="lc-card-body">
          <div class="lc-card-stock">
            <span class="lc-card-stock-dot <?= $stockClass ?>"></span>
            <?= htmlspecialchars($stockLabel) ?>
          </div>
          <div class="lc-card-title"><?= htmlspecialchars($p['title']) ?></div>
          <div class="lc-card-subtitle"><?= htmlspecialchars($p['subtitle']) ?></div>
          <div class="lc-card-price-row">
            <span class="lc-card-price-sale">₹<?= number_format($p['price']) ?></span>
            <span class="lc-card-price-mrp">₹<?= number_format($p['mrp']) ?></span>
            <span class="lc-card-price-off"><?= $off ?>% OFF</span>
          </div>
          <div class="lc-card-tags">
            <?php foreach($p['tags'] as $tag): ?>
            <span class="lc-card-tag"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Footer CTA -->
        <div class="lc-card-footer">
          <button type="button" class="lc-card-btn-primary" data-view-details>
            <svg viewBox="0 0 24 24"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            View Details
          </button>
          <button class="lc-card-btn-sec" aria-label="Add to cart" data-add-cart>
            <svg viewBox="0 0 24 24"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </button>
        </div>

      </article>
      <?php endforeach; ?>

    </div><!-- /track -->
  </div><!-- /track-wrap -->

</section>

<!-- ═══════════════════════════════════════════════════════
     COMPARE TRAY
═══════════════════════════════════════════════════════ -->
<div class="lc-cmp-tray" id="lcCmpTray" role="region" aria-label="Comparison tray" aria-live="polite">
  <span class="lc-cmp-tray-label">Comparing</span>
  <div class="lc-cmp-slots" id="lcCmpSlots">
    <div class="lc-cmp-slot" data-slot="0">
      <span class="lc-cmp-slot-empty">Select a product</span>
    </div>
    <div class="lc-cmp-slot" data-slot="1">
      <span class="lc-cmp-slot-empty">Select a product</span>
    </div>
  </div>
  <div class="lc-cmp-tray-actions">
    <button class="lc-cmp-go-btn" id="lcCmpGoBtn" disabled>
      <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
      Compare Now
    </button>
    <button class="lc-cmp-clear-btn" id="lcCmpClearBtn">
      Clear All
    </button>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════
     COMPARISON MODAL
═══════════════════════════════════════════════════════ -->
<div class="lc-cmp-overlay" id="lcCmpOverlay" aria-hidden="true"></div>
<div class="lc-cmp-modal"   id="lcCmpModal"   role="dialog" aria-label="Product comparison" aria-modal="true">

  <div class="lc-cmp-modal-head">
    <h2>Side-by-Side Comparison</h2>
    <button class="lc-cmp-modal-close" id="lcCmpModalClose" aria-label="Close comparison">
      <svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>

  <div class="lc-cmp-modal-body" id="lcCmpModalBody">
    <!-- Filled by JS -->
  </div>

</div>

<!-- ═══════════════════════════════════════════════════════
     QUICK-VIEW MODAL
═══════════════════════════════════════════════════════ -->
<div class="lc-qv-overlay" id="lcQvOverlay" aria-hidden="true"></div>
<div class="lc-qv-modal" id="lcQvModal" role="dialog" aria-label="Product quick view" aria-modal="true">
  <div class="lc-cmp-modal-head">
    <h2>Quick View</h2>
    <button class="lc-cmp-modal-close" id="lcQvModalClose" aria-label="Close quick view">
      <svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="lc-qv-modal-body" id="lcQvModalBody">
    <!-- Filled by JS -->
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════════════════ -->
<script>
(function(){
'use strict';

/* ── Helpers ── */
const $ = id => document.getElementById(id);
const fmt = n => '₹' + Number(n).toLocaleString('en-IN');

/* ════════════════════════
   IMAGE HOVER CYCLE
════════════════════════ */
document.querySelectorAll('.lc-pd-card').forEach(card => {
  const imgs  = card.querySelectorAll('.lc-card-img');
  const dots  = card.querySelectorAll('.lc-card-img-dot');
  let current = 0, timer = null;

  function show(idx) {
    imgs[current].classList.remove('is-active');
    imgs[current].classList.add('is-hidden');
    dots[current] && dots[current].classList.remove('is-active');
    current = (idx + imgs.length) % imgs.length;
    imgs[current].classList.remove('is-hidden');
    imgs[current].classList.add('is-active');
    dots[current] && dots[current].classList.add('is-active');
  }

  const imgWrap = card.querySelector('[data-card-imgs]');
  if (!imgWrap) return;

  imgWrap.addEventListener('mouseenter', () => {
    if (imgs.length < 2) return;
    timer = setInterval(() => show(current + 1), 1200);
  });
  imgWrap.addEventListener('mouseleave', () => {
    clearInterval(timer);
    show(0); // reset to first
  });
});

/* ════════════════════════
   DRAG-SCROLL
════════════════════════ */
const track = $('lcPdTrack');
if (track) {
  let isDown = false, startX = 0, scrollLeft = 0;
  track.addEventListener('mousedown', e => {
    isDown = true; track.classList.add('is-dragging');
    startX = e.pageX - track.offsetLeft;
    scrollLeft = track.scrollLeft;
  });
  track.addEventListener('mouseleave', () => { isDown = false; track.classList.remove('is-dragging'); });
  track.addEventListener('mouseup',    () => { isDown = false; track.classList.remove('is-dragging'); });
  track.addEventListener('mousemove',  e => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - track.offsetLeft;
    track.scrollLeft = scrollLeft - (x - startX) * 1.4;
  });
}

/* ════════════════════════
   COMPARE SYSTEM
════════════════════════ */
const MAX_CMP   = 2;
let compareList = []; // array of product id strings

const tray      = $('lcCmpTray');
const slotsWrap = $('lcCmpSlots');
const goBtn     = $('lcCmpGoBtn');
const clearBtn  = $('lcCmpClearBtn');
const overlay   = $('lcCmpOverlay');
const modal     = $('lcCmpModal');
const modalBody = $('lcCmpModalBody');
const modalClose= $('lcCmpModalClose');

function getProductData(id) {
  const card = document.querySelector(`.lc-pd-card[data-id="${id}"]`);
  if (!card) return null;
  return {
    id      : card.dataset.id,
    title   : card.dataset.title,
    subtitle: card.dataset.subtitle,
    bestFor : card.dataset.bestFor,
    price   : parseInt(card.dataset.price, 10),
    mrp     : parseInt(card.dataset.mrp, 10),
    off     : parseInt(card.dataset.off, 10),
    stock   : parseInt(card.dataset.stock, 10),
    specs   : JSON.parse(card.dataset.specs || '[]'),
    images  : JSON.parse(card.dataset.images || '[]'),
  };
}

function renderTray() {
  // slots
  const slotEls = slotsWrap.querySelectorAll('.lc-cmp-slot');
  slotEls.forEach((el, i) => {
    const pid = compareList[i];
    el.innerHTML = '';
    if (pid) {
      const p = getProductData(pid);
      el.classList.add('is-filled');
      el.innerHTML = `
        <span class="lc-cmp-slot-name">${p ? p.title : pid}</span>
        <button class="lc-cmp-slot-remove" data-remove="${pid}" aria-label="Remove ${p ? p.title : pid}">
          <svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>`;
    } else {
      el.classList.remove('is-filled');
      el.innerHTML = `<span class="lc-cmp-slot-empty">Select a product</span>`;
    }
  });
  // tray visibility
  compareList.length > 0 ? tray.classList.add('is-open') : tray.classList.remove('is-open');
  // go btn
  goBtn.disabled = compareList.length < 2;
  goBtn.style.opacity = compareList.length < 2 ? '.45' : '1';
  // card buttons
  document.querySelectorAll('[data-compare-btn]').forEach(btn => {
    const inList = compareList.includes(btn.dataset.productId);
    btn.classList.toggle('is-added', inList);
    btn.setAttribute('aria-label', inList ? 'Remove from compare' : 'Add to compare');
  });
}

function addToCompare(id) {
  if (compareList.includes(id)) {
    compareList = compareList.filter(x => x !== id);
  } else {
    if (compareList.length >= MAX_CMP) {
      // Shift oldest out
      compareList.shift();
    }
    compareList.push(id);
  }
  renderTray();
}

// Compare button clicks
document.addEventListener('click', e => {
  const btn = e.target.closest('[data-compare-btn]');
  if (btn) { e.preventDefault(); addToCompare(btn.dataset.productId); return; }

  const rem = e.target.closest('[data-remove]');
  if (rem) { addToCompare(rem.dataset.remove); return; }
});

if (clearBtn) clearBtn.addEventListener('click', () => { compareList = []; renderTray(); });

/* ── BUILD MODAL ── */
function openModal() {
  if (compareList.length < 2) return;
  const [a, b] = compareList.map(getProductData).filter(Boolean);
  if (!a || !b) return;

  const specLabels = ['Highlight 1','Highlight 2','Highlight 3','Highlight 4','Highlight 5'];
  const winnerIdx  = a.price <= b.price ? 0 : 1; // lower price = better value

  // Which is winner spec-by-spec (simple: longer spec = richer detail)
  function isWinner(ai, bi) { return (ai||'').length >= (bi||'').length; }

  const bestForIcons = {
    'engagement'  : '<path d="M12 2 2 8l10 6 10-6z"/><path d="M2 8v8l10 6 10-6V8"/>',
    'evening'     : '<path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>',
    'formal'      : '<path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>',
    'gifting'     : '<rect x="3" y="8" width="18" height="13" rx="1"/><path d="M12 8v13M3 12h18M12 8c-1.5-3-5-4-5-1.5S9 8 12 8c1.5-3 5-4 5-1.5S15 8 12 8z"/>',
    'layering'    : '<circle cx="12" cy="8" r="5"/><circle cx="12" cy="16" r="5"/>',
    'office'      : '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>',
    'default'     : '<path d="M6 3h12l4 6-10 12L2 9z"/><path d="M2 9h20M12 3l-3 6 3 12 3-12z"/>',
  };
  function getIcon(label) {
    for (const key of Object.keys(bestForIcons)) {
      if (label && label.toLowerCase().includes(key.toLowerCase())) return bestForIcons[key];
    }
    return bestForIcons.default;
  }

  modalBody.innerHTML = `
    <!-- Best-for -->
    <div class="lc-cmp-best-row">
      ${[a,b].map(p => `
        <div class="lc-cmp-best-card">
          <div class="lc-cmp-best-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">${getIcon(p.bestFor)}</svg>
          </div>
          <div class="lc-cmp-best-text">
            <div class="lc-cmp-best-label">Best For</div>
            <div class="lc-cmp-best-value">${p.bestFor}</div>
          </div>
        </div>`).join('')}
    </div>

    <!-- Spec table -->
    <table class="lc-cmp-table" role="table" aria-label="Product comparison table">
      <thead>
        <tr>
          <th></th>
          <th class="is-product">${a.title}</th>
          <th class="is-product">${b.title}</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="row-label">Model</td>
          <td>${a.subtitle}</td>
          <td>${b.subtitle}</td>
        </tr>
        <tr>
          <td class="row-label">Price</td>
          <td class="${winnerIdx===0?'is-winner':''}">
            <div class="price-sale">${fmt(a.price)}</div>
            <div class="price-mrp">${fmt(a.mrp)}</div>
            <span class="price-off">${a.off}% OFF</span>
          </td>
          <td class="${winnerIdx===1?'is-winner':''}">
            <div class="price-sale">${fmt(b.price)}</div>
            <div class="price-mrp">${fmt(b.mrp)}</div>
            <span class="price-off">${b.off}% OFF</span>
          </td>
        </tr>
        ${specLabels.map((lbl, i) => {
          const av = a.specs[i] || '—';
          const bv = b.specs[i] || '—';
          const aw = isWinner(av, bv);
          return `<tr>
            <td class="row-label">${lbl}</td>
            <td class="${aw?'is-winner':''}">${av}</td>
            <td class="${!aw?'is-winner':''}">${bv}</td>
          </tr>`;
        }).join('')}
        <tr>
          <td class="row-label">Stock</td>
          <td>${a.stock} units</td>
          <td>${b.stock} units</td>
        </tr>
      </tbody>
    </table>

    <!-- CTAs -->
    <div class="lc-cmp-modal-cta">
      ${[a,b].map(p => `
        <a href="/product?id=${p.id}">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
          Buy ${p.title.split(' ').slice(0,2).join(' ')}
        </a>`).join('')}
    </div>`;

  overlay.classList.add('is-open');
  modal.classList.add('is-open');
  overlay.setAttribute('aria-hidden', false);
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  overlay.classList.remove('is-open');
  modal.classList.remove('is-open');
  overlay.setAttribute('aria-hidden', true);
  document.body.style.overflow = '';
}

if (goBtn)       goBtn.addEventListener('click',        openModal);
if (modalClose)  modalClose.addEventListener('click',   closeModal);
if (overlay)     overlay.addEventListener('click',      closeModal);
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

renderTray();

/* ════════════════════════
   QUICK VIEW MODAL
════════════════════════ */
const qvOverlay    = $('lcQvOverlay');
const qvModal       = $('lcQvModal');
const qvModalBody   = $('lcQvModalBody');
const qvModalClose  = $('lcQvModalClose');

function openQuickView(card) {
  const p = getProductData(card.dataset.id);
  if (!p) return;
  const tags = Array.from(card.querySelectorAll('.lc-card-tag')).map(t => t.textContent.trim());
  const stockClass = p.stock <= 5 ? 'amber' : 'green';
  const stockLabel = p.stock <= 5 ? `Only ${p.stock} left` : `${p.stock} in stock`;
  const img = p.images[0] || '';

  qvModalBody.innerHTML = `
    <div class="lc-qv-layout">
      <div class="lc-qv-img-wrap">
        ${img ? `<img src="${img}" alt="${p.title}">` : ''}
      </div>
      <div class="lc-qv-details">
        <div class="lc-qv-stock"><span class="lc-qv-stock-dot ${stockClass}"></span>${stockLabel}</div>
        <div class="lc-qv-title">${p.title}</div>
        <div class="lc-qv-subtitle">${p.subtitle}</div>
        <div class="lc-qv-price-row">
          <span class="lc-qv-price-sale">${fmt(p.price)}</span>
          <span class="lc-qv-price-mrp">${fmt(p.mrp)}</span>
          <span class="lc-qv-price-off">${p.off}% OFF</span>
        </div>
        <div class="lc-qv-best-for"><strong>Best For</strong>${p.bestFor}</div>
        <ul class="lc-qv-specs">
          ${p.specs.map(s => `<li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>${s}</li>`).join('')}
        </ul>
        ${tags.length ? `<div class="lc-qv-tags">${tags.map(t => `<span class="lc-qv-tag">${t}</span>`).join('')}</div>` : ''}
        <div class="lc-qv-cta-row">
          <button type="button" class="lc-qv-add-btn" data-qv-add data-product-id="${p.id}">
            <svg viewBox="0 0 24 24"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            Add to Cart
          </button>
        </div>
      </div>
    </div>`;

  qvOverlay.classList.add('is-open');
  qvModal.classList.add('is-open');
  qvOverlay.setAttribute('aria-hidden', false);
  document.body.style.overflow = 'hidden';
}
function closeQuickView() {
  qvOverlay.classList.remove('is-open');
  qvModal.classList.remove('is-open');
  qvOverlay.setAttribute('aria-hidden', true);
  document.body.style.overflow = '';
}
if (qvModalClose) qvModalClose.addEventListener('click', closeQuickView);
if (qvOverlay)    qvOverlay.addEventListener('click', closeQuickView);
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeQuickView(); });

/* ════════════════════════
   ADD TO CART (card + quick-view)
════════════════════════ */
function addProductToCart(id, btn) {
  const p = getProductData(id);
  if (!p || !window.NSCart) return;
  window.NSCart.add({ id: p.id, title: p.title, price: p.price, image: p.images[0] || '' });
  if (btn) {
    btn.classList.add('is-added');
    const originalHtml = btn.innerHTML;
    if (btn.classList.contains('lc-qv-add-btn')) {
      btn.innerHTML = '<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Added to Cart';
    }
    setTimeout(() => { btn.classList.remove('is-added'); if (btn.classList.contains('lc-qv-add-btn')) btn.innerHTML = originalHtml; }, 1500);
  }
}

document.addEventListener('click', e => {
  const viewBtn = e.target.closest('[data-view-details]');
  if (viewBtn) {
    const card = viewBtn.closest('.lc-pd-card');
    if (card) openQuickView(card);
    return;
  }
  const addBtn = e.target.closest('[data-add-cart]');
  if (addBtn) {
    const card = addBtn.closest('.lc-pd-card');
    if (card) addProductToCart(card.dataset.id, addBtn);
    return;
  }
  const qvAddBtn = e.target.closest('[data-qv-add]');
  if (qvAddBtn) {
    addProductToCart(qvAddBtn.dataset.productId, qvAddBtn);
    return;
  }
});

})();
</script>