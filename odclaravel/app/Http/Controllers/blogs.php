<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class blogs extends Controller
{
    public function index(){
        return View("index",['req'=>$req]);
    }
    public function arrayindex(){
        $req = DB::table("article")->here('active', 1)->get();
                return view("student/edit",compact("re"));
    }
    public function
}
