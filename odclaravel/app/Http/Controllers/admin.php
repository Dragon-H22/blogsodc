<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    # addNewArticle - DeleteArticle - HideComment - login
    function Login(){
         return view("login");
    }
     public function postlogin(Request $request){
         $req = $request->only("email","password");
         if(Auth::attempt($req)){
             echo "welcome";
         }else{
             echo "etla3 barrra";
             return redirect("login");
         }
    }

    public function logout(){
        Auth::logout();
        return redirect("login");
    }

    public function addNewArticle(Request $request){
         DB::table("article")->insert([
             "article_body"=>$request->body,
             "article_title"=>$request->title,
             "isactive"=>1
         ]);
         return redirect("index");

    }


    public function UpdateArticle(Request $request){
        DB::table("article")->where('id',$request->id)->update([
            "article_body"=>$request->body,
            "article_title"=>$request->title
        ]);
        return redirect("index");
   }
    public function DeleteArticle(Request $request){
         DB::table("article")->where('id',$request->id)->delete();
    }
    public function DeleteComment(Request $request){
         DB::table("comment")->where('id',$request->id)->delete();
    }
    public function hidearticle(Request $request){
        DB::table("article")->where('id',$request->id)->update([
            "isactive"=> 0
        ]);
    }
    public function HideComment(Request $request){
        DB::table("comments")->where('id',$request->id)->update([
            "isactive"=> 0
        ]);
    }


}
