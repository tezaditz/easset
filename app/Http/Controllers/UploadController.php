<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request;

class UploadController extends Controller
{
    public function import(Request $request)
    {
        return $request->all();
    }
}
