<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class CategoriesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Category';

    public function index(Content $content)
    {
        return $content->header('product category')
            ->description('products category')
            ->body($this->grid());
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->column('id', __('Id'));
        $grid->column('category_name', __('Category name'));
        $grid->column('online', __('Online'));
        $grid->column('category_slug', __('Category slug'));
        $grid->column('level', 'level');
        $grid->column('is_directory', 'Is directory')->display(function($value) {
            return $value ? 'Yes' : 'No';
        });
        $grid->column('path', 'Path');
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_name', __('Category name'));
        $show->field('online', __('online'));
        $show->field('category_slug', __('Category slug'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category);
        $form->text('category_name', __('Category name'));
        $form->text('category_slug', __('Category slug'));
        $form->select('online')->options(['yes'=> 'yes', 'no'=> 'no']);
        $form->radio('is_directory', 'Is directory')
            ->options(['1' => 'Yes', '0' => 'No'])
            ->default('0')
            ->rules('required');

        $grouped = Category::query()->pluck('category_name', 'id')->all();
        $form->select('parent_id',  __('Parent directory'))->options($grouped);

        return $form;
    }


     public function store()
    {
        return $this->form()->store();
    }

    public function apiIndex(Request $request)
    {
        // 用户输入的值通过 q 参数获取
        $search = $request->input('q');
        $result = Category::query()
            ->where('is_directory', true)  // 由于这里选择的是父类目，因此需要限定 is_directory 为 true
            ->where('category_name', 'like', '%'.$search.'%')
            ->paginate();

        // 把查询出来的结果重新组装成 Laravel-Admin 需要的格式
        $result->setCollection($result->getCollection()->map(function (Category $category) {
            return ['id' => $category->id, 'text' => $category->full_name];
        }));

        return $result;
    }
}
