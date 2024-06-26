@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card encabezado"><div class="card-header">{{ __('Editar empleado')}}</div></div>
              <div class="card elposta">
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('updateEmployee', ['id' => $employee->id])}}" method="post">
                            @csrf
                                <div class="mb-3">
                                  <label for="nombre" class="form-label">Primer nombre</label>
                                  <input type="text" class="form-control" name="name" require="required" value="{{$employee->name}}">
                                    @error('name')
                                      <div class="error"><p style="color:red">{{$message}}</p></div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                  <label for="apellido" class="form-label">Primer apellido</label>
                                  <input type="text" class="form-control" name="surname" require="required" value="{{$employee->surname}}">
                                    @error('surname')
                                      <div class="error"><p style="color:red">{{$message}}</p></div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" name="email" require="required" value="{{$employee->email}}">
                                    @error('email')
                                      <div class="error"><p style="color:red">{{$message}}</p></div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                  <label for="dni" class="form-label">DNI / NIE</label>
                                  <input type="text" class="form-control" name="password" require="required" value="{{$employee->dni}}">
                                    @error('password')
                                      <div class="error"><p style="color:red">{{$message}}</p></div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary mb-3 crearnew" value="Actualizar">
                                </div>
                        </form>
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection
