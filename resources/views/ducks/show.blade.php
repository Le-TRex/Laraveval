@extends('layouts.templates')

@section('content')

<div id="inMain">
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Genre</th>
            <th>Âge</th>
            <th>Race</th>
            <th>Couleur principale</th>
        </tr>
        @foreach ($ducks as $duck)
            <tr>
                <td>{{ $duck->id }}</td>
                <td>{{ $duck->name }}</td>
                <td>{{ $duck->gender }}</td>
                <td>{{ $duck->age }}</td>
                <td>{{ $duck->breed->name }}</td>
                <td>{{ $duck->breed->mainColor }}</td>

                @if(Auth::check())
                    @if(Auth::user()->role=='admin' || Auth::user()->role=='breeder')
                        <td>
                            <form action="{{ route ('editDuck', $duck->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </td>
                    @endif
                    @if(Auth::user()->role=='admin')
                        <td>
                        <form action="{{ route('deleteDuck', $duck->id) }}" method="POST">
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