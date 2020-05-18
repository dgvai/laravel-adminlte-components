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
        $this->publishes([
            __DIR__.'/resources/components' => base_path('resources/views/vendor/adminlte-components'),
        ], 'adminlte-dg-components');
    }

    private function loadComponents()
    {
        /**
         * FORM COMPONENTS
         */

        Blade::component('dg-input', Components\Input::class);
        Blade::component('dg-input-file', Components\InputFile::class);
        Blade::component('dg-input-color', Components\InputColor::class);
        Blade::component('dg-input-date', Components\InputDate::class);
        Blade::component('dg-textarea', Components\Textarea::class);
        Blade::component('dg-select', Components\Select::class);
        Blade::component('dg-select2', Components\Select2::class);
        Blade::component('dg-select-icon', Components\SelectIcon::class);
        Blade::component('dg-option', Components\Option::class);
        Blade::component('dg-input-switch', Components\InputSwitch::class);
        Blade::component('dg-input-tag', Components\InputTag::class);
        Blade::component('dg-submit', Components\Submit::class);
        Blade::component('dg-text-editor', Components\TextEditor::class);
        Blade::component('dg-date-range', Components\DateRange::class);

        /**
         * WIDGETS
         */

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
        Blade::component('dg-modal', Components\Modal::class);
        Blade::component('dg-datatable', Components\Datatable::class);
    }
}