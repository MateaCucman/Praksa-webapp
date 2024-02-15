<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(){
        $worker = Worker::where('id', 4)->first();
        $team = Team::where('id', $worker->team_id)->first();
        return view("worker", ['worker' => $worker, 'team' => $team]);
    }
}
