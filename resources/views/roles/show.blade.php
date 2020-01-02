@extends('layouts.templates')

@section('content')

<div id="inMain">
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                @if(Auth::check())
                    @if(Auth::user()->role->name =='admin')
                        <td>
                            <form action="{{ route ('editRole', $role->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('deleteRole', $role->id) }}" method="POST">
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