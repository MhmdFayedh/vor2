<x-admin-layout>
    {{-- Main Contents --}}
    <div class="flex justify-center items-center gap-3 lg:gap-10 ">
        <a 
        class="flex flex-col items-center justify-center hover:text-[#429e81] text-[#736896] duration-150"
        href="/admin/users/create">

        <div class="flex gap-1">

                <p>إضافة مستخدم جديد</p>
                <span class="material-symbols-rounded rounded-full  ">
                    person_add
                </span>
        </div>  
        </a>

            <form 
            method="GET"
            class="lg:w-96 flex justify-center items-center gap-3">
                <input 
                type="text" 
                name="search" 
                class=" border border-b-gray-400 py-1 px-3 rounded-md w-full bg-white" 
                placeholder="اسم المستخدم او  البريد الإلكتروني" value="{{ request('search')}}"><button type="submit">

                    <span class="material-symbols-rounded cursor-pointer flex items-center bg-[#736896] rounded-lg text-white hover:bg-[#429e81]" x-on:click="open = !open">
                        search
                    </span>
                </button>
            </form>
            

    </div>
    <div class="hidden md:block mt-10">
        <x-table.table>
            <x-table.thead>
                <x-table.th>#</x-.table.th>
                <x-table.th>أسم المستخدم</x-table.th>
                <x-table.th>دور المستخدم</x-table.th>
                <x-table.th>بريد المستخدم</x-table.th>
                <x-table.th></x-table.th>
                <x-table.th></x-table.th>
            </x-table.thead>
            @foreach ($users as $user)
            <x-table.tbody>
                <x-table.td>{{ $loop->index + 1 }}</x-table.td>
                <x-table.td>

                    <a
                    class="border-2 border-transparent hover:border-b-blue-500" 
                    href="/admin/users/{{ $user->id }}">
                        {{ $user->name }}
                    </a>
                    <a href="">

                    </a>
                </x-table.td>
                <x-table.td>{{ $user->role }}</x-table.td>
                <x-table.td>{{ $user->email }}</x-table.td>
                <x-table.td>

                    <x-confirmation-modal deleteRoute="/admin/users/{{ $user->id }}" username="{{ $user->name }}">
                        <span class="material-symbols-rounded text-gray-900 hover:text-red-400">
                            delete
                        </span>
                    </x-confirmation-modal>
                    {{-- <form action="/admin/users/{{ $user->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-rose-500 text-md rounded-md">
                            <span class="material-symbols-rounded text-gray-900 hover:text-red-400">
                                delete
                            </span>
                        </button>
                    </form> --}}
                </x-table.td>
            </x-table.tbody>
            @endforeach
        </x-table.table>
    </div>

     
    <div class="flex flex-col gap-3 text-center p-10 md:hidden ">
        @foreach ($users as $user)
        <div class="border mt-6 shadow p-5">
           
            <h1 class="text-xl"><span class="text-xs text-gray-400">{{ $loop->index +  1}}# </span> {{ $user->name }}</h1>

            <p class="mt-2">{{ $user->role }}</p>
            <p class="mt-2">{{ $user->email }}</p>

            <div class="flex justify-around items-center my-4 ">

                <a 
                class="py-1 px-2 bg-indigo-500 text-white rounded"
                href="/admin/users/{{ $user->id }}">انظر للمستخدم</a>
               <x-confirmation-modal deleteRoute="/admin/users/{{ $user->id }}"/>
            </div>

            <x-confirmation-modal deleteRoute="/admin/users/{{ $user->id }}" username="{{ $user->name }}">
                <span class="material-symbols-rounded text-gray-900 hover:text-red-400">
                    delete
                </span>
            </x-confirmation-modal> 
           </a>
        </div>
        @endforeach

    </div>
    
    

</x-admin-layout>