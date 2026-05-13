# web-ace.ch

Landingpage für **Ace** – das Accessibility-Widget der [Compresso AG](https://compresso.ch). Ace ist ein Maskottchen, das Besucherinnen und Besucher dabei unterstützt, Websites barrierefreier zu nutzen: Schriftgrösse, Kontraste, Vorlesefunktion und weitere Anpassungen direkt im Browser.

Diese Seite präsentiert das Produkt, seine Funktionen und Einsatzmöglichkeiten unter [web-ace.ch](https://web-ace.ch).

## Technologie

| Bereich      | Stack                            |
|--------------|----------------------------------|
| Sprache      | PHP 8.3                          |
| Webserver    | nginx-fpm (lokal via DDEV)       |
| Frontend     | Vanilla CSS, Vanilla JavaScript  |
| Schriftarten | DM Sans, Caveat (Google Fonts)   |
| Build-Tools  | keine                            |
| Sprache (UI) | Deutsch                          |

Die Seite kommt bewusst ohne Frontend-Build und ohne Abhängigkeiten aus. Sämtliche Assets werden statisch ausgeliefert; PHP wird ausschliesslich für kleine Includes (SVG-Definitionen, Maskottchen-Markup) verwendet.

## Lokale Entwicklung

Voraussetzung: [DDEV](https://ddev.readthedocs.io/en/stable/) und Docker.

```bash
git clone git@github.com:Compresso-AG/web-ace.ch.git
cd web-ace.ch
ddev start
```

Anschliessend erreichbar unter `https://web-ace.ddev.site`.

## Projektstruktur

```
/
├── .ddev/         DDEV-Konfiguration
├── assets/        Bilder, Icons, Favicon, Logo
├── css/           Styles
├── js/            Interaktion
├── partials/      PHP-Includes (SVG-Defs, Ace-Maskottchen)
└── index.php      Einstiegspunkt
```

## Beitragen

Pull Requests aus dem Compresso-Team sind willkommen. Externe Beiträge werden im Einzelfall geprüft – bitte vorab ein Issue eröffnen.

## Kontakt

| Rolle                       | Person          | E-Mail                          |
|-----------------------------|-----------------|---------------------------------|
| Technik & Entwicklung       | Samuel Rüegger  | samuel.ruegger@compresso.ch     |
| Projektleitung & Strategie  | Andi Eggli      | andi.eggli@compresso.ch         |

## Lizenz

Code und Inhalte stehen unter dem Copyright der Compresso AG. Eine Nutzung über die Darstellung der Landingpage hinaus erfolgt nur mit ausdrücklicher Zustimmung.

---

Ein Produkt der [Compresso AG](https://compresso.ch) – Digitalagentur aus der Schweiz.
