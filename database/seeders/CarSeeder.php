<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cars')->insert([
            ['make' => 'Tesla', 'model' => 'Model 3', 'year' => 2022, 'color' => 'White'],
            ['make' => 'Chevrolet', 'model' => 'Camaro', 'year' => 2021, 'color' => 'Yellow'],
            ['make' => 'Nissan', 'model' => 'Altima', 'year' => 2020, 'color' => 'Silver'],
            // Agrega más registros si lo deseas
        ]);
      




    }
}