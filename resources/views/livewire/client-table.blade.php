<div class="bg-gray-800 rounded-xl shadow p-6">
    <h1 class="text-2xl font-bold text-indigo-400 mb-4">Clients</h1>

    <table class="w-full text-left text-sm text-gray-300">
        <thead class="text-gray-400 uppercase border-b border-gray-700">
            <tr>
                <th class="py-3 px-4">Name</th>
                <th class="py-3 px-4">Email</th>
                <th class="py-3 px-4">Company Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr class="hover:bg-gray-700 transition">
                    <td class="py-3 px-4">{{ $client->name .' '.$client->last_name }}</td>
                    <td class="py-3 px-4">{{ $client->email }}</td>
                    <td class="py-3 px-4">{{ $client->business_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
