<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\type;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        type::create([
            'name' => 'drank',
        ]);
        type::create([
            'name' => 'voorgerecht',
        ]);
        type::create([
            'name' => 'hoofdgerecht',
        ]);
        type::create([
            'name' => 'nagerecht',
        ]);
    }
}
