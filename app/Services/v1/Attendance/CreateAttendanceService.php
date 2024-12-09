<?php

namespace App\Services\v1\Attendance;

use App\Helpers\ResponseHelper;
use App\Http\Resources\v1\Attendance\AttendanceResource;
use App\Interfaces\Attendance\AttendanceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CreateAttendanceService
{
    public function __invoke(AttendanceInterface $attendanceRepository, array $data): JsonResponse
    {
        $attendance = $attendanceRepository->createAttendance($data);
        return ResponseHelper::success('Attendance created successfully', new AttendanceResource($attendance), Response::HTTP_CREATED);
    }
}
