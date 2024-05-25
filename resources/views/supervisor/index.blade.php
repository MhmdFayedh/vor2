<x-layout>
    <x-navbar/>
    
    <div class=" container mx-auto mt-10">
        <div class="flex justify-between items-center">
            <h1 class="text-xl my-3">الطلبات السابقة</h1>
            <div class="flex gap-4">
                <a 
                href="/supervisor/request/create" 
                class="border border-indigo-500 rounded-md my-4 py-2 px-5 hover:bg-indigo-500 hover:text-gray-100 duration-150">
                    طلب فرصة/مبادرة تطوعية
                </a>
    
            </div>
        </div>

        <x-table.table>
            <x-table.thead>
                <x-table.th>#</x-.table.th>
                <x-table.th>أسم الطلب</x-table.th>
                <x-table.th>تصنيف الطلب</x-table.th>
                <x-table.th>حالة الطلب</x-table.th>
                <x-table.th></x-table.th>
            </x-table.thead>
            @foreach ($requests as $request)
            <x-table.tbody>
                <x-table.td>{{ $request->id }}</x-table.td>
                <x-table.td>{{ $request->name }}</x-table.td>
                <x-table.td>{{ $request->classification }}</x-table.td>
                <x-table.td>
                    <button class="
                            {{ $request->status === 'rejected' ? ' bg-red-300 ' : ''}}
                            {{ $request->status === 'pending' ? ' bg-orange-300 ' : '' }}
                            {{ $request->status === 'accepted' ? 'bg-emerald-500 ' : '' }}
                            px-2 py-1 text-md text-white rounded-md cursor-text">
                            {{ $request->status }}
                        </button>
                </x-table.td>
                <x-table.td>  <a
                    href="/request/{{ $request->id }}" 
                    class="px-2 py-3 bg-indigo-500 text-md text-white rounded-md ">
                    تفاصيل الطلب
                    </a>
        </x-table.td>
            </x-table.tbody>
            @endforeach
        </x-table.table>
    </div>
    
        
    
    </x-layout>