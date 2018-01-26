# Bulma Frontend Preset For Laravel Framework 5.5 and Up

Preset for Bulma scaffolding on new Laravel 5.5.x project.

*Current version*: **Bulma 0.6.2** + **Bulma Extensions 0.7.2**


## Usage
1. Fresh install Laravel 5.5.x and `cd` to your app.
2. Install this preset via `composer require laravel-frontend-presets/bulma`. Laravel 5.5.x will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset bulma` for basic Bulma preset. **OR** Use `php artisan preset bulma-auth` for basic preset, Auth route entry and Bulma Auth views in one go. (**NOTE**: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install`
5. `npm run dev`
6. Configure your favorite database (mysql, sqlite etc.)
7. `php artisan migrate` to create basic user tables.
8. `php artisan serve` (or equivalent) to run server and test preset.

## Bulma Extensions
1. It is a set of missing [Bulma.io](https://bulma.io/) functionalities in the form of extensions. More info at [https://wikiki.github.io/](https://wikiki.github.io/)
2. Adjust `bulma.sass`, `bulma-extensions.sass`, `bulma-extensions.js` and `app.js` as per your need.

## Screenshots
![Bulma login screen](/screenshots/bulma_login_screen.jpg)
