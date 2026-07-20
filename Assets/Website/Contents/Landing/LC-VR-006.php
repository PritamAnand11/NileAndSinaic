<?php
/**
 * ==========================================================================
 * © 2026 Niles & Sinai TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /Assets/Website/Contents/Landing/LC-VR-006.php
 * VERSION:    1.0.0
 * THEME:      Neon Edge (Cyberpunk) Light
 * DEPENDS ON: base.css + nav.php
 * SECTION:    Video Testimonials / User Reviews Wall
 * ==========================================================================
 */

// Placeholder review deck — easily swap with Database or JSON strings later
$videoReviews = [
    [
        'id' => 'vr-01',
        'username' => '@aanya_gold',
        'verified' => true,
        'rating' => 5,
        'tag' => 'Solitaire Ring',
        'comment' => 'Absolutely stunning craftsmanship. The GIA certificate arrived with the ring — the diamond is even more brilliant in person.',
        'video_src' => '', // Add paths later via JS or directly here
        'poster' => 'https://images.unsplash.com/photo-1605100804763-247f67b3557e?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'id' => 'vr-02',
        'username' => '@karan_weds',
        'verified' => true,
        'rating' => 5,
        'tag' => 'Engagement Set',
        'comment' => 'Saved almost ₹40k compared to the showroom and the finish is identical to a brand-new piece.',
        'video_src' => '',
        'poster' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'id' => 'vr-03',
        'username' => '@dev_sharma',
        'verified' => true,
        'rating' => 4,
        'tag' => 'Emerald Necklace',
        'comment' => 'The certification process is no joke. The setting is sturdy and holds up beautifully to daily wear.',
        'video_src' => '',
        'poster' => 'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'id' => 'vr-04',
        'username' => '@neha_shines',
        'verified' => true,
        'rating' => 5,
        'tag' => 'Custom Pendant',
        'comment' => 'The design consultation was seamless and the final piece exceeded what I imagined. The packaging felt genuinely luxurious.',
        'video_src' => '',
        'poster' => 'https://images.unsplash.com/photo-1599643477877-530eb83abc8e?auto=format&fit=crop&w=500&q=80'
    ]
];
?>

<style>
/* ═══════════════════════════════════════════════════════════
   VIDEO REVIEWS — LOCAL TOKENS 
═══════════════════════════════════════════════════════════ */
:root {
    --vr-pad-y: clamp(60px, 8vh, 110px);
    --vr-pad-x: clamp(20px, 5vw, 80px);
    --vr-card-ratio: 9 / 16; /* True mobile vertical orientation format */
}

.lc-vr-section {
    background-color: var(--lap-bg-pure);
    padding: var(--vr-pad-y) var(--vr-pad-x);
    border-bottom: 1px solid var(--lap-border-color);
    position: relative;
    overflow: hidden;
    margin-top: -40px; 
}

.lc-vr-header-block {
    margin-bottom: clamp(35px, 5vh, 60px);
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    gap: 20px;
}

.lc-vr-headline-group {
    max-width: 600px;
}

.lc-vr-subtitle {
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--lap-text-dark);
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
}

.lc-vr-subtitle::before {
    content: '';
    display: inline-block;
    width: 8px;
    height: 8px;
    background-color: var(--lap-neon-accent);
    border: 1px solid var(--lap-text-dark);
}

.lc-vr-title {
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    font-weight: 700;
    line-height: 1.1;
    text-transform: uppercase;
}

/* Grid System Layout */
.lc-vr-deck {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    width: 100%;
}

/* Premium Video Card Architecture */
.lc-vr-card {
    background-color: var(--lap-bg-pure);
    border: 2px solid var(--lap-text-dark);
    border-radius: var(--lap-radius-slight);
    position: relative;
    aspect-ratio: var(--vr-card-ratio);
    overflow: hidden;
    box-shadow: 4px 4px 0px var(--lap-text-dark);
    transition: transform 0.4s var(--lap-ease-smooth), box-shadow 0.4s var(--lap-ease-smooth);
}

.lc-vr-card:hover {
    transform: translateY(-6px);
    box-shadow: 8px 8px 0px var(--lap-neon-accent);
}

/* Video Frame Setup */
.lc-vr-media-wrapper {
    width: 100%;
    height: 100%;
    position: relative;
    background-color: #0d0d0d;
}

.lc-vr-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    opacity: 0.85;
    transition: opacity 0.3s ease;
}

.lc-vr-card:hover .lc-vr-video {
    opacity: 1;
}

/* Image Placeholder Base (Visible before video loading handles override) */
.lc-vr-poster {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
    transition: opacity 0.5s ease;
}

.lc-vr-media-wrapper.is-playing .lc-vr-poster {
    opacity: 0;
    pointer-events: none;
}

/* Interface Layers / Controls Overlay */
.lc-vr-layer-top {
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    z-index: 3;
    display: flex;
    justify-content: space-between;
    align-items: center;
    pointer-events: none;
}

.lc-vr-layer-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 3;
    background: linear-gradient(to top, rgba(5,5,5,0.95) 0%, rgba(5,5,5,0.6) 60%, transparent 100%);
    padding: 30px 18px 18px 18px;
    color: #FFFFFF;
}

/* UI Meta Elements inside cards */
.lc-vr-user-badge {
    background: var(--lap-text-dark);
    color: #FFFFFF;
    padding: 4px 10px;
    font-size: 0.75rem;
    font-weight: 600;
    border-radius: var(--lap-radius-slight);
    border: 1px solid rgba(255,255,255,0.15);
    display: flex;
    align-items: center;
    gap: 6px;
    pointer-events: auto;
}

.lc-vr-verified-icon {
    color: var(--lap-neon-accent);
    width: 13px !important;
    height: 13px !important;
}

.lc-vr-audio-control {
    background: rgba(5, 5, 5, 0.7);
    color: #FFFFFF;
    border: 1px solid rgba(255,255,255,0.2);
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    pointer-events: auto;
    transition: var(--lap-transition-fast);
}

.lc-vr-audio-control:hover {
    background: var(--lap-neon-accent);
    color: var(--lap-text-dark);
    border-color: var(--lap-text-dark);
}

.lc-vr-tag {
    font-size: 0.65rem;
    font-weight: 700;
    text-transform: uppercase;
    background: var(--lap-neon-accent);
    color: var(--lap-text-dark);
    padding: 2px 6px;
    display: inline-block;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}

.lc-vr-comment {
    font-size: 0.8rem;
    line-height: 1.4;
    font-weight: 400;
    margin-bottom: 10px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    opacity: 0.9;
}

.lc-vr-stars {
    display: flex;
    gap: 2px;
    color: var(--lap-neon-accent);
}

/* Linear Timeline Progress Bar tracking playback */
.lc-vr-timeline {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    background-color: var(--lap-neon-accent);
    width: 0%;
    z-index: 4;
    transition: width 0.1s linear;
}

/* ═══════════════════════════════════════════════════════════
   RESPONSIVE LAYOUT BREAKPOINTS
═══════════════════════════════════════════════════════════ */
@media (max-width: 1199px) {
    .lc-vr-deck {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 767px) {
    .lc-vr-deck {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        padding-bottom: 15px;
        gap: 16px;
        margin: 0 calc(-1 * var(--vr-pad-x));
        padding-left: var(--vr-pad-x);
        padding-right: var(--vr-pad-x);
        scrollbar-width: none; /* Hide standard scrollbar architecture */
    }
    
    .lc-vr-deck::-webkit-scrollbar {
        display: none;
    }
    
    .lc-vr-card {
        min-width: 280px;
        flex-shrink: 0;
        scroll-snap-align: start;
    }
    
    .lc-vr-header-block {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>

<section class="lc-vr-section" id="lcVideoReviewsSection">
    <div class="lc-vr-header-block">
        <div class="lc-vr-headline-group">
            <div class="lc-vr-subtitle">Real Reviews</div>
            <h2 class="lc-vr-title">Verified Customer Reviews</h2>
        </div>
        <div>
            <span class="badge-cyber animate-pulse-neon">Live Feed</span>
        </div>
    </div>

    <div class="lc-vr-deck">
        <?php foreach ($videoReviews as $review): ?>
            <div class="lc-vr-card" data-review-id="<?= $review['id'] ?>">
                <div class="lc-vr-media-wrapper">
                    <video 
                        class="lc-vr-video" 
                        loop 
                        muted 
                        playsinline 
                        preload="metadata"
                        poster="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                    </video>
                    
                    <img src="<?= $review['poster'] ?>" class="lc-vr-poster" alt="<?= $review['username'] ?> view">
                    
                    <div class="lc-vr-layer-top">
                        <div class="lc-vr-user-badge">
                            <span><?= htmlspecialchars($review['username']) ?></span>
                            <?php if ($review['verified']): ?>
                                <i data-lucide="check-circle-2" class="lc-vr-verified-icon"></i>
                            <?php endif; ?>
                        </div>
                        <button class="lc-vr-audio-control" aria-label="Toggle Audio Volume">
                            <i data-lucide="volume-x" style="width: 14px; height: 14px;"></i>
                        </button>
                    </div>

                    <div class="lc-vr-layer-bottom">
                        <span class="lc-vr-tag"><?= htmlspecialchars($review['tag']) ?></span>
                        <p class="lc-vr-comment">"<?= htmlspecialchars($review['comment']) ?>"</p>
                        
                        <div class="lc-vr-stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <i data-lucide="star" style="width: 12px; height: 12px; fill: <?= $i < $review['rating'] ? 'var(--lap-neon-accent)' : 'none' ?>;"></i>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <div class="lc-vr-timeline"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
(function() {
    'use strict';

    document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll('.lc-vr-card');
        
        // Dynamic Video Source configuration dictionary mapping to IDs
        // drop your video file paths directly right into this object anytime!
        const videoSources = {
            'vr-01': '', // e.g., 'Assets/Videos/review_01.mp4'
            'vr-02': '',
            'vr-03': '',
            'vr-04': ''
        };

        cards.forEach(card => {
            const id = card.dataset.reviewId;
            const wrapper = card.querySelector('.lc-vr-media-wrapper');
            const video = card.querySelector('.lc-vr-video');
            const muteBtn = card.querySelector('.lc-vr-audio-control');
            const timeline = card.querySelector('.lc-vr-timeline');

            if (videoSources[id]) {
                video.src = videoSources[id];
            }

            video.addEventListener('timeupdate', () => {
                if (video.duration) {
                    const percentage = (video.currentTime / video.duration) * 100;
                    timeline.style.width = `${percentage}%`;
                }
            });

            video.addEventListener('playing', () => {
                wrapper.classList.add('is-playing');
            });

            muteBtn.addEventListener('click', (e) => {
                e.stopPropagation(); 
                video.muted = !video.muted;
                
                const icon = muteBtn.querySelector('svg');
                if (video.muted) {
                    muteBtn.innerHTML = '<i data-lucide="volume-x" style="width:14px; height:14px;"></i>';
                } else {
                    muteBtn.innerHTML = '<i data-lucide="volume-2" style="width:14px; height:14px;"></i>';
                }
                
                if (window.lucide) lucide.createIcons({ attrs: { class: 'lucide' } });
            });

            card.addEventListener('mouseenter', () => {
                if (video.src && video.paused) {
                    video.play().catch(() => { /* Standard security safety catcher */ });
                }
            });

            card.addEventListener('mouseleave', () => {
                if (video.src && !video.paused) {
                    video.pause();
                }
            });
        });

        // 2. High Efficiency Performance Viewport Intersection Management Engine
        // This stops performance drops by only running video loops directly inside the viewport frame.
        if ('IntersectionObserver' in window) {
            const videoObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const video = entry.target.querySelector('.lc-vr-video');
                    if (!video || !video.src) return;

                    if (!entry.isIntersecting) {
                        video.pause();
                    } else if (window.innerWidth <= 767) {
                        // On mobile touch configurations, trigger autoplay automatically when standard cards slide center stage
                        video.play().catch(() => {});
                    }
                });
            }, {
                threshold: 0.6 // Card must sit clean inside 60% of focus plane to qualify state triggers, adjust as needed for more aggressive or relaxed triggering based on design preference ( BOOM )
            });

            cards.forEach(card => videoObserver.observe(card));
        }
    });
})();
</script>