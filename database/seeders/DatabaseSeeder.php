<?php

namespace Database\Seeders;

use App\Models\Bookable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
//         \App\Models\User::factory(10)->create();
            $this->call([BookableSeeder::class]);
            $this->call([BookingsSeeder::class]);

    }
}
