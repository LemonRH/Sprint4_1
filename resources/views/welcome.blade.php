@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
    <h1>Bienvenido a mi aplicación</h1>
    <p>Esta es la página de inicio de tu aplicación de gestión de equipos y partidos.</p>
    <p>¡Comienza a administrar tus equipos y partidos ahora!</p>
    <a href="{{ route('equipos.index') }}" class="btn">Ver Equipos</a>
    <a href="{{ route('partidos.index') }}" class="btn">Ver Partidos</a>
@endsection
