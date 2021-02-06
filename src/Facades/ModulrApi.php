<?php
/**
 * Created by PhpStorm.
 * User: stewartmcintosh
 * Date: 01/03/2017
 * Time: 11:27.
 */

namespace AlexBirtwell\ModulrHmacLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ModulrApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'AlexBirtwell\ModulrHmacLaravel\ModulrApi';
    }
}
