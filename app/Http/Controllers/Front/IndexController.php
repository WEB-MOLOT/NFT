<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
//        dd(Auth::user());
        return view('front.index');
    }

    public function submit() {
        return view('front.submit');
    }
}
