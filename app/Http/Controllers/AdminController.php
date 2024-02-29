<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function createUser(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['password'] = strip_tags($incomingFields['password']);
        $newPost = User::create($incomingFields);
        return 'huh';
    }

    public function addUserPage(){
        return view('user.add-user-page');
    }


}

/*
    
    ----}

    */