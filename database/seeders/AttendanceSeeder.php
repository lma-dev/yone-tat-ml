<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Define the unique leave types
        $data = Attendance::factory(20)->make();
        $chunks = $data->chunk(10);
        $chunks->each(function ($chunk) {
            Attendance::insert($chunk->toArray());
        });
    }
}
