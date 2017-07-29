# Laravel 5.5.x Front-end Preset For Bulma

Preset for Bulma scaffolding on new Laravel 5.5.x project.

*Current version*: **Bulma 0.4.4**


## Usage
1. Fresh install Laravel 5.5.x and `cd` to your app.
2. Install this preset via `composer require laravel-frontend-presets/bulma`. Laravel 5.5.x will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset bulma` for basic Bulma preset.

OR

4. Use `php artisan preset bulma-auth` for basic preset, Auth route entry and Bulma Auth views. (**NOTE**: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
5. `npm install`
6. `npm run dev`
7. Configure your favorite database (mysql, sqlite etc.)
8. `php artisan migrate` to create basic user tables.
9. `php artisan serve` (or equivalent) to run server and test preset.
