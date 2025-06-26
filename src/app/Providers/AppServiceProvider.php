<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Seo;
use App\Policies\ActivityPolicy;
use Filament\Actions\MountableAction;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use Spatie\Activitylog\Models\Activity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Activity::class, ActivityPolicy::class);

        Page::formActionsAlignment(Alignment::Right);
        Notifications::alignment(Alignment::End);
        Notifications::verticalAlignment(VerticalAlignment::End);

        Page::$reportValidationErrorUsing = function (ValidationException $exception) {
            Notification::make()
                ->title($exception->getMessage())
                ->danger()
                ->send();
        };

        MountableAction::configureUsing(function (MountableAction $action) {
            $action->modalFooterActionsAlignment(Alignment::Right);
        });

        // Global View Data
        View::composer('*', function ($view) {
            $view->with('seo', Seo::first());
            $view->with('footerJargon', Footer::first()?->jargon ?? '');
        });

        // ✅ Panggil metode registerHeroicons
        $this->registerHeroicons();
    }

    /**
     * Register custom Heroicons as Blade components
     */
    protected function registerHeroicons(): void
    {
        $paths = [
            'heroicon-o' => base_path('vendor/blade-ui-kit/blade-heroicons/resources/views/components/outline'),
            'heroicon-s' => base_path('vendor/blade-ui-kit/blade-heroicons/resources/views/components/solid'),
        ];

        foreach ($paths as $prefix => $dir) {
            foreach (glob($dir . '/*.blade.php') as $file) {
                $name = basename($file, '.blade.php');
                Blade::component("blade-ui-kit::heroicon." . substr($prefix, 9) . ".$name", "$prefix-$name");
            }
        }
    }
}
