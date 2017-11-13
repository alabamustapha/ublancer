<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Http\Requests;

class SkillController extends Controller
{
    public function index(){
    	$skills = Skill::all();
    	return view('skills.index', compact('skills'));
    }

    public function store(Requests\StoreSkillRequest $request){
    	$skill = Skill::create($request->all());
    	return back()->with('message', $skill->name . " Created successfully");
    }

    public function delete(Request $request, Skill $skill){
        
        $skill->delete();
        
        return back()->withMessage("Skill deleted");
    }

    public function edit(Category $category){
        $categories = Category::all();
        return view('categories.edit', compact('categories', 'category'));
    }

    public function update(Request $request, Skill $skill){
        
        $skill->update($request->all());
        return back()->withMessage("Skill updated");
    }
}
