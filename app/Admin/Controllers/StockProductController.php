<?php

namespace App\Admin\Controllers;

use App\Models\StockProduct;
use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;

class StockProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\StockProduct';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new StockProduct);

        $grid->column('id', __('Id'));
        $grid->column('product_id', __('Product id'))->modal('Product Name', function($model){
            $products = $model->product()->get()->map(function($product) {
                return $product->only('id','product_name');
            });
            return new Table(['ID', 'Product Name'], $products->toArray());
        });
        $grid->column('moq', __('Moq'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('price', __('Price'));
        $grid->column('note', __('Note'));
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
        $show = new Show(StockProduct::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('product_id', __('Product id'));   
        $show->field('moq', __('Moq'));
        $show->field('quantity', __('Quantity'));
        $show->field('price', __('Price'));
        $show->field('note', __('Note'));
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
        $form = new Form(new StockProduct);

        // $form->number('product_id', __('Product id'));
        $grouped = Product::query()->pluck('product_name', 'id')->all();
        $form->select('product_id',  __('Product Id'))->options($grouped);

        $form->number('moq', __('OEM Moq'));
        $form->number('quantity', __('In Stock Quantity'));
        $form->decimal('price', __('Selling Price'));
        $form->text('note', __('Note'));

        return $form;
    }
}
