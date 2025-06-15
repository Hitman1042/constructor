<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block;

class BlockController extends Controller
{
    public function index()
    {
        $blocks = Block::all();
        return view('blocks.index', compact('blocks'));
    }

    public function create()
    {
        return view('blocks.create');
    }

    public function store(Request $request)
    {
        Block::create($request->validate([
            'type' => 'required',
            'name' => 'required',
            'default_content' => 'required|json',
            'category' => 'required'
        ]));
        return redirect('/blocks');
    }

    public function edit(Block $block)
    {
        return view('blocks.edit', compact('block'));
    }

    public function update(Request $request, Block $block)
    {
        $block->update($request->validate([
            'type' => 'required',
            'name' => 'required',
            'default_content' => 'required|json',
            'category' => 'required'
        ]));
        return redirect('/blocks');
    }
}