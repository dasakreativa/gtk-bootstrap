<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UploadTest extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        // dd(request()->file('upload'));
        // dd(User::find(1)->file('upload'));
        dd(User::where('id', 1)->first()->uploadsFromRequest('upload'));

        // $input = request()->file('upload');
        // foreach($input as $file) {
        //     $ext     = $file->getClientOriginalExtension();
        //     $store[] = $file->storeAs('uploads/images', rand() . "." . $ext);
        // }

        // dd($store);
    }
}
