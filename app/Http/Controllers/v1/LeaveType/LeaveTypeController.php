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

    public function show(LeaveType $leaveType): JsonResponse
    {
        return response()->json([
            'data' => new LeaveTypeResource($leaveType),
        ]);
    }

    public function store(StoreLeaveTypeRequest $request)
    {
        $formData = $request->safe()->all();
        return $this->leaveAction->createLeaveType($formData);
    }

    public function update(UpdateLeaveTypeRequest $request, LeaveType $leave): JsonResponse
    {
        return $this->leaveAction->updateLeaveType($request->safe()->all(), $leave);
    }

    public function destroy(LeaveType $leave)
    {
        return $this->leaveAction->deleteLeaveType($leave);
    }
}
