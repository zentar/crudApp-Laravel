<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Detalle del producto</h2>
                        <a href="{{ route('productos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            ← Volver
                        </a>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ $producto->nombre }}</h3>

                            <div class="space-y-3">
                                @if ($producto->descripcion)
                                    <div>
                                        <span class="font-semibold text-gray-700">Descripción:</span>
                                        <p class="text-gray-600 mt-1">{{ $producto->descripcion }}</p>
                                    </div>
                                @endif

                                <div>
                                    <span class="font-semibold text-gray-700">Precio:</span>
                                    <p class="text-gray-600 mt-1">${{ number_format($producto->precio, 2) }}</p>
                                </div>

                                <div>
                                    <span class="font-semibold text-gray-700">Stock:</span>
                                    <p class="text-gray-600 mt-1">{{ $producto->stock }}</p>
                                </div>
                            </div>

                            <div class="flex space-x-3 mt-6">
                                <a href="{{ route('productos.edit', $producto->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Editar
                                </a>
                                <a href="{{ route('productos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                    Volver a la lista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
