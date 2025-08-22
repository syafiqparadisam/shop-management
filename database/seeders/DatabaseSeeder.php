<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // For Clearing
       DB::statement('SET FOREIGN_KEY_CHECKS=0;');
       DB::table('product_images')->truncate();
       DB::table('product_variants')->truncate();
       DB::table('products')->truncate();
       DB::table('image')->truncate();

      $this->call(ProductSeeder::class);
    }
}
