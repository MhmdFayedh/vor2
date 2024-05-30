@props(['link', 'action',])

@if ($type == 'link')
<a href="{{ $link }}" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
    <span class="text-[#3e4378] ">{{ $slot }}</span>
</a>

@else
<form
    class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500"
    action="{{ $action }}" 
    method="POST">
    @csrf
    <button
    class=" text-[#3e4378] " 
    type="submit" 
    class="duration-150">
       {{ $slot }}
    </button>
</form>   
@endif

