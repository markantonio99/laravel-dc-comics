@extends('layouts.app')

@section('content')

<main class="bg-light">
    <div class="container">
       <div class="row">
          @foreach ($video as $videos)
            <div class="col-4">
                <img src="{{ $Video->thumb }}" alt="">
                <h3>{{ $Video->title }}</h3>
            </div>
              
          @endforeach

       </div>

     </div>

    </div>
</main>
    

@endsection