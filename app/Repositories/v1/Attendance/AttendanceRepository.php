<?php

namespace App\Repositories\v1\Attendance;

use App\Interfaces\Attendance\AttendanceInterface;
use App\Models\Attendance;
use Illuminate\Support\Collection;

class AttendanceRepository implements AttendanceInterface
{
    public function getAllAttendances(): Collection
    {
        return Attendance::with('users')->get();
    }

    public function getAttendance(int $id): Attendance
    {
        return Attendance::findOrFail($id);
    }

    public function createAttendance(array $data): Attendance
    {
        return Attendance::create($data);
    }

    public function updateAttendance(array $attendanceData, Attendance $attendance): bool
    {
        return $attendance->update($attendanceData);
    }

    public function deleteAttendance(Attendance $attendance): ?bool
    {
        return $attendance->delete();
    }
}
