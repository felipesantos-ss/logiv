<x-layout>
    <div class="min-h-[calc(100vh-4rem)] flex flex-col md:grid md:grid-cols-2">
                <div class="flex flex-col justify-center p-6 md:p-12 order-1 md:order-none">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Rastrear encomenda
                            </h2>
                            <form action="{{ route('frete.rastreamento') }}" method="GET" class="flex items-center space-x-2">
                                <div class="relative w-full max-w-md">
                                    <input type="text" name="codigo_rastreio" placeholder="Código de rastreamento" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600">
                                    <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-green-600 rounded-r-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600">Consultar</button>
                                </div>
                            </form>
                        </div>
    
                        <div class="space-y-4">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Histórico de encomendas
                            </h2>
                            <form action="#" method="GET">
                                <div class="relative w-full max-w-md">
                                    <input type="tel" name="telefone" placeholder="Número de telefone" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600" oninput="aplicarMascaraTelefone(this)" maxlength="15">
                                    <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-green-600 rounded-r-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600">Consultar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
                <div class="flex items-center justify-center order-2 md:order-none">
                    <img src="/cover-logiv.png" alt="Logiv-Background" class="object-cover max-h-screen max-w-screen">
                </div>
            </div>
</x-layout>