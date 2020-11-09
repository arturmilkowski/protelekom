<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('categories')
            ->insert(['slug' => 'smartfon', 'name' => 'Smartfon']);
        DB::table('categories')
            ->insert(['slug' => 'telefon', 'name' => 'Telefon']);
    }
}
