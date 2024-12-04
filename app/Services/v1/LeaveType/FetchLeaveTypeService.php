<?php

namespace App\Services\v1\LeaveType;

use App\Interfaces\LeaveType\LeaveTypeInterface;

class FetchLeaveTypeService
{
    public function __invoke(LeaveTypeInterface $leaveTypeRepository)
    {
        return $leaveTypeRepository->getAllLeaveTypes();
    }
}
