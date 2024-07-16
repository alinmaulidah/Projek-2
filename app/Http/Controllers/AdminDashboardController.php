<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        if($users->isEmpty()){
            return "No users found.";
        }
        return view('admin.dashboard', compact('users'));
    }
}