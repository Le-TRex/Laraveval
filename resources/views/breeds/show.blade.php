@extends('layouts.templates')

@section('content')

<div id="inMain">
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Couleur Principale</th>
        </tr>
        @foreach($breeds as $breed)
            <tr>
                <td>{{ $breed->id }}</td>
                <td>{{ $breed->name }}</td>
                <td>{{ $breed->mainColor }}</td>
                @if(Auth::check())
                    @if(Auth::user()->role=='admin')
                        <td>
                            <form action="{{ route ('editBreed', $breed->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </td>
                    @endif
                    @if(Auth::user()->role=='admin')
                        <td>
                        <form action="{{ route('deleteBreed', $breed->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Supprimer</button>
                        </form>
                        </td>
                    @endif
                @endif
            </tr>
        @endforeach
    </table>
</div>

@endsection