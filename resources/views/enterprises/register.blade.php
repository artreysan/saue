@extends('adminlte::page')

@section('title', 'UTIC')

@section('content_header')
<<<<<<< HEAD:resources/views/enterprise/create.blade.php

<div class="container-nav">
    <div class="row">
        <div class="col-md-1 p-4"></div>
        <div class="col-md-9 p-4">
            <h4><strong>Registrar empresa</strong></h4>
            <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
        </div>
        <div class="col-md-2 p-3">
            <img class="imagen-header" src="{{ URL::asset('img/download.png') }}" alt="">
=======
    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>REGISTRO UNA EMPRESA NUEVA EN LA UTIC:</strong></h4>
            <div class="row">
                <div class="col-md-8">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
                </div>
                <div class="col-md-2">
                    <a href="home"><button type="button" class="btn btn-secondary">Ver todas</button></a>
                </div>
            </div>
            <hr class="red">
>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440:resources/views/enterprises/register.blade.php
        </div>
    </div>
</div>
        <br>

        <div class="container">

                <!--Inicio del bloque de registro de la empresa-->
                <div class="container">
                    <h4>Información de la empresa a registrar:</h4>
                </div>

                <br>
                <form action="/enterprises/register" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"><strong>Nombre:</strong></div>
                            <div class="col-md-3">
                                <input class="border-success" id="nombre" name="nombre" type="text"
                                    placeholder=" Nombre "
                                    value="{{ old('nombre') }}" required />
                            </div>
                            <div class="col-md-3"><strong>Contrato:</strong></div>
                            <div class="col-md-3">
                                <input class="border-success" id="contrato" name="contrato" type="text"
                                    placeholder=" Contrato " value="{{ old('contrato') }}" required />
                            </div>
                        </div>
                        <br>
                    </div>
                     <!--Fin del bloeque de información de la empresa a registrar-->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="btn btn-primary btn-lg active" type="submit" value="Enviar solicitud">
                            </div>
                        </div>
                    </div>
                </form>
         </div>
        <br>
        <br>
    @stop
