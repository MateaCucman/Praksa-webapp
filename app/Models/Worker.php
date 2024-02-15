<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function go()
    {
        return $this->hasMany(Go::class);
    }

    public function project()
    {
        return $this->belongsToMany(Project::class, 'worker_project', 'worker_id', 'project_id');
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
