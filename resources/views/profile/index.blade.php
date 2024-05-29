<x-layout>
    <x-navbar/>

    <main class="container mx-auto py-4">
        <div class="flex justify-center items-center">
            
            <div class="flex flex-col items-center">
                <div class="flex gap-5">
                    <h1 class="py-10 text-4xl text-center text-[#177a74] font-semibold ">معلومات الحساب</h1>
                    <a 
                    class="flex flex-col items-center justify-center hover:text-gray-600 text-gray-400 duration-150"
                    href="profile/edit">
                        <span class="material-symbols-rounded bg-gray-300 text-white rounded-full p-2 ">
                            edit
                        </span>
                    </a>
                </div>
                <div class="">
                    <img 
                    style="width: 100px; height: 100px"
                    src="{{ $user->profile->picture ? asset('storage/' . $user->profile->picture) : 'https://media.discordapp.net/attachments/1237107768910151700/1245428598320533574/IMG_2945.jpg?ex=6658b744&is=665765c4&hm=8479e5ff42f9b3a2cb54f175c3bc990c5f376bd9b629d3354f9484c8ad3cac7d&=&format=webp'}}"
                    alt=""
                    class=" rounded-full bg-gray-200 text-gray-900 text-sm border border-gray-700 "
                    >
                </div>
                <div class="col-span-3 text-2xl text-[#374e75] font-semibold m-2">
                    {{ $user->name }}
                </div>
                <div class=" col-span-3 text-2xl m-1 ">
                    {{ $user->email }}
                </div>
                <div  class=" col-span-3 text-xl m-1 text-[#374e75] font-bold">
                    {{ $user->profile->job_title }}
                </div>
                <div>
                    <p class=" col-span-3 text-xl m-1 font-semibold">
                        السيرة الذاتية
                    </p>
                    @if (!$user->profile->cv)
                        <p class="text-xl text-red-400 font-semibold">لا توجد سيرة ذاتية</p>                        
                    @else
                    <a href="{{ asset('storage/' . $user->profile->cv) }}">
                        <span class="material-symbols-rounded text-gray-400 hover:gray-600 text-xl mr-12 ">
                            open_in_new
                        </span>
                    </a>
                    @endif
                </div>

                <div class="text-xl">
                   @if ($user->profile->region && $user->profile->city)
                   {{ $user->profile->region }}، {{ $user->profile->city }}
                   @endif
                </div>
                

                <div class="mt-5">
                    <a 
                    href="/password/ensure"
                    class=" bg-white text-[#374e75]  border border-gray-700 font-semibold rounded hover:text-white duration-100 hover:bg-[#187873] hover:border-white py-2 px-4"
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