<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $public_files = Storage::disk('local')->allFiles();
        return view('file.index', compact('public_files'));
    }
    
    public function store()
    {
        $file = request()->file('file');
        $path = $file->store('files', ['disk' => 'public']);
        //$file->created_by = auth()->user()->id;
        //$file->path = $path;
        //$file->save();
        return redirect('/');
    }

    public function create()
    {
        return view('file.create');
    }

    function getLocalFile($id){
        // role-permission

        $file = Storage::disk('local')->get(request()->path);
        // get filename from path
        $filename = basename(request()->path);

        return response($file, 200)
            ->header('Content-Type', 'application/octet-stream')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}