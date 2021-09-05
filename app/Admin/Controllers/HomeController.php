<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
class Node
{
    public $val;
    public $next;



    public function __construct( $val = null, $next = null )
    {
        $this->val  = $val;
        $this->next = $next;
    }


}
class HomeController extends Controller
{
    public function letcode()
    {



        // 19. 删除链表的倒数第 N 个结点
        $head = [1,2,3,4,5];$n = 2;
        $dummy = new Node();
        $dummy->next = $head;

        $fast = $slow = $dummy;
//        print_r($fast->next);exit();
        for ($i = 0; $i <= $n; ++$i) {
            $fast = $fast->next;
        }
        print_r($fast);exit();






    }

    public function index(Content $content)
    {
        return $content
            ->title('控制中心')
            ->description('主页...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
}
