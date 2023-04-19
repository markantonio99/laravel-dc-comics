@extends('layouts.app')
@section('content')



   <div class="container">
       <h2>Modifica: {{$video->title}}</h2>
   </div>

   <div class="container">
        <form action="{{ route('video.update', $video) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="Title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"  value="{{ old('title'),$video->title }}">
              </div>

              <div class="mb-3">
                <label for="type">Categoria</label>
                <input type="text" class="form-control" id="type" name="type"  value="{{ old('type'),$video->type }}" >
              </div>

              <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price'),$video->price }}" >
              </div>

              <div class="mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb'),$video->thumb }}" >
              </div>

              <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description">{{ old('description'),$video->description}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   </div>
@endsection