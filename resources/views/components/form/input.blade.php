@props(['name', 'type' => '', 'title'])

<div {{ $attributes->merge(['class' => 'mb-6 ']) }} >
    
    <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="{{ $name }}">
        {{ $title }}  
    </label>

    <input class='border border-gray-400 py-2 w-full rounded-md bg-gray-50' type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" >
    @error('{{ $name }}')
        <p class="text-red-500 text-sm">{{ $message }}</P>
    @enderror
</div>
