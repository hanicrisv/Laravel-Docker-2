<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        .sidebar-link.disabled {
            opacity: 0.5;
            pointer-events: none;
            cursor: not-allowed;
        }
        .sidebar-link.active {
            background-color: rgba(59, 130, 246, 0.1);
            border-left: 4px solid #3B82F6;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <div class="flex items-center justify-center h-16 px-4 bg-blue-600">
                    <span class="text-white font-bold text-xl">InventoryPro</span>
                </div>
                <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
                    <nav class="flex-1 space-y-2">
                        <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 rounded-md sidebar-link active">
                            <i data-feather="home" class="mr-3"></i>
                            Dashboard
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 rounded-md sidebar-link">
                            <i data-feather="package" class="mr-3"></i>
                            Inventory
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 rounded-md sidebar-link">
                            <i data-feather="file-text" class="mr-3"></i>
                            Reports
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 rounded-md sidebar-link">
                            <i data-feather="truck" class="mr-3"></i>
                            Suppliers
                        </a>
                        <a href="//localhost/admin" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 rounded-md sidebar-link">
                            <i data-feather="repeat" class="mr-3"></i>
                            Transactions
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 rounded-md sidebar-link disabled">
                            <i data-feather="settings" class="mr-3"></i>
                            Settings
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-4 py-2 text-sm font-medium text-red-600 rounded-md hover:bg-red-100">
                        <i data-feather="log-out" class="mr-3"></i>
                        Cerrar sesión
                    </button>
                </form>
                    </nav>

                    <div class="max-w-2xl mx-auto p-4">
                        @if(auth()->check())
                            <p>Email: {{ auth()->user()->email }}</p>

                        @if(auth()->user()->hasRole('admin'))
                            <p class="text-green-600">Eres Administrador.</p>
                        @elseif(auth()->user()->hasRole('usuario'))
                            <p class="text-blue-600">Eres Usuario.</p>
                        @else
                            <p class="text-gray-600">Rol no asignado.</p>
                        @endif
                        @else
                            <p class="text-red-600">No has iniciado sesión.</p>
                        @endif
                
                    </div>

                </div>            
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Mobile header -->
            <div class="md:hidden flex items-center justify-between px-4 py-3 bg-white border-b border-gray-200">
                <button id="mobile-menu-button" class="text-gray-500 focus:outline-none">
                    <i data-feather="menu"></i>
                </button>
                <span class="text-lg font-bold text-blue-600">InventoryPro</span>
                <div class="w-6"></div> <!-- Spacer for alignment -->
            </div>

            <!-- Content header -->
            <div class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200">
                <h1 class="text-2xl font-bold text-gray-800">Dashboard Overview</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i data-feather="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <button class="p-2 text-gray-500 rounded-full hover:bg-gray-100">
                        <i data-feather="bell"></i>
                    </button>
                </div>
            </div>            
</body>
</html>