<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Admin\Product\Product\Type;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;
use App\Models\Product;
use App\Models\Product\{Condition, Size};

class CreateController extends Controller
{
    /**
     * Create product type show form.
     *
     * @param Product $product Product
     * 
     * @return View
     */
    public function __invoke(Product $product): View
    {
        Gate::authorize('admin');

        $products = Product::all();
        $conditions = Condition::all();
        $sizes = Size::all();        
        $currentRouteName = 'backend.admins.products';

        return view(
            'backend.admin.product.product.type.create',
            compact('product', 'products', 'conditions', 'sizes', 'currentRouteName')
        );
    }
}
