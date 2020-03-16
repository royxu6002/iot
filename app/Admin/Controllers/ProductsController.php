<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\ProductSku;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Product';

    public function index(Content $content)
    {
        return $content->header('products listed')
            ->description('scale product')
            ->body($this->grid());

    }
    public function create(Content $content)
    {
        return $content->body($this->form());
    }

    public function store()
    {
        return $this->form()->store();
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);
        $grid->column('id', __('Id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('online', __('online'));
        $grid->column('hs_code', __('HS Code'));
        $grid->column('product_slug', __('Product slug'));
        $grid->column('category_id', __('Category id'));
        $grid->column('product_description', __('Product description'))->limit(20);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_name', __('Product name'));
        $show->field('online', __('Online'));
        $show->field('hs_code', __('HS Code'));
        $show->field('category_id', __('Category id'));

        $show->field('product_description', __('Product description'));
        $show->field('product_brief_intro', __('Product brief intro'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product);
        $form->text('product_name', __('Product name'));
        $form->select('online', __('Product online'))->options(['yes' => 'yes', 'no' => 'no']);
        $form->text('hs_code', __('HS code'));
        $form->text('product_slug', __('Product slug'));

        // https://learnku.com/docs/laravel/6.x/collections/5161
        // $grouped = Category::all('id', 'category_name')->mapWithKeys(function ($item, $key){
        //     return [$item['id'] => $item['category_name']];
        // })->all();
        $grouped = Category::query()->pluck('category_name', 'id')->all();
        $form->select('category_id',  __('Product Category'))->options($grouped);

        $form->ckeditor('product_description','Product description');
        $form->multipleImage('imgs', 'Images')->sortable()->removable()->uniqueName()->move('/images');
        // $form->hasMany('images',  'Pictures', function (Form\NestedForm $form){
        //     $form->image('product_image')->uniqueName()->move('/images');
        // });
        $form->hasMany('packages',  'Packages Data', function (Form\NestedForm $form){
            $form->text('product_model', 'Model');
            $form->text('product_package_length', 'Package length');
            $form->text('product_package_width', 'Package width');
            $form->text('product_package_height', 'Package height');
            $form->number('product_package_item_num', 'Package item num');
            $form->text('product_package_cbm', 'Package cbm');
            $form->text('product_package_net_weight', 'Net weight');
            $form->text('product_package_gross_weight', 'Gross weight');
        });
        $form->hasMany('skus', 'Sku', function (Form\NestedForm $form) {
            $form->text('title',    'Product sku title');
            $form->text('color', 'Product color');
            $form->text('price', 'Product price')->rules('numbe');
            $form->multipleImage('image', 'Product image')->sortable()->removable()->uniqueName()->move('/images');
        });
        $form->textarea('product_brief_intro', __('Product brief intro'));

        return $form;
    }
}
