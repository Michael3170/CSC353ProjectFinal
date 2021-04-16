


<div>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Upload a song
            {{ $filename ?? '' }}
        </h2>
    </x-slot>
    <form wire:submit.prevent="save">
    <input type="file" wire:model="music">


    <form wire:submit.prevent="save">
    @if ($music)
        Music Preview:
        <img src="{{ $music->temporaryUrl() }}">
    @endif

    @error('music') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Upload</button>
</form>
    
    </div>
