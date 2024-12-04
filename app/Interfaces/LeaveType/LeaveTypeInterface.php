<?php

namespace App\Interfaces\LeaveType;

use App\Models\LeaveType;
use Illuminate\Support\Collection;

interface LeaveTypeInterface
{
    public function getAllLeaveTypes(): Collection;

    public function getLeaveType(int $id): LeaveType;

    public function createLeaveType(array $data): LeaveType;

    public function updateLeaveType(array $data, LeaveType $leave): bool;

    public function deleteLeaveType(LeaveType $leave): ?bool;
}
