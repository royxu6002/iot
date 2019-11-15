<?php

namespace App\Admin\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class BlogsController extends AdminController
{
    public function index(Content $content)
    {
        return $content->body($this->grid());
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog);

        $grid->column('id', __('Id'));
        $grid->column('author', __('Author'));
        $grid->column('title', __('Title'));
        $grid->column('article_abstract', __('Article abstract'));

        return $grid;
    }



    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Blog);

        $form->text('author', __('Author'));
        $form->textarea('title', __('Title'));
        $form->textarea('title_slug', __('Slug'));
        $form->ckeditor('article', __('Article'));
        $form->textarea('article_abstract', __('Article abstract'));
        $form->multipleSelect('tags', 'Tags your article')->options(Tag::pluck('name', 'id'));
        $form->radio('is_recommended','Slider to highlight the article ?')->options([0=>'No', 1=>'Yes']);
        $form->image('thumbnail')->uniqueName()->move('images')->removable();

        return $form;
    }
}
