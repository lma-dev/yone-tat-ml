<?php

namespace App\Services\v1\LeaveType;

use App\Http\Resources\v1\LeaveType\LeaveTypeResource;
use App\Interfaces\LeaveType\LeaveTypeInterface;
use Illuminate\Http\JsonResponse;

class FetchLeaveTypeService
{
    public function __invoke(LeaveTypeInterface $leaveTypeRepository): JsonResponse
    {
        $leaveTypes = $leaveTypeRepository->getAllLeaveTypes();
        return response()->json([
            'data' => LeaveTypeResource::collection($leaveTypes),
        ]);
    }
}
