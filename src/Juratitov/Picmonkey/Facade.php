<?php

namespace Juratitov\Picmonkey;

class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return 'picmonkey';
    }

}
