<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $b1 = DB::table('banners')->select('id')->count();
        $c1 = DB::table('categories')->select('id')->count();
        $d1 = DB::table('blogs')->select('id')->count();
        $e1 = DB::table('products')->select('id')->count();
        $f1 = DB::table('contacts')->select('id')->count();
        $g1 = DB::table('certificates')->select('id')->count();
        $i1 = DB::table('contactuses')->select('id')->count();

        return view('admin.dashboard', compact('b1', 'c1', 'd1', 'e1', 'f1', 'g1','i1'));
    }
}
