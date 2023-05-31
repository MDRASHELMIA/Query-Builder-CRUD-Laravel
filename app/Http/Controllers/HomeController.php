<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function getData(){
        $student = DB::table('students')->get();
        return view('home', compact('student'));
    }
    public function deleteItem($id){
        DB::table('students')->where('id',$id)->delete();
        return back()->with('deleted','Item deleted has been successfully');
    }
    public function showSingle($id){
        $student = DB::table('students')->where('id',$id)->first();
        return view('single-show',compact('student'));
    }
    public function formShow(){
        return view('form');
    }
    public function formDataInsert(Request $request){
        DB::table('students')->insert([
            'name' => $request->name,
            'body' => $request->body
        ]);
        return back()->with('post_created','Post has been created successfully!');
    }
    public function editPageShow($id){
        $student = DB::table('students')->where('id',$id)->first();
        return view('edit-page',compact('student'));
    }
    public function updatePost(Request $request){
        DB::table('students')->where('id',$request->id)->update([
            'name'=>$request->name,
            'body'=>$request->body
        ]);
        return back()->with('post_updated','Post Updated has been created successfully!');
    }

}
