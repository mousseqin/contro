<?php

if (!function_exists('umi')) {
    function umi($path)
    {
        if (env('UMI', false)) {
            return '//localhost:8009/' . $path;
        } else {
            return Str::finish(asset('vendor/store/'), '/') . $path;
        }
    }
}
