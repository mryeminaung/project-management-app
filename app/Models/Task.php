<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scopeCompleteHigh($query)
    {
        return $query->where('status', "Completed")
            ->orWhere('status', "Pending")
            ->orWhere('status', "In Progress")
            ->where('priority', 'High');
    }

    public function scopeComplete($query)
    {
        return $query->where('status', '=', 'Completed');
    }

    public function scopePending($query)
    {
        return $query->where('status', '=', 'Pending');
    }

    public function scopeInProgress($query)
    {
        return $query->where('status', '=', 'In Progress');
    }
}
