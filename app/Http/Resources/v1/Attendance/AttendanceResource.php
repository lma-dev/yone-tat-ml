<?php

namespace App\Http\Resources\v1\Attendance;

use App\Http\Resources\v1\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Attendance */
class AttendanceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => new UserResource($this->whenLoaded('users')),
            'date' => $this->date,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'status' => $this->status,
            'note' => $this->note,
            'ipAddress' => $this->ip_address,
            'device' => $this->device,
            'browser' => $this->browser,
            'platform' => $this->platform,
        ];
    }
}
