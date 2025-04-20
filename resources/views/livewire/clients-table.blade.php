<div>
    <div class="bg-gray-800 rounded-xl shadow p-6 m-2">
        <h1 class="text-2xl font-bold text-indigo-400 mb-4">Clients</h1>

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