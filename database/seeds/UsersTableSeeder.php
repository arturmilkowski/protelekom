<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        
        DB::table('users')->insert(
            [
                'id' => (string) Str::uuid(),
                'role_id' => 1,
                'name' => 'artur',
                'email' => 'artur-milkowski@tlen.pl',
                'password' => bcrypt('op[]op[]'),
            ]
        );
        DB::table('users')->insert(
            [
                'id' => (string) Str::uuid(),
                'role_id' => 1,
                'name' => 'Grzegorz',
                'email' => 'protelekom.firma@gmail.com',
                'password' => bcrypt('GrzeGrze'),
            ]
        );
    }
}
