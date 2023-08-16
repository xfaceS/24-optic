<?php

namespace App\Admin\Controllers;

use App\Models\Advertising;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdvertisingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Advertising';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Advertising());

        $grid->column('image', __('Image'))->image();
        $grid->column('lien', __('Lien'));
        $grid->column('limit_click', __('Limit click'));
        $grid->column('nb_click', __('Nb click'));
     

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
        $show = new Show(Advertising::findOrFail($id));

        $show->field('image', __('Image'));
        $show->field('lien', __('Lien'));
        $show->field('limit_click', __('Limit click'));
        $show->field('nb_click', __('Limit click'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Advertising());

        $form->image('image', __('Image'));
        $form->text('lien', __('Lien'));
        $form->number('limit_click', __('Limit click'));
        // $form->number('nb_click', __('Limit click'));

        return $form;
    }
}
