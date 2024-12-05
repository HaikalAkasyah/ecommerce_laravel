<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
<<<<<<< HEAD

class ListController extends Controller
{
    public function index(){
        $admins = Admin::all();
        $users = User::all();

        return view('welcome', compact('admins', 'users'));
=======
use App\Models\Distributor;

class ListController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();
        $distributor = Distributor::all();

        return view('welcome', compact('admins', 'users', 'distributor'));
>>>>>>> fb6f8d9 (modul 4)
    }
}
