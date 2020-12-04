<?php

declare(strict_types = 1);

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\Blog\Post;
use App\Models\Product\Brand;

class Search extends Component
{
    public $search = '';
    protected $queryString = ['search' => ['except' => '']];

    public function render()//: View
    {
        $searchedProducts = collect([]);
        $searchedPosts = collect([]);
        if ($this->search) {
            /*
            $searchedProducts = Product::where(
                'name', 'like', '%'.$this->search.'%'
            )
            ->get();
            */
            $searchedProducts = DB::table('products')
                ->join('brands', 'products.brand_id', '=', 'brands.id')
                // ->where('hide', 0)
                ->where('brands.name', 'like', '%'.$this->search.'%')
                ->orWhere('.products.name', 'like', '%'.$this->search.'%')
                ->select('products.*', 'brands.name as brand_name')
                ->get();
                        
            $searchedPosts = Post::where(
                'title', 'like', '%'.$this->search.'%'
            )
            ->get();
        }

        return view(
            'livewire.frontend.search',
            [
                'searchedProducts' => $searchedProducts,
                'searchedPosts' => $searchedPosts,
            ]
        );
    }

    /**
     * Clear search string by escape key.
     *
     * @return void
     */
    public function handleEscape(): void
    {
        $this->search = '';
    }
}
