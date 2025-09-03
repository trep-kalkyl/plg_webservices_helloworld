# Joomla 5 Webservices Plugin: Helloworld

> **✅ This plugin has been updated to use the proper Joomla 5 structure with PSR-4 namespacing and service providers.**
>  
> The plugin should now work correctly with Joomla 5's modern webservices architecture.

---

This repository contains a **custom Joomla 5 webservices plugin** called `Helloworld`. It registers a simple API endpoint (`/api/index.php/v1/helloworld/ping`) that returns a JSON response, and serves as a starting point for your own Joomla 5 API plugins.

## Features

- **Joomla 5.x compatible** with modern PSR-4 namespacing
- Uses service provider pattern with dependency injection
- Implements `SubscriberInterface` for proper event handling
- Registers a custom API route: `/helloworld/ping`
- Returns a test JSON response: `{ "hello": "world" }`
- Easy to adapt and extend

## Current Status

- **Updated:** The plugin now uses the proper Joomla 5 structure
- Migrated from old Joomla 4 single-file approach to modern architecture
- Uses `BeforeApiRouteEvent` instead of direct `ApiRouter` parameter
- Should work correctly with Joomla 5 installations

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

Test the API endpoint with:

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
        ├── helloworld.xml
        ├── services/
        │   └── provider.php
        └── src/
            └── Extension/
                └── Helloworld.php
```

## Development Notes

- The plugin uses Joomla 5's modern architecture with PSR-4 namespacing
- Implements `SubscriberInterface` for proper event subscription
- Uses `BeforeApiRouteEvent` instead of direct `ApiRouter` parameter
- Service provider pattern with dependency injection container
- Uses `onBeforeApiRoute` event to register API routes
- No additional routing files or legacy hooks are needed for Joomla 5
- The namespace is `Joomla\Plugin\Webservices\Helloworld` as defined in the manifest


## Resources

- [Joomla 5.x: Writing a Web Services Plugin](https://docs.joomla.org/J5.x:Writing_a_Web_Services_Plugin)
- [Joomla Documentation](https://docs.joomla.org/)

## License

MIT (or your chosen license)
