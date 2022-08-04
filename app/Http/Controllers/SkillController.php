<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function list()
    {
        return view('skill.list', [
            'skills' => Skill::all()
        ]);
    }

    public function addForm()
    {
        return view('skill.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $skills = new Skill();
        $skills->name = $attributes['name'];
        $skills->user_id = Auth::user()->id;
        $skills->save();

        return redirect('/console/skill/list')
            ->with('message', 'Skill has been added!');
    }

    public function editForm(Skill $skills)
    {
        return view('skill.edit', [
            'skills' => $skills,
        ]);
    }

    public function edit(Skill $skills)
    {

        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $skills->name = $attributes['name'];
        $skills->save();

        return redirect('/console/skill/list')
            ->with('message', 'Skill has been edited!');
    }

    public function delete(Skill $skills)
    {
        $skills->delete();

        return redirect('/console/skill/list')
            ->with('message', 'Skill has been deleted!');
    }

    public function imageForm(Skill $skills)
    {
        return view('skill.image', [
            'skills' => $skills,
        ]);
    }

    public function image(Skill $skills)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($skills->image);

        $path = request()->file('image')->store('skills');

        $skills->image = $path;
        $skills->save();

        return redirect('/console/skill/list')
            ->with('message', 'Skill image has been edited!');
    }
}
