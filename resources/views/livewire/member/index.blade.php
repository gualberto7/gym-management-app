<div>
    <div class="relative overflow-x-auto sm:rounded-lg">
        <div
            class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input
                    wire:model.live.debounce.300ms="search"
                    type="text"
                    id="table-search-users"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-96 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Buscar por nombre o carné de identidad"
                >
            </div>
            <div>
            <x-button>
                Agregar miembro
            </x-button>
            </div>
        </div>
        @if($members->count())
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CI
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full"
                                 src="{{ 'https://ui-avatars.com/api/?name='.$member->name.'&background=random' }}"
                                 alt="{{ $member->name }}">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $member->name }}</div>
                                <div class="font-normal text-gray-500">{{ $member->email }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $member->ci }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                {{ $member->start_date }}
                            </div>
                            Plan {{ $member->membership }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                user</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{ $members->links() }}
            </div>
        @else
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                <p class="text-gray-500 dark:text-gray-400">No se econtro resultados para {{ $search }}</p>
            </div>
        @endif
    </div>
</div>
