@extends('layouts.templates')

@section('content')

<div id="inMain">
    <form method="POST" action="{{ route('updateDuck', $duck->id) }}">
        @csrf
        <h3>Modififer un canard</h3>
        <div class="form-group">
            <label for="name">Nom du canard</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom du canard" value="{{ $duck->name }}" required>
        </div>

        <div class="form-group">
            <label for="gender">Genre</label>
            <select class="form-control" id="gender" name="gender">
                <option value='F'>Femelle</option>
                <option value='M'>Mâle</option>
            </select>
        </div>

        <div class="form-group">
            <label for="age">Âge</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Âge du canard" max="20" min="0" value="{{ $duck->age }}" required>
        </div>

        <div class="form-group">
            <label for="breed_id">Race</label>
            <select class="form-control" id="breed_id" name="breed_id">
                @foreach($breeds as $breed)
                    @if($breed->name == $duck->breed->name)
                        <option selected value="{{ $breed->id }}">{{ $breed->name }}</option>
                    @else
                        <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

@endsection