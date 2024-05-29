<x-layout>
    <x-navbar/>
    
    <div class=" container mx-auto mt-10 h-[80vh] ">
        <div class="flex justify-between items-center">
                <h1 class="text-2xl my-3 mr-6 text-center font-semibold text-[#286275]">الطلبات</h1>
                {{-- <x-dropdown>
                    <x-slot:title>
                        التصنيف
                    </x-slot>
                        <x-dropdown-item type="link" :link="'?classification=initiative'">المبادرات التطوعية</x-dropdown-item>
                        <x-dropdown-item type="link" :link="'?classification=opportunity'">الفرص التطوعية</x-dropdown-item>
                </x-dropdown>    --}}
            <div class="flex gap-4">
                <a 
                href="/supervisor/request/create" 
                class=" my-4 py-2 px-5 duration-150 border border-[#286275] rounded-md py-2 px-10  hover:text-white hover:bg-[#187873] text-lg font-semibold text-[#286275] ml-8">
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
                    class="px-2 py-3 bg-[#3d4575] text-white rounded-md hover:bg-white hover:text-[#3d4575] ">
                    تفاصيل الطلب
                    </a>
        </x-table.td>
            </x-table.tbody>
            @endforeach
        </x-table.table>

        @if (count($requests) == 0)
        <div class="text-4xl text-center mt-24">
            <h2>لا يوجد طلبات سابقة</h2>
        </div>
        @endif

    </div>
    
        
    
    </x-layout>