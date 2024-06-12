<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignedJobs extends Model
{
    use HasFactory;

    protected $table = 'assigned_jobs';

    protected $fillable = ['rescue_id', 'volunteer_id', 'status'];

    public function rescue()
    {
        return $this->belongsTo('App\Models\Rescue');
    }
}
