@extends('layouts.logueado') 

@section('title','Perfil') 

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection 

@section('nombre', $cliente->PrimerNombre." ".$cliente->PrimerApellido)
@section('email', $cliente->correo)
@section('imagen', $cliente->imagen)
@section('icon','filter_list')
@section('nav','Perfil') 

@section('content')
    <div class="row" id="cont">
        <div class="col xl10 offset-xl2">
            <div class="row">
                <!-- Inicio de modificación -->
                <div class="col s12 center-align">
                    <!-- Foto de perfil -->
                    <br>
                    <img src="../img/Clientes/{{$cliente->imagen}}" alt="Imagen de perfil" class="circle">
                    <a id="btn-img" title="Cambiar imagen" href="#modal2" class="modal-trigger btn-floating btn-large">
                        <i class="material-icons">cached</i>
                    </a>
                </div>
                <div class="col s12 center-align">
                    <!-- Nombre de perfil -->
                    <h2 class="principal">{{$cliente->PrimerNombre}} {{$cliente->SegundoNombre}} {{$cliente->PrimerApellido}} {{$cliente->SegundoApellido}}</h2>
                    <hr>
                    <br>
                    <a class="modal-trigger black-text option" href="#modal1">
                        <i class="material-icons">enhanced_encryption</i> Cambiar clave</a>
                </div>
                <div class="col xl10 offset-xl2">
                    <!-- Datos de perfil -->
                    <div class="col s12">
                        <h5>
                            <strong>Telefono: </strong>{{$cliente->telefono}}</h5>
                    </div>
                    <div class="col s12">
                        <h5>
                            <strong>Correo: </strong>{{$cliente->correo}}</h5>
                    </div>
                    <br>
                    <div class="col s12">
                        <h5>
                            <strong>DUI: </strong>{{$cliente->DUI}}</h5>
                    </div>
                </div>
                <div class="col xl12 center-align">
                    <br>
                    <a class="waves-effect waves-light btn" href="{{action('ClienteController@edit',$cliente->id)}}">
                        <i class="material-icons left">edit</i>Modificar</a>
                </div>
            </div>
        </div>
    </div>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="teal-text">Cambiar clave</h4>
            <div class="container">
                <form id="confirmacion">
                    <div class="input-field col xl12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="Original" name="Original" type="password" class="validate" required>
                        <label for="Original">Verifique su identidad, ingrese su password</label>
                    </div>
                    <div class="col xl12 center-align">
                        <button class="btn waves-effect waves-light" id="btnVerificar" type="button" name="action">Verificar
                            <i class="material-icons right">check</i>
                        </button>
                    </div>
                </form>
                <form id="cambio" method="post" action="Cliente/clave">
                    {{ csrf_field() }}
                    <div class="input-field col xl12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="Clave" name="Clave" type="password" class="validate" required>
                        <label for="Clave">Password</label>
                    </div>
                    <div class="input-field col xl12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="Confirm" name="Confirm" type="password" class="validate" required>
                        <label for="Confirm">Confirmacion</label>
                        <span class="error Clave"></span>
                    </div>
                    <div class="col xl12 center-align">
                        <button class="btn waves-effect waves-light" id="cambiarImagen" type="button" name="action">Cambiar
                            <i class="material-icons right">autorenew</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" id="cancelar" class="modal-action modal-close waves-effect waves-green btn-flat option">Cancelar</a>
        </div>
    </div>
    <div id="modal2" class="modal">
        <div class="modal-content">
            <h4 class="teal-text">Cambiar imagen</h4>
            <div class="container">
                <form method="post" id="frmImagen" action="Cliente/imagen" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col xl4">
                            <img class="circle cambio" src="../img/Clientes/{{$cliente->imagen}}" alt="">
                            <br>
                            <center><span>Imagen actual</span></center>
                        </div>
                        <div class="col xl4">
                            <br><br><br>
                            <input class="hidden" id="files" name="files" type="file" class="validate" accept="image/png, .jpeg, .jpg" required/>
                        </div>
                        <div class="col xl4">
                            <output id="list"></output>
                            <br>
                            <center><span id="nv"></span></center>
                        </div>
                        <div class="col xl12 center-align">
                            <button type="submit" id="btnCambiar" class="btn waves-effect waves-light white-text" name="action">
                                Cambiar<i class="material-icons right">autorenew</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat option">Cancelar</a>
        </div>
    </div>

    <script type="text/javascript" src="../../js/imagen.js"></script>
    <script type="text/javascript" src="../../js/validarPerfil.js"></script>
@endsection