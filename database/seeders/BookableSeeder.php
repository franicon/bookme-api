<?php

namespace Database\Seeders;

use App\Models\Bookable;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void {
        Bookable::factory(6)->create();
    }

}

