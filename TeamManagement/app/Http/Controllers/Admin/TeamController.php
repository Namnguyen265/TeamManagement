<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Department;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showTeam(){
        $team = Team::all();
        $department = Department::all();
        return view('admin.user.team', compact('team'), compact('department'));
    }

    public function addTeam(Request $request){
        $team = new Team();

        
        if (Team::where('team_name', $request->team_name)->count()>0)
        {
            return redirect()->back()->withErrors('Tên nhóm đã tồn tại, vui lòng chọn tên khác !');

        }
        else
        {
            $team->team_id = $request->team_id;
            $team->team_name = $request->team_name;
            $team->department_id = $request->department_id;
            $team->save();
            return redirect()->back()->with('success', ('Đã thêm nhóm thành công !'));
        }
    }

    public function editTeam($id)
    {
        $team = Team::where('team_id', $id)->get();
        $department = Department::all();
        return view('admin.user.edit_team', compact('team'), compact('department'));
    }

    public function updateTeam($id, Request $request)
    {
        $team = Team::where("team_id", $id)->first();
        
        $team->team_name = $request->team_name;
        $team->department_id = $request->department_id;
        $team->save();
        
        return redirect()->back()->with('success',__('Update profile success'));

        
    }

    public function deleteTeam($id)
    {
        $query = Team::where('team_id', $id)->delete();
        if ($query)
        {
            return redirect()->back()->with('success', 'Xoá nhóm thành công');
        }
        else
        {
            return redirect()->back()->withErrors('Đã có lỗi xảy ra');
        }
    }

    public function cancel(){
        return redirect()->back();
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $team = Team::where('team_name', 'like' , '%'.$keyword.'%')->get();
        $department = Department::all();
        // // dd($search_product);
        if (count($team) != 0)
        {
            return view('admin.user.team', compact('team'), compact('department'));
        }
        else
        {
            return view('admin.user.team', compact('team'), compact('department'))->withErrors('Tên nhóm không tồn tại !');

        }
    }
}
