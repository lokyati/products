<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nev' => 'Mikro',
            'tipus' => 'Elektronikai',
            'ar' => 200,
        ]);

        DB::table('products')->insert([
            'nev' => 'Csap',
            'tipus' => 'Haztartasi',
            'ar' => 50,
        ]);

        DB::table('products')->insert([
            'nev' => 'Labda',
            'tipus' => 'Jatek',
            'ar' => 15,
        ]);

        DB::table('products')->insert([
            'nev' => 'Kijelzo',
            'tipus' => 'Elektronikai',
            'ar' => 500,
        ]);
    }
}
