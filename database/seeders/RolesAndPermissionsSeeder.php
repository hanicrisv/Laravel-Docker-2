<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $userRole  = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        // Asignar todos los permisos al rol admin
        $adminRole->syncPermissions(Permission::all());

        // Asignar solo "ver usuarios" al rol user
        $userRole->syncPermissions(['ver usuarios']);

        // --- Crear usuario administrador ---
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@demo.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('ABC123'), // 🔑 cámbiala en producción
            ]
        );
        $adminUser->assignRole($adminRole);

        // --- Crear usuario normal ---
        $normalUser = User::firstOrCreate(
            ['email' => 'user@demo.com'],
            [
                'name' => 'Usuario Normal',
                'password' => Hash::make('password123'), // 🔑 cámbiala en producción
            ]
        );
        $normalUser->assignRole($userRole);
    }
}