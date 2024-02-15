<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        return view("projects", ['projects' => Project::all()]);
    }
}
