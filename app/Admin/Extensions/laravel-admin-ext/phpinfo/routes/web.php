<?php

use Encore\PHPInfo\Http\Controllers\PHPInfoController;

use Encore\Admin\Layout\Content;
use Encore\PHPInfo\PHPInfo;

$path = PHPInfo::config('path', 'phpinfo');

Route::get($path, function (Content $content, PHPInfo $info) {
    $info = $info->toCollection();

    return $content
        ->header('PHP\'s configuration')
        ->description(' ')
        ->body(view('phpinfo::phpinfo', compact('info')));
});
