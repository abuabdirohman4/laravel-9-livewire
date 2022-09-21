<div>
    <!-- Alpine Counter Component -->
    <div x-data>
        <h1 x-text="$wire.count" class="mb-4 mt-3 bg-gray-200 w-9 rounded-xl d-flex text-center ml-7"></h1>
 
        <button x-on:click="$wire.increment()" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Increment</button>

        <select wire:model="multi" multiple>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        {{ implode(', ', $multi) }}
    </div>
</div>
