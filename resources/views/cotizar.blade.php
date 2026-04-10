<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cotizar | MexTools</title>
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
<body class="bg-slate-950 text-gray-300 antialiased font-sans border-t-4 border-orange-600 selection:bg-orange-500 selection:text-white">

    <!-- Minimal Nav -->
    <nav class="absolute w-full z-50 top-0 left-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <a href="/" class="font-heading font-bold text-2xl text-white tracking-widest uppercase hover:text-orange-500 transition-colors">MEX<span class="text-orange-500">TOOLS</span></a>
        </div>
    </nav>

    <div class="min-h-screen flex items-center justify-center py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        
        <!-- Abstract Background -->
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <div class="absolute top-[-10%] right-[-5%] w-[800px] h-[800px] bg-orange-600/10 blur-[150px] rounded-full"></div>
            <div class="absolute bottom-[-10%] left-[-10%] w-[600px] h-[600px] bg-slate-800/40 blur-[120px] rounded-full"></div>
        </div>

        <div class="max-w-6xl w-full relative z-10">
            
            <div class="bg-slate-900 rounded-3xl overflow-hidden border border-slate-800 shadow-2xl flex flex-col lg:flex-row shadow-black/80">
                
                <!-- Left panel: Value Proposition -->
                <div class="lg:w-5/12 bg-slate-800 relative overflow-hidden p-10 lg:p-14 flex flex-col justify-between">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1580983546552-e4210fd5fcde?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-20 mix-blend-luminosity grayscale">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
                    </div>
                    
                    <div class="relative z-10 pt-8">
                        <span class="text-orange-500 font-bold uppercase tracking-widest text-sm mb-4 block">Contacto Comercial</span>
                        <h2 class="text-4xl lg:text-5xl font-heading font-bold text-white mb-6 leading-tight">Impulsa Tu<br/>Producción.</h2>
                        <p class="text-slate-400 text-lg">Déjanos tus datos y un especialista asignado se pondrá en contacto contigo para una propuesta a medida.</p>
                    </div>

                    <div class="relative z-10 mt-12 space-y-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-slate-900/80 border border-slate-700 flex items-center justify-center text-orange-500 backdrop-blur">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="ml-4 text-white font-medium">Asesoría Técnica Experta</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-slate-900/80 border border-slate-700 flex items-center justify-center text-orange-500 backdrop-blur">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="ml-4 text-white font-medium">Precios Escalados por Volumen</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-slate-900/80 border border-slate-700 flex items-center justify-center text-orange-500 backdrop-blur">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="ml-4 text-white font-medium">Cobertura Logística Nacional</span>
                        </div>
                    </div>
                </div>

                <!-- Right panel: The Form -->
                <div class="lg:w-7/12 p-8 md:p-12 lg:p-16 relative bg-slate-900">
                    
                    @if (session('success'))
                        <div class="mb-8 bg-orange-900/20 border border-orange-500/50 text-white px-6 py-4 rounded-xl relative shadow-lg" role="alert">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="font-bold block sm:inline">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif
                    
                    @if ($errors->any())
                        <div class="mb-8 bg-red-900/20 border border-red-500/50 text-red-200 px-6 py-4 rounded-xl relative">
                            <strong class="font-bold block mb-2 text-red-400">Verifica lo siguiente:</strong>
                            <ul class="list-disc pl-5 text-sm space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('cotizar.store') }}" method="POST" class="space-y-6 relative z-10 w-full">
                        @csrf
                        
                        <div class="space-y-2">
                            <label for="product_id" class="block text-sm font-bold text-slate-300">Equipo Requerido</label>
                            <div class="relative">
                                <select id="product_id" name="product_id" required class="appearance-none block w-full px-5 py-4 bg-slate-950 border border-slate-700 rounded-xl shadow-sm text-white focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors font-medium">
                                    <option value="" disabled selected>-- Selecciona el equipo de interés --</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}" {{ request('product_id') == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="customer_name" class="block text-sm font-bold text-slate-300">Nombre Completo</label>
                                <input id="customer_name" name="customer_name" type="text" placeholder="Ing. Juan Pérez" required class="block w-full px-5 py-4 bg-slate-950 border border-slate-700 rounded-xl shadow-sm placeholder-slate-600 text-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                            </div>

                            <div class="space-y-2">
                                <label for="company" class="block text-sm font-bold text-slate-300">Empresa (Opcional)</label>
                                <input id="company" name="company" type="text" placeholder="Constructora SA" class="block w-full px-5 py-4 bg-slate-950 border border-slate-700 rounded-xl shadow-sm placeholder-slate-600 text-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-bold text-slate-300">Correo Electrónico</label>
                                <input id="email" name="email" type="email" placeholder="correo@empresa.com" required class="block w-full px-5 py-4 bg-slate-950 border border-slate-700 rounded-xl shadow-sm placeholder-slate-600 text-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                            </div>

                            <div class="space-y-2">
                                <label for="phone" class="block text-sm font-bold text-slate-300">Teléfono Directo</label>
                                <input id="phone" name="phone" type="tel" placeholder="55 1234 5678" required class="block w-full px-5 py-4 bg-slate-950 border border-slate-700 rounded-xl shadow-sm placeholder-slate-600 text-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="block text-sm font-bold text-slate-300">Detalles o Cantidad</label>
                            <textarea id="message" name="message" rows="4" placeholder="Requerimos cotizar un lote de 15 piezas para la sucursal norte..." required class="block w-full px-5 py-4 bg-slate-950 border border-slate-700 rounded-xl shadow-sm placeholder-slate-600 text-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors resize-none"></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full flex justify-center items-center py-4 px-8 rounded-xl shadow-lg shadow-orange-900/50 text-lg font-bold text-white bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-400 hover:to-orange-500 transform transition-all duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-900 focus:ring-orange-500">
                                Solicitar Cotización Oficial
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="{{ route('productos.index') }}" class="text-slate-500 hover:text-white font-medium transition-colors text-sm uppercase tracking-widest inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Regresar al Catálogo
                </a>
            </div>
        </div>
    </div>
</body>
</html>
