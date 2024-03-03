<?php

namespace App\Http\Controllers\Admin;
use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDepartment(){
        $department = Department::all();

        return view('admin.user.department', compact('department'));
        
    }

    public function showDepartmentToTeam(){
        $department = Department::all();
        dd($department);
        return view('admin.user.team', compact('department'));
    }
    
}
