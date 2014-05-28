<?php

namespace Juratitov\Picmonkey;

class Picmonkey
{

    /**
     * Inject dependencies
     * @param array $config The config data array
     * @return void
     */
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * 
     * @return boolean
     */
    public static function getLoadingUrl()
    {
        return 'http://www.picmonkey.com/service ?_apikey=00112233445566778899aabbccddeeff &_import=http%3A%2F%2Ffarm8.staticflickr.com%2F7129%2F7113442667_efa2b2181a_b_d.jpg';
    }

}
