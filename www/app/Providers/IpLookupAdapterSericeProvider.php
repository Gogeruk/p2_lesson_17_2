<?php

namespace App\Providers;

use GeoIp2\Database\Reader;
use Illuminate\Support\ServiceProvider;
use App\Service\IpLookup\IpLookupInterface;
//use App\Service\IpLookup\IpLookupService;
use App\Service\IpLookup\IpLookupIpApiService;

class IpLookupAdapterSericeProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(IpLookupInterface::class, function () {
            //return new IpLookupService();
            return new IpLookupIpApiService();
        });
    }
}
