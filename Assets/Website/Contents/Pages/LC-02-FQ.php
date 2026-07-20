<?php
/**
 * ==========================================================================
 * © 2026 NILES & SINAI TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /faq.php
 * VERSION:    1.0.0
 * THEME:      Luxury Fine Jewellery
 * DEPENDS ON: base.css, nav.php
 * PAGE:       Full FAQ Page
 * ==========================================================================
 */

$waNumber = '917470726731';

$faqData = [
  'Buying & Products' => [
    'icon' => '<path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/>',
    'accent' => '#BFFF00',
    'faqs' => [
      ['q'=>'Is every piece genuine, certified jewellery?','a'=>'Absolutely. Every piece at Niles & Sinai is inspected by our in-house gemologists and comes with independent certification — IGI or GIA for diamonds, and SGL for coloured gemstones. Gold and platinum pieces are BIS hallmarked. Authenticity is not a promise — it\'s documented on every invoice.'],
      ['q'=>'What does "Certified" mean on a product page?','a'=>'Certified means the gemstone or metal has been independently graded by a recognised laboratory (IGI, GIA, SGL) or hallmarked by BIS, confirming carat weight, clarity, colour, and metal purity exactly as listed. The certificate ships with your piece.'],
      ['q'=>'Can I customise carat weight or metal purity before purchase?','a'=>'Yes — on every product page you can select your preferred carat weight and metal purity (14K/18K/22K Gold, Platinum 950, or Sterling Silver 925). Our workshop crafts or adjusts the piece before dispatch, and the price updates in real time so you always see the final cost before checkout.'],
      ['q'=>'Do you only sell fine jewellery, or costume pieces too?','a'=>'Niles & Sinai is exclusively a fine jewellery house. Every piece uses certified gemstones and hallmarked precious metals — no plated base metals or synthetic stones. That is the entire model — no compromise on quality, transparent pricing throughout.'],
      ['q'=>'Which metals and gemstones do you work with?','a'=>'We primarily craft in 14K/18K/22K gold, platinum, and sterling silver, set with diamonds, emeralds, rubies, sapphires, pearls, and amethysts. We deliberately work with well-sourced, traceable materials to ensure quality and long-term value for our customers.'],
    ],
  ],
  'Warranty & Support' => [
    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
    'accent' => '#BFFF00',
    'faqs' => [
      ['q'=>'What warranty is included?','a'=>'Every piece comes with a minimum 6-month warranty covering manufacturing defects (setting, clasp, plating, stone security). Extended options — 1 Year and 2 Years — are selectable at checkout for a small premium. All warranty claims are serviced in-house by our workshop, not outsourced.'],
      ['q'=>'Does the warranty cover accidental damage or lost stones?','a'=>'The standard warranty covers manufacturing defects only. It does not cover physical damage from drops, misuse, or stones lost due to wear and tear. We recommend our extended 2-Year plan, which includes one complimentary stone-tightening and re-polishing service.'],
      ['q'=>'How do I raise a warranty claim?','a'=>'Email support@nilesandsinai.in or WhatsApp us at +91 74707 26731 with your order number and a short description of the issue. We\'ll respond within 4 business hours, and if a repair or replacement is needed, arrange free pickup within 2 working days.'],
      ['q'=>'Is the warranty valid pan-India?','a'=>'Yes. Our in-house workshop handles all claims regardless of your location in India. We arrange courier pickup from your address, repair or replace the piece at our facility, and redeliver — fully insured at our cost for valid warranty claims.'],
    ],
  ],
  'Shipping & Delivery' => [
    'icon' => '<rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
    'accent' => '#BFFF00',
    'faqs' => [
      ['q'=>'Which pincodes do you deliver to?','a'=>'We deliver to 800+ pincodes across India — all metros, Tier-2 and Tier-3 cities included. Enter your pincode at checkout to confirm availability. If we don\'t deliver directly to your area, we\'ll arrange a trusted, insured logistics partner at no extra cost.'],
      ['q'=>'How long does delivery take?','a'=>'Metro cities (Mumbai, Delhi, Bangalore, Hyderabad, Chennai, Kolkata, Pune): 2–3 working days. Other Tier-2 cities: 3–4 working days. Remote areas: 5–7 working days. All shipments are tracked, fully insured, and require a signature on delivery.'],
      ['q'=>'Is Cash on Delivery available?','a'=>'COD is available on orders up to ₹40,000. For orders above this amount, prepayment via UPI, Net Banking, or Card is required. This threshold protects both parties given the value of the pieces being shipped.'],
      ['q'=>'Will my jewellery be safely packaged?','a'=>'Every piece is placed in a velvet-lined presentation box, sealed with tamper-evident packaging, and shipped in a discreet, unmarked outer carton with full insurance. Less than 0.2% of our shipments report any transit damage. If yours does, we replace it — period.'],
    ],
  ],
  'Payments & Pricing' => [
    'icon' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>',
    'accent' => '#BFFF00',
    'faqs' => [
      ['q'=>'What payment methods do you accept?','a'=>'UPI (GPay, PhonePe, Paytm), Net Banking (all major banks), Credit Cards, Debit Cards (Visa, Mastercard, RuPay), and EMI on cards. COD for eligible orders. All transactions are SSL-secured and PCI-DSS compliant.'],
      ['q'=>'Do you offer EMI?','a'=>'Yes. EMI is available on most credit cards (no-cost EMI on select banks for orders above ₹15,000). We also offer pay-later options via Simpl and LazyPay. EMI starting from ₹999/month is displayed on each product page.'],
      ['q'=>'Why do prices vary so much between similar-looking pieces?','a'=>'Price reflects certified carat weight, clarity, colour grade, and metal purity — the details shown on each product page. Two visually similar pieces can differ in value based on these certified specifications, which is why every listing includes full grading details.'],
      ['q'=>'Are there hidden charges?','a'=>'None. The price you see at checkout is final — it includes the product, certification, warranty, and free standard shipping. GST is included in displayed prices. No surprise handling fees or packaging charges.'],
    ],
  ],
  'Returns & Exchange' => [
    'icon' => '<polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.5"/>',
    'accent' => '#BFFF00',
    'faqs' => [
      ['q'=>'What is your return policy?','a'=>'7-day return window from the date of delivery. If the piece does not match the description, has a hidden defect, or the certification does not match — we arrange free pickup and offer your choice of a full refund or replacement. No restocking fees, no questions.'],
      ['q'=>'What if I just changed my mind?','a'=>'Change-of-mind returns are accepted within 7 days provided the piece is unworn, in original packaging with certification intact, and in the same condition as delivered. A 5% restocking fee applies in this case to cover inspection and reverse logistics. This is clearly disclosed before checkout.'],
      ['q'=>'How long does a refund take?','a'=>'Once we receive and re-verify the returned piece against its certification (1–2 days), refunds are processed within 3–5 business days to your original payment method. UPI and wallet refunds are typically faster (1–2 days). Bank transfers may take up to 7 days depending on your bank.'],
    ],
  ],
  'About Niles & Sinai' => [
    'icon' => '<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>',
    'accent' => '#BFFF00',
    'faqs' => [
      ['q'=>'Where are you located?','a'=>'Niles & Sinai is headquartered in Raipur, Chhattisgarh. Our workshop and gemological assessment facility is at [address]. Walk-in customers are welcome Monday to Saturday, 10 AM to 7 PM. We craft and ship pan-India from this single location, ensuring every piece passes through our own hands.'],
      ['q'=>'How long have you been in business?','a'=>'Niles & Sinai has been crafting fine jewellery since 2019. Over 5 years, we have handcrafted 10,000+ pieces, served 8,000+ customers, and maintained a 4.9-star rating on Google. Certified jewellery is not a side hustle for us — it is the entire business.'],
      ['q'=>'Do you buy or exchange old gold jewellery?','a'=>'Yes. We offer a free assessment for your old gold, silver, or platinum jewellery. If it meets our purity threshold, we purchase it at fair market rate or apply its value toward a new piece. WhatsApp us a photo for an instant quote. This is how we source a portion of our raw materials.'],
      ['q'=>'Are your certifications independently verifiable?','a'=>'Yes. Every certificate we issue references an independent laboratory (IGI, GIA, or SGL) or BIS hallmarking registry, which can be verified directly on the issuing body\'s website using the certificate number printed on your documentation.'],
    ],
  ],
];
?>


  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Assets/Modules/base.css">
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
/* ═══════════════════════════════════════════════════════════
   FAQ PAGE — NEON EDGE FULL
═══════════════════════════════════════════════════════════ */
:root {
  --fq-ease:    cubic-bezier(0.4, 0, 0.2, 1);
  --fq-spring:  cubic-bezier(0.34, 1.56, 0.64, 1);
  --fq-snappy:  cubic-bezier(0.22, 1, 0.36, 1);
  --fq-nav-offset: 76px;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }



/* ══════════════════════════════════════════
   HERO HEADER
══════════════════════════════════════════ */
.fq-hero {
  position: relative;
  padding: clamp(90px, 14vw, 160px) clamp(20px, 6vw, 100px) clamp(60px, 8vw, 100px);
  background: #050505;
  overflow: hidden;
  isolation: isolate;
}

/* Grid texture */
.fq-hero-grid {
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(191,255,0,.07) 1px, transparent 1px),
    linear-gradient(90deg, rgba(191,255,0,.07) 1px, transparent 1px);
  background-size: 50px 50px;
  pointer-events: none; z-index: 0;
}

/* Neon glow blobs */
.fq-hero-glow {
  position: absolute; border-radius: 50%;
  pointer-events: none; z-index: 0; filter: blur(100px);
}
.fq-hero-glow--1 {
  width: 600px; height: 600px;
  top: -200px; right: -100px;
  background: rgba(191, 255, 0, 0.3);
}
.fq-hero-glow--2 {
  width: 400px; height: 400px;
  bottom: -100px; left: 5%;
  background: rgba(191,255,0,.06);
}

.fq-hero-inner {
  position: relative; z-index: 2;
  max-width: 800px;
}

.fq-hero-eyebrow {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: .6rem; font-weight: 700; letter-spacing: 3.5px;
  text-transform: uppercase; color: rgba(191, 255, 0, 0.23);
  margin-bottom: 16px;
}
.fq-hero-eyebrow::before {
  content: '';
  width: 28px; height: 1.5px;
  background: rgba(191,255,0,.6);
}

.fq-hero-title {
  font-size: clamp(2.4rem, 6vw, 5.5rem);
  font-weight: 700; letter-spacing: -2px;
  text-transform: uppercase; line-height: .95;
  color: #fff; margin-bottom: 24px;
}
.fq-hero-title em {
  font-style: normal;
  color: #BFFF00;
  -webkit-text-stroke: .8px #7fa800;
}
.fq-hero-title .stroke {
  -webkit-text-stroke: 1.5px rgba(255,255,255,.4);
  color: transparent;
}

.fq-hero-desc {
  font-size: clamp(.82rem, 1.1vw, 1rem);
  color: rgba(255,255,255,.45); line-height: 1.8;
  max-width: 540px; margin-bottom: 36px;
}

/* ── SEARCH BAR ── */
.fq-search-wrap {
  position: relative;
  max-width: 580px;
}
.fq-search-input {
  width: 100%;
  padding: 18px 60px 18px 52px;
  background: rgba(255,255,255,.06);
  border: 1.5px solid rgba(191,255,0,.3);
  border-radius: 6px;
  font-family: 'Chakra Petch', sans-serif;
  font-size: .9rem; font-weight: 500;
  color: #fff; letter-spacing: .5px;
  outline: none;
  transition: border-color .3s, background .3s, box-shadow .3s;
}
.fq-search-input::placeholder { color: rgba(255,255,255,.3); }
.fq-search-input:focus {
  border-color: #BFFF00;
  background: rgba(191,255,0,.05);
  box-shadow: 0 0 0 3px rgba(191,255,0,.12), 0 0 30px rgba(191,255,0,.1);
}
.fq-search-icon {
  position: absolute; left: 18px; top: 50%;
  transform: translateY(-50%);
  width: 18px; height: 18px;
  stroke: rgba(255,255,255,.4); fill: none;
  stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round;
  pointer-events: none; transition: stroke .3s;
}
.fq-search-wrap:focus-within .fq-search-icon { stroke: #BFFF00; }
.fq-search-clear {
  position: absolute; right: 16px; top: 50%;
  transform: translateY(-50%);
  background: none; border: none; cursor: pointer; padding: 4px;
  display: none; opacity: .5;
  transition: opacity .2s;
}
.fq-search-clear.is-visible { display: flex; }
.fq-search-clear:hover { opacity: 1; }
.fq-search-clear svg {
  width: 16px; height: 16px; stroke: rgba(255,255,255,.6); fill: none;
  stroke-width: 2.5; stroke-linecap: round;
}

/* Search results count */
.fq-search-count {
  margin-top: 12px;
  font-size: .68rem; font-weight: 600; letter-spacing: 1.5px;
  text-transform: uppercase; color: rgba(255,255,255,.3);
  min-height: 20px;
  transition: color .3s;
}
.fq-search-count.has-results { color: rgba(191,255,0,.7); }

/* Stats strip */
.fq-hero-stats {
  display: flex; gap: 32px; flex-wrap: wrap;
  margin-top: 40px; padding-top: 28px;
  border-top: 1px solid rgba(255,255,255,.1);
}
.fq-hstat { display: flex; flex-direction: column; }
.fq-hstat-num {
  font-size: clamp(1.4rem, 3vw, 2rem); font-weight: 700;
  color: #BFFF00; line-height: 1;
  -webkit-text-stroke: .5px #7fa800;
}
.fq-hstat-label {
  font-size: .58rem; font-weight: 600; letter-spacing: 1.8px;
  text-transform: uppercase; color: rgba(255,255,255,.3); margin-top: 5px;
}

/* ══════════════════════════════════════════
   CATEGORY NAV (sticky)
══════════════════════════════════════════ */
.fq-cat-nav {
  position: sticky;
  top: calc(var(--fq-nav-offset) + 12px);
  z-index: 500;
  background: rgba(255,255,255,.95);
  backdrop-filter: blur(16px) saturate(1.5);
  border-bottom: 1px solid #E5E5E5;
  padding: 0 clamp(20px, 6vw, 100px);
  overflow-x: auto;
  scrollbar-width: none;
}
.fq-cat-nav::-webkit-scrollbar { display: none; }

.fq-cat-nav-inner {
  display: flex; gap: 0; align-items: stretch;
  min-width: max-content;
  height: 58px;
}

.fq-cat-tab {
  display: flex; align-items: center; gap: 8px;
  padding: 0 22px;
  background: none; border: none; cursor: pointer;
  font-family: 'Chakra Petch', sans-serif;
  font-size: .68rem; font-weight: 700; letter-spacing: 1.8px;
  text-transform: uppercase; color: #666;
  position: relative; white-space: nowrap;
  transition: color .2s;
  flex-shrink: 0;
}
.fq-cat-tab::after {
  content: '';
  position: absolute; bottom: 0; left: 50%; right: 50%;
  height: 2.5px; background: #050505;
  transition: left .3s var(--fq-ease), right .3s var(--fq-ease);
}
.fq-cat-tab:hover { color: #050505; }
.fq-cat-tab.is-active { color: #050505; }
.fq-cat-tab.is-active::after { left: 0; right: 0; }

.fq-cat-tab-icon {
  width: 14px; height: 14px; flex-shrink: 0;
  stroke: currentColor; fill: none;
  stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.fq-cat-tab-count {
  background: #050505; color: #BFFF00;
  font-size: .46rem; font-weight: 800;
  padding: 2px 7px; border-radius: 10px; letter-spacing: 1px;
  transition: background .2s;
}
.fq-cat-tab:not(.is-active) .fq-cat-tab-count { background: #E5E5E5; color: #666; }

/* ══════════════════════════════════════════
   MAIN CONTENT AREA
══════════════════════════════════════════ */
.fq-content {
  display: grid;
  grid-template-columns: 260px 1fr;
  gap: 0;
  min-height: 60vh;
}
@media (max-width: 960px) {
  .fq-content { grid-template-columns: 1fr; }
}

/* ── SIDEBAR ── */
.fq-sidebar {
  position: sticky;
  top: calc(var(--fq-nav-offset) + 58px + 20px);
  align-self: start;
  padding: 36px 28px 36px 32px;
  border-right: 1px solid #E5E5E5;
  height: fit-content;
}
@media (max-width: 960px) { .fq-sidebar { display: none; } }

.fq-sidebar-title {
  font-size: .58rem; font-weight: 700; letter-spacing: 3px;
  text-transform: uppercase; color: #666; margin-bottom: 20px;
  display: flex; align-items: center; gap: 8px;
}
.fq-sidebar-title::before {
  content: '';
  width: 20px; height: 1.5px;
  background: #BFFF00;
}

.fq-sidebar-list { list-style: none; }
.fq-sidebar-item {
  margin-bottom: 4px;
}
.fq-sidebar-link {
  display: flex; align-items: center; gap: 10px;
  padding: 10px 12px;
  font-size: .7rem; font-weight: 600; letter-spacing: 1.2px;
  text-transform: uppercase; text-decoration: none;
  color: #666; border-radius: 4px;
  transition: background .2s, color .2s, padding-left .25s var(--fq-ease);
  cursor: pointer; background: none; border: none; width: 100%; text-align: left;
  font-family: 'Chakra Petch', sans-serif;
}
.fq-sidebar-link:hover {
  background: rgba(191,255,0,.06);
  color: #050505;
  padding-left: 18px;
}
.fq-sidebar-link.is-active {
  background: #050505; color: #BFFF00;
  padding-left: 16px;
}
.fq-sidebar-link svg {
  width: 13px; height: 13px; flex-shrink: 0;
  stroke: currentColor; fill: none;
  stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}

.fq-sidebar-divider {
  height: 1px; background: #E5E5E5;
  margin: 20px 0;
}

/* Ask question teaser */
.fq-sidebar-ask {
  padding: 16px;
  background: #050505;
  border-radius: 6px;
  text-align: center;
}
.fq-sidebar-ask-title {
  font-size: .68rem; font-weight: 700; letter-spacing: 1.5px;
  text-transform: uppercase; color: #fff; margin-bottom: 8px;
}
.fq-sidebar-ask-sub {
  font-size: .6rem; color: rgba(255,255,255,.4);
  line-height: 1.6; margin-bottom: 14px;
}
.fq-sidebar-ask-btn {
  display: inline-flex; align-items: center; gap: 7px;
  padding: 9px 18px;
  background: #BFFF00; color: #050505;
  font-family: 'Chakra Petch', sans-serif;
  font-size: .65rem; font-weight: 800; letter-spacing: 2px;
  text-transform: uppercase; border: none; border-radius: 4px; cursor: pointer;
  transition: box-shadow .3s, transform .2s var(--fq-spring);
  width: 100%; justify-content: center;
}
.fq-sidebar-ask-btn:hover {
  box-shadow: 0 0 16px rgba(191,255,0,.6);
  transform: translateY(-2px);
}
.fq-sidebar-ask-btn svg {
  width: 13px; height: 13px; fill: currentColor;
}

/* ── FAQ PANELS ── */
.fq-panels {
  padding: clamp(32px, 5vw, 60px) clamp(24px, 5vw, 72px);
}

/* No-results state */
.fq-no-results {
  display: none;
  text-align: center; padding: 80px 20px;
}
.fq-no-results.is-visible { display: block; }
.fq-no-results-icon {
  font-size: 3rem; margin-bottom: 16px;
}
.fq-no-results-title {
  font-size: 1.1rem; font-weight: 700; text-transform: uppercase;
  letter-spacing: -0.5px; margin-bottom: 10px;
}
.fq-no-results-sub {
  font-size: .82rem; color: #666; line-height: 1.7; margin-bottom: 24px;
}

/* CATEGORY GROUP */
.fq-group {
  margin-bottom: clamp(48px, 7vw, 80px);
}
.fq-group[data-hidden="true"] { display: none; }

.fq-group-head {
  display: flex; align-items: center; gap: 14px;
  margin-bottom: 28px; padding-bottom: 16px;
  border-bottom: 1px solid #E5E5E5;
  position: relative;
}
.fq-group-head::after {
  content: '';
  position: absolute; bottom: -1px; left: 0;
  width: 60px; height: 2px;
  background: #BFFF00;
}
.fq-group-icon-wrap {
  width: 40px; height: 40px; flex-shrink: 0;
  background: #050505; border-radius: 4px;
  display: flex; align-items: center; justify-content: center;
}
.fq-group-icon-wrap svg {
  width: 18px; height: 18px; stroke: #BFFF00; fill: none;
  stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.fq-group-title {
  font-size: clamp(1rem, 2vw, 1.3rem);
  font-weight: 700; letter-spacing: -.5px;
  text-transform: uppercase; color: #050505; flex: 1;
}
.fq-group-count {
  font-size: .58rem; font-weight: 700; letter-spacing: 2px;
  text-transform: uppercase; color: #666;
  background: #F4F4F4; padding: 4px 12px; border-radius: 20px;
}

/* ACCORDION ITEM */
.fq-item {
  position: relative;
  border-bottom: 1px solid #E5E5E5;
  transition: background .2s;
}
.fq-item:first-child { border-top: 1px solid #E5E5E5; }

/* Neon left stripe on open */
.fq-item::before {
  content: '';
  position: absolute; left: 0; top: 0; bottom: 0;
  width: 3px; background: #BFFF00;
  transform: scaleY(0); transform-origin: center;
  transition: transform .3s var(--fq-ease);
  border-radius: 0 2px 2px 0;
}
.fq-item.is-open::before { transform: scaleY(1); }
.fq-item[data-hidden="true"] { display: none; }

/* Highlight for search match */
.fq-item.is-match { background: rgba(191,255,0,.03); }
mark { background: rgba(191,255,0,.4); color: inherit; border-radius: 2px; padding: 0 2px; }

/* QUESTION BTN */
.fq-q-btn {
  width: 100%; display: flex; align-items: center; gap: 16px;
  padding: 20px 20px 20px 24px;
  background: none; border: none; cursor: pointer;
  font-family: 'Chakra Petch', sans-serif;
  text-align: left;
  transition: background .2s;
}
.fq-q-btn:hover { background: rgba(191,255,0,.04); }
.fq-item.is-open .fq-q-btn { background: rgba(191,255,0,.06); }

.fq-q-num {
  flex-shrink: 0;
  font-size: .6rem; font-weight: 800; letter-spacing: 1.5px;
  color: rgba(5,5,5,.2); min-width: 24px;
  font-feature-settings: "tnum";
  transition: color .25s;
}
.fq-item.is-open .fq-q-num { color: #BFFF00; }

.fq-q-text {
  flex: 1;
  font-size: clamp(.82rem, 1.05vw, .95rem);
  font-weight: 700; letter-spacing: .2px;
  text-transform: uppercase; color: #050505;
  line-height: 1.4;
}

/* Expand icon */
.fq-q-ico {
  flex-shrink: 0;
  width: 34px; height: 34px; border-radius: 50%;
  border: 1.5px solid #E5E5E5;
  display: flex; align-items: center; justify-content: center;
  transition: background .3s, border-color .3s, transform .4s var(--fq-spring);
}
.fq-item.is-open .fq-q-ico {
  background: #050505; border-color: #050505; transform: rotate(45deg);
}
.fq-q-ico svg {
  width: 13px; height: 13px; stroke: #050505; fill: none;
  stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
  transition: stroke .3s;
}
.fq-item.is-open .fq-q-ico svg { stroke: #BFFF00; }

/* ANSWER */
.fq-panel {
  display: grid; grid-template-rows: 0fr;
  transition: grid-template-rows .4s var(--fq-snappy);
}
.fq-item.is-open .fq-panel { grid-template-rows: 1fr; }
.fq-panel-inner { overflow: hidden; }
.fq-answer-wrap {
  padding: 0 20px 20px 68px;
}
@media (max-width: 600px) { .fq-answer-wrap { padding: 0 16px 18px 24px; } }

.fq-answer {
  font-size: clamp(.8rem, 1vw, .9rem);
  color: #666; line-height: 1.85;
  border-left: 2px solid rgba(191,255,0,.35);
  padding-left: 18px;
  opacity: 0; transform: translateY(-6px);
  transition: opacity .35s .1s var(--fq-ease), transform .35s .1s var(--fq-ease);
}
.fq-item.is-open .fq-answer { opacity: 1; transform: translateY(0); }

/* ══════════════════════════════════════════
   ASK A QUESTION — FLOATING SECTION
══════════════════════════════════════════ */
.fq-ask-section {
  background: #050505;
  padding: clamp(60px, 9vw, 110px) clamp(20px, 6vw, 100px);
  position: relative; overflow: hidden; isolation: isolate;
}

.fq-ask-bg-grid {
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(191,255,0,.06) 1px, transparent 1px),
    linear-gradient(90deg, rgba(191,255,0,.06) 1px, transparent 1px);
  background-size: 50px 50px;
  pointer-events: none; z-index: 0;
}
.fq-ask-glow {
  position: absolute; width: 500px; height: 500px; border-radius: 50%;
  top: -150px; right: -100px; filter: blur(120px);
  background: rgba(191,255,0,.08); pointer-events: none; z-index: 0;
}

.fq-ask-inner {
  position: relative; z-index: 2;
  display: grid; grid-template-columns: 1fr 1fr;
  gap: clamp(40px, 6vw, 80px); align-items: center;
}
@media (max-width: 860px) {
  .fq-ask-inner { grid-template-columns: 1fr; gap: 36px; }
}

.fq-ask-left {}
.fq-ask-eyebrow {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: .6rem; font-weight: 700; letter-spacing: 3.5px;
  text-transform: uppercase; color: rgba(191,255,0,.55); margin-bottom: 14px;
}
.fq-ask-eyebrow::before {
  content: '';
  width: 24px; height: 1.5px;
  background: rgba(191,255,0,.55);
}
.fq-ask-title {
  font-size: clamp(1.8rem, 4vw, 3.2rem);
  font-weight: 700; letter-spacing: -1.5px;
  text-transform: uppercase; line-height: 1.0; color: #fff;
  margin-bottom: 18px;
}
.fq-ask-title em { font-style: normal; color: #BFFF00; -webkit-text-stroke: .8px #7fa800; }

.fq-ask-desc {
  font-size: clamp(.8rem, 1vw, .92rem);
  color: rgba(255,255,255,.4); line-height: 1.75; margin-bottom: 28px;
}

.fq-ask-features {
  display: flex; flex-direction: column; gap: 10px;
}
.fq-ask-feat {
  display: flex; align-items: center; gap: 12px;
  font-size: .72rem; font-weight: 600; letter-spacing: .8px;
  text-transform: uppercase; color: rgba(255,255,255,.5);
}
.fq-ask-feat-dot {
  width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0;
  background: #BFFF00; box-shadow: 0 0 8px rgba(191,255,0,.6);
}

/* ── FORM ── */
.fq-ask-form-wrap {
  background: rgba(255,255,255,.04);
  border: 1px solid rgba(191,255,0,.2);
  border-radius: 8px;
  padding: clamp(24px, 3vw, 40px);
  backdrop-filter: blur(10px);
}
.fq-ask-form-title {
  font-size: .72rem; font-weight: 700; letter-spacing: 2.5px;
  text-transform: uppercase; color: #BFFF00;
  margin-bottom: 24px;
  display: flex; align-items: center; gap: 10px;
}
.fq-ask-form-title::before {
  content: '';
  width: 24px; height: 2px; background: #BFFF00;
}

.fq-field {
  margin-bottom: 16px;
}
.fq-field-label {
  display: block;
  font-size: .58rem; font-weight: 700; letter-spacing: 2px;
  text-transform: uppercase; color: rgba(255,255,255,.35);
  margin-bottom: 8px;
}
.fq-field-input,
.fq-field-textarea {
  width: 100%;
  padding: 14px 16px;
  background: rgba(255,255,255,.06);
  border: 1.5px solid rgba(255,255,255,.12);
  border-radius: 4px;
  font-family: 'Chakra Petch', sans-serif;
  font-size: .85rem; font-weight: 500;
  color: #fff; letter-spacing: .3px;
  outline: none; resize: none;
  transition: border-color .3s, background .3s, box-shadow .3s;
}
.fq-field-input::placeholder,
.fq-field-textarea::placeholder { color: rgba(255,255,255,.2); }
.fq-field-input:focus,
.fq-field-textarea:focus {
  border-color: #BFFF00;
  background: rgba(191,255,0,.04);
  box-shadow: 0 0 0 3px rgba(191,255,0,.1);
}
.fq-field-textarea { min-height: 110px; }

.fq-field-row {
  display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
@media (max-width: 520px) { .fq-field-row { grid-template-columns: 1fr; } }

/* Character count */
.fq-char-count {
  text-align: right; margin-top: 5px;
  font-size: .58rem; font-weight: 600; letter-spacing: 1px;
  text-transform: uppercase; color: rgba(255,255,255,.2);
  transition: color .2s;
}
.fq-char-count.near-limit { color: rgba(191,255,0,.6); }
.fq-char-count.at-limit   { color: #ff4444; }

/* Submit button */
.fq-submit-btn {
  width: 100%;
  display: flex; align-items: center; justify-content: center; gap: 10px;
  padding: 16px 28px; margin-top: 8px;
  background: #BFFF00; color: #050505;
  font-family: 'Chakra Petch', sans-serif;
  font-size: .78rem; font-weight: 800; letter-spacing: 2px;
  text-transform: uppercase; border: none; border-radius: 4px;
  cursor: pointer; position: relative; overflow: hidden;
  transition: box-shadow .3s, transform .2s var(--fq-spring);
}
.fq-submit-btn:hover {
  box-shadow: 0 0 24px rgba(191,255,0,.6), 0 0 50px rgba(191,255,0,.25);
  transform: translateY(-3px);
}
.fq-submit-btn:active { transform: scale(.97); }
.fq-submit-btn svg {
  width: 18px; height: 18px; fill: currentColor; flex-shrink: 0;
}

/* WA branding */
.fq-wa-note {
  display: flex; align-items: center; gap: 8px;
  margin-top: 12px;
  font-size: .6rem; font-weight: 600; letter-spacing: 1px;
  text-transform: uppercase; color: rgba(255,255,255,.25);
  justify-content: center;
}
.fq-wa-note svg { width: 14px; height: 14px; fill: #25D366; flex-shrink: 0; }

/* Sending state */
.fq-submit-btn.is-sending {
  pointer-events: none; opacity: .7;
}
.fq-submit-btn.is-sent {
  background: #22c55e; color: #fff;
}

/* ══════════════════════════════════════════
   RESPONSIVE
══════════════════════════════════════════ */
@media (max-width: 600px) {
  .fq-panels { padding: 24px 16px; }
  .fq-q-btn  { padding: 16px 14px 16px 18px; gap: 12px; }
  .fq-q-num  { display: none; }
}
  </style>
</head>


<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<section class="fq-hero" aria-label="FAQ Hero">
  <div class="fq-hero-grid"    aria-hidden="true"></div>
  <div class="fq-hero-glow fq-hero-glow--1" aria-hidden="true"></div>
  <div class="fq-hero-glow fq-hero-glow--2" aria-hidden="true"></div>

  <div class="fq-hero-inner">
    <div class="fq-hero-eyebrow">Knowledge Base</div>
    <h1 class="fq-hero-title">
      Frequently<br>
      <em>Asked</em><br>
      <span class="stroke">Questions</span>
    </h1>
    <p class="fq-hero-desc">
      Everything you need to know before buying. Real answers — no chatbot loops,
      no vague policies. Just facts from the people who built this store.
    </p>

    <!-- SEARCH -->
    <div class="fq-search-wrap" role="search" aria-label="Search FAQs">
      <svg class="fq-search-icon" viewBox="0 0 24 24" aria-hidden="true">
        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
      <input
        type="search"
        id="fqSearchInput"
        class="fq-search-input"
        placeholder="Search questions... e.g. certification, sizing, delivery"
        autocomplete="off"
        spellcheck="false"
        aria-label="Search FAQs"
      />
      <button class="fq-search-clear" id="fqSearchClear" aria-label="Clear search">
        <svg viewBox="0 0 24 24">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
    </div>
    <div class="fq-search-count" id="fqSearchCount" aria-live="polite" aria-atomic="true"></div>

    <!-- Stats -->
    <div class="fq-hero-stats" aria-label="Key facts">
      <div class="fq-hstat">
        <span class="fq-hstat-num"><?= array_sum(array_map(fn($cat) => count($cat['faqs']), $faqData)) ?></span>
        <span class="fq-hstat-label">Questions Answered</span>
      </div>
      <div class="fq-hstat">
        <span class="fq-hstat-num"><?= count($faqData) ?></span>
        <span class="fq-hstat-label">Categories</span>
      </div>
      <div class="fq-hstat">
        <span class="fq-hstat-num">4h</span>
        <span class="fq-hstat-label">Avg. Support Response</span>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CATEGORY NAV
══════════════════════════════════════════ -->
<nav class="fq-cat-nav" id="fqCatNav" aria-label="FAQ categories">
  <div class="fq-cat-nav-inner">
    <button class="fq-cat-tab is-active" data-cat="all" type="button">
      All Questions
      <span class="fq-cat-tab-count"><?= array_sum(array_map(fn($cat) => count($cat['faqs']), $faqData)) ?></span>
    </button>
    <?php foreach($faqData as $catName => $catData): ?>
    <button class="fq-cat-tab"
            data-cat="<?= htmlspecialchars(strtolower(str_replace([' ','&'],['_','n'],$catName))) ?>"
            type="button">
      <svg class="fq-cat-tab-icon" viewBox="0 0 24 24"><?= $catData['icon'] ?></svg>
      <?= htmlspecialchars($catName) ?>
      <span class="fq-cat-tab-count"><?= count($catData['faqs']) ?></span>
    </button>
    <?php endforeach; ?>
  </div>
</nav>

<!-- ══════════════════════════════════════════
     CONTENT AREA
══════════════════════════════════════════ -->
<div class="fq-content">

  <!-- SIDEBAR -->
  <aside class="fq-sidebar" aria-label="Category navigation">
    <div class="fq-sidebar-title">Browse Topics</div>
    <ul class="fq-sidebar-list">
      <?php foreach($faqData as $catName => $catData):
        $slug = strtolower(str_replace([' ','&'],['_','n'],$catName));
      ?>
      <li class="fq-sidebar-item">
        <button class="fq-sidebar-link" data-cat="<?= $slug ?>" type="button">
          <svg viewBox="0 0 24 24"><?= $catData['icon'] ?></svg>
          <?= htmlspecialchars($catName) ?>
        </button>
      </li>
      <?php endforeach; ?>
    </ul>

    <div class="fq-sidebar-divider"></div>

    <div class="fq-sidebar-ask">
      <div class="fq-sidebar-ask-title">Can't find it?</div>
      <p class="fq-sidebar-ask-sub">Ask us directly on WhatsApp — we reply within 4 hours.</p>
      <button class="fq-sidebar-ask-btn" type="button" id="fqSidebarWa">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        Ask on WhatsApp
      </button>
    </div>
  </aside>

  <!-- PANELS -->
  <main class="fq-panels" id="fqPanels" aria-label="FAQ answers">

    <!-- No results state -->
    <div class="fq-no-results" id="fqNoResults" aria-live="polite">
      <div class="fq-no-results-icon">🔍</div>
      <h2 class="fq-no-results-title">No results found</h2>
      <p class="fq-no-results-sub">
        We couldn't find an answer to your question.<br>
        Try different keywords or ask us directly on WhatsApp.
      </p>
      <button class="fq-sidebar-ask-btn" type="button" id="fqNoResultsWa" style="display:inline-flex;width:auto;margin:0 auto;">
        <svg viewBox="0 0 24 24" style="width:16px;height:16px;">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        Ask on WhatsApp
      </button>
    </div>

    <?php foreach($faqData as $catName => $catData):
      $slug = strtolower(str_replace([' ','&'],['_','n'],$catName));
    ?>
    <section class="fq-group"
             id="fqGroup_<?= $slug ?>"
             data-cat="<?= $slug ?>"
             aria-labelledby="fqGroupTitle_<?= $slug ?>">

      <header class="fq-group-head">
        <div class="fq-group-icon-wrap" aria-hidden="true">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <?= $catData['icon'] ?>
          </svg>
        </div>
        <h2 class="fq-group-title" id="fqGroupTitle_<?= $slug ?>">
          <?= htmlspecialchars($catName) ?>
        </h2>
        <span class="fq-group-count"><?= count($catData['faqs']) ?> Q&amp;A</span>
      </header>

      <?php foreach($catData['faqs'] as $qIdx => $faq): ?>
      <div class="fq-item"
           id="fqItem_<?= $slug ?>_<?= $qIdx ?>"
           data-q="<?= htmlspecialchars(strtolower($faq['q'])) ?>"
           data-a="<?= htmlspecialchars(strtolower($faq['a'])) ?>">

        <button class="fq-q-btn"
                type="button"
                aria-controls="fqPanel_<?= $slug ?>_<?= $qIdx ?>"
                aria-expanded="false">
          <span class="fq-q-num"><?= str_pad($qIdx+1,'2','0',STR_PAD_LEFT) ?></span>
          <span class="fq-q-text"><?= htmlspecialchars($faq['q']) ?></span>
          <span class="fq-q-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"/>
              <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
          </span>
        </button>

        <div class="fq-panel"
             id="fqPanel_<?= $slug ?>_<?= $qIdx ?>"
             role="region">
          <div class="fq-panel-inner">
            <div class="fq-answer-wrap">
              <p class="fq-answer"><?= htmlspecialchars($faq['a']) ?></p>
            </div>
          </div>
        </div>

      </div>
      <?php endforeach; ?>

    </section>
    <?php endforeach; ?>

  </main>
</div>

<!-- ══════════════════════════════════════════
     ASK A QUESTION SECTION
══════════════════════════════════════════ -->
<section class="fq-ask-section" id="fqAskSection" aria-label="Ask a question">
  <div class="fq-ask-bg-grid" aria-hidden="true"></div>
  <div class="fq-ask-glow"    aria-hidden="true"></div>

  <div class="fq-ask-inner">
    <div class="fq-ask-left">
      <div class="fq-ask-eyebrow">Still Wondering?</div>
      <h2 class="fq-ask-title">
        Ask Us<br>
        <em>Anything</em>
      </h2>
      <p class="fq-ask-desc">
        Type your question below and hit Send. It goes straight to our WhatsApp — 
        a real human reads it and responds within 4 hours. No bots, no ticket queues.
      </p>
      <div class="fq-ask-features">
        <div class="fq-ask-feat"><span class="fq-ask-feat-dot"></span> Real human replies — no AI bots</div>
        <div class="fq-ask-feat"><span class="fq-ask-feat-dot"></span> Response within 4 business hours</div>
        <div class="fq-ask-feat"><span class="fq-ask-feat-dot"></span> Chat history preserved in WhatsApp</div>
        <div class="fq-ask-feat"><span class="fq-ask-feat-dot"></span> Product availability checked live</div>
      </div>
    </div>

    <div class="fq-ask-form-wrap">
      <div class="fq-ask-form-title">Send Your Question</div>

      <div class="fq-field-row">
        <div class="fq-field">
          <label class="fq-field-label" for="fqName">Your Name</label>
          <input class="fq-field-input" type="text" id="fqName" placeholder="Rahul Sharma" autocomplete="given-name">
        </div>
        <div class="fq-field">
          <label class="fq-field-label" for="fqPhone">Phone (optional)</label>
          <input class="fq-field-input" type="tel" id="fqPhone" placeholder="+91 98765 43210" autocomplete="tel">
        </div>
      </div>

      <div class="fq-field">
        <label class="fq-field-label" for="fqCategory">Topic</label>
        <select class="fq-field-input" id="fqCategory">
          <option value="">Select a topic</option>
          <?php foreach(array_keys($faqData) as $catName): ?>
          <option value="<?= htmlspecialchars($catName) ?>"><?= htmlspecialchars($catName) ?></option>
          <?php endforeach; ?>
          <option value="Other">Something else</option>
        </select>
      </div>

      <div class="fq-field">
        <label class="fq-field-label" for="fqQuestion">Your Question</label>
        <textarea class="fq-field-textarea"
                  id="fqQuestion"
                  placeholder="Type your question here... be as specific as possible for a faster answer."
                  maxlength="500"
                  rows="5"></textarea>
        <div class="fq-char-count" id="fqCharCount">0 / 500</div>
      </div>

      <button class="fq-submit-btn" type="button" id="fqSubmitBtn">
        <!-- WhatsApp SVG -->
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        Send to WhatsApp
      </button>

      <div class="fq-wa-note">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        Opens WhatsApp with your question pre-filled
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     FAQ PAGE JAVASCRIPT
══════════════════════════════════════════ -->
<script>
(function () {
'use strict';

const WA = '<?= $waNumber ?>';

/* ── helpers ── */
const $  = id => document.getElementById(id);
const $$ = sel => [...document.querySelectorAll(sel)];
function esc(str){ return str.replace(/[.*+?^${}()|[\]\\]/g,'\\$&'); }

/* ════════════════════════
   ACCORDION
════════════════════════ */
let openItem = null;

function openFaq(item) {
  if (openItem && openItem !== item) {
    openItem.classList.remove('is-open');
    openItem.querySelector('.fq-q-btn')?.setAttribute('aria-expanded','false');
    openItem = null;
  }
  item.classList.add('is-open');
  item.querySelector('.fq-q-btn')?.setAttribute('aria-expanded','true');
  openItem = item;
}
function closeFaq(item) {
  item.classList.remove('is-open');
  item.querySelector('.fq-q-btn')?.setAttribute('aria-expanded','false');
  if (openItem === item) openItem = null;
}

document.addEventListener('click', e => {
  const btn = e.target.closest('.fq-q-btn');
  if (!btn) return;
  const item = btn.closest('.fq-item');
  if (!item) return;
  item.classList.contains('is-open') ? closeFaq(item) : openFaq(item);
});

/* ════════════════════════
   CATEGORY FILTERING
════════════════════════ */
const catTabs     = $$('.fq-cat-tab, .fq-sidebar-link[data-cat]');
const groups      = $$('.fq-group');
const noResults   = $('fqNoResults');

function setActiveCategory(cat) {
  // Update tab/sidebar active state
  catTabs.forEach(t => {
    t.classList.toggle('is-active', t.dataset.cat === cat);
  });
  // Show/hide groups
  groups.forEach(g => {
    const show = cat === 'all' || g.dataset.cat === cat;
    g.dataset.hidden = !show;
    g.style.display  = show ? '' : 'none';
  });
  noResults.classList.remove('is-visible');
  // Scroll to section if specific cat
  if (cat !== 'all') {
    const target = document.getElementById('fqGroup_' + cat);
    if (target) {
      const offset = 76 + 58 + 16;
      const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  }
}

catTabs.forEach(tab => {
  tab.addEventListener('click', () => setActiveCategory(tab.dataset.cat));
});

/* ════════════════════════
   SEARCH
════════════════════════ */
const searchInput = $('fqSearchInput');
const searchClear = $('fqSearchClear');
const searchCount = $('fqSearchCount');
const faqItems    = $$('.fq-item');

function highlight(text, term) {
  if (!term) return text;
  const re = new RegExp(`(${esc(term)})`, 'gi');
  return text.replace(re, '<mark>$1</mark>');
}

function doSearch(term) {
  const q = term.toLowerCase().trim();
  searchClear.classList.toggle('is-visible', q.length > 0);

  if (!q) {
    // Reset
    faqItems.forEach(item => {
      item.dataset.hidden = false;
      item.style.display  = '';
      item.classList.remove('is-match');
      // Restore original text
      const qEl = item.querySelector('.fq-q-text');
      const aEl = item.querySelector('.fq-answer');
      if (qEl) qEl.innerHTML = qEl.textContent; // strip marks
      if (aEl) aEl.innerHTML = aEl.textContent;
    });
    groups.forEach(g => { g.style.display = ''; g.dataset.hidden = false; });
    noResults.classList.remove('is-visible');
    searchCount.textContent = '';
    searchCount.classList.remove('has-results');

    // Reset cats
    catTabs.forEach(t => t.classList.toggle('is-active', t.dataset.cat === 'all'));
    return;
  }

  // Filter
  let matchCount = 0;
  faqItems.forEach(item => {
    const qData = item.dataset.q || '';
    const aData = item.dataset.a || '';
    const hit   = qData.includes(q) || aData.includes(q);
    item.style.display = hit ? '' : 'none';
    item.dataset.hidden = !hit;
    item.classList.toggle('is-match', hit);
    if (hit) {
      matchCount++;
      // Highlight
      const qEl = item.querySelector('.fq-q-text');
      const aEl = item.querySelector('.fq-answer');
      if (qEl) qEl.innerHTML = highlight(qEl.textContent, term);
      if (aEl) aEl.innerHTML = highlight(aEl.textContent, term);
    }
  });

  // Show/hide groups based on visible items
  groups.forEach(g => {
    const visible = [...g.querySelectorAll('.fq-item')].some(i => i.style.display !== 'none');
    g.style.display = visible ? '' : 'none';
  });

  // Update count
  if (matchCount > 0) {
    searchCount.textContent = matchCount + ' result' + (matchCount !== 1 ? 's' : '') + ' found';
    searchCount.classList.add('has-results');
    noResults.classList.remove('is-visible');
  } else {
    searchCount.textContent = 'No results found for "' + term + '"';
    searchCount.classList.remove('has-results');
    noResults.classList.add('is-visible');
  }

  // Deactivate category tabs during search
  catTabs.forEach(t => t.classList.remove('is-active'));
}

let searchTimer;
searchInput.addEventListener('input', () => {
  clearTimeout(searchTimer);
  searchTimer = setTimeout(() => doSearch(searchInput.value), 220);
});
searchClear.addEventListener('click', () => {
  searchInput.value = '';
  doSearch('');
  searchInput.focus();
});
searchInput.addEventListener('keydown', e => {
  if (e.key === 'Escape') {
    searchInput.value = '';
    doSearch('');
  }
});

/* ════════════════════════
   ASK FORM → WHATSAPP
════════════════════════ */
const nameEl     = $('fqName');
const phoneEl    = $('fqPhone');
const catEl      = $('fqCategory');
const questionEl = $('fqQuestion');
const charCount  = $('fqCharCount');
const submitBtn  = $('fqSubmitBtn');

// Char counter
questionEl.addEventListener('input', () => {
  const len  = questionEl.value.length;
  const max  = parseInt(questionEl.getAttribute('maxlength') || '500', 10);
  charCount.textContent = len + ' / ' + max;
  charCount.classList.toggle('near-limit', len > max * 0.8 && len <= max);
  charCount.classList.toggle('at-limit', len >= max);
});

function buildWaMsg() {
  const name     = nameEl.value.trim()     || 'A Niles & Sinai visitor';
  const phone    = phoneEl.value.trim()    || 'Not provided';
  const category = catEl.value             || 'General';
  const question = questionEl.value.trim();
  if (!question) return null;

  return `Hi Niles & Sinai! I have a question.\n\n*Name:* ${name}\n*Phone:* ${phone}\n*Topic:* ${category}\n\n*Question:* ${question}`;
}

function sendToWa(msg) {
  window.open(`https://wa.me/${WA}?text=${encodeURIComponent(msg)}`, '_blank');
}

submitBtn.addEventListener('click', () => {
  const msg = buildWaMsg();
  if (!msg) {
    questionEl.focus();
    questionEl.style.borderColor = '#ff4444';
    setTimeout(() => { questionEl.style.borderColor = ''; }, 2000);
    return;
  }

  submitBtn.classList.add('is-sending');
  submitBtn.textContent = 'Opening WhatsApp...';

  setTimeout(() => {
    sendToWa(msg);
    submitBtn.classList.remove('is-sending');
    submitBtn.classList.add('is-sent');
    submitBtn.textContent = '✓ Sent to WhatsApp';
    setTimeout(() => {
      submitBtn.classList.remove('is-sent');
      submitBtn.innerHTML = `<svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:currentColor;flex-shrink:0"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg> Send to WhatsApp`;
    }, 3000);
  }, 600);
});

/* Sidebar & no-results WA buttons */
function openDirectWa() {
  sendToWa('Hi Niles & Sinai! I have a question and couldn\'t find it in the FAQs. Can you help me?');
}
$('fqSidebarWa')    && $('fqSidebarWa').addEventListener('click', openDirectWa);
$('fqNoResultsWa')  && $('fqNoResultsWa').addEventListener('click', openDirectWa);

/* ════════════════════════
   LUCIDE
════════════════════════ */
if (typeof lucide !== 'undefined') lucide.createIcons();

})();
</script>

</html>