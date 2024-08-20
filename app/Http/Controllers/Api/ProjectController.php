<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        // questo sarebbe, rispetto alla risorsa post, eager (eager loading di tutti i post):
        // $projects= Project::all();

        // questo, rispetto alla risorsa post, è lazy (lazy loading di tutti i post):
        $projects= Project::paginate(10);
        return response()->json([
            'success' => true,
            'results' => $projects
        ])
        // ritorna un json con x cose
        return response()->json($projects);
    }

    public function show(Project $project){
        // ritorna un json con y cose

    }
}
