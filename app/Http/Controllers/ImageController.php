<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        $image = new Image();
        $image->name = $request->input('name');
        $image->description = $request->input('description');
        // $image->photo = $request->input('photo');
        $image->category = $request->input('category');
        if (Auth::check()) {
            $image->author = Auth::user()->name;
        }
        // $path = $request->input('photo')->store('images');
        // $file = $request->file('photo')->store('images', 'public');
        // $file = $request->file('photo');

        $file = $request->file('photo');
        $filename = $file->getClientOriginalName(); // image.jpg
        // $image->photo = $request->file('photo');
        $upload_folder = 'public/folder';
        

        Storage::putFileAs($upload_folder, $file, $filename);
        $image->photo = $filename;
        $image->save();
        // return view('add', ['path' => $path]);
        // return redirect()->route('all-data', ['path' => $file]);
        return redirect()->route('all-data');

    }
    

    public function allData()
    {
        return view('home', ['data' => Image::all()]);
        
    }
}
