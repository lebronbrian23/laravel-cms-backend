<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SocialMediaController extends Controller
{
    public function list()
    {
        return view('social-media.list', [
            'social_medias' => SocialMedia::all()
        ]);
    }

    public function addForm()
    {
        return view('social-media.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'url' => 'required',
        ]);

        $social_media = new SocialMedia();
        $social_media->name = $attributes['name'];
        $social_media->type = $attributes['type'];
        $social_media->url = $attributes['url'];
        $social_media->user_id = Auth::user()->id;
        $social_media->save();

        return redirect('/console/social-media/list')
            ->with('message', 'Social Media has been added!');
    }

    public function editForm(SocialMedia $social_media)
    {
        return view('social-media.edit', [
            'social_media' => $social_media,
        ]);
    }

    public function edit(SocialMedia $social_media)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'url' => 'required',
        ]);

        $social_media->name = $attributes['name'];
        $social_media->type = $attributes['type'];
        $social_media->url = $attributes['url'];
        $social_media->save();

        return redirect('/console/social-media/list')
            ->with('message', 'Social Media has been edited!');
    }

    public function delete(SocialMedia $social_media)
    {
        $social_media->delete();

        return redirect('/console/social-media/list')
            ->with('message', 'Social Media has been deleted!');
    }

    public function imageForm(SocialMedia $social_media)
    {
        return view('social-media.image', [
            'social_media' => $social_media,
        ]);
    }

    public function image(SocialMedia $social_media)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($social_media->image);

        $path = request()->file('image')->store('skills' ,'s3');

        $social_media->image = Storage::disk('s3')->url($path);
        $social_media->save();

        return redirect('/console/social-media/list')
            ->with('message', 'Social Media image has been edited!');
    }
}
