<?php

namespace Database\Seeders;

use App\Models\Vizsga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VizsgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vizsga::factory(5)->create();
    }
}
