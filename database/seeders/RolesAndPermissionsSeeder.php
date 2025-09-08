<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpia cache de permisos (importante cuando se corre varias veces)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // --- Crear permisos ---
        $permissions = [
            'crear usuarios',
            'editar usuarios',
            'eliminar usuarios',
            'ver usuarios',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // --- Crear roles ---
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $user  = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        // Asignar todos los permisos al rol admin
        $admin->syncPermissions(Permission::all());

        // Asignar solo "ver usuarios" al rol user
        $user->syncPermissions(['ver usuarios']);
    }
}