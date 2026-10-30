# asigato

WordPress theme for [asigatoflowers.com](https://asigatoflowers.com) — *a floral state of mind*.

A redesign of the current site: an editorial one-page front page anchored on the pale logo green, with subtle, tasteful motion. This repository root **is** the theme.

## 🌿 Live preview

**[Open the theme preview in WordPress Playground](https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Ffparie%2Fasigato%2Fmain%2Fblueprint.json)** — a full WordPress instance runs in your browser, installs this theme from the `main` branch, activates it and seeds the six service pages. No setup, no account, nothing installed on your machine. (Give it ~30 seconds on first load; it is running PHP in a browser tab.)

You land logged in as admin, so you can also open the dashboard and poke around (Pages, Appearance → Themes).

## Structure

| File | Purpose |
|---|---|
| `style.css` | Theme header + all styles (colors, layout, motion) |
| `functions.php` | Theme setup, menus, assets, working contact form (`wp_mail`) |
| `header.php` / `footer.php` | Nav + footer (contact form, link lists) |
| `front-page.php` | The one-page homepage (hero, services, ikebana, portfolio, subscriptions) |
| `index.php`, `page.php`, `single.php` | Blog index, static pages, single post |
| `js/site.js` | Nav shadow, scroll reveals, falling petals, marquee |
| `concept/index.html` | The original standalone HTML concept (no build, no dependencies) |
| `blueprint.json` | WordPress Playground blueprint used for the live preview |

## Installation (on the real site)

1. Download this repository as a ZIP and rename the folder to `asigato` (if needed).
2. In WordPress: **Appearance → Themes → Add New → Upload Theme** → choose the ZIP.
3. Activate **Asigato Flowers**.
4. **Settings → Reading** → *Your homepage displays* → A static page → Homepage = `Home`.
5. **Appearance → Menus** → create the "Hoofdmenu" (assign to *Hoofdmenu* location):
   Diensten (`/#diensten`), Ikebana, Portfolio (`/#portfolio`), Abonnementen, Boek een gesprek (`/#contact`).
   Until a menu is assigned, the theme shows a sensible default menu.

## How the service cards work

The front page looks up your **existing pages by slug**: `huwelijken`, `ikebana`, `workshops`, `abonnementen`, `commercieel`, `grafstukken`.

- If a page exists, the card shows its **title**, **excerpt** (or trimmed content) and links to it — so the front page stays in sync with what you write in WordPress.
- If a page is missing, built-in Dutch fallback copy is shown.
- Tip: give each page a short excerpt so the cards read nicely.

## Design notes

- **Palette** — pale logo green `#BCD2B6`, cream `#FAF7F0`, deep forest `#3E4A38`, sage `#8FA983`, blush `#E9C9C2`.
- **Motion** — falling petals, drifting gradient blobs, a slow marquee, a growing botanical line drawing, scroll reveals, hover lifts. All motion is disabled for visitors who prefer reduced motion (`prefers-reduced-motion`).
- **Contact form** — the footer form posts via `admin-post.php` with a nonce and sends to the site admin email (`wp_mail`).

## Next steps

See the [to-do issue](https://github.com/fparie/asigato/issues/1) for the full list (logo, photography, screenshot, SEO…).

## License

GPL-2.0-or-later, like WordPress itself.
