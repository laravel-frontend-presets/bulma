<?php
namespace LaravelFrontendPresets\BulmaPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class BulmaPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('bulma', function ($command) {
            BulmaPreset::install(false);
            $command->info('Bulma scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('bulma-auth', function ($command) {
            BulmaPreset::install(true);
            $command->info('Bulma scaffolding with Auth views installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
