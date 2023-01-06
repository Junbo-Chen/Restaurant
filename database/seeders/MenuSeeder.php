<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        menu::create([
            'name' => 'Cola',
            'price' => 2.50,
            'type_id' => 1,

        ]);
        menu::create([
            'name' => 'Fanta',
            'price' => 2.50,
            'type_id' => 1,
        ]);
        menu::create([
            'name' => 'Bitter Lemon',
            'price' => 2.50,
            'type_id' => 1,
        ]);
        menu::create([
            'name' => 'Bier',
            'price' => 2.50,
            'type_id' => 1,
        ]);
        menu::create([
            'name' => 'Wijn',
            'price' => 2.50,
            'type_id' => 1,
        ]);
        menu::create([
            'name' => 'Water',
            'price' => 2.50,
            'type_id' => 1,
        ]);
        menu::create([
            'name' => 'tomaat mozzarella',
            'price' => 2.50,
            'type_id' => 2,
        ]);
        menu::create([
            'name' => 'tomaat mozzarella basilicum',
            'price' => 2.50,
            'type_id' => 2,
        ]);
        menu::create([
            'name' => 'pizza',
            'price' => 2.50,
            'type_id' => 3,
        ]);
        menu::create([
            'name' => 'steak',
            'price' => 2.50,
            'type_id' => 3,
        ]);
        menu::create([
            'name' => 'ijsje',
            'price' => 2.50,
            'type_id' => 4,
        ]);
        menu::create([
            'name' => 'koekje',
            'price' => 2.50,
            'type_id' => 4,
        ]);

    }
}
