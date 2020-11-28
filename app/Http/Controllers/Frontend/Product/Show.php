<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Services\Basket;

class Show extends Controller
{
    const SECONDS = 60 * 60 * 12;

    /**
     * Show product page.
     *
     * @param Product $product Product
     * 
     * @return View
     */
    public function __invoke(Product $product)//: View  // Basket $basket,
    {
        return 'f';
        $productKey = 'product' . $product->id;
        // $productRatingKey = 'product_rating' . $product->id;
        // $productReviewCountKey = 'product_review_count' . $product->id;

        if (Cache::has($productKey)) {
            $product = Cache::get($productKey);
            // $rating = Cache::get($productRatingKey);
            // $reviewCount = Cache::get($productReviewCountKey);
        } else {
            /*
            $rating = DB::table('reviews')
                ->where('product_id', $product->id)
                ->get()
                ->avg('rating');
            $reviewCount = DB::table('reviews')
                ->where('product_id', $product->id)
                ->count();
            */
            $product = Product::with(
                ['types', 'category']
            )->find($product->id);

            // Cache::put($productRatingKey, $rating, self::SECONDS);
            // Cache::put($productReviewCountKey, $reviewCount, self::SECONDS);
            Cache::put($productKey, $product, self::SECONDS);
        }
        $currentRouteName = 'frontend.product';

        return view(
            'frontend.product.show',
            compact('product', 'currentRouteName')
        );
    }
}
