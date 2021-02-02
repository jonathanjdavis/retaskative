<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskRecord extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id',
        'completed_by',
        'name',
        'date_due',
        'datetime_completed',
    ];

    /**
     * Get the task the task record belongs to.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

}
