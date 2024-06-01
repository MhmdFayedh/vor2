@props(['name', 'title', 'id' => ''])

<div class="mb-6">
    <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="{{ $name }}">
        {{ $title }}
    </label>
    <select name="{{ $name }}" id="{{ $id }}" class="border border-gray-400 py-2 w-full rounded-md bg-gray-50">
        {{ $slot }}
    </select>
    <x-form.error/>
</div>


