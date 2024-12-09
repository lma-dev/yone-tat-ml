<?php

namespace App\Http\Controllers\v1\Attendance;

use App\Actions\v1\Attendance\AttendanceActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\Attendance\StoreAttendanceRequest;
use App\Http\Requests\v1\Attendance\UpdateAttendanceRequest;
use App\Http\Resources\v1\Attendance\AttendanceResource;
use App\Models\Attendance;
use Illuminate\Http\JsonResponse;

class AttendanceController extends Controller
{
    private AttendanceActions $attendanceAction;

    public function __construct(AttendanceActions $attendanceAction)
    {
        $this->attendanceAction = $attendanceAction;
    }
    public function index(): JsonResponse
    {
        return $this->attendanceAction->fetchAllAttendances();
    }

    public function show(Attendance $attendance): JsonResponse
    {
        return response()->json([
            'data' => new AttendanceResource($attendance),
        ]);
    }

    public function store(StoreAttendanceRequest $request)
    {
        $formData = $request->safe()->all();
        return $this->attendanceAction->createAttendance($formData);
    }

    public function update(UpdateAttendanceRequest $request, Attendance $attendance): JsonResponse
    {
        return $this->attendanceAction->updateAttendance($request->safe()->all(), $attendance);
    }

    public function destroy(Attendance $attendance)
    {
        return $this->attendanceAction->deleteAttendance($attendance);
    }
}
