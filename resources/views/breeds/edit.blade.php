@extends('layouts.templates')

@section('content')

<div id="inMain">
    <form method="POST" action="{{ route('updateBreed', $breed->id) }}">
        @csrf
        <h3>Modififer une race</h3>
        <div class="form-group">
            <label for="name">Nom de la race</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom de la race" value="{{ $breed->name }}" required>
        </div>

        <div class="form-group">
            <label for="mainColor">Couleur principale</label>
            <input type="text" class="form-control" id="mainColor" name="mainColor" placeholder="Couleur principale" value="{{ $breed->mainColor }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection