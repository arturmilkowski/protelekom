<?php

declare(strict_types = 1);

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\{Category, Concentration};

$factory->define(
    Concentration::class,
    function (Faker $faker) {
        $name = $faker->sentence(2);
        $slug = Str::slug($name, '-');

        return [
            'category_id' => factory(Category::class)->create(),
            'slug' => $slug,
            'name' => $name,            
        ];
    }
);
