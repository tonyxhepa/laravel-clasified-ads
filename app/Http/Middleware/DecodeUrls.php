<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class DecodeUrls extends TransformsRequest
{

    protected $except = [
        //
    ];

    protected function transform($key, $value)
    {
        if (in_array($key, $this->except, true)) {
            return $value;
        }

        return filter_var($value, FILTER_VALIDATE_URL) ? urldecode($value) : $value;
    }
}
