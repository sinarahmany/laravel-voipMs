<?php

namespace Sinarahmany\LaravelVoipMs\Facades;

use Illuminate\Support\Facades\Facade;

class VoipMs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'voipms';
    }
}
