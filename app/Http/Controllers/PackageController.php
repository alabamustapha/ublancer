<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Http\Requests;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::all();
    	return view('packages.index', compact('packages'));
    }

    public function store(Requests\StorePackageRequest $request){
        $package = Package::create($request->all());
      
    	return back()->with('message', $package->name . " Created successfully");
    }

    public function delete(Request $request, package $package){
        
        $package->delete();
        
        return back()->withMessage("package deleted");
    }

    public function edit(Package $package){
        $package = Package::find($package->id);
        return view('packages.edit', compact('package'));
    }

    public function update(Request $request, package $package,$id){
        
        $req = $request->all();
        unset($req['_token']);
        $package->where('id',$id)->update($req);
        return back()->withMessage("package updated");
    }
}
