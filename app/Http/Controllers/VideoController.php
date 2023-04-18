<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
class VideoController extends Controller
{
    public function index(){
      
        $videos = Video::all();

        $data=[
            'videos' => $videos
        ];
        
        return view('videos.index', $data);
    }
    public function show(video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function create()
    {
       return view('videos.create');
    }
   
}
