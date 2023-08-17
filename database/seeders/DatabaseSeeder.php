<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'COMPUTO',
            'price' => rand(100, 1000)
        ]);

        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'COMPUTO',
            'price' => rand(100, 1000)
        ]);

        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'COMPUTO',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'COMPUTO',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'HOGAR',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'HOGAR',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'HOGAR',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'HOGAR',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'HOGAR',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'HOGAR',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'HOGAR',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'OTROS',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'OTROS',
            'price' => rand(100, 1000)
        ]);    DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'OTROS',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'OTROS',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'OTROS',
            'price' => rand(100, 1000)
        ]);
        DB::table('products')->insert([
            'description' => Str::random(10),
            'category' => 'OTROS',
            'price' => rand(100, 1000)
        ]);
    }
}
