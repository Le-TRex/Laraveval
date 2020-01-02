@extends('layouts.templates')

@section('content')

<div id="inMain">
    <form method="POST" action="storeRole">
        @csrf
            <h3>Ajouter un rôle</h3>

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom du rôle" required>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

@endsection