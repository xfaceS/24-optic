<?php

namespace App\Admin\Controllers;

use App\Models\Slider;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SliderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Slider';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Slider());

        $grid->column('title', __('Titre'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'))->image();
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('title', __('Titre'));
            $filter->like('description', __('Description'));
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
        $show = new Show(Slider::findOrFail($id));

        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'))->image();
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Slider());

        $form->text('title', __('Titre'))->rules(['required']);
        $form->textarea('description', __('Description'))->rules(['required']);
        $form->image('image', __('Image'))->rules(['required']);

        return $form;
    }
}
