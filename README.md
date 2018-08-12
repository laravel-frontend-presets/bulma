# Bulma Frontend Preset For Laravel Framework 5.5 and Up

Bulma Frontend Preset For Laravel Framework 5.5 and Up

*Current version*: **Bulma v0.7.1** + **Bulma Extensions v2.2.1**


## Usage
1. Fresh install Laravel 5.5 (and up) and `cd` to your app.
2. Install this preset via `composer require laravel-frontend-presets/bulma`. No need to register the service provider. Laravel 5.5 & up can auto detect the package.
3. Use `php artisan preset bulma` for basic Bulma preset. **OR** Use `php artisan preset bulma-auth` for basic preset, Auth route entry and Bulma Auth views in one go.
4. `npm install`
5. `npm run dev`
6. Configure your favorite database (mysql, sqlite etc.)
7. `php artisan migrate` to create basic user tables.
8. `php artisan serve` (or equivalent) to run server and test preset.

## Bulma Pagination Template
1. Vendor publish and replace the code from here [default.blade.php](https://gist.github.com/Laraveldeep/0797c5a4079e3a2a0ba5b2b0e98f0357)

## Bulma Extensions
1. It is a set of missing [Bulma.io](https://bulma.io/) functionalities in the form of extensions. More info at [https://wikiki.github.io/](https://wikiki.github.io/)
2. Adjust `bulma.sass`, `bulma-extensions.sass`, `bulma-extensions.js` and `app.js` as needed.

## Screenshots
![Bulma login screen](/screenshots/bulma_login_screen.jpg)
