<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteUserController extends Controller
{
    public function get(Request $request,$user_id)
    {   
        return view('deleteUser', compact("user_id"));
    }
    
    public function post(Request $request,$user_id)
    {
        $select = $request->input('select');
        
        if($select=="はい")
        {
            $flag=true;
            $request->session()->forget('user_id');
            $page_id=null;
        }else{
            $flag=false;
            $user_id = $request->session()->get('user_id');
        $page_id=$user_id;
        }
        
        if($flag==true){
            DB::transaction(function () use($user_id) {
                User::where('user_id',$user_id)->delete();
            });
        }
        
        return view('deleteUserResult', compact('page_id','flag'));
    }
}