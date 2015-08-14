<?php

namespace LSimditor\Facade;

use Illuminate\Support\Facades\Facade;

class LSimditorFacade extends Facade{
    protected static function getFacadeAccessor(){
        return 'LSimditor';
    }
}