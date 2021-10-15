<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('email');
            $grid->column('phone');
            $grid->column('type')->using(['1'=>'投资者','2'=>'媒体','3'=>'分析师'])->label([
                2 => 'primary',
                1 => 'info',
                3 => 'success'
            ]);
            $grid->column('avator')->image('',50,50);
            $grid->column('status')->switch();
            $grid->column('wechat')->image('',50,50);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('email');
                 $filter->equal('phone');
            });
        });
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->email('email')->rules('required');
            $form->mobile('phone')->rules('required');
            $form->radio('type')->options(['1'=>'投资者','2'=>'媒体','3'=>'分析师'])->default('1');
            $form->image('avator')->uniqueName();
            $form->password('password')->default($form->model()->password,true);
            // $form->password('password_confirmation','确认密码')->rules('required')
            //      ->value(function ($form) {
            //       return $form->model()->password;
            // });

            // $form->ignore(['password_confirmation']);
            $form->image('wechat')->uniqueName();        
            $form->display('created_at');
            $form->display('updated_at');
            $form->saving(function (Form $form) {
                if ($form->password && $form->model()->password != $form->password) {
                    $form->password = Hash::make($form->password);
                }
            });
        });
    }
}
