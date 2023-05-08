<?php

namespace App\Admin\Controllers;

use App\Models\CategoryNews;
use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('category_news_id', __('Category'))->display(function(){
            return $this->category_name;
        });
        $grid->column('name', __('Nom'));
        // $grid->column('description', __('Description'));
        $grid->column('thumbnail', __('Thumbnail'))->image();
        $grid->column('images', __('Images'))->carousel();
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
        $show = new Show(News::findOrFail($id));

        // $show->field('category_news_id', __('Category'))->display(function(){
        //     return $this->category_name;
        // });
        // $show->field('category_news_id', __('Category'))->(function(){
        //     return $this->category_name;
        // });
        $show->field('name', __('Nom'));
        $show->field('description', __('Description'))->unescape();
        $show->field('thumbnail', __('Thumbnail'))->image();
        $show->field('images', __('Images'))->carousel();

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->select('category_news_id', __('Categorie'))->options(CategoryNews::all()->pluck('name','id'))->rules(['required','exists:category_news,id']);
        $form->text('name', __('Name'))->rules(['required','string']);
        // $form->textarea('description', __('Description'));
        $form->UEditor('description');
        $form->image('thumbnail', __('Thumbnail'))->rules(['required','image']);
        $form->multipleImage('images', __('Images'))->rules(['required']);

        return $form;
    }
}
