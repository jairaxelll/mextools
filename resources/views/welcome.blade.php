<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MexTools, las mejores herramientas industriales para profesionales en México.">
    <title>MexTools | Herramientas Industriales Profesionales</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|oswald:500,600,700" rel="stylesheet" />
    <style>
        .font-heading { font-family: 'Oswald', sans-serif; }
        .glassmorphism {
            background: rgba(2, 6, 23, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .hero-pattern {
            background-color: #020617;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231e293b' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
    <!-- Vite -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="antialiased font-sans text-gray-300 bg-slate-900 border-t-4 border-orange-600">

    <!-- Navigation -->
    <nav id="navbar" class="fixed w-full z-50 glassmorphism border-b border-slate-800 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <span class="font-heading font-bold text-2xl text-white tracking-widest uppercase">MEX<span class="text-orange-500">TOOLS</span></span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#quienes-somos" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">Quiénes Somos</a>
                    <a href="{{ route('productos.index') }}" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">Catálogo Completo</a>
                    <a href="#soporte" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">Políticas y Soporte</a>
                </div>
                <div class="flex items-center space-x-4 border-l border-transparent md:border-slate-700 pl-6 ml-2">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link text-gray-300 hover:text-orange-500 font-medium transition-colors">Mi Cuenta</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link text-gray-300 hover:text-orange-500 font-medium transition-colors mr-3">Ingresar</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2 rounded-md font-semibold transition-transform transform hover:scale-105 shadow-lg shadow-orange-900/50">Registrarse</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 hero-pattern overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900 opacity-95"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-7xl font-heading font-bold text-white mb-6 tracking-tight uppercase leading-tight">
                Herramientas <span class="text-orange-600">Robustas</span><br/>Para Profesionales
            </h1>
            <p class="mt-4 text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto mb-10 font-normal">
                Equipamos el éxito de la industria mexicana con la mejor calidad, durabilidad y soporte técnico especializado.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('productos.index') }}" class="px-8 py-4 bg-orange-600 text-white font-bold rounded shadow-lg shadow-orange-500/30 hover:shadow-orange-600/50 hover:-translate-y-1 transition-all duration-300 text-lg">
                    Explorar Catálogo
                </a>
                <a href="{{ route('cotizar.create') }}" class="px-8 py-4 bg-transparent border-2 border-slate-600 text-white font-bold rounded hover:bg-slate-800 hover:border-slate-500 transition-all duration-300 text-lg">
                    Cotizar Ahora
                </a>
            </div>
        </div>
    </section>

    <!-- Quiénes Somos -->
    <section id="quienes-somos" class="py-24 bg-slate-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute -inset-4 bg-slate-800 transform -skew-y-3 z-0 rounded-3xl border border-slate-700"></div>
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=1000&auto=format&fit=crop" alt="Trabajador Industrial" class="relative z-10 rounded-2xl shadow-2xl object-cover h-[500px] w-full brightness-90 grayscale-[20%]" />
                </div>
                <div>
                    <h2 class="text-orange-500 font-bold tracking-wider uppercase text-sm mb-2">Quiénes Somos</h2>
                    <h3 class="font-heading text-4xl md:text-5xl font-bold text-white mb-6">Expertos en Soluciones Industriales</h3>
                    <p class="text-lg text-gray-400 mb-6 leading-relaxed">
                        Con más de 20 años de experiencia, MexTools se ha posicionado como el proveedor líder de herramienta pesada, maquinaria y equipo de seguridad en todo México. Entendemos que en la industria no hay margen para el error.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 text-orange-500 flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span class="text-gray-300 font-medium text-lg">Calidad Certificada Internacionalmente</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 text-orange-500 flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span class="text-gray-300 font-medium text-lg">Inventario Permanente y Entrega Rápida</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 text-orange-500 flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span class="text-gray-300 font-medium text-lg">Respaldo Técnico Continuo en Todo el País</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestros Productos -->
    <section id="productos" class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-orange-500 font-bold tracking-wider uppercase text-sm mb-2">Nuestro Catálogo</h2>
            <h3 class="font-heading text-4xl md:text-5xl font-bold text-white mb-16">Herramientas Que Cumplen</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Producto 1 -->
                <div class="bg-slate-900 rounded-2xl p-8 border border-slate-800 hover:border-slate-600 transition-colors duration-300 text-left group shadow-xl">
                    <div class="h-48 rounded-xl overflow-hidden mb-6 bg-slate-800 flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1572981779307-38b8cabb2407?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100" alt="Taladros Industriales" />
                    </div>
                    <h4 class="text-2xl font-bold text-white mb-2">Poder Neumático</h4>
                    <p class="text-gray-400 mb-4 whitespace-normal">Demostradores de herramientas como Taladros, llaves de impacto y rotomartillos diseñados para el trabajo más pesado.</p>
                    <a href="#" class="text-orange-500 font-semibold inline-flex items-center group-hover:text-orange-400 mt-auto">
                        Ver Detalles <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
                <!-- Producto 2 -->
                <div class="bg-slate-900 rounded-2xl p-8 border border-slate-800 hover:border-slate-600 transition-colors duration-300 text-left group shadow-xl">
                    <div class="h-48 rounded-xl overflow-hidden mb-6 bg-slate-800 flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1542013910-ea0edfedc9e2?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100" alt="Sierras y Corte" />
                    </div>
                    <h4 class="text-2xl font-bold text-white mb-2">Corte Preciso</h4>
                    <p class="text-gray-400 mb-4 whitespace-normal">Demostradores de Sierras circulares interactivas, esmeriladoras angulares y equipo para todo taller.</p>
                    <a href="#" class="text-orange-500 font-semibold inline-flex items-center group-hover:text-orange-400 mt-auto">
                        Ver Detalles <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
                <!-- Producto 3 -->
                <div class="bg-slate-900 rounded-2xl p-8 border border-slate-800 hover:border-slate-600 transition-colors duration-300 text-left group shadow-xl">
                    <div class="h-48 rounded-xl overflow-hidden mb-6 bg-slate-800 flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1616423640778-28d1b53229bd?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100" alt="Medición" />
                    </div>
                    <h4 class="text-2xl font-bold text-white mb-2">Calidad Inigualable</h4>
                    <p class="text-gray-400 mb-4 whitespace-normal">Instrumentos de escaneo avanzado, medición láser tridimensional y nivelación exacta.</p>
                    <a href="#" class="text-orange-500 font-semibold inline-flex items-center group-hover:text-orange-400 mt-auto">
                        Ver Detalles <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Políticas y Soporte -->
    <section id="soporte" class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-orange-500 font-bold tracking-wider uppercase text-sm mb-2">Nuestro Compromiso</h2>
                <h3 class="font-heading text-4xl md:text-5xl font-bold mb-6 text-white">Políticas y Soporte</h3>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">No solo vendemos herramientas, respaldamos el éxito de tus operaciones día con día.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center p-8 border border-slate-800 rounded-2xl bg-slate-800/50 backdrop-blur hover:bg-slate-800 transition-colors duration-300 shadow-xl">
                    <div class="w-16 h-16 bg-slate-900 border border-slate-700 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4 text-white">Envíos Rápidos</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Disponemos de almacenes estratégicos para asegurar la llegada rápida de lotes y refacciones.</p>
                </div>
                <div class="text-center p-8 border border-orange-500/30 rounded-2xl bg-slate-800/80 backdrop-blur shadow-2xl shadow-orange-900/10 hover:border-orange-500/50 transition-colors duration-300 transform scale-105">
                    <div class="w-16 h-16 bg-orange-600 rounded-xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-orange-900/50">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4 text-white">Garantía Total</h4>
                    <p class="text-gray-300 text-sm leading-relaxed">Equipos cubiertos ante cualquier defecto por uso rudo. Repuestos certificados en disposición.</p>
                </div>
                <div class="text-center p-8 border border-slate-800 rounded-2xl bg-slate-800/50 backdrop-blur hover:bg-slate-800 transition-colors duration-300 shadow-xl">
                    <div class="w-16 h-16 bg-slate-900 border border-slate-700 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4 text-white">Acompañamiento 24/7</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Ingenieros listos para brindarte asistencia de funcionamiento, calibración en piso y rutinas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Llámanos CTA -->
    <section id="contacto" class="py-24 bg-slate-950 relative overflow-hidden text-center border-y border-slate-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="font-heading text-5xl md:text-6xl font-bold mb-6 text-white text-shadow-md">¿Aumentamos la <span class="text-orange-500">Producción?</span></h2>
            <p class="text-xl md:text-2xl mb-12 text-gray-400 font-medium">Contamos con precios de mayoreo corporativo y créditos.</p>
            <div class="inline-flex flex-col items-center">
                <a href="tel:01800MEXTOOLS" class="bg-orange-600 text-white px-10 py-6 rounded-xl font-bold text-3xl hover:bg-orange-500 transition-all duration-300 shadow-xl shadow-orange-900/40 flex items-center gap-4 group">
                    <svg class="w-10 h-10 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    01-800-MEXTOOLS
                </a>
                <p class="mt-6 text-sm text-gray-500 uppercase tracking-widest font-semibold block">Línea directa. Atención Inmediata.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-gray-500 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center text-sm">
            <div class="mb-4 md:mb-0 text-center md:text-left">
                <span class="font-heading font-bold text-2xl text-white tracking-widest uppercase block mb-2">MEX<span class="text-orange-600">TOOLS</span></span>
                <p class="text-xs opacity-80">&copy; {{ date('Y') }} MexTools S.A. de C.V. Uso exclusivo comercial.</p>
            </div>
            <div class="flex space-x-8">
                <a href="#" class="hover:text-white transition-colors">Privacidad</a>
                <a href="#" class="hover:text-white transition-colors">Términos</a>
                <a href="#" class="hover:text-white transition-colors">Agentes</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Script for Dark Navbar -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                // Add stronger opaqueness
                navbar.classList.add('bg-slate-950/95', 'shadow-2xl', 'border-slate-800');
            } else {
                navbar.classList.remove('bg-slate-950/95', 'shadow-2xl', 'border-slate-800');
            }
        });
    </script>
</body>
</html>
