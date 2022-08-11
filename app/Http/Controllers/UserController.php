<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', [
            'users' =>$users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // $requestData = $request->all();

        // metodo 1
        // $user = new User();
        // $user->name = $requestData['name'];
        // $user->email = $requestData['email'];
        // $user->save();

        //metodo 2
        // User::create([
        //     'name' => $requestData['name'],
        //     'email' => $requestData['email']
        // ]);

        // metodo 2 reduzido
        User::create($request->all());
    }

}
