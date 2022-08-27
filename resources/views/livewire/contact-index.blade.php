<div>
    {{-- <ul class="space-y-1 max-w-md list-inside text-gray-500 dark:text-gray-400">
        @foreach ($contacts as $contact)
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
                {{ $contact->name }}
            </li>
        @endforeach
    </ul> --}}

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-5 px-6">
                        #
                    </th>
                    <th scope="col" class="py-5 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-5 px-6">
                        Phone
                    </th>
                    <th scope="col" class="py-5 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-1 pl-6 w-4">
                            <div class="text-base font-semibold">{{ $loop->iteration }}</div>
                        </td>
                        <td class="py-1 px-6 text-gray-900 dark:text-white">
                            <div class="text-base font-semibold">{{ $contact->name }}</div>
                        </td>
                        <td class="py-1 px-6">
                            {{ $contact->phone }}
                        </td>
                        <td class="py-1 px-6">
                            <button type="button"
                                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>
                            <button type="button"
                                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
