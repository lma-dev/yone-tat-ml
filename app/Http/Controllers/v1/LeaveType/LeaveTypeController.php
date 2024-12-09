<?php

namespace App\Http\Controllers\v1\LeaveType;

use App\Actions\v1\LeaveType\LeaveTypeActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\LeaveType\StoreLeaveTypeRequest;
use App\Http\Requests\v1\LeaveType\UpdateLeaveTypeRequest;
use App\Http\Resources\v1\LeaveType\LeaveTypeResource;
use App\Models\LeaveType;
use Illuminate\Http\JsonResponse;

class LeaveTypeController extends Controller
{
    private LeaveTypeActions $leaveAction;

    public function __construct(LeaveTypeActions $leaveAction)
    {
        $this->leaveAction = $leaveAction;
    }
    public function index()
    {
        return $this->leaveAction->fetchAllLeaveTypes();
    }

    public function show(LeaveType $leave_type): JsonResponse
    {
        return response()->json([
            'data' => new LeaveTypeResource($leave_type),
        ]);
    }

    public function store(StoreLeaveTypeRequest $request)
    {
        $formData = $request->safe()->all();
        return $this->leaveAction->createLeaveType($formData);
    }

    public function update(UpdateLeaveTypeRequest $request, LeaveType $leave_type): JsonResponse
    {
        return $this->leaveAction->updateLeaveType($request->safe()->all(), $leave_type);
    }

    public function destroy(LeaveType $leave_type)
    {
        return $this->leaveAction->deleteLeaveType($leave_type);
    }
}
