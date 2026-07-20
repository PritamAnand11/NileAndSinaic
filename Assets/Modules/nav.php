<?php
$suggestedProducts = [
    ['name'=>'22K Gold Diamond Floral Ring','price'=>'₹24,999','mrp'=>'₹34,999'],
    ['name'=>'Rose Gold Sapphire Flower Ring','price'=>'₹32,499','mrp'=>'₹45,999'],
    ['name'=>'Traditional Gold Pearl Choker Necklace','price'=>'₹89,999','mrp'=>'₹1,19,999'],
    ['name'=>'Designer Diamond Gold Necklace','price'=>'₹1,49,999','mrp'=>'₹1,99,999'],
    ['name'=>'Luxury White Gold Diamond Necklace','price'=>'₹2,29,999','mrp'=>'₹2,89,999'],
];
?>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/lucide@latest"></script>

<style>
/* ═══════════════════════════════════════════════════════════
   ROOT TOKENS
═══════════════════════════════════════════════════════════ */
:root {
    /* Color + font tokens intentionally NOT redeclared here —
       they inherit from base.css's :root (--lap-bg-pure, --lap-text-dark,
       --lap-text-muted, --lap-border-color, --lap-font-main/-heading)
       so this file can't drift from the global luxury theme again. */
    --lap-neon:         var(--lap-neon-accent, #0F6B5B);
    --lap-neon-dim:     rgba(15,107,91,.18);
    --lap-font:         var(--lap-font-main, 'Manrope', sans-serif);
    --ease:             cubic-bezier(0.4,0,0.2,1);
    --ease-bounce:      cubic-bezier(0.68,-0.55,0.265,1.55);
    --ease-out:         cubic-bezier(0,0,0.2,1);
    --glow:             var(--lap-glow-neon, 0 0 25px rgba(200,167,90,.18));
    --shadow:           var(--lap-shadow-soft, 0 12px 40px rgba(0,0,0,.08));
    --nav-h:            76px;
    --mob-top-h:        62px;
    --dock-h:           68px;
    --fab-sz:           58px;
    --drawer-w:         460px;
    --kb-inset:         0px;
}

*,*::before,*::after { box-sizing:border-box; margin:0; padding:0; }

/* ═══════════════════════════════════════════════════════════
   DESKTOP NAV — BASE
═══════════════════════════════════════════════════════════ */
.lc-nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    height: var(--nav-h);
    z-index: 8000;                    /* lower than dropdowns / drawers */
    background: #fff;
    border-bottom: 1px solid var(--lap-border);
    font-family: var(--lap-font);
    transition: top .5s var(--ease), left .5s var(--ease), right .5s var(--ease),
                border-radius .5s var(--ease), box-shadow .5s var(--ease),
                height .5s var(--ease), background .5s var(--ease);
    overflow: visible;                /* allow dropdowns to escape */
}

/* Canvas for wire animation – inside nav, clipped */
.lc-nav-canvas-wrap {
    position: absolute; inset: 0;
    overflow: hidden; pointer-events: none;
}
#lc-wire-canvas { position: absolute; inset: 0; opacity: .5; }

/* Scrolled floating */
.lc-nav.is-scrolled {
    top: 10px; left: 20px; right: 20px;
    height: 68px;
    border-radius: 8px;
    border: 1px solid var(--lap-border);
    box-shadow: 0 8px 40px rgba(0,0,0,.10), 0 0 0 1px var(--lap-neon-dim);
    background: rgba(255,255,255,.96);
    backdrop-filter: blur(14px) saturate(1.4);
}

.lc-nav-inner {
    position: relative; z-index: 1;
    display: flex; align-items: center;
    justify-content: space-between;
    height: 100%; padding: 0 36px; gap: 20px;
}

/* ── LOGO ── */
.lc-logo {
    display: flex; flex-direction: column;
    line-height: 1.1; text-decoration: none; flex-shrink: 0;
    transition: transform .25s var(--ease-bounce);
}
.lc-logo:hover { transform: scale(1.04) translateY(-1px); }
.lc-logo-name {
    font-size: 1.55rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: -0.5px;
    color: var(--lap-text-dark);
}
.lc-logo-name em {
    font-style: normal; color: var(--lap-neon);
    -webkit-text-stroke: .6px #0B5245;
}
.lc-logo-desc {
    font-size: .58rem; font-weight: 500;
    letter-spacing: 3px; text-transform: uppercase;
    color: var(--lap-text-muted); white-space: nowrap;
}

/* ── NAV LINKS & MAGNETIC UNDERLINE ── */
.lc-nav-links {
    display: flex; align-items: center;
    gap: 0; list-style: none; position: relative; height: 100%;
}

/* The "magic ink" underline bar */
.lc-nav-ink {
    position: absolute;
    bottom: 14px; left: 0;
    height: 2.5px; width: 60px;
    background: var(--lap-text-dark);
    border-radius: 2px;
    transition: left .28s var(--ease), width .28s var(--ease), opacity .2s;
    pointer-events: none;
    opacity: 0;
}

.lc-nav-links li { position: relative; height: 100%; display: flex; align-items: center; }

.lc-nav-link, .lc-dd-btn {
    display: flex; align-items: center; gap: 5px;
    padding: 8px 20px;
    font-family: var(--lap-font);
    font-size: .78rem; font-weight: 700;
    letter-spacing: 1.8px; text-transform: uppercase;
    color: var(--lap-text-dark);
    text-decoration: none; background: none; border: none;
    cursor: pointer; white-space: nowrap;
    transition: color .2s;
    position: relative;
}
.lc-nav-link:hover, .lc-dd-btn:hover { color: var(--lap-text-dark); }

/* Chevron */
.lc-chevron {
    width: 11px; height: 11px;
    transition: transform .3s var(--ease);
    flex-shrink: 0;
}
.lc-dd-btn[aria-expanded="true"] .lc-chevron { transform: rotate(180deg); }

/* ── DROPDOWN — FIX: z-index above nav, not clipped ── */
.lc-dropdown-wrap { position: relative; height: 100%; display: flex; align-items: center; }

.lc-dropdown {
    position: absolute;
    top: calc(100% + 20px);        /* below the nav-link row */
    left: 50%;
    transform: translateX(-50%) translateY(-6px) scale(.97);
    min-width: 230px;
    background: #fff;
    border: 1.5px solid var(--lap-text-dark);
    border-radius: 6px;
    box-shadow: 6px 6px 0 var(--lap-neon), 0 20px 50px rgba(0,0,0,.14);
    padding: 8px;
    list-style: none;
    z-index: 9900;                  /* way above everything */
    opacity: 0; pointer-events: none;
    transition: opacity .22s var(--ease), transform .22s var(--ease-out);
}
/* Pointer triangle */
.lc-dropdown::before {
    content: '';
    position: absolute;
    top: -8px; left: 50%;
    transform: translateX(-50%) rotate(45deg);
    width: 13px; height: 13px;
    background: #fff;
    border-top: 1.5px solid var(--lap-text-dark);
    border-left: 1.5px solid var(--lap-text-dark);
}
.lc-dropdown.is-open {
    opacity: 1; pointer-events: all;
    transform: translateX(-50%) translateY(0) scale(1);
}

.lc-dropdown li a {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 14px; border-radius: 4px;
    font-family: var(--lap-font);
    font-size: .76rem; font-weight: 600;
    letter-spacing: 1.2px; text-transform: uppercase;
    color: var(--lap-text-dark); text-decoration: none;
    transition: background .18s, color .18s, padding-left .18s;
}
.lc-dropdown li a .lucide { width: 15px; height: 15px; color: var(--lap-text-muted); transition: color .18s; }
.lc-dropdown li a:hover {
    background: var(--lap-text-dark); color: var(--lap-neon);
    padding-left: 20px;
}
.lc-dropdown li a:hover .lucide { color: var(--lap-neon); }

/* ── RIGHT ACTIONS ── */
.lc-nav-actions { display: flex; align-items: center; gap: 8px; flex-shrink: 0; }

.lc-icon-btn {
    display: flex; align-items: center; justify-content: center;
    width: 44px; height: 44px;
    border: 1.5px solid var(--lap-border);
    border-radius: 5px; background: #fff; cursor: pointer;
    position: relative; color: var(--lap-text-dark);
    transition: border-color .2s, background .2s, color .2s,
                box-shadow .2s, transform .15s var(--ease-bounce);
}
.lc-icon-btn .lucide { width: 18px; height: 18px; }
.lc-icon-btn:hover {
    border-color: var(--lap-text-dark); background: var(--lap-text-dark);
    color: var(--lap-neon);
    box-shadow: 3px 3px 0 var(--lap-neon);
    transform: translateY(-2px);
}
.lc-icon-btn:active { transform: scale(.93) translateY(0); }

/* Cart badge with pulse */
.lc-badge {
    position: absolute; top: -7px; right: -7px;
    min-width: 19px; height: 19px;
    background: var(--lap-neon); color: var(--lap-text-dark);
    font-family: var(--lap-font); font-size: .58rem; font-weight: 800;
    border-radius: 99px; display: flex; align-items: center; justify-content: center;
    border: 2px solid #fff; padding: 0 3px;
    animation: badgePop .4s var(--ease-bounce);
}
@keyframes badgePop {
    0% { transform: scale(0); }
    70% { transform: scale(1.3); }
    100% { transform: scale(1); }
}

/* ═══════════════════════════════════════════════════════════
   DESKTOP SEARCH POPOVER
═══════════════════════════════════════════════════════════ */
.lc-search-pop {
    position: fixed; z-index: 9800;
    width: 440px;
    background: #fff;
    border: 1.5px solid var(--lap-text-dark);
    border-radius: 8px;
    box-shadow: 6px 6px 0 var(--lap-text-dark), 0 20px 60px rgba(0,0,0,.15);
    overflow: hidden;
    opacity: 0; pointer-events: none;
    transform: translateY(-10px) scale(.98);
    transition: opacity .28s var(--ease), transform .28s var(--ease-out);
}
/* Arrow up toward icon */
.lc-search-pop::before {
    content: ''; position: absolute;
    top: -8px; right: 22px;
    width: 13px; height: 13px;
    background: #fff;
    border-top: 1.5px solid var(--lap-text-dark);
    border-left: 1.5px solid var(--lap-text-dark);
    transform: rotate(45deg);
}
.lc-search-pop.is-open {
    opacity: 1; pointer-events: all;
    transform: translateY(0) scale(1);
}
.lc-sp-input-row {
    display: flex; align-items: center; gap: 10px;
    padding: 14px 18px;
    border-bottom: 1.5px solid var(--lap-border);
}
.lc-sp-input-row .lucide { width: 18px; height: 18px; color: var(--lap-text-muted); flex-shrink: 0; }
.lc-sp-input-row input {
    flex: 1; border: none; outline: none;
    font-family: var(--lap-font); font-size: .88rem; font-weight: 500;
    letter-spacing: .4px; color: var(--lap-text-dark); background: transparent;
}
.lc-sp-input-row input::placeholder { color: var(--lap-text-muted); }

.lc-sp-label {
    padding: 10px 18px 5px;
    font-size: .58rem; font-weight: 800;
    letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--lap-text-muted);
}
.lc-sp-results { max-height: 360px; overflow-y: auto; }

.lc-sp-item {
    display: flex; align-items: center; gap: 12px;
    padding: 10px 18px; cursor: pointer;
    text-decoration: none; color: inherit;
    transition: background .15s;
    border-left: 3px solid transparent;
}
.lc-sp-item:hover {
    background: #FBF9F5;
    border-left-color: var(--lap-neon);
}
.lc-sp-icon {
    width: 40px; height: 40px; border-radius: 5px;
    background: #F1ECE2; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    overflow: hidden;
    transition: transform .2s var(--ease-bounce);
}
.lc-sp-item:hover .lc-sp-icon { transform: scale(1.1) rotate(-3deg); }
.lc-sp-icon .lucide { width: 17px; height: 17px; color: var(--lap-text-muted); }
.lc-sp-info { flex: 1; min-width: 0; }
.lc-sp-name {
    font-size: .77rem; font-weight: 600;
    white-space: nowrap; overflow: hidden; text-overflow: ellipsis; letter-spacing: .3px;
}
.lc-sp-price { font-size: .68rem; color: var(--lap-text-muted); margin-top: 2px; }
.lc-sp-price strong { color: var(--lap-text-dark); }

/* ═══════════════════════════════════════════════════════════
   DESKTOP CART DRAWER — SPLIT PANEL
═══════════════════════════════════════════════════════════ */
.lc-overlay {
    position: fixed; inset: 0;
    background: rgba(31,26,23,.5);
    z-index: 9500;
    opacity: 0; pointer-events: none;
    transition: opacity .35s var(--ease);
    backdrop-filter: blur(3px);
}
.lc-overlay.is-open { opacity: 1; pointer-events: all; }

.lc-cart-drawer {
    position: fixed; top: 0; right: 0; bottom: 0;
    width: min(900px, 95vw);
    background: #fff; z-index: 9600;
    display: flex;
    transform: translateX(100%);
    transition: transform .42s var(--ease);
    box-shadow: -16px 0 60px rgba(0,0,0,.12);
    overflow: hidden;
}
.lc-cart-drawer.is-open { transform: translateX(0); }

/* LEFT — suggestions */
.lc-cart-left {
    width: 42%; background: #FBF9F5;
    border-right: 1.5px solid var(--lap-border);
    display: flex; flex-direction: column; overflow: hidden;
    position: absolute; top: 0; bottom: 0; left: 0;
    z-index: 1;
    transform: translateX(100%);
    transition: transform .55s var(--ease);
}
.lc-cart-drawer.is-open .lc-cart-left {
    transform: translateX(0);
    transition-delay: 1.5s;
}
.lc-cart-left-canvas {
    position: absolute; inset: 0;
    pointer-events: none;
    opacity: .45;
    animation: cartWirePulse 3.6s ease-in-out infinite;
}
#lc-cart-wire-canvas { position: absolute; inset: 0; }
.lc-cart-left > *:not(.lc-cart-left-canvas) { position: relative; z-index: 1; }
.lc-cart-left-head {
    padding: 28px 24px 16px;
    flex-shrink: 0;
}
.lc-cart-left-head h3 {
    font-size: 1.1rem; font-weight: 600;
    text-transform: none; letter-spacing: -.3px; line-height: 1.3;
}
.lc-cart-left-body { flex: 1; overflow-y: auto; padding: 0 16px 20px; }
@keyframes cartWirePulse {
    0%,100% { opacity: .35; }
    50% { opacity: .9; }
}

.lc-sugg-card {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 13px;
    background: #fff;
    border: 1.5px solid var(--lap-border);
    border-radius: 6px; margin-bottom: 10px;
    cursor: pointer; text-decoration: none; color: inherit;
    transition: border-color .2s, box-shadow .2s, transform .2s var(--ease-bounce);
    position: relative; overflow: hidden;
}
.lc-sugg-card::after {
    content: '';
    position: absolute; left: 0; top: 0; bottom: 0; width: 3px;
    background: var(--lap-neon);
    transform: scaleY(0); transform-origin: bottom;
    transition: transform .2s var(--ease);
}
.lc-sugg-card:hover {
    border-color: var(--lap-text-dark);
    box-shadow: 4px 4px 0 var(--lap-neon);
    transform: translateX(3px);
}
.lc-sugg-card:hover::after { transform: scaleY(1); }
.lc-sugg-img {
    width: 66px; height: 66px; border-radius: 5px;
    background: #EFE8DB; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    overflow: hidden;
    transition: transform .3s var(--ease-bounce);
}
.lc-sugg-card:hover .lc-sugg-img { transform: scale(1.08) rotate(-2deg); }
.lc-sugg-img .lucide { width: 22px; height: 22px; color: #B3A895; }
.lc-sugg-info { flex: 1; min-width: 0; }
.lc-sugg-name {
    font-size: .73rem; font-weight: 600; line-height: 1.4;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;
    overflow: hidden;
}
.lc-sugg-prices { display: flex; align-items: center; gap: 8px; margin-top: 6px; }
.lc-sugg-sale { font-size: .82rem; font-weight: 800; }
.lc-sugg-old { font-size: .68rem; color: var(--lap-text-muted); text-decoration: line-through; }
.lc-sugg-add {
    margin-top: 8px;
    display: inline-flex; align-items: center; gap: 5px;
    padding: 5px 12px; border: 1.5px solid var(--lap-text-dark);
    border-radius: 3px; font-family: var(--lap-font);
    font-size: .62rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;
    background: none; cursor: pointer;
    transition: background .15s, color .15s, box-shadow .15s;
}
.lc-sugg-add:hover { background: var(--lap-text-dark); color: var(--lap-neon); box-shadow: 2px 2px 0 var(--lap-neon); }

/* RIGHT — cart state */
.lc-cart-right {
    flex: 0 0 auto;
    width: 100%;
    margin-left: auto;
    display: flex; flex-direction: column;
    position: relative;
    z-index: 2;
    background: #fff;
    transition: width .55s var(--ease);
}
.lc-cart-drawer.is-open .lc-cart-right {
    width: 58%;
    transition-delay: 1.5s;
}
.lc-cart-right-head {
    display: flex; align-items: center; justify-content: space-between;
    padding: 24px 28px;
    border-bottom: 1.5px solid var(--lap-border); flex-shrink: 0;
}
.lc-cart-right-head h2 {
    font-size: 1.1rem; font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
}
.lc-close-btn {
    width: 38px; height: 38px;
    display: flex; align-items: center; justify-content: center;
    border: 1.5px solid var(--lap-border); border-radius: 5px; border-radius: 50px;
    background: none; cursor: pointer; color: var(--lap-text-dark);
    transition: all .2s;
}
.lc-close-btn:hover { background: var(--lap-text-dark); color: var(--lap-neon); border-color: var(--lap-text-dark); transform: rotate(90deg); }
.lc-close-btn .lucide { width: 16px; height: 16px; }

.lc-cart-empty {
    flex: 1; display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    padding: 40px; text-align: center; gap: 14px;
}
.lc-cart-empty-icon {
    width: 80px; height: 80px; border-radius: 50%;
    border: 2px dashed var(--lap-border);
    display: flex; align-items: center; justify-content: center;
    animation: emptyFloat 3s ease-in-out infinite;
}
.lc-cart-empty-icon .lucide { width: 36px; height: 36px; color: #C9BFAF; }
@keyframes emptyFloat {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}
.lc-cart-empty h3 { font-size: 1.25rem; font-weight: 700; letter-spacing: .5px; }
.lc-cart-empty p { font-size: .82rem; color: var(--lap-text-muted); max-width: 260px; line-height: 1.6; }
.lc-cart-cta {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 13px 32px;
    background: var(--lap-text-dark); color: var(--lap-neon);
    font-family: var(--lap-font); font-size: .78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    border: none; border-radius: 5px; cursor: pointer; text-decoration: none;
    transition: box-shadow .2s, transform .15s var(--ease-bounce);
}
.lc-cart-cta:hover { box-shadow: var(--glow); transform: translateY(-3px); }
.lc-cart-cta:active { transform: scale(.95); }

/* Real cart items list */
.lc-cart-items { flex: 1; display: flex; flex-direction: column; overflow: hidden; }
.lc-cart-items-scroll { flex: 1; overflow-y: auto; padding: 20px 28px; }
.lc-cart-row {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 14px 0; border-bottom: 1px solid var(--lap-border);
}
.lc-cart-row:first-child { padding-top: 0; }
.lc-cart-row-img {
    width: 60px; height: 60px; border-radius: 5px; flex-shrink: 0;
    background: #EFE8DB; display: flex; align-items: center; justify-content: center;
    overflow: hidden;
}
.lc-cart-row-img img { width: 100%; height: 100%; object-fit: cover; }
.lc-cart-row-img .lucide { width: 22px; height: 22px; color: #B3A895; }
.lc-cart-row-info { flex: 1; min-width: 0; }
.lc-cart-row-title {
    font-size: .78rem; font-weight: 600; line-height: 1.4;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
}
.lc-cart-row-price { font-size: .8rem; font-weight: 800; margin-top: 4px; }
.lc-cart-row-qty {
    display: flex; align-items: center; gap: 8px; margin-top: 8px;
}
.lc-cart-qty-btn {
    width: 22px; height: 22px; border-radius: 4px;
    border: 1.5px solid var(--lap-border); background: none; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    font-size: .8rem; font-weight: 700; color: var(--lap-text-dark);
    transition: border-color .15s, background .15s;
}
.lc-cart-qty-btn:hover { border-color: var(--lap-text-dark); background: var(--lap-bg-pure); }
.lc-cart-qty-val { font-size: .78rem; font-weight: 700; min-width: 16px; text-align: center; }
.lc-cart-row-remove {
    background: none; border: none; cursor: pointer; color: var(--lap-text-muted);
    flex-shrink: 0; padding: 4px; transition: color .15s;
}
.lc-cart-row-remove:hover { color: #C0392B; }
.lc-cart-row-remove .lucide { width: 15px; height: 15px; }
.lc-cart-summary {
    flex-shrink: 0; padding: 20px 28px; border-top: 1.5px solid var(--lap-border);
}
.lc-cart-subtotal-row {
    display: flex; align-items: center; justify-content: space-between;
    font-size: .85rem; font-weight: 700; margin-bottom: 14px;
}
.lc-cart-subtotal-row span:last-child { font-size: 1rem; font-weight: 800; }
.lc-cart-checkout-btn {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    width: 100%; padding: 14px; background: var(--lap-text-dark); color: var(--lap-neon);
    font-family: var(--lap-font); font-size: .78rem; font-weight: 800;
    letter-spacing: 2px; text-transform: uppercase;
    border: none; border-radius: 5px; cursor: pointer; text-decoration: none;
    transition: box-shadow .2s, transform .15s var(--ease-bounce);
}
.lc-cart-checkout-btn:hover { box-shadow: var(--glow); transform: translateY(-3px); }

/* ═══════════════════════════════════════════════════════════
   MOBILE — TOP BAR
═══════════════════════════════════════════════════════════ */
.lc-mob-top {
    display: none;
    position: fixed; top: 0; left: 0; right: 0;
    height: var(--mob-top-h);
    background: #fff;
    border-bottom: 1px solid var(--lap-border);
    z-index: 8000;
    align-items: center; justify-content: space-between;
    padding: 0 14px; gap: 8px;
    font-family: var(--lap-font);
    overflow: hidden;
}
.lc-mob-canvas-wrap { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
#lc-mob-wire-canvas { position: absolute; inset: 0; opacity: .4; }

.lc-mob-top-inner {
    position: relative; z-index: 1;
    display: flex; align-items: center; justify-content: space-between;
    width: 100%; gap: 8px;
}

.lc-mob-logo { text-decoration: none; }
.lc-mob-logo-name {
    font-size: 1.2rem; font-weight: 700;
    text-transform: uppercase; color: var(--lap-text-dark);
}
.lc-mob-logo-name em { font-style: normal; color: var(--lap-neon); -webkit-text-stroke: .5px #0B5245; }

.lc-mob-center {
    flex: 1; text-align: center; line-height: 1.2;
}
.lc-mob-center-label {
    display: block; font-size: .52rem; font-weight: 600;
    letter-spacing: 1.5px; text-transform: uppercase; color: var(--lap-text-muted);
}
.lc-mob-center-num {
    display: block; font-size: .72rem; font-weight: 800;
    color: var(--lap-text-dark); text-decoration: none;
    letter-spacing: .3px;
}

.lc-mob-actions { display: flex; gap: 6px; }

/* ═══════════════════════════════════════════════════════════
   MOBILE — BOTTOM DOCK
═══════════════════════════════════════════════════════════ */
.lc-dock {
    display: none;
    position: fixed; bottom: 0; left: 0; right: 0;
    height: var(--dock-h);
    z-index: 7990; font-family: var(--lap-font);
    isolation: isolate; /* keep dock layers ordered above SVG */
    overflow: hidden;
}
.lc-dock-canvas-wrap { position: absolute; inset: 0; pointer-events: none; z-index: 0; }
#lc-dock-wire-canvas { position: absolute; inset: 0; opacity: .35; }

/* SVG cutout shape */
.lc-dock-shape {
    position: absolute; inset: 0; width: 100%; height: 120% ;
    pointer-events: none;
    z-index: 1;
}
.lc-dock-shape path { stroke-linecap: round; stroke-linejoin: round; }

.lc-dock-items {
    position: relative; z-index: 2;
    display: flex; align-items: center; height: 100%; padding: 0;
}
.lc-dock-link {
    flex: 1; display: flex; flex-direction: column;
    align-items: center; justify-content: flex-end;
    padding-bottom: 10px; gap: 3px;
    font-family: var(--lap-font);
    font-size: .52rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;
    color: var(--lap-text-muted); text-decoration: none; background: none; border: none;
    cursor: pointer; transition: color .2s, transform .15s var(--ease-bounce);
}
.lc-dock-link .lucide { width: 20px; height: 20px; transition: transform .2s var(--ease-bounce); }
.lc-dock-link:hover { color: var(--lap-text-dark); transform: translateY(-2px); }
.lc-dock-link:hover .lucide { transform: scale(1.2); }
.lc-dock-link.active { color: var(--lap-text-dark); }
.lc-dock-link.active .lucide { stroke: var(--lap-text-dark); }

/* FAB center slot */
.lc-dock-slot { width: 80px; flex-shrink: 0; }

/* FAB */
.lc-fab-wrap {
    position: fixed;
    bottom: 22px; left: 50%; transform: translateX(-50%);
    width: var(--fab-sz); height: var(--fab-sz);
    z-index: 8010; /* above dock, below overlays */
    display: none;
}
.lc-fab-rings {
    position: absolute; inset: -10px; pointer-events: none;
}
.lc-fab-rings::before, .lc-fab-rings::after {
    content: ''; position: absolute; inset: 0;
    border-radius: 0;
    clip-path: polygon(50% 0%,100% 22%,100% 78%,50% 100%,0% 78%,0% 22%);
    border: 2px solid rgba(200,167,90,.45);
    animation: fabRing 2.4s ease-out infinite;
}
.lc-fab-rings::after { animation-delay: 1.2s; }
@keyframes fabRing {
    0% { transform: scale(.65); opacity: .8; }
    100% { transform: scale(1.8); opacity: 0; }
}

.lc-fab {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    clip-path: polygon(50% 0%,100% 22%,100% 78%,50% 100%,0% 78%,0% 22%);
    background: var(--lap-text-dark);
    cursor: pointer; border: none;
    transition: transform .2s var(--ease-bounce), filter .2s;
}
.lc-fab:hover { transform: scale(1.1); filter: drop-shadow(0 0 10px rgba(200,167,90,.6)); }
.lc-fab:active { transform: scale(.93); }
.lc-fab .lucide { width: 24px; height: 24px; color: var(--lap-neon); }

/* ═══════════════════════════════════════════════════════════
   MOBILE BOTTOM SHEETS (search + cart)
═══════════════════════════════════════════════════════════ */
.lc-bs-backdrop {
    position: fixed; inset: 0;
    background: rgba(31,26,23,.5);
    z-index: 9300; opacity: 0; pointer-events: none;
    transition: opacity .3s; backdrop-filter: blur(4px);
}
.lc-bs-backdrop.is-open { opacity: 1; pointer-events: all; }

.lc-bs {
    position: fixed; bottom: 0; left: 0; right: 0;
    background: #fff; z-index: 9400;
    border-radius: 20px 20px 0 0;
    border-top: 2px solid var(--lap-text-dark);
    box-shadow: 0 -8px 40px rgba(0,0,0,.12);
    transform: translateY(100%);
    transition: transform .4s var(--ease), padding-bottom .25s var(--ease), max-height .25s var(--ease);
    display: flex; flex-direction: column; max-height: calc(88vh - var(--kb-inset));
    padding-bottom: calc(env(safe-area-inset-bottom, 0px) + var(--kb-inset));
}
.lc-bs.is-open { transform: translateY(0); }
.lc-bs-handle {
    width: 44px; height: 5px;
    background: var(--lap-border); border-radius: 3px;
    margin: 14px auto 8px; flex-shrink: 0;
}
.lc-bs-head {
    display: flex; align-items: center; justify-content: space-between;
    padding: 6px 20px 14px; flex-shrink: 0;
    border-bottom: 1px solid var(--lap-border);
}
.lc-bs-head h2 { font-size: .95rem; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; }

/* Search sheet input */
.lc-bs-search-body {
    display: flex; align-items: center; gap: 10px;
    margin: 14px 16px;
    border: 1.5px solid var(--lap-text-dark); border-radius: 6px;
    padding: 11px 14px;
    transition: box-shadow .2s;
}
.lc-bs-search-body:focus-within { box-shadow: 3px 3px 0 var(--lap-neon); }
.lc-bs-search-body .lucide { width: 18px; height: 18px; color: var(--lap-text-muted); }
.lc-bs-search-body input {
    flex: 1; border: none; outline: none;
    font-family: var(--lap-font); font-size: .88rem; font-weight: 500;
    background: transparent;
}
.lc-bs-results { flex: 1; overflow-y: auto; padding: 0 8px 20px; }

/* Cart sheet */
.lc-bs-cart-empty {
    padding: 36px 24px; text-align: center;
    display: flex; flex-direction: column; align-items: center; gap: 14px;
}
.lc-bs-cart-empty .lc-cart-empty-icon { margin: 0; }
.lc-bs-cart-empty h3 { font-size: 1.1rem; font-weight: 700; }
.lc-bs-cart-empty p { font-size: .8rem; color: var(--lap-text-muted); }
.lc-bs-sugg-strip { overflow-y: auto; padding: 0 16px 20px; }
.lc-bs-sugg-strip h4 {
    font-size: .58rem; font-weight: 800; letter-spacing: 2px;
    text-transform: uppercase; color: var(--lap-text-muted);
    padding: 12px 0 8px;
}

/* ═══════════════════════════════════════════════════════════
   WHATSAPP WIDGET — ENHANCED
═══════════════════════════════════════════════════════════ */
.lc-wa-root {
    position: fixed; bottom: 28px; right: 24px;
    z-index: 9200;
    display: flex; flex-direction: column; align-items: flex-end; gap: 12px;
}
@media (max-width: 900px) {
    .lc-wa-root { bottom: calc(var(--dock-h) + 16px); right: 16px; }
}

/* Bubble tooltip */
.lc-wa-tip {
    background: var(--lap-text-dark); color: #fff;
    font-family: var(--lap-font); font-size: .68rem; font-weight: 600;
    letter-spacing: .3px; padding: 9px 15px;
    border-radius: 10px 10px 0 10px; white-space: nowrap;
    border: 1px solid var(--lap-neon);
    box-shadow: 3px 3px 0 var(--lap-neon);
    position: relative;
    animation: waTipIn .7s var(--ease-bounce) 1.2s both;
    cursor: pointer;
}
.lc-wa-tip::after {
    content: ''; position: absolute;
    bottom: -7px; right: 0;
    border-left: 7px solid transparent;
    border-top: 7px solid var(--lap-text-dark);
}
@keyframes waTipIn {
    0% { opacity: 0; transform: translateX(30px) scale(.7); }
    100% { opacity: 1; transform: translateX(0) scale(1); }
}

/* FAB button */
.lc-wa-fab {
    width: 56px; height: 56px; border-radius: 50%;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    display: flex; align-items: center; justify-content: center;
    border: none; cursor: pointer;
    box-shadow: 0 6px 24px rgba(37,211,102,.45), 0 0 0 0 rgba(37,211,102,.3);
    transition: transform .2s var(--ease-bounce), box-shadow .2s;
    animation: waFabIn .6s var(--ease-bounce) .5s both;
    position: relative;
}
.lc-wa-fab svg { width: 30px; height: 30px; fill: #fff; }
.lc-wa-fab:hover {
    transform: scale(1.12) rotate(-6deg);
    box-shadow: 0 10px 32px rgba(37,211,102,.6);
}
.lc-wa-fab:active { transform: scale(.94); }
@keyframes waFabIn {
    0% { opacity: 0; transform: scale(0); }
    100% { opacity: 1; transform: scale(1); }
}

/* Online dot */
.lc-wa-online {
    position: absolute; top: 2px; right: 2px;
    width: 12px; height: 12px; background: #4ADE80;
    border: 2px solid #fff; border-radius: 50%;
    animation: onlineBlink 2.5s ease infinite;
}
@keyframes onlineBlink {
    0%,100% { opacity: 1; } 50% { opacity: .5; }
}

/* Chat panel */
.lc-wa-panel {
    position: absolute;
    bottom: calc(100% + 14px); right: 0;
    width: 330px;
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,.18), 0 0 0 1.5px rgba(0,0,0,.08);
    opacity: 0; pointer-events: none;
    transform: scale(.9) translateY(10px);
    transform-origin: bottom right;
    transition: all .32s var(--ease-bounce);
}
.lc-wa-panel.is-open { opacity: 1; pointer-events: all; transform: scale(1) translateY(0); }

/* Mobile sheet layout for WhatsApp */
.lc-wa-bs { padding-bottom: calc(6px + var(--kb-inset) + env(safe-area-inset-bottom, 0px)); }
.lc-wa-bs .lc-wa-chat { flex: 1; max-height: none; }

.lc-wa-panel-head {
    background: linear-gradient(135deg, #075E54 0%, #128C7E 100%);
    padding: 16px 16px 20px;
    display: flex; align-items: center; gap: 12px;
}
.lc-wa-avatar {
    width: 46px; height: 46px; border-radius: 50%;
    background: rgba(255,255,255,.15);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; font-size: 1.3rem;
    border: 2px solid rgba(255,255,255,.3);
}
.lc-wa-ident { flex: 1; }
.lc-wa-ident strong {
    display: block; color: #fff;
    font-family: var(--lap-font); font-size: .9rem; font-weight: 700;
}
.lc-wa-ident span {
    font-family: var(--lap-font); font-size: .62rem;
    color: rgba(255,255,255,.7); display: flex; align-items: center; gap: 4px;
}
.lc-wa-ident span::before {
    content: ''; display: inline-block;
    width: 7px; height: 7px; border-radius: 50%;
    background: #4ADE80;
    animation: onlineBlink 2.5s ease infinite;
}
.lc-wa-panel-close {
    background: none; border: none; cursor: pointer;
    color: rgba(255,255,255,.7);
    transition: color .2s, transform .2s;
    padding: 4px;
}
.lc-wa-panel-close:hover { color: #fff; transform: rotate(90deg); }
.lc-wa-panel-close .lucide { width: 17px; height: 17px; }

/* Chat area */
.lc-wa-chat {
    background: #ECE5DD;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40'%3E%3Ccircle cx='20' cy='20' r='.6' fill='%23000' fill-opacity='.04'/%3E%3C/svg%3E");
    padding: 14px 14px 10px;
    min-height: 150px; max-height: 200px; overflow-y: auto;
    display: flex; flex-direction: column; gap: 10px;
}
.lc-wa-msg-in {
    background: #fff;
    padding: 10px 14px;
    border-radius: 0 12px 12px 12px;
    font-family: var(--lap-font); font-size: .78rem; line-height: 1.55;
    max-width: 82%;
    box-shadow: 0 1px 3px rgba(0,0,0,.1);
    animation: msgIn .3s var(--ease-out);
}
.lc-wa-msg-out {
    align-self: flex-end;
    background: #DCF8C6;
    padding: 10px 14px;
    border-radius: 12px 0 12px 12px;
    font-family: var(--lap-font); font-size: .78rem; line-height: 1.55;
    max-width: 82%;
    box-shadow: 0 1px 3px rgba(0,0,0,.1);
    animation: msgIn .3s var(--ease-out);
}
.lc-wa-msg-time {
    font-family: var(--lap-font); font-size: .56rem; color: var(--lap-text-muted);
    padding: 0 4px;
}
@keyframes msgIn {
    0% { opacity: 0; transform: translateY(8px) scale(.97); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
}

/* Quick replies */
.lc-wa-qr {
    display: flex; flex-wrap: wrap; gap: 6px;
    padding: 10px 14px; background: #ECE5DD;
    border-top: 1px solid rgba(0,0,0,.06);
}
.lc-wa-qr button {
    padding: 5px 12px; border-radius: 999px;
    border: 1.5px solid #128C7E; background: #fff;
    color: #128C7E; font-family: var(--lap-font);
    font-size: .65rem; font-weight: 700; letter-spacing: .5px;
    cursor: pointer; transition: background .15s, color .15s;
}
.lc-wa-qr button:hover { background: #128C7E; color: #fff; }

/* Guided message widgets */
.lc-wa-widget { display: flex; flex-direction: column; gap: 8px; }
.lc-wa-widget-actions { display: flex; flex-wrap: wrap; gap: 6px; }
.lc-wa-widget-actions .lc-wa-opt {
    padding: 6px 12px; border-radius: 999px;
    border: 1.5px solid #128C7E; background: #fff;
    color: #128C7E; font-family: var(--lap-font);
    font-size: .66rem; font-weight: 700; letter-spacing: .4px;
    cursor: pointer; transition: background .15s, color .15s, transform .15s;
}
.lc-wa-widget-actions .lc-wa-opt:hover { background: #128C7E; color: #fff; transform: translateY(-1px); }
.lc-wa-widget-actions .lc-wa-opt:disabled,
.lc-wa-widget-actions .lc-wa-opt.is-picked { opacity: .55; cursor: default; transform: none; }
.lc-wa-widget-actions .lc-wa-opt:focus-visible { outline: 2px solid #128C7E; outline-offset: 2px; }

.lc-wa-input-row {
    display: flex; align-items: center; gap: 8px;
    padding: 10px 12px; background: #F0F0F0;
    border-top: 1px solid var(--lap-border);
}
.lc-wa-input-row input {
    flex: 1; background: #fff;
    border: 1px solid var(--lap-border); border-radius: 999px;
    padding: 9px 16px;
    font-family: var(--lap-font); font-size: .8rem; outline: none;
    transition: border-color .2s;
}
.lc-wa-input-row input:focus { border-color: #128C7E; }
.lc-wa-send {
    width: 38px; height: 38px; border-radius: 50%;
    background: #25D366; border: none; cursor: pointer; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    transition: transform .15s var(--ease-bounce), background .15s;
}
.lc-wa-send:hover { transform: scale(1.12); background: #1ebe58; }
.lc-wa-send svg { width: 17px; height: 17px; fill: #fff; }

/* ═══════════════════════════════════════════════════════════
   WIRE ANIMATION (shared keyframes)
═══════════════════════════════════════════════════════════ */
/* JS-driven canvas, nothing extra needed */

/* ═══════════════════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════════════════ */
@media (max-width: 900px) {
    .lc-nav, .lc-cart-drawer, .lc-overlay,
    .lc-search-pop { display: none !important; }
    .lc-mob-top { display: flex !important; }
    .lc-dock { display: block !important; }
    .lc-fab-wrap { display: block; }
    .lc-wa-panel { display: none !important; }
}
@media (min-width: 901px) {
    .lc-mob-top, .lc-dock,
    .lc-bs, .lc-bs-backdrop { display: none !important; }
}

body { padding-top: var(--nav-h); }
@media (max-width: 900px) {
    body { padding-top: var(--mob-top-h); padding-bottom: var(--dock-h); }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     DESKTOP NAV
═══════════════════════════════════════════════════════ -->
<nav class="lc-nav" id="lcNav" aria-label="Niles & Sinai Main Navigation">
    <div class="lc-nav-canvas-wrap" aria-hidden="true">
        <canvas id="lc-wire-canvas"></canvas>
    </div>

    <div class="lc-nav-inner">
        <!-- Logo -->
        <a href="/" class="lc-logo" aria-label="Niles & Sinai Home">
            <span class="lc-logo-name">Niles<em> &amp; Sinai</em></span>
            <span class="lc-logo-desc">Fine Certified Jewellery</span>
        </a>

        <!-- Nav links -->
        <ul class="lc-nav-links" id="lcNavLinks" role="list">
            <div class="lc-nav-ink" id="lcNavInk" aria-hidden="true"></div>
            <li><a href="/" class="lc-nav-link active">Home</a></li>
            <li><a href="/store" class="lc-nav-link">Store</a></li>
            <li><a href="/students" class="lc-nav-link">Collections</a></li>
            <li class="lc-dropdown-wrap">
                <button class="lc-dd-btn" id="lcDdBtn"
                        aria-haspopup="true" aria-expanded="false"
                        aria-controls="lcDdMenu">
                    Company
                    <svg class="lc-chevron" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <ul class="lc-dropdown" id="lcDdMenu" role="menu">
                    <li role="menuitem"><a href="/contact">
                        <i data-lucide="phone-call"></i> Contact Us
                    </a></li>
                    <li role="menuitem"><a href="/about">
                        <i data-lucide="info"></i> About Us
                    </a></li>
                    <li role="menuitem"><a href="/blogs">
                        <i data-lucide="newspaper"></i> Blogs
                    </a></li>
                    <li role="menuitem"><a href="/faqs">
                        <i data-lucide="help-circle"></i> FAQs
                    </a></li>
                </ul>
            </li>
        </ul>

        <!-- Actions -->
        <div class="lc-nav-actions">
            <button class="lc-icon-btn" id="lcDkSearchBtn" aria-label="Search" aria-expanded="false">
                <i data-lucide="search"></i>
            </button>
            <button class="lc-icon-btn" id="lcDkCartBtn" aria-label="Open cart" aria-haspopup="true">
                <i data-lucide="shopping-bag"></i>
                <span class="lc-badge" id="lcCartBadge">3</span>
            </button>
        </div>
    </div>
</nav>

<!-- Desktop Search Pop -->
<div class="lc-search-pop" id="lcSearchPop" role="search" aria-label="Product Search">
    <div class="lc-sp-input-row">
        <i data-lucide="search"></i>
        <input type="text" id="lcDkSearchInput"
               placeholder="Search rings, necklaces, gemstones…" autocomplete="off"
               aria-label="Search products">
    </div>
    <div class="lc-sp-label">Popular Searches</div>
    <div class="lc-sp-results" id="lcDkSearchResults" aria-live="polite">
        <?php foreach($suggestedProducts as $p): ?>
        <a href="/product" class="lc-sp-item">
            <div class="lc-sp-icon"><i data-lucide="gem"></i></div>
            <div class="lc-sp-info">
                <div class="lc-sp-name"><?= htmlspecialchars($p['name']) ?></div>
                <div class="lc-sp-price">
                    <strong><?= htmlspecialchars($p['price']) ?></strong>
                    &nbsp;<del><?= htmlspecialchars($p['mrp']) ?></del>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<!-- Cart overlay + split drawer -->
<div class="lc-overlay" id="lcOverlay" aria-hidden="true"></div>
<aside class="lc-cart-drawer" id="lcCartDrawer" role="complementary" aria-label="Shopping Cart">

    <!-- LEFT PANEL -->
    <div class="lc-cart-left">
        <div class="lc-cart-left-canvas" aria-hidden="true">
            <canvas id="lc-cart-wire-canvas"></canvas>
        </div>
        <div class="lc-cart-left-head">
            <h3>Check Out These Suggestions!</h3>
        </div>
        <div class="lc-cart-left-body">
            <?php foreach($suggestedProducts as $p): ?>
            <a href="/product" class="lc-sugg-card">
                <div class="lc-sugg-img"><i data-lucide="gem"></i></div>
                <div class="lc-sugg-info">
                    <div class="lc-sugg-name"><?= htmlspecialchars($p['name']) ?></div>
                    <div class="lc-sugg-prices">
                        <span class="lc-sugg-sale"><?= htmlspecialchars($p['price']) ?></span>
                        <span class="lc-sugg-old"><?= htmlspecialchars($p['mrp']) ?></span>
                    </div>
                    <button class="lc-sugg-add">
                        <i data-lucide="plus" style="width:10px;height:10px;"></i> Add to cart
                    </button>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="lc-cart-right">
        <div class="lc-cart-right-head">
            <h2>Cart</h2>
            <button class="lc-close-btn" id="lcCartClose" aria-label="Close cart">
                <i data-lucide="x"></i>
            </button>
        </div>
        <div class="lc-cart-items" id="lcCartItems" style="display:none;"></div>
        <div class="lc-cart-empty" id="lcCartEmptyState">
            <div class="lc-cart-empty-icon">
                <i data-lucide="package"></i>
            </div>
            <h3>Your cart is empty</h3>
            <p>Unfortunately we could not find any products in your cart.</p>
            <a href="/store" class="lc-cart-cta">
                <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
                Continue Shopping
            </a>
        </div>
    </div>
</aside>

<!-- ═══════════════════════════════════════════════════════
     MOBILE TOP BAR
═══════════════════════════════════════════════════════ -->
<header class="lc-mob-top" id="lcMobTop" aria-label="Niles & Sinai Mobile Navigation">
    <div class="lc-mob-canvas-wrap" aria-hidden="true">
        <canvas id="lc-mob-wire-canvas"></canvas>
    </div>
    <div class="lc-mob-top-inner">
        <a href="/" class="lc-mob-logo" aria-label="Niles & Sinai Home">
            <span class="lc-mob-logo-name">Niles<em> &amp; Sinai</em></span>
        </a>
        <div class="lc-mob-center">
            <span class="lc-mob-center-label">Custom Orders?</span>
            <a class="lc-mob-center-num" href="tel:+917470726731">📞 +91 74707 26731</a>
        </div>
        <div class="lc-mob-actions">
            <button class="lc-icon-btn" id="lcMobSearchBtn" aria-label="Search">
                <i data-lucide="search"></i>
            </button>
            <button class="lc-icon-btn" id="lcMobCartBtn" aria-label="Open cart">
                <i data-lucide="shopping-bag"></i>
                <span class="lc-badge">3</span>
            </button>
        </div>
    </div>
</header>

<!-- ═══════════════════════════════════════════════════════
     MOBILE BOTTOM DOCK
═══════════════════════════════════════════════════════ -->
<nav class="lc-dock" id="lcDock" aria-label="Niles & Sinai Bottom Navigation">
    <!-- Wire canvas for dock -->
    <div class="lc-dock-canvas-wrap" aria-hidden="true">
        <canvas id="lc-dock-wire-canvas"></canvas>
    </div>

    <!-- SVG cutout shape -->
    <svg class="lc-dock-shape" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 390 68" preserveAspectRatio="none" aria-hidden="true">
        <defs>
            <filter id="dockShadow">
                <feDropShadow dx="0" dy="-2" stdDeviation="12" flood-color="#00000023"/>
            </filter>
        </defs>
          <path filter="url(#dockShadow)"
              d="M0,18 Q0,0 18,0 L148,0 Q152,0 156,3 A28,28 0 0,0 234,3 Q238,0 242,0 L372,0 Q390,0 390,18 L390,68 L0,68 Z"
              fill="#ffffff"/>
          <path d="M0,18 Q0,1.5 18,1.5 L148,1.5 Q152,1.5 156,4 A26,26 0 0,0 234,4 Q238,1.5 242,1.5 L372,1.5 Q390,1.5 390,18"
              stroke="#C8A75A" stroke-width="1.8" fill="none" opacity=".75"/>
    </svg>

    <div class="lc-dock-items">
        <a href="/" class="lc-dock-link active" aria-label="Home">
            <i data-lucide="home"></i>Home
        </a>
        <a href="/store" class="lc-dock-link" aria-label="Store">
            <i data-lucide="gem"></i>Store
        </a>
        <div class="lc-dock-slot" aria-hidden="true"></div>
        <a href="/students" class="lc-dock-link" aria-label="Collections">
            <i data-lucide="sparkles"></i>Collections
        </a>
        <a href="/about" class="lc-dock-link" aria-label="Company">
            <i data-lucide="building-2"></i>Company
        </a>
    </div>
</nav>

<!-- FAB -->
<div class="lc-fab-wrap">
    <div class="lc-fab-rings" aria-hidden="true"></div>
    <button class="lc-fab" aria-label="Call Niles & Sinai"
            onclick="window.location.href='tel:+917470726731'">
        <i data-lucide="phone-call"></i>
    </button>
</div>

<!-- ═══════════════════════════════════════════════════════
     MOBILE BOTTOM SHEETS
═══════════════════════════════════════════════════════ -->
<div class="lc-bs-backdrop" id="lcBsBackdrop" aria-hidden="true"></div>

<!-- Search Sheet -->
<div class="lc-bs" id="lcBsSearch" role="search" aria-label="Mobile Search">
    <div class="lc-bs-handle" aria-hidden="true"></div>
    <div class="lc-bs-head">
        <h2>Search</h2>
        <button class="lc-close-btn" id="lcBsSearchClose" aria-label="Close search">
            <i data-lucide="x"></i>
        </button>
    </div>
    <div class="lc-bs-search-body">
        <i data-lucide="search"></i>
        <input type="text" id="lcMobSearchInput"
               placeholder="Search rings, necklaces…" autocomplete="off"
               aria-label="Search products">
    </div>
    <div class="lc-bs-results" id="lcMobSearchResults" aria-live="polite">
        <div class="lc-sp-label">Popular Searches</div>
        <?php foreach($suggestedProducts as $p): ?>
        <a href="/product" class="lc-sp-item">
            <div class="lc-sp-icon"><i data-lucide="gem"></i></div>
            <div class="lc-sp-info">
                <div class="lc-sp-name"><?= htmlspecialchars($p['name']) ?></div>
                <div class="lc-sp-price">
                    <strong><?= htmlspecialchars($p['price']) ?></strong>
                    <del><?= htmlspecialchars($p['mrp']) ?></del>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<!-- Cart Sheet -->
<div class="lc-bs" id="lcBsCart" role="complementary" aria-label="Mobile Cart">
    <div class="lc-bs-handle" aria-hidden="true"></div>
    <div class="lc-bs-head">
        <h2>Cart</h2>
        <button class="lc-close-btn" id="lcBsCartClose" aria-label="Close cart">
            <i data-lucide="x"></i>
        </button>
    </div>
    <div class="lc-bs-cart-empty">
        <div class="lc-cart-empty-icon">
            <i data-lucide="package"></i>
        </div>
        <h3>Your cart is empty</h3>
        <p>We could not find any products in your cart.</p>
        <a href="/store" class="lc-cart-cta">Continue Shopping</a>
    </div>
    <div class="lc-bs-sugg-strip">
        <h4>You might like these</h4>
        <?php foreach($suggestedProducts as $p): ?>
        <a href="/product" class="lc-sugg-card">
            <div class="lc-sugg-img"><i data-lucide="gem"></i></div>
            <div class="lc-sugg-info">
                <div class="lc-sugg-name"><?= htmlspecialchars($p['name']) ?></div>
                <div class="lc-sugg-prices">
                    <span class="lc-sugg-sale"><?= htmlspecialchars($p['price']) ?></span>
                    <span class="lc-sugg-old"><?= htmlspecialchars($p['mrp']) ?></span>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<!-- WhatsApp Sheet -->
<div class="lc-bs lc-wa-bs" id="lcBsWa" role="dialog" aria-label="WhatsApp Chat">
    <div class="lc-bs-handle" aria-hidden="true"></div>
    <div class="lc-bs-head">
        <h2>WhatsApp</h2>
        <button class="lc-close-btn" id="lcBsWaClose" aria-label="Close WhatsApp">
            <i data-lucide="x"></i>
        </button>
    </div>
    <div class="lc-wa-chat" id="lcWaChatMob">
        <div class="lc-wa-msg-in">
            👋 Hi! Welcome to Niles & Sinai. Looking for a ring, necklace, or custom piece? We're here to help!
        </div>
        <div class="lc-wa-msg-time">Niles & Sinai Support · Now</div>
    </div>
    <div class="lc-wa-qr" id="lcWaQrMob">
        <button onclick="lcWaQuickReply(this,'type:ring')">Rings</button>
        <button onclick="lcWaQuickReply(this,'type:necklace')">Necklaces</button>
        <button onclick="lcWaQuickReply(this,'type:custom')">Custom Orders</button>
    </div>
    <div class="lc-wa-input-row">
        <input type="text" id="lcWaInputMob" placeholder="Type a message..." autocomplete="off"
               aria-label="WhatsApp message">
        <button class="lc-wa-send" id="lcWaSendMob" aria-label="Send">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
            </svg>
        </button>
    </div>
</div>

<!-- ═══════════════════════════════════════════════════════
     WHATSAPP WIDGET
═══════════════════════════════════════════════════════ -->
<div class="lc-wa-root" id="lcWaRoot">
    <span class="lc-wa-tip" id="lcWaTip">💬 Chat with us on WhatsApp!</span>

    <!-- Chat panel -->
    <div class="lc-wa-panel" id="lcWaPanel" role="dialog" aria-label="WhatsApp Chat">
        <div class="lc-wa-panel-head">
            <div class="lc-wa-avatar">💎</div>
            <div class="lc-wa-ident">
                <strong>Niles & Sinai Support</strong>
                <span>Online · Typically instant</span>
            </div>
            <button class="lc-wa-panel-close" id="lcWaPanelClose" aria-label="Close chat">
                <i data-lucide="x"></i>
            </button>
        </div>
        <div class="lc-wa-chat" id="lcWaChat">
            <div class="lc-wa-msg-in">
                👋 Hi! Welcome to Niles & Sinai. Looking for a ring, necklace, or custom piece? We're here to help!
            </div>
            <div class="lc-wa-msg-time">Niles & Sinai Support · Now</div>
        </div>
        <!-- Quick reply chips -->
        <div class="lc-wa-qr" id="lcWaQr">
            <button onclick="lcWaQuickReply(this,'type:ring')">💍 Rings</button>
            <button onclick="lcWaQuickReply(this,'type:necklace')">📿 Necklaces</button>
            <button onclick="lcWaQuickReply(this,'type:custom')">✨ Custom Orders</button>
        </div>
        <div class="lc-wa-input-row">
            <input type="text" id="lcWaInput" placeholder="Type a message…" autocomplete="off"
                   aria-label="WhatsApp message">
            <button class="lc-wa-send" id="lcWaSend" aria-label="Send">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- WhatsApp FAB -->
    <button class="lc-wa-fab" id="lcWaFab" aria-label="Open WhatsApp" aria-expanded="false">
        <div class="lc-wa-online" aria-hidden="true"></div>
        <!-- Official WhatsApp SVG logo -->
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 .5C7.44.5.5 7.44.5 16c0 2.84.74 5.51 2.04 7.84L.5 31.5l7.84-2.05A15.42 15.42 0 0016 31.5c8.56 0 15.5-6.94 15.5-15.5S24.56.5 16 .5z" fill="#25D366"/>
            <path d="M23.5 19.72c-.37-.19-2.2-1.08-2.54-1.2-.34-.12-.59-.19-.84.19-.25.37-.97 1.2-1.19 1.45-.22.25-.44.28-.81.09-.37-.19-1.57-.58-2.99-1.84-1.1-.98-1.85-2.2-2.07-2.57-.22-.37-.02-.57.17-.75.17-.17.37-.44.56-.66.19-.22.25-.37.37-.62.13-.25.06-.47-.03-.66-.09-.19-.84-2.02-1.15-2.77-.3-.73-.61-.63-.84-.64h-.72c-.25 0-.66.09-1 .47-.34.37-1.31 1.28-1.31 3.12 0 1.84 1.34 3.62 1.53 3.87.19.25 2.64 4.03 6.4 5.65.9.38 1.6.61 2.14.78.9.28 1.72.24 2.37.15.72-.1 2.2-.9 2.51-1.77.31-.87.31-1.62.22-1.77-.09-.15-.34-.25-.71-.44z" fill="#fff"/>
        </svg>
    </button>
</div>

<!-- ═══════════════════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════════════════ -->
<script>
(function () {
'use strict';

/* ── Lucide init ── */
if (typeof lucide !== 'undefined') lucide.createIcons();

const $  = id  => document.getElementById(id);
const $$ = sel => document.querySelectorAll(sel);

const rootEl = document.documentElement;
function setKbInset(px) {
    rootEl.style.setProperty('--kb-inset', px + 'px');
    document.body.classList.toggle('lc-kb-open', px > 0);
}
function updateKbInset() {
    if (!window.visualViewport) {
        setKbInset(0);
        return;
    }
    const vv = window.visualViewport;
    const rawInset = Math.max(0, window.innerHeight - vv.height - vv.offsetTop);
    const inset = rawInset > 120 ? rawInset : 0;
    setKbInset(inset);
}
function bindKbInput(inputEl, chatEl) {
    if (!inputEl) return;
    inputEl.addEventListener('focus', () => {
        updateKbInset();
        if (chatEl) setTimeout(() => { chatEl.scrollTop = chatEl.scrollHeight; }, 120);
    });
    inputEl.addEventListener('blur', () => {
        setTimeout(() => updateKbInset(), 120);
    });
}

if (window.visualViewport) {
    window.visualViewport.addEventListener('resize', updateKbInset);
    window.visualViewport.addEventListener('scroll', updateKbInset);
}
window.addEventListener('resize', updateKbInset);

/* ══════════════════════════════════════════════
   1. WIRE CANVAS — reusable factory
══════════════════════════════════════════════ */
function buildWireCanvas(canvasEl, opts) {
    if (!canvasEl) return;
    opts = Object.assign({ nodeSpaceX: 80, nodeSpaceY: 26, particleCount: 10, maxDist: 100 }, opts);
    const ctx = canvasEl.getContext('2d');
    let W, H, nodes, parts, raf;

    function resize() {
        W = canvasEl.width  = canvasEl.offsetWidth;
        H = canvasEl.height = canvasEl.offsetHeight;
        buildGraph();
    }

    function buildGraph() {
        nodes = [];
        const cols = Math.ceil(W / opts.nodeSpaceX) + 2;
        const rows = Math.ceil(H / opts.nodeSpaceY) + 2;
        for (let r = 0; r < rows; r++)
            for (let c = 0; c < cols; c++)
                nodes.push({ x: c * opts.nodeSpaceX + (r % 2 ? opts.nodeSpaceX / 2 : 0), y: r * opts.nodeSpaceY, nb: [] });

        nodes.forEach((n, i) => {
            nodes.forEach((m, j) => {
                if (i >= j) return;
                const d = Math.hypot(m.x - n.x, m.y - n.y);
                if (d < opts.maxDist) { n.nb.push(j); }
            });
        });

        parts = [];
        for (let k = 0; k < opts.particleCount; k++) spawnPart();
    }

    function spawnPart() {
        const si = Math.floor(Math.random() * nodes.length);
        const s  = nodes[si];
        if (!s.nb.length) return;
        parts.push({
            si, ei: s.nb[Math.floor(Math.random() * s.nb.length)],
            t: Math.random(),
            spd: .006 + Math.random() * .012,
            a: .5 + Math.random() * .5,
            sz: 1.2 + Math.random() * 1.8
        });
    }

    function draw() {
        ctx.clearRect(0, 0, W, H);
        const rgb = '200,167,90';// gold increase the transparency of edges and particles by adjusting the alpha value in the rgba() below

        // edges
        ctx.lineWidth = .35;
        nodes.forEach(n => n.nb.forEach(ei => {
            const m = nodes[ei];
            ctx.beginPath();
            ctx.moveTo(n.x, n.y);
            ctx.lineTo(m.x, m.y);
            ctx.strokeStyle = `rgba(${rgb},.65)`; // adjust edge transparency here
            ctx.stroke();
        }));

        // dots
        nodes.forEach(n => {
            ctx.beginPath();
            ctx.arc(n.x, n.y, 1, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${rgb},.62)`; // adjust node transparency here
            ctx.fill();
        });

        // particles
        parts = parts.filter(p => {
            p.t += p.spd;
            if (p.t >= 1) {
                p.si = p.ei;
                const s = nodes[p.si];
                if (!s.nb.length) return false;
                p.ei = s.nb[Math.floor(Math.random() * s.nb.length)];
                p.t = 0;
                p.spd = .006 + Math.random() * .012;
                return true;
            }
            const s = nodes[p.si], e = nodes[p.ei];
            const x = s.x + (e.x - s.x) * p.t;
            const y = s.y + (e.y - s.y) * p.t;

            ctx.beginPath();
            ctx.arc(x, y, p.sz, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${rgb},${p.a})`;
            ctx.fill();

            ctx.beginPath();
            ctx.arc(x, y, p.sz * 2.8, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${rgb},.07)`;
            ctx.fill();
            return true;
        });
        while (parts.length < opts.particleCount) spawnPart();
        raf = requestAnimationFrame(draw);
    }

    const ro = new ResizeObserver(() => { cancelAnimationFrame(raf); resize(); draw(); });
    ro.observe(canvasEl.parentElement);
    resize(); draw();
}

// Boot all wire canvases
buildWireCanvas($('lc-wire-canvas'),      { particleCount: 26 });
buildWireCanvas($('lc-mob-wire-canvas'),  { particleCount: 8, nodeSpaceX: 60, nodeSpaceY: 20 });
buildWireCanvas($('lc-dock-wire-canvas'), { particleCount: 8, nodeSpaceX: 60, nodeSpaceY: 22 });
buildWireCanvas($('lc-cart-wire-canvas'), { particleCount: 18, nodeSpaceX: 50, nodeSpaceY: 18, maxDist: 85 });

/* ══════════════════════════════════════════════
   2. SCROLL → FLOATING DESKTOP NAV
══════════════════════════════════════════════ */
const lcNav = $('lcNav');
if (lcNav) {
    window.addEventListener('scroll', () => {
        lcNav.classList.toggle('is-scrolled', window.scrollY > 55);
    }, { passive: true });
}

/* ══════════════════════════════════════════════
   3. MAGNETIC INK UNDERLINE
══════════════════════════════════════════════ */
(function magneticInk() {
    const linksEl = $('lcNavLinks');
    const ink     = $('lcNavInk');
    if (!linksEl || !ink) return;

    // Find the active link at init
    const links = linksEl.querySelectorAll('.lc-nav-link, .lc-dd-btn');
    let activeLink = linksEl.querySelector('.lc-nav-link.active') || links[0];

    function moveInkTo(el) {
        const listRect = linksEl.getBoundingClientRect();
        const elRect   = el.getBoundingClientRect();
        const left = elRect.left - listRect.left + (el.tagName === 'A' ? 18 : 20);
        const w    = elRect.width - (el.tagName === 'A' ? 36 : 40);
        ink.style.left    = left + 'px';
        ink.style.width   = w + 'px';
        ink.style.opacity = '1';
    }

    moveInkTo(activeLink);

    links.forEach(link => {
        link.addEventListener('mouseenter', () => moveInkTo(link));
        link.addEventListener('click', () => {
            links.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
            activeLink = link;
        });
    });

    linksEl.addEventListener('mouseleave', () => moveInkTo(activeLink));
})();

/* ══════════════════════════════════════════════
   4. COMPANY DROPDOWN
══════════════════════════════════════════════ */
const ddBtn  = $('lcDdBtn');
const ddMenu = $('lcDdMenu');
if (ddBtn && ddMenu) {
    ddBtn.addEventListener('click', e => {
        e.stopPropagation();
        const open = ddMenu.classList.toggle('is-open');
        ddBtn.setAttribute('aria-expanded', open);
    });
    document.addEventListener('click', () => {
        ddMenu.classList.remove('is-open');
        ddBtn.setAttribute('aria-expanded', false);
    });
    ddMenu.addEventListener('click', e => e.stopPropagation());
}

/* ══════════════════════════════════════════════
   5. SEARCH POPOVER (DESKTOP)
══════════════════════════════════════════════ */
const dkSearchBtn   = $('lcDkSearchBtn');
const searchPop     = $('lcSearchPop');
const dkSearchInput = $('lcDkSearchInput');
const dkSearchRes   = $('lcDkSearchResults');

const mockProds = [
    {name:'Emerald Solitaire Ring | 18K Gold',        price:'₹48,999', mrp:'₹68,500'},
    {name:'Ruby Drop Necklace | Rose Gold',            price:'₹62,499', mrp:'₹89,900'},
    {name:'Sapphire Pendant | Platinum Setting',       price:'₹35,799', mrp:'₹52,000'},
    {name:'Diamond Tennis Bracelet | 18K White Gold',  price:'₹1,26,899', mrp:'₹1,68,000'},
    {name:'Pearl Drop Earrings | Sterling Silver',     price:'₹14,499', mrp:'₹21,000'},
    {name:'Amethyst Halo Ring | Sterling Silver',      price:'₹22,999', mrp:'₹34,000'},
    {name:'Gold Vermeil Chain Necklace',                price:'₹15,999', mrp:'₹23,000'},
];

function positionPop() {
    if (!dkSearchBtn || !searchPop) return;
    const r = dkSearchBtn.getBoundingClientRect();
    searchPop.style.top   = (r.bottom + 16) + 'px';
    searchPop.style.right = (window.innerWidth - r.right) + 'px';
}

function renderSearchRes(q, container) {
    const list = q
        ? mockProds.filter(p => p.name.toLowerCase().includes(q.toLowerCase()))
        : mockProds.slice(0, 5);
    const label = q ? 'Results' : 'Popular Searches';
    let h = `<div class="lc-sp-label">${label}</div>`;
    if (!list.length) {
        h += `<div style="padding:16px 18px;font-family:var(--lap-font);font-size:.78rem;color:#8A7F6E;">No results found</div>`;
    } else {
        list.slice(0, 5).forEach(p => {
            h += `<a href="/product" class="lc-sp-item">
                <div class="lc-sp-icon"><i data-lucide="gem"></i></div>
                <div class="lc-sp-info">
                    <div class="lc-sp-name">${p.name}</div>
                    <div class="lc-sp-price"><strong>${p.price}</strong> <del>${p.mrp}</del></div>
                </div></a>`;
        });
    }
    container.innerHTML = h;
    if (typeof lucide !== 'undefined') lucide.createIcons();
}

if (dkSearchBtn && searchPop) {
    dkSearchBtn.addEventListener('click', e => {
        e.stopPropagation();
        const open = searchPop.classList.toggle('is-open');
        dkSearchBtn.setAttribute('aria-expanded', open);
        if (open) { positionPop(); dkSearchInput && dkSearchInput.focus(); }
    });
    document.addEventListener('click', e => {
        if (!searchPop.contains(e.target) && e.target !== dkSearchBtn) {
            searchPop.classList.remove('is-open');
            dkSearchBtn.setAttribute('aria-expanded', false);
        }
    });
    searchPop.addEventListener('click', e => e.stopPropagation());
}

if (dkSearchInput && dkSearchRes) {
    let dbt;
    dkSearchInput.addEventListener('input', () => {
        clearTimeout(dbt);
        dbt = setTimeout(() => renderSearchRes(dkSearchInput.value.trim(), dkSearchRes), 200);
    });
}

/* ══════════════════════════════════════════════
   6. DESKTOP CART DRAWER
══════════════════════════════════════════════ */
const lcOverlay   = $('lcOverlay');
const cartDrawer  = $('lcCartDrawer');
const dkCartBtn   = $('lcDkCartBtn');
const cartClose   = $('lcCartClose');

function openDkCart() {
    lcOverlay.classList.add('is-open');
    cartDrawer.classList.add('is-open');
    lcOverlay.setAttribute('aria-hidden', false);
    document.body.style.overflow = 'hidden';
}
function closeDkCart() {
    lcOverlay.classList.remove('is-open');
    cartDrawer.classList.remove('is-open');
    lcOverlay.setAttribute('aria-hidden', true);
    document.body.style.overflow = '';
}
if (dkCartBtn)  dkCartBtn.addEventListener('click', openDkCart);
if (cartClose)  cartClose.addEventListener('click', closeDkCart);
if (lcOverlay)  lcOverlay.addEventListener('click', closeDkCart);

/* ══════════════════════════════════════════════
   6b. CART ENGINE (persisted via localStorage)
══════════════════════════════════════════════ */
(function(){
    const STORE_KEY = 'ns_cart';
    const fmt = n => '₹' + Number(n).toLocaleString('en-IN');

    function getItems() {
        try { return JSON.parse(localStorage.getItem(STORE_KEY)) || []; }
        catch(e) { return []; }
    }
    function saveItems(items) {
        try { localStorage.setItem(STORE_KEY, JSON.stringify(items)); } catch(e) {}
        renderBadge(items);
        renderDrawer(items);
    }
    function renderBadge(items) {
        const badge = $('lcCartBadge');
        if (!badge) return;
        const count = items.reduce((sum, it) => sum + it.qty, 0);
        badge.textContent = count;
        badge.style.display = count > 0 ? '' : 'none';
    }
    function renderDrawer(items) {
        const itemsWrap  = $('lcCartItems');
        const emptyState = $('lcCartEmptyState');
        if (!itemsWrap || !emptyState) return;

        if (items.length === 0) {
            itemsWrap.style.display = 'none';
            emptyState.style.display = 'flex';
            itemsWrap.innerHTML = '';
            return;
        }
        emptyState.style.display = 'none';
        itemsWrap.style.display = 'flex';

        const subtotal = items.reduce((sum, it) => sum + (it.price * it.qty), 0);

        itemsWrap.innerHTML = `
            <div class="lc-cart-items-scroll">
                ${items.map(it => `
                <div class="lc-cart-row" data-cart-row="${it.id}">
                    <div class="lc-cart-row-img">
                        ${it.image ? `<img src="${it.image}" alt="${it.title}">` : `<i data-lucide="gem"></i>`}
                    </div>
                    <div class="lc-cart-row-info">
                        <div class="lc-cart-row-title">${it.title}</div>
                        <div class="lc-cart-row-price">${fmt(it.price)}</div>
                        <div class="lc-cart-row-qty">
                            <button class="lc-cart-qty-btn" data-qty-dec="${it.id}" aria-label="Decrease quantity">–</button>
                            <span class="lc-cart-qty-val">${it.qty}</span>
                            <button class="lc-cart-qty-btn" data-qty-inc="${it.id}" aria-label="Increase quantity">+</button>
                        </div>
                    </div>
                    <button class="lc-cart-row-remove" data-cart-remove="${it.id}" aria-label="Remove ${it.title}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </button>
                </div>`).join('')}
            </div>
            <div class="lc-cart-summary">
                <div class="lc-cart-subtotal-row"><span>Subtotal</span><span>${fmt(subtotal)}</span></div>
                <a href="/store" class="lc-cart-checkout-btn">
                    <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
                    Continue to Checkout
                </a>
            </div>`;
        if (window.lucide) lucide.createIcons();
    }

    function addItem(item) {
        const items = getItems();
        const existing = items.find(it => it.id === item.id);
        if (existing) { existing.qty += 1; }
        else { items.push({ id: item.id, title: item.title, price: item.price, image: item.image || '', qty: 1 }); }
        saveItems(items);
    }
    function removeItem(id) {
        saveItems(getItems().filter(it => it.id !== id));
    }
    function changeQty(id, delta) {
        const items = getItems();
        const it = items.find(x => x.id === id);
        if (!it) return;
        it.qty += delta;
        if (it.qty <= 0) { saveItems(items.filter(x => x.id !== id)); return; }
        saveItems(items);
    }

    // Delegate qty/remove clicks inside the drawer
    document.addEventListener('click', e => {
        const dec = e.target.closest('[data-qty-dec]');
        if (dec) { changeQty(dec.dataset.qtyDec, -1); return; }
        const inc = e.target.closest('[data-qty-inc]');
        if (inc) { changeQty(inc.dataset.qtyInc, 1); return; }
        const rm = e.target.closest('[data-cart-remove]');
        if (rm) { removeItem(rm.dataset.cartRemove); return; }
    });

    // Wire the static "suggested products" add buttons in the cart drawer
    document.querySelectorAll('.lc-sugg-add').forEach((btn, i) => {
        btn.addEventListener('click', function(e){
            e.preventDefault(); e.stopPropagation();
            const card = btn.closest('.lc-sugg-card');
            const title = card ? card.querySelector('.lc-sugg-name').textContent.trim() : ('Item ' + i);
            const priceText = card ? card.querySelector('.lc-sugg-sale').textContent.trim() : '0';
            const price = parseInt(priceText.replace(/[^0-9]/g, ''), 10) || 0;
            addItem({ id: 'sugg-' + i, title, price });
            btn.textContent = '✓ Added';
            btn.style.background = 'var(--lap-text-dark)';
            btn.style.color = 'var(--lap-neon)';
            setTimeout(() => { btn.innerHTML = '<i data-lucide="plus" style="width:10px;height:10px;"></i> Add to cart'; btn.style.background=''; btn.style.color=''; if(window.lucide) lucide.createIcons(); }, 1500);
        });
    });

    // Public API for product cards on other sections/pages to call
    window.NSCart = { add: addItem, remove: removeItem, changeQty, getItems };

    // Init on load
    renderBadge(getItems());
    renderDrawer(getItems());
})();

/* ══════════════════════════════════════════════
   7. MOBILE BOTTOM SHEETS
══════════════════════════════════════════════ */
const bsBackdrop   = $('lcBsBackdrop');
const bsSearch     = $('lcBsSearch');
const bsCart       = $('lcBsCart');
const bsWa         = $('lcBsWa');
const mobSearchBtn = $('lcMobSearchBtn');
const mobCartBtn   = $('lcMobCartBtn');
const bsSearchClose = $('lcBsSearchClose');
const bsCartClose  = $('lcBsCartClose');
const bsWaClose     = $('lcBsWaClose');
const mobSearchIn  = $('lcMobSearchInput');
const mobSearchRes = $('lcMobSearchResults');

function openSheet(el) {
    if (!el) return;
    closeSheets();
    bsBackdrop.classList.add('is-open');
    el.classList.add('is-open');
    bsBackdrop.setAttribute('aria-hidden', false);
    document.body.style.overflow = 'hidden';
    updateKbInset();
}
function closeSheets() {
    bsBackdrop.classList.remove('is-open');
    [bsSearch, bsCart, bsWa].forEach(el => el && el.classList.remove('is-open'));
    bsBackdrop.setAttribute('aria-hidden', true);
    document.body.style.overflow = '';
    setKbInset(0);
}

if (mobSearchBtn) mobSearchBtn.addEventListener('click', () => { openSheet(bsSearch); mobSearchIn && mobSearchIn.focus(); });
if (mobCartBtn)   mobCartBtn.addEventListener('click',   () => openSheet(bsCart));
if (bsSearchClose) bsSearchClose.addEventListener('click', closeSheets);
if (bsCartClose)   bsCartClose.addEventListener('click',   closeSheets);
if (bsWaClose)     bsWaClose.addEventListener('click',     closeSheets);
if (bsBackdrop)    bsBackdrop.addEventListener('click',    closeSheets);

if (mobSearchIn && mobSearchRes) {
    let mbt;
    mobSearchIn.addEventListener('input', () => {
        clearTimeout(mbt);
        mbt = setTimeout(() => renderSearchRes(mobSearchIn.value.trim(), mobSearchRes), 200);
    });
}
bindKbInput(mobSearchIn);

// Swipe-down to close
let touchY0 = 0;
[bsSearch, bsCart].forEach(el => {
    if (!el) return;
    el.addEventListener('touchstart', e => { touchY0 = e.touches[0].clientY; }, { passive: true });
    el.addEventListener('touchend',   e => { if (e.changedTouches[0].clientY - touchY0 > 80) closeSheets(); }, { passive: true });
});

/* ══════════════════════════════════════════════
   8. WHATSAPP WIDGET
══════════════════════════════════════════════ */
const waFab        = $('lcWaFab');
const waPanel      = $('lcWaPanel');
const waPanelClose = $('lcWaPanelClose');
const waTip        = $('lcWaTip');
const waInput      = $('lcWaInput');
const waSend       = $('lcWaSend');
const waChat       = $('lcWaChat');
const waQr         = $('lcWaQr');
const waInputMob   = $('lcWaInputMob');
const waSendMob    = $('lcWaSendMob');
const waChatMob    = $('lcWaChatMob');
const WA_NUM       = '917470726731';

// Auto-hide tip
if (waTip) setTimeout(() => { waTip.style.opacity = '0'; waTip.style.pointerEvents = 'none'; waTip.style.transition = 'opacity .4s'; }, 6000);

const waFlow = {
    types: [
        { value: 'ring', label: 'Ring' },
        { value: 'necklace', label: 'Necklace' },
        { value: 'bracelet', label: 'Bracelet' },
        { value: 'custom', label: 'Custom Order' }
    ],
    categories: {
        ring: [
            { value: 'solitaire', label: 'Solitaire' },
            { value: 'halo', label: 'Halo' },
            { value: 'band', label: 'Eternity Band' }
        ],
        necklace: [
            { value: 'pendant', label: 'Pendant' },
            { value: 'chain', label: 'Chain' },
            { value: 'choker', label: 'Choker' }
        ],
        bracelet: [
            { value: 'bangle', label: 'Bangle' },
            { value: 'tennis', label: 'Tennis Bracelet' },
            { value: 'cuff', label: 'Cuff' }
        ]
    },
    uses: [
        { value: 'gift', label: 'Gift' },
        { value: 'engagement', label: 'Engagement' },
        { value: 'everyday', label: 'Everyday Wear' }
    ]
};

const waSuggestions = {
    ring: {
        gift: {
            title: 'Gift Ring',
            specs: ['18K Gold or Sterling Silver', 'Certified natural gemstone', '0.5–1 carat centre stone', 'Elegant gift packaging', 'Lifetime authenticity certificate'],
            why: 'A timeless, ready-to-gift piece with certification included.',
            examples: ['Emerald Halo Ring | 18K Gold', 'Sapphire Solitaire | Sterling Silver']
        },
        engagement: {
            title: 'Engagement Ring',
            specs: ['Platinum or 18K white gold', 'Certified diamond or gemstone centre stone', '1–2 carat total weight', 'GIA/IGI certification', 'Resizable band'],
            why: 'Built to be worn daily for a lifetime, with premium metal and a certified centre stone.',
            examples: ['Diamond Solitaire | Platinum', 'Emerald Halo Ring | 18K White Gold']
        },
        everyday: {
            title: 'Everyday Ring',
            specs: ['Sterling Silver or 14K Gold', 'Semi-precious gemstone', 'Comfort-fit band', 'Tarnish-resistant finish', 'Lightweight design'],
            why: 'Durable, comfortable, and easy to style with daily outfits.',
            examples: ['Amethyst Band Ring | Sterling Silver', 'Citrine Stack Ring | 14K Gold']
        }
    },
    necklace: {
        gift: {
            title: 'Gift Necklace',
            specs: ['Rose Gold or Sterling Silver chain', 'Certified gemstone pendant', 'Adjustable 16"–18" chain', 'Gift box with authenticity card', 'Elegant presentation'],
            why: 'A polished, ready-to-gift piece that suits most occasions.',
            examples: ['Ruby Drop Pendant | Rose Gold', 'Sapphire Pendant | Sterling Silver']
        },
        engagement: {
            title: 'Special Occasion Necklace',
            specs: ['18K Gold or Platinum', 'Certified gemstone or diamond cluster', 'Statement length', 'Matching earrings available', 'Certificate of authenticity'],
            why: 'A striking centrepiece designed for milestone occasions.',
            examples: ['Diamond Cluster Necklace | 18K Gold', 'Emerald Statement Necklace | Platinum']
        },
        everyday: {
            title: 'Everyday Necklace',
            specs: ['Sterling Silver or Gold Vermeil', 'Delicate pendant', '16" chain, adjustable', 'Tarnish-resistant coating', 'Lightweight, all-day comfort'],
            why: 'Simple and durable enough to wear every day without fuss.',
            examples: ['Pearl Pendant | Gold Vermeil', 'Moonstone Necklace | Sterling Silver']
        }
    },
    bracelet: {
        gift: {
            title: 'Gift Bracelet',
            specs: ['Sterling Silver or Rose Gold', 'Certified gemstone accents', 'Adjustable clasp', 'Gift box included', 'Authenticity card'],
            why: 'An elegant, presentation-ready piece for any gifting occasion.',
            examples: ['Ruby Bangle | Rose Gold', 'Charm Bracelet | Sterling Silver']
        },
        engagement: {
            title: 'Statement Bracelet',
            specs: ['18K Gold or Platinum', 'Certified diamonds or gemstones', 'Tennis or cuff style', 'Secure double-clasp', 'Certificate of authenticity'],
            why: 'A refined statement piece to mark a special milestone.',
            examples: ['Diamond Tennis Bracelet | 18K White Gold', 'Emerald Cuff | Platinum']
        },
        everyday: {
            title: 'Everyday Bracelet',
            specs: ['Sterling Silver or Gold Vermeil', 'Lightweight chain or bangle', 'Adjustable fit', 'Tarnish-resistant finish', 'Stackable design'],
            why: 'Comfortable and durable for daily wear, easy to stack and style.',
            examples: ['Bead Bangle | Gold Vermeil', 'Chain Bracelet | Sterling Silver']
        }
    }
};

function escapeHtml(str) {
    return String(str).replace(/[&<>]/g, c => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;' }[c]));
}
function scrollChat(chatEl) {
    if (chatEl) chatEl.scrollTop = chatEl.scrollHeight;
}
function appendOut(chatEl, text) {
    if (!chatEl) return;
    const div = document.createElement('div');
    div.style.cssText = 'display:flex;flex-direction:column;align-items:flex-end;';
    div.innerHTML = `<div class="lc-wa-msg-out">${escapeHtml(text)}</div><div class="lc-wa-msg-time" style="text-align:right;">You · Now</div>`;
    chatEl.appendChild(div);
    scrollChat(chatEl);
}
function appendBot(chatEl, html) {
    if (!chatEl) return;
    const div = document.createElement('div');
    div.className = 'lc-wa-msg-in';
    div.innerHTML = html;
    chatEl.appendChild(div);
    scrollChat(chatEl);
}
function appendWidget(chatEl, title, options, step) {
    if (!chatEl) return;
    const wrap = document.createElement('div');
    wrap.className = 'lc-wa-widget';
    const btns = options.map(o => `<button type="button" class="lc-wa-opt" data-step="${step}" data-value="${o.value}">${o.label}</button>`).join('');
    wrap.innerHTML = `<div class="lc-wa-msg-in">${title}</div><div class="lc-wa-widget-actions">${btns}</div>`;
    chatEl.appendChild(wrap);
    scrollChat(chatEl);
}
function openExternalWa(text) {
    if (!text) return;
    setTimeout(() => window.open(`https://wa.me/${WA_NUM}?text=${encodeURIComponent(text)}`, '_blank'), 450);
}
function startWaFlow(chatEl) {
    if (!chatEl || chatEl.dataset.waFlowStarted === '1') return;
    chatEl.dataset.waFlowStarted = '1';
    chatEl.dataset.waStep = 'type';
    appendWidget(chatEl, 'What kind of product do you want?', waFlow.types, 'type');
}
function resetWaFlow(chatEl) {
    if (!chatEl) return;
    delete chatEl.dataset.waStep;
    delete chatEl.dataset.waType;
    delete chatEl.dataset.waTypeLabel;
    delete chatEl.dataset.waCategory;
    delete chatEl.dataset.waCategoryLabel;
    delete chatEl.dataset.waUse;
    delete chatEl.dataset.waUseLabel;
    chatEl.dataset.waFlowStarted = '0';
    startWaFlow(chatEl);
}
function buildSuggestionHtml(type, use, categoryLabel) {
    const data = (waSuggestions[type] && waSuggestions[type][use]) || waSuggestions.ring[use];
    const specList = data.specs.map(s => `- ${s}`).join('<br>');
    const exList = data.examples.map(s => `- ${s}`).join('<br>');
    const catLine = categoryLabel ? `Category: ${categoryLabel}<br>` : '';
    return `<strong>Best match</strong><br>${catLine}<strong>Recommended specs</strong><br>${specList}<br><strong>Why this is best</strong><br>${data.why}<br><strong>Example pieces</strong><br>${exList}`;
}
function handleWaChoice(chatEl, step, value, label) {
    if (!chatEl) return;
    if (label) appendOut(chatEl, label);

    if (step === 'type') {
        chatEl.dataset.waType = value;
        chatEl.dataset.waTypeLabel = label;
        chatEl.dataset.waStep = 'category';

        if (value === 'custom') {
            appendBot(chatEl, 'Custom orders get dedicated attention. Share your design idea, budget, and gemstone preference, or tap below to talk to an agent.');
            appendWidget(chatEl, 'Custom order options', [
                { value: 'agent', label: 'Talk to agent on WhatsApp' },
                { value: 'restart', label: 'Start over' }
            ], 'custom');
            return;
        }

        const cats = waFlow.categories[value] || waFlow.categories.ring;
        appendWidget(chatEl, 'Choose a category', cats, 'category');
        return;
    }

    if (step === 'category') {
        chatEl.dataset.waCategory = value;
        chatEl.dataset.waCategoryLabel = label;
        chatEl.dataset.waStep = 'use';
        appendWidget(chatEl, 'What will you use it for?', waFlow.uses, 'use');
        return;
    }

    if (step === 'use') {
        chatEl.dataset.waUse = value;
        chatEl.dataset.waUseLabel = label;
        const type = chatEl.dataset.waType || 'ring';
        const catLabel = chatEl.dataset.waCategoryLabel || '';
        appendBot(chatEl, buildSuggestionHtml(type, value, catLabel));
        appendWidget(chatEl, 'Want exact stock and price?', [
            { value: 'quote', label: 'Get WhatsApp quote' },
            { value: 'restart', label: 'Start over' }
        ], 'cta');
        return;
    }

    if (step === 'custom') {
        if (value === 'agent') {
            openExternalWa('Hi Niles & Sinai! I need a custom order. Please share your design details, gemstone preference, and budget.');
        } else if (value === 'restart') {
            resetWaFlow(chatEl);
        }
        return;
    }

    if (step === 'cta') {
        if (value === 'quote') {
            const typeLabel = chatEl.dataset.waTypeLabel || 'Ring';
            const catLabel = chatEl.dataset.waCategoryLabel || 'Classic';
            const useLabel = chatEl.dataset.waUseLabel || 'Everyday Wear';
            openExternalWa(`Hi Niles & Sinai! I need a ${typeLabel} (${catLabel}) for ${useLabel}. Please share current stock and price.`);
        } else if (value === 'restart') {
            resetWaFlow(chatEl);
        }
    }
}

document.addEventListener('click', e => {
    const btn = e.target.closest('.lc-wa-opt');
    if (!btn) return;
    const chatEl = btn.closest('.lc-wa-chat');
    const step = btn.dataset.step;
    const value = btn.dataset.value;
    const label = btn.textContent.trim();
    const group = btn.closest('.lc-wa-widget-actions');
    if (group) group.querySelectorAll('button').forEach(b => { b.disabled = true; b.classList.add('is-picked'); });
    handleWaChoice(chatEl, step, value, label);
});

function toggleWaPanel() {
    const open = waPanel.classList.toggle('is-open');
    waFab && waFab.setAttribute('aria-expanded', open);
    if (open && waTip) { waTip.style.display = 'none'; }
    if (open) startWaFlow(waChat);
}
function isMobileView() {
    return window.matchMedia('(max-width: 900px)').matches;
}
function openWa() {
    if (isMobileView() && bsWa) {
        openSheet(bsWa);
        startWaFlow(waChatMob);
        waInputMob && waInputMob.focus();
        updateKbInset();
        return;
    }
    toggleWaPanel();
}
if (waFab)        waFab.addEventListener('click', openWa);
if (waTip)        waTip.addEventListener('click', openWa);
if (waPanelClose) waPanelClose.addEventListener('click', () => { waPanel.classList.remove('is-open'); waFab && waFab.setAttribute('aria-expanded', false); });

function sendWaMsg(text, inputEl, chatEl) {
    if (!text) {
        text = inputEl ? inputEl.value.trim() : '';
    }
    if (!text) return;
    if (chatEl) appendOut(chatEl, text);
    if (inputEl) inputEl.value = '';
    openExternalWa(text);
}

if (waSend)  waSend.addEventListener('click', () => sendWaMsg('', waInput, waChat));
if (waInput) waInput.addEventListener('keypress', e => { if (e.key === 'Enter') sendWaMsg('', waInput, waChat); });
if (waSendMob)  waSendMob.addEventListener('click', () => sendWaMsg('', waInputMob, waChatMob));
if (waInputMob) waInputMob.addEventListener('keypress', e => { if (e.key === 'Enter') sendWaMsg('', waInputMob, waChatMob); });
bindKbInput(waInput, waChat);
bindKbInput(waInputMob, waChatMob);

// Quick reply chips
window.lcWaQuickReply = function(btn, text) {
    btn.style.opacity = '.5';
    btn.disabled = true;
    const isMobileTarget = btn && btn.closest && btn.closest('#lcBsWa');
    const chatEl = isMobileTarget ? waChatMob : waChat;
    startWaFlow(chatEl);
    if (text && text.indexOf('type:') === 0) {
        const typeVal = text.split(':')[1];
        handleWaChoice(chatEl, 'type', typeVal, btn.textContent.trim());
        return;
    }
    appendOut(chatEl, text);
};

/* ══════════════════════════════════════════════
   9. KEYBOARD ACCESS
══════════════════════════════════════════════ */
document.addEventListener('keydown', e => {
    if (e.key !== 'Escape') return;
    closeDkCart(); closeSheets();
    if (searchPop)  searchPop.classList.remove('is-open');
    if (ddMenu)     ddMenu.classList.remove('is-open');
    if (waPanel)    waPanel.classList.remove('is-open');
});

/* ══════════════════════════════════════════════
   10. ACTIVE LINK AUTO-DETECT
══════════════════════════════════════════════ */
(function detectActive() {
    const path = window.location.pathname;
    $$('.lc-nav-link, .lc-dock-link').forEach(a => {
        const h = a.getAttribute('href');
        if (!h) return;
        const isHome = h === '/' && path === '/';
        const isOther = h !== '/' && path.startsWith(h);
        if (isHome || isOther) a.classList.add('active');
    });
})();

})(); // END IIFE
</script>