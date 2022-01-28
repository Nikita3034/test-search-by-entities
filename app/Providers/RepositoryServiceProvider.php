<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        \App\Contracts\Repositories\AddressRepositoryContract::class => \App\Repositories\AddressRepository::class,
    ];
}
