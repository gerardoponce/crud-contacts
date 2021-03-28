<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            Actualizar contacto
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('contact.update', ['user' => $user->id]) }}">
        @csrf
        @method('PUT')

        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="name"
                    type="text"
                    name="name"
                    value="{{$user->name}}"
                    required >
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <x-label for="last_name" :value="__('Last Name')" />

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="last_name"
                    type="text"
                    name="last_name"
                    value="{{$user->last_name}}"
                    required >
            </div>

            <!-- Cell Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="phone"
                    type="number"
                    name="phone"
                    value="{{$user->phone}}"
                    required >
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="email"
                    type="email"
                    name="email"
                    value="{{$user->email}}"
                    required >
            </div>

            <!-- Home Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="address"
                    type="text"
                    name="address"
                    value="{{$user->address}}"
                    required >

            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="password"
                    type="password"
                    name="password"
                    value="{{$user->password}}"
                    required >
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    Actualizar contacto
                </x-button>
            </div>
        </form>
        <div class="flex items-center justify-end mt-4">
            <form method="POST" action="{{ route('contact.destroy', ['user' => $user->id]) }}">
                @csrf
                @method('DELETE')
                <x-button class="ml-4">
                    Eliminar contacto
                </x-button>
            </form>
        </div>

    </x-auth-card>
</x-app-layout>
