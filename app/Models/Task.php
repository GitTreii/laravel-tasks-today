<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'status',
        'task_date',
        'is_archived'
    ];

    protected $casts = [
        'task_date' => 'date',
        'is_archived' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_archived', false);
    }

    public function scopeToday($query)
    {
        return $query->whereDate('task_date', today());
    }
}
