<?php
if (($_SERVER['HTTP_HOST'] ?? '') === 'www.web-ace.ch') {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    header('Location: ' . $scheme . '://web-ace.ch' . ($_SERVER['REQUEST_URI'] ?? '/'), true, 301);
    exit;
}
?>
<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace – Dein Maskottchen für mehr Barrierefreiheit | Compresso</title>
    <meta name="description" content="Hi, ich bin Ace! Ich helfe dir, deine Website zugänglicher zu machen – mit 12+ Funktionen für Schrift, Farbe, Vorlesen und mehr.">
    <meta name="theme-color" content="#a0ebca">

    <link rel="canonical" href="https://web-ace.ch/">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ace – Compresso AG">
    <meta property="og:locale" content="de_CH">
    <meta property="og:url" content="https://web-ace.ch/">
    <meta property="og:title" content="Ace – Dein Maskottchen für mehr Barrierefreiheit">
    <meta property="og:description" content="Hi, ich bin Ace! Ich helfe dir, deine Website zugänglicher zu machen – mit 12+ Funktionen für Schrift, Farbe, Vorlesen und mehr.">
    <meta property="og:image" content="https://web-ace.ch/assets/ace.svg">
    <meta property="og:image:alt" content="Ace, das Maskottchen für Web-Barrierefreiheit">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ace – Dein Maskottchen für mehr Barrierefreiheit">
    <meta name="twitter:description" content="Hi, ich bin Ace! Ich helfe dir, deine Website zugänglicher zu machen – mit 12+ Funktionen.">
    <meta name="twitter:image" content="https://web-ace.ch/assets/ace.svg">
    <meta name="twitter:image:alt" content="Ace, das Maskottchen für Web-Barrierefreiheit">

    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    <link rel="alternate icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;700;900&family=Caveat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=<?= filemtime(__DIR__ . '/css/styles.css') ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1TLVP0S02W"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-1TLVP0S02W');
    </script>

    <!-- Structured Data: Organization + WebSite -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://compresso.ch/#organization",
          "name": "Compresso AG",
          "url": "https://compresso.ch",
          "logo": "https://web-ace.ch/assets/logo.png"
        },
        {
          "@type": "WebSite",
          "@id": "https://web-ace.ch/#website",
          "url": "https://web-ace.ch/",
          "name": "Ace – Dein Maskottchen für mehr Barrierefreiheit",
          "description": "Hi, ich bin Ace! Ich helfe dir, deine Website zugänglicher zu machen – mit 12+ Funktionen für Schrift, Farbe, Vorlesen und mehr.",
          "inLanguage": "de-CH",
          "publisher": { "@id": "https://compresso.ch/#organization" }
        }
      ]
    }
    </script>
</head>
<body>

    <?php include __DIR__ . '/partials/ace-defs.svg.php'; ?>

    <!-- Navigation -->
    <header id="header">
        <div class="container">
            <a href="#hero" class="logo-link">
                <img src="assets/logo.png" alt="Compresso AG" class="logo-img">
            </a>
            <button class="mobile-menu-toggle" aria-label="Menu öffnen" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav id="main-nav">
                <ul>
                    <li><a href="#skills">Was ich kann</a></li>
                    <li><a href="#why">Warum?</a></li>
                    <li><a href="#how">So geht's</a></li>
                    <li><a href="#price">Hol dir Ace</a></li>
                    <li><a href="#contact" class="btn btn-small">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- 1) HERO -->
        <section id="hero" class="section-hero">
            <div class="hero-blob hero-blob-1"></div>
            <div class="hero-blob hero-blob-2"></div>
            <div class="container hero-grid">
                <div class="hero-text">
                    <span class="eyebrow">Hi 👋 ich bin</span>
                    <h1>Ace.<br><span class="text-stroke">Dein Web-<br>Sidekick.</span></h1>
                    <p class="subline">Ich helfe dir, deine Website für mehr Menschen zugänglich zu machen – damit alle Menschen so lesen, hören und navigieren, wie es Ihnen passt.</p>
                    <div class="actions">
                        <a href="#price" class="btn btn-primary">Ace einbauen</a>
                        <a href="#skills" class="btn btn-ghost">Mehr über mich <span aria-hidden="true">↓</span></a>
                    </div>
                    <div class="hero-stats">
                        <div><strong>12+</strong><span>Funktionen</span></div>
                        <div><strong>4</strong><span>Sprachen</span></div>
                        <div><strong>0</strong><span>Tracking</span></div>
                    </div>
                </div>
                <div class="hero-ace">
                    <div class="ace-sticker ace-sticker-xl ace-floating" role="img" aria-label="Ace Maskottchen">
                        <?php include __DIR__ . '/partials/ace.svg.php'; ?>
                    </div>
                    <div class="speech-bubble speech-bubble-hero">
                        <span class="bubble-hand">„</span>
                        Klick auf den Button unten rechts – da wohne ich!
                    </div>
                </div>
            </div>
        </section>

        <!-- 2) WHY -->
        <section id="why" class="section-why">
            <div class="container">
                <div class="why-header">
                    <span class="kicker">— Warum du mich brauchst</span>
                    <h2>Drei gute Gründe.</h2>
                </div>
                <div class="why-grid">
                    <div class="why-card why-card-yellow">
                        <span class="why-num">01</span>
                        <h3>Seit 2025 ist's Pflicht.</h3>
                        <p>Wusstest du, dass BFSG und EAA die Regeln für digitale Barrierefreiheit verschärft haben? Wer nicht handelt, riskiert Abmahnungen und Bussen. Ich bin ein wichtiger Baustein, um dein Risiko zu reduzieren – die volle Konformität bleibt aber eine Aufgabe für die ganze Seite.</p>
                    </div>
                    <div class="why-card">
                        <span class="why-num">02</span>
                        <h3>1.7 Mio. Menschen in der Schweiz.</h3>
                        <p>>So viele leben mit einer Beeinträchtigung. Ohne mich schliesst du einen relevanten Teil deiner Zielgruppe aus – und dazu alle, die gerade ihre Brille suchen.</p>
                    </div>
                    <div class="why-card">
                        <span class="why-num">03</span>
                        <h3>Bessere Usability für alle.</h3>
                        <p>Lesbare Schrift, klarer Kontrast, ruhige Seite, das hilft allen Besuchern. Und Google merkt's auch beim SEO.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3) SKILLS / FEATURES -->
        <section id="skills" class="section-skills">
            <div class="container">
                <div class="skills-header">
                    <div>
                        <span class="kicker">— Hallo, schön dich zu sehen.</span>
                        <h2>Ich bin Ace.<br>Hier ist mein Werkzeugkasten.</h2>
                        <p class="lead">Ungefähr <strong>20 % deiner Besucher</strong> brauchen Hilfe beim Lesen, Sehen oder Navigieren. Ich bin der kleine gelbe Knopf unten rechts – sobald jemand mich antippt, kann er sich aus 12+ Werkzeugen genau das aussuchen, was er gerade braucht. Alles lokal gespeichert, alles ohne Tracking.</p>
                    </div>
                    <div class="ace-corner ace-tilt-right" aria-hidden="true">
                        <?php include __DIR__ . '/partials/ace.svg.php'; ?>
                    </div>
                </div>

                <!-- Group 1: Lesen -->
                <div class="skill-group">
                    <header class="skill-group-head">
                        <span class="skill-group-emoji">📖</span>
                        <h3>Lesen.</h3>
                        <span class="skill-group-line"></span>
                    </header>
                    <div class="skill-grid">
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/font.svg" alt=""></div>
                            <h4>Textgrösse</h4>
                            <p>Stufenlos von 80 % bis 200 % skalieren – für jedes Auge die richtige Grösse.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/arrows-up-down.svg" alt=""></div>
                            <h4>Zeilenabstand</h4>
                            <p>Zeilen weiter auseinander (1×–3×) – hilft besonders bei Leseschwäche und Dyslexie.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/font-case.svg" alt=""></div>
                            <h4>Lesbare Schrift</h4>
                            <p>Wechsel zu „Atkinson Hyperlegible" – speziell für Sehschwäche entwickelt. DSGVO-konform selbst gehostet.</p>
                        </div>
                    </div>
                </div>

                <!-- Group 2: Sehen -->
                <div class="skill-group">
                    <header class="skill-group-head">
                        <span class="skill-group-emoji">👁️</span>
                        <h3>Sehen.</h3>
                        <span class="skill-group-line"></span>
                    </header>
                    <div class="skill-grid">
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/circle-half-stroke.svg" alt=""></div>
                            <h4>Kontrast-Modi</h4>
                            <p>Normal, Hoher Kontrast oder Invertiert – drei Stufen für unterschiedliche Sehbedürfnisse.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/glasses.svg" alt=""></div>
                            <h4>Blaulichtfilter</h4>
                            <p>Stufenlos (0–100 %). Schont Augen bei langer Bildschirmarbeit.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/palette.svg" alt=""></div>
                            <h4>Farbenblindheit</h4>
                            <p>Filter für Protanopie, Deuteranopie, Tritanopie und Graustufen.</p>
                        </div>
                    </div>
                </div>

                <!-- Group 3: Bewegen -->
                <div class="skill-group">
                    <header class="skill-group-head">
                        <span class="skill-group-emoji">🖱️</span>
                        <h3>Bewegen.</h3>
                        <span class="skill-group-line"></span>
                    </header>
                    <div class="skill-grid">
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/arrow-pointer.svg" alt=""></div>
                            <h4>Grosser Cursor</h4>
                            <p>Mauszeiger auf 48×48 px – ideal bei motorischen Einschränkungen oder Sehschwäche.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/pause.svg" alt=""></div>
                            <h4>Animationen stoppen</h4>
                            <p>Alle CSS-Animationen und GIFs anhalten was wichtig ist bei Epilepsie oder vestibulären Störungen.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/volume-slash.svg" alt=""></div>
                            <h4>Audio stumm</h4>
                            <p>Videos und Player (YouTube, Vimeo) stummschalten. Für eine ruhige Browsing-Erfahrung.</p>
                        </div>
                    </div>
                </div>

                <!-- Group 4: Hören & Fokus -->
                <div class="skill-group">
                    <header class="skill-group-head">
                        <span class="skill-group-emoji">🎧</span>
                        <h3>Hören &amp; Fokus.</h3>
                        <span class="skill-group-line"></span>
                    </header>
                    <div class="skill-grid">
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/image-slash.svg" alt=""></div>
                            <h4>Bilder ausblenden</h4>
                            <p>Reduziert visuelle Ablenkung und beschleunigt das Erfassen von Textinhalten.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/video-slash.svg" alt=""></div>
                            <h4>Videos ausblenden</h4>
                            <p>Videos und Mediaplayer weg, um komplett ohne Ablenkung die Seite zu besuchen.</p>
                        </div>
                        <div class="skill-card">
                            <div class="skill-icon"><img src="assets/icons/volume-high.svg" alt=""></div>
                            <h4>Vorlesen</h4>
                            <p>Integrierter Player mit Geschwindigkeit und visueller Hervorhebung des aktuellen Abschnitts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5) HOW -->
        <section id="how" class="section-how">
            <div class="container">
                <div class="how-header">
                    <span class="kicker">— So lernen wir uns kennen</span>
                    <h2>In drei Schritten dabei.</h2>
                </div>
                <ol class="how-steps">
                    <li class="how-step">
                        <span class="how-num">1</span>
                        <h3>Du buchst Ace.</h3>
                        <p>Wir schalten das Widget für dich frei.</p>
                    </li>
                    <li class="how-step">
                        <span class="how-num">2</span>
                        <h3>Wir stylen mich.</h3>
                        <p>Du wählst Funktionen, Farbe und Position. Ich pass mich an dein Branding an.</p>
                    </li>
                    <li class="how-step">
                        <span class="how-num">3</span>
                        <h3>Ich bin live.</h3>
                        <p>Deine Besucher sehen mich unten rechts und passen sich die Seite an. Alles lokal gespeichert.</p>
                    </li>
                </ol>
            </div>
        </section>

        <!-- 6) PERKS -->
        <section id="perks" class="section-perks">
            <div class="container">
                <div class="perks-header">
                    <span class="kicker">— Was sonst noch zählt</span>
                    <h2>Ich bin <span class="underline-wave">zuverlässig</span>.</h2>
                </div>
                <ul class="perks-list">
                    <li>
                        <strong>Kein Aufwand für dich.</strong>
                        Wir integrieren mich und du musst an deiner Website nichts ändern.
                    </li>
                    <li>
                        <strong>DSGVO-konform.</strong>
                        Datenschutz-konform, ohne externe Dienste oder Tracking.
                    </li>
                    <li>
                        <strong>Mehrsprachig.</strong>
                        Deutsch, Französisch, Italienisch, Englisch. Ich erkenne deine Seitensprache automatisch.
                    </li>
                    <li>
                        <strong>WordPress Plugin.</strong>
                        Plugin installieren, API-Key eingeben, fertig.
                    </li>
                    <li>
                        <strong>Keine Konflikte.</strong>
                        Ich laufe isoliert. Dein Design bleibt unangetastet.
                    </li>
                    <li>
                        <strong>Customizable.</strong>
                        Wähl Icon, Farbschema und Theme (hell/dunkel/auto) passend zu deiner Marke.
                    </li>
                </ul>
            </div>
        </section>

        <!-- 7) DEMO -->
        <section id="demo" class="section-demo">
            <div class="container">
                <div class="demo-header">
                    <span class="kicker kicker-light">— Sag Hallo zu mir</span>
                    <h2>Probier mich aus.</h2>
                    <p class="lead">Klick unten rechts auf den gelben Knopf – da wohne ich auf dieser Seite. Probier die Funktionen direkt aus, niemand schaut dir zu.</p>
                </div>

                <div class="demo-grid">
                    <div class="demo-card">
                        <div class="demo-animation">
                            <div class="floating-shapes">
                                <div class="shape shape-1"></div>
                                <div class="shape shape-2"></div>
                                <div class="shape shape-3"></div>
                            </div>
                        </div>
                        <h3>Animation stoppen</h3>
                        <p>Diese Animation kannst du über mich anhalten.</p>
                    </div>
                    <div class="demo-card">
                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=600&h=400&fit=crop" alt="Arbeitsplatz mit Laptop, Kaffee und Notizbuch" class="demo-image" loading="lazy">
                        <h3>Bilder ausblenden</h3>
                        <p>Aktiviere „Bilder ausblenden" – das Bild verschwindet.</p>
                    </div>
                    <div class="demo-card demo-text-card">
                        <p class="demo-text-sample">Dies ist ein Beispieltext. Teste die Textgrösse, den Zeilenabstand oder wechsle zur lesbaren Schrift „Atkinson Hyperlegible". Du kannst auch den Kontrast ändern oder einen Farbenblindheits-Filter aktivieren.</p>
                        <h3>Text anpassen</h3>
                        <p>Verändere Schrift, Grösse und Kontrast über mich.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8) PRICE -->
        <section id="price" class="section-price">
            <div class="container">
                <div class="price-header">
                    <span class="kicker">— Hol dir Ace</span>
                    <h2>Ein Preis. Alles drin.</h2>
                </div>
                <div class="price-wrap">
                    <div class="ace-sticker ace-sticker-md ace-floating ace-sticker-decor" aria-hidden="true">
                        <?php include __DIR__ . '/partials/ace.svg.php'; ?>
                    </div>
                    <div class="price-card">
                        <div class="price-badge">Spezialangebot bis Ende 2026</div>
                        <h3>Ace fürs ganze Jahr</h3>
                        <div class="price-original">CHF 390 / Jahr</div>
                        <div class="price-special">CHF 200<span>/ Jahr</span></div>
                        <ul class="price-features">
                            <li>12+ Barrierefreiheits-Funktionen</li>
                            <li>Unbegrenzte Seitenaufrufe</li>
                            <li>Mehrsprachig (DE / FR / IT / EN)</li>
                            <li>Custom Design (Icon, Farbe, Theme)</li>
                            <li>WordPress Plugin inklusive</li>
                            <li>Admin-Dashboard mit Statistiken</li>
                            <li>DSGVO-konform &amp; ohne Tracking</li>
                        </ul>
                        <a href="mailto:info@compresso.ch?subject=Ich%20m%C3%B6chte%20Ace%20auf%20meiner%20Website" class="btn btn-primary btn-block">Ich will Ace</a>
                        <p class="price-note">Keine versteckten Kosten. Jährlich kündbar.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 9) CONTACT -->
        <section id="contact" class="section-contact">
            <div class="container">
                <div class="contact-inner">
                    <div class="contact-text">
                        <span class="kicker kicker-dark">— Du hast Fragen?</span>
                        <h2>Frag uns einfach.</h2>
                        <p class="claim">Wir helfen dir, deine Website für mehr Menschen zugänglich zu machen – und beraten dich auch, was darüber hinaus für die Konformität sinnvoll ist.</p>
                    </div>
                    <div class="contact-persons">
                        <div class="person">
                            <img src="assets/samuel.jpg" alt="Samuel Rüegger" class="person-photo">
                            <h3>Samuel</h3>
                            <p>Technik &amp; Entwicklung</p>
                            <a href="mailto:samuel.ruegger@compresso.ch" class="btn btn-dark">Mail an Samuel</a>
                        </div>
                        <div class="person">
                            <img src="assets/andi.jpg" alt="Andi Eggli" class="person-photo">
                            <h3>Andi</h3>
                            <p>Projektleitung &amp; Strategie</p>
                            <a href="mailto:andi.eggli@compresso.ch" class="btn btn-dark">Mail an Andi</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2026 Compresso AG. <a href="https://compresso.ch/impressum/" target="_blank" rel="noopener">Impressum</a> | <a href="https://compresso.ch/datenschutzerklaerung/" target="_blank" rel="noopener">Datenschutz</a></p>
            <p>Seestrasse 49, 8702 Zollikon · +41 43 488 86 00</p>
        </div>
    </footer>

    <!-- Hint pointing visitors at Ace's widget button -->
    <button type="button" id="ace-hint" class="ace-hint" hidden aria-label="Ace ausprobieren – Widget unten rechts öffnen">
        <span class="ace-hint-bubble">Probier mich aus!</span>
        <span class="ace-hint-arrow" aria-hidden="true">↘</span>
    </button>

    <script src="js/app.js?v=<?= filemtime(__DIR__ . '/js/app.js') ?>"></script>
    <script src="https://a11y.compresso.ch/widget.js?key=mvWt1YwuJtWjzo6tsZKYOP8jazh9oKwEO35HWYqSNsxGiJSKxTVCXqR31MlvOUpv" defer></script>
</body>
</html>
