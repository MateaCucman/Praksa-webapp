<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "about",
        "leader",
    ];
    public function workers(){
        return $this->belongsToMany(Worker::class, 'worker_project','worker_id', 'project_id');
    }
}
