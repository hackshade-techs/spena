<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($uploads, $pathToFile)
    {
        $file_path = public_path('/'.$uploads.'/'.$pathToFile);

        $document = @file_get_contents($file_path);
        if($document == false){
            return back()->withSuccess('File doesnot exist or has been deleted');
        }

        return response()->download($file_path);
    }

   
}
