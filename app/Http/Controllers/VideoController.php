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
    public function show($id)
    {
        $video = video::find($id);
        return view('videos.show', compact('video'));
    }
   
}
