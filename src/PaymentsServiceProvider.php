<?php

namespace Homeful\Payments;

use Homeful\Payments\Commands\PaymentsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PaymentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('payments')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_payments_table')
            ->hasCommand(PaymentsCommand::class);
    }
}
