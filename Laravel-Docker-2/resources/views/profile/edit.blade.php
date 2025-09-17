<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Editar Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            @if(isset($user))
                {{-- Información del perfil --}}
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="max-w-xl mx-auto">
                        @if(View::exists('profile.partials.update-profile-information-form'))
                            @include('profile.partials.update-profile-information-form')
                        @else
                            <p class="text-red-600">Formulario de perfil no encontrado.</p>
                        @endif
                    </div>
                </div>

                {{-- Actualizar contraseña --}}
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="max-w-xl mx-auto">
                        @if(View::exists('profile.partials.update-password-form'))
                            @include('profile.partials.update-password-form')
                        @else
                            <p class="text-red-600">Formulario de contraseña no encontrado.</p>
                        @endif
                    </div>
                </div>

                {{-- Eliminar cuenta --}}
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="max-w-xl mx-auto">
                        @if(View::exists('profile.partials.delete-user-form'))
                            @include('profile.partials.delete-user-form')
                        @else
                            <p class="text-red-600">Formulario de eliminación no encontrado.</p>
                        @endif
                    </div>
                </div>
            @else
                <div class="text-center text-red-600 font-semibold">
                    Debes iniciar sesión para editar tu perfil.
                </div>
            @endif

        </div>
    </div>
</x-app-layout>