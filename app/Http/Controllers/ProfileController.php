<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Mostrar el formulario de edición de perfil (solo para admin).
     */
    public function edit(Request $request): View
    {        
        if (!$request->user()->hasRole('admin')) {
            abort(403, 'No tienes permiso para editar el perfil.');
        }

        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Actualizar la información del perfil (solo para admin).
     */
    public function update(Request $request): RedirectResponse
    {
        if (!$request->user()->hasRole('admin')) {
            abort(403, 'No tienes permiso para actualizar el perfil.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $request->user()->id,
        ]);

        $user = $request->user();
        $user->update($request->only('name', 'email'));

        return redirect()->route('profile.edit')->with('success', 'Perfil actualizado correctamente.');
    }

    /**
     * Eliminar la cuenta del usuario (permitido para cualquier usuario autenticado).
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}