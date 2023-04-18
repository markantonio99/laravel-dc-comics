

<main class="bg-light">
    <div class="container">
       <div class="row">
          @foreach ($videos as $video)
            <div class="col-4">
               <a href="{{ route('video.show', ['video' => $video->id])}}"></a>
                <img src="{{ $video->thumb }}" alt="">
                <h3>{{ $video->title }}</h3>

            </div>
              
          @endforeach

       </div>

     </div>

    </div>
</main>
    