@extends('layouts.templates')

@section('content')

<div id="inMain">
    <form method="POST" action="{{ route('updateRole', $role->id) }}">
        @csrf
        <h3>Modififer un rôle</h3>
        <div class="form-group">
            <label for="name">Nom du rôle</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom du rôle" value="{{ $role->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection