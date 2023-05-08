<?php

namespace App\Admin\Controllers;

use App\Models\Marque;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MarqueController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Marque';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Marque());

        // $grid->column('id', __('Id'));
        $grid->column('name', __('Nom'));
        // $grid->column('description', __('Description'));
        $grid->column('thumbnail', __('Thumbnail'))->image();
        $grid->column('images', __('Images'))->carousel();
        // $grid->column('images', __('Images'));

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
        $show = new Show(Marque::findOrFail($id));

        $show->field('name', __('Name'));
        $show->field('description', __('Description'))->unescape();
        $show->field('thumbnail', __('Thumbnail'))->image();
        $show->field('images', __('Images'))->carousel();
        // $show->field('images', __('Images'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Marque());

        // $form->text('name', __('Name'));
        // $form->textarea('description', __('Description'));
        // $form->text('thumbnail', __('Thumbnail'));
        // $form->textarea('images', __('Images'));

        $form->text('name', __('Nom'))->rules(['required','string']);;
        // $form->textarea('description', __('Description'))->rules(['required','string']);
        $form->UEditor('description');
        $form->image('thumbnail', __('Thumbnail'))->rules(['required','image']);
        $form->multipleImage('images', __('Images'))->rules(['required']);

        return $form;
    }
}
