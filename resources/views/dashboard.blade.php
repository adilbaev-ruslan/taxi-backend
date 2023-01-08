<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                @if(auth()->user()->role->name == 'Guest')
                    {{ __("You're Guest logged in!") }}
                @elseif(auth()->user()->role->name == 'Owner')
                    {{ __("You're Owner logged in!") }}
                @elseif(auth()->user()->role->name == 'Admin')
                    {{ __("You're Admin logged in!") }}
                @elseif(auth()->user()->role->name == 'Company')
                    {{ __("You're Company logged in!") }}
                @elseif(auth()->user()->role->name == 'Agent')
                    {{ __("You're Agent logged in!") }}
                @elseif(auth()->user()->role->name == 'Driver')
                    {{ __("You're Driver logged in!") }}
                @endif        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
