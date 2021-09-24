@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="{{route('user.form')}}" class="btn btn-primary">Nuevo Usuario</a>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id </th>
            <th>Name </th>
            <th>Email </th>
            <th>Area </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->area->name }}</td>
                <td>
                    <a href="{{ route('user.form',['id'=>$user->id]) }}" class="btn btn-warning">Editar</a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection