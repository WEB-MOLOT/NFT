<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function showCategory($slug) {
        $category = Category::where('slug', $slug)->first();

        return view('front.category', [
            'category' => $category,
            'projects' => ProjectResource::collection($category->projects()->get())
        ]);
    }

    public function showProject($slug) {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('front.project', [
            'project' => new ProjectResource($project)
        ]);
    }
}
