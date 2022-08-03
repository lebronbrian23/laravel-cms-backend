<?php

namespace App\Http\Controllers;

use App\Models\ContentBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ContentBlockController extends Controller
{
    public function list()
    {
        return view('content_blocks.list', [
            'content_blocks' => ContentBlock::all()
        ]);
    }

    public function addForm()
    {
        return view('content_blocks.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $content_block = new ContentBlock();
        $content_block->name = $attributes['name'];
        $content_block->type = $attributes['type'];
        $content_block->description = $attributes['description'];
        $content_block->user_id = Auth::user()->id;
        $content_block->save();

        return redirect('/console/content-blocks/list')
            ->with('message', 'Content Block has been added!');
    }

    public function editForm(ContentBlock $content_block)
    {
        return view('content_blocks.edit', [
            'content_block' => $content_block,
        ]);
    }

    public function edit(ContentBlock $content_block)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $content_block->name = $attributes['name'];
        $content_block->type = $attributes['type'];
        $content_block->description = $attributes['description'];
        $content_block->save();

        return redirect('/console/content-blocks/list')
            ->with('message', 'Content Block has been edited!');
    }

    public function delete(ContentBlock $content_block)
    {
        $content_block->delete();

        return redirect('/console/content-blocks/list')
            ->with('message', 'Content Block has been deleted!');
    }

    public function imageForm(ContentBlock $content_block)
    {
        return view('content_blocks.image', [
            'content_block' => $content_block,
        ]);
    }

    public function image(ContentBlock $content_block)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($content_block->image);

        $path = request()->file('image')->store('content_blocks');

        $content_block->image = $path;
        $content_block->save();

        return redirect('/console/content-blocks/list')
            ->with('message', 'Content Block image has been edited!');
    }
}
