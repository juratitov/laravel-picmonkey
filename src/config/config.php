<?php

/*
 * PicMonkey Photo Editor API config file
 */

return [
    '_apikey' => '',
    '_base_url' => 'http://www.picmonkey.com/service',
    '_export' => '', //URL to use for exporting an image
    '_export_agent' => 'server', //'server' or 'browser'
    '_export_field' => 'image', // Name of the field to contain the exported image
    '_export_method' => 'POST', // “POST” or “GET”
    /**
     * Optionally ask the user before overwriting. See above for more information.
     * 
      no: _imageid is never passed through. This is the default.
      yes: _imageid is always passed through
      ask: The user is asked if they would like to replace the image or save a new copy. If they say ‘replace’ _imageid is passed through, otherwise it’s not passed.
      confirm: The user is asked if they would like to replace the image. If they say ‘yes’, _imageid is passed through.  If they say ‘no’, they are returned to the editor.
     * 
     */
    '_replace' => 'confirm', // 
    '_out_format' => 'jpg', // The output file format (png or jpg). jpg is the default.
    '_out_quality' => 8, // The output compression quality (1-10). The default is 8.
    '_out_maxwidth' => 0, // Maximum output width in pixels.
    '_out_maxheight' => 0, // Maximum output height in pixels.
    '_close_target' => '', // URL for a destination when the user selects "close"
    '_redirect' => '', // URL to redirect the browser to after export.
];
