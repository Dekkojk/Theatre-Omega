<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'login'=>'required',
            'email' => 'required',
            'password' => 'required'
        ]);
//        dd($request->login);
        User::query()->create([
            'name'=>$request->name,
            'login'=>$request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
//        dd(auth());
        return redirect(route('login'));
    }

    public function login(Request $request):RedirectResponse
    {
        $request->validate([
            'login'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt([
            'login'=>$request->login,
            'password'=>$request->password,
        ]))
        {
//            dd(\auth()->user()->role);
            if (\auth()->user()->role == RoleEnum::ADMIN->value){
                return redirect(route('performances.index'));
            }
//            else
            return redirect('/');

        }
        return redirect()->route('login');
    }

    public function logout():RedirectResponse
    {
        auth()->logout();
        return redirect('/');
    }

}
