<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product\Category;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Category;
// use Illuminate\Support\Facades\Cache;
// use Illuminate\Support\Facades\DB;
// use App\Models\Product\Brand;
// use App\Models\{Product, Type};
// use App\Services\Basket;

class Index extends Controller
{
    public function __invoke(): View
    {
        $currentRouteName = 'frontend.product';
        $categories = Category::all();

        return view(
            'frontend.product.category.index',
            compact('categories', 'currentRouteName') 
            // 'product', 'rating', 'reviewCount', 'basket', 
            // 'brand', 'product', 'type', 
        );
    }
}
