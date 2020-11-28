<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Category;
// use App\Services\Basket;
use Illuminate\Support\Facades\Cache;

class Index extends Controller
{
    const SECONDS = 60 * 60 * 12;

    /**
     * Index product page.     
     * 
     * @return View
     */
    public function __invoke(): View  // Basket $basket
    {
        $categories = Cache::remember(
            'categories',
            self::SECONDS,
            function () {
                return Category::all();
            }
        );
        $currentRouteName = 'frontend.product';

        return view(
            'frontend.product.index',
            compact('categories', 'currentRouteName')
        );
    }
}
