<div class="max-w-md mx-auto mt-8">
    <form wire:submit.prevent="register" class="p-8 bg-white rounded shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" wire:model="name" id="name" class="w-full p-2 mt-1 border rounded-md">
            @error('name')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Email address</label>
            <input type="email" wire:model="email" id="email" class="w-full p-2 mt-1 border rounded-md">
            @error('email')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" wire:model="password" id="password" class="w-full p-2 mt-1 border rounded-md">
            @error('password')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-600">Password Confirmation</label>
            <input type="password" wire:model="password_confirmation" id="password_confirmation" class="w-full p-2 mt-1 border rounded-md">
            @error('password_confirmation')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            Register
        </button>
        <a href="{{ route('login') }}" class="text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Login</a>
    </form>
</div>
