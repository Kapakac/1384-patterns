<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FoodmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('foodmenu')->insert([
            'name' => Str::random(7),
            'description' => Str::random(15),
            'price' => mt_rand(10 * 10, 100 * 10) / 10
        ]);
    }
}
