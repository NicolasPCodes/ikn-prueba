@extends('layouts.app')

@section('contenido')
    <!-- <h2>Esta es mi vista</h2>
    <p>Contenido dinámico aquí</p> -->
    <div class="container text-center mt-4">
    <div class="row">
        <div class="col-12">
            <!-- Column -->
            <h1>Bienvenido a la página de IKN!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Column -->
            <h1>TEAM COBRA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('assets/images/logo_cobra.webp') }}" alt="Logo" width="320" height="320">
        </div>
    </div>
@endsection

