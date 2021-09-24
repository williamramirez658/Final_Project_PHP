@extends('layout')
@section('title',$user -> id ? 'Actualizar Usuario' : 'Nuevo Usuario')
@section('header', $user -> id ? 'Actualizar Usuario' : 'Nuevo Usuario')
@section('content')

<form action="{{ route('user.save')}}" method="post">
 @csrf
 <input type="hidden" name="id" value="{{$user->id}}">
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" 
            value="{{ @old('name') ? @old('name'): $user -> name }}">
            
        </div>
    </div>
    <div class="row mb-3">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email"
          value="{{ @old('email') ? @old('email'): $user -> email }}">
            
        </div>
    </div>
    <div class="row mb-3">
        <label for="Password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="password"
          value="{{ @old('password') ? @old('password'): $user -> password }}">
            
        </div>
    </div>
    <div class="row mb-3">
        <label for="Area_id" class="col-sm-2 col-form-label">Area</label>
        <div class="col-sm-10">
          <!--<input type="text" class="form-control" name="area_id" 
           value="{{ @old('area_id') ? @old('area_id'): $user -> area_id }}">-->

           <select name="area_id" class="form-select">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}"
                    {{$user -> area_id == $area -> id ? "selected":""}}
                    >{{ $area->name }}
                </option>
            @endforeach
          </select>



           
        </div>
    </div>
   
    <div class="row mb-3">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/users" class="btn btn-secondary"> Cancelar </a>
            <button class="btn btn-primary" type="submit"> Guardar </button>
        </div>
    </div>
</form>
@endsection
   
   