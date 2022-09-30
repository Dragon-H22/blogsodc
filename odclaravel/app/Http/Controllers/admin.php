<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginrequest(Request $request)
    {
        $data = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect("Admin/addNewArticle");
        }
        return redirect("login");
    }


    public function logout()
    {
        Auth::logout();
        return redirect("login");
    }

    public function addNewArticle(Request $request)
    {
        return view("create");
    }

    public function store(Request $request)
    {

        DB::table("article")->insert([
            "article_body" => $request->body,
            "article_title" => $request->title,
            "isactive" => 1
        ]);
        return redirect("posts");
    }
}
