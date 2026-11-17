<?php

namespace JeffersonGoncalves\Filament\GdprChildren;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class GdprChildrenServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-gdpr-children';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
