<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tafel;

class TafelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tafel::create([
            'status' => 'tafel 1',
            'amount_of_seats' => 2,
        ]);
        tafel::create([
            'status' => 'tafel 2',
            'amount_of_seats' => 2,
        ]);
        tafel::create([
            'status' => 'tafel 3',
            'amount_of_seats' => 2,
        ]);
        tafel::create([
            'status' => 'tafel 4',
            'amount_of_seats' => 2,
        ]);
        tafel::create([
            'status' => 'tafel 5',
            'amount_of_seats' => 4,
        ]);
        tafel::create([
            'status' => 'tafel 6',
            'amount_of_seats' => 4,
        ]);
        tafel::create([
            'status' => 'tafel 7',
            'amount_of_seats' => 10,
        ]);
        tafel::create([
            'status' => 'tafel 8',
            'amount_of_seats' => 10,
        ]);
        tafel::create([
            'status' => 'tafel 9',
            'amount_of_seats' => 100,
        ]);
        tafel::create([
            'status' => 'tafel 10',
            'amount_of_seats' => 200,
        ]);
    }
}
