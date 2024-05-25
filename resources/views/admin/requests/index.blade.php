<x-admin-layout>
    

        
    {{-- Main Contents --}}
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-10">
        <div class="flex justify-center items-center">
            <form action="" method="GET" class=" flex items-center">
                <input 
                type="text" 
                name="search" 
                class=" border border-gray-400 py-1 px-3 rounded-md" 
                placeholder="أبحث عن طلب"
                value="{{ request('search') }}"
                >
                <button type="submit">
                    <span class="material-symbols-rounded cursor-pointer flex items-center" x-on:click="open = !open">
                        search
                    </span>
                </button>
            </form>
            
        </div>
        <div>
            <x-dropdown>
                <x-slot:title>
                    التصنيف
                </x-slot>
                    <x-dropdown-item type="link" :link="'?classification=initiative'">المبادرات التطوعية</x-dropdown-item>
                    <x-dropdown-item type="link" :link="'?classification=opportunity'">الفرص التطوعية</x-dropdown-item>
            </x-dropdown>
    
        </div>
        
        <x-dropdown>
            <x-slot:title>
                الحالة
            </x-slot>
                <x-dropdown-item type="link" :link="'?status=accepted'">مقبوله</x-dropdown-item>
                <x-dropdown-item type="link" :link="'?status=pending'">مُعلقة</x-dropdown-item>
                <x-dropdown-item type="link" :link="'?status=rejected'">مرفوضه</x-dropdown-item>
        </x-dropdown>

    </div>
    <div class="hidden lg:block mt-10">
        <x-table.table>
            <x-table.thead>
                <x-table.th>#</x-.table.th>
                <x-table.th>أسم الطلب</x-table.th>
                <x-table.th>تصنيف الطلب</x-table.th>
                <x-table.th>حالة الطلب</x-table.th>
                <x-table.th></x-table.th>
            </x-table.thead>

            @unless (count($requests))
            <x-table.tbody>
                <x-table.td>
                    <p class=" text-md font-bold text-red-600">لا توجد طلبات</p>
                </x-table.td>
            </x-table.tbody>
           
            @else
            @foreach ($requests as $request)
            <x-table.tbody>
                <x-table.td>{{ $request->id }}</x-table.td>
                <x-table.td>
                    <a
                    class="border-2 border-transparent hover:border-b-blue-500" 
                    href="/admin/requests/{{ $request->id }}">
                        {{ $request->name }}
                    </a>
                </x-table.td>
                <x-table.td>{{ $request->classification }}</x-table.td>
                <x-table.td>
                    <button class="
                            {{ $request->status === 'rejected' ? ' bg-red-400 ' : ''}}
                            {{ $request->status === 'pending' ? ' bg-orange-300 ' : '' }}
                            {{ $request->status === 'accepted' ? 'bg-emerald-500 ' : '' }}
                            px-2 py-1 text-md text-white rounded-md cursor-text">
                            {{ $request->status }}
                        </button>
                </x-table.td>
            </x-table.tbody>
            @endforeach
            @endunless
            
        </x-table.table>    
    </div>

    <div class="lg:hidden flex flex-col gap-3 text-center p-10 ">
        @foreach ($requests as $request)
        <div class="border mt-6 shadow p-5">
           
            <h1 class="text-xl"><span class="text-xs text-gray-400">{{ $request->id }}# </span> {{ $request->name }}</h1>

            <p class="mt-2">{{ $request->classification  }}</p>


            <div class="flex justify-around items-center my-4 ">

                <a 
                class="py-1 px-2 bg-indigo-500 text-white rounded"
                href="/admin/requests/{{ $request->id }}">انظر للطلب</a>
                <button 
                class="
                        {{ $request->status === 'rejected' ? ' bg-red-400 ' : ''}}
                        {{ $request->status === 'pending' ? ' bg-orange-300 ' : '' }}
                        {{ $request->status === 'accepted' ? 'bg-emerald-500 ' : '' }}
                        px-2 py-1 text-md text-white rounded-md cursor-text">
                        {{ $request->status }}
                </button>
            </div>
           </a>
        </div>
        @endforeach

    </div>
    
    

</x-admin-layout>
