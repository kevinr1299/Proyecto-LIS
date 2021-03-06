@extends('layouts.user') 

@section('title','Lista de usurios') 

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <link rel="stylesheet" href="../../css/jPages.css">
    <script type="text/javascript" src="../../js/jpage.js"></script>
    <div class="container">
        <div class="col xl12">
            <div class="row">
                <div class="col xl12">
                    <h4 class="center-align teal-text">Lista de tipos de mascotas</h4>
                </div>
                <div class="col xl12">
                    <div class="row">
                        <a href="{{route('TipoMascota.create')}}" class="waves-effect waves-light btn blue"><i class="material-icons right">add</i>Nuevo tipo de mascota</a>
                    </div>
                </div>
                <div class="col xl12">
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="usuarios">
                                @foreach($tipos as $tipo)
                                    @if($tipo->Estado == 1)
                                        <tr>
                                            <td>{{$tipo->NombreTipo}}</td>
                                            <td>
                                                <button class="btn waves-effect waves-light red" id="eliminar" valid="{{$tipo->id}}" type="button" name="action">Eliminar
                                                    <i class="material-icons right">close</i>
                                                </button>
                                                <form id="{{$tipo->id}}" method="POST" action="{{ route('TipoMascota.update',$tipo->id) }}" role="form">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="holder controladorUsuarios"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../../js/user.js"></script>
@endsection