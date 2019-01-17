<?php
/**
 *
 * @author Azeem Mirza <contact@azeemirza.com>
 * @date 1/5/2019 6:57 PM
 *
 * @copyright Copyright 2019 The Mit License
 * @license The MIT License
 * @license https://opensource.org/licenses/MIT
 *
 *
 * @description A CORS-compliant method.  It will allow any GET, POST, or OPTIONS requests from any origin.
 *
 *  In a production environment, you probably want to be more restrictive, but this gives you
 *  the general idea of what is involved.  For the nitty-gritty low-down, read:
 *
 * @see https://developer.mozilla.org/en/HTTP_access_control
 * @see http://www.w3.org/TR/cors/
 *
 * @param $allowedMethods
 *
 */
function cors($allowedMethods = 'GET, POST') {

    /**
     * Allow from any origin
     */

    if (isset($_SERVER['HTTP_ORIGIN'])) {

        /**
         *
         * Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
         * you want to allow, and if so:
         *
         */

        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');

        /**
         *
         * Cache for 24Hrs / 1 day
         *
         */

        header('Access-Control-Max-Age: 86400');
    }

    /**
     * Access-Control headers are received during OPTIONS requests
     */

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: " . $allowedMethods);

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
}