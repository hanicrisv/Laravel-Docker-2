@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    @if(auth()->check())
        <h2 class="text-xl font-bold">¡Bienvenido, {{ auth()->user()->name }}!</h2>
        <p>Email: {{ auth()->user()->email }}</p>

        @if(auth()->user()->hasRole('admin'))
            <p class="text-green-600">Eres administrador.</p>
        @endif

    @else
        <p>No hay usuario autenticado.</p>
    @endif
</div>
@endsection
