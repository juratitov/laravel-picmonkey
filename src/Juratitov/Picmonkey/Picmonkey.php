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
     * @param array $config
     */
    public static function setConfig(array $config)
    {
        foreach ($config as $key => $value) {
            Config::set('picmonkey::config.' . $key, $value);
        }
    }

    /**
     * 
     * @param string $importUrl
     * @param string $imageId
     * @return string
     */
    public static function getLoadingUrl($importUrl, $imageId)
    {
        $query['_keyapi'] = Config::get('picmonkey::config._apikey');
        $query['_import'] = $importUrl;
        $query['_imageid'] = $imageId;
        $query['_export'] = Config::get('picmonkey::config._export');
        $query['_export_agent'] = Config::get('picmonkey::config._export_agent');
        $query['_export_field'] = Config::get('picmonkey::config._export_field');
        $query['_export_method'] = Config::get('picmonkey::config._export_method');
        $query['_replace'] = Config::get('picmonkey::config._replace');
        $query['_out_format'] = Config::get('picmonkey::config._out_format');
        $query['_close_target'] = Config::get('picmonkey::config._close_target');
        $query['_redirect'] = Config::get('picmonkey::config._redirect');

        return Config::get('picmonkey::config._base_url') . '?' . http_build_query($query);
    }

}
