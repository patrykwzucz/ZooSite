<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tickets;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tickets::insert(
            [
                    ['name' => 'Reduced','price' => 55.00],
                    ['name' => 'Normal','price' => 90.00],
                    ['name' => 'Group: 10 people','price' => 500.00],
                
            ]
        );
    }
}
