<x-layout>
    <x-navbar/>

    <main class="container mx-auto py-4">
        <div class="flex justify-center items-center">
            
            <div class="flex flex-col items-center">
                <div class="flex gap-3">
                    <h1 class="text-2xl text-center py-4">معلومات الحساب</h1>
                    <a 
                    class="flex flex-col items-center justify-center hover:text-gray-600 text-gray-400 duration-150"
                    href="profile/edit">
                        <span class="material-symbols-rounded">
                            edit
                        </span>
                    </a>
                </div>
                <div class="">
                    <img 
                    style="width: 100px; height: 100px"
                    src="{{ asset('storage/' . $user->profile->picture) }}" 
                    alt="User Picture"
                    class=" rounded-full"
                    >
                </div>
                <div class="col-span-3 text-xl">
                    {{ $user->name }}
                </div>
                <div class=" col-span-3 text-xl">
                    {{ $user->email }}
                </div>
                <div>
                    {{ $user->profile->job_title }}
                </div>
                <div>
                    السيرة الذاتية
                    @if (!$user->profile->cv)
                        <p class="text-sm text-red-500">لا توجد سيرة ذاتية</p>                        
                    @else
                    <a href="{{ asset('storage/' . $user->profile->cv) }}">
                        <span class="material-symbols-rounded text-sm text-gray-400 hover:gray-600">
                            open_in_new
                        </span>
                    </a>
                    @endif
                </div>

                <div>
                    {{ $user->profile->region }}، {{ $user->profile->city }}
                </div>
                

                <div class="mt-5">
                    <a 
                    href="/password/ensure"
                    class=" bg-indigo-500 text-white rounded hover:bg-indigo-600 duration-150 py-2 px-1"
                    >
                        تعديل الرمز السري
                    </a>
                </div>
            </div>
        </div>
    </main>
    <div class="text-center">
        
        <div class="mt-10">
            
            
        </div>

    </div>
</x-layout>