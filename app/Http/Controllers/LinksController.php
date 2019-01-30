<?php

namespace App\Http\Controllers;
use App\Link;
use Illuminate\Http\Request;


class LinksController extends Controller
{
    function index() {
        $links = Link::all();
        return view('laravellinks', ['links' => $links]);
    }

    function showLinksForm() {
        return view('linktoevoegen');
    }

    function handleLinksForm(Request $request) 
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }
}