<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Worker;
use Illuminate\Http\Request;

class TeamLeaderController extends Controller
{
    public function index()
    {
        $leader = Worker::where("id",2)->first();
        $team = Team::where('id', $leader->team_id)->first();

        return view("team_leader", ['leader' => $leader, 'team'=> $team]);
    }
}
