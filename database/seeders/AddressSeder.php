<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Address::factory(10)->create();
    }
}
