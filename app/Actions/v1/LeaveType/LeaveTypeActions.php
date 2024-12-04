<?php

namespace App\Actions\v1\LeaveType;

use App\Interfaces\LeaveType\LeaveTypeInterface;
use App\Models\LeaveType;
use App\Services\v1\LeaveType\CreateLeaveTypeService;
use App\Services\v1\LeaveType\DeleteLeaveTypeService;
use App\Services\v1\LeaveType\FetchLeaveTypeService;
use App\Services\v1\LeaveType\UpdateLeaveTypeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class LeaveTypeActions
{
    private LeaveTypeInterface $leaveRepository;

    public function __construct(LeaveTypeInterface $leaveRepository)
    {
        $this->leaveRepository = $leaveRepository;
    }

    public function fetchAllLeaveTypes(): Collection
    {
        return (new FetchLeaveTypeService())($this->leaveRepository);
    }

    public function createLeaveType(array $data): JsonResponse
    {
        return (new CreateLeaveTypeService())($this->leaveRepository, $data);
    }

    public function updateLeaveType(array $formData, LeaveType $leave): JsonResponse
    {
        return (new UpdateLeaveTypeService())($this->leaveRepository, $formData, $leave);
    }

    public function deleteLeaveType(LeaveType $leave): JsonResponse
    {
        return (new DeleteLeaveTypeService())($this->leaveRepository, $leave);
    }
}
