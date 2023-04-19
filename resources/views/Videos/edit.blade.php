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
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo" value="{{ $video->title }}">
              </div>

              <div class="mb-3">
                <label for="type">Categoria</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la categoria video" value="{{ $video->type }}" >
              </div>

              <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del video" value="{{ $video->price }}" >
              </div>

              <div class="mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'immagine del video" value="{{ $video->thumb }}" >
              </div>

              <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description"  placeholder="Inserisci una descrizione">
                    {{$video->description}}
                </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   </div>
@endsection