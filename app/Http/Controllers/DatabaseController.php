<?php

namespace App\Http\Controllers;

use App\DatabaseModel;
use Illuminate\Http\Request;
use App\Imports\DatabaseImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class DatabaseController extends Controller
{
    public function importView()
    {
        return view('import');
    }

    public function import()
    {
        Excel::import(new DatabaseImport, request()->file('file'));
        
        $ori = explode('.', request()->file('file')->getClientOriginalName());

        // Storage::putFile('files', request()->file('file'));

        request()->file('file')->storeAs(
            'files', $ori[0] . '.' . end($ori)
        );

        return back();
    }
}
