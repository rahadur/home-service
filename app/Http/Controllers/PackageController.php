<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;
use App\Department;
use App\Package;

class PackageController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

      $packages = Package::all();

      return view('package.index', compact('packages'));
    }



    public function create()
    {
      $this->authorize('package-create', Package::class);

      $departments = Department::all();

      return view('package.create', ['departments' => $departments]);
    }



    public function store(PackageRequest $request) {

        Package::create($request->all());

        return redirect('/packages');
    }



    public function edit($id)
    {
      $departments = Department::all();

      $package = Package::find($id);

      return view('package.edit', compact('package','departments'));
    }


    public function update(PackageRequest $request, $id)
    {
        $package = Package::find($id);

        $package->department_id = $request->input('department_id');
        $package->title = $request->input('title');
        $package->details = $request->input('details');
        $package->price = $request->input('price');

        $package->save();

        return redirect('/admin/packages');
    }



    public function destroy($id)
    {
        Package::destroy($id);

        return redirect('/admin/packages');
    }



    public function view($id)
    {

      $package = Package::find($id);

      return view('package.view', compact('package'));
    }
}
