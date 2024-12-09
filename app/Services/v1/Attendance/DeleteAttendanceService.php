<?php

namespace App\Services\v1\Attendance;

use App\Helpers\ResponseHelper;
use App\Interfaces\Attendance\AttendanceInterface;
use App\Models\Attendance;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class DeleteAttendanceService
{
    public function __invoke(AttendanceInterface $attendanceRepository, Attendance $attendance): JsonResponse
    {
        $attendanceRepository->deleteAttendance($attendance);
        return ResponseHelper::success('Attendance deleted successfully', null, Response::HTTP_OK);
    }
}
