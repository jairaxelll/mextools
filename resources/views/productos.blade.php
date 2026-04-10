<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo | MexTools</title>
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|oswald:500,600,700" rel="stylesheet" />
    <style>
        .font-heading { font-family: 'Oswald', sans-serif; }
    </style>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-slate-950 text-gray-300 antialiased font-sans border-t-4 border-orange-600 flex flex-col min-h-screen selection:bg-orange-500 selection:text-white">

    <!-- Navigation -->
    <nav class="w-full z-50 bg-slate-950/80 backdrop-blur-lg border-b border-slate-800 shadow-2xl sticky top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="font-heading font-bold text-2xl text-white tracking-widest uppercase transition-transform hover:scale-105">MEX<span class="text-orange-500">TOOLS</span></a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-slate-400 hover:text-white font-medium transition-colors">Inicio</a>
                    <a href="{{ route('productos.index') }}" class="text-white hover:text-white font-bold transition-colors border-b-2 border-orange-500">Catálogo Premium</a>
                    <a href="{{ route('cotizar.create') }}" class="text-slate-400 hover:text-white font-medium transition-colors">Cotizar</a>
                </div>
                <div class="flex items-center space-x-4 border-l border-slate-800 pl-6 ml-2">
                    @auth
                        <a href="{{ url('/admin/dashboard') }}" class="text-slate-400 hover:text-orange-500 font-medium transition-colors">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-slate-400 hover:text-orange-500 font-medium transition-colors">Acceso</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Header -->
    <div class="relative pt-24 pb-16 overflow-hidden bg-slate-900 border-b border-slate-800">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-orange-600/10 blur-[120px] rounded-full pointer-events-none"></div>
            <!-- Subtile grid pattern -->
            <div class="absolute inset-0" style="background-image: linear-gradient(to right, #1e293b 1px, transparent 1px), linear-gradient(to bottom, #1e293b 1px, transparent 1px); background-size: 40px 40px; opacity: 0.2;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="text-orange-500 font-bold uppercase tracking-widest text-sm mb-3 block">Inventario Homologado</span>
            <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-6 tracking-tight">Equipamiento <span class="bg-clip-text text-transparent bg-gradient-to-r from-orange-400 to-orange-600">Industrial</span></h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto font-medium">Explora nuestro catálogo de maquinaria y herramientas homologadas para trabajo pesado. Rendimiento que no frena tu operación.</p>
        </div>
    </div>

    <!-- Product Grid Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full flex-grow relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($products as $product)
                <!-- Premium Product Card -->
                <div class="group relative bg-slate-900 rounded-3xl border border-slate-800/80 hover:border-orange-500/50 transition-all duration-500 shadow-xl overflow-hidden flex flex-col hover:-translate-y-2 hover:shadow-orange-900/30">
                    <!-- Hover gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none z-0"></div>
                    
                    <!-- Image Wrapper -->
                    <div class="relative h-64 bg-slate-950 overflow-hidden z-10">
                        @if($product->image_url)
                            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100" src="{{ $product->image_url }}" alt="{{ $product->name }}"/>
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-slate-800">
                                <svg class="w-16 h-16 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                        
                        <!-- Badges -->
                        <div class="absolute top-4 left-4 flex space-x-2">
                            <span class="bg-orange-600 text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-lg">En Stock</span>
                            <span class="bg-slate-900/80 backdrop-blur text-slate-300 border border-slate-700 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-lg">ID: {{ $product->id }}</span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 flex-1 flex flex-col relative z-10">
                        <h3 class="text-2xl font-bold text-white mb-3 font-heading">{{ $product->name }}</h3>
                        <p class="text-slate-400 leading-relaxed mb-8 flex-1 text-sm line-clamp-3">{{ $product->description }}</p>

                        <div class="flex items-center justify-between pt-6 border-t border-slate-800/80">
                            <div class="flex flex-col">
                                <span class="text-xs text-slate-500 uppercase font-bold tracking-wider mb-1">Precio Vol.</span>
                                <span class="text-2xl font-bold text-white">${{ number_format($product->price, 2) }}</span>
                            </div>
                            <a href="{{ route('cotizar.create', ['product_id' => $product->id]) }}" class="px-6 py-3 bg-slate-800 border border-slate-700 text-white font-semibold rounded-xl group-hover:bg-orange-600 group-hover:border-orange-500 transition-all duration-300 inline-flex items-center shadow-lg shadow-black/20">
                                Cotizar <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-32 text-center flex flex-col items-center">
                    <svg class="w-20 h-20 text-slate-700 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                    <h2 class="text-2xl font-bold text-white mb-2 font-heading">Inventario Vacío</h2>
                    <p class="text-slate-500 text-lg max-w-md mx-auto">Actualmente no disponemos de equipos publicados. Vuelve pronto.</p>
                </div>
            @endforelse
        </div>
    </div>
    
    <!-- Footer CTA -->
    <div class="border-t border-slate-800 bg-slate-900 py-12 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center pb-4">
             <h2 class="text-white font-heading text-2xl mb-4">¿Buscas un modelo específico?</h2>
             <a href="{{ route('cotizar.create') }}" class="text-orange-500 hover:text-orange-400 font-bold inline-flex items-center group transition-colors">
                 Habla con un asesor corporativo 
                 <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
             </a>
        </div>
    </div>
</body>
</html>
