<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Category;

class CategoryComposer
{
    protected $category, $product;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function compose(View $view)
    {
        $category = $this->category->where('online', 'yes')->get();
        $view->with('category', $category);
    }
}
