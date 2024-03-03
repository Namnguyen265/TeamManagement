<?php

namespace App\Http\Controllers\Admin;
use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.user.dashboard');
    }

    public function dashboard(){
        $department = Department::all();
        return view('admin.user.team', compact('department'));
    }

    
}
