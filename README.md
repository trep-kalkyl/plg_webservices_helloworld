# Joomla 5 Webservices Plugin: Helloworld - plg_webservices_helloworld

This repository contains a minimal example of a **custom Joomla 5 webservices plugin** called `Helloworld`. It demonstrates how to register a simple API endpoint (`/api/index.php/v1/helloworld/ping`) that returns a JSON response, and serves as a starting point for your own Joomla 5 API plugins.

## Features

- Compatible with **Joomla 5.x**
- Adds a custom API route: `/helloworld/ping`
- Returns a test JSON response: `{ "hello": "world" }`
- Easy to adapt and extend for your own API needs

## Normal installation (recommended)

1. **Download the latest release** (or create a zip of the `helloworld` folder containing `helloworld.php` and `helloworld.xml`).
2. In your Joomla administrator panel, go to **System → Install → Extensions**.
3. **Upload the zip file** you downloaded or created.
4. After installation, go to **System → Manage → Extensions** (or **Extensions → Plugins**), search for "helloworld" and make sure the plugin is **published** (enabled).
5. (Optional but recommended) Go to **System → Maintenance → Clear Cache** and clear all caches.

## Manual installation (for developers)

1. **Clone or download** this repository.
2. Copy the `helloworld` folder (containing `helloworld.php` and `helloworld.xml`) into your Joomla site's plugin directory:  
   ```
   plugins/webservices/helloworld/
   ```
3. In Joomla admin, go to **System → Extensions → Manage → Discover**, find “Webservices - Helloworld” and install.
4. Activate the plugin in **Extensions → Plugins** (search for "helloworld" and publish it).
5. (Optional) Clear Joomla cache.

## Usage

Once installed and enabled, you can test the endpoint with:

```bash
curl -X GET "https://your-joomla-site/api/index.php/v1/helloworld/ping"
```

You should get a JSON response like:
```json
{"hello": "world"}
```

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

## Resources

- [Joomla 5.x: Writing a Web Services Plugin](https://docs.joomla.org/J5.x:Writing_a_Web_Services_Plugin)
- [Joomla Documentation](https://docs.joomla.org/)

## License

MIT (or your chosen license)
