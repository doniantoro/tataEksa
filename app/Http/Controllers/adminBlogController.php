<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminBlogController extends Controller
{
    public function index(){
        return view ('/admin/blog');
    }
    public function create(){
        return view ('/admin/input_blog');
    }
}
