<?php

namespace App\Admin\Controllers;

use App\Models\OauthUser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OauthUserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\OauthUser';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OauthUser);

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('provider_type', __('Provider type'));
        $grid->column('provider_id', __('Provider id'));
        $grid->column('email', __('Email'));
        $grid->column('name', __('Name'));
        $grid->column('avatar', __('Avatar'));
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
        $show = new Show(OauthUser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('provider_type', __('Provider type'));
        $show->field('provider_id', __('Provider id'));
        $show->field('email', __('Email'));
        $show->field('name', __('Name'));
        $show->field('avatar', __('Avatar'));
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
        $form = new Form(new OauthUser);

        $form->number('user_id', __('User id'));
        $form->text('provider_type', __('Provider type'));
        $form->text('provider_id', __('Provider id'));
        $form->email('email', __('Email'));
        $form->text('name', __('Name'));
        $form->image('avatar', __('Avatar'));

        return $form;
    }
}
