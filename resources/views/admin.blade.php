<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Control de Inventario</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .sidebar {
            transition: all 0.3s;
        }
        .active-nav {
            background-color: #3B82F6;
            color: white;
        }
        .active-nav:hover {
            background-color: #2563EB !important;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="sidebar bg-white w-64 border-r border-gray-200 flex flex-col">
            <div class="p-4 border-b border-gray-200">
                <h1 class="text-xl font-bold text-blue-600 flex items-center">
                    <i data-feather="box" class="mr-2"></i> InventarioPro
                </h1>
            </div>
            <nav class="flex-1 overflow-y-auto">
                <div class="p-4">
                    <p class="text-xs uppercase text-gray-500 font-semibold mb-2">Principal</p>
                    <a href="http://localhost/dashboard" class="active-nav flex items-center p-2 rounded-lg mb-1">
                        <i data-feather="home" class="mr-3"></i> Dashboard
                    </a>
                    <a href="#" class="flex items-center p-2 rounded-lg mb-1 hover:bg-gray-100">
                        <i data-feather="package" class="mr-3"></i> Inventario
                    </a>
                    <a href="#" class="flex items-center p-2 rounded-lg mb-1 hover:bg-gray-100">
                        <i data-feather="users" class="mr-3"></i> Usuarios
                    </a>
                    <a href="#" class="flex items-center p-2 rounded-lg mb-1 hover:bg-gray-100">
                        <i data-feather="settings" class="mr-3"></i> Configuración
                    </a>
                </div>
                <div class="p-4">
                    <p class="text-xs uppercase text-gray-500 font-semibold mb-2">Administración</p>
                    <a href="#" class="flex items-center p-2 rounded-lg mb-1 hover:bg-gray-100">
                        <i data-feather="shield" class="mr-3"></i> Roles y Permisos
                    </a>
                    <a href="#" class="flex items-center p-2 rounded-lg mb-1 hover:bg-gray-100">
                        <i data-feather="activity" class="mr-3"></i> Reportes
                    </a>
                </div>
            </nav>
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center">
                    <img src="http://static.photos/people/200x200/1" alt="User" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-medium">Admin User</p>
                        <p class="text-xs text-gray-500">Administrador</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
                <h2 class="text-lg font-semibold">Panel de Administración</h2>
                <div class="flex items-center space-x-4">
                    <button class="p-2 rounded-full hover:bg-gray-100">
                        <i data-feather="bell"></i>
                    </button>
                    <button class="p-2 rounded-full hover:bg-gray-100">
                        <i data-feather="help-circle"></i>
                    </button>
                </div>
            </header>

            <!-- Content -->
            <main class="p-6">
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-4">Configuración del Sistema</h3>
                    
                    <!-- Roles and Permissions Section -->
                    <div class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up">
                        <div class="flex justify-between items-center mb-4">
                            <h4 class="text-lg font-semibold">Roles y Permisos</h4>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                                <i data-feather="plus" class="mr-2"></i> Nuevo Rol
                            </button>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rol</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Permisos</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <i data-feather="shield" class="text-blue-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Administrador</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Acceso completo al sistema
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-wrap gap-2">
                                                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Todos</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">Editar</button>
                                            <button class="text-red-600 hover:text-red-900">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                                                    <i data-feather="user" class="text-green-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Usuario</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Acceso limitado al inventario
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-wrap gap-2">
                                                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Ver</span>
                                                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Editar</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">Editar</button>
                                            <button class="text-red-600 hover:text-red-900">Eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Permission Management -->
                    <div class="bg-white rounded-lg shadow p-6" data-aos="fade-up">
                        <h4 class="text-lg font-semibold mb-4">Gestión de Permisos</h4>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Module Permissions -->
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h5 class="font-medium mb-3 flex items-center">
                                    <i data-feather="package" class="mr-2"></i> Inventario
                                </h5>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" checked>
                                        <span class="ml-2 text-sm">Ver inventario</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" checked>
                                        <span class="ml-2 text-sm">Agregar items</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" checked>
                                        <span class="ml-2 text-sm">Editar items</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Eliminar items</span>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- User Management Permissions -->
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h5 class="font-medium mb-3 flex items-center">
                                    <i data-feather="users" class="mr-2"></i> Usuarios
                                </h5>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Ver usuarios</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Crear usuarios</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Editar usuarios</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Eliminar usuarios</span>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- System Permissions -->
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h5 class="font-medium mb-3 flex items-center">
                                    <i data-feather="settings" class="mr-2"></i> Sistema
                                </h5>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Configuración general</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Roles y permisos</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Backups</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                        <span class="ml-2 text-sm">Logs del sistema</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 flex justify-end">
                            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg mr-3 hover:bg-gray-300">
                                Cancelar
                            </button>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        AOS.init();
        feather.replace();
        
        // Sample function to handle role creation modal
        function openRoleModal() {
            // This would open a modal in a real implementation
            alert('Modal para crear nuevo rol se abriría aquí');
        }
    </script>
</body>
</html>
