<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario | Bienvenido</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <style>
        .vanta-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center text-white">
    <div id="vanta-bg" class="vanta-bg"></div>
    
    <div class="container mx-auto px-4" data-aos="fade-up">
        <div class="glass-card rounded-2xl p-8 max-w-3xl mx-auto shadow-xl">
            <div class="flex flex-col items-center text-center">
                <i data-feather="box" class="w-16 h-16 mb-6"></i>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Control de Inventario</h1>
                <p class="text-xl mb-8 opacity-90">Bienvenido al sistema de gestión de inventario más completo y fácil de usar</p>
                
                <div class="flex flex-col sm:flex-row gap-4 w-full max-w-md">
                    <a href="http://localhost:8080/login" class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg font-medium transition-all flex items-center justify-center gap-2">
                        <i data-feather="log-in" class="w-5 h-5"></i> Iniciar Sesión
                    </a>
                    <a href="http://localhost:8080/registe" class="bg-transparent hover:bg-white hover:bg-opacity-10 px-6 py-3 rounded-lg font-medium transition-all border border-white border-opacity-30 flex items-center justify-center gap-2">
                        <i data-feather="user-plus" class="w-5 h-5"></i> Registrarse
                    </a>
                </div>
            </div>
                        
        </div>
    </div>

    <script>
        VANTA.NET({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x3a86ff,
            backgroundColor: 0x111827,
            points: 10.00,
            maxDistance: 22.00,
            spacing: 18.00
        });
        
        AOS.init({
            duration: 800,
            easing: 'ease-in-out'
        });
        
        feather.replace();
        
        // Smooth hover effects for cards
        document.querySelectorAll('.bg-white\\/10').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('bg-opacity-20');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('bg-opacity-20');
            });
        });
    </script>
</body>
</html>
