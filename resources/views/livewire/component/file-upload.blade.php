<div class="flex flex-col items-center justify-center h-screen bg-gray-100">
    @if (session()->has('message'))
        <div class="p-3 mb-3 text-green-700 bg-green-200 rounded shadow">{{ session('message') }}</div>
    @endif

    <div class="w-20 h-20 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-12 h-12 text-indigo-600">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
        </svg>
    </div>

    <form wire:submit.prevent="upload" enctype="multipart/form-data" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
        <div class="mb-4">
            <label for="excelFile" class="block mb-2 text-sm font-bold text-gray-700">Upload Excel File:</label>
            <input type="file" wire:model="excelFile" id="excelFile"
                class="block w-full px-3 py-2 mt-1 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('excelFile') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit"
            class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Upload</button>
    </form>
</div>
