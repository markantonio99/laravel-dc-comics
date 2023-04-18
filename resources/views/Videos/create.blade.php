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
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo">
              </div>

              <div class="mb-3">
                <label for="type">Categoria</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la categoria video">
              </div>

              <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del video">
              </div>

              <div class="mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'immagine del video">
              </div>

              <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description"  placeholder="Inserisci una descrizione"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   </div>
@endsection