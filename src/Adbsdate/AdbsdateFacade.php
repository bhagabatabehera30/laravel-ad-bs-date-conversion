<?php
namespace Bhagabat\Adbsdate;

use Illuminate\Support\Facades\Facade;

class AdbsdateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'adbsdate';
    }
}
