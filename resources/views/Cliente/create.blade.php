@extends('layouts.login') 

@section('title','Registrar') 

@section('head')
    <link rel="stylesheet" href="../css/index.css"> 
@endsection 

@section('content')
<div class="row">
    <div class="col xl4 offset-xl4" id="reg">
        <div class="row">
            <form id="frmCliente" action="{{route('Cliente.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                <div class="col xl12" id="login">
                    <div class="col xl12 teal lighten-2 white-text" id="enc">
                        <h4 class="center-align">
                            <img src="../img/paw-print-.png" alt="StarPets">
                            <br>Registro</h4>
                    </div>
                    <div class="input-field col xl6 s12">
                        <i class="material-icons prefix">contacts</i>
                        <input id="PrimerNombre" name="PrimerNombre" type="text" class="validate" required>
                        <label for="PrimerNombre">Primer Nombre</label>
                    </div>
                    <div class="input-field col xl6 s12">
                        <i class="material-icons prefix">contacts</i>
                        <input id="SegundoNombre" name="SegundoNombre" type="text" class="validate" required>
                        <label for="SegundoNombre">Segundo Nombre</label>
                    </div>
                    <div class="input-field col xl6 s12">
                        <i class="material-icons prefix">contacts</i>
                        <input id="PrimerApellido" name="PrimerApellido" type="text" class="validate" required>
                        <label for="PrimerApellido">Primer Apellido</label>
                    </div>
                    <div class="input-field col xl6 s12">
                        <i class="material-icons prefix">contacts</i>
                        <input id="SegundoApellido" name="SegundoApellido" type="text" class="validate"required>
                        <label for="SegundoApellido">Segundo Apellido</label>
                    </div>
                    <div class="input-field col xl6 s12">
                        <i class="material-icons prefix">credit_card</i>
                        <input id="DUI" name="DUI" type="text" class="validate" required>
                        <label for="DUI">DUI</label>
                    </div>
                    <div class="input-field col xl6 s12">
                        <i class="material-icons prefix">call</i>
                        <input id="Telefono" name="Telefono" type="text" class="validate" required>
                        <label for="Telefono">Telefono</label>
                    </div>
                    <div class="input-field col xl12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input id="Correo" name="Correo" type="email" class="validate" required>
                        <label for="Correo">Correo</label>
                    </div>
                    <div class="input-field col xl12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="Clave" name="Clave" type="password" class="validate" required>
                        <label for="Clave">Password</label>
                    </div>
                    <div class="input-field col xl12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="Confirmar" name="Confirmar" type="password" class="validate" required>
                        <label for="Confirmar">Confirmar password</label>
                    </div>
                    <div class="input-field col xl12">
                        <i class="material-icons prefix">camera_alt</i>
                        <input id="Imagen" name="Imagen" type="file" accept="image/png, .jpeg, .jpg" class="validate" required>
                    </div>
                    <div class="col xl5 offset-xl7 s5 offset-s3">
                        <button class="btn waves-effect waves-light" id="btnIngresar" type="button" name="action">Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','#btnIngresar', function(){
            var original = $('#Clave').val();
            var confirmacion = $('#Confirmar').val();
            if(original != "" && original == confirmacion){
                $('#frmCliente').submit();
            }else{
                M.toast({html: "La clave y la confirmacion no concuerdan"});
                $('#Confirmar').focus();
            }
        })
    });
</script>
@endsection