<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Worker;
use Illuminate\Http\Request;

class TeamMembersController extends Controller
{
    public function index()
    {
        $team = Team::where('id', 1)->first();

        $members = Worker::where('team_id', $team->id)->get();

        return view("team_members", ['members' => $members, 'team' => $team]);
    }
}
