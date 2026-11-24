
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Staff Dashboard
            </h2>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">
                    Logout
                </button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Latest Customer Tickets
                </h3>

                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">
                                    Event Type
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">
                                    Date
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @forelse ($tickets as $ticket)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $ticket->customer_name }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $ticket->event_type }}
                                    </td>

                                    <td class="px-6 py-4 text-sm">
                                        <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800">
                                            {{ ucfirst($ticket->status) }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $ticket->created_at->format('d M Y, h:i A') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                                        No customer tickets found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <p class="mt-4 text-sm text-gray-500">
                    Showing the latest 10 customer tickets.
                </p>

            </div>
        </div>
    </div>
</x-app-layout>