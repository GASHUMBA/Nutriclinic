<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Display a listing of users
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('users.index', compact('users')); // Pass data to a Blade view
    }

    // You can also add other methods like create, store, edit, update, delete
}
