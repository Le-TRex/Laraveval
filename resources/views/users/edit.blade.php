@extends('layouts.templates')

@section('content')

<div id="inMain">
    <form method="POST" action="{{ route('updateUser', $user->id) }}">
        @csrf
        <h3>Modififer un utilisateur</h3>
        <div class="form-group">
            <label for="name">Nom de l'utilisateur</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'utilisateur" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Adresse mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Adresse mail" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ $user->password }}" required>
        </div>

        <div class="form-group">
            <label for="role_id">Rôle</label>
            <select class="form-control" id="role_id" name="role_id">
                @foreach($roles as $role)
                    @if($role->name == $user->role->name)
                        <option selected value="{{ $role->id }}">{{ $role->name }}</option>
                    @else
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

@endsection