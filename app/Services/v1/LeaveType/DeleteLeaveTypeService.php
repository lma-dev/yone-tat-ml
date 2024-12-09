<?php

namespace App\Services\v1\LeaveType;

use App\Helpers\ResponseHelper;
use App\Interfaces\LeaveType\LeaveTypeInterface;
use App\Models\LeaveType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class DeleteLeaveTypeService
{
    public function __invoke(LeaveTypeInterface $leaveRepository, LeaveType $leave): JsonResponse
    {
        $leaveRepository->deleteLeaveType($leave);
        return ResponseHelper::success('LeaveType Type deleted successfully', null, Response::HTTP_OK);
    }
}
