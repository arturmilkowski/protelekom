<?php

declare(strict_types=1);

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Condition extends Model
{
    /**
     * Get the types for the condition.
     * 
     * @return HasMany
     */
    public function types(): HasMany
    {
        return $this->hasMany('App\Models\Type');
    }
}