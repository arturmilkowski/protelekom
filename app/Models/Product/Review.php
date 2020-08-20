<?php

declare(strict_types=1);

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    /**
     * Get the product that owns the review.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {        
        return $this->belongsTo('App\Models\Product');
    }
}
