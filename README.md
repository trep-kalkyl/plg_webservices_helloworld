# Joomla 5 Webservices Plugin: Helloworld

> **⚠️ This plugin is currently a work in progress and not yet functional.**
>  
> You are welcome to contribute, troubleshoot, or follow along as we work to make a minimal custom API plugin for Joomla 5.

---

This repository contains an early attempt at a **custom Joomla 5 webservices plugin** called `Helloworld`. The goal is to register a simple API endpoint (`/api/index.php/v1/helloworld/ping`) that returns a JSON response, and serve as a starting point for your own Joomla 5 API plugins.

## Features

- Intended for **Joomla 5.x**
- Registers a custom API route: `/helloworld/ping`
- Should return a test JSON response: `{ "hello": "world" }`
- Easy to adapt and extend (when working!)

## Current Status

- **Work in progress:** The plugin does **not** currently work as intended.
- If you test the endpoint, you will likely get a `404 Resource not found` error.
- We are investigating why the plugin isn't being registered or loaded by Joomla 5.
- Pull requests and debug help are very welcome!

## Normal Installation (recommended)

1. **Download the latest release** (or create a zip of the `helloworld` folder containing `helloworld.php` and `helloworld.xml`).
2. In your Joomla administrator panel, go to **System → Install → Extensions**.
3. **Upload the zip file** you downloaded or created.
4. After installation, go to **System → Manage → Extensions** (or **Extensions → Plugins**), search for "helloworld" and make sure the plugin is **published** (enabled).
5. (Optional but recommended) Go to **System → Maintenance → Clear Cache** and clear all caches.

## Manual Installation (for developers)

1. **Clone or download** this repository.
2. Copy the `helloworld` folder (containing `helloworld.php` and `helloworld.xml`) into your Joomla site's plugin directory:  
   ```
   plugins/webservices/helloworld/
   ```
3. In Joomla admin, go to **System → Extensions → Manage → Discover**, find “Webservices - Helloworld” and install.
4. Activate the plugin in **Extensions → Plugins** (search for "helloworld" and publish it).
5. (Optional) Clear Joomla cache.

## Usage

> **Note:** The endpoint does **not** currently function, but when working, you will be able to test with:

```bash
curl -X GET "https://your-joomla-site/api/index.php/v1/helloworld/ping"
```

You should get a JSON response like:
```json
{"hello": "world"}
```
But currently, you will likely get a `404 Resource not found` error.

## File Structure

```
plugins/
└── webservices/
    └── helloworld/
        ├── helloworld.php
        └── helloworld.xml
```

## Development Notes

- The plugin uses Joomla 5’s new `onBeforeApiRoute` event to register routes.
- No additional routing files or legacy hooks are needed for Joomla 5.
- The class name **must** be `PlgWebservicesHelloworld`, and the plugin folder and filenames should be lowercase.
- **Troubleshooting is ongoing!**

## Resources

- [Joomla 5.x: Writing a Web Services Plugin](https://docs.joomla.org/J5.x:Writing_a_Web_Services_Plugin)
- [Joomla Documentation](https://docs.joomla.org/)

## License

MIT (or your chosen license)
