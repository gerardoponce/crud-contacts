<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Contacts') }}
            </h2>
            <a href="{{route('contact.create')}}">
                <x-button class="ml-4">
                    Agregar contacto
                </x-button>
            </a>
        </div>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            @foreach($users as $user)
                <a class="mx-0.5 block" href="{{route('contact.edit', ['user' => $user->id])}}">
                    <div class="p-4 mb-3 flex justify-between items-center bg-white shadow rounded-lg">
                        <div class="h-10 py-3 px-1">
                            <p class="hover:text-blue-dark">{{"$user->name $user->last_name"}}</p>
                        </div>
                        <div class="h-10 text-right p-3">
                            <p class="text-sm text-grey-dark">{{"$user->phone"}}</p>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</x-app-layout>

