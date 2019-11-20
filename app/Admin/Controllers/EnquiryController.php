<?php

namespace App\Admin\Controllers;

use App\Models\Enquiry;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EnquiryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Enquiry';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Enquiry);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('company', __('Company'));
        $grid->column('phone', __('Phone'));
        $grid->column('enquiry', __('Enquiry'));
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
        $show = new Show(Enquiry::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('company', __('Company'));
        $show->field('phone', __('Phone'));
        $show->field('enquiry', __('Enquiry'));
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
        $form = new Form(new Enquiry);

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('company', __('Company'));
        $form->mobile('phone', __('Phone'));
        $form->textarea('enquiry', __('Enquiry'));

        return $form;
    }
}
