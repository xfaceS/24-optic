<?php

namespace App\Admin\Controllers;

use App\Models\Opticien;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OpticienController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Opticien';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Opticien());

        $grid->column('name', __('Nom'));
        // $grid->column('description', __('Description'));
        $grid->column('thumbnail', __('Thumbnail'))->image();
        $grid->column('images', __('Images'))->carousel();
        $grid->column('ville', __('Ville'));
        // $grid->column('latitude', __('Latitude'));
        // $grid->column('longitude', __('longitude'));

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
        $show = new Show(Opticien::findOrFail($id));

        $show->field('name', __('Name'));
        $show->field('description', __('Description'))->unescape();
        $show->field('thumbnail', __('Thumbnail'))->image();
        $show->field('images', __('Images'))->carousel();
        $show->field('ville', __('Ville'));
        

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Opticien());

        $form->text('name', __('Nom'))->rules(['required','string']);
        // $form->textarea('description', __('Description'))->rules(['required','string']);
        $form->UEditor('description');
        $form->image('thumbnail', __('Thumbnail'))->rules(['required','image']);
        $form->multipleImage('images', __('Images'))->rules(['required']);
        $form->text('ville', __('Ville'))->rules(['required','string']);
        $form->text('latitude', __('Latitude'))->rules(['required','numeric']);
        $form->text('longitude', __('longitude'))->rules(['required','numeric']);

        return $form;
    }
}
