<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Worker;
use Illuminate\Http\Request;

class ProjectMembersController extends Controller
{
    public function index()
    {
        $project = Project::where('id', 1)->first();

        $members = Worker::whereHas('project', function ($query) {
            $query->where('project_id', 1);
        })->get();

        return view("project_members", ['members' => $members, 'project' => $project]);
    }
}
