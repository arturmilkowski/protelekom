<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('brands')->insert(
            ['slug' => 'apple', 'name' => 'Apple'],
        );
        DB::table('brands')->insert(
            ['slug' => 'huawei', 'name' => 'Huawei'],
        );
        DB::table('brands')->insert(
            ['slug' => 'samsung', 'name' => 'Samsung'],
        );
        DB::table('brands')->insert(
            ['slug' => 'sony', 'name' => 'Sony'],
        );
    }
}