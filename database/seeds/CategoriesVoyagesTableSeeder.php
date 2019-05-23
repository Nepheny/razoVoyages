<?php

use Illuminate\Database\Seeder;

class CategoriesVoyagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 300)->create(); 
    }
}
