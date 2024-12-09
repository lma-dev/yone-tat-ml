<?php

namespace Database\Seeders;

use App\Models\LeaveType;
use Illuminate\Database\Seeder;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the unique leave types
        $data = LeaveType::factory(8)->make();
        $chunks = $data->chunk(10);
        $chunks->each(function ($chunk) {
            LeaveType::insert($chunk->toArray());
        });
    }
}
