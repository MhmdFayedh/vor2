@props(['name', 'type' => '', 'title'])

<div class="mb-6">
    
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="{{ $name }}">
        {{ $title }}  
    </label>

    <input class="border border-gray-400 py-2 px-2 w-full" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" >
    @error('{{ $name }}')
        <p class="text-red-500 text-sm">{{ $message }}</P>
    @enderror
</div>