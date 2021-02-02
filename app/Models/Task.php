<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'retaskative_id',
        'notify',
        'name',
        'description',
        'notify',
        'interval',
        'interval_units',
    ];

    /**
     * Get the retaskative the task belongs to.
     */
    public function retaskative()
    {
        return $this->belongsTo(Retaskative::class);
    }
}
