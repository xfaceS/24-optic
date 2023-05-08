<?php

namespace App\Admin\Controllers;

use App\Models\CategoryNews;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryNewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CategoryNews';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CategoryNews());

        $grid->column('name', __('Nom'));

        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('name', __('Nom'));
        });

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
        $show = new Show(CategoryNews::findOrFail($id));

        $show->field('name', __('Nom'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CategoryNews());

        $form->text('name', __('Nom'))->rules(['required','string']);

        return $form;
    }
}
