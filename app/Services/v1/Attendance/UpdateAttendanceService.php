<?php

namespace App\Services\v1\Attendance;

use App\Helpers\ResponseHelper;
use App\Interfaces\Attendance\AttendanceInterface;
use App\Models\Attendance;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UpdateAttendanceService
{
    public function __invoke(AttendanceInterface $attendanceRepository, array $formData, Attendance $attendance): JsonResponse
    {
        $attendanceRepository->updateAttendance($formData, $attendance);
        return ResponseHelper::success('Attendance type updated successfully', null, Response::HTTP_OK);
    }
}
