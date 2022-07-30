<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

trait Upload
{
    public function uploadsFromRequest($param)
    {
        $user    = $this;
        $request = request()->file($param);
        $class   = get_called_class();
        
        foreach($request as $file) {
            $upload = $file->storeAs('images', rand() . ".{$file->getClientOriginalExtension()}");
        }
    }
}
