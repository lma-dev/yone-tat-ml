<?php

namespace App\Actions\v1\Attendance;

use App\Interfaces\Attendance\AttendanceInterface;
use App\Models\Attendance;
use App\Services\v1\Attendance\CreateAttendanceService;
use App\Services\v1\Attendance\DeleteAttendanceService;
use App\Services\v1\Attendance\FetchAttendanceService;
use App\Services\v1\Attendance\UpdateAttendanceService;
use Illuminate\Http\JsonResponse;

class AttendanceActions
{
    private AttendanceInterface $attendanceRepository;

    public function __construct(AttendanceInterface $attendanceRepository)
    {
        $this->attendanceRepository = $attendanceRepository;
    }

    public function fetchAllAttendances(): JsonResponse
    {
        return (new FetchAttendanceService())($this->attendanceRepository);
    }

    public function createAttendance(array $data): JsonResponse
    {
        return (new CreateAttendanceService())($this->attendanceRepository, $data);
    }

    public function updateAttendance(array $formData, Attendance $leave): JsonResponse
    {
        return (new UpdateAttendanceService())($this->attendanceRepository, $formData, $leave);
    }

    public function deleteAttendance(Attendance $leave): JsonResponse
    {
        return (new DeleteAttendanceService())($this->attendanceRepository, $leave);
    }
}
