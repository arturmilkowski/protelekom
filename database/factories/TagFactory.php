<?php

declare(strict_types=1);

use Faker\Generator as Faker;
// use Illuminate\Support\Str;
use App\Models\Blog\Tag;

$factory->define(
    Tag::class,
    function (Faker $faker) {
        $name = $faker->sentence(2);
        // $slug = Str::slug($name, '-');

        return [
            // 'slug' => $slug,
            'name' => $name,
        ];
    }
);
