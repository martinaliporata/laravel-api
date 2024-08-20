<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        // questo, rispetto alla risorsa post, è eager (eager loading di tutti i post):
        $projects= Project::all();
        // ritorna un json con x cose
        return response()->json($projects);
    }

    public function show(Project $project){
        // ritorna un json con y cose

    }
}
