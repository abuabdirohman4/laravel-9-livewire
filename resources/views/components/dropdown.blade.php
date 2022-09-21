{{-- Using Alpine Inside Of Livewire --}}
{{-- <div x-data="{ open: false }">
    <button x-on:click="open = true">Show More...</button>
    <ul x-show="open" x-on:click.outside="open = false">
        <li><button wire:click="archive">Archive</button></li>
        <li><button wire:click="delete">Delete</button></li>
    </ul>
</div> --}}

{{-- Extracting Reusable Blade Components --}}
<div x-data="{ open: false }">
    <span x-on:click="open = true">{{ $trigger }}</span>
    <div x-show="open" x-on:click.outside="open = false">
        {{ $slot }}
    </div>
</div>
