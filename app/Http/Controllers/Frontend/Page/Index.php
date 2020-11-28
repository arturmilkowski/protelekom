<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Page;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Type;
use App\Models\Blog\Post;
use App\Services\Basket;

class Index extends Controller
{
    const SECONDS = 60 * 60 * 12;  // 12 = 12 hours. 168 = one week

    /**
     * Index frontend page.
     *
     * @param Basket $basket Basket
     * 
     * @return View
     */
    public function __invoke(Basket $basket): View
    {
        $posts = Cache::remember(
            'latest_posts',
            self::SECONDS,
            function () {
                return Post::published()->latest()->take(5)->get();
            }
        );
        $types = Cache::remember(
            'latest_types',
            self::SECONDS,
            function () {
                return Type::with(
                    ['product', 'product.category', 'product.brand']
                )->latest()->take(10)->get();
            }
        );  
        $currentRouteName = 'frontend.pages.index';        

        return view(
            'frontend.page.index',
            compact('posts', 'types', 'currentRouteName')
        );
    }
}
