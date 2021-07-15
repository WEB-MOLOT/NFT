<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request) {
        $projects = Project::where('name', 'like', '%' . $request->get('query') . '%')->get();

        return ProjectResource::collection($projects);
    }
}
