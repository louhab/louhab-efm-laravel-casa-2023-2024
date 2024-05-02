<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Reservation;
use App\Models\Repas;
use App\Models\Client;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categorie::factory(10)->create();
        \App\Models\Client::factory(10)->create();
        \App\Models\Reservation::factory(10)->create();
        \App\Models\Repas::factory(50)->create();

    }
}
