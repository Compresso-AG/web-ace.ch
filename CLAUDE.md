# web-ace.ch

Landingpage für **Ace** – das Maskottchen und Accessibility-Widget der Compresso AG. Eigene Domain (`web-ace.ch`), eigene Codebasis. Ursprünglich Teil des Mono-Repos `compresso-products-landingpages`, jetzt ausgelagert.

## Produkt-App & Preis

- Diese Seite ist reines Marketing. Registrierung, Kundenkonto, Abo (Stripe) und das Admin-Dashboard laufen über die **separate App `a11y.compresso.ch`** (eigenes Repo `~/Sites/a11y.compresso.ch`).
- Die Preis-Sektion (`#price` in `index.php`) verlinkt mit »Jetzt registrieren« direkt auf `https://a11y.compresso.ch/register`.
- Preis: **CHF 390 / Jahr** pro Domain, **30 Tage kostenlos testen**. Kein Rabatt-/Spezialangebot mehr (früher CHF 200).

## Projektstruktur

```
/
├── .ddev/                  DDEV Konfiguration
├── assets/                 Bilder, Icons, Favicon, Logo
├── css/styles.css          Styles (Vanilla CSS, keine Build-Tools)
├── js/app.js               Interaktion (Vanilla JS)
├── partials/               PHP-Includes (SVG-Defs, Ace-Maskottchen)
├── index.php               Einstiegspunkt
├── CLAUDE.md               Dieses File
└── README.md               Öffentliche Repo-Doku
```

## Tech Stack

- PHP 8.3 (kein Framework, statische Seite mit Includes)
- DDEV mit nginx-fpm
- Vanilla CSS & JS, keine Build-Tools
- Sprache: Deutsch (`<html lang="de">`)

## Lokale Entwicklung

```bash
ddev start
```

URL: `https://web-ace.ddev.site`

## Tonalität & Ansprache

- Durchgehend per **"Du"** (nicht "Sie", nicht "euch/ihr")
- Beispiele: "deine Website", "stell deine Frage", "deine Vorteile"
- Lockerer, persönlicher Ton passend zum Maskottchen-Charakter von Ace

## Design-Konventionen

- Look & Feel angelehnt an compresso.ch
- Font: DM Sans und Caveat (Google Fonts)
- Farbschema: Schwarz/Weiss mit Brand Gradient
- Brand Gradient: `linear-gradient(90deg, rgb(123, 195, 215) 0%, rgb(160, 235, 202) 53%, rgb(203, 246, 172) 100%)`
- CSS Custom Properties für konsistente Werte
- Responsive: Mobile-First, Breakpoint bei 768px

## Kontaktpersonen

- **Samuel Rüegger** – Technik & Entwicklung (`samuel.ruegger@compresso.ch`)
- **Andi Eggli** – Projektleitung & Strategie (`andi.eggli@compresso.ch`)

## Deployment

- Produktion: `https://web-ace.ch`
- Deployment via rsync auf den Compresso-Webserver
- Zugang: `bifisawo@compresso.ch` (SSH), FreeBSD 13.5, PHP 8.3

## Git-Konventionen

- Commit-Messages auf Deutsch oder Englisch, sachlich, ohne Hinweise auf KI-Tools oder Co-Author-Trailer
- Kein `Co-Authored-By: Claude …` und keine "Generated with"-Footers in Commits oder Pull Requests
