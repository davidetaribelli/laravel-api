<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        $projects = Projects::with("type", "technology")->get();

        $response = [
            "success" => true,
            "results" => $projects
        ];

        return response()->json($response);
    }

    public function show($id){
        $projects = Projects::with("type", "technology")->find($id);

        $response = [
            "success" => true,
            "results" => $projects
        ];

        return response()->json($response);
    }

}
