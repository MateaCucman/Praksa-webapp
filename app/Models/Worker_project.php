<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker_project extends Model
{
    use HasFactory;

    public function worker()
    {
        return $this->hasOne(Worker::class);
    }

    public function project()
    {
        return $this->hasOne(Project::class);
    }
}
