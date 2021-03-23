<?php

namespace App\Providers;

//use UAParser\Parser;
use WhichBrowser\Parser;
use Illuminate\Support\ServiceProvider;
use App\Service\Useragent\UserAgentInterface;
use App\Service\Useragent\UserAgentService;
use App\Service\Useragent\UserAgentTwoService;

class UserAgentAdapterSericeProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(UserAgentInterface::class, function () {
            //return new UserAgentService();
            return new UserAgentTwoService();
        });
    }
}
