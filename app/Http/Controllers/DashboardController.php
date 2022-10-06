<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function show(){
        $auth = Auth::user();
        $blogs = Blog::all();
        return view('dashboard', ['blogs'=> $blogs]);
    }
}
