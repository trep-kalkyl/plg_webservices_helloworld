# Joomla 5 Webservices Plugin: Helloworld

A minimal Joomla 5 plugin for the `webservices` group that attempts to register a simple API endpoint:  
`/api/index.php/v1/helloworld/ping`  
The endpoint should return a static JSON response: `{"hello":"world"}`.

## Status

> **Not working yet:**  
> The plugin installs, but the endpoint does not respond as expected (404 error).  
> Troubleshooting is ongoing. PRs and tips are very welcome!

## Installation

1. Download as zip
2. Upload and install on your Joomla 5 site - the standard way.

## Usage

Test with:
```bash
curl "https://your-joomla-site/api/index.php/v1/helloworld/ping"
```
Should return:
```json
{"hello": "world"}
```
But currently you will likely get a 404 error.

## Structure

```
plugins/webservices/helloworld/
├── helloworld.xml
├── services/
│   └── provider.php
└── src/
    └── Extension/
        └── Helloworld.php
```

## Notes

- Follows Joomla 5 webservices plugin conventions and PSR-4 structure.
- No database, no config, no frontend.
- All logic is in the plugin class.
- Based on official Joomla content plugin structure.

---
MIT or similar license.
