<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Facade;

class TestClass extends Facade
{
    public static function getFacadeAccessor(){
        return 'example_facade';
    }
}
