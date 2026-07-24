<?php
$contactConfig = [
    'hotline'    => '+91 74707 26731',
    'hotline_raw'=> '917470726731',
    'whatsapp'   => 'https://wa.me/917470726731?text=Hi%20Niles%20%26%20Sinai,%20I%20need%20assistance%20with...',
    'email'      => 'concierge@gemstone.shop',
    'hours'      => '10:00 AM — 08:00 PM (Mon - Sat)',
    'hub_address'=> 'Main Commercial Zone, Bilaspur, Chhattisgarh, India'
];
?>

<style>
/* ═══════════════════════════════════════════════════════════
   CONTACT HUB — PREMIUM MECHANICAL EDGE ARCHITECTURE
═══════════════════════════════════════════════════════════ */
:root {
    --ct-pad-y: clamp(60px, 10vh, 120px);
    --ct-pad-x: clamp(20px, 6vw, 100px);
    --ct-gap: clamp(32px, 5vw, 80px);
}

.lc-contact-section {
    background-color: var(--lap-bg-pure, #FFFFFF);
    padding: var(--ct-pad-y) var(--ct-pad-x);
    border-bottom: 2px solid var(--lap-text-dark, #050505);
    position: relative;
    overflow: hidden;
}

/* --- Section Header Grid --- */
.lc-contact-header {
    margin-bottom: 56px;
}
.lc-contact-header p {
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--lap-text-muted, #777777);
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.lc-contact-header p::before {
    content: '';
    display: block;
    width: 12px;
    height: 4px;
    background-color: var(--lap-neon-accent, #0F6B5B);
}
.lc-contact-header h2 {
    font-size: clamp(2.2rem, 4.5vw, 3.2rem);
    font-weight: 700;
    text-transform: uppercase;
    color: var(--lap-text-dark, #050505);
    line-height: 1.1;
}

/* --- Split Dual Deck Layout --- */
.lc-contact-grid {
    display: grid;
    grid-template-columns: 1.1fr 1.3fr;
    gap: var(--ct-gap);
    align-items: start;
}

/* ═════════════════════════════════════════
   LEFT DECK: DIRECT COMMUNICATIONS MATRIX
═══════════════════════════════════════════ */
.lc-contact-channels {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

/* Premium Main Hotline Card */
.lc-hotline-card {
    background-color: #FDFDFD;
    border: 2px solid var(--lap-text-dark, #050505);
    padding: 32px;
    border-radius: var(--lap-radius-slight, 4px);
    box-shadow: 6px 6px 0px var(--lap-text-dark, #050505);
    position: relative;
    transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1);
}
.lc-hotline-card:hover {
    transform: translate(-2px, -2px);
    box-shadow: 8px 8px 0px var(--lap-text-dark, #050505);
}

.lc-hotline-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
}
.lc-status-indicator {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    background-color: rgba(5, 5, 5, 0.04);
    padding: 4px 12px;
    border: 1px solid var(--lap-text-dark, #050505);
    border-radius: 50px;
}
.lc-status-dot {
    width: 8px;
    height: 8px;
    background-color: #00FF66;
    border-radius: 50%;
    box-shadow: 0 0 8px #00FF66;
    animation: lcPulseIndicator 1.8s infinite ease-in-out;
}

@keyframes lcPulseIndicator {
    0% { transform: scale(0.9); opacity: 0.6; }
    50% { transform: scale(1.1); opacity: 1; }
    100% { transform: scale(0.9); opacity: 0.6; }
}

.lc-hotline-card h3 {
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--lap-text-muted, #777777);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 6px;
}
.lc-hotline-link {
    font-size: clamp(1.6rem, 3vw, 2.3rem);
    font-weight: 700;
    color: var(--lap-text-dark, #050505);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 14px;
    transition: color 0.2s ease;
}
.lc-hotline-link svg {
    width: clamp(24px, 3vw, 32px);
    height: clamp(24px, 3vw, 32px);
    stroke: var(--lap-text-dark, #050505);
    transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.lc-hotline-card:hover .lc-hotline-link svg {
    transform: scale(1.15) rotate(-10deg);
}

/* Secondary Support Matrix List */
.lc-channels-list {
    display: flex;
    flex-direction: column;
    border: 2px solid var(--lap-text-dark, #050505);
    background-color: #FDFDFD;
    border-radius: var(--lap-radius-slight, 4px);
    overflow: hidden;
}
.lc-channel-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 24px;
    border-bottom: 2px solid rgba(5, 5, 5, 0.08);
    text-decoration: none;
    color: inherit;
    transition: background-color 0.2s ease;
}
.lc-channel-item:last-child {
    border-bottom: none;
}
.lc-channel-item:hover {
    background-color: rgba(200,167,90,0.05);
}

.lc-channel-icon {
    width: 48px;
    height: 48px;
    background-color: var(--lap-bg-pure, #FFFFFF);
    border: 2px solid var(--lap-text-dark, #050505);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: var(--lap-radius-slight, 4px);
    box-shadow: 3px 3px 0px var(--lap-text-dark, #050505);
    flex-shrink: 0;
}
.lc-channel-icon svg {
    width: 20px;
    height: 20px;
    stroke: var(--lap-text-dark, #050505);
}

.lc-channel-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
}
.lc-channel-info label {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--lap-text-muted, #777777);
    cursor: pointer;
}
.lc-channel-info span {
    font-size: 1rem;
    font-weight: 600;
    color: var(--lap-text-dark, #050505);
}

/* ═════════════════════════════════════════
   RIGHT DECK: HIGH-TIER ENQUIRY MATRIX
═══════════════════════════════════════════ */
.lc-contact-form-container {
    background-color: #FDFDFD;
    border: 2px solid var(--lap-text-dark, #050505);
    padding: 40px;
    border-radius: var(--lap-radius-slight, 4px);
    box-shadow: 8px 8px 0px rgba(5,5,5,0.04);
}

.lc-contact-form {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.lc-form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.lc-input-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
    position: relative;
}
.lc-input-group label {
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--lap-text-dark, #050505);
}

.lc-input-group input,
.lc-input-group textarea,
.lc-input-group select {
    background-color: var(--lap-bg-pure, #FFFFFF);
    border: 2px solid var(--lap-border-color, #E5E5E5);
    color: var(--lap-text-dark, #050505);
    font-family: inherit;
    font-size: 0.95rem;
    font-weight: 500;
    padding: 14px 16px;
    border-radius: var(--lap-radius-slight, 4px);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
    outline: none;
    width: 100%;
    box-sizing: border-box;
}

.lc-input-group input:focus,
.lc-input-group textarea:focus,
.lc-input-group select:focus {
    border-color: var(--lap-text-dark, #050505);
    box-shadow: 4px 4px 0px var(--lap-neon-accent, #0F6B5B);
}

.lc-input-group textarea {
    resize: none;
    min-height: 120px;
}

/* Premium System Action Button */
.lc-submit-btn {
    background-color: var(--lap-neon-accent, #0F6B5B);
    color: var(--lap-text-dark, #050505);
    border: 2px solid var(--lap-text-dark, #050505);
    font-family: inherit;
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    padding: 16px 32px;
    border-radius: var(--lap-radius-slight, 4px);
    box-shadow: 4px 4px 0px var(--lap-text-dark, #050505);
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
    margin-top: 8px;
    width: 100%;
}
.lc-submit-btn:hover {
    transform: translate(-2px, -2px);
    box-shadow: 6px 6px 0px var(--lap-text-dark, #050505);
    background-color: #C6FF1A;
}
.lc-submit-btn:active {
    transform: translate(2px, 2px);
    box-shadow: 2px 2px 0px var(--lap-text-dark, #050505);
}
.lc-submit-btn svg {
    width: 18px;
    height: 18px;
    stroke: var(--lap-text-dark, #050505);
    transition: transform 0.3s ease;
}
.lc-submit-btn:hover svg {
    transform: translateX(4px);
}

/* ═══════════════════════════════════════════════════════════
   PREMIUM ADAPTIVE RESPONSIVE COMPRESSION (MOBILE Tier)
═══════════════════════════════════════════════════════════ */
@media (max-width: 991px) {
    .lc-contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

@media (max-width: 767px) {
    .lc-contact-section {
        padding: 60px 20px;
    }
    .lc-contact-header {
        margin-bottom: 36px;
    }
    .lc-hotline-card {
        padding: 24px;
    }
    .lc-hotline-meta {
        margin-bottom: 12px;
    }
    .lc-contact-form-container {
        padding: 28px 20px;
    }
    .lc-form-row {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    /* Adaptive optimization to guarantee effortless tap selections across custom phone viewports */
    .lc-channel-item {
        padding: 18px 16px;
        gap: 14px;
    }
    .lc-channel-icon {
        width: 40px;
        height: 40px;
    }
    .lc-channel-icon svg {
        width: 18px;
        height: 18px;
    }
    .lc-channel-info span {
        font-size: 0.9rem;
        word-break: break-all;
    }
}
</style>

<section class="lc-contact-section" id="contact-hub">
    
    <div class="lc-contact-header">

        <h2>Let's Talk Jewellery</h2>
        <p>Our concierge team is here to help — no question too small.</p>
    </div>

    <div class="lc-contact-grid">
        
        <div class="lc-contact-channels">
            
            <div class="lc-hotline-card">
                <div class="lc-hotline-meta">
                    <h3>Concierge Hotline</h3>
                    <div class="lc-status-indicator">
                        <span class="lc-status-dot"></span>
                        <strong>Concierge Available</strong>
                    </div>
                </div>
                <a href="tel:<?= $contactConfig['hotline_raw'] ?>" class="lc-hotline-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <?= htmlspecialchars($contactConfig['hotline']) ?>
                </a>
            </div>

            <div class="lc-channels-list">
                
                <a href="<?= htmlspecialchars($contactConfig['whatsapp']) ?>" target="_blank" rel="noopener" class="lc-channel-item">
                    <div class="lc-channel-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg>
                    </div>
                    <div class="lc-channel-info">
                        <label>WhatsApp Business</label>
                        <span>Instant Response Service</span>
                    </div>
                </a>

                <a href="mailto:<?= $contactConfig['email'] ?>" class="lc-channel-item">
                    <div class="lc-channel-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div class="lc-channel-info">
                        <label>Concierge Email</label>
                        <span><?= htmlspecialchars($contactConfig['email']) ?></span>
                    </div>
                </a>

                <div class="lc-channel-item">
                    <div class="lc-channel-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <div class="lc-channel-info">
                        <label>Availability Hours</label>
                        <span><?= htmlspecialchars($contactConfig['hours']) ?></span>
                    </div>
                </div>

                <div class="lc-channel-item">
                    <div class="lc-channel-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div class="lc-channel-info">
                        <label>Our Boutique</label>
                        <span><?= htmlspecialchars($contactConfig['hub_address']) ?></span>
                    </div>
                </div>

            </div>
        </div>

        <div class="lc-contact-form-container">
            <form action="" method="POST" class="lc-contact-form" autocomplete="off">
                
                <div class="lc-form-row">
                    <div class="lc-input-group">
                        <label for="f_name">Full Name</label>
                        <input type="text" id="f_name" name="name" required placeholder="e.g. Mayank Chawdhari">
                    </div>
                    <div class="lc-input-group">
                        <label for="f_phone">Phone Number</label>
                        <input type="tel" id="f_phone" name="phone" required placeholder="e.g. +91 XXXXX XXXXX">
                    </div>
                </div>

                <div class="lc-form-row">
                    <div class="lc-input-group">
                        <label for="f_email">Email</label>
                        <input type="email" id="f_email" name="email" required placeholder="name@domain.com">
                    </div>
                    <div class="lc-input-group">
                        <label for="f_intent">Enquiry Type</label>
                        <select id="f_intent" name="intent" required>
                            <option value="bulk_order">Bulk / Corporate Gifting</option>
                            <option value="retail_purchase">Product Enquiry</option>
                            <option value="hardware_warranty">Warranty & Certification Support</option>
                            <option value="other">Custom Design Consultation</option>
                        </select>
                    </div>
                </div>

                <div class="lc-input-group">
                    <label for="f_message">Tell Us What You're Looking For</label>
                    <textarea id="f_message" name="message" required placeholder="Describe the piece you have in mind, your budget, or any specific gemstone preferences..."></textarea>
                </div>

                <button type="submit" class="lc-submit-btn">
                    <span>Send My Enquiry</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                    </svg>
                </button>

            </form>
        </div>

    </div>
</section>
