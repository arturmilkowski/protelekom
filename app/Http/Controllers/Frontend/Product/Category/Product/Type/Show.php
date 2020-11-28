<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product\Category\Product\Type;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\{Category, Product, Type};

class Show extends Controller
{
    /**
     * Type show.
     *
     * @param Category $category Category 
     * @param Product  $product  Product
     * @param Type     $type     Type
     * 
     * @return View
     */
    public function __invoke(Category $category, Product $product, Type $type): View
    {
        $currentRouteName = 'frontend.product';
        
        return view(
            'frontend.product.category.product.type.show',
            compact('category', 'product', 'type', 'currentRouteName')
        );
    }
}
