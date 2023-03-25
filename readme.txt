=== React WP Admin ===
Requires at least: 5.0
Tested up to: 6.1.1
Stable tag: 1.0.0
License: GPLv2 or later


== Description ==

React WP Admin plugin is a basic set up for building an admin facing page in React.js. ESbuild (a fast next-generation JavaScript bundler) has been used as a bundler.


### GitHub link

[https://github.com/dym5-official/react-wp-admin](https://github.com/dym5-official/react-wp-admin)

### Get started

1. Get a copy the of plugin, either by downloading from WordPress plugins repository or simply cloning git repository of the plugin.

2. The downloaded plugin will have `react-wp-admin` folder name. Rename it to your plugin name, also rename the file `react-wp-admin.php` to match your folder name.

3. Change the plugin information (in `react-wp-admin.php`) according to your needs.

4. Go to `admin/react` directory and install dependencies by running `yarn`.

5. Build commands
- `yarn build` - Production build
- `yarn build:dev` - Development build, generates sourcemaps
- `yarn watch` - Automatically runs `yarn build:dev` when files change

### Note

Do not modify anything outside `src` in `react` folder if you are not confident.

== screenshots ==

1. Check React.js functionality
2. Check backend call
