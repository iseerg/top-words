<?php

namespace Iseerg\TopWords\Facades;

use Illuminate\Support\Facades\Facade;

class TopWords extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'topwords';
    }
}
