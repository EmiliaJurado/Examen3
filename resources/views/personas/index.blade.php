@extends('layout.plantilla')
@section('title','Listass' )
@section('contenido')

<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container"> <div class="container"> <div class="container"> <div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="row">
    <div class="col 12">
    <div class="col 12">
    <div class="col 12">
    <div class="col 12">
        <div class="col 12">
        <div class="col 12">
        <div class="col 12">
        <div class="col 12">
        <button type="button" class="btn btn-danger">
            <a style="color: white;" href="{{route('personas.agregar')}}">Agregar Personas</a>
        </button>
    </div>
    </div></div></div></div></div>
</div></div></div></div></div></div>
</div></div></div></div></div>
</div></div></div>
</div></div>
</div></div></div>
</div></div>
</div>
</div>
<div class="row mt-3">
    <div class="col">
        <table class="table">
            <thead class="thead-danger">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persona as $personas)
                <tr>
                    <th scope="row">{{$personas->id}}</th>
                    <th>{{$personas->apellido_paterno}}</th>
                    <th>{{$personas->apellido_materno}}</th>
                    <th>{{$personas->nombre}}</th>
                    <th>{{$personas->fecha_nacimiento}}</th>
                    <th>{{$personas->sexo}}</th>
                    <th><?php
                        $fecha_nacimiento = new DateTime($personas['fecha_nacimiento']);
                        $hoy = new DateTime();
                        $edad = $hoy->diff($fecha_nacimiento);
                        echo $edad->y;
                        ?>
                    </th>
                    <th>
                        <button type="button" class="btn btn-primary">
                            <a style="color: danger;" href="{{route('personas.actualizar', $personas)}}"><i class='fas fa-edit fa-spin fa-3x'></i></a>
                        </button>
                    <th>
                        <form action="{{route('personas.eliminar',$personas)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-info"><i class='fas fa-dizzy fa-spin fa-3x'></i></button>
                        </form>
                    <th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('pagina')
{{$persona->links()}}
@endsection