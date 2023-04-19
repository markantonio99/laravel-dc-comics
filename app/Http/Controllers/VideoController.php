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
   
    public function store(Request $request)
    {
        $data = $request->all();

        $newVideo = new video(); 
        
        $newVideo->title = $data['title'];
        $newVideo->type = $data['type'];
        $newVideo->price = $data['price'];
        $newVideo->thumb = $data['thumb'];
        $newVideo->description = $data['description'];
    
        $newVideo->save();

        return redirect()->route('video.show', $newVideo);
    }

    public function edit(video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, video $video)
    {
         $data = $request->all();

         $video->title = $data['title'];
         $video->type = $data['type'];
         $video->price = $data['price'];
         $video->thumb = $data['thumb'];
         $video->description = $data['description'];

         $video->save();

         return to_route('video.show', $video);
    }

}
