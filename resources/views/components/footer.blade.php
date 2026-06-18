<footer class="eledji-footer">
    <div class="footer-inner">
        {{-- Logo centré --}}
        <div class="footer-logo">
            <div class="footer-logo-img">
                <img src="{{ asset('images/logo.png') }}" alt="Eledji logo" loading="lazy">
            </div>
        </div>

        {{-- Navigation horizontale centrée --}}
        <div class="footer-links">
            <a href="{{ route('home') }}" class="footer-link">Accueil</a>
            <a href="{{ route('events.index') }}" class="footer-link">Evenements</a>
            <a href="{{ route('news') }}" class="footer-link">News</a>
            <a href="{{ route('contact') }}" class="footer-link">Contact</a>
            <a href="#" class="footer-link">CGU</a>
            <a href="#" class="footer-link">Confidentialite</a>
            <a href="#" class="footer-link">Cookies</a>
        </div>

        {{-- Copyright --}}
        <p class="footer-copyright">
            Copyright ELEDJI - 2026 Tous droits reserves | Par
            <a href="#" class="footer-brand">Ayah Communication</a>
        </p>

        {{-- Réseaux sociaux centrés --}}
        <div class="footer-social">
            <a href="#" class="social-icon" aria-label="Facebook">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                </svg>
            </a>
            <a href="#" class="social-icon" aria-label="X/Twitter">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>
            <a href="#" class="social-icon" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/>
                    <circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="2"/>
                    <circle cx="17.5" cy="6.5" r="1.5" fill="currentColor"/>
                </svg>
            </a>
            <a href="#" class="social-icon" aria-label="TikTok">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.79 2.79 0 012.7-2.86V8.82a8.16 8.16 0 01.68-.04A6.52 6.52 0 0119.59 6.69z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

<style>
.eledji-footer {
    background: #1a1a2e;
    padding: 48px 24px 32px;
    margin-top: 80px;
}

.footer-inner {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-logo {
    margin-bottom: 24px;
}

.footer-logo-img {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
}

.footer-logo-img img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 50%;
}

.footer-links {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 24px;
    margin-bottom: 20px;
}

.footer-link {
    color: #999;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.25s ease;
}

.footer-link:hover {
    color: #FFFFFF;
}

.footer-copyright {
    color: #666;
    font-size: 12px;
    text-align: center;
    margin-bottom: 24px;
    line-height: 1.6;
}

.footer-brand {
    color: #999;
    text-decoration: none;
    transition: all 0.25s ease;
}

.footer-brand:hover {
    color: #FFFFFF;
}

.footer-social {
    display: flex;
    gap: 16px;
    justify-content: center;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #444;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #999;
    transition: all 0.25s ease;
    text-decoration: none;
}

.social-icon:hover {
    border-color: #FFFFFF;
    background: #333;
    color: #FFFFFF;
}

.social-icon svg {
    width: 18px;
    height: 18px;
}

@media (max-width: 600px) {
    .footer-links {
        gap: 16px;
    }

    .footer-link {
        font-size: 12px;
    }
}
</style>