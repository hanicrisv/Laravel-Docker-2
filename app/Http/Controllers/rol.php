<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class rol extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('admin.dashboard');
        }

        if ($user->can('crear usuarios')) {
            return view('user.table');
        }

        return view('user.dashboard');
    }
}
