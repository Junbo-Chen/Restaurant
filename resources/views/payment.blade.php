<x-app-layout>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            betalen pagina
        </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($orders as $o)
                        {{$o->name}}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>
                        totaal prijs: {{$total}}
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>