@props(['name', 'title'])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="{{ $name }}">
        {{ $title }}
    </label>
    <select name="{{ $name }}" id="{{ $name }}" class="border border-gray-400 py-2 px-2 w-full">
        {{ $slot }}
    </select>
    <x-form.error/>
</div>


