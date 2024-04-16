<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    function index() {
        return view('categories');
    }

    function userTouch(){

        User::create([
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
        ]);

        return back()->with('message', 'user created succesfully');

    }

}
