@extends('layouts.app')
@section('content')

   <div class="container">
       <h2>Aggiungi un nuovo video</h2>
   </div>

   <div class="container">
        <form action="{{ route('video.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{ old('title') }}">
              </div>

              <div class="mb-3">
                <label for="type">Categoria</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la categoria video" value="{{ old('type') }}" >
              </div>

              <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del video" value="{{ old('price') }}" >
              </div>

              <div class="mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'immagine del video" value="{{ old('thumb') }}" >
              </div>

              <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description"  placeholder="Inserisci una descrizione">{{old('description')}}</textarea>
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