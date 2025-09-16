<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RoleController  extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('admin');
        }

        if ($user->can('crear usuarios')) {
            return view('user.table');
        }       
        return view('user.dashboard');
    }    
}