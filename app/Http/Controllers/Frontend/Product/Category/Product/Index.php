<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product\Category\Product;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\{Category, Product, Type};
use App\Services\Basket;

class Index extends Controller
{
    /**
     * Product index.
     *
     * @param Basket   $basket   Baket
     * @param Category $category Category
     * @param Product  $product  Product
     * 
     * @return View
     */
    public function __invoke(Basket $basket, Category $category, Product $product): View
    {
        $types = Type::where('product_id', '=', $product->id)
            ->where('hide', 0)
            ->latest()
            ->get();
        $currentRouteName = 'frontend.product';
        
        return view(
            'frontend.product.category.product.index',
            compact('category', 'product', 'types', 'basket', 'currentRouteName')
        );
    }
}
