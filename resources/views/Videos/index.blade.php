@extends('layouts.app')
@section('content')
<main class="bg-light">
  <div class="container">
     <div class="row">
        @foreach ($videos as $video)
          <div class="col-4">
             <a href="{{ route('video.show', $video->id)}}">
              <img src="{{ $video->thumb }}" alt="">
              <h3>{{ $video->title }}</h3>
            </a>
          </div>
            
        @endforeach

     </div>

   </div>

  </div>
</main> 
@endsection


    