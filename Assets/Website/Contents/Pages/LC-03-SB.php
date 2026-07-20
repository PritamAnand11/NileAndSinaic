<?php
/**
 * ==========================================================================
 * © 2026 NILES & SINAI TRADEMARK. ALL RIGHTS RESERVED.
 * ==========================================================================
 * FILE PATH:  /Assets/Website/Contents/Pages/LC-03-SB.php
 * VERSION:    1.0.0
 * THEME:      Luxury Fine Jewellery
 * DEPENDS ON: base.css + nav.php
 * NAVIGATION: /blog-view.php?id=post-01
 * ==========================================================================
 */

// 1. Blog Post Content Database
$blogDatabase = [
    'post-01' => [
        'date' => 'APRIL 19 , 2026',
        'category' => 'Craftsmanship',
        'title' => 'The 47-Point Blueprint: How We Certify Every Diamond',
        'desc' => 'An inside look at our strict grading pipeline, gemological testing, and certified quality metrics.',
        'img' => 'https://images.unsplash.com/photo-1518544866330-4b6fbc7f4d4c?auto=format&fit=crop&w=1200&q=90',
        'read_time' => '5 MIN READ',
        'author' => 'Yusuf Ahmad',
        'author_role' => 'Gemological Operations Lead',
        'content' => '
            <p class="lc-post-lead">Behind every piece dispatched from the Niles & Sinai workshop lies a strict gemstone certification pipeline. We do not deal in arbitrary retail descriptions; we quantify every stone by the numbers.</p>
            
            <h2>Phase 01: The 4Cs Grading Bench</h2>
            <p>Every diamond is placed under a calibrated loupe and graded against carat weight, cut precision, colour, and clarity — the four pillars gemologists use worldwide. Using controlled studio lighting, we track light return across facet angles and table proportions. If a stone falls outside the tolerance we set for a given tier, it is flagged and returned to the cutting house for re-faceting.</p>
            
            <blockquote>"A quick polish and a boot-up test is not certification. Real validation means tracking every stone against laboratory-grade reference standards."</blockquote>
            
            <h2>Phase 02: Metal Purity & Hallmark Verification</h2>
            <p>Gold and platinum components are manually assayed under 15x magnification and cross-referenced against BIS hallmarking standards. We verify karat purity, alloy composition, and plating thickness to prevent tarnishing or discolouration over years of everyday wear.</p>
            
            <h2>Phase 03: Setting & Stone-Security Testing</h2>
            <p>Each setting undergoes a controlled vibration and tension test to verify prong and bezel security. Any piece showing stone movement beyond acceptable tolerance is instantly pulled aside for re-setting before it ever reaches our inventory.</p>
        '
    ],
    'post-02' => [
        'date' => 'MAY 04 , 2026',
        'category' => 'Artistry',
        'title' => 'Why Platinum and Rose Gold Suit Different Occasions',
        'desc' => 'Breaking down metal characteristics and how we choose the right alloy for each piece we craft.',
        'img' => 'https://images.unsplash.com/photo-1602751584547-16e35f0ff6d5?auto=format&fit=crop&w=1200&q=90',
        'read_time' => '7 MIN READ',
        'author' => 'Vedant Padhiyar',
        'author_role' => 'Design & Materials Lead',
        'content' => '
            <p class="lc-post-lead">Fine jewellery lives on the hand and around the neck every day, so the metal beneath the gemstone matters just as much as the stone itself.</p>
            <h2>The Density & Durability Advantage</h2>
            <p>Costume pieces often lean on thin plating that wears thin within 18 months of daily use. By crafting our bridal collection in dense 950 platinum, we get a metal that resists scratching and holds its polish for decades rather than months — the reason platinum remains the standard for engagement rings.</p>
            <h2>Warmth, Tone, and Skin Pairing</h2>
            <p>Rose gold\'s warm copper undertone flatters a wider range of skin tones and photographs beautifully for everyday and evening wear alike, while cool-toned platinum and white gold let a diamond\'s brilliance take centre stage. Choosing between them comes down to the moment the piece is made for, not just personal taste.</p>
        '
    ]
];

// 2. Extract Target URL Parameters safely with strict custom fallbacks
$currentId = isset($_GET['id']) ? trim($_GET['id']) : 'post-01';
if (!array_key_exists($currentId, $blogDatabase)) {
    $currentId = 'post-01'; // Graceful system recovery loop
}

$post = $blogDatabase[$currentId];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?= htmlspecialchars($post['title']) ?> || Niles &amp; Sinai Journal</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/Modules/base.css">
</head>
<body>

    <?php include 'Assets/Modules/nav.php'; ?>

    <style>
    /* ═══════════════════════════════════════════════════════════
       SINGLE BLOG CORE — LOCAL STRUCTURAL VARIANT VARIABLES
    ═══════════════════════════════════════════════════════════ */
    :root {
        --sp-space-y: clamp(40px, 6vh, 90px);
        --sp-inner-w: 1350px;
        --sp-sidebar-w: 280px;
        --sp-content-w: 740px;
    }

    body {
        background-color: var(--lap-bg-pure);
    }

    /* Primary Framing Container System */
    .lc-sp-wrapper {
        max-width: var(--sp-inner-w);
        margin: 0 auto;
        padding: var(--sp-space-y) clamp(16px, 4vw, 40px);
    }

    /* Back Route Control Layout Link */
    .lc-sp-back-trigger {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--lap-text-dark);
        text-decoration: none;
        margin-bottom: 30px;
        transition: transform 0.2s var(--lap-ease-smooth);
    }
    .lc-sp-back-trigger:hover {
        transform: translateX(-4px);
    }

    /* Meta Pill Cluster Architecture */
    .lc-sp-meta-header {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 14px;
        margin-bottom: 24px;
    }

    .lc-sp-cat-pill {
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        background-color: var(--lap-text-dark);
        color: var(--lap-bg-pure);
        padding: 4px 12px;
        border-radius: var(--lap-radius-slight);
    }

    .lc-sp-meta-item {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--lap-text-muted);
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* Core Title Presentation Block */
    .lc-sp-main-title {
        font-size: clamp(1.8rem, 4.5vw, 3.2rem);
        font-weight: 700;
        line-height: 1.15;
        text-transform: uppercase;
        color: var(--lap-text-dark);
        margin-bottom: clamp(30px, 4vh, 50px);
    }

    /* Featured Media Frame Layer with Cyber Crosshair Elements */
    .lc-sp-hero-canvas {
        width: 100%;
        aspect-ratio: 21 / 9;
        position: relative;
        border: 2px solid var(--lap-text-dark);
        box-shadow: 6px 6px 0px var(--lap-text-dark);
        border-radius: var(--lap-radius-slight);
        overflow: hidden;
        margin-bottom: clamp(40px, 6vh, 80px);
        background-color: var(--lap-text-dark);
    }

    .lc-sp-hero-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        animation: fadeIn 1.2s var(--lap-ease-smooth) forwards;
    }

    /* Cyber Tech Crosshair Accents */
    .lc-sp-canvas-bracket {
        position: absolute;
        width: 16px;
        height: 16px;
        border-color: var(--lap-neon-accent);
        border-style: solid;
        z-index: 2;
        pointer-events: none;
    }
    .lc-sp-canvas-bracket.tl { top: 15px; left: 15px; border-width: 3px 0 0 3px; }
    .lc-sp-canvas-bracket.tr { top: 15px; right: 15px; border-width: 3px 3px 0 0; }
    .lc-sp-canvas-bracket.bl { bottom: 15px; left: 15px; border-width: 0 0 3px 3px; }
    .lc-sp-canvas-bracket.br { bottom: 15px; right: 15px; border-width: 0 3px 3px 0; }

    /* Layout Separation Grid Architecture */
    .lc-sp-split-grid {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 60px;
        position: relative;
    }

    /* Technical Metrics Sticky Sidebar System */
    .lc-sp-sticky-sidebar {
        width: var(--sp-sidebar-w);
        position: sticky;
        top: calc(var(--nav-h, 76px) + 40px);
        display: flex;
        flex-direction: column;
        gap: 35px;
    }

    .lc-sp-sidebar-block {
        border-top: 2px dashed var(--lap-border-color);
        padding-top: 20px;
    }

    .lc-sp-sidebar-label {
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: var(--lap-text-muted);
        margin-bottom: 15px;
        display: block;
    }

    /* Author Profile Node Configuration */
    .lc-sp-author-node {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .lc-sp-author-avatar {
        width: 44px;
        height: 44px;
        background-color: var(--lap-neon-accent);
        border: 2px solid var(--lap-text-dark);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.9rem;
        color: var(--lap-text-dark);
        box-shadow: 2px 2px 0px var(--lap-text-dark);
    }

    .lc-sp-author-meta h4 {
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        color: var(--lap-text-dark);
        line-height: 1.2;
    }

    .lc-sp-author-meta span {
        font-size: 0.7rem;
        font-weight: 500;
        color: var(--lap-text-muted);
    }

    /* Social Engagement Sharing Deck Matrix */
    .lc-sp-share-deck {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .lc-sp-share-btn {
        width: 100%;
        padding: 10px 14px;
        background-color: var(--lap-bg-pure);
        border: 2px solid var(--lap-text-dark);
        border-radius: var(--lap-radius-slight);
        font-family: 'Chakra Petch', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--lap-text-dark);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 3px 3px 0px var(--lap-text-dark);
        transition: transform 0.2s var(--lap-ease-smooth), box-shadow 0.2s var(--lap-ease-smooth), background-color 0.2s ease;
    }

    .lc-sp-share-btn:hover {
        background-color: var(--lap-text-dark);
        color: var(--lap-neon-accent);
        box-shadow: 3px 3px 0px var(--lap-neon-accent);
    }

    .lc-sp-share-btn:active {
        transform: translate(2px, 2px);
        box-shadow: 1px 1px 0px var(--lap-neon-accent);
    }

    /* Main Article Typography Containment Layer */
    .lc-sp-article-body {
        width: var(--sp-content-w);
        max-width: 100%;
    }

    /* Explicit Typographic Hierarchy Styles */
    .lc-post-lead {
        font-size: clamp(1.1rem, 2.5vw, 1.35rem);
        line-height: 1.5;
        font-weight: 500;
        color: var(--lap-text-dark);
        margin-bottom: 30px;
    }

    .lc-sp-article-body p {
        font-size: 1.05rem;
        line-height: 1.7;
        color: rgba(5, 5, 5, 0.85);
        margin-bottom: 26px;
    }

    .lc-sp-article-body h2 {
        font-size: clamp(1.4rem, 3vw, 1.8rem);
        font-weight: 700;
        text-transform: uppercase;
        color: var(--lap-text-dark);
        margin: 45px 0 20px 0;
        border-left: 4px solid var(--lap-neon-accent);
        padding-left: 15px;
    }

    .lc-sp-article-body blockquote {
        background-color: rgba(5, 5, 5, 0.02);
        border: 2px solid var(--lap-text-dark);
        border-left: 8px solid var(--lap-neon-accent);
        padding: 24px;
        margin: 35px 0;
        border-radius: var(--lap-radius-slight);
        box-shadow: 4px 4px 0px rgba(5,5,5,0.05);
    }

    .lc-sp-article-body blockquote p {
        font-size: 1.1rem;
        font-style: italic;
        font-weight: 600;
        color: var(--lap-text-dark);
        margin-bottom: 0;
        line-height: 1.5;
    }

    /* Adaptive Mobile Utility Interaction Sheet (Hidden on Desktop) */
    .lc-sp-mobile-share-dock {
        display: none;
    }

    /* ═══════════════════════════════════════════════════════════
       RESPONSIVE ADAPTIVE BREAKPOINTS
    ═══════════════════════════════════════════════════════════ */
    @media (max-width: 1024px) {
        .lc-sp-hero-canvas {
            aspect-ratio: 16 / 7;
        }
        .lc-sp-split-grid {
            flex-direction: column;
            gap: 40px;
        }
        .lc-sp-sticky-sidebar {
            width: 100%;
            position: static;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
        .lc-sp-sidebar-block {
            border-top: none;
            border-left: 2px dashed var(--lap-border-color);
            padding-top: 0;
            padding-left: 24px;
        }
        .lc-sp-sidebar-block:first-child {
            border-left: none;
            padding-left: 0;
        }
        .lc-sp-share-deck {
            flex-direction: row;
            flex-wrap: wrap;
        }
        .lc-sp-share-btn {
            width: calc(50% - 5px);
        }
    }

    @media (max-width: 767px) {
        :root {
            --sp-space-y: 30px;
        }
        .lc-sp-hero-canvas {
            aspect-ratio: 4 / 3;
            margin-bottom: 30px;
        }
        /* Completely hide standard block arrays on touch configurations */
        .lc-sp-sticky-sidebar {
            display: block;
        }
        .lc-sp-sidebar-block:last-child {
            display: none; /* Strip standard sharing list box layout block */
        }
        .lc-sp-sidebar-block {
            border-left: none;
            padding-left: 0;
        }
        
        /* Activate fixed premium bottom navigation utility sheet for sharing controls */
        .lc-sp-mobile-share-dock {
            display: flex;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #FFFFFF;
            border-top: 2px solid var(--lap-text-dark);
            z-index: 999;
            padding: 12px 20px calc(12px + env(safe-area-inset-bottom));
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px -10px 30px rgba(5,5,5,0.08);
        }
        .lc-sp-mob-share-label {
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--lap-text-dark);
        }
        .lc-sp-mob-share-icons {
            display: flex;
            gap: 10px;
        }
        .lc-sp-mob-icon-btn {
            width: 38px;
            height: 38px;
            background: var(--lap-bg-pure);
            border: 2px solid var(--lap-text-dark);
            border-radius: var(--lap-radius-slight);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--lap-text-dark);
            cursor: pointer;
            box-shadow: 2px 2px 0px var(--lap-text-dark);
        }
        .lc-sp-mob-icon-btn:active {
            transform: translate(1px, 1px);
            box-shadow: 0px 0px 0px var(--lap-text-dark);
        }
        /* Add body margin to prevent content being covered by fixed bottom dock */
        .lc-sp-wrapper {
            margin-bottom: 80px;
        }
    }
    </style>

    <main class="lc-sp-wrapper">
        
        <a href="index.php#lcIntelDeckSection" class="lc-sp-back-trigger">
            <i data-lucide="arrow-left" class="lucide"></i>
            <span>Go Back </span>
        </a>

        <header>
            <div class="lc-sp-meta-header">
                <span class="lc-sp-cat-pill"><?= htmlspecialchars($post['category']) ?></span>
                <div class="lc-sp-meta-item">
                    <i data-lucide="calendar" class="lucide" style="width:14px; height:14px;"></i>
                    <span><?= $post['date'] ?></span>
                </div>
                <div class="lc-sp-meta-item">
                    <i data-lucide="clock" class="lucide" style="width:14px; height:14px;"></i>
                    <span><?= $post['read_time'] ?></span>
                </div>
            </div>
            <h1 class="lc-sp-main-title"><?= htmlspecialchars($post['title']) ?></h1>
        </header>

        <section class="lc-sp-hero-canvas">
            <div class="lc-sp-canvas-bracket tl"></div>
            <div class="lc-sp-canvas-bracket tr"></div>
            <div class="lc-sp-canvas-bracket bl"></div>
            <div class="lc-sp-canvas-bracket br"></div>
            <img src="<?= $post['img'] ?>" class="lc-sp-hero-img" alt="<?= htmlspecialchars($post['title']) ?>">
        </section>

        <div class="lc-sp-split-grid">
            
            <aside class="lc-sp-sticky-sidebar">
                
                <div class="lc-sp-sidebar-block">
                    <span class="lc-sp-sidebar-label">Written By</span>
                    <div class="lc-sp-author-node">
                        <div class="lc-sp-author-avatar">
                            <?= substr($post['author'], 0, 1) ?>
                        </div>
                        <div class="lc-sp-author-meta">
                            <h4><?= htmlspecialchars($post['author']) ?></h4>
                            <span><?= htmlspecialchars($post['author_role']) ?></span>
                        </div>
                    </div>
                </div>

                <div class="lc-sp-sidebar-block">
                    <span class="lc-sp-sidebar-label">Broadcast Network</span>
                    <div class="lc-sp-share-deck">
                        <button class="lc-sp-share-btn" onclick="window.open('https://twitter.com/intent/tweet?text='+encodeURIComponent(document.title)+'&url='+encodeURIComponent(window.location.href))">
                            <span>X / Twitter</span>
                            <i data-lucide="twitter" class="lucide" style="width:14px; height:14px;"></i>
                        </button>
                        <button class="lc-sp-share-btn" onclick="window.open('https://api.whatsapp.com/send?text='+encodeURIComponent(document.title+' '+window.location.href))">
                            <span>WhatsApp Feed</span>
                            <i data-lucide="message-square" class="lucide" style="width:14px; height:14px;"></i>
                        </button>
                        <button class="lc-sp-share-btn" id="lcCopyLinkBtn">
                            <span id="lcCopyText">Copy Node Link</span>
                            <i data-lucide="link-2" class="lucide" style="width:14px; height:14px;"></i>
                        </button>
                    </div>
                </div>

            </aside>

            <article class="lc-sp-article-body">
                <?= $post['content'] ?>
            </article>

        </div>

    </main>

    <div class="lc-sp-mobile-share-dock">
        <span class="lc-sp-mob-share-label">Broadcast Node:</span>
        <div class="lc-sp-mob-share-icons">
            <button class="lc-sp-mob-icon-btn" onclick="window.open('https://api.whatsapp.com/send?text='+encodeURIComponent(document.title+' '+window.location.href))" aria-label="Share via WhatsApp">
                <i data-lucide="message-square" class="lucide"></i>
            </button>
            <button class="lc-sp-mob-icon-btn" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(window.location.href))" aria-label="Share via X">
                <i data-lucide="twitter" class="lucide"></i>
            </button>
            <button class="lc-sp-mob-icon-btn" id="lcMobCopyBtn" aria-label="Copy Address Link">
                <i data-lucide="link-2" class="lucide"></i>
            </button>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Mount icons into the DOM tree instantly
        lucide.createIcons();

        (function() {
            'use strict';
            
            // 3. Clipboard API Operations Controller Engine Block
            const setupClipboardEngine = (buttonId, textId) => {
                const trigger = document.getElementById(buttonId);
                if (!trigger) return;

                trigger.addEventListener('click', () => {
                    navigator.clipboard.writeText(window.location.href).then(() => {
                        const feedbackText = document.getElementById(textId);
                        
                        // Handle localized text swapping state matrices cleanly
                        if (feedbackText) {
                            const nativeString = feedbackText.textContent;
                            feedbackText.textContent = "COPIED TO BUFF!";
                            trigger.style.borderColor = "var(--lap-neon-accent)";
                            
                            setTimeout(() => {
                                feedbackText.textContent = nativeString;
                                trigger.style.borderColor = "var(--lap-text-dark)";
                            }, 1500);
                        } else {
                            // Instant mobile button flash visual pulse trace
                            trigger.style.backgroundColor = "var(--lap-neon-accent)";
                            setTimeout(() => { trigger.style.backgroundColor = ""; }, 400);
                        }
                    }).catch(err => {
                        console.error('Buffer allocation lock failed.', err);
                    });
                });
            };

            // Instantiate bindings for physical UI trigger hooks across viewports
            document.addEventListener("DOMContentLoaded", () => {
                setupClipboardEngine('lcCopyLinkBtn', 'lcCopyText');
                setupClipboardEngine('lcMobCopyBtn', null);
            });
        })();
    </script>
</body>
</html>