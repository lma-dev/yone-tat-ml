<?php

namespace App\Repositories\v1\LeaveType;

use App\Interfaces\LeaveType\LeaveTypeInterface;
use App\Models\LeaveType;
use Illuminate\Support\Collection;

class LeaveTypeRepository implements LeaveTypeInterface
{
    public function getAllLeaveTypes(): Collection
    {
        return LeaveType::all();
    }

    public function getLeaveType(int $id): LeaveType
    {
        return LeaveType::findOrFail($id);
    }

    public function createLeaveType(array $data): LeaveType
    {
        return LeaveType::create($data);
    }

    public function updateLeaveType(array $leaveData, LeaveType $leave): bool
    {
        return $leave->update($leaveData);
    }

    public function deleteLeaveType(LeaveType $leave): ?bool
    {
        return $leave->delete();
    }
}
