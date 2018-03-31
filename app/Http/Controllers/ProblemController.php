<?php

namespace App\Http\Controllers;

use App\Problem;
use App\Department;
use App\Location;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {

        $problems = Problem::all();

        return view('problem.index', compact('problems'));
    }



    public function create()
    {
        $departments = Department::all();
        $locations = Location::all();

        return view('problem.create', compact('departments', 'locations'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|numeric',
            'location_id' => 'required|numeric',
            'title' => 'required',
            'description' => 'required'
        ]);

        Problem::create($request->all());


        return redirect('/users/problems');
    }



    public function adminProblem()
    {
        $problems = Problem::all();

        return view('problem.admin_problem', compact('problems'));
    }


}
