<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    public function index()
    {
        // dump(session()->get('paths'));
        $paths = session()->get('paths');
        return view('dashboard', compact('paths'));
    }
    
    public function store(Request $request)
    {
        $request->validate(['image' => 'required','image.*' => 'image']);

        if($request->hasFile('image')){
            foreach ($request->file('image') as $image) {

                // $path = $image->storeAs('public', $image->getClientOriginalName());
                // session()->push('paths', $path);
                session()->push('paths', $image->store('public'));
            }
        }
        return back();
    }
    
    public function destroy()
    {
        foreach (session()->get('paths') as $image) {
            Storage::delete('public', $image);
        }
        session()->forget('paths');
        return back();
    }
}
