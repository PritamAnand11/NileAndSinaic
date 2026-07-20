<?php
/**
 * ==========================================================================
 * © 2026 NILES & SINAI TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /store.php  (or include from index via router)
 * VERSION:    1.0.0
 * THEME:      Luxury Fine Jewellery
 * DEPENDS ON: base.css, nav.php
 * ==========================================================================
 */

/* ── DEMO PRODUCTS ── */
$storeProducts = [
  [
    'id'=>'sp1','title'=>'Solitaire Diamond Ring','subtitle'=>'18K Yellow Gold · 1 Ct Diamond · IGI Certified',
    'metal'=>'Yellow Gold','gemstone'=>'Diamond','purity'=>'18K',
    'size'=>'Ring Size 5–10 (Resizable)','carat_options'=>[0.5,1,1.5],'purity_options'=>['14K','18K','22K'],
    'warranty_options'=>['6 Months','1 Year','2 Years'],'size_options'=>['5','6','7','8','9','10'],
    'base_price'=>34999,'mrp'=>129588,'stock'=>7,'badge'=>'Best Seller',
    'best_for'=>'Engagement & Bridal','emi'=>2917,'cod'=>true,
    'specs'=>['IGI Certified Diamond','VS Clarity, G Colour','18K Hallmarked Gold','4-Prong Setting','Comfort-Fit Band','Free Resizing','Lifetime Exchange','Complimentary Gift Box','Insured Shipping'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Solitaire+Diamond+Ring',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Side+View',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Detail+View',
    ],
  ],
  [
    'id'=>'sp2','title'=>'Emerald Halo Ring','subtitle'=>'Rose Gold · Natural Emerald · GIA Certified',
    'metal'=>'Rose Gold','gemstone'=>'Emerald','purity'=>'18K',
    'size'=>'Ring Size 5–9 (Resizable)','carat_options'=>[0.75,1.25],'purity_options'=>['14K','18K'],
    'warranty_options'=>['6 Months','1 Year'],'size_options'=>['5','6','7','8','9'],
    'base_price'=>27499,'mrp'=>105000,'stock'=>12,'badge'=>'Top Pick',
    'best_for'=>'Gifting & Anniversaries','emi'=>2292,'cod'=>true,
    'specs'=>['GIA Certified Emerald','Diamond Halo Surround','18K Hallmarked Gold','Secure Bezel Setting','Rhodium Polished','Free Resizing','Anti-Tarnish Finish','Complimentary Gift Box'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Emerald+Halo+Ring',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Open+View',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Close+Up',
    ],
  ],
  [
    'id'=>'sp3','title'=>'Sapphire Drop Pendant Necklace','subtitle'=>'Sterling Silver · Blue Sapphire · SGL Certified',
    'metal'=>'Sterling Silver','gemstone'=>'Sapphire','purity'=>'Sterling Silver 925',
    'size'=>'16"–18" Adjustable Chain','carat_options'=>[0.5,0.75],'purity_options'=>['Sterling Silver 925','Gold Vermeil'],
    'warranty_options'=>['6 Months','1 Year','2 Years'],'size_options'=>['16"','18"'],
    'base_price'=>31999,'mrp'=>115000,'stock'=>5,'badge'=>'Editor\'s Pick',
    'best_for'=>'Everyday Elegance','emi'=>2667,'cod'=>true,
    'specs'=>['SGL Certified Sapphire','925 Sterling Silver','Rhodium Plated','Adjustable Chain Length','Tarnish-Resistant Finish','Lightweight, All-Day Comfort','Complimentary Gift Box'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Sapphire+Pendant',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Rear+View',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Pendant+Detail',
    ],
  ],
  [
    'id'=>'sp4','title'=>'Traditional Gold Pearl Choker','subtitle'=>'22K Gold · Freshwater Pearls · BIS Hallmarked',
    'metal'=>'Yellow Gold','gemstone'=>'Pearl','purity'=>'22K',
    'size'=>'14"–15" Choker Length','carat_options'=>[1,2],'purity_options'=>['18K','22K'],
    'warranty_options'=>['6 Months','1 Year'],'size_options'=>['14"','15"'],
    'base_price'=>22499,'mrp'=>89842,'stock'=>20,'badge'=>'Wedding Favourite',
    'best_for'=>'Weddings & Festive Wear','emi'=>1875,'cod'=>true,
    'specs'=>['BIS Hallmarked 22K Gold','Natural Freshwater Pearls','Traditional Antique Finish','Matching Earrings Available','Handcrafted Detailing','Complimentary Gift Box','Insured Shipping'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Gold+Pearl+Choker',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Profile+View',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Clasp+Detail',
    ],
  ],
  [
    'id'=>'sp5','title'=>'Diamond Tennis Bracelet','subtitle'=>'Platinum · Round Brilliant Diamonds · IGI Certified',
    'metal'=>'Platinum','gemstone'=>'Diamond','purity'=>'Platinum 950',
    'size'=>'6.5"–7.5" Adjustable','carat_options'=>[1.5,2,3],'purity_options'=>['Platinum 950'],
    'warranty_options'=>['6 Months','1 Year'],'size_options'=>['6.5"','7"','7.5"'],
    'base_price'=>26999,'mrp'=>103536,'stock'=>9,'badge'=>'Statement Piece',
    'best_for'=>'Milestone Occasions','emi'=>2250,'cod'=>true,
    'specs'=>['IGI Certified Diamonds','VVS Clarity, F Colour','950 Platinum Setting','Secure Double-Clasp','Continuous Line Design','Free Resizing','Complimentary Gift Box','Insured Shipping'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Diamond+Tennis+Bracelet',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Top+View',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Clasp+Panel',
    ],
  ],
  [
    'id'=>'sp6','title'=>'Ruby Drop Earrings','subtitle'=>'18K White Gold · Natural Ruby · IGI Certified',
    'metal'=>'White Gold','gemstone'=>'Ruby','purity'=>'18K',
    'size'=>'Standard Drop, 2.4cm','carat_options'=>[1,1.5],'purity_options'=>['14K','18K'],
    'warranty_options'=>['1 Year','2 Years'],'size_options'=>['Standard'],
    'base_price'=>33499,'mrp'=>121800,'stock'=>4,'badge'=>'Power Pick',
    'best_for'=>'Evening & Party Wear','emi'=>2792,'cod'=>true,
    'specs'=>['IGI Certified Ruby','18K Hallmarked White Gold','Diamond Accent Halo','Secure Screw-Back Fitting','Rhodium Polished','Complimentary Gift Box','Insured Shipping'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Ruby+Drop+Earrings',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Front+View',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Side+Detail',
    ],
  ],
  [
    'id'=>'sp7','title'=>'Rose Gold Pearl Necklace','subtitle'=>'14K Rose Gold · Cultured Pearls · SGL Certified',
    'metal'=>'Rose Gold','gemstone'=>'Pearl','purity'=>'14K',
    'size'=>'16" Chain, Adjustable','carat_options'=>[0.5,1],'purity_options'=>['14K','18K'],
    'warranty_options'=>['6 Months','1 Year'],'size_options'=>['16"'],
    'base_price'=>16999,'mrp'=>61786,'stock'=>15,'badge'=>'Everyday Favourite',
    'best_for'=>'Daily Wear','emi'=>1417,'cod'=>true,
    'specs'=>['SGL Certified Pearl','14K Hallmarked Rose Gold','Delicate Pendant Design','Adjustable Chain','Tarnish-Resistant Coating','Complimentary Gift Box','Lightweight Comfort'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Rose+Gold+Pearl+Necklace',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Slim+Profile',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Pendant+Close+Up',
    ],
  ],
  [
    'id'=>'sp8','title'=>'Amethyst Cocktail Ring','subtitle'=>'14K Yellow Gold · Natural Amethyst · SGL Certified',
    'metal'=>'Yellow Gold','gemstone'=>'Amethyst','purity'=>'14K',
    'size'=>'Ring Size 5–9 (Resizable)','carat_options'=>[2,3,4],'purity_options'=>['14K','18K','22K'],
    'warranty_options'=>['6 Months','1 Year','2 Years'],'size_options'=>['5','6','7','8','9'],
    'base_price'=>24999,'mrp'=>88000,'stock'=>6,'badge'=>'Bold Statement',
    'best_for'=>'Party & Evening Wear','emi'=>2083,'cod'=>true,
    'specs'=>['SGL Certified Amethyst','14K Hallmarked Gold','Diamond Accent Setting','Statement Cocktail Cut','Rhodium Polished Band','Free Resizing','Complimentary Gift Box'],
    'images'=>[
      'https://placehold.co/600x420/1F1A17/C8A75A?text=Amethyst+Cocktail+Ring',
      'https://placehold.co/600x420/C8A75A/1F1A17?text=Size+Comparison',
      'https://placehold.co/600x420/2a231f/C8A75A?text=Stone+Detail',
    ],
  ],
];

$waNumber = '917470726731';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store — Niles &amp; Sinai | Fine Certified Jewellery</title>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Assets/Modules/base.css">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

<?php include 'Assets/Modules/nav.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════
   STORE PAGE — ROOT
═══════════════════════════════════════════════════════════ */
:root {
  --sb-w:       280px;
  --sb-ease:    cubic-bezier(0.4,0,0.2,1);
  --sb-spring:  cubic-bezier(0.34,1.56,0.64,1);
  --qv-w:       min(680px, 96vw);
  --card-w:     286px;
}

/* ── PAGE SHELL ── */
.lc-store-page {
  min-height: 100vh;
  background: #fff;
  font-family: var(--lap-font,'Chakra Petch',sans-serif);
}

/* ═══════════════════════════════════════════════════════════
   TOP TRUST STRIP
═══════════════════════════════════════════════════════════ */
.lc-trust-strip {
  background: var(--lap-text-dark,#050505);
  border-bottom: 2px solid var(--lap-neon-accent,#BFFF00);
  padding: 0 clamp(16px,4vw,60px);
  overflow: hidden;
  position: relative;
}
.lc-trust-strip::after {
  content:'';
  position: absolute; inset:0;
  background: repeating-linear-gradient(90deg,rgba(191,255,0,.04) 0,rgba(191,255,0,.04) 1px,transparent 1px,transparent 60px);
  pointer-events:none;
}
.lc-trust-inner {
  display: flex; align-items: stretch;
  gap: 0; overflow-x: auto; scrollbar-width: none;
  position: relative; z-index:1;
}
.lc-trust-inner::-webkit-scrollbar { display:none; }
.lc-trust-item {
  display: flex; align-items: center; gap: 10px;
  padding: 12px 24px;
  border-right: 1px solid rgba(191,255,0,.12);
  flex-shrink: 0; white-space: nowrap;
  transition: background .2s;
}
.lc-trust-item:last-child { border-right:none; }
.lc-trust-item:hover { background:rgba(191,255,0,.06); }
.lc-trust-item svg { width:16px; height:16px; stroke:var(--lap-neon-accent,#BFFF00); fill:none; stroke-width:2; stroke-linecap:round; stroke-linejoin:round; flex-shrink:0; }
.lc-trust-item-text { font-size:.62rem; font-weight:700; letter-spacing:1.8px; text-transform:uppercase; color:#fff; }
.lc-trust-item-text em { font-style:normal; color:var(--lap-neon-accent,#BFFF00); }

/* ═══════════════════════════════════════════════════════════
   LAYOUT: SIDEBAR + MAIN
═══════════════════════════════════════════════════════════ */
.lc-store-layout {
  display: flex;
  align-items: flex-start;
  min-height: calc(100vh - 76px);
}

/* ═══════════════════════════════════════════════════════════
   SIDEBAR
═══════════════════════════════════════════════════════════ */
.lc-sidebar {
  width: var(--sb-w);
  flex-shrink: 0;
  border-right: 1.5px solid var(--lap-border-color,#E5E5E5);
  min-height: 100%;
  position: sticky;
  top: 76px;
  height: calc(100vh - 76px);
  overflow-y: auto;
  overflow-x: hidden;
  scrollbar-width: thin;
  scrollbar-color: rgba(191,255,0,.3) transparent;
  transition: width .38s var(--sb-ease), transform .38s var(--sb-ease);
  background: #fff;
  z-index: 100;
}
.lc-sidebar::-webkit-scrollbar { width:4px; }
.lc-sidebar::-webkit-scrollbar-thumb { background:rgba(191,255,0,.3); border-radius:2px; }
.lc-sidebar.is-collapsed { width: 0; border-right-color:transparent; overflow:hidden; }

/* Sidebar inner */
.lc-sb-inner { width: var(--sb-w); padding: 20px 0 40px; }

/* Sidebar header */
.lc-sb-head {
  display: flex; align-items: center; justify-content: space-between;
  padding: 0 20px 16px;
  border-bottom: 1.5px solid var(--lap-border-color,#E5E5E5);
  margin-bottom: 8px;
}
.lc-sb-title { font-size:.78rem; font-weight:800; letter-spacing:3px; text-transform:uppercase; color:var(--lap-text-dark,#050505); }
.lc-sb-clear {
  font-size:.55rem; font-weight:700; letter-spacing:1.5px; text-transform:uppercase;
  color:var(--lap-text-muted,#666); background:none; border:none; cursor:pointer; padding:4px 8px;
  border-radius:3px; transition:background .15s, color .15s;
}
.lc-sb-clear:hover { background:rgba(191,255,0,.15); color:var(--lap-text-dark,#050505); }

/* Filter group */
.lc-filter-group { border-bottom: 1px solid var(--lap-border-color,#E5E5E5); }
.lc-filter-toggle {
  display: flex; align-items: center; justify-content: space-between;
  width:100%; padding: 13px 20px;
  background:none; border:none; cursor:pointer;
  font-family:var(--lap-font,'Chakra Petch',sans-serif);
  font-size:.68rem; font-weight:700; letter-spacing:2px; text-transform:uppercase;
  color:var(--lap-text-dark,#050505);
  transition:background .15s;
}
.lc-filter-toggle:hover { background:rgba(191,255,0,.07); }
.lc-filter-chevron {
  width:13px; height:13px;
  stroke:var(--lap-text-dark,#050505); fill:none; stroke-width:2.5;
  stroke-linecap:round; stroke-linejoin:round;
  transition:transform .28s var(--sb-ease);
}
.lc-filter-group.is-open .lc-filter-chevron { transform:rotate(180deg); }
.lc-filter-body {
  max-height:0; overflow:hidden;
  transition:max-height .38s var(--sb-ease), padding .2s;
  padding: 0 20px;
}
.lc-filter-group.is-open .lc-filter-body { max-height:360px; padding:4px 20px 14px; }

/* Price range */
.lc-price-range { display:flex; flex-direction:column; gap:10px; }
.lc-price-inputs { display:flex; gap:8px; }
.lc-price-input {
  flex:1; padding:8px 10px;
  border:1.5px solid var(--lap-border-color,#E5E5E5); border-radius:4px;
  font-family:var(--lap-font,'Chakra Petch',sans-serif);
  font-size:.7rem; font-weight:600; color:var(--lap-text-dark,#050505);
  background:#fff; outline:none;
  transition:border-color .2s, box-shadow .2s;
}
.lc-price-input:focus { border-color:var(--lap-text-dark,#050505); box-shadow:2px 2px 0 var(--lap-neon-accent,#BFFF00); }
.lc-price-slider {
  -webkit-appearance:none; width:100%; height:4px;
  background:var(--lap-border-color,#E5E5E5); border-radius:2px; outline:none;
  cursor:pointer;
}
.lc-price-slider::-webkit-slider-thumb {
  -webkit-appearance:none; width:16px; height:16px; border-radius:50%;
  background:var(--lap-text-dark,#050505); border:3px solid var(--lap-neon-accent,#BFFF00); cursor:pointer;
}
.lc-price-display { font-size:.62rem; font-weight:700; letter-spacing:1px; color:var(--lap-text-muted,#666); }
.lc-price-display strong { color:var(--lap-text-dark,#050505); }

/* Checkbox options */
.lc-filter-options { display:flex; flex-direction:column; gap:2px; }
.lc-filter-opt {
  display:flex; align-items:center; gap:10px;
  padding:7px 8px; border-radius:4px; cursor:pointer;
  transition:background .15s;
}
.lc-filter-opt:hover { background:rgba(191,255,0,.08); }
.lc-filter-opt input[type=checkbox] {
  appearance:none; width:15px; height:15px; border:1.5px solid var(--lap-border-color,#E5E5E5);
  border-radius:2px; cursor:pointer; flex-shrink:0;
  transition:border-color .15s, background .15s;
  position:relative;
}
.lc-filter-opt input[type=checkbox]:checked {
  background:var(--lap-text-dark,#050505);
  border-color:var(--lap-text-dark,#050505);
}
.lc-filter-opt input[type=checkbox]:checked::after {
  content:''; position:absolute;
  top:2px; left:4px; width:5px; height:8px;
  border:2px solid var(--lap-neon-accent,#BFFF00);
  border-top:none; border-left:none;
  transform:rotate(45deg);
}
.lc-filter-opt-label { font-size:.65rem; font-weight:600; letter-spacing:.5px; color:var(--lap-text-dark,#050505); }
.lc-filter-opt-count { margin-left:auto; font-size:.55rem; font-weight:600; color:var(--lap-text-muted,#666); padding:1px 6px; border-radius:10px; background:rgba(0,0,0,.04); }

/* Sort section */
.lc-sort-group { padding:12px 20px 14px; border-bottom:1px solid var(--lap-border-color,#E5E5E5); }
.lc-sort-label { font-size:.6rem; font-weight:800; letter-spacing:2.5px; text-transform:uppercase; color:var(--lap-text-muted,#666); margin-bottom:8px; display:block; }
.lc-sort-opts { display:flex; flex-direction:column; gap:2px; }
.lc-sort-opt {
  display:flex; align-items:center; gap:10px;
  padding:8px 10px; border-radius:4px; cursor:pointer;
  font-size:.65rem; font-weight:600; letter-spacing:.5px;
  color:var(--lap-text-muted,#666);
  border:1.5px solid transparent;
  transition:background .15s, color .15s, border-color .15s;
}
.lc-sort-opt:hover { background:rgba(191,255,0,.08); color:var(--lap-text-dark,#050505); }
.lc-sort-opt.is-active {
  background:var(--lap-text-dark,#050505);
  color:var(--lap-neon-accent,#BFFF00);
  border-color:var(--lap-text-dark,#050505);
}
.lc-sort-opt .dot { width:6px; height:6px; border-radius:50%; background:currentColor; flex-shrink:0; }

/* ═══════════════════════════════════════════════════════════
   MAIN CONTENT
═══════════════════════════════════════════════════════════ */
.lc-store-main {
  flex:1; min-width:0;
  padding: 24px clamp(16px,3vw,40px) 60px;
}

/* Main toolbar */
.lc-main-toolbar {
  display:flex; align-items:center; justify-content:space-between;
  gap:12px; margin-bottom:24px; flex-wrap:wrap;
}
.lc-toolbar-left { display:flex; align-items:center; gap:12px; }
.lc-sidebar-toggle {
  display:flex; align-items:center; gap:8px;
  padding:9px 16px;
  border:1.5px solid var(--lap-border-color,#E5E5E5);
  border-radius:5px; background:#fff; cursor:pointer;
  font-family:var(--lap-font,'Chakra Petch',sans-serif);
  font-size:.62rem; font-weight:700; letter-spacing:1.8px; text-transform:uppercase;
  color:var(--lap-text-dark,#050505);
  transition:border-color .2s, background .2s, color .2s, box-shadow .2s;
}
.lc-sidebar-toggle:hover {
  border-color:var(--lap-text-dark,#050505);
  box-shadow:3px 3px 0 var(--lap-neon-accent,#BFFF00);
}
.lc-sidebar-toggle svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2; stroke-linecap:round; }
.lc-product-count {
  font-size:.62rem; font-weight:700; letter-spacing:1.5px; text-transform:uppercase;
  color:var(--lap-text-muted,#666);
}
.lc-product-count strong { color:var(--lap-text-dark,#050505); }
.lc-toolbar-right { display:flex; align-items:center; gap:8px; }
.lc-grid-toggle {
  display:flex; gap:4px;
  border:1.5px solid var(--lap-border-color,#E5E5E5); border-radius:5px; overflow:hidden;
}
.lc-grid-btn {
  width:36px; height:36px; display:flex; align-items:center; justify-content:center;
  background:none; border:none; cursor:pointer; color:var(--lap-text-muted,#666);
  transition:background .15s, color .15s;
}
.lc-grid-btn svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2; stroke-linecap:round; stroke-linejoin:round; }
.lc-grid-btn.is-active { background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); }

/* Active filters chips */
.lc-active-filters {
  display:flex; gap:6px; flex-wrap:wrap; margin-bottom:20px;
}
.lc-filter-chip {
  display:inline-flex; align-items:center; gap:6px;
  padding:5px 12px; border-radius:20px;
  background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00);
  font-size:.55rem; font-weight:700; letter-spacing:1.5px; text-transform:uppercase;
}
.lc-filter-chip button {
  background:none; border:none; cursor:pointer; padding:0; display:flex; align-items:center;
  color:rgba(191,255,0,.6); transition:color .15s;
}
.lc-filter-chip button:hover { color:var(--lap-neon-accent,#BFFF00); }
.lc-filter-chip button svg { width:11px; height:11px; stroke:currentColor; fill:none; stroke-width:3; stroke-linecap:round; }

/* Products grid */
.lc-products-grid {
  display:grid;
  grid-template-columns: repeat(auto-fill, minmax(var(--card-w), 1fr));
  gap: 20px;
}
.lc-products-grid.is-list {
  grid-template-columns:1fr;
  --card-w:100%;
}

/* ═══════════════════════════════════════════════════════════
   PRODUCT CARD (store version — extended)
═══════════════════════════════════════════════════════════ */
.lc-sc {
  border:1.5px solid var(--lap-border-color,#E5E5E5);
  border-radius:8px; background:#fff;
  display:flex; flex-direction:column;
  position:relative; overflow:hidden;
  transition:border-color .25s, box-shadow .25s, transform .25s var(--sb-spring);
}
.lc-sc:hover {
  border-color:var(--lap-text-dark,#050505);
  box-shadow:5px 5px 0 var(--lap-neon-accent,#BFFF00);
  transform:translateY(-4px);
}
.lc-products-grid.is-list .lc-sc {
  flex-direction:row;
}
.lc-products-grid.is-list .lc-sc-img-wrap {
  width:220px; flex-shrink:0;
  aspect-ratio:auto;
}

/* Image */
.lc-sc-img-wrap {
  position:relative; aspect-ratio:3/2;
  background:#0a0a0a; border-radius:6px 6px 0 0; overflow:hidden;
}
.lc-products-grid.is-list .lc-sc-img-wrap { border-radius:6px 0 0 6px; }
.lc-sc-img { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; transition:opacity .5s, transform .5s; }
.lc-sc-img.is-hidden { opacity:0; transform:scale(1.04); }
.lc-sc-img.is-active { opacity:1; transform:scale(1); }
.lc-sc-scan { position:absolute; inset:0; z-index:2; pointer-events:none; background:repeating-linear-gradient(0deg,rgba(191,255,0,.03) 0px,rgba(191,255,0,.03) 1px,transparent 1px,transparent 3px); opacity:0; transition:opacity .3s; }
.lc-sc:hover .lc-sc-scan { opacity:1; }
.lc-sc-img-dots { position:absolute; bottom:8px; left:50%; transform:translateX(-50%); display:flex; gap:5px; z-index:3; }
.lc-sc-img-dot { width:5px; height:5px; border-radius:50%; background:rgba(255,255,255,.35); transition:background .2s, transform .2s; }
.lc-sc-img-dot.is-active { background:var(--lap-neon-accent,#BFFF00); transform:scale(1.4); }
/* Badges */
.lc-sc-badge { position:absolute; top:10px; left:10px; z-index:4; background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); font-size:.5rem; font-weight:800; letter-spacing:2px; text-transform:uppercase; padding:3px 10px; border-radius:3px; border:1px solid rgba(191,255,0,.25); }
.lc-sc-cod-badge { position:absolute; top:10px; left:50%; transform:translateX(-50%); z-index:4; background:rgba(34,197,94,.15); color:#16a34a; border:1px solid rgba(34,197,94,.3); font-size:.48rem; font-weight:800; letter-spacing:1.5px; text-transform:uppercase; padding:3px 9px; border-radius:3px; white-space:nowrap; }
/* Action buttons top-right cluster */
.lc-sc-actions { position:absolute; top:9px; right:9px; z-index:4; display:flex; flex-direction:column; gap:5px; }
.lc-sc-action-btn {
  width:32px; height:32px; border-radius:50%;
  background:rgba(255,255,255,.9); border:1.5px solid rgba(255,255,255,.8);
  display:flex; align-items:center; justify-content:center;
  cursor:pointer; backdrop-filter:blur(6px);
  transition:background .2s, border-color .2s, transform .2s var(--sb-spring), box-shadow .2s;
}
.lc-sc-action-btn:hover { background:var(--lap-text-dark,#050505); border-color:var(--lap-text-dark,#050505); transform:scale(1.12); box-shadow:2px 2px 0 var(--lap-neon-accent,#BFFF00); }
.lc-sc-action-btn svg { width:13px; height:13px; stroke:var(--lap-text-dark,#050505); fill:none; stroke-width:2.2; stroke-linecap:round; stroke-linejoin:round; transition:stroke .2s; }
.lc-sc-action-btn:hover svg { stroke:var(--lap-neon-accent,#BFFF00); }
.lc-sc-action-btn.is-added { background:var(--lap-text-dark,#050505); border-color:var(--lap-neon-accent,#BFFF00); box-shadow:0 0 8px rgba(191,255,0,.4); }
.lc-sc-action-btn.is-added svg { stroke:var(--lap-neon-accent,#BFFF00); }

/* Body */
.lc-sc-body { padding:14px; display:flex; flex-direction:column; gap:6px; flex:1; }
.lc-sc-stock { display:inline-flex; align-items:center; gap:5px; font-size:.52rem; font-weight:700; letter-spacing:1.8px; text-transform:uppercase; color:var(--lap-text-muted,#666); }
.lc-sc-stock-dot { width:5px; height:5px; border-radius:50%; flex-shrink:0; animation:sDotBlink 2s ease infinite; }
.lc-sc-stock-dot.g { background:#22c55e; }
.lc-sc-stock-dot.a { background:#f59e0b; }
@keyframes sDotBlink { 0%,100%{opacity:1} 50%{opacity:.35} }
.lc-sc-title { font-size:.9rem; font-weight:700; letter-spacing:-.2px; color:var(--lap-text-dark,#050505); text-transform:uppercase; line-height:1.2; }
.lc-sc-subtitle { font-size:.65rem; color:var(--lap-text-muted,#666); letter-spacing:.3px; line-height:1.4; }
/* EMI line */
.lc-sc-emi { font-size:.6rem; font-weight:700; letter-spacing:.5px; color:var(--lap-text-muted,#666); padding:5px 10px; background:rgba(191,255,0,.08); border-radius:3px; border-left:3px solid var(--lap-neon-accent,#BFFF00); }
.lc-sc-emi strong { color:var(--lap-text-dark,#050505); }
/* Price */
.lc-sc-price-row { display:flex; align-items:center; gap:8px; flex-wrap:wrap; }
.lc-sc-price { font-size:1.1rem; font-weight:800; color:var(--lap-text-dark,#050505); letter-spacing:-.5px; }
.lc-sc-mrp { font-size:.68rem; color:var(--lap-text-muted,#666); text-decoration:line-through; }
.lc-sc-off { background:var(--lap-neon-accent,#BFFF00); color:var(--lap-text-dark,#050505); font-size:.52rem; font-weight:900; letter-spacing:1.5px; text-transform:uppercase; padding:3px 8px; border-radius:3px; }
/* Spec pills */
.lc-sc-pills { display:flex; gap:5px; flex-wrap:wrap; margin-top:2px; }
.lc-sc-pill { font-size:.48rem; font-weight:700; letter-spacing:1px; text-transform:uppercase; padding:3px 7px; border:1px solid var(--lap-border-color,#E5E5E5); border-radius:2px; color:var(--lap-text-muted,#666); transition:border-color .2s, color .2s; }
.lc-sc:hover .lc-sc-pill { border-color:rgba(191,255,0,.4); color:var(--lap-text-dark,#050505); }

/* Footer */
.lc-sc-footer { padding:0 14px 14px; display:grid; grid-template-columns:1fr auto auto; gap:6px; }
.lc-sc-btn-primary {
  display:flex; align-items:center; justify-content:center; gap:6px;
  padding:10px; background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00);
  font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.6rem; font-weight:800; letter-spacing:1.5px; text-transform:uppercase;
  border:none; border-radius:4px; cursor:pointer; text-decoration:none;
  transition:box-shadow .2s, transform .15s var(--sb-spring);
}
.lc-sc-btn-primary:hover { box-shadow:0 0 14px rgba(191,255,0,.4); transform:translateY(-2px); }
.lc-sc-btn-primary:active { transform:scale(.96); }
.lc-sc-btn-primary svg { width:12px; height:12px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }
.lc-sc-btn-icon {
  width:38px; height:38px; display:flex; align-items:center; justify-content:center;
  border:1.5px solid var(--lap-border-color,#E5E5E5); border-radius:4px; background:none; cursor:pointer;
  color:var(--lap-text-dark,#050505);
  transition:border-color .2s, background .2s, color .2s, transform .15s var(--sb-spring), box-shadow .15s;
}
.lc-sc-btn-icon:hover { border-color:var(--lap-text-dark,#050505); background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); transform:translateY(-2px); box-shadow:2px 2px 0 var(--lap-neon-accent,#BFFF00); }
.lc-sc-btn-icon svg { width:14px; height:14px; stroke:currentColor; fill:none; stroke-width:2; stroke-linecap:round; stroke-linejoin:round; }
/* WA btn special */
.lc-sc-btn-icon.wa { border-color:rgba(37,211,102,.4); color:#16a34a; }
.lc-sc-btn-icon.wa:hover { background:linear-gradient(135deg,#25D366,#128C7E); border-color:transparent; color:#fff; box-shadow:2px 2px 0 rgba(37,211,102,.4); }

/* ═══════════════════════════════════════════════════════════
   QUICK VIEW DRAWER
═══════════════════════════════════════════════════════════ */
.lc-qv-overlay {
  position:fixed; inset:0; background:rgba(5,5,5,.6);
  z-index:9600; opacity:0; pointer-events:none; transition:opacity .35s; backdrop-filter:blur(5px);
}
.lc-qv-overlay.is-open { opacity:1; pointer-events:all; }
.lc-qv-drawer {
  position:fixed; top:0; right:0; bottom:0;
  width:var(--qv-w);
  background:#fff; z-index:9700;
  display:flex; flex-direction:column;
  transform:translateX(100%); transition:transform .4s cubic-bezier(0.4,0,0.2,1);
  box-shadow:-16px 0 60px rgba(0,0,0,.14);
}
.lc-qv-drawer.is-open { transform:translateX(0); }
@media (max-width:900px) {
  .lc-qv-drawer { width:100vw; bottom:var(12px); border-radius:20px 20px 0 0;  transform:translateY(100%); }
  .lc-qv-drawer.is-open { transform:translateY(0); }
}

/* QV header */
.lc-qv-head {
  display:flex; align-items:center; justify-content:space-between;
  padding:18px 24px; border-bottom:1.5px solid var(--lap-border-color,#E5E5E5); flex-shrink:0;
}
.lc-qv-head h2 { font-size:.78rem; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--lap-text-dark,#050505); }
.lc-qv-close {
  width:36px; height:36px; display:flex; align-items:center; justify-content:center;
  border:1.5px solid var(--lap-border-color,#E5E5E5); border-radius:50px; background:none; cursor:pointer;
  color:var(--lap-text-dark,#050505); transition:all .2s;
}
.lc-qv-close:hover { background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); border-color:var(--lap-text-dark,#050505); transform:rotate(90deg); }
.lc-qv-close svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; }

/* QV body */
.lc-qv-body { flex:1; overflow-x:scroll; }
.lc-qv-inner { padding:0; }

/* QV grid layout */
.lc-qv-grid {
  display:grid; grid-template-columns:1fr 1fr;
}
@media (max-width:640px) { .lc-qv-grid { grid-template-columns:1fr; } }

/* Image panel */
.lc-qv-img-panel { position:relative; background:#0a0a0a; }
.lc-qv-img-main { position:relative; aspect-ratio:4/3; overflow:hidden; }
.lc-qv-img { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; transition:opacity .5s, transform .5s; }
.lc-qv-img.is-hidden { opacity:0; transform:scale(1.04); }
.lc-qv-img.is-active { opacity:1; transform:scale(1); }
.lc-qv-img-scan { position:absolute; inset:0; background:repeating-linear-gradient(0deg,rgba(191,255,0,.03) 0px,rgba(191,255,0,.03) 1px,transparent 1px,transparent 3px); pointer-events:none; }
.lc-qv-thumbs { display:flex; gap:8px; padding:10px; background:#111; overflow-x:auto; scrollbar-width:none; }
.lc-qv-thumbs::-webkit-scrollbar { display:none; }
.lc-qv-thumb {
  width:60px; height:44px; flex-shrink:0; border-radius:4px; overflow:hidden; cursor:pointer;
  border:2px solid transparent; transition:border-color .2s, opacity .2s; opacity:.55;
}
.lc-qv-thumb img { width:100%; height:100%; object-fit:cover; }
.lc-qv-thumb.is-active { border-color:var(--lap-neon-accent,#BFFF00); opacity:1; }

/* Info panel */
.lc-qv-info-panel { padding:22px 22px 10px; display:flex; flex-direction:column; gap:14px; overflow-y:scroll; }
.lc-qv-badge-row { display:flex; gap:6px; flex-wrap:wrap; }
.lc-qv-badge { font-size:.52rem; font-weight:800; letter-spacing:2px; text-transform:uppercase; padding:4px 10px; border-radius:3px; }
.lc-qv-badge.dark { background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); }
.lc-qv-badge.green { background:rgba(34,197,94,.12); color:#16a34a; border:1px solid rgba(34,197,94,.3); }
.lc-qv-title { font-size:1.1rem; font-weight:700; letter-spacing:-.5px; text-transform:uppercase; color:var(--lap-text-dark,#050505); line-height:1.15; }
.lc-qv-subtitle { font-size:.72rem; color:var(--lap-text-muted,#666); line-height:1.5; }
/* Price block */
.lc-qv-price-block { display:flex; flex-direction:column; gap:4px; padding:12px; background:#F9F9F9; border-radius:5px; border-left:3px solid var(--lap-neon-accent,#BFFF00); }
.lc-qv-price { font-size:1.5rem; font-weight:800; color:var(--lap-text-dark,#050505); letter-spacing:-1px; line-height:1; }
.lc-qv-price-row2 { display:flex; align-items:center; gap:8px; }
.lc-qv-mrp { font-size:.72rem; color:var(--lap-text-muted,#666); text-decoration:line-through; }
.lc-qv-off { background:var(--lap-neon-accent,#BFFF00); color:var(--lap-text-dark,#050505); font-size:.52rem; font-weight:900; letter-spacing:1.5px; text-transform:uppercase; padding:3px 8px; border-radius:3px; }
.lc-qv-emi { font-size:.65rem; font-weight:700; color:var(--lap-text-muted,#666); margin-top:4px; }
.lc-qv-emi strong { color:var(--lap-text-dark,#050505); }
/* Variant selectors */
.lc-qv-variants { display:flex; flex-direction:column; gap:10px; }
.lc-qv-var-label { font-size:.58rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; color:var(--lap-text-muted,#666); margin-bottom:5px; display:block; }
.lc-qv-var-opts { display:flex; gap:6px; flex-wrap:wrap; }
.lc-qv-var-btn {
  padding:6px 14px; border:1.5px solid var(--lap-border-color,#E5E5E5); border-radius:4px;
  font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.65rem; font-weight:700; letter-spacing:.5px;
  background:#fff; color:var(--lap-text-dark,#050505); cursor:pointer;
  transition:border-color .2s, background .2s, color .2s, box-shadow .15s, transform .15s var(--sb-spring);
}
.lc-qv-var-btn:hover { border-color:var(--lap-text-dark,#050505); transform:translateY(-1px); }
.lc-qv-var-btn.is-active { background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); border-color:var(--lap-text-dark,#050505); box-shadow:2px 2px 0 var(--lap-neon-accent,#BFFF00); }
/* Qty */
.lc-qv-qty-row { display:flex; align-items:center; gap:12px; }
.lc-qv-qty-label { font-size:.58rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; color:var(--lap-text-muted,#666); }
.lc-qv-qty {
  display:flex; align-items:center;
  border:1.5px solid var(--lap-border-color,#E5E5E5); border-radius:5px; overflow:hidden;
}
.lc-qv-qty-btn {
  width:36px; height:36px; display:flex; align-items:center; justify-content:center;
  background:none; border:none; cursor:pointer; font-size:1.1rem; font-weight:700;
  color:var(--lap-text-dark,#050505);
  transition:background .15s, color .15s;
}
.lc-qv-qty-btn:hover { background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); }
.lc-qv-qty-val {
  min-width:38px; text-align:center;
  font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.82rem; font-weight:800;
  color:var(--lap-text-dark,#050505); border-left:1px solid var(--lap-border-color,#E5E5E5); border-right:1px solid var(--lap-border-color,#E5E5E5); padding:0 4px; line-height:36px;
}

/* QV footer */
.lc-qv-footer {
  padding:16px 22px; border-top:1.5px solid var(--lap-border-color,#E5E5E5);
  display:flex; flex-direction:column; gap:10px; flex-shrink:0;
  background:#fff;
}
.lc-qv-footer-row { display:flex; gap:8px; }
.lc-qv-btn-cart {
  flex:1; display:flex; align-items:center; justify-content:center; gap:8px;
  padding:13px; background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00);
  font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.72rem; font-weight:800; letter-spacing:2px; text-transform:uppercase;
  border:none; border-radius:5px; cursor:pointer;
  transition:box-shadow .2s, transform .15s var(--sb-spring);
}
.lc-qv-btn-cart:hover { box-shadow:0 0 18px rgba(191,255,0,.45); transform:translateY(-2px); }
.lc-qv-btn-cart:active { transform:scale(.96); }
.lc-qv-btn-cart svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }
.lc-qv-btn-wa {
  flex:1; display:flex; align-items:center; justify-content:center; gap:8px;
  padding:13px;
  background:linear-gradient(135deg,#25D366,#128C7E); color:#fff;
  font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.72rem; font-weight:800; letter-spacing:1.8px; text-transform:uppercase;
  border:none; border-radius:5px; cursor:pointer;
  transition:box-shadow .2s, transform .15s var(--sb-spring);
}
.lc-qv-btn-wa:hover { box-shadow:0 0 18px rgba(37,211,102,.5); transform:translateY(-2px); }
.lc-qv-btn-wa svg { width:16px; height:16px; fill:#fff; flex-shrink:0; }
/* Trust micro */
.lc-qv-trust-row { display:flex; gap:12px; flex-wrap:wrap; }
.lc-qv-trust-item { display:flex; align-items:center; gap:5px; font-size:.52rem; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--lap-text-muted,#666); }
.lc-qv-trust-item svg { width:12px; height:12px; stroke:var(--lap-neon-accent,#BFFF00); fill:none; stroke-width:2.5; stroke-linecap:round; flex-shrink:0; }

/* QV full specs */
.lc-qv-specs { border-top:1px solid var(--lap-border-color,#E5E5E5); padding:16px 22px; }
.lc-qv-specs-title { font-size:.58rem; font-weight:800; letter-spacing:2.5px; text-transform:uppercase; color:var(--lap-text-muted,#666); margin-bottom:10px; }
.lc-qv-spec-list { display:flex; flex-direction:column; gap:0; }
.lc-qv-spec-item { display:flex; align-items:center; gap:8px; padding:7px 0; border-bottom:1px solid rgba(0,0,0,.04); font-size:.65rem; color:var(--lap-text-dark,#050505); }
.lc-qv-spec-item svg { width:12px; height:12px; stroke:var(--lap-neon-accent,#BFFF00); fill:none; stroke-width:2.5; stroke-linecap:round; flex-shrink:0; }
.lc-qv-spec-item:last-child { border-bottom:none; }

/* ── COMPARISON TRAY (same from landing) ── */
.lc-cmp-tray {
  position:fixed; bottom:0; left:0; right:0; z-index:8500;
  background:var(--lap-text-dark,#050505); border-top:2px solid var(--lap-neon-accent,#BFFF00);
  padding:14px clamp(20px,5vw,80px);
  display:flex; align-items:center; gap:16px; flex-wrap:wrap;
  transform:translateY(100%); transition:transform .4s;
  font-family:var(--lap-font,'Chakra Petch',sans-serif);
  box-shadow:0 -8px 40px rgba(0,0,0,.25);
}
.lc-cmp-tray.is-open { transform:translateY(0); }
@media (max-width:900px) { .lc-cmp-tray { bottom:12px }
.lc-qv-info-panel { padding:16px 22px; overflow-x:scroll; } }
.lc-cmp-tray-label { font-size:.6rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; color:rgba(191,255,0,.65); flex-shrink:0; }
.lc-cmp-slots { display:flex; gap:10px; flex:1; flex-wrap:wrap; }
.lc-cmp-slot { display:flex; align-items:center; gap:8px; border:1.5px dashed rgba(191,255,0,.35); border-radius:5px; padding:7px 14px; min-width:180px; transition:border-color .2s; }
.lc-cmp-slot.is-filled { border-color:var(--lap-neon-accent,#BFFF00); border-style:solid; }
.lc-cmp-slot-name { font-size:.65rem; font-weight:600; color:#fff; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; max-width:130px; flex:1; }
.lc-cmp-slot-empty { font-size:.6rem; font-weight:600; letter-spacing:1.5px; text-transform:uppercase; color:rgba(255,255,255,.3); }
.lc-cmp-slot-remove { background:none; border:none; cursor:pointer; width:18px; height:18px; display:flex; align-items:center; justify-content:center; color:rgba(191,255,0,.6); flex-shrink:0; transition:color .15s, transform .15s; }
.lc-cmp-slot-remove:hover { color:var(--lap-neon-accent,#BFFF00); transform:rotate(90deg); }
.lc-cmp-slot-remove svg { width:12px; height:12px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; }
.lc-cmp-tray-actions { display:flex; gap:8px; flex-shrink:0; }
.lc-cmp-go-btn { display:flex; align-items:center; gap:7px; padding:10px 22px; background:var(--lap-neon-accent,#BFFF00); color:var(--lap-text-dark,#050505); font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.68rem; font-weight:800; letter-spacing:2px; text-transform:uppercase; border:none; border-radius:4px; cursor:pointer; transition:box-shadow .2s, transform .15s; }
.lc-cmp-go-btn:hover { box-shadow:0 0 16px rgba(191,255,0,.6); transform:translateY(-2px); }
.lc-cmp-go-btn svg { width:13px; height:13px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }
.lc-cmp-clear-btn { display:flex; align-items:center; gap:7px; padding:10px 18px; background:rgba(255,255,255,.07); color:rgba(255,255,255,.7); font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.65rem; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; border:1.5px solid rgba(255,255,255,.15); border-radius:4px; cursor:pointer; transition:background .2s, color .2s; }
.lc-cmp-clear-btn:hover { background:rgba(255,255,255,.12); color:#fff; }

/* COMPARE MODAL */
.lc-cmp-overlay { position:fixed; inset:0; background:rgba(5,5,5,.7); z-index:9700; opacity:0; pointer-events:none; transition:opacity .35s; backdrop-filter:blur(6px); }
.lc-cmp-overlay.is-open { opacity:1; pointer-events:all; }
.lc-cmp-modal { position:fixed; top:50%; left:50%; transform:translate(-50%,-48%) scale(.96); width:min(960px,94vw); max-height:88vh; background:#fff; border:1.5px solid var(--lap-text-dark,#050505); border-radius:10px; box-shadow:8px 8px 0 var(--lap-neon-accent,#BFFF00),0 40px 80px rgba(0,0,0,.25); z-index:9800; opacity:0; pointer-events:none; transition:opacity .35s, transform .35s cubic-bezier(0.34,1.56,0.64,1); display:flex; flex-direction:column; overflow:hidden; font-family:var(--lap-font,'Chakra Petch',sans-serif); }
.lc-cmp-modal.is-open { opacity:1; pointer-events:all; transform:translate(-50%,-50%) scale(1); }
.lc-cmp-modal-head { display:flex; align-items:center; justify-content:space-between; padding:20px 28px; border-bottom:1.5px solid var(--lap-border-color,#E5E5E5); flex-shrink:0; }
.lc-cmp-modal-head h2 { font-size:1rem; font-weight:700; letter-spacing:3px; text-transform:uppercase; }
.lc-cmp-modal-close { width:36px; height:36px; display:flex; align-items:center; justify-content:center; border:1.5px solid var(--lap-border-color,#E5E5E5); border-radius:50px; background:none; cursor:pointer; color:var(--lap-text-dark,#050505); transition:all .2s; }
.lc-cmp-modal-close:hover { background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); border-color:var(--lap-text-dark,#050505); transform:rotate(90deg); }
.lc-cmp-modal-close svg { width:15px; height:15px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }
.lc-cmp-modal-body { flex:1; overflow-y:auto; padding:0 28px 28px; }
.lc-cmp-best-row { display:flex; gap:16px; padding:20px 0 16px; flex-wrap:wrap; }
.lc-cmp-best-card { flex:1; min-width:200px; border:1.5px solid var(--lap-neon-accent,#BFFF00); border-radius:6px; padding:12px 16px; display:flex; align-items:flex-start; gap:10px; background:linear-gradient(135deg,rgba(191,255,0,.07),transparent); }
.lc-cmp-best-icon { width:34px; height:34px; border-radius:5px; background:var(--lap-text-dark,#050505); display:flex; align-items:center; justify-content:center; flex-shrink:0; }
.lc-cmp-best-icon svg { width:16px; height:16px; stroke:var(--lap-neon-accent,#BFFF00); fill:none; stroke-width:2; stroke-linecap:round; stroke-linejoin:round; }
.lc-cmp-best-label { font-size:.52rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; color:var(--lap-text-muted,#666); }
.lc-cmp-best-value { font-size:.78rem; font-weight:700; color:var(--lap-text-dark,#050505); margin-top:3px; }
.lc-cmp-table { width:100%; border-collapse:collapse; margin-top:4px; }
.lc-cmp-table th,.lc-cmp-table td { padding:11px 14px; border-bottom:1px solid var(--lap-border-color,#E5E5E5); text-align:left; font-family:var(--lap-font,'Chakra Petch',sans-serif); }
.lc-cmp-table th { font-size:.6rem; font-weight:800; letter-spacing:2px; text-transform:uppercase; color:var(--lap-text-muted,#666); background:#F8F8F8; }
.lc-cmp-table th.is-product { font-size:.72rem; font-weight:700; letter-spacing:-.3px; text-transform:uppercase; color:var(--lap-text-dark,#050505); background:#fff; }
.lc-cmp-table td { font-size:.75rem; font-weight:500; letter-spacing:.2px; color:var(--lap-text-dark,#050505); }
.lc-cmp-table td.row-label { font-size:.6rem; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; color:var(--lap-text-muted,#666); background:#F8F8F8; white-space:nowrap; }
.lc-cmp-table td.is-winner { color:var(--lap-text-dark,#050505); font-weight:800; position:relative; }
.lc-cmp-table td.is-winner::after { content:'✓'; position:absolute; top:50%; right:10px; transform:translateY(-50%); width:18px; height:18px; border-radius:50%; background:var(--lap-neon-accent,#BFFF00); color:var(--lap-text-dark,#050505); font-size:.6rem; font-weight:900; display:flex; align-items:center; justify-content:center; line-height:1; }
.lc-cmp-table tr:hover td { background:rgba(191,255,0,.04); }
.lc-cmp-table .price-sale { font-size:.9rem; font-weight:800; }
.lc-cmp-table .price-mrp { font-size:.65rem; color:var(--lap-text-muted,#666); text-decoration:line-through; }
.lc-cmp-table .price-off { display:inline-block; margin-top:3px; background:var(--lap-neon-accent,#BFFF00); color:var(--lap-text-dark,#050505); font-size:.52rem; font-weight:800; letter-spacing:1px; text-transform:uppercase; padding:2px 7px; border-radius:2px; }
.lc-cmp-modal-cta { display:flex; gap:12px; padding-top:20px; flex-wrap:wrap; }
.lc-cmp-modal-cta a { flex:1; min-width:160px; display:flex; align-items:center; justify-content:center; gap:8px; padding:12px 20px; background:var(--lap-text-dark,#050505); color:var(--lap-neon-accent,#BFFF00); font-family:var(--lap-font,'Chakra Petch',sans-serif); font-size:.65rem; font-weight:800; letter-spacing:2px; text-transform:uppercase; text-decoration:none; border-radius:5px; cursor:pointer; transition:box-shadow .2s, transform .15s; }
.lc-cmp-modal-cta a:hover { box-shadow:0 0 18px rgba(191,255,0,.4); transform:translateY(-2px); }
.lc-cmp-modal-cta a svg { width:13px; height:13px; stroke:currentColor; fill:none; stroke-width:2.5; stroke-linecap:round; stroke-linejoin:round; }

/* ── RESPONSIVE ── */
@media (max-width:1100px) { :root { --sb-w:240px; } }
@media (max-width:900px) {
  .lc-sidebar { position:fixed; top:var(--mob-top-h,62px); left:0; bottom:var(--dock-h,68px); height:auto; z-index:500; transform:translateX(-100%); transition:transform .38s var(--sb-ease); box-shadow:8px 0 30px rgba(0,0,0,.1); width:var(--sb-w,280px) !important; }
  .lc-sidebar.is-open { transform:translateX(0); }
  .lc-sidebar.is-collapsed { transform:translateX(-100%); }
  .lc-store-layout { display:block; }
  .lc-store-main { padding:16px 14px 40px; }
}
@media (max-width:540px) { :root { --card-w:100%; } .lc-products-grid {  gap:12px; } .lc-sc-body { padding:10px; } .lc-sc-footer { padding:0 10px 10px; } }

</style>

<div class="lc-store-page">

<!-- ── TRUST STRIP ── -->
<div class="lc-trust-strip">
  <div class="lc-trust-inner">
    <div class="lc-trust-item">
      <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      <span class="lc-trust-item-text"><em>COD</em> Available</span>
    </div>
    <div class="lc-trust-item">
      <svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
      <span class="lc-trust-item-text">No Cost <em>EMI</em></span>
    </div>
    <div class="lc-trust-item">
      <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <span class="lc-trust-item-text"><em>1 Year</em> Warranty</span>
    </div>
    <div class="lc-trust-item">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      <span class="lc-trust-item-text">Lifetime <em>Buyback</em></span>
    </div>
    <div class="lc-trust-item">
      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
      <span class="lc-trust-item-text"><em>Like New</em> Condition</span>
    </div>
    <div class="lc-trust-item">
      <svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
      <span class="lc-trust-item-text">Free <em>Delivery</em></span>
    </div>
    <div class="lc-trust-item">
      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.14 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.05 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 17z"/></svg>
      <span class="lc-trust-item-text"><em>24hr</em> Support</span>
    </div>
  </div>
</div>

<!-- ── LAYOUT ── -->
<div class="lc-store-layout" id="lcStoreLayout">

  <!-- SIDEBAR -->
  <aside class="lc-sidebar is-collapsed" id="lcSidebar" aria-label="Product filters">
    <div class="lc-sb-inner">

      <div class="lc-sb-head">
        <span class="lc-sb-title">Filters</span>
        <button class="lc-sb-clear" id="lcSbClear">Clear All</button>
      </div>

      <!-- Sort By -->
      <div class="lc-sort-group">
        <span class="lc-sort-label">Sort By</span>
        <div class="lc-sort-opts" id="lcSortOpts">
          <div class="lc-sort-opt is-active" data-sort="featured"><span class="dot"></span>Featured</div>
          <div class="lc-sort-opt" data-sort="price-asc"><span class="dot"></span>Price: Low → High</div>
          <div class="lc-sort-opt" data-sort="price-desc"><span class="dot"></span>Price: High → Low</div>
          <div class="lc-sort-opt" data-sort="newest"><span class="dot"></span>Newest First</div>
          <div class="lc-sort-opt" data-sort="popular"><span class="dot"></span>Most Popular</div>
        </div>
      </div>

      <!-- Find by Occasion -->
      <div class="lc-filter-group is-open" data-group="occasion">
        <button class="lc-filter-toggle" aria-expanded="true">
          Find by Occasion
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-filter-options">
            <?php foreach(['Engagement & Bridal','Wedding & Festive','Gifting','Daily Wear','Party & Evening','Custom Order'] as $u): ?>
            <label class="lc-filter-opt"><input type="checkbox" data-filter="occasion" value="<?=htmlspecialchars($u)?>"><span class="lc-filter-opt-label"><?=htmlspecialchars($u)?></span></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Price -->
      <div class="lc-filter-group is-open" data-group="price">
        <button class="lc-filter-toggle" aria-expanded="true">
          Price Range
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-price-range">
            <div class="lc-price-inputs">
              <input type="number" class="lc-price-input" id="lcPriceMin" placeholder="Min" value="10000">
              <input type="number" class="lc-price-input" id="lcPriceMax" placeholder="Max" value="50000">
            </div>
            <input type="range" class="lc-price-slider" id="lcPriceSlider" min="10000" max="50000" value="50000">
            <div class="lc-price-display">Up to <strong id="lcPriceVal">₹50,000</strong></div>
          </div>
        </div>
      </div>

      <!-- Gemstone -->
      <div class="lc-filter-group is-open" data-group="gemstone">
        <button class="lc-filter-toggle" aria-expanded="true">
          Gemstone
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-filter-options">
            <?php foreach(['Diamond','Emerald','Ruby','Sapphire','Pearl','Amethyst','Kundan'] as $p): ?>
            <label class="lc-filter-opt"><input type="checkbox" data-filter="gemstone" value="<?=htmlspecialchars($p)?>"><span class="lc-filter-opt-label"><?=htmlspecialchars($p)?></span></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Metal Purity -->
      <div class="lc-filter-group" data-group="purity">
        <button class="lc-filter-toggle" aria-expanded="false">
          Metal Purity
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-filter-options">
            <?php foreach(['14K Gold','18K Gold','22K Gold','Platinum 950','Sterling Silver 925'] as $g): ?>
            <label class="lc-filter-opt"><input type="checkbox" data-filter="purity" value="<?=htmlspecialchars($g)?>"><span class="lc-filter-opt-label"><?=htmlspecialchars($g)?></span></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Metal Type -->
      <div class="lc-filter-group" data-group="metal">
        <button class="lc-filter-toggle" aria-expanded="false">
          Metal Type
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-filter-options">
            <?php foreach(['Yellow Gold','Rose Gold','White Gold','Platinum','Sterling Silver','Two-Tone'] as $b): ?>
            <label class="lc-filter-opt"><input type="checkbox" data-filter="metal" value="<?=htmlspecialchars($b)?>"><span class="lc-filter-opt-label"><?=htmlspecialchars($b)?></span><span class="lc-filter-opt-count"><?=rand(4,18)?></span></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Jewellery Type -->
      <div class="lc-filter-group" data-group="type">
        <button class="lc-filter-toggle" aria-expanded="false">
          Jewellery Type
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-filter-options">
            <?php foreach(['Rings','Necklaces','Earrings','Bracelets','Pendants','Bridal Sets'] as $d): ?>
            <label class="lc-filter-opt"><input type="checkbox" data-filter="type" value="<?=htmlspecialchars($d)?>"><span class="lc-filter-opt-label"><?=htmlspecialchars($d)?></span></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Carat Weight -->
      <div class="lc-filter-group" data-group="carat">
        <button class="lc-filter-toggle" aria-expanded="false">
          Carat Weight
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-filter-options">
            <?php foreach(['0.25 - 0.5 Ct','0.5 - 1 Ct','1 - 2 Ct','2 - 3 Ct','3 Ct & Above'] as $r): ?>
            <label class="lc-filter-opt"><input type="checkbox" data-filter="carat" value="<?=htmlspecialchars($r)?>"><span class="lc-filter-opt-label"><?=htmlspecialchars($r)?></span></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Certification -->
      <div class="lc-filter-group" data-group="certification">
        <button class="lc-filter-toggle" aria-expanded="false">
          Certification
          <svg class="lc-filter-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="lc-filter-body">
          <div class="lc-filter-options">
            <?php foreach(['IGI Certified','GIA Certified','BIS Hallmarked','SGL Certified'] as $s): ?>
            <label class="lc-filter-opt"><input type="checkbox" data-filter="certification" value="<?=htmlspecialchars($s)?>"><span class="lc-filter-opt-label"><?=htmlspecialchars($s)?></span></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="lc-store-main" id="lcStoreMain">

    <!-- Toolbar -->
    <div class="lc-main-toolbar">
      <div class="lc-toolbar-left">
        <button class="lc-sidebar-toggle" id="lcSidebarToggle" aria-label="Toggle filters">
          <svg viewBox="0 0 24 24"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="14" y2="12"/><line x1="4" y1="18" x2="10" y2="18"/></svg>
          Filters
        </button>
        <span class="lc-product-count"><strong id="lcProductCount"><?=count($storeProducts)?></strong> Products</span>
      </div>
      <div class="lc-toolbar-right">
        <div class="lc-grid-toggle">
          <button class="lc-grid-btn is-active" data-view="grid" aria-label="Grid view">
            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
          </button>
          <button class="lc-grid-btn" data-view="list" aria-label="List view">
            <svg viewBox="0 0 24 24"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Active filter chips -->
    <div class="lc-active-filters" id="lcActiveFilters"></div>

    <!-- Products Grid -->
    <div class="lc-products-grid" id="lcProductsGrid" role="list">

      <?php foreach($storeProducts as $p):
        $off = round((($p['mrp'] - $p['base_price']) / $p['mrp']) * 100);
        $stockClass = $p['stock'] <= 5 ? 'a' : 'g';
        $stockLabel = $p['stock'] <= 5 ? 'Only '.$p['stock'].' left' : $p['stock'].' in stock';
        $specSummary = array_slice($p['specs'], 0, 3);
      ?>
      <article class="lc-sc"
               role="listitem"
               data-id="<?=htmlspecialchars($p['id'])?>"
               data-title="<?=htmlspecialchars($p['title'])?>"
               data-subtitle="<?=htmlspecialchars($p['subtitle'])?>"
               data-best-for="<?=htmlspecialchars($p['best_for'])?>"
               data-price="<?=$p['base_price']?>"
               data-mrp="<?=$p['mrp']?>"
               data-off="<?=$off?>"
               data-emi="<?=$p['emi']?>"
               data-stock="<?=$p['stock']?>"
               data-badge="<?=htmlspecialchars($p['badge'])?>"
               data-specs='<?=htmlspecialchars(json_encode($p['specs']))?>'
               data-carat-opts='<?=htmlspecialchars(json_encode($p['carat_options']))?>'
               data-purity-opts='<?=htmlspecialchars(json_encode($p['purity_options']))?>'
               data-warranty-opts='<?=htmlspecialchars(json_encode($p['warranty_options']))?>'
               data-size-opts='<?=htmlspecialchars(json_encode($p['size_options']))?>'
               data-images='<?=htmlspecialchars(json_encode($p['images']))?>'>

        <!-- Image -->
        <div class="lc-sc-img-wrap" data-img-wrap>
          <?php foreach($p['images'] as $ii=>$img): ?>
          <img class="lc-sc-img <?=$ii===0?'is-active':'is-hidden'?>"
               src="<?=htmlspecialchars($img)?>"
               alt="<?=htmlspecialchars($p['title'])?> view <?=$ii+1?>"
               loading="lazy">
          <?php endforeach; ?>
          <div class="lc-sc-scan" aria-hidden="true"></div>
          <div class="lc-sc-img-dots" aria-hidden="true">
            <?php foreach($p['images'] as $ii=>$img): ?><span class="lc-sc-img-dot <?=$ii===0?'is-active':''?>"></span><?php endforeach; ?>
          </div>
          <span class="lc-sc-badge"><?=htmlspecialchars($p['badge'])?></span>
          <?php if($p['cod']): ?><span class="lc-sc-cod-badge">COD ✓</span><?php endif; ?>
          <!-- Action cluster -->
          <div class="lc-sc-actions">
            <button class="lc-sc-action-btn" data-compare-btn data-product-id="<?=htmlspecialchars($p['id'])?>" title="Compare">
              <svg viewBox="0 0 24 24"><path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg>
            </button>
            <button class="lc-sc-action-btn" data-quickview-btn data-product-id="<?=htmlspecialchars($p['id'])?>" title="Quick View">
              <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            </button>
            <button class="lc-sc-action-btn" title="WhatsApp Enquire"
              onclick="window.open('https://wa.me/<?=$waNumber?>?text='+encodeURIComponent('Hi Niles & Sinai! I am interested in the <?=addslashes($p['title'])?>. Please share availability and price.'), '_blank')">
              <svg viewBox="0 0 24 24" style="width:13px;height:13px;fill:currentColor;stroke:none"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
            </button>
          </div>
        </div>

        <!-- Body -->
        <div class="lc-sc-body">
          <div class="lc-sc-stock"><span class="lc-sc-stock-dot <?=$stockClass?>"></span><?=htmlspecialchars($stockLabel)?></div>
          <div class="lc-sc-title"><?=htmlspecialchars($p['title'])?></div>
          <div class="lc-sc-subtitle"><?=htmlspecialchars($p['subtitle'])?></div>
          <div class="lc-sc-emi">No Cost EMI starts at <strong>₹<?=number_format($p['emi'])?>/mo</strong></div>
          <div class="lc-sc-price-row">
            <span class="lc-sc-price">₹<?=number_format($p['base_price'])?></span>
            <span class="lc-sc-mrp">₹<?=number_format($p['mrp'])?></span>
            <span class="lc-sc-off"><?=$off?>% OFF</span>
          </div>
          <div class="lc-sc-pills">
            <?php foreach($specSummary as $s): ?><span class="lc-sc-pill"><?=htmlspecialchars($s)?></span><?php endforeach; ?>
          </div>
        </div>

        <!-- Footer -->
        <div class="lc-sc-footer">
          <button class="lc-sc-btn-primary" data-quickview-btn data-product-id="<?=htmlspecialchars($p['id'])?>">
            <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            Quick View
          </button>
          <button class="lc-sc-btn-icon wa" title="WhatsApp"
            onclick="window.open('https://wa.me/<?=$waNumber?>?text='+encodeURIComponent('Hi Niles & Sinai! Interested in <?=addslashes($p['title'])?>. Please share price & availability.'),'_blank')">
            <svg viewBox="0 0 24 24" style="fill:currentColor;stroke:none;width:15px;height:15px"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
          </button>
          <button class="lc-sc-btn-icon" title="Add to cart" data-cart-btn data-id="<?=htmlspecialchars($p['id'])?>">
            <svg viewBox="0 0 24 24"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </button>
        </div>

      </article>
      <?php endforeach; ?>

    </div><!-- /grid -->
  </main><!-- /main -->
</div><!-- /layout -->

<!-- ═══ QUICK VIEW DRAWER ═══ -->
<div class="lc-qv-overlay" id="lcQvOverlay" aria-hidden="true"></div>
<aside class="lc-qv-drawer" id="lcQvDrawer" role="dialog" aria-modal="true" aria-label="Quick view">
  <div class="lc-qv-head">
    <h2 id="lcQvHeadTitle">Quick View</h2>
    <button class="lc-qv-close" id="lcQvClose" aria-label="Close">
      <svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="lc-qv-body">
    <div class="lc-qv-inner" id="lcQvInner"><!-- filled by JS --></div>
  </div>
  <div class="lc-qv-footer" id="lcQvFooter"><!-- filled by JS --></div>
</aside>

<!-- ═══ COMPARE TRAY ═══ -->
<div class="lc-cmp-tray" id="lcCmpTray" aria-label="Comparison tray" aria-live="polite">
  <span class="lc-cmp-tray-label">Comparing</span>
  <div class="lc-cmp-slots" id="lcCmpSlots">
    <div class="lc-cmp-slot" data-slot="0"><span class="lc-cmp-slot-empty">Select a product</span></div>
    <div class="lc-cmp-slot" data-slot="1"><span class="lc-cmp-slot-empty">Select a product</span></div>
  </div>
  <div class="lc-cmp-tray-actions">
    <button class="lc-cmp-go-btn" id="lcCmpGoBtn" disabled>
      <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>Compare Now
    </button>
    <button class="lc-cmp-clear-btn" id="lcCmpClearBtn">Clear All</button>
  </div>
</div>

<!-- ═══ COMPARE MODAL ═══ -->
<div class="lc-cmp-overlay" id="lcCmpOverlay" aria-hidden="true"></div>
<div class="lc-cmp-modal"   id="lcCmpModal" role="dialog" aria-modal="true" aria-label="Product comparison">
  <div class="lc-cmp-modal-head">
    <h2>Side-by-Side Comparison</h2>
    <button class="lc-cmp-modal-close" id="lcCmpModalClose" aria-label="Close">
      <svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="lc-cmp-modal-body" id="lcCmpModalBody"></div>
</div>

</div><!-- /store-page -->

<script>
(function(){
'use strict';
const $ = id => document.getElementById(id);
const fmt = n => '₹' + Number(n).toLocaleString('en-IN');
const WA  = '917470726731';

/* ══ SIDEBAR TOGGLE ══ */
const sidebar   = $('lcSidebar');
const toggleBtn = $('lcSidebarToggle');
let sidebarOpen = false;
function setSidebar(open) {
  sidebarOpen = open;
  if(window.innerWidth > 900) {
    sidebar.classList.toggle('is-collapsed', !open);
    sidebar.classList.remove('is-open');
  } else {
    sidebar.classList.remove('is-collapsed');
    sidebar.classList.toggle('is-open', open);
  }
}
if(toggleBtn) toggleBtn.addEventListener('click', () => setSidebar(!sidebarOpen));
// start open on desktop
if(window.innerWidth > 900) setSidebar(true);

/* ══ FILTER ACCORDION ══ */
document.querySelectorAll('.lc-filter-toggle').forEach(btn => {
  btn.addEventListener('click', () => {
    const grp = btn.closest('.lc-filter-group');
    grp.classList.toggle('is-open');
    btn.setAttribute('aria-expanded', grp.classList.contains('is-open'));
  });
});

/* ══ PRICE SLIDER ══ */
const slider  = $('lcPriceSlider');
const priceVal= $('lcPriceVal');
const priceMax= $('lcPriceMax');
if(slider) {
  slider.addEventListener('input', () => {
    priceVal.textContent = '₹' + Number(slider.value).toLocaleString('en-IN');
    priceMax.value = slider.value;
  });
  priceMax.addEventListener('input', () => { slider.value = priceMax.value; priceVal.textContent = '₹' + Number(priceMax.value).toLocaleString('en-IN'); });
}

/* ══ SORT ══ */
document.querySelectorAll('.lc-sort-opt').forEach(opt => {
  opt.addEventListener('click', () => {
    document.querySelectorAll('.lc-sort-opt').forEach(o => o.classList.remove('is-active'));
    opt.classList.add('is-active');
  });
});

/* ══ CLEAR FILTERS ══ */
const clearBtn = $('lcSbClear');
if(clearBtn) clearBtn.addEventListener('click', () => {
  document.querySelectorAll('.lc-filter-opt input[type=checkbox]').forEach(c => c.checked=false);
  $('lcActiveFilters').innerHTML = '';
  if(slider){ slider.value=50000; priceVal.textContent='₹50,000'; priceMax.value=50000; }
});

/* ══ ACTIVE FILTER CHIPS ══ */
document.querySelectorAll('.lc-filter-opt input').forEach(cb => {
  cb.addEventListener('change', updateChips);
});
function updateChips() {
  const wrap = $('lcActiveFilters');
  wrap.innerHTML='';
  document.querySelectorAll('.lc-filter-opt input:checked').forEach(cb => {
    const chip = document.createElement('span');
    chip.className='lc-filter-chip';
    chip.innerHTML=`${cb.value}<button aria-label="Remove filter"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>`;
    chip.querySelector('button').addEventListener('click',()=>{ cb.checked=false; updateChips(); });
    wrap.appendChild(chip);
  });
}

/* ══ GRID / LIST VIEW ══ */
const grid = $('lcProductsGrid');
document.querySelectorAll('.lc-grid-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.lc-grid-btn').forEach(b=>b.classList.remove('is-active'));
    btn.classList.add('is-active');
    grid.classList.toggle('is-list', btn.dataset.view==='list');
  });
});

/* ══ IMAGE HOVER CYCLE (cards) ══ */
document.querySelectorAll('.lc-sc').forEach(card => {
  const imgs  = card.querySelectorAll('.lc-sc-img');
  const dots  = card.querySelectorAll('.lc-sc-img-dot');
  let cur=0, timer=null;
  function show(i){ imgs[cur].classList.replace('is-active','is-hidden'); dots[cur]&&dots[cur].classList.remove('is-active'); cur=(i+imgs.length)%imgs.length; imgs[cur].classList.replace('is-hidden','is-active'); dots[cur]&&dots[cur].classList.add('is-active'); }
  const wrap=card.querySelector('[data-img-wrap]');
  if(!wrap)return;
  wrap.addEventListener('mouseenter',()=>{ if(imgs.length<2)return; timer=setInterval(()=>show(cur+1),1200); });
  wrap.addEventListener('mouseleave',()=>{ clearInterval(timer); show(0); });
});

/* ══ QUICK VIEW ══ */
const qvOverlay = $('lcQvOverlay');
const qvDrawer  = $('lcQvDrawer');
const qvClose   = $('lcQvClose');
const qvInner   = $('lcQvInner');
const qvFooter  = $('lcQvFooter');
const qvHead    = $('lcQvHeadTitle');

function getCard(id){ return document.querySelector(`.lc-sc[data-id="${id}"]`); }
function pd(id){
  const c=getCard(id); if(!c) return null;
  return {
    id:c.dataset.id, title:c.dataset.title, subtitle:c.dataset.subtitle,
    bestFor:c.dataset.bestFor, price:+c.dataset.price, mrp:+c.dataset.mrp,
    off:+c.dataset.off, emi:+c.dataset.emi, stock:+c.dataset.stock,
    badge:c.dataset.badge, specs:JSON.parse(c.dataset.specs||'[]'),
    caratOpts:JSON.parse(c.dataset.caratOpts||'[]'), purityOpts:JSON.parse(c.dataset.purityOpts||'[]'),
    warrantyOpts:JSON.parse(c.dataset.warrantyOpts||'[]'), sizeOpts:JSON.parse(c.dataset.sizeOpts||'[]'),
    images:JSON.parse(c.dataset.images||'[]'),
  };
}

function openQv(id){
  const p=pd(id); if(!p)return;
  qvHead.textContent = p.title;
  // Build inner
  qvInner.innerHTML=`
  <div class="lc-qv-grid">
    <!-- Images -->
    <div class="lc-qv-img-panel">
      <div class="lc-qv-img-main" id="qvImgMain">
        ${p.images.map((img,i)=>`<img class="lc-qv-img ${i===0?'is-active':'is-hidden'}" src="${img}" alt="${p.title} view ${i+1}">`).join('')}
        <div class="lc-qv-img-scan"></div>
      </div>
      <div class="lc-qv-thumbs" id="qvThumbs">
        ${p.images.map((img,i)=>`<div class="lc-qv-thumb ${i===0?'is-active':''}" data-ti="${i}"><img src="${img}" alt="thumb ${i+1}"></div>`).join('')}
      </div>
    </div>
    <!-- Info -->
    <div class="lc-qv-info-panel">
      <div class="lc-qv-badge-row">
        <span class="lc-qv-badge dark">${p.badge}</span>
        <span class="lc-qv-badge green">COD ✓</span>
        <span class="lc-qv-badge" style="background:rgba(59,130,246,.1);color:#2563eb;border:1px solid rgba(59,130,246,.25);">Certified</span>
      </div>
      <div class="lc-qv-title">${p.title}</div>
      <div class="lc-qv-subtitle">${p.subtitle}</div>
      <div class="lc-qv-price-block">
        <div class="lc-qv-price" id="qvPrice">${fmt(p.price)}</div>
        <div class="lc-qv-price-row2">
          <span class="lc-qv-mrp">${fmt(p.mrp)}</span>
          <span class="lc-qv-off">${p.off}% OFF</span>
        </div>
        <div class="lc-qv-emi">No Cost EMI from <strong>${fmt(p.emi)}/mo</strong> · Tax included</div>
      </div>
      <!-- Variant selects -->
      <div class="lc-qv-variants">
        <div>
          <span class="lc-qv-var-label">Carat Weight</span>
          <div class="lc-qv-var-opts" data-vgroup="carat">
            ${p.caratOpts.map((r,i)=>`<button class="lc-qv-var-btn ${i===0?'is-active':''}" data-v="${r}">${r} Ct</button>`).join('')}
          </div>
        </div>
        <div>
          <span class="lc-qv-var-label">Metal Purity</span>
          <div class="lc-qv-var-opts" data-vgroup="purity">
            ${p.purityOpts.map((s,i)=>`<button class="lc-qv-var-btn ${i===0?'is-active':''}" data-v="${s}">${s}</button>`).join('')}
          </div>
        </div>
        <div>
          <span class="lc-qv-var-label">Warranty</span>
          <div class="lc-qv-var-opts" data-vgroup="warranty">
            ${p.warrantyOpts.map((w,i)=>`<button class="lc-qv-var-btn ${i===1?'is-active':''}" data-v="${w}">${w}</button>`).join('')}
          </div>
        </div>
        <div>
          <span class="lc-qv-var-label">Size</span>
          <div class="lc-qv-var-opts" data-vgroup="size">
            ${p.sizeOpts.map((q,i)=>`<button class="lc-qv-var-btn ${i===p.sizeOpts.length-1?'is-active':''}" data-v="${q}">${q}</button>`).join('')}
          </div>
        </div>
      </div>
      <!-- Qty -->
      <div class="lc-qv-qty-row">
        <span class="lc-qv-qty-label">Quantity</span>
        <div class="lc-qv-qty">
          <button class="lc-qv-qty-btn" id="qvQtyMinus">−</button>
          <span class="lc-qv-qty-val" id="qvQtyVal">1</span>
          <button class="lc-qv-qty-btn" id="qvQtyPlus">+</button>
        </div>
      </div>
      <!-- Specs -->
      <div class="lc-qv-specs">
        <div class="lc-qv-specs-title">Key Specifications</div>
        <div class="lc-qv-spec-list">
          ${p.specs.map(s=>`<div class="lc-qv-spec-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>${s}</div>`).join('')}
        </div>
      </div>
    </div>
  </div>`;

  // Footer
  qvFooter.innerHTML=`
  <div class="lc-qv-footer-row">
    <button class="lc-qv-btn-cart" id="qvAddCart">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
      Add to Cart
    </button>
    <button class="lc-qv-btn-wa" id="qvWaEnquire">
      <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
      Enquire Now
    </button>
  </div>
  <div class="lc-qv-trust-row">
    <span class="lc-qv-trust-item"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>1-Year Warranty</span>
    <span class="lc-qv-trust-item"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Certified Authentic</span>
    <span class="lc-qv-trust-item"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>COD Available</span>
    <span class="lc-qv-trust-item"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>Free Delivery</span>
  </div>`;

  // Thumb clicks
  qvInner.querySelectorAll('.lc-qv-thumb').forEach(th => {
    th.addEventListener('click', ()=>{
      const ti=+th.dataset.ti;
      qvInner.querySelectorAll('.lc-qv-thumb').forEach(t=>t.classList.remove('is-active'));
      th.classList.add('is-active');
      qvInner.querySelectorAll('.lc-qv-img').forEach((img,i)=>{
        img.classList.toggle('is-active',i===ti);
        img.classList.toggle('is-hidden',i!==ti);
      });
    });
  });

  // Variant buttons
  qvInner.querySelectorAll('.lc-qv-var-opts').forEach(grp=>{
    grp.querySelectorAll('.lc-qv-var-btn').forEach(btn=>{
      btn.addEventListener('click',()=>{
        grp.querySelectorAll('.lc-qv-var-btn').forEach(b=>b.classList.remove('is-active'));
        btn.classList.add('is-active');
      });
    });
  });

  // Qty
  let qty=1;
  const qtyVal=$('qvQtyVal');
  $('qvQtyMinus').addEventListener('click',()=>{ if(qty>1){qty--;qtyVal.textContent=qty;} });
  $('qvQtyPlus').addEventListener('click',()=>{ if(qty<p.stock){qty++;qtyVal.textContent=qty;} });

  // WA enquire
  $('qvWaEnquire').addEventListener('click',()=>{
    const carat=qvInner.querySelector('[data-vgroup="carat"] .is-active')?.dataset.v||'1';
    const purity=qvInner.querySelector('[data-vgroup="purity"] .is-active')?.dataset.v||'18K';
    const warranty=qvInner.querySelector('[data-vgroup="warranty"] .is-active')?.dataset.v||'1 Year';
    const size=qvInner.querySelector('[data-vgroup="size"] .is-active')?.dataset.v||'Standard';
    const msg=`Hi Niles & Sinai! I want to enquire about:\n*${p.title}*\nCarat: ${carat}Ct | Purity: ${purity} | Warranty: ${warranty} | Size: ${size}\nQty: ${qty}\nPlease confirm availability and pricing.`;
    window.open(`https://wa.me/${WA}?text=${encodeURIComponent(msg)}`,'_blank');
  });

  $('qvAddCart').addEventListener('click',()=>{
    const btn=$('qvAddCart');
    btn.textContent='✓ Added to Cart';
    btn.style.background='#22c55e'; btn.style.color='#fff';
    setTimeout(()=>{ btn.innerHTML='<svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="width:15px;height:15px;stroke:currentColor"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>Add to Cart'; btn.style.background=''; btn.style.color=''; }, 2000);
  });

  qvOverlay.classList.add('is-open'); qvDrawer.classList.add('is-open');
  qvOverlay.setAttribute('aria-hidden',false); document.body.style.overflow='hidden';
}

function closeQv(){
  qvOverlay.classList.remove('is-open'); qvDrawer.classList.remove('is-open');
  qvOverlay.setAttribute('aria-hidden',true); document.body.style.overflow='';
}

if(qvClose)   qvClose.addEventListener('click', closeQv);
if(qvOverlay) qvOverlay.addEventListener('click', closeQv);

document.addEventListener('click', e=>{
  const btn=e.target.closest('[data-quickview-btn]');
  if(btn){ e.preventDefault(); openQv(btn.dataset.productId); }
});

/* ══ COMPARISON ══ */
let cmpList=[];
const cmpTray   =$('lcCmpTray');
const cmpSlots  =$('lcCmpSlots');
const cmpGoBtn  =$('lcCmpGoBtn');
const cmpClear  =$('lcCmpClearBtn');
const cmpOverlay=$('lcCmpOverlay');
const cmpModal  =$('lcCmpModal');
const cmpBody   =$('lcCmpModalBody');
const cmpClose  =$('lcCmpModalClose');

function renderTray(){
  cmpSlots.querySelectorAll('.lc-cmp-slot').forEach((el,i)=>{
    const pid=cmpList[i]; el.innerHTML='';
    if(pid){ const p=pd(pid); el.classList.add('is-filled'); el.innerHTML=`<span class="lc-cmp-slot-name">${p?p.title:pid}</span><button class="lc-cmp-slot-remove" data-remove="${pid}" aria-label="Remove"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>`; }
    else { el.classList.remove('is-filled'); el.innerHTML=`<span class="lc-cmp-slot-empty">Select a product</span>`; }
  });
  cmpList.length>0?cmpTray.classList.add('is-open'):cmpTray.classList.remove('is-open');
  cmpGoBtn.disabled=cmpList.length<2; cmpGoBtn.style.opacity=cmpList.length<2?'.45':'1';
  document.querySelectorAll('[data-compare-btn]').forEach(btn=>{
    const inList=cmpList.includes(btn.dataset.productId);
    btn.classList.toggle('is-added',inList);
  });
}
function addToCmp(id){ if(cmpList.includes(id)){cmpList=cmpList.filter(x=>x!==id);}else{if(cmpList.length>=2)cmpList.shift();cmpList.push(id);} renderTray(); }

document.addEventListener('click',e=>{
  const cb=e.target.closest('[data-compare-btn]'); if(cb){e.preventDefault();addToCmp(cb.dataset.productId);return;}
  const rm=e.target.closest('[data-remove]'); if(rm){addToCmp(rm.dataset.remove);return;}
});
if(cmpClear) cmpClear.addEventListener('click',()=>{cmpList=[];renderTray();});

function openCmpModal(){
  if(cmpList.length<2)return;
  const [a,b]=cmpList.map(pd).filter(Boolean);
  if(!a||!b)return;
  const specs=['Certification','Clarity/Colour','Metal Purity','Setting','Finish'];
  const wIdx=a.price<=b.price?0:1;
  function iW(ai,bi){return(ai||'').length>=(bi||'').length;}
  cmpBody.innerHTML=`
  <div class="lc-cmp-best-row">
    ${[a,b].map(p=>`<div class="lc-cmp-best-card"><div class="lc-cmp-best-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div><div><div class="lc-cmp-best-label">Best For</div><div class="lc-cmp-best-value">${p.bestFor}</div></div></div>`).join('')}
  </div>
  <table class="lc-cmp-table">
    <thead><tr><th></th><th class="is-product">${a.title}</th><th class="is-product">${b.title}</th></tr></thead>
    <tbody>
      <tr><td class="row-label">Model</td><td>${a.subtitle}</td><td>${b.subtitle}</td></tr>
      <tr><td class="row-label">Price</td>
        <td class="${wIdx===0?'is-winner':''}"><div class="price-sale">${fmt(a.price)}</div><div class="price-mrp">${fmt(a.mrp)}</div><span class="price-off">${a.off}% OFF</span></td>
        <td class="${wIdx===1?'is-winner':''}"><div class="price-sale">${fmt(b.price)}</div><div class="price-mrp">${fmt(b.mrp)}</div><span class="price-off">${b.off}% OFF</span></td>
      </tr>
      ${specs.map((lbl,i)=>{const av=a.specs[i]||'—',bv=b.specs[i]||'—',aw=iW(av,bv);return`<tr><td class="row-label">${lbl}</td><td class="${aw?'is-winner':''}">${av}</td><td class="${!aw?'is-winner':''}">${bv}</td></tr>`;}).join('')}
      <tr><td class="row-label">EMI From</td><td>${fmt(a.emi)}/mo</td><td>${fmt(b.emi)}/mo</td></tr>
      <tr><td class="row-label">Stock</td><td>${a.stock} units</td><td>${b.stock} units</td></tr>
    </tbody>
  </table>
  <div class="lc-cmp-modal-cta">
    ${[a,b].map(p=>`<a href="/product?id=${p.id}"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>Buy ${p.title.split(' ').slice(0,2).join(' ')}</a>`).join('')}
  </div>`;
  cmpOverlay.classList.add('is-open'); cmpModal.classList.add('is-open');
  cmpOverlay.setAttribute('aria-hidden',false); document.body.style.overflow='hidden';
}
function closeCmp(){ cmpOverlay.classList.remove('is-open'); cmpModal.classList.remove('is-open'); cmpOverlay.setAttribute('aria-hidden',true); document.body.style.overflow=''; }
if(cmpGoBtn)  cmpGoBtn.addEventListener('click',openCmpModal);
if(cmpClose)  cmpClose.addEventListener('click',closeCmp);
if(cmpOverlay)cmpOverlay.addEventListener('click',closeCmp);

/* ══ ESC KEY ══ */
document.addEventListener('keydown',e=>{
  if(e.key==='Escape'){ closeQv(); closeCmp(); if(window.innerWidth<=900)setSidebar(false); }
});

/* ══ LUCIDE ══ */
if(typeof lucide!=='undefined') lucide.createIcons();

renderTray();
})();
</script>
</body>
</html>