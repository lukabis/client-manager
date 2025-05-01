<div>
    <div class="bg-gray-800 rounded-xl shadow p-6 m-2">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-indigo-400 mb-4">Clients</h1>

            <a href="/client" class="inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded transition whitespace-nowrap">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                New Client
            </a>
        </div>

        <div class="mb-4">
            <input
                type="text"
                wire:model.live.debounce.300ms="search"
                placeholder="Search clients..."
                class="w-full bg-gray-700 text-gray-100 placeholder-gray-400 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
            />
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[640px] text-left text-sm text-gray-300 overflow-x-scroll">
                <thead class="text-gray-400 uppercase border-b border-gray-700">
                    <tr>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Company Name</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($clients->isEmpty())
                        <tr>
                            <td colspan="4" class="py-3 px-4 text-center text-gray-500">
                                No clients found.
                            </td>
                        </tr>
                    @else
                        @foreach($clients as $client)
                            <tr class="hover:bg-gray-700 transition">
                                <td class="py-3 px-4">{{ $client->name .' '.$client->last_name }}</td>
                                <td class="py-3 px-4">{{ $client->email }}</td>
                                <td class="py-3 px-4">{{ $client->business_name }}</td>
                                <td class="py-3 px-4">
                                    <a href="/client/{{ $client->id }}" class="bg-gray-700 hover:bg-gray-600 text-indigo-300 font-medium py-1 px-3 rounded text-xs transition cursor-pointer">
                                        EDIT
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>