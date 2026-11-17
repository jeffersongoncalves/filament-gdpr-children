<?php

namespace JeffersonGoncalves\Filament\GdprChildren;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GdprChildrenServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-gdpr-children')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
