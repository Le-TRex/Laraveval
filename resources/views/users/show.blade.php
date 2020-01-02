@extends('layouts.templates')

@section('content')

<div id="inMain">
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Rôle</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>

                @if(Auth::check())
                    @if(Auth::user()->role->name =='admin')
                        <td>
                            <form action="{{ route ('editUser', $user->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('deleteUser', $user->id) }}" method="POST">
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