<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Area;
class UserController extends Controller
{
    function show(){
        $list=User::all();
        return view('user/list',['users' => $list]);
    }
    function form($id = null){
        $user = new User();
        $areas = Area::all();
        if($id !=null){
            $user = User::findOrfail($id);
        }
        return view('user/form',['user'=>$user, 'areas'=>$areas]);
    }

    function save(Request $request){
        
        $user = new User();
        if($request -> id > 0){
            $user = User::findOrfail($request ->id);
        }
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->password = $request->password;
        $user->area_id = $request->area_id;
        $user ->save();
        return redirect('/users');
    }
}
