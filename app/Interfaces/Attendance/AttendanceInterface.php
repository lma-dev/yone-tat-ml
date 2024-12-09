<?php

namespace App\Interfaces\Attendance;

use App\Models\Attendance;
use Illuminate\Support\Collection;

interface AttendanceInterface
{
    public function getAllAttendances(): Collection;

    public function getAttendance(int $id): Attendance;

    public function createAttendance(array $data);

    public function updateAttendance(array $data, Attendance $attendance);

    public function deleteAttendance(Attendance $attendance);
}
