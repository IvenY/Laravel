<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index(){
        return view('admin/comment/index')->withComments(Comment::all());
    }

    public function edit($id){
        return view('admin/comment/edit')->withComments(Comment::find($id));
    }

    public function destroy($id){
        Comment::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}
