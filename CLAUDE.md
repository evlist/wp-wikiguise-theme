# CLAUDE.md

Instructions for Claude Code sessions working in this repository (the theme of the wiki of Eric's SelfPedia, for the plugin Otherguise).
The brief is `docs/design/wiki-theme.md` of the repository `evlist/wp-otherguise` (branch `wiki`): read it first.

## Language
- Talk to Eric in **French**; everything stored in the repository is in **English** (the titles of the templates are those of the site).

## Rules
- Every file carries an SPDX header (GPL-3.0-or-later) or is covered by `REUSE.toml`; keep `reuse lint` clean.
- Change a template in this repository, never in the Site Editor of a site that matters; one file per slug, an entry in `theme.json` for every custom template, never rename a slug that posts use.
- The theme styles what the plugin Otherguise prints (classes `wiki-*`, blocks `wiki/*`); it reimplements none of it.
- Print: CSS rules in `modes/print.css` first; a print template only when CSS cannot do it.
- Say what was only tried on a scratch WordPress and what was never tried on the site or on a real device.
- Never ask for, store or commit tokens or passwords. Do not create repositories, pull requests or push to another branch unless asked.
