<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product\Type;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Product\Brand;
use App\Models\{Product, Type};
use App\Services\Basket;

class Show extends Controller
{
    public function __invoke(Basket $basket, Brand $brand, Product $product, Type $type): View
    {
        $currentRouteName = 'frontend.product';

        return view(
            'frontend.product.type.show',
            compact('brand', 'product', 'type', 'currentRouteName') 
            // 'product', 'rating', 'reviewCount', 'basket', 
        );
    }
}
