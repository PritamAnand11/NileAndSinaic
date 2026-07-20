<?php
/**
 * ==========================================================================
 * © 2026 Niles & Sinai TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /Assets/Website/Contents/Landing/LC-CU-008.php
 * VERSION:    2.2.0 (Premium Studio Stage w/ Ambient Particles)
 * THEME:      Gilded Edge (Luxury Gemstone)
 * DEPENDS ON: base.css + nav.php
 * SECTION:    Founders Showcase Studio
 * ==========================================================================
 */

$founders = [
    'mayank' => [
        'name' => 'Mayank Chawdhari',
        'role' => 'CTO / FOUNDER',
        'img'  => 'Assets/Modules/Images/Team/mayank.png',
        'bio'  => 'Overseeing gemstone certification and craftsmanship quality control. Mayank ensures every piece leaving the Niles & Sinai workshop meets our exacting standard for authenticity and finish.'
    ],
    'jindal' => [
        'name' => 'Priyanshu Jindal',
        'role' => 'CEO / FOUNDER',
        'img'  => 'Assets/Modules/Images/Team/jindal.png',
        'bio'  => 'Driving the vision behind Niles & Sinai to make certified fine jewellery accessible to everyone. Priyanshu focuses on ethical sourcing, fair pricing, and delivering a premium customer experience across India.'
    ]
];
?>

<style>
/* ═══════════════════════════════════════════════════════════
   FOUNDERS SHOWCASE — ADVANCED STUDIO LAYOUT
═══════════════════════════════════════════════════════════ */
:root {
    --fnd-pad-y: clamp(60px, 10vh, 120px);
    --fnd-pad-x: clamp(20px, 6vw, 100px);
}

.lc-founders-section {
    background-color: var(--lap-bg-pure);
    padding: var(--fnd-pad-y) var(--fnd-pad-x);
    border-bottom: 2px solid var(--lap-text-dark);
}

/* --- Header Area --- */
.lc-founders-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 44px;
}

.lc-founders-title p {
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--lap-text-muted);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.lc-founders-title p::before {
    content: '';
    display: block;
    width: 12px;
    height: 4px;
    background-color: var(--lap-neon-accent);
}

.lc-founders-title h2 {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    text-transform: uppercase;
    color: var(--lap-text-dark);
    line-height: 1.1;
}

/* Sovereign Badge */
.lc-fnd-badge {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background-color: var(--lap-bg-pure);
    border: 2px solid var(--lap-text-dark);
    padding: 10px 18px;
    box-shadow: 4px 4px 0px var(--lap-text-dark);
    border-radius: var(--lap-radius-slight);
}

.lc-fnd-flag {
    display: flex;
    flex-direction: column;
    width: 20px;
    height: 14px;
    border: 1px solid var(--lap-text-dark);
}
.lc-fnd-flag span { height: 33.33%; width: 100%; }
.lc-fnd-flag .s-orange { background-color: #FF9933; }
.lc-fnd-flag .s-white { background-color: #FFFFFF; }
.lc-fnd-flag .s-green { background-color: #138808; }

.lc-fnd-badge strong {
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--lap-text-dark);
}

/* --- Premium Unified Stage Area --- */
.lc-founders-stage {
    position: relative;
    width: 100%;
    height: clamp(400px, 55vh, 540px);
    background-color: #FDFDFD;
    background-image: radial-gradient(rgba(5, 5, 5, 0.02) 1.5px, transparent 1.5px);
    background-size: 24px 24px;
    border: 2px solid var(--lap-text-dark);
    border-radius: var(--lap-radius-slight);
    box-shadow: 8px 8px 0px rgba(5,5,5,0.04);
    overflow: hidden;
    margin-bottom: 48px;
}

/* --- Floating Ambient Neon Particles --- */
.lc-stage-ambient {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: 1;
    overflow: hidden;
    pointer-events: none;
}

.lc-neon-orb {
    position: absolute;
    border-radius: 50%;
    background-color: var(--lap-neon-accent);
    filter: blur(40px);
    opacity: 0.25;
    animation: floatOrb 8s ease-in-out infinite alternate;
}

.lc-orb-1 { width: 150px; height: 150px; top: 10%; left: 20%; animation-duration: 9s; }
.lc-orb-2 { width: 200px; height: 200px; bottom: -10%; right: 15%; animation-duration: 12s; animation-delay: -3s; opacity: 0.15; }
.lc-orb-3 { width: 100px; height: 100px; top: 40%; left: 60%; animation-duration: 10s; animation-delay: -6s; opacity: 0.2; }

@keyframes floatOrb {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(30px, -40px) scale(1.1); }
}

/* 3D Animated Typography Monument */
.lc-stage-bg-3d {
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%) perspective(1000px) rotateX(14deg) rotateY(-10deg);
    font-size: clamp(4.5rem, 14vw, 11rem);
    font-weight: 900;
    line-height: 1;
    color: #F3F3F3;
    text-shadow: 
        1px 1px 0px #E5E5E5,
        2px 2px 0px #E5E5E5,
        3px 3px 0px #DADADA,
        4px 4px 0px #DADADA,
        5px 5px 0px #CECECE,
        6px 6px 0px #CECECE,
        7px 7px 20px rgba(5, 5, 5, 0.05);
    letter-spacing: -2px;
    white-space: nowrap;
    text-transform: uppercase;
    user-select: none;
    pointer-events: none;
    z-index: 2; /* Sits above particles, below founders */
    animation: lcStageFloat3D 7s ease-in-out infinite alternate;
}

@keyframes lcStageFloat3D {
    0% {
        transform: translate(-50%, -50%) perspective(1000px) rotateX(12deg) rotateY(-7deg) translateY(0);
    }
    100% {
        transform: translate(-50%, -50%) perspective(1000px) rotateX(16deg) rotateY(-13deg) translateY(-8px);
    }
}

/* Positioning Mechanics for Portrait Layers */
.lc-stage-figures {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 3; /* Topmost layer */
}

.lc-founder-portrait {
    position: absolute;
    bottom: 0;
    width: auto;
    object-fit: contain;
    filter: drop-shadow(0px 12px 20px rgba(5,5,5,0.12));
    transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1);
}

/* Mayank: Flipped to face right, pinned flush to the left boundary */
.img-mayank {
    left: 0;
    height: 96%;
    object-position: center bottom;
    z-index: 2;
    transform: scaleX(-1); /* Flips the image horizontally */
    transform-origin: center bottom;
}

/* Priyanshu: Positioned prominently on the right side */
.img-jindal {
    right: 3%;
    height: 114%; 
    object-position: right bottom;
    z-index: 3;
    transform-origin: bottom right;
}

/* Smooth micro-hover actions (Accounting for Mayank's negative scale) */
.lc-founders-stage:hover .img-mayank {
    transform: scaleX(-1) translateX(-4px) scale(1.01);
}
.lc-founders-stage:hover .img-jindal {
    transform: scale(1.02);
}

/* --- Bios Grid --- */
.lc-founders-bios {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 48px;
}

.lc-bio-card {
    padding-top: 24px;
    border-top: 2px solid var(--lap-border-color);
}

.lc-bio-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
}

.lc-bio-header h3 {
    font-size: 1.5rem;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--lap-text-dark);
}

.lc-bio-role {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    background-color: var(--lap-neon-accent);
    color: var(--lap-text-dark);
    padding: 4px 14px;
    border: 1px solid var(--lap-text-dark);
    border-radius: 50px;
    box-shadow: 2px 2px 0px var(--lap-text-dark);
}

.lc-bio-card p {
    font-size: 1rem;
    line-height: 1.6;
    color: rgba(5, 5, 5, 0.72);
}

/* ═══════════════════════════════════════════════════════════
   RESPONSIVE LAYOUT CONSTRAINTS
═══════════════════════════════════════════════════════════ */
@media (max-width: 991px) {
    .img-mayank {
        height: 90%;
    }
    .img-jindal {
        height: 106%;
        right: 1%;
    }
    .lc-founders-bios {
        gap: 30px;
    }
}

@media (max-width: 767px) {
    .lc-founders-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }
    .lc-founders-stage {
        height: 360px;
    }
    .lc-stage-bg-3d {
        font-size: 4rem;
    }
    .img-mayank {
        height: 85%;
    }
    .img-jindal {
        height: 100%;
        right: -4%;
    }
    .lc-founders-bios {
        grid-template-columns: 1fr;
        gap: 32px;
    }
}
</style>

<section class="lc-founders-section" id="about-founders">
    
    <div class="lc-founders-header">
        <div class="lc-founders-title">
            <p>Our Vision</p>
            <h2>Meet The Founders</h2>
        </div>
        
        <div class="lc-fnd-badge">
            <div class="lc-fnd-flag">
                <span class="s-orange"></span>
                <span class="s-white"></span>
                <span class="s-green"></span>
            </div>
            <strong>Built In India</strong>
        </div>
    </div>

    <div class="lc-founders-stage">
        
        <div class="lc-stage-ambient">
            <div class="lc-neon-orb lc-orb-1"></div>
            <div class="lc-neon-orb lc-orb-2"></div>
            <div class="lc-neon-orb lc-orb-3"></div>
        </div>

        <div class="lc-stage-bg-3d">NILES &amp; SINAI</div>
        
        <div class="lc-stage-figures">
            <img src="<?= $founders['mayank']['img'] ?>" 
                 alt="<?= $founders['mayank']['name'] ?>" 
                 class="lc-founder-portrait img-mayank"
                 loading="lazy">
                 
            <img src="<?= $founders['jindal']['img'] ?>" 
                 alt="<?= $founders['jindal']['name'] ?>" 
                 class="lc-founder-portrait img-jindal"
                 loading="lazy">
        </div>
    </div>

    <div class="lc-founders-bios">
        
        <div class="lc-bio-card">
            <div class="lc-bio-header">
                <h3><?= $founders['mayank']['name'] ?></h3>
                <span class="lc-bio-role"><?= $founders['mayank']['role'] ?></span>
            </div>
            <p><?= $founders['mayank']['bio'] ?></p>
        </div>

        <div class="lc-bio-card">
            <div class="lc-bio-header">
                <h3><?= $founders['jindal']['name'] ?></h3>
                <span class="lc-bio-role"><?= $founders['jindal']['role'] ?></span>
            </div>
            <p><?= $founders['jindal']['bio'] ?></p>
        </div>

    </div>

</section>