<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
      
        $videos = Video::all();

        $data=[
            'videos' => $videos
        ];
        
        return view('Videos.index', $data);
    }
}
