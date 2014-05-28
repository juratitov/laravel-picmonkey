<?php

namespace Juratitov\Picmonkey;

use \Config;

/**
 * Class Picmonkey
 * 
 * @link http://www.picmonkey.com/help/articles/1017782-api-documentation PicMonkey API Documentation
 */
class Picmonkey
{

    /**
     * 
     * @return boolean
     */
    public static function getLoadingUrl($importUrl, $imageId)
    {
        $query['_keyapi'] = Config::get('picmonkey::config._apikey');
        $query['_import'] = $importUrl;
        $query['_imageid'] = $imageId;

        return Config::get('picmonkey::config._base_url') . '?' . http_build_query($query);
    }

}
