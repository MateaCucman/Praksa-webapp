<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        "start",
        "end",
        "reason",
        "pl_approved",
        "tl_approved",
    ];
    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
