<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return 'index';
        // ---- get all notes
        // $notes = Note::query()-> orderBy('created_at', 'desc')->get();
        // dd($notes);
        // return view('note.index');

        // --- get with pagination default
        // $notes = Note::query()->orderBy('created_at', 'desc')->paginate();
        // dd($notes);
        // return view('note.index');

        // --- get with pagination and limit
        // $notes = Note::query()->orderBy('created_at', 'desc')->paginate(12);
        // dd($notes);
        // return view('note.index');


        // ---- passing variable to view
        $notes = Note::query()->orderBy('created_at', 'desc')->paginate();
        return view('note.index', ['notes' => $notes]);



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return 'create';
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return 'store';
        // return view('note.store');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Note $note)
    // {
    //     //
    //     return 'show';
    // }
    public function show(Note $note)
    {
        //
        // return 'show ' .$id;
        // return view('note.show');
        return view('note.show', ['note' => $note]);  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
        // return 'edit';
        // return view('note.edit');
        return view('note.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
        return 'destroy';
    }
}
