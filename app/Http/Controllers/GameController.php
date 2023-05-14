<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $games = Game::paginate(10);
        return view('games.index', [
            'data' => $games
        ]);
    }

    public function show($id) {
        $game = Game::find($id);
        return $game;
    }

    public function create() {
        return view('games.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'image' => 'required'
        ]);

        Game::create([
            'name' => $request->name,
            'description' => $request->description,
            'genre' => $request->genre,
            'image' => $request->image
        ]);

        return redirect('/game') 
            ->with('success','Data created successfully');
    }

    public function edit(Request $request, $id) {
        $game = Game::find($id);
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'image' => 'required'
        ]);
        $game = Game::find($id);
        $game->update([
            'name' => $request->name,
            'description' => $request->description,
            'genre' => $request->genre,
            'image' => $request->image,
        ]);

        return redirect('/game') 
            ->with('success','Data updated successfully');
    }

    public function destroy($id) {
        $game = Game::find($id);
        $game->delete();

        return redirect('/game')
            ->with('success','Successfully delete data');;
    }
    
}
