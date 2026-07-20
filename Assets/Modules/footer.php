<?php

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
/* ═══════════════════════════════════════════════════════════
   GLOBAL FOOTER — DARK ANCHOR ARCHITECTURE
═══════════════════════════════════════════════════════════ */
:root {
    --ft-pad-y: clamp(60px, 8vh, 100px);
    --ft-pad-x: clamp(20px, 6vw, 100px);
}

.lc-footer-section {
    background-color: var(--lap-dark-section, #181512);
    color: var(--lap-bg-pure, #FAF8F4);
    padding: var(--ft-pad-y) var(--ft-pad-x) 20px var(--ft-pad-x);
    position: relative;
    overflow: hidden;
    font-family: var(--lap-font-main, 'Manrope', sans-serif);
}

/* --- Animated Ambient Background --- */
.lc-ft-ambient {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
    overflow: hidden;
}

.lc-ft-grid-overlay {
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
    background-size: 30px 30px;
    mask-image: linear-gradient(to bottom, transparent, black 80%);
    -webkit-mask-image: linear-gradient(to bottom, transparent, black 80%);
}

.lc-ft-glow {
    position: absolute;
    border-radius: 50%;
    background-color: var(--lap-neon-accent, #0F6B5B);
    filter: blur(80px);
    opacity: 0.08;
    animation: ftFloatGlow 12s infinite alternate ease-in-out;
}
.lc-ft-glow-1 { width: 300px; height: 300px; bottom: -100px; left: -100px; }
.lc-ft-glow-2 { width: 250px; height: 250px; top: 0; right: 10%; animation-delay: -5s; opacity: 0.05; }

@keyframes ftFloatGlow {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(50px, -30px) scale(1.2); }
}

/* --- Main Footer Grid --- */
.lc-footer-content {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1.5fr;
    gap: clamp(30px, 4vw, 60px);
    margin-bottom: 60px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 60px;
}

/* 1. Brand Column */
.lc-ft-brand-col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.lc-ft-logo {
    font-size: 2.2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: -0.5px;
    color: var(--lap-bg-pure, #FAF8F4);
    text-decoration: none;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 4px;
    font-family: var(--lap-font-heading, 'Cormorant Garamond', serif);
}
.lc-ft-logo em {
    font-style: normal;
    color: var(--lap-neon-accent, #0F6B5B);
}

.lc-ft-desc {
    font-size: 0.95rem;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 24px;
    max-width: 320px;
}

/* Social Icons (FontAwesome) */
.lc-ft-socials {
    display: flex;
    gap: 12px;
}

.lc-social-btn {
    width: 40px;
    height: 40px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--lap-radius-slight, 4px);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--lap-bg-pure, #FAF8F4);
    text-decoration: none;
    font-size: 1.1rem;
    background-color: transparent;
    transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
}

.lc-social-btn:hover {
    background-color: rgba(15,107,91,0.1);
    border-color: var(--lap-neon-accent, #0F6B5B);
    color: var(--lap-neon-accent, #0F6B5B);
    transform: translateY(-4px);
    box-shadow: 0 6px 15px rgba(15,107,91,0.15);
}

/* 2 & 3. Link Columns */
.lc-ft-heading {
    font-size: 1.1rem;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--lap-bg-pure, #FAF8F4);
    margin-bottom: 24px;
    letter-spacing: 1px;
    font-family: var(--lap-font-heading, 'Cormorant Garamond', serif);
}

.lc-ft-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.lc-ft-link {
    color: rgba(255, 255, 255, 0.65);
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
}

.lc-ft-link::before {
    content: '\f105'; /* FontAwesome Angle Right */
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    font-size: 0.75rem;
    margin-right: 8px;
    color: var(--lap-neon-accent, #0F6B5B);
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.3s ease;
}

.lc-ft-link:hover {
    color: var(--lap-neon-accent, #0F6B5B);
    transform: translateX(4px);
}

.lc-ft-link:hover::before {
    opacity: 1;
    transform: translateX(0);
}

/* 4. Newsletter Column */
.lc-ft-newsletter p {
    font-size: 0.9rem;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 20px;
}

.lc-ft-form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.lc-ft-input {
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 14px 16px;
    border-radius: var(--lap-radius-slight, 4px);
    color: #FFFFFF;
    font-family: inherit;
    font-size: 0.9rem;
    outline: none;
    transition: border-color 0.3s ease, background-color 0.3s ease;
}

.lc-ft-input::placeholder {
    color: rgba(255, 255, 255, 0.4);
}

.lc-ft-input:focus {
    border-color: var(--lap-neon-accent, #0F6B5B);
    background-color: rgba(255, 255, 255, 0.1);
}

.lc-ft-submit {
    background-color: var(--lap-neon-accent, #0F6B5B);
    color: var(--lap-text-dark, #1F1A17);
    border: none;
    padding: 14px 24px;
    font-family: inherit;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: var(--lap-radius-slight, 4px);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.lc-ft-submit:hover {
    background-color: var(--lap-hover-accent, #167B67);
    transform: translateY(-2px);
}
.lc-ft-submit i {
    transition: transform 0.3s ease;
}
.lc-ft-submit:hover i {
    transform: translateX(4px);
}

/* --- Bottom Bar --- */
.lc-footer-bottom {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.lc-ft-copyright {
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.5);
}

.lc-ft-credit {
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.6);
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 6px;
    background-color: rgba(255, 255, 255, 0.05);
    padding: 8px 16px;
    border-radius: 50px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.lc-ft-credit i {
    color: #C8A75A; /* Gold accent */
    font-size: 1rem;
    animation: coffeeSteam 3s infinite ease-in-out;
}

.lc-ft-credit strong {
    color: var(--lap-neon-accent, #0F6B5B);
}

@keyframes coffeeSteam {
    0% { transform: translateY(0) rotate(0deg); opacity: 1; }
    50% { transform: translateY(-3px) rotate(10deg); opacity: 0.7; }
    100% { transform: translateY(0) rotate(0deg); opacity: 1; }
}

/* ═══════════════════════════════════════════════════════════
   RESPONSIVE LAYOUT
═══════════════════════════════════════════════════════════ */
@media (max-width: 1024px) {
    .lc-footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
    .lc-ft-brand-col {
        grid-column: span 2;
    }
}

@media (max-width: 767px) {
    .lc-footer-content {
        grid-template-columns: 1fr;
        gap: 45px;
        padding-bottom: 40px;
    }
    .lc-ft-brand-col {
        grid-column: span 1;
    }
    .lc-footer-bottom {
        flex-direction: column;
        text-align: center;
        justify-content: center;
    }
    .lc-ft-credit {
        width: 100%;
        justify-content: center;
    }
}
</style>

<footer class="lc-footer-section">
    
    <div class="lc-ft-ambient">
        <div class="lc-ft-grid-overlay"></div>
        <div class="lc-ft-glow lc-ft-glow-1"></div>
        <div class="lc-ft-glow lc-ft-glow-2"></div>
    </div>

    <div class="lc-footer-content">
        
        <div class="lc-ft-brand-col">
            <a href="/" class="lc-ft-logo">Niles<em> &amp; Sinai</em></a>
            <p class="lc-ft-desc">Certified natural gemstones and handcrafted fine jewellery, designed to be treasured for generations. Every piece is expertly crafted and authenticated.</p>
            
            <div class="lc-ft-socials">
                <a href="#" class="lc-social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="lc-social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="lc-social-btn" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="lc-social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div>
            <h3 class="lc-ft-heading">Shop</h3>
            <ul class="lc-ft-links">
                <li><a href="/store" class="lc-ft-link">All Jewellery</a></li>
                <li><a href="/students" class="lc-ft-link">New Arrivals</a></li>
                <li><a href="/bulk" class="lc-ft-link">Custom Orders</a></li>
                <li><a href="/accessories" class="lc-ft-link">Gemstone Collections</a></li>
            </ul>
        </div>

        <div>
            <h3 class="lc-ft-heading">Support</h3>
            <ul class="lc-ft-links">
                <li><a href="/track-order" class="lc-ft-link">Track Order</a></li>
                <li><a href="/warranty" class="lc-ft-link">Authenticity Certificate</a></li>
                <li><a href="/returns" class="lc-ft-link">Returns & Refunds</a></li>
                <li><a href="/contact" class="lc-ft-link">Jewellery Concierge</a></li>
            </ul>
        </div>

        <div class="lc-ft-newsletter">
            <h3 class="lc-ft-heading">Stay Updated</h3>
            <p>Be the first to discover new collections, private previews, and exclusive gemstone offers.</p>
            <form action="" method="POST" class="lc-ft-form">
                <input type="email" class="lc-ft-input" placeholder="Enter your email address" required>
                <button type="submit" class="lc-ft-submit">
                    Subscribe <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>

    </div>

    <div class="lc-footer-bottom">
        <div class="lc-ft-copyright">
            &copy; 2026 Niles &amp; Sinai. All Rights Reserved.
        </div>
        
        <div class="lc-ft-credit">
            Developed With <i class="fas fa-coffee"></i> By <strong>Mayank (Privonix Technologies)</strong>
        </div>
    </div>

</footer>