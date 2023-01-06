<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    te maken bestelling
                </div>
            </div>
            @foreach ($kitchen as $k)
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h1 class="mb-2 text-2xl  tracking-tight text-gray-900 dark:text-white">tafel:{{$k->tafel->id}}</h1>
                </a>
                <p class="text-gray-500">
                    tijd ban bestelling:{{date('H:i', strtotime($k->created_at))}}
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    @foreach ($k->menu->groupBy('name') as $key => $value)
                        @if ($value[0]->type->name != 'drank')
                            {{ $key }} X {{ count($value)}}
                        @endif
                    @endforeach
                </p>
                <form action="{{route('order.update', $k)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="type" value="food">
                    <button type="submit" href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    klaar
                    </a>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>