<!--
SPDX-FileCopyrightText: 2026 Eric van der Vlist <vdv@dyomedea.com>
SPDX-License-Identifier: GPL-3.0-or-later
-->

# Wikiguise

A standalone minimal block theme for the wiki of Eric's SelfPedia, for the module Wiki of the plugin [Otherguise](https://github.com/evlist/wp-otherguise). The brief is `docs/design/wiki-theme.md` in that repository (branch `wiki`).

- **Layout**: three zones (menu | text | tools) on a wide screen, two on a medium one, one on a narrow one. One theme, no separate mobile theme.
- **Templates**: `page`, `single`, `index`, `archive`, `search`, `404`, `wiki-missing` (the 404 of a wiki address); `wiki-biographie` and `wiki-encyclopedie` are the templates a branch may choose (`customTemplates` of `theme.json`).
- **Parts**: `header`, `footer`, `menu` (collapsible), `tools`.
- **Print**: `modes/print.css`, loaded by the Modes of Otherguise (`?mode=print`); no print template.
- **No script**: the menu is a `core/details` block kept open on wide screens by CSS (`::details-content`); where that is not supported it stays collapsed and can be opened.

Not there yet (to be built in the plugin): the table of contents, the navigation of the branch, the "Edit" button and the tabs of action beyond the two fixed labels `Page` and `Lire`.

## Rules for the templates

Change a template in this repository, never in the Site Editor of a site that matters (a template saved there shadows the file). One file per slug; every custom template has an entry in `theme.json`; never rename a slug that posts use.

## Licence

GPL-3.0-or-later. `reuse lint` must stay clean.
