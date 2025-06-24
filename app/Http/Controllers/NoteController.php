<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index() {
        $id = Auth::id();
        $notes = Note::where('user_id', $id)->get();
        return view('dashboard', compact('notes'));
    }
}
