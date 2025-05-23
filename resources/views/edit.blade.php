<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="post" action="{{ route('profile.update') }}" class="p-4 bg-white shadow sm:rounded-lg">
                @csrf
                @method('patch')

                <div>
                    <label for="name">Name</label>
                    <input name="name" value="{{ old('name', $user->name) }}" class="block mt-1 w-full">
                </div>

                <div class="mt-4">
                    <label for="email">Email</label>
                    <input name="email" type="email" value="{{ old('email', $user->email) }}" class="block mt-1 w-full">
                </div>

                <div class="mt-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                </div>
            </form>

            <form method="post" action="{{ route('profile.destroy') }}" class="p-4 bg-white shadow sm:rounded-lg">
                @csrf
                @method('delete')

                <button onclick="return confirm('Are you sure you want to delete your profile?')" class="bg-red-500 text-white px-4 py-2 rounded">
                    Delete Account
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
