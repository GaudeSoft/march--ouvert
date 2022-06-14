<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function users()
    {
        $users = User::where('role_as','0')->get();
        return view ('admin.users.index', compact('users'));
    }
    public function viewUsers($id)
    {
        $users = User::find($id); 
        return view ('admin.users.view', compact('users'));
    }
}
