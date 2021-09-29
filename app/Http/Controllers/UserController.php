<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }

    public function indexEn(){
        $users=\App\Models\User::paginate()->where('role', 'Enseignant');
        return view('users.indexEn',compact('users'));
    }
    public function indexTec(){
        $users=\App\Models\User::paginate()->where('role', 'Technicien');
        return view('users.indexEn',compact('users'));
    }
    public function addView()
    {
    return view('users.ajout');
    }
    public function add(Request $request)
    {	 $this->validate($request, [

      'name' => 'alpha|nullable|max:255',
      'username' => '|unique:users|string|nullable|max:100000',
      'role'=>'|string|max:1000',
      'password' => 'string|nullable|min:8',
      ]);

    $users = new \App\Models\User();
    $users->name=$request['name'];
    $users->username=$request['username']; 
    $users->role=$request['role'];
    $users->password=Hash::make($request['password']);
    $users->role=$request['role']; 
    if( $users->save()){
        $users=\App\Models\User::all();
    return redirect('/enseignant')->with('success','ajout  effectué avec succées!')->with(compact('users'));
    }else{
        return redirect('/enseignant')->with('warning','ajout non effectué, vérifier les données!');
    }
    
    }
    public function Delete($id)
    {
    
     $user=\App\Models\User::find($id);
     $user->delete();
     $users=\App\Models\User::paginate()->where('role', 'Technicien');
     return redirect('/enseignant')->with('success','compte a été supprimer avec succées!');
     }
}