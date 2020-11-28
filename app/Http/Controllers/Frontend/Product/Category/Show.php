<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Product\Category;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Category;

class Show extends Controller
{
    /**
     * Show products in category.
     *
     * @param Category $category Category
     * 
     * @return View
     */
    public function __invoke(Category $category): View
    {
        // TODO change this for query
        $products = $category->products;                
        /*
        $products = DB::table('brands')
            ->join('products', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('category_id', $category->id)
            ->where('products.hide', 0)
            ->distinct()
            ->select(
                'products.id as id',
                'brands.id as brand_id', 'brands.name as brand_name',
                'categories.id as category_id', 'categories.name as category_name',
                'products.slug', 'products.name', 'products.description',
                'products.img', 'products.site_description', 'products.site_keyword',
                'products.hide'
            )            
            ->get();
        */
        $currentRouteName = 'frontend.product';
        
        return view(
            'frontend.product.category.show',
            compact('category', 'products', 'currentRouteName')
        );
    }
}
