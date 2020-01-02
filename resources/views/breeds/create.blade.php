@extends('layouts.templates')

@section('content')

<div id="inMain">
    <form method="POST" action="storeBreed">
        @csrf
            <h3>Ajouter une race</h3>

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom de la race" required>
            </div>

            <div class="form-group">
                <label for="mainColor">Couleur principale</label>
                <input type="text" class="form-control" id="mainColor" name="mainColor" placeholder="Couleur principale" required>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

@endsection