<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户中心';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'))->sortable()->totalRow();
        $grid->column('name', __('姓名'))->limit(10)->editable();
        $grid->column('email', __('邮箱'))->editable();
        $grid->column('nationality', __('国籍'));
//        $grid->column('password', __('密码'));
        $grid->column('created_at', __('创建时间'))->editable('datetime');
        $grid->column('updated_at', __('更新时间'))->editable('datetime');

        $grid->actions(function ($actions) {
            // 去掉编辑
            $actions->disableEdit();
        });
        $grid->header(function ($query) {
            return 'header';
        });

        $grid->footer(function ($query) {
            return 'footer';
        });
        $grid->quickSearch('name');
        $grid->selector(function (Grid\Tools\Selector $selector) {
            $selector->select('nationality', '国籍', [
                '中国' => '中国',
                '日本' => '日本',
                '美国' => '美国',
                '法国' => '法国'
            ]);
        });
        $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
            $create->text('name', '名称');
            $create->email('email', '邮箱');
        });
        $grid->enableHotKeys();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('姓名'));
        $show->field('email', __('邮箱'));
        $show->field('password', __('密码'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('姓名'));
        $form->email('email', __('邮箱'));
//        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('密码'));
//        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
