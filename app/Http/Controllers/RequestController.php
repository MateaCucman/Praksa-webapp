<?php

namespace App\Http\Controllers;

use App\Models\Request as GoRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = GoRequest::all();
        $workers = Worker::all();
        return view("requests", [
            "requests"=> $requests,
            "workers"=> $workers
        ]);
    }
}
