<?php

namespace App\Admin\Controllers;

use App\Models\Migrations;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MigrationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Migrations';

    protected $description = [
                'index'  => 'Index1',
                'show'   => 'Show',
        //        'edit'   => 'Edit',
        //        'create' => 'Create',
    ];

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Migrations());

        $grid->column('id', __('Id'));
        $grid->column('migration', __('Migration'));
        $grid->column('batch', __('Batch'));

        $grid->option('show_create_btn', false);
        $grid->option('show_row_selector', false);
        $grid->option('show_actions', false);

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
        $show = new Show(Migrations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('migration', __('Migration'));
        $show->field('batch', __('Batch'));

        return $show;
    }

//    /**
//     * Make a form builder.
//     *
//     * @return Form
//     */
//    protected function form()
//    {
//        $form = new Form(new Migrations());
//
//        $form->text('migration', __('Migration'));
//        $form->number('batch', __('Batch'));
//
//        return $form;
//    }
}
