<?php
/**
 * ==========================================================================
 * © 2026 Niles & Sinai TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /Assets/Website/Contents/Landing/LC-BL-007.php
 * VERSION:    1.0.0
 * THEME:      Neon Edge (Cyberpunk) Light
 * DEPENDS ON: base.css + nav.php
 * SECTION:    Premium Intelligence Deck / Blog Carousel
 * ==========================================================================
 */

$blogPosts = [
    [
        'id' => 'post-01',
        'date' => 'APRIL 19 , 2026',
        'category' => 'Craftsmanship',
        'title' => 'The GIA Grading Process: How We Certify Every Diamond',
        'desc' => 'An inside look at our strict grading pipeline, from the 4Cs assessment to the final certificate of authenticity.',
        'img' => 'https://images.unsplash.com/photo-1605100804763-247f67b3557e?auto=format&fit=crop&w=800&q=80',
        'read_time' => '5 MIN READ'
    ],
    [
        'id' => 'post-02',
        'date' => 'MAY 04 , 2026',
        'category' => 'Style Guide',
        'title' => 'Why Rose Gold Settings Are Essential for Warm Skin Tones',
        'desc' => 'Breaking down metal undertones and how we pair gemstone colour profiles with the right setting for a flattering finish.',
        'img' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?auto=format&fit=crop&w=800&q=80',
        'read_time' => '7 MIN READ'
    ],
    [
        'id' => 'post-03',
        'date' => 'MAY 18 , 2026',
        'category' => 'Sourcing',
        'title' => 'Ethical Sourcing: The Sustainable Alternative to Conflict Gemstones',
        'desc' => 'How responsible sourcing partnerships keep every stone traceable from mine to setting, without compromising on quality.',
        'img' => 'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=800&q=80',
        'read_time' => '4 MIN READ'
    ],
    [
        'id' => 'post-04',
        'date' => 'MAY 25 , 2026',
        'category' => 'Care Guide',
        'title' => 'Caring For Fine Jewellery: Cleaning, Storage, and Everyday Wear',
        'desc' => 'A comprehensive guide covering safe cleaning methods, proper storage, and how to protect your gemstones from daily wear.',
        'img' => 'https://images.unsplash.com/photo-1599643477877-530eb83abc8e?auto=format&fit=crop&w=800&q=80',
        'read_time' => '9 MIN READ'
    ]
];
?>
<script src="https://unpkg.com/lucide@latest"></script>

<style>
/* ═══════════════════════════════════════════════════════════
   INTELLIGENCE DECK (BLOGS) — LOCAL VARIANT TOKENS
═══════════════════════════════════════════════════════════ */
:root {
    --bl-pad-y: clamp(60px, 9vh, 120px);
    --bl-pad-x: clamp(20px, 5vw, 80px);
    --bl-card-w: 380px;
}

.lc-bl-section {
    background-color: var(--lap-bg-pure);
    padding: var(--bl-pad-y) var(--bl-pad-x);
    border-bottom: 1px solid var(--lap-border-color);
    position: relative;
    overflow: hidden;
}

/* Structural Header & Control Alignment */
.lc-bl-top-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: clamp(40px, 6vh, 70px);
}

.lc-bl-title-group {
    max-width: 600px;
}

.lc-bl-tagline {
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--lap-text-dark);
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 12px;
}

.lc-bl-tagline::before {
    content: '';
    display: inline-block;
    width: 6px;
    height: 6px;
    background-color: var(--lap-neon-accent);
    border: 1px solid var(--lap-text-dark);
}

.lc-bl-main-title {
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    font-weight: 700;
    line-height: 1.1;
    text-transform: uppercase;
}

/* Premium Control Mechanics */
.lc-bl-controls {
    display: flex;
    gap: 12px;
}

.lc-bl-arrow {
    width: 52px;
    height: 52px;
    background-color: var(--lap-bg-pure);
    border: 2px solid var(--lap-text-dark);
    border-radius: var(--lap-radius-slight);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 3px 3px 0px var(--lap-text-dark);
    transition: transform 0.2s var(--lap-ease-smooth), box-shadow 0.2s var(--lap-ease-smooth), background-color 0.2s ease;
    user-select: none;
}

.lc-bl-arrow:hover {
    background-color: var(--lap-text-dark);
    color: var(--lap-neon-accent);
    box-shadow: 3px 3px 0px var(--lap-neon-accent);
}

.lc-bl-arrow:active {
    transform: translate(2px, 2px);
    box-shadow: 1px 1px 0px var(--lap-neon-accent);
}

/* Viewport Frame Slider Setup */
.lc-bl-slider-container {
    width: 100%;
    overflow-x: auto;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
    padding-bottom: 25px;
    margin-bottom: -25px;
}

.lc-bl-slider-container::-webkit-scrollbar {
    display: none;
}

.lc-bl-track {
    display: flex;
    gap: 30px;
    width: max-content;
}

/* Premium Intel Card Architecture */
.lc-bl-card {
    width: var(--bl-card-w);
    background-color: var(--lap-bg-pure);
    border: 2px solid var(--lap-text-dark);
    border-radius: var(--lap-radius-slight);
    scroll-snap-align: start;
    display: flex;
    flex-direction: column;
    position: relative;
    box-shadow: 5px 5px 0px var(--lap-text-dark);
    transition: transform 0.4s var(--lap-ease-smooth), box-shadow 0.4s var(--lap-ease-smooth);
}

.lc-bl-card:hover {
    transform: translateY(-6px);
    box-shadow: 10px 10px 0px var(--lap-neon-accent);
}

/* Media Frame Layer & Unique Hover Physics */
.lc-bl-img-frame {
    width: 100%;
    height: 230px;
    position: relative;
    overflow: hidden;
    background-color: var(--lap-text-dark);
    border-bottom: 2px solid var(--lap-text-dark);
}

.lc-bl-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1), filter 0.4s ease;
    filter: grayscale(0.2) contrast(1.05);
}

.lc-bl-card:hover .lc-bl-img {
    transform: scale(1.08) rotate(1deg);
    filter: grayscale(0) contrast(1.1);
}

/* Cyber Acquisition Targets & Matrix Overlay Layer */
.lc-bl-target-layer {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 2;
    opacity: 0;
    transition: opacity 0.3s ease;
    background: linear-gradient(rgba(200,167,90,0.03) 50%, rgba(31,26,23,0.05) 50%);
    background-size: 100% 4px;
}

.lc-bl-card:hover .lc-bl-target-layer {
    opacity: 1;
}

/* Decorative Framing Crosshairs */
.lc-bl-target-layer::before,
.lc-bl-target-layer::after {
    content: '';
    position: absolute;
    width: 14px;
    height: 14px;
    border-color: var(--lap-neon-accent);
    border-style: solid;
    transition: transform 0.4s var(--lap-ease-smooth);
}

.lc-bl-target-layer::before {
    top: 15px; left: 15px;
    border-width: 2px 0 0 2px;
    transform: translate(-5px, -5px);
}

.lc-bl-target-layer::after {
    bottom: 15px; right: 15px;
    border-width: 0 2px 2px 0;
    transform: translate(5px, 5px);
}

.lc-bl-card:hover .lc-bl-target-layer::before,
.lc-bl-card:hover .lc-bl-target-layer::after {
    transform: translate(0, 0);
}

/* Interactive Floating Date Badge */
.lc-bl-date-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: var(--lap-text-dark);
    color: var(--lap-bg-pure);
    padding: 6px 14px;
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 1px;
    border: 1px solid var(--lap-neon-accent);
    box-shadow: 3px 3px 0px var(--lap-neon-accent);
    z-index: 3;
    border-radius: var(--lap-radius-slight);
}
.lucide {
    width: 1.2em;
    height: 1.2em;
    stroke-width: 2.2;
    vertical-align: middle;
    display: inline-block;
    transition: var(--lap-transition-fast);
}
/* Card Content Blocks */
.lc-bl-content {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.lc-bl-meta-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
}

.lc-bl-category {
    font-size: 0.7rem;
    font-weight: 700;
    color: var(--lap-text-dark);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    background-color: rgba(200,167,90,0.15);
    padding: 3px 8px;
    border-left: 3px solid var(--lap-neon-accent);
}

.lc-bl-runtime {
    font-size: 0.65rem;
    font-weight: 600;
    color: var(--lap-text-muted);
    letter-spacing: 0.5px;
}

.lc-bl-card-title {
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.3;
    color: var(--lap-text-dark);
    margin-bottom: 12px;
    text-transform: uppercase;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.lc-bl-desc {
    font-size: 0.85rem;
    line-height: 1.5;
    color: var(--lap-text-muted);
    margin-bottom: 24px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Action Trigger Link Overlay styles */
.lc-bl-link-block {
    margin-top: auto;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--lap-text-dark);
    text-decoration: none;
    width: max-content;
}

.lc-bl-link-block svg {
    transition: transform 0.3s var(--lap-ease-smooth);
}

.lc-bl-link-block:hover svg {
    transform: translateX(6px);
}

/* ═══════════════════════════════════════════════════════════
   RESPONSIVE DESIGN BREAKPOINTS
═══════════════════════════════════════════════════════════ */
@media (max-width: 991px) {
    :root {
        --bl-card-w: 340px;
    }
    .lc-bl-top-row {
        margin-bottom: 35px;
    }
}

@media (max-width: 767px) {
    .lc-bl-top-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }
    .lc-bl-controls {
        width: 100%;
        justify-content: flex-end;
    }
    .lc-bl-track {
        gap: 16px;
        padding-left: 0;
    }
    .lc-bl-card {
        scroll-snap-align: center;
    }
}
</style>

<section class="lc-bl-section" id="lcIntelDeckSection">
    <div class="lc-bl-top-row">
        <div class="lc-bl-title-group">
            <div class="lc-bl-tagline">Tech Talks</div>
            <h2 class="lc-bl-main-title">Read Articles</h2>
        </div>
        
        <div class="lc-bl-controls">
            <button class="lc-bl-arrow" id="lcBlPrev" aria-label="Slide Deck Left">
                <i data-lucide="arrow-left" class="lucide"></i>
            </button>
            <button class="lc-bl-arrow" id="lcBlNext" aria-label="Slide Deck Right">
                <i data-lucide="arrow-right" class="lucide"></i>
            </button>
        </div>
    </div>

    <div class="lc-bl-slider-container" id="lcBlSlider">
        <div class="lc-bl-track">
            <?php foreach ($blogPosts as $post): ?>
                <article class="lc-bl-card" data-post-id="<?= $post['id'] ?>">
                    <div class="lc-bl-img-frame">
                        <img src="<?= $post['img'] ?>" class="lc-bl-img" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy">
                        
                        <div class="lc-bl-target-layer"></div>
                        
                        <div class="lc-bl-date-badge"><?= $post['date'] ?></div>
                    </div>

                    <div class="lc-bl-content">
                        <div class="lc-bl-meta-row">
                            <span class="lc-bl-category"><?= htmlspecialchars($post['category']) ?></span>
                            <span class="lc-bl-runtime"><?= $post['read_time'] ?></span>
                        </div>
                        
                        <h3 class="lc-bl-card-title"><?= htmlspecialchars($post['title']) ?></h3>
                        <p class="lc-bl-desc"><?= htmlspecialchars($post['desc']) ?></p>
                        
                    <a href="/blog/view?id=<?= $post['id'] ?>" class="lc-bl-link-block">
                        <span>Initialize Read</span>
                        <i data-lucide="arrow-up-right" class="lucide" style="width: 1.1em; height: 1.1em;"></i>
                    </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
(function() {
    'use strict';

    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById('lcBlSlider');
        const btnPrev = document.getElementById('lcBlPrev');
        const btnNext = document.getElementById('lcBlNext');

        if (!slider || !btnPrev || !btnNext) return;

        // Dynamic metrics extraction handler based on live document state
        const getScrollStep = () => {
            const card = slider.querySelector('.lc-bl-card');
            if (card) {
                // Return exact base card width plus layout gap dimensions
                return card.offsetWidth + 30;
            }
            return 410; // High quality fallback default matrix constant
        };

        // Click Handling Interactivity Curves
        btnNext.addEventListener('click', () => {
            slider.scrollLeft += getScrollStep();
        });

        btnPrev.addEventListener('click', () => {
            slider.scrollLeft -= getScrollStep();
        });

        // Smart Adaptive Edge Tracker for Controller State Management
        const toggleArrowVisibility = () => {
            const currentScroll = Math.ceil(slider.scrollLeft);
            const maxScroll = slider.scrollWidth - slider.clientWidth;

            // Handle micro-state tolerances safely without jarring transparency dropouts
            btnPrev.style.opacity = currentScroll <= 2 ? '0.4' : '1';
            btnPrev.style.pointerEvents = currentScroll <= 2 ? 'none' : 'auto';

            btnNext.style.opacity = currentScroll >= maxScroll - 2 ? '0.4' : '1';
            btnNext.style.pointerEvents = currentScroll >= maxScroll - 2 ? 'none' : 'auto';
        };

        // Mount listeners to evaluate placement matrices cleanly across frame steps
        slider.addEventListener('scroll', toggleArrowVisibility);
        window.addEventListener('resize', toggleArrowVisibility);
        
        // Initial setup validation check trigger pass
        setTimeout(toggleArrowVisibility, 150);
    });
})();
</script>