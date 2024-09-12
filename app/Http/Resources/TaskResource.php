<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "img_path" => $this->img_path,
            "status" => $this->status,
            "priority" => $this->priority,
            "due_date" => $this->due_date,
            "assigned_user_id" => $this->assigned_user_id,
            "project_id" => $this->project_id,
            "createdBy" => $this->created_by,
            "updatedBy" => $this->updated_by,
            "createdAt" => $this->created_at->diffForHumans()
        ];
    }
}
