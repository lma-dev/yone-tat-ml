<?php

namespace App\Services\v1\LeaveType;

use App\Helpers\ResponseHelper;
use App\Http\Resources\v1\LeaveType\LeaveTypeResource;
use App\Interfaces\LeaveType\LeaveTypeInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CreateLeaveTypeService
{
    public function __invoke(LeaveTypeInterface $leaveRepository, array $data): JsonResponse
    {
        $leave = $leaveRepository->createLeaveType($data);
        return ResponseHelper::success('LeaveType created successfully', new LeaveTypeResource($leave), Response::HTTP_CREATED);
    }
}
