<?php

namespace App\Services\v1\LeaveType;

use App\Helpers\ResponseHelper;
use App\Interfaces\LeaveType\LeaveTypeInterface;
use App\Models\LeaveType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UpdateLeaveTypeService
{
    public function __invoke(LeaveTypeInterface $leaveRepository, array $formData, LeaveType $leave): JsonResponse
    {
        $leaveRepository->updateLeaveType($formData, $leave);
        return ResponseHelper::success('LeaveType type updated successfully', null, Response::HTTP_OK);
    }
}
