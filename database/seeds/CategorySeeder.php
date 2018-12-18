<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'name' =>'Laravel',
            'slug' => str_slug('laravel')
        ]);

        Categories::create([
            'name' =>'Sample',
            'slug' => str_slug('sample')
        ]);
    }
}
