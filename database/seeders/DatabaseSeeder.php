<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Database\Factories\CategoryFactory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryTableSeeder::class,
        ]);
    }
}
