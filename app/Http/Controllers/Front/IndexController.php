<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('front.index');
    }

    public function submit() {
        return view('front.submit');
    }

    public function active() {
        return view('front.active');
    }

    public function upcoming() {
        return view('front.upcoming');
    }

    public function contact() {
        return view('front.contact');
    }

    public function promotion() {
        return view('front.promotion');
    }

    public function personalArea() {
        return view('front.personal-area');
    }

    public function showCategory($slug) {
        $category = Category::where('slug', $slug)->first();

        return view('front.category', [
            'category' => $category,
            'projects' => ProjectResource::collection($category->projects()->get())
        ]);
    }
}
