<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard')->with(['user'=> $user, 'users' => User::all()]);
    }
}
