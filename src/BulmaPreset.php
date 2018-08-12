<?php
namespace LaravelFrontendPresets\BulmaPreset;

use Artisan;
use Illuminate\Support\Arr;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class BulmaPreset extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install($withAuth = false)
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();

        if($withAuth)
        {
            static::addAuthTemplates();
        }
        else
        {
            static::updateWelcomePage();
        }

        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'bulma' => '^0.7.1',
            'bulma-extensions' => '^2.2.0',
        ] + Arr::except($packages, ['bootstrap']);
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        // clean up orphan files
        $orphan_sass_files = glob(resource_path('/assets/sass/*.*'));

        foreach($orphan_sass_files as $sass_file)
        {
            (new Filesystem)->delete($sass_file);
        }

        copy(__DIR__.'/bulma-stubs/initial-variables.sass', resource_path('assets/sass/initial-variables.sass'));
        copy(__DIR__.'/bulma-stubs/bulma.sass', resource_path('assets/sass/bulma.sass'));
        copy(__DIR__.'/bulma-stubs/bulma-extensions.sass', resource_path('assets/sass/bulma-extensions.sass'));
        copy(__DIR__.'/bulma-stubs/app.scss', resource_path('assets/sass/app.scss'));
    }


    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        $file = new Filesystem;

        $file->delete(resource_path('assets/js/bootstrap.js'));
        $file->delete(resource_path('assets/js/app.js'));

        copy(__DIR__.'/bulma-stubs/bootstrap.js', resource_path('assets/js/bootstrap.js'));
        copy(__DIR__.'/bulma-stubs/app.js', resource_path('assets/js/app.js'));
        copy(__DIR__.'/bulma-stubs/bulma-extensions.js', resource_path('assets/js/bulma-extensions.js'));
    }


    /**
     * Update the default welcome page file with Bulma buttons.
     *
     * @return void
     */
    protected static function updateWelcomePage()
    {
        // remove default welcome page
        (new Filesystem)->delete(
            resource_path('views/welcome.blade.php')
        );

        // copy new one with Bulma buttons
        copy(__DIR__.'/bulma-stubs/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    /**
     * Copy Bulma Auth view templates.
     *
     * @return void
     */
    protected static function addAuthTemplates()
    {
        // Add Home controller
        copy(__DIR__.'/bulma-stubs/Controllers/HomeController.php', app_path('Http/Controllers/HomeController.php'));

        // Add Auth route in 'routes/web.php'
        $auth_route_entry = "Auth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n";
        file_put_contents('./routes/web.php', $auth_route_entry, FILE_APPEND);

        // Copy Bulma Auth view templates
        (new Filesystem)->copyDirectory(__DIR__.'/bulma-stubs/views', resource_path('views'));
    }
}
