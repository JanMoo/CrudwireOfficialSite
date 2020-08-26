<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $content = file_get_contents(base_path()."/vendor/janmoo/crudwire/readme.md", FILE_USE_INCLUDE_PATH);
        return view('home', ['content', Markdown::parse($content)]);
    }
}
