# Joomla 5 Webservices Plugin: Helloworld

A **modern Joomla 5 webservices plugin** that follows PSR-4 conventions and implements the latest Joomla 5 best practices for API development.

---

This repository contains a **custom Joomla 5 webservices plugin** called `Helloworld` that registers a simple API endpoint (`/api/index.php/v1/helloworld/ping`) and returns a JSON response. It serves as a modern starting point for your own Joomla 5 API plugins.

## Features

- **Joomla 5.x compatible** with modern PSR-4 structure
- **SubscriberInterface implementation** for event handling
- **Service Provider pattern** for dependency injection
- **Namespace support** following Joomla 5 conventions
- Registers a custom API route: `/helloworld/ping`
- Returns a test JSON response: `{ "hello": "world" }`
- Easy to adapt and extend

## Modern Structure

This plugin follows Joomla 5 best practices with:

- **PSR-4 Namespace**: `Joomla\Plugin\Webservices\Helloworld`
- **Service Provider**: `services/provider.php` for dependency injection
- **Extension Class**: `src/Extension/Helloworld.php` with proper interfaces
- **Event Subscriber**: Implements `SubscriberInterface` for modern event handling
- **Proper Event Usage**: Uses `BeforeApiRouteEvent` parameter instead of direct router access

## Installation

### Option 1: Normal Installation (recommended)

1. **Download the latest release** (or create a zip of this entire repository).
2. In your Joomla administrator panel, go to **System → Install → Extensions**.
3. **Upload the zip file** you downloaded or created.
4. After installation, go to **System → Manage → Extensions** (or **Extensions → Plugins**), search for "helloworld" and make sure the plugin is **published** (enabled).
5. (Optional but recommended) Go to **System → Maintenance → Clear Cache** and clear all caches.

### Option 2: Manual Installation (for developers)

1. **Clone or download** this repository.
2. Copy the entire plugin folder (containing all files) into your Joomla site's plugin directory:  
   ```
   plugins/webservices/helloworld/
   ```
3. In Joomla admin, go to **System → Extensions → Manage → Discover**, find "Webservices - Helloworld" and install.
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
        ├── helloworld.php          # Legacy entry point
        ├── helloworld.xml          # Plugin manifest with namespace
        ├── services/
        │   └── provider.php        # Dependency injection service provider
        └── src/
            └── Extension/
                └── Helloworld.php  # Modern namespaced plugin class
```

## Development Notes

### Modern Joomla 5 Implementation
- Uses **PSR-4 namespace structure** with `Joomla\Plugin\Webservices\Helloworld`
- Implements **SubscriberInterface** for modern event handling  
- Uses **service provider pattern** for dependency injection
- Follows **Joomla 5 conventions** for webservice plugins

### Key Technical Details
- The plugin uses Joomla 5's `onBeforeApiRoute` event to register routes
- Event handler receives `BeforeApiRouteEvent` parameter for proper event handling
- Service provider manages plugin instantiation and dependencies
- No additional routing files or legacy hooks are needed for Joomla 5
- Plugin element name matches the folder name: `helloworld`

## Resources

- [Joomla 5.x: Writing a Web Services Plugin](https://docs.joomla.org/J5.x:Writing_a_Web_Services_Plugin)
- [Joomla Documentation](https://docs.joomla.org/)

## License

MIT (or your chosen license)