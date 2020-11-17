<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Page;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
// use Illuminate\Support\Facades\Cache;
use App\Models\Product;
use App\Models\Type;
// use App\Models\Blog\Post;
use App\Services\Basket;
// use Illuminate\Support\Facades\Redis;
// use Illuminate\Contracts\Cache\Repository;

class Index extends Controller
{
    // const SECONDS = 60 * 60 * 12;  // 12 = 12 hours. 168 = one week

    /**
     * Index frontend page.
     *
     * @param Basket $basket Basket
     * 
     * @return View
     */
    public function __invoke(Basket $basket): View
    {
        // $posts = Post::published()->latest()->take(4)->get();
        $types = Type::with(['product'])->latest()->get();  // with(['brand', 'category'])->
        // $products = Product::with(['brand', 'category'])->latest()->get();
        $currentRouteName = 'frontend.pages.index';        

        return view(
            'frontend.page.index',
            compact('types', 'currentRouteName')  // 'products', 'basket'
        );
    }
}
