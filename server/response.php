<?php

/**
 *
 * @author Azeem Mirza <contact@azeemirza.com>
 * @datetime 1/17/2019  10:30 PM
 *
 * @copyright Copyright 2019 The Mit License
 * @license The MIT License
 * @license https://opensource.org/licenses/MIT
 *
 * @description A response method. It will send HTTP Response.
 *
 * @param $code {number}
 * @param $message {string}
 * @param $is_exit {boolean}
 *
 */

function res ($code, $message, $is_exit) {
    $status = false;

    if ($code === 202) $status = true;

    http_response_code($code);
    echo json_encode((object) [ 'status' => $status , 'message' => $message ]);

    if ($is_exit) exit;
}