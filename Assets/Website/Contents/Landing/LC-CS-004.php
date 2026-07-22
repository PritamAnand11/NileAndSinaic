<?php
$categories = [
  [
    'slug'  => 'rings',
    'label' => 'Rings',
    'count' => '120+ Designs',
    'href'  => '/store?cat=rings',
    'color' => '#0F6B5B',
    'icon'  => '<path d="M12 22c5 0 9-3.5 9-8s-4-8-9-8-9 3.5-9 8 4 8 9 8z"/><path d="M12 6 9 2h6l-3 4z"/>',
    'img_placeholder' => 'Ring',
  ],
  [
    'slug'  => 'necklaces',
    'label' => 'Necklaces',
    'count' => '45+ Designs',
    'href'  => '/store?cat=necklaces',
    'color' => '#0F6B5B',
    'icon'  => '<path d="M4 4c0 6 3.5 10 8 10s8-4 8-10"/><circle cx="12" cy="18" r="3"/>',
    'img_placeholder' => 'Necklace',
  ],
  [
    'slug'  => 'earrings',
    'label' => 'Earrings',
    'count' => '30+ Designs',
    'href'  => '/store?cat=earrings',
    'color' => '#0F6B5B',
    'icon'  => '<path d="M12 2a4 4 0 0 0-4 4c0 2 4 5 4 5s4-3 4-5a4 4 0 0 0-4-4z"/><circle cx="12" cy="17" r="4"/>',
    'img_placeholder' => 'Earring',
  ],
  [
    'slug'  => 'bracelets',
    'label' => 'Bracelets',
    'count' => '20+ Designs',
    'href'  => '/store?cat=bracelets',
    'color' => '#0F6B5B',
    'icon'  => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/>',
    'img_placeholder' => 'Bracelet',
  ],
  [
    'slug'  => 'pendants',
    'label' => 'Pendants',
    'count' => '18+ Designs',
    'href'  => '/store?cat=pendants',
    'color' => '#0F6B5B',
    'icon'  => '<path d="M12 3v6"/><path d="M8 9h8l-2 12h-4z"/>',
    'img_placeholder' => 'Pendant',
  ],
  [
    'slug'  => 'accessories',
    'label' => 'Custom Orders',
    'count' => '80+ Items',
    'href'  => '/store?cat=accessories',
    'color' => '#0F6B5B',
    'icon'  => '<path d="M3 15l9-13 9 13H3z"/><path d="M3 15h18v4H3z"/>',
    'img_placeholder' => 'Custom',
  ],
];
?>

<style>
/* ═══════════════════════════════════════════════════════════
   CATEGORIES SECTION
═══════════════════════════════════════════════════════════ */


/* ── SHELL ── */
.lc-cat-section {
  position: relative;
  padding: var(--cat-pad-y) var(--cat-pad-x);
  background: var(--lap-text-dark,#050505);
  overflow: hidden;
  font-family: var(--lap-font,'Manrope', sans-serif);
  isolation: isolate;
  margin-top: -35px;
}

/* ── BACKGROUND GRID ── */
.lc-cat-bg-grid {
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(15,107,91,.06) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
  background-size: 48px 48px;
  pointer-events: none; z-index:0;
}
.lc-cat-bg-glow {
  position: absolute;
  border-radius: 50%;
  pointer-events: none; z-index:0; filter: blur(80px);
}
.lc-cat-bg-glow-1 {
  width:500px; height:500px;
  top:-100px; left:-100px;
  background: rgba(15,107,91,.07);
}
.lc-cat-bg-glow-2 {
  width:400px; height:400px;
  bottom:-80px; right:-80px;
  background: rgba(15,107,91,.05);
}

/* ── HEADER ── */
.lc-cat-head {
  position: relative; z-index:2;
  text-align: center;
  margin-bottom: clamp(40px,6vw,72px);
}
.lc-cat-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size:.62rem; font-weight:700; letter-spacing:3.5px;
  text-transform:uppercase; color:rgba(15,107,91,.6);
  margin-bottom:10px;
}
.lc-cat-eyebrow::before,
.lc-cat-eyebrow::after {
  content:'';
  width:28px; height:1.5px;
  background:var(--lap-neon-accent,#0F6B5B);
  opacity:.5;
}
.lc-cat-title {
  font-size:clamp(1.8rem,3.5vw,3rem);
  font-weight:700; letter-spacing:-1px;
  text-transform:uppercase; line-height:1.05;
  color:#fff;
}
.lc-cat-title em {
  font-style:normal;
  color:var(--lap-neon-accent,#0F6B5B);
  -webkit-text-stroke:.8px #7fa800;
}
.lc-cat-desc {
  margin-top:10px;
  font-size:clamp(.78rem,1vw,.9rem);
  color:rgba(255,255,255,.45);
  line-height:1.7; max-width:440px;
  margin-left:auto; margin-right:auto;
}

/* ── GRID ── */
.lc-cat-grid {
  position:relative; z-index:2;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-wrap:wrap;
  gap: clamp(20px,3.5vw,52px);
}

/* ── SINGLE ORBIT ── */
.lc-cat-orb {
  position:relative;
  width:var(--cat-orb);
  height:var(--cat-orb);
  flex-shrink:0;
  /* entry */
  opacity:0;
  transform:translateY(28px) scale(.88);
  transition: opacity .6s var(--cat-spring), transform .6s var(--cat-spring);
}
.lc-cat-orb.is-visible { opacity:1; transform:translateY(0) scale(1); }
.lc-cat-orb:nth-child(1){transition-delay:.00s}
.lc-cat-orb:nth-child(2){transition-delay:.08s}
.lc-cat-orb:nth-child(3){transition-delay:.16s}
.lc-cat-orb:nth-child(4){transition-delay:.24s}
.lc-cat-orb:nth-child(5){transition-delay:.32s}
.lc-cat-orb:nth-child(6){transition-delay:.40s}

/* ── SVG RINGS ── */
.lc-cat-svg {
  position:absolute; inset:0;
  width:100%; height:100%;
  overflow:visible;
  pointer-events:none;
}
/* Ring 1 — outer slow dotted CW */
.lc-cat-ring-1 {
  fill:none;
  stroke:rgba(15,107,91,.38);
  stroke-width:1.2;
  stroke-dasharray:3 8;
  transform-origin:50% 50%;
  animation: catSpinCW 20s linear infinite;
}
/* Ring 2 — middle fast dashed CCW */
.lc-cat-ring-2 {
  fill:none;
  stroke:rgba(15,107,91,.15);
  stroke-width:.8;
  stroke-dasharray:7 5;
  transform-origin:50% 50%;
  animation: catSpinCCW 12s linear infinite;
}
/* Ring 3 — arc accent CW fast */
.lc-cat-ring-arc {
  fill:none;
  stroke:rgba(15,107,91,.6);
  stroke-width:1.8;
  stroke-linecap:round;
  transform-origin:50% 50%;
  animation: catSpinCW 8s linear infinite;
}
@keyframes catSpinCW  { to { transform:rotate(360deg);  } }
@keyframes catSpinCCW { to { transform:rotate(-360deg); } }

/* Hover: speed up */
.lc-cat-orb:hover .lc-cat-ring-1  { animation-duration:5s; stroke:rgba(15,107,91,.65); stroke-width:1.6; }
.lc-cat-orb:hover .lc-cat-ring-2  { animation-duration:3s; }
.lc-cat-orb:hover .lc-cat-ring-arc{ animation-duration:2s; stroke:rgba(15,107,91,.9); filter:drop-shadow(0 0 6px rgba(15,107,91,.8)); }

/* Tick nodes */
.lc-cat-tick {
  fill:var(--lap-neon-accent,#0F6B5B);
  transform-origin:50% 50%;
  animation:catSpinCW 20s linear infinite;
}
.lc-cat-orb:hover .lc-cat-tick { animation-duration:5s; }

/* ── CIRCLE DISC (image container) ── */
.lc-cat-disc {
  position:absolute;
  top:50%; left:50%;
  transform:translate(-50%,-50%);
  width:64%; height:64%;
  border-radius:50%;
  background:rgba(255,255,255,.04);
  border:1.5px solid rgba(15,107,91,.2);
  overflow:hidden;
  display:flex; align-items:center; justify-content:center;
  transition:border-color .3s, background .3s, box-shadow .3s, transform .35s var(--cat-spring);
  z-index:2;
}
.lc-cat-orb:hover .lc-cat-disc {
  border-color:var(--lap-neon-accent,#0F6B5B);
  background:rgba(15,107,91,.08);
  box-shadow:0 0 30px rgba(15,107,91,.25), inset 0 0 20px rgba(15,107,91,.06);
  transform:translate(-50%,-50%) scale(1.08);
}

/* Image placeholder (swap with real imgs) */
.lc-cat-disc-img {
  width:60%; height:60%;
  object-fit:contain;
  filter:grayscale(1) brightness(1.6);
  transition:filter .35s, transform .35s var(--cat-spring);
}
.lc-cat-orb:hover .lc-cat-disc-img {
  filter:grayscale(0) brightness(1) drop-shadow(0 0 8px rgba(15,107,91,.5));
  transform:scale(1.12) rotate(-4deg);
}

/* Fallback icon (when no real image) */
.lc-cat-disc-icon {
  display:flex; align-items:center; justify-content:center;
  width:100%; height:100%;
}
.lc-cat-disc-icon svg {
  width:38%; height:38%;
  stroke:rgba(15,107,91,.55);
  fill:none; stroke-width:1.5; stroke-linecap:round; stroke-linejoin:round;
  transition:stroke .3s, transform .35s var(--cat-spring);
}
.lc-cat-orb:hover .lc-cat-disc-icon svg {
  stroke:var(--lap-neon-accent,#0F6B5B);
  transform:scale(1.18) rotate(-4deg);
  filter:drop-shadow(0 0 6px rgba(15,107,91,.7));
}

/* ── LINK WRAP ── */
.lc-cat-link {
  display:block;
  width:100%; height:100%;
  position:relative;
  text-decoration:none;
  outline-offset:4px;
}
.lc-cat-link:focus-visible .lc-cat-disc { box-shadow:0 0 0 3px var(--lap-neon-accent,#0F6B5B); }

/* ── LABEL below ── */
.lc-cat-label-wrap {
  position:absolute;
  bottom:-38px; left:50%;
  transform:translateX(-50%);
  text-align:center;
  width:max-content;
  transition:transform .3s var(--cat-spring);
  pointer-events:none;
}
.lc-cat-orb:hover .lc-cat-label-wrap { transform:translateX(-50%) translateY(-3px); }
.lc-cat-label {
  display:block;
  font-size:clamp(.65rem,.85vw,.78rem);
  font-weight:800; letter-spacing:2px;
  text-transform:uppercase;
  color:#fff;
  transition:color .25s;
}
.lc-cat-orb:hover .lc-cat-label { color:var(--lap-neon-accent,#0F6B5B); }
.lc-cat-count {
  display:block;
  font-size:.5rem; font-weight:600; letter-spacing:1.5px;
  text-transform:uppercase; color:rgba(255,255,255,.35);
  margin-top:3px;
  transition:color .25s;
}
.lc-cat-orb:hover .lc-cat-count { color:rgba(15,107,91,.55); }

/* ── CORNER BADGE (hover reveal) ── */
.lc-cat-corner-badge {
  position:absolute;
  top:-8px; right:-8px; z-index:5;
  background:var(--lap-neon-accent,#0F6B5B);
  color:var(--lap-text-dark,#050505);
  font-size:.48rem; font-weight:900; letter-spacing:1.5px;
  text-transform:uppercase; padding:3px 9px; border-radius:3px;
  opacity:0; transform:scale(.7) translateY(-4px);
  transition:opacity .25s var(--cat-spring), transform .25s var(--cat-spring);
  pointer-events:none; white-space:nowrap;
}
.lc-cat-orb:hover .lc-cat-corner-badge { opacity:1; transform:scale(1) translateY(0); }

/* ── BOTTOM CTA ── */
.lc-cat-footer {
  position:relative; z-index:2;
  text-align:center;
  margin-top:clamp(52px,7vw,84px);
}
.lc-cat-footer-text {
  font-size:clamp(.78rem,1vw,.88rem);
  color:rgba(255,255,255,.4); letter-spacing:.5px;
  margin-bottom:20px;
}
.lc-cat-footer-text strong { color:rgba(255,255,255,.75); }
.lc-cat-btn {
  display:inline-flex; align-items:center; gap:10px;
  padding:14px 38px;
  background:var(--lap-neon-accent,#0F6B5B);
  color:var(--lap-text-dark,#050505);
  font-family:var(--lap-font,'Manrope', sans-serif);
  font-size:.75rem; font-weight:800; letter-spacing:2.5px;
  text-transform:uppercase; text-decoration:none; border-radius:4px;
  border:none; cursor:pointer;
  transition:box-shadow .3s, transform .2s var(--cat-spring);
}
.lc-cat-btn:hover {
  box-shadow:0 0 24px rgba(15,107,91,.6),0 0 50px rgba(15,107,91,.25);
  transform:translateY(-4px);
}
.lc-cat-btn:active { transform:scale(.96); }
.lc-cat-btn svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }

/* ── DIVIDER LINE ── */
.lc-cat-divider {
  display:flex; align-items:center; gap:16px;
  margin-bottom:clamp(32px,5vw,60px);
  position:relative; z-index:2;
}
.lc-cat-divider-line {
  flex:1; height:1px;
  background:linear-gradient(90deg,transparent,rgba(15,107,91,.3),transparent);
}
.lc-cat-divider-label {
  font-size:.55rem; font-weight:700; letter-spacing:2.5px;
  text-transform:uppercase; color:rgba(15,107,91,.4);
  white-space:nowrap;
}

/* ── RESPONSIVE ── */
@media (max-width:900px) {
  .lc-cat-grid { gap:clamp(16px,4vw,32px); }
}
@media (max-width:560px) {
  :root { --cat-orb:118px; }
  .lc-cat-grid {
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:56px 10px;
    justify-items:center;
  }
  .lc-cat-label-wrap { bottom:-34px; }
}
@media (max-width:380px) {
  :root { --cat-orb:100px; }
  .lc-cat-grid { grid-template-columns:repeat(2,1fr); }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     CATEGORIES HTML
═══════════════════════════════════════════════════════ -->
<section class="lc-cat-section" id="lcCategories" aria-label="Shop by Category">

  <!-- BG -->
  <div class="lc-cat-bg-grid"    aria-hidden="true"></div>
  <div class="lc-cat-bg-glow lc-cat-bg-glow-1" aria-hidden="true"></div>
  <div class="lc-cat-bg-glow lc-cat-bg-glow-2" aria-hidden="true"></div>

  <!-- Header -->
  <header class="lc-cat-head">
    <div class="lc-cat-eyebrow">Browse by Type</div>
    <h2 class="lc-cat-title">Shop by <em>Category</em></h2>
    <p class="lc-cat-desc">Find exactly what you need. Every category stocked with Grade-A certified, fully tested machines.</p>
  </header>

  <!-- Divider -->
  <div class="lc-cat-divider" aria-hidden="true">
    <div class="lc-cat-divider-line"></div>
    <span class="lc-cat-divider-label">6 Categories · 300+ Products</span>
    <div class="lc-cat-divider-line"></div>
  </div>

  <!-- Grid -->
  <div class="lc-cat-grid" role="list" aria-label="Product categories">

    <?php foreach($categories as $i => $cat): ?>
    <div class="lc-cat-orb"
         role="listitem"
         aria-label="<?= htmlspecialchars($cat['label']) ?> — <?= htmlspecialchars($cat['count']) ?>">

      <!-- Corner badge -->
      <span class="lc-cat-corner-badge" aria-hidden="true">Browse</span>

      <a href="<?= htmlspecialchars($cat['href']) ?>" class="lc-cat-link"
         aria-label="Shop <?= htmlspecialchars($cat['label']) ?>">

        <!-- SVG rings -->
        <svg class="lc-cat-svg" viewBox="0 0 200 200" fill="none"
             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <!-- Outer dotted ring -->
          <circle class="lc-cat-ring-1" cx="100" cy="100"
                  r="<?= $i%2===0 ? '97' : '96' ?>"/>
          <!-- Mid dashed ring -->
          <circle class="lc-cat-ring-2" cx="100" cy="100"
                  r="<?= $i%2===0 ? '86' : '85' ?>"/>
          <!-- Short arc accent -->
          <path class="lc-cat-ring-arc"
                d="M 100,4 A 96,96 0 0,1 185,<?= 60 + $i*8 ?>"/>
          <!-- Tick dots at top / right / bottom / left -->
          <circle class="lc-cat-tick" cx="100" cy="3"   r="3.5"/>
          <circle class="lc-cat-tick" cx="197" cy="100" r="3"
                  style="opacity:.65"/>
          <circle class="lc-cat-tick" cx="100" cy="197" r="3"
                  style="opacity:.45"/>
          <circle class="lc-cat-tick" cx="3"   cy="100" r="2.5"
                  style="opacity:.55"/>
        </svg>

        <!-- Disc image/icon -->
        <div class="lc-cat-disc">
          <!--
            INTEGRATION POINT:
           BAAD ME 
            Example:
            <img class="lc-cat-disc-img"
                 src="/Assets/Images/categories/<?= $cat['slug'] ?>.webp"
                 alt="<?= htmlspecialchars($cat['label']) ?>"
                 loading="lazy" width="100" height="100">
          -->
          <div class="lc-cat-disc-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
              <?= $cat['icon'] ?>
            </svg>
          </div>
        </div>

        <!-- Label -->
        <div class="lc-cat-label-wrap" aria-hidden="true">
          <span class="lc-cat-label"><?= htmlspecialchars($cat['label']) ?></span>
          <span class="lc-cat-count"><?= htmlspecialchars($cat['count']) ?></span>
        </div>

      </a>
    </div>
    <?php endforeach; ?>

  </div><!-- /grid -->

  <!-- Footer CTA -->
  <div class="lc-cat-footer">
    <p class="lc-cat-footer-text">
      Can't find what you need? <strong>We have 300+ products</strong> across all categories.
    </p>
    <a href="/store" class="lc-cat-btn">
      <svg viewBox="0 0 24 24">
        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
      Browse Full Store
    </a>
  </div>

</section>

<!-- ═══════════════════════════════════════════════════════
     CATEGORIES JS
═══════════════════════════════════════════════════════ -->
<script>
(function(){
'use strict';

/* ── Intersection reveal ── */
const orbs = document.querySelectorAll('.lc-cat-orb');
const io = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('is-visible');
      io.unobserve(e.target);
    }
  });
}, { threshold: 0.2 });
orbs.forEach(o => io.observe(o));

/* ── Respect reduced-motion ── */
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  document.querySelectorAll('.lc-cat-ring-1,.lc-cat-ring-2,.lc-cat-ring-arc,.lc-cat-tick')
    .forEach(el => el.style.animationPlayState = 'paused');
}

})();
</script>
