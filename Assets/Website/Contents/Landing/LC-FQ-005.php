<?php
/**
 * ==========================================================================
 * © 2026 Niles & Sinai TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /Assets/Website/Contents/Landing/LC-FAQ-005.php
 * VERSION:    1.0.0
 * THEME:      Neon Edge (Cyberpunk) Light
 * FONT:       Manrope / Cormorant Garamond
 * DEPENDS ON: base.css + nav.php
 * SECTION:    Landing Page FAQ Strip
 * ==========================================================================
 */

$landingFaqs = [
  [
    'q' => 'How do I know my gemstone is genuinely natural and not synthetic?',
    'a' => 'Every gemstone is independently graded by GIA or an equivalent accredited lab before it ever reaches our workshop. You receive a certificate of authenticity with each piece, detailing origin, cut, clarity, and carat weight — never a synthetic substitute.',
    'tag' => 'Quality',
  ],
  [
    'q' => 'What warranty do I get on fine jewellery purchases?',
    'a' => 'All pieces carry a minimum 1-year warranty covering craftsmanship and setting integrity. We also offer 2-Year and Lifetime care plans at checkout. Our in-house jewellers handle every claim — no third-party drama.',
    'tag' => 'Warranty',
  ],
  [
    'q' => 'Do you ship pan-India? How fast?',
    'a' => 'We deliver to 800+ pincodes across India. Metro cities get delivery in 2–3 working days. Tier-2 and Tier-3 cities within 4–6 days. All shipments are fully insured and tracked in real-time.',
    'tag' => 'Shipping',
  ],
  [
    'q' => 'Can I customise the metal or gemstone before buying?',
    'a' => 'Yes. On any product page, choose your metal (Gold / Rose Gold / Platinum / Silver) and gemstone options. Price updates live. Custom orders are hand-finished in-house before dispatch, not outsourced.',
    'tag' => 'Customise',
  ],
  [
    'q' => 'What payment methods do you accept?',
    'a' => 'UPI, Net Banking, all major Credit & Debit cards, and EMI options starting ₹999/month. COD is available on orders up to ₹40,000. All transactions are SSL-secured.',
    'tag' => 'Payments',
  ],
  [
    'q' => 'What if I receive a defective or damaged piece?',
    'a' => 'Raise a ticket within 7 days — we arrange a free pickup and replacement within 5 working days. No questions asked. Every piece is quality-checked before dispatch, but when something slips through, we own it completely.',
    'tag' => 'Returns',
  ],
];
?>

<style>
/* ═══════════════════════════════════════════════════════════
   FAQ LANDING SECTION — NEON EDGE CYBERPUNK
═══════════════════════════════════════════════════════════ */
:root {
  --faq-pad-y:   clamp(72px, 10vw, 120px);
  --faq-pad-x:   clamp(20px, 6vw, 100px);
  --faq-ease:    cubic-bezier(0.4, 0, 0.2, 1);
  --faq-spring:  cubic-bezier(0.34, 1.56, 0.64, 1);
  --faq-snappy:  cubic-bezier(0.22, 1, 0.36, 1);
}

/* ── SHELL ── */
.lc-faq-section {
  position: relative;
  padding: var(--faq-pad-y) var(--faq-pad-x);
  background: #fff;
  overflow: hidden;
  font-family: var(--lap-font, 'Manrope', sans-serif);
  isolation: isolate;
}

/* ── BACKGROUND ── */
.lc-faq-bg-dots {
  position: absolute; inset: 0;
  background-image: radial-gradient(circle, rgba(15,107,91,.28) 1px, transparent 1px);
  background-size: 32px 32px;
  pointer-events: none; z-index: 0; opacity: .6;
}
.lc-faq-bg-line {
  position: absolute; left: 0; right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(15,107,91,.5) 40%, rgba(15,107,91,.5) 60%, transparent);
  pointer-events: none; z-index: 0;
}
.lc-faq-bg-line--top    { top: 0; }
.lc-faq-bg-line--bottom { bottom: 0; }

/* Neon bleed blobs */
.lc-faq-blob {
  position: absolute; border-radius: 50%;
  pointer-events: none; z-index: 0;
  filter: blur(90px); opacity: .4;
}
.lc-faq-blob--1 {
  width: 420px; height: 420px;
  top: -80px; right: -60px;
  background: rgba(15,107,91,.12);
}
.lc-faq-blob--2 {
  width: 300px; height: 300px;
  bottom: -60px; left: 5%;
  background: rgba(15,107,91,.07);
}

/* ── INNER LAYOUT ── */
.lc-faq-inner {
  position: relative; z-index: 2;
  display: grid;
  grid-template-columns: 1fr 1.55fr;
  gap: clamp(40px, 6vw, 96px);
  align-items: start;
}
@media (max-width: 960px) {
  .lc-faq-inner { grid-template-columns: 1fr; gap: 40px; }
}

/* ── LEFT PANEL ── */
.lc-faq-left { position: sticky; top: 100px; }
@media (max-width: 960px) { .lc-faq-left { position: static; } }

.lc-faq-eyebrow {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: .62rem; font-weight: 700; letter-spacing: 3.5px;
  text-transform: uppercase; color: var(--lap-text-muted, #666);
  margin-bottom: 16px;
}
.lc-faq-eyebrow::before {
  content: '';
  width: 28px; height: 1.5px;
  background: var(--lap-neon-accent, #0F6B5B);
}

.lc-faq-title {
  font-size: clamp(2rem, 4vw, 3.4rem);
  font-weight: 700; letter-spacing: -1.5px;
  text-transform: uppercase; line-height: 1.0;
  color: var(--lap-text-dark, #050505);
  margin-bottom: 20px;
}
.lc-faq-title em {
  font-style: normal;
  color: var(--lap-neon-accent, #0F6B5B);
  -webkit-text-stroke: .8px #7fa800;
}
.lc-faq-title .stroke-txt {
  -webkit-text-stroke: 1.5px var(--lap-text-dark, #050505);
  color: transparent;
}

.lc-faq-desc {
  font-size: clamp(.82rem, 1vw, .95rem);
  color: var(--lap-text-muted, #666);
  line-height: 1.75; max-width: 380px;
  margin-bottom: 36px;
}
@media (max-width: 960px) { .lc-faq-desc { max-width: 100%; } }

/* Counter badge */
.lc-faq-counter {
  display: inline-flex; align-items: center; gap: 12px;
  padding: 10px 20px;
  border: 1.5px solid var(--lap-text-dark, #050505);
  border-radius: 4px;
  font-size: .68rem; font-weight: 700; letter-spacing: 2px;
  text-transform: uppercase; color: var(--lap-text-dark, #050505);
  margin-bottom: 36px;
  position: relative; overflow: hidden;
}
.lc-faq-counter::before {
  content: '';
  position: absolute; inset: 0;
  background: var(--lap-text-dark, #050505);
  transform: scaleX(0); transform-origin: left;
  transition: transform .5s var(--faq-ease);
  z-index: -1;
}
.lc-faq-counter:hover { color: var(--lap-neon-accent, #0F6B5B); }
.lc-faq-counter:hover::before { transform: scaleX(1); }

.lc-faq-counter-num {
  font-size: 1.1rem; font-weight: 700;
  color: var(--lap-neon-accent, #0F6B5B);
  -webkit-text-stroke: .5px #7fa800;
  line-height: 1;
}
.lc-faq-counter:hover .lc-faq-counter-num { color: #fff; -webkit-text-stroke-color: #fff; }

/* Full page CTA */
.lc-faq-cta-link {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 14px 32px;
  background: var(--lap-text-dark, #050505);
  color: var(--lap-neon-accent, #0F6B5B);
  font-family: var(--lap-font, 'Manrope', sans-serif);
  font-size: .72rem; font-weight: 800; letter-spacing: 2px;
  text-transform: uppercase; text-decoration: none; border-radius: 4px;
  transition: box-shadow .3s, transform .2s var(--faq-spring);
}
.lc-faq-cta-link:hover {
  box-shadow: 0 0 20px rgba(15,107,91,.45), 0 0 40px rgba(15,107,91,.2);
  transform: translateY(-3px);
}
.lc-faq-cta-link svg {
  width: 14px; height: 14px; stroke: currentColor;
  fill: none; stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
}

/* ── SPECLINE decoration ── */
.lc-faq-specline {
  display: flex; align-items: center; gap: 8px;
  margin-bottom: 28px;
}
.lc-faq-specline-bar {
  height: 2px; flex: 1;
  background: repeating-linear-gradient(90deg,
    var(--lap-neon-accent,#0F6B5B) 0px, var(--lap-neon-accent,#0F6B5B) 6px,
    transparent 6px, transparent 14px);
  max-width: 80px;
}
.lc-faq-specline-label {
  font-size: .5rem; font-weight: 700; letter-spacing: 2.5px;
  text-transform: uppercase; color: rgba(5,5,5,.3);
  white-space: nowrap;
}

/* ── RIGHT: ACCORDION LIST ── */
.lc-faq-list {
  display: flex; flex-direction: column;
  gap: 0;
  list-style: none;
}

/* ── SINGLE ITEM ── */
.lc-faq-item {
  position: relative;
  border-bottom: 1px solid var(--lap-border-color, #E5E5E5);
  /* entry */
  opacity: 0;
  transform: translateX(30px);
  transition: opacity .5s var(--faq-snappy), transform .5s var(--faq-snappy);
}
.lc-faq-item:first-child { border-top: 1px solid var(--lap-border-color, #E5E5E5); }

.lc-faq-item.is-visible {
  opacity: 1; transform: translateX(0);
}
/* stagger */
.lc-faq-item:nth-child(1) { transition-delay: .00s; }
.lc-faq-item:nth-child(2) { transition-delay: .07s; }
.lc-faq-item:nth-child(3) { transition-delay: .14s; }
.lc-faq-item:nth-child(4) { transition-delay: .21s; }
.lc-faq-item:nth-child(5) { transition-delay: .28s; }
.lc-faq-item:nth-child(6) { transition-delay: .35s; }

/* Active neon left-border */
.lc-faq-item::before {
  content: '';
  position: absolute;
  left: 0; top: 0; bottom: 0;
  width: 3px;
  background: var(--lap-neon-accent, #0F6B5B);
  transform: scaleY(0); transform-origin: top;
  transition: transform .35s var(--faq-ease);
  border-radius: 0 2px 2px 0;
}
.lc-faq-item.is-open::before { transform: scaleY(1); }

/* ── QUESTION BUTTON ── */
.lc-faq-btn {
  width: 100%;
  display: flex; align-items: center; gap: 16px;
  padding: 22px 20px 22px 24px;
  background: none; border: none; cursor: pointer;
  font-family: var(--lap-font, 'Manrope', sans-serif);
  text-align: left;
  transition: background .2s;
}
.lc-faq-btn:hover { background: rgba(15,107,91,.04); }
.lc-faq-item.is-open .lc-faq-btn { background: rgba(15,107,91,.06); }

/* Tag chip */
.lc-faq-tag {
  flex-shrink: 0;
  padding: 3px 10px;
  background: var(--lap-text-dark, #050505);
  color: var(--lap-neon-accent, #0F6B5B);
  font-size: .5rem; font-weight: 800; letter-spacing: 1.8px;
  text-transform: uppercase; border-radius: 3px;
  white-space: nowrap;
  transition: background .2s, color .2s;
}
.lc-faq-item.is-open .lc-faq-tag {
  background: var(--lap-neon-accent, #0F6B5B);
  color: var(--lap-text-dark, #050505);
}

/* Question text */
.lc-faq-q {
  flex: 1;
  font-size: clamp(.82rem, 1.1vw, .97rem);
  font-weight: 700; letter-spacing: .2px;
  text-transform: uppercase;
  color: var(--lap-text-dark, #050505);
  line-height: 1.4;
  transition: color .2s;
}
.lc-faq-item.is-open .lc-faq-q {
  color: var(--lap-text-dark, #050505);
}

/* Icon */
.lc-faq-icon {
  flex-shrink: 0;
  width: 36px; height: 36px;
  border: 1.5px solid var(--lap-border-color, #E5E5E5);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  transition: border-color .3s, background .3s, transform .4s var(--faq-spring);
  position: relative; overflow: hidden;
}
.lc-faq-item.is-open .lc-faq-icon {
  border-color: var(--lap-text-dark, #050505);
  background: var(--lap-text-dark, #050505);
  transform: rotate(45deg);
}
.lc-faq-icon svg {
  width: 14px; height: 14px;
  stroke: var(--lap-text-dark, #050505); fill: none;
  stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
  transition: stroke .3s;
}
.lc-faq-item.is-open .lc-faq-icon svg { stroke: var(--lap-neon-accent, #0F6B5B); }

/* ── ANSWER PANEL ── */
.lc-faq-panel {
  display: grid;
  grid-template-rows: 0fr;
  transition: grid-template-rows .42s var(--faq-snappy);
}
.lc-faq-item.is-open .lc-faq-panel {
  grid-template-rows: 1fr;
}
.lc-faq-panel-inner {
  overflow: hidden;
}
.lc-faq-answer {
  padding: 0 20px 22px 24px;
  font-size: clamp(.8rem, 1vw, .92rem);
  color: var(--lap-text-muted, #666);
  line-height: 1.8;
  max-width: 680px;
  border-left: 2px solid rgba(15,107,91,.3);
  margin-left: 24px;
  padding-left: 18px;
  opacity: 0;
  transform: translateY(-6px);
  transition: opacity .35s .1s var(--faq-ease), transform .35s .1s var(--faq-ease);
}
.lc-faq-item.is-open .lc-faq-answer {
  opacity: 1; transform: translateY(0);
}

/* ── PROGRESS INDICATOR ── */
.lc-faq-progress {
  display: flex; gap: 6px; margin-top: 28px;
  justify-content: flex-end;
}
.lc-faq-prog-dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--lap-border-color, #E5E5E5);
  transition: background .3s, transform .3s var(--faq-spring);
}
.lc-faq-prog-dot.is-active {
  background: var(--lap-neon-accent, #0F6B5B);
  transform: scale(1.5);
}

/* ── RESPONSIVE ── */
@media (max-width: 600px) {
  .lc-faq-btn { padding: 18px 16px 18px 20px; gap: 12px; }
  .lc-faq-answer { margin-left: 0; padding-left: 14px; }
  .lc-faq-tag { display: none; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     FAQ SECTION HTML
═══════════════════════════════════════════════════════ -->
<section class="lc-faq-section" id="lcFaq" aria-label="Frequently Asked Questions">

  <!-- BG DECORATIONS -->
  <div class="lc-faq-bg-dots"     aria-hidden="true"></div>
  <div class="lc-faq-bg-line lc-faq-bg-line--top"    aria-hidden="true"></div>
  <div class="lc-faq-bg-line lc-faq-bg-line--bottom" aria-hidden="true"></div>
  <div class="lc-faq-blob lc-faq-blob--1" aria-hidden="true"></div>
  <div class="lc-faq-blob lc-faq-blob--2" aria-hidden="true"></div>

  <div class="lc-faq-inner">

    <!-- ── LEFT: HEADING PANEL ── -->
    <aside class="lc-faq-left">
      <div class="lc-faq-eyebrow">Common Questions</div>

      <h2 class="lc-faq-title">
        Got<br>
        <em>Questions</em><br>
        <span class="stroke-txt">We Answer</span>
      </h2>

      <div class="lc-faq-specline" aria-hidden="true">
        <div class="lc-faq-specline-bar"></div>
        <span class="lc-faq-specline-label">Honest · Direct · No Fluff</span>
        <div class="lc-faq-specline-bar"></div>
      </div>

      <p class="lc-faq-desc">
        Real answers to the questions every buyer asks before trusting us with their money.
        No marketing speak — just facts.
      </p>

      <div class="lc-faq-counter" aria-label="<?= count($landingFaqs) ?> answers below">
        <span class="lc-faq-counter-num"><?= count($landingFaqs) ?></span>
        Curated Answers
      </div>

      <a href="/faq" class="lc-faq-cta-link" aria-label="View all FAQs">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10"/>
          <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
          <line x1="12" y1="17" x2="12.01" y2="17"/>
        </svg>
        View All FAQs
      </a>
    </aside>

    <!-- ── RIGHT: ACCORDION ── -->
    <div class="lc-faq-right">
      <ul class="lc-faq-list" role="list" id="lcFaqList">

        <?php foreach($landingFaqs as $idx => $faq): ?>
        <li class="lc-faq-item"
            id="lcFaqItem<?= $idx ?>"
            aria-expanded="false">

          <button class="lc-faq-btn"
                  type="button"
                  aria-controls="lcFaqPanel<?= $idx ?>"
                  aria-expanded="false">
            <span class="lc-faq-tag"><?= htmlspecialchars($faq['tag']) ?></span>
            <span class="lc-faq-q"><?= htmlspecialchars($faq['q']) ?></span>
            <span class="lc-faq-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
              </svg>
            </span>
          </button>

          <div class="lc-faq-panel"
               id="lcFaqPanel<?= $idx ?>"
               role="region"
               aria-labelledby="lcFaqItem<?= $idx ?>">
            <div class="lc-faq-panel-inner">
              <p class="lc-faq-answer">
                <?= htmlspecialchars($faq['a']) ?>
              </p>
            </div>
          </div>

        </li>
        <?php endforeach; ?>

      </ul>

      <!-- Progress dots -->
      <div class="lc-faq-progress" aria-hidden="true" id="lcFaqProgress">
        <?php foreach($landingFaqs as $idx => $faq): ?>
        <span class="lc-faq-prog-dot" data-idx="<?= $idx ?>"></span>
        <?php endforeach; ?>
      </div>
    </div><!-- /right -->

  </div><!-- /inner -->

</section>

<!-- ═══════════════════════════════════════════════════════
     FAQ JAVASCRIPT
═══════════════════════════════════════════════════════ -->
<script>
(function () {
'use strict';

/* ── Intersection reveal ── */
const items = document.querySelectorAll('.lc-faq-item');
const io = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('is-visible');
      io.unobserve(e.target);
    }
  });
}, { threshold: 0.15 });
items.forEach(el => io.observe(el));

/* ── Progress dots ── */
const dots = document.querySelectorAll('.lc-faq-prog-dot');

function updateDots(openIdx) {
  dots.forEach((d, i) => {
    d.classList.toggle('is-active', i === openIdx);
  });
}

/* ── Accordion ── */
let openItem = null;

function openFaq(item, idx) {
  if (openItem && openItem !== item) closeFaq(openItem);

  item.classList.add('is-open');
  item.setAttribute('aria-expanded', 'true');
  const btn = item.querySelector('.lc-faq-btn');
  btn && btn.setAttribute('aria-expanded', 'true');
  openItem = item;
  updateDots(idx);
}

function closeFaq(item) {
  item.classList.remove('is-open');
  item.setAttribute('aria-expanded', 'false');
  const btn = item.querySelector('.lc-faq-btn');
  btn && btn.setAttribute('aria-expanded', 'false');
  if (openItem === item) openItem = null;
  updateDots(-1);
}

items.forEach((item, idx) => {
  const btn = item.querySelector('.lc-faq-btn');
  if (!btn) return;

  btn.addEventListener('click', () => {
    if (item.classList.contains('is-open')) {
      closeFaq(item);
    } else {
      openFaq(item, idx);
    }
  });

  // Keyboard: space/enter handled by button natively
});

// Open first by default after entry animation
setTimeout(() => { if (items[0]) openFaq(items[0], 0); }, 800);

/* ── Reduced motion ── */
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  document.querySelectorAll('.lc-faq-item').forEach(el => {
    el.style.transition = 'none';
    el.classList.add('is-visible');
  });
}

})();
</script>