<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Content;

class ChartjsController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Chartjs')
            ->body(view('admin.chartjs'));
//            ->body(new Box('Bar chart', view('admin.chartjs')));
    }
}
