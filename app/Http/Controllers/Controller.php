<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(10);


        return view('welcome',compact('users'));
    }

    public function create()
    {
        return view('create');
    }
    
    public function store( Request $request){

        $request->validate([
            'email' => 'unique:users',
            'password' => 'min:8|required',
            'address' => 'min:8',
            'name' => 'required|min:10',
            'celular' => 'required|min:10'

        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->celular = $request->celular;
        $user->save();

        return redirect()->route('index')->with('Usuario agregado');


    }
}
