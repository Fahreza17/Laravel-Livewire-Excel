<div class="container grid items-center justify-center h-screen grid-cols-2 mx-auto sm md lg xl">
    <div class="h-screen pt-5 pb-5 pr-5 overflow-hidden rounded-md">
        <img src="https://wallpapercave.com/wp/wp8968814.jpg" class="object-cover w-full h-full rounded-md drop-shadow-lg">
    </div>

    <div class="h-screen pt-5 pb-5 overflow-hidden rounded-md">
        <div class="flex flex-col items-center justify-center w-full h-full bg-white border rounded drop-shadow-lg">
            <form wire:submit.prevent="login" class="mx-auto text-center">
                <div>
                    <h1 class="text-2xl font-semibold">Sign in</h1>
                </div>

                <div class="mb-4">
                    <input type="email" placeholder="Email" wire:model="email" id="email"
                        class="flex h-10 px-3 py-2 mt-1 text-sm bg-white border rounded-md w-96 border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
                    @error('email')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="password" placeholder="Password" wire:model="password" id="password"
                        class="flex h-10 px-3 py-2 mt-1 text-sm bg-white border rounded-md w-96 border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
                    @error('password')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <button type="submit"
                        class="px-4 py-2 text-white bg-indigo-600 rounded hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800 w-96">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="mt-4">
                <a href="{{ route('register') }}"
                    class="text-gray-600 transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none focus:underline">don't
                    have an account? Sign up</a>
            </div>
        </div>
    </div>
</div>
