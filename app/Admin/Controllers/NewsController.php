<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\News;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\User;

class NewsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new News(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title')->width('200px')->limit(20);
            $grid->column('user_id')->display(function($user_id){
                return  User::find($user_id)->name;
            });
            $grid->column('cover')->image('',100,100);
            // $grid->column('content');
            $grid->column('type')->using([1 => '股市', 2 => '外汇',3 => '商品', 4=> '基金',5=>'交易商']);
            $grid->column('view_count');
            $grid->column('is_check')->switch();
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('title');
                $filter->equal('type')->select([1 => '股市', 2 => '外汇',3 => '商品', 4=> '基金',5=>'交易商']);
        
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
        return Form::make(new News(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->select('user_id')->options(User::where('status',true)->pluck('name','id'));
            $form->image('cover')->uniqueName();
            $form->markdown('content')->height(600);
            $form->select('type')->options([1 => '股市', 2 => '外汇',3 => '商品', 4=> '基金',5=>'交易商']);
            $form->switch('is_check');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
