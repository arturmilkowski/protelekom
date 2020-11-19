<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product\Category\Product;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\{Category, Product};

// use App\Models\Product\Brand;

// use Illuminate\Support\Facades\Cache;
// use Illuminate\Support\Facades\DB;
// use App\Models\Product\Brand;
// use App\Models\{Product, Type};
// use App\Services\Basket;

class Index extends Controller
{
    public function __invoke(Category $category, Product $product): View
    {
        // string $brand
        // dd($category);
        // return __FUNCTION__;
        $currentRouteName = 'frontend.product';
        // $categories = Category::all();
        
        return view(
            'frontend.product.category.product.index',
            compact('category', 'product', 'currentRouteName')
        );
    }
}
