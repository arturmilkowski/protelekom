<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('conditions')->insert(
            [
                'name' => 'nowy',
                'display_name' => 'nowy',
                'description' => '',
            ]
        );
        DB::table('conditions')->insert(
            [
                'name' => 'uzywany',
                'display_name' => 'używany',
                'description' => '',
            ]
        );
    }
}
