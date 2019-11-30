<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Category;

class CategoryComposer
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function compose(View $view)
    {
        $category = $this->category->all();

        $view->with('category', $category);
    }
}
