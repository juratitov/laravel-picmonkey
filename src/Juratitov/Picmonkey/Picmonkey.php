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
    public function getLoadingUrl($importUrl, $imageId, $exportUrl = null, $redirectUrl = null, $closeTarget = null)
    {
        $this->config['_import'] = $importUrl;
        $this->config['_imageid'] = $imageId;
        if ($exportUrl) {
            $this->config['_export'] = $exportUrl;
        }
        if ($redirectUrl) {
            $this->config['_redirect'] = $redirectUrl;
        }
        if ($closeTarget) {
            $this->config['_close_target'] = $closeTarget;
        }

        return $this->config['_base_url'] . '?' . http_build_query($this->config);
    }

}
