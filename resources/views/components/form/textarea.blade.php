@props(['name', 'title'])

<div class="mb-6">
    <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="{{ $name }}">
        {{ $title }}  
    </label>
    <textarea class="border border-gray-400 py-2 w-full rounded-md bg-gray-50 resize-none" name="{{ $name }}" id="{{ $name }}" cols="30" rows="10"></textarea>
    <x-form.error/>
</div>