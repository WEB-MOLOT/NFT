<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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
}
