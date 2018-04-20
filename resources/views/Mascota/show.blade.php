@extends('layouts.logueado') 

@section('title','Mascota') 

@section('head')
@endsection 

@section('nombre', $cliente->PrimerNombre)
@section('email', $cliente->correo)
@section('imagen', $cliente->imagen)
@section('icon','pets')
@section('nav','Mascota') 

@section('content')
<div class="row" id="cont">
    <div class="col xl10 offset-xl2">
        <div class="row">
            <div class="col xl12">
                <div class="row">
                    <div class="col xl12 center-align">
                        <h2>{{$mascota->NombreMascota}}</h2>
                    </div>
                    <div class="col xl12 center-align">
                        <br>
                        <img src="../img/Mascotas/{{$mascota->imagen}}" alt="Imagen de perfil" class="circle">
                        <a id="btn-img" title="Cambiar imagen" href="#modal3" class="modal-trigger blue btn-floating btn-large">
                            <i class="material-icons">cached</i>
                        </a>
                    </div>
                    <div class="col xl10 offset-xl2">
                        <div class="row">
                            <div class="col xl6">
                                <h5>
                                    <strong>Fecha de nacimiento: </strong>{{$mascota->FechaNacimiento}}</h5>
                            </div>
                            <div class="col xl6">
                                <h5>
                                    <strong>Tipo: </strong>{{$mascota->tipo->NombreTipo}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col xl11 offset-xl1">
                        <div class="row">
                            <div class="col xl4 center-align">
                                    <a id="btn-img" title="Cambiar imagen" href="#modal4" class="modal-trigger waves-effect waves-light btn teal">
                                        <i class="material-icons left">add_circle_outline</i>Ingresar caracteristica</a>
                            </div>
                            <div class="col xl4 center-align">
                                <a class="waves-effect waves-light btn blue" href="{{action('MascotaController@edit',$mascota->id)}}">
                                    <i class="material-icons left">edit</i>Modificar</a>
                            </div>
                            <div class="col xl4 center-align">
                                <a class="waves-effect waves-light btn red" href="{{action('MascotaController@edit',$mascota->id)}}">
                                    <i class="material-icons left">do_not_disturb_on</i>Eliminar mascota</a>
                            </div>
                        </div>
                    </div>
                    <div class="col xl11 offset-xl1">
                        <div class="row">
                            <div class="col xl10 offset-xl1">
                                <ul class="collection with-header">
                                    <li class="collection-header">
                                        <h4>Caracteristica</h4>
                                    </li>
                                    <li class="collection-item">
                                        <div>Alvin
                                            <a href="#!" class="secondary-content red-text">
                                                <i class="material-icons">do_not_disturb_on</i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection