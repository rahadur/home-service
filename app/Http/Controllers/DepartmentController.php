<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    //

    public function packages($id)
    {

      $packages = Department::find($id)->packages;

      return view('department.packages', ['packages'=> $packages]);
    }
}
