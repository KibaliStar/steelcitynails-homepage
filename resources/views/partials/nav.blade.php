{{-- nav.blade.php --}}

<div class="site-header">
    <div class="liquid-nav no-glow" id="liquidNav" aria-label="Hauptnavigation">
        <div class="liquid-glare" id="liquidGlare"></div>

        <div class="nav-items">
            <span class="active-pill" id="activePill"></span>

            <a href="{{ route('home') }}" @class(['nav-link', 'active' => request()->routeIs('home')])>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 19v-8.5a1 1 0 0 0-.4-.8l-7-5.25a1 1 0 0 0-1.2 0l-7 5.25a1 1 0 0 0-.4.8V19a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1" />
                </svg>
                Home
            </a>

            <a href="{{ route('tattoo') }}" @class(['nav-link', 'active' => request()->routeIs('tattoo')])>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15">
                    <path d="M0 0h15v15H0z" fill="none" />
                    <path fill="currentColor" d="M8.55 2.03a3.006 3.006 0 0 1 4.19-.67c.23.17.28.48.11.7c-.16.23-.47.28-.69.11c-.9-.65-2.15-.45-2.8.45l5.26 3.82c.22.16.27.47.11.69c-.16.23-.47.28-.7.12l-.4-.3l-1.77 2.43l-.4-.3l-.59.81l.81.59c.22.16.27.48.11.7s-.47.27-.7.11L5.84 7.47l-.59.81l.4.29a.5.5 0 0 1 .11.7l-2.35 3.24c-.16.22-.47.27-.7.11l-.4-.3l-.59.81l-1.58 1.33l.77-1.91l.59-.81l-.41-.3a.506.506 0 0 1-.11-.7l2.36-3.23c.16-.23.47-.27.69-.11l.41.29l.59-.81l-1.62-1.17l-.3.4c-.16.22-.47.27-.69.11l-.81-.59a.48.48 0 0 1-.11-.69l1.17-1.62a.49.49 0 0 1 .7-.11l.81.58c.22.17.27.48.11.7L4 4.9l1.61 1.17l2.36-3.23l-.41-.3a.506.506 0 0 1-.11-.7c.16-.22.47-.27.7-.11zm.22 1.39L6.42 6.66l1.22.88l.58-.81l-.4-.29l1.76-2.43zm3.24 2.36l-.81-.59l-1.76 2.43l-.41-.3l-.58.81l1.61 1.18l.59-.81l-.4-.3z" />
                </svg>
                Tattoo
            </a>

            <a href="{{ route('piercing') }}" @class(['nav-link', 'active' => request()->routeIs('piercing')])>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8.124 5a8 8 0 1 0 7.752 0" />
                    <circle cx="12" cy="20" r="2.5" fill="none" stroke="currentColor" stroke-width="2" />
                </svg>
                Piercing
            </a>

            <a href="{{ route('galerie') }}" @class(['nav-link', 'active' => request()->routeIs('galerie')])>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path fill="currentColor" fill-rule="evenodd" d="M16.375 4.5H4.625a.125.125 0 0 0-.125.125v8.254l2.859-1.54a.75.75 0 0 1 .68-.016l2.384 1.142l2.89-2.074a.75.75 0 0 1 .874 0l2.313 1.66V4.625a.125.125 0 0 0-.125-.125m.125 9.398l-2.75-1.975l-2.813 2.02a.75.75 0 0 1-.76.067l-2.444-1.17L4.5 14.583v1.792c0 .069.056.125.125.125h11.75a.125.125 0 0 0 .125-.125zM4.625 3C3.728 3 3 3.728 3 4.625v11.75C3 17.273 3.728 18 4.625 18h11.75c.898 0 1.625-.727 1.625-1.625V4.625C18 3.728 17.273 3 16.375 3zM20 8v11c0 .69-.31 1-.999 1H6v1.5h13.001c1.52 0 2.499-.982 2.499-2.5V8z" clip-rule="evenodd" />
                </svg>
                Galerie
            </a>

            <a href="{{ route('studio') }}" @class(['nav-link', 'active' => request()->routeIs('studio')])>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m5.253 4.196l-1.227.712c-.989.573-1.483.86-1.754 1.337C2 6.722 2 7.302 2 8.464v8.164c0 1.526 0 2.29.342 2.714c.228.282.547.472.9.535c.53.095 1.18-.282 2.478-1.035c.882-.511 1.73-1.043 2.785-.898c.48.065.937.293 1.853.748l3.813 1.896c.825.41.833.412 1.75.412H18c1.886 0 2.828 0 3.414-.599c.586-.598.586-1.562.586-3.49v-6.74c0-1.927 0-2.89-.586-3.49c-.586-.598-1.528-.598-3.414-.598h-2.079c-.917 0-.925-.002-1.75-.412L10.84 4.015C9.449 3.323 8.753 2.977 8.012 3S6.6 3.415 5.253 4.196M8 3v14.5m7-11v14" />
                </svg>
                Studio
            </a>

            <a href="{{ route('anfrage') }}" @class(['nav-link', 'active' => request()->routeIs('anfrage')])>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M16 2v4M8 2v4m5-2h-2C7.229 4 5.343 4 4.172 5.172S3 8.229 3 12v2c0 3.771 0 5.657 1.172 6.828S7.229 22 11 22h2c3.771 0 5.657 0 6.828-1.172S21 17.771 21 14v-2c0-3.771 0-5.657-1.172-6.828S16.771 4 13 4M3 10h18" />
                        <path d="M9 16.5s1.5.5 2 2c0 0 2.177-4 5-5" />
                    </g>
                </svg>
                Anfrage
            </a>

            <a href="{{ route('kontakt') }}" @class(['nav-link', 'active' => request()->routeIs('kontakt')])>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M16 2v2M7 22v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2M8 2v2" />
                        <circle cx="12" cy="11" r="3" />
                        <rect width="18" height="18" x="3" y="4" rx="2" />
                    </g>
                </svg>
                Kontakt
            </a>
        </div>
    </div>
</div>