@extends('layouts.app')
@section('content')

  <div class="container">
     <div class="row">
        <div class="col-auto ms-auto ">
          <a class="btn btn-primary" href="{{ route('video.create')}}">
            Aggiungi Video
          </a>
        </div>
     </div>

  </div>
  <div class="container">
        <table class="table table-striped">
          <tbody>
            @foreach ($videos as $video)
            <tr>
              <th scope="row">

              </th>
              <td>
                {{ $video->id }}
              </td>
              <td>
                <img src="{{ $video->thumb }}" alt="" height="70">
              </td>
              <td>
                <h3>{{ $video->title }}</h3>
              </td>
              <td>
               
              </td>
            </tr>
            <div class="col-4">
               <a href="{{ route('video.show', $video->id)}}">   
              </a>
            </div>
              
          @endforeach
           
          </tbody>
        </table>
   </div>


@endsection


    