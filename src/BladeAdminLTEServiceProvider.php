<?php 
namespace DGvai\BladeAdminLTE;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeAdminLTEServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadComponents();
    }

    public function register()
    {
        $this->publishers();
        $this->loadViewsFrom(__DIR__.'/resources/components', 'xdg');
    }

    private function publishers()
    {
        // $this->publishes([
        //     __DIR__.'/config/larataller.php' => config_path('larataller.php'),
        // ], 'larataller');

        // $this->publishes([
        //     __DIR__.'/resources/views' => base_path('resources/views/vendor/larataller'),
        // ], 'larataller-views');
    }

    private function loadComponents()
    {
        Blade::component('dg-input', Components\Input::class);
        Blade::component('dg-card', Components\Card::class);
        Blade::component('dg-info-box', Components\InfoBox::class);
        Blade::component('dg-small-box', Components\SmallBox::class);
        Blade::component('dg-profile-flat', Components\ProfileFlat::class);
        Blade::component('dg-profile-flat-item', Components\ProfileFlatItem::class);
        Blade::component('dg-profile-widget', Components\ProfileWidget::class);
        Blade::component('dg-profile-widget-item', Components\ProfileWidgetItem::class);
        Blade::component('dg-alert', Components\Alert::class);
        Blade::component('dg-callout', Components\Callout::class);
        Blade::component('dg-progress', Components\Progress::class);
    }
}