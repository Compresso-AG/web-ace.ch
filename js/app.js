document.addEventListener('DOMContentLoaded', () => {

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // --- Mobile Navigation ---
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.getElementById('main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', String(!isExpanded));
            mainNav.classList.toggle('is-open');
            menuToggle.classList.toggle('is-active');
            document.body.classList.toggle('no-scroll');
        });

        mainNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mainNav.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.classList.remove('is-active');
                document.body.classList.remove('no-scroll');
            });
        });
    }

    // --- Ace: random blink/breathe delay so multiple Aces don't sync ---
    const aceSvgs = document.querySelectorAll('.ace-svg');
    aceSvgs.forEach(svg => {
        svg.style.setProperty('--ace-delay', `${(Math.random() * 4).toFixed(2)}s`);
    });

    // --- Ace: hand-drawn line wobble (animated turbulence seed) ---
    // Re-seeds the global wobble filter every ~130ms so all Ace lines redraw
    // with a slightly different displacement — like a flip-book / stop-motion
    // hand-drawn animation.
    if (!reduceMotion) {
        const turbulence = document.querySelector('#ace-wobble feTurbulence');
        if (turbulence) {
            const STEP_MS = 130; // ~7-8 fps for the flip-book feel
            let lastStep = 0;
            let visible = !document.hidden;
            document.addEventListener('visibilitychange', () => { visible = !document.hidden; });

            const tick = (now) => {
                if (visible && now - lastStep >= STEP_MS) {
                    lastStep = now;
                    turbulence.setAttribute('seed', String(Math.floor(Math.random() * 1000)));
                }
                requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
        }
    }

    // --- Ace: eyes follow the cursor + idle look-around on every device ---
    if (!reduceMotion && aceSvgs.length) {
        const aces = Array.from(aceSvgs).map(svg => ({
            svg,
            wraps: svg.querySelectorAll('.ace-eye-wrap'),
        }));

        const MAX_OFFSET = 6;       // SVG units (viewBox is 215 wide)
        const FALLOFF = 280;        // px distance until max look offset

        let pointerX = window.innerWidth / 2;
        let pointerY = window.innerHeight / 3;
        let lastMouseMove = 0;
        let needsUpdate = false;

        const updateEyes = () => {
            aces.forEach(({ svg, wraps }) => {
                const rect = svg.getBoundingClientRect();
                if (rect.width === 0) return;
                const cx = rect.left + rect.width / 2;
                const cy = rect.top + rect.height / 2;
                const dx = pointerX - cx;
                const dy = pointerY - cy;
                const dist = Math.hypot(dx, dy) || 1;
                const strength = Math.min(1, dist / FALLOFF);
                const tx = (dx / dist) * MAX_OFFSET * strength;
                const ty = (dy / dist) * MAX_OFFSET * strength;
                wraps.forEach(w => {
                    w.setAttribute('transform', `translate(${tx.toFixed(2)} ${ty.toFixed(2)})`);
                });
            });
            needsUpdate = false;
        };

        const requestUpdate = () => {
            if (!needsUpdate) {
                needsUpdate = true;
                requestAnimationFrame(updateEyes);
            }
        };

        document.addEventListener('mousemove', (e) => {
            pointerX = e.clientX;
            pointerY = e.clientY;
            lastMouseMove = Date.now();
            requestUpdate();
        }, { passive: true });

        // Idle look-around: kicks in if no mouse activity for a moment, AND
        // is the only behavior on touch devices (no cursor to follow).
        const idleLook = () => {
            if (Date.now() - lastMouseMove > 1500) {
                const angle = Math.random() * Math.PI * 2;
                const dist = 220 + Math.random() * 380;
                pointerX = window.innerWidth / 2 + Math.cos(angle) * dist;
                pointerY = window.innerHeight / 2 + Math.sin(angle) * dist;
                requestUpdate();
            }
            setTimeout(idleLook, 1600 + Math.random() * 1800);
        };
        setTimeout(idleLook, 1200);

        window.addEventListener('scroll', requestUpdate, { passive: true });
        window.addEventListener('resize', requestUpdate);
        requestUpdate();
    }

    // --- Ace: wiggle on click ---
    document.querySelectorAll('.ace-sticker, .ace-mini, .ace-corner').forEach(ace => {
        ace.style.cursor = 'pointer';
        ace.addEventListener('click', () => {
            ace.style.animation = 'none';
            void ace.offsetWidth;
            ace.style.animation = 'ace-wiggle 0.6s ease-in-out';
        });
    });

    // --- Ace hint: pulsing pointer toward the widget button ---
    const aceHint = document.getElementById('ace-hint');
    if (aceHint) {
        const DISMISS_KEY = 'ace-hint-dismissed';
        let dismissed = false;
        try { dismissed = sessionStorage.getItem(DISMISS_KEY) === '1'; } catch (e) { /* private mode */ }

        const dismiss = () => {
            dismissed = true;
            aceHint.classList.remove('is-visible');
            try { sessionStorage.setItem(DISMISS_KEY, '1'); } catch (e) {}
        };

        if (!dismissed) {
            aceHint.hidden = false;

            // Reveal after a short scroll OR after 4s, whichever comes first
            let revealed = false;
            const reveal = () => {
                if (revealed || dismissed) return;
                revealed = true;
                aceHint.classList.add('is-visible');
            };
            const onScroll = () => { if (window.scrollY > 200) reveal(); };
            window.addEventListener('scroll', onScroll, { passive: true });
            setTimeout(reveal, 4000);

            // Click: scroll to demo and dismiss
            aceHint.addEventListener('click', () => {
                const demo = document.getElementById('demo');
                if (demo) demo.scrollIntoView({ behavior: 'smooth', block: 'start' });
                dismiss();
            });

            // Hide once the visitor reaches the demo or footer (widget is right there)
            if ('IntersectionObserver' in window) {
                const farTargets = [document.getElementById('demo'), document.querySelector('footer')].filter(Boolean);
                const farObs = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            aceHint.classList.remove('is-visible');
                        } else if (revealed && !dismissed) {
                            aceHint.classList.add('is-visible');
                        }
                    });
                }, { threshold: 0.2 });
                farTargets.forEach(t => farObs.observe(t));
            }
        }
    }

    // --- Reveal on Scroll ---
    if ('IntersectionObserver' in window) {
        const reveal = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    reveal.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

        document.querySelectorAll('.why-card, .skill-card, .how-step, .perks-list li, .demo-card, .price-card, .person').forEach(el => {
            el.classList.add('reveal');
            reveal.observe(el);
        });
    }
});
