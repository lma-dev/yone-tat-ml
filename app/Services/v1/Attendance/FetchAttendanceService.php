<?php

namespace App\Services\v1\Attendance;

use App\Http\Resources\v1\Attendance\AttendanceResource;
use App\Interfaces\Attendance\AttendanceInterface;
use Illuminate\Http\JsonResponse;

class FetchAttendanceService
{
    public function __invoke(AttendanceInterface $attendanceRepository): JsonResponse
    {
        $attendances = $attendanceRepository->getAllAttendances();
        return response()->json([
            'data' => AttendanceResource::collection($attendances),
        ]);
    }
}
