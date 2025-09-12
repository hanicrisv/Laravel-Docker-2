@role('admin')
    <h2>Hola, administrador 👑</h2>
@endrole

@can('crear usuarios')
    <p>Tienes permiso para crear usuarios.</p>
@endcan

@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    @if($user)
        <h2 class="text-xl font-bold">¡Bienvenido, {{ $user->name }}!</h2>
        <p>Email: {{ $user->email }}</p>

        @if($user->hasRole('admin'))
            <p class="text-green-600">Eres administrador.</p>
        @endif

    @else
        <p>No hay usuario autenticado.</p>
    @endif
</div>
@endsection
