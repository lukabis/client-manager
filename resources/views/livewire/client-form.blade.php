<div class="m-4">

    <div class="mb-10 flex items-center">
        <a href="{{ route('clients-table') }}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Clients
        </a>
    </div>

    <form wire:submit.prevent="{{ isset($client) ? 'update' : 'store' }}">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- First Name -->
            <div>
                <label for="name" class="block text-gray-400 text-sm font-medium mb-2">First Name</label>
                <input type="text" id="name" wire:model.live="form.name"
                    class="w-full bg-gray-700 text-gray-100 placeholder-gray-400 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror">
                @error('form.name') 
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Last Name -->
            <div>
                <label for="last_name" class="block text-gray-400 text-sm font-medium mb-2">Last Name</label>
                <input type="text" id="last_name" wire:model="form.last_name" 
                    class="w-full bg-gray-700 text-gray-100 placeholder-gray-400 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('last_name') border-red-500 @enderror">
                @error('form.last_name') 
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-400 text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" wire:model="form.email" 
                    class="w-full bg-gray-700 text-gray-100 placeholder-gray-400 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror">
                @error('form.email') 
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Phone -->
            <div>
                <label for="phone" class="block text-gray-400 text-sm font-medium mb-2">Phone</label>
                <input type="tel" id="phone" wire:model="form.phone" 
                    class="w-full bg-gray-700 text-gray-100 placeholder-gray-400 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('phone') border-red-500 @enderror">
                @error('form.phone') 
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <!-- Business Information -->
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-indigo-300 mb-3">Business Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Business Name -->
                <div>
                    <label for="business_name" class="block text-gray-400 text-sm font-medium mb-2">Company Name</label>
                    <input type="text" id="business_name" wire:model="form.business_name" 
                        class="w-full bg-gray-700 text-gray-100 placeholder-gray-400 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('business_name') border-red-500 @enderror">
                    @error('form.business_name') 
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        
        <!-- Notes -->
        <div class="mb-6">
            <label for="notes" class="block text-gray-400 text-sm font-medium mb-2">Notes</label>
            <textarea id="notes" wire:model="form.notes" rows="4" 
                class="w-full bg-gray-700 text-gray-100 placeholder-gray-400 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('notes') border-red-500 @enderror"></textarea>
            @error('form.notes') 
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        @session('message')
            <div class="mb-6">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('message') }}</span>
                </div>
            </div>
        @endsession
        
        <!-- Buttons -->
        <div class="flex justify-end space-x-3">
            <a href="{{ route('clients-table') }}" type="button" wire:click="cancel" 
                class="bg-gray-700 hover:bg-gray-600 text-gray-300 font-medium py-2 px-4 rounded transition">
                Cancel
            </a>
            <button type="submit" 
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded transition">
                {{ isset($client) ? 'Update Client' : 'Save Client' }}
            </button>
        </div>
    </form>

</div>