<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Go extends Model
{
    use HasFactory;
    protected $fillable = [
        "start",
        "end"
    ];

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
