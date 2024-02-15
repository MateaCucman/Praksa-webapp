<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Request as GoRequest;
use App\Models\Team;
use App\Models\Worker;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $teams = Team::all();
        $requests = GoRequest::all();
        $workers = Worker::all();
        $admin = Worker::where('role', 'admin')->first();

        return view("admin", [
            "projects"=> $projects,
            "teams"=> $teams,
            "requests"=> $requests,
            "workers"=> $workers,
            "admin"=> $admin
        ]);
    }
}
