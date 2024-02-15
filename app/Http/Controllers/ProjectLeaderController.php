<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Worker;
use Illuminate\Http\Request;

class ProjectLeaderController extends Controller
{
    public function index()
    {
        $leader = Worker::where("id",1)->first();
        $team = Team::where('id', $leader->team_id)->first();

        return view("project_leader", ['leader' => $leader, 'team'=> $team]);
    }
}
