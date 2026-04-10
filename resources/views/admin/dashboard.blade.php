<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Panel de Administración MexTools') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg border border-slate-700">
                <div class="p-6 border-b border-slate-700">
                    <h3 class="text-xl text-orange-500 font-bold mb-4">Bienvenido al panel Admin</h3>
                    <p class="mb-4 text-gray-400">Desde aquí puedes gestionar el inventario, autorizar usuarios y examinar las cotizaciones recibidas desde el sitio público.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 mb-10">
                        <div class="bg-slate-900 p-6 rounded-lg text-center border border-slate-700 shadow-inner">
                            <h4 class="font-bold text-4xl mb-2 text-white">{{ \App\Models\Product::count() }}</h4>
                            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Equipos Activos</span>
                        </div>
                        <div class="bg-slate-900 p-6 rounded-lg text-center border border-slate-700 shadow-inner">
                            <h4 class="font-bold text-4xl mb-2 text-white">{{ $quotes->count() }}</h4>
                            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Cotizaciones</span>
                        </div>
                        <div class="bg-slate-900 p-6 rounded-lg text-center border border-slate-700 shadow-inner">
                            <h4 class="font-bold text-4xl mb-2 text-white">{{ \App\Models\User::count() }}</h4>
                            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Usuarios</span>
                        </div>
                    </div>

                    <h4 class="text-lg text-white font-bold mb-4 border-b border-slate-700 pb-2">Cotizaciones Recientes</h4>
                    <div class="overflow-x-auto rounded-lg border border-slate-700">
                        <table class="min-w-full divide-y divide-slate-700">
                            <thead class="bg-slate-900">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-orange-500 uppercase tracking-wider">Cliente</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-orange-500 uppercase tracking-wider">Contacto</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-orange-500 uppercase tracking-wider">Equipo Buscado</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-orange-500 uppercase tracking-wider">Detalles</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-orange-500 uppercase tracking-wider">Fecha</th>
                                </tr>
                            </thead>
                            <tbody class="bg-slate-800 divide-y divide-slate-700">
                                @forelse ($quotes as $quote)
                                    <tr class="hover:bg-slate-700 transition duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-bold text-white">{{ $quote->customer_name }}</div>
                                            <div class="text-sm text-gray-400 font-semibold">{{ $quote->company ?: 'Particular' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-300"><a href="mailto:{{ $quote->email }}" class="text-orange-500 hover:text-orange-400 font-medium">{{ $quote->email }}</a></div>
                                            <div class="text-sm text-gray-400 mt-1">{{ $quote->phone }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200 font-medium">
                                            {{ $quote->product ? $quote->product->name : 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-300">
                                            {{ \Illuminate\Support\Str::limit($quote->message, 60) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-400 font-medium">
                                            {{ $quote->created_at->format('d/m/Y') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-8 text-center text-sm font-semibold text-slate-500 bg-slate-900/50">
                                            Aún no hay cotizaciones pendientes por revisar.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
