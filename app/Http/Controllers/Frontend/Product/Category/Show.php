<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product\Category;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Category;

class Show extends Controller
{
    public function __invoke(Category $category)//: View
    {
        // return __FUNCTION__;
        // return $category;
        // $brands = $category->brands;
        // return $brands;
        $products = $category->products;
        /*
        $brands = DB::table('brands')
            ->join('products', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('category_id', $category->id)
            ->distinct()
            ->select(
                'brands.name',
                'brands.slug as brand_slug',
                'categories.slug as category_slug'
            )
            ->get();
        */
        $currentRouteName = 'frontend.product';
        // $categories = Category::all();
        
        return view(
            'frontend.product.category.show',
            compact('category', 'products', 'currentRouteName') 
            // , 'rating', 'reviewCount', 'basket', 
            // 'brand', 'product', 'type', 
        );        
    }
}
