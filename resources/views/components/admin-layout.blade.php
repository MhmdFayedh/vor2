<!doctype html>
<html>
<head>
    <meta dir="rtl">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <style>html{visibility: hidden;opacity:0;}</style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>VOR</title>
</head>
<body  
    x-data="{
        aside: false 
        }">
    <main class=" relative z-50 lg:grid lg:grid-cols-12 lg:gap-5 lg:p-10 ">
        <header class="flex justify-between mt-2 lg:hidden">
            <div >
                <a href="/admin">
                    <img class="w-12 rounded-full border border-gray-200 bg-white " src="{{ asset('images/hhc_logo.png') }}" alt="lo">
                </a>
            </div>

            <x-dropdown>
                <x-slot:title>
                    <img 
                    src="{{ auth()->user()->profile->picture ? 
                    asset('storage/' .  auth()->user()->profile->picture) :
                     'https://static.vecteezy.com/system/resources/previews/036/280/651/original/default-avatar-profile-icon-social-media-user-image-gray-avatar-icon-blank-profile-silhouette-illustration-vector.jpg'}}"
                    alt="" 
                    class="border border-white w-10 h-10 rounded-full object-cover">
                </x-slot>
                @can('admin')
                    <x-dropdown-item type="link" :link="'/admin'">لوحة التحكم</x-dropdown-item>
                @endcan
                @can('supervisor')
                    <x-dropdown-item type="link" :link="'/supervisor'">صفحة المشرفين</x-dropdown-item>
                @endcan

                <x-dropdown-item type="link" :link="'/profile'">ملف التعريف</x-dropdown-item>         
                <x-dropdown-item type="form" :action="'/logout'"> تسجيل الخروج</x-dropdown-item>
            </x-dropdown>
        </header>
        <nav class="bg-white shadow fixed bottom-0 w-full lg:hidden">
            <div class="flex justify-between items-center container mx-auto py-2 w-screen">
                    <a 
                    href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'text-indigo-500' : '' }}
                    text-gray-500 hover:bg-indigo-500 hover:text-white rounded-lg py-4 px-2 duration-150 text-xs">
                        <span class="material-symbols-rounded">
                            dashboard
                        </span>
                    </a>

                    <a href="{{ route('requests.index') }}"
                        class="{{ request()->routeIs('requests*') ? 'text-indigo-500' : '' }}
                        text-gray-500 hover:bg-indigo-500 hover:text-white rounded-lg py-4 px-2 duration-150 text-xs">
                        <span class="material-symbols-rounded">
                            diversity_2
                        </span>

                        <a href="{{ route('users.index') }}"
                            class=" {{ request()->routeIs('users*') ? 'text-indigo-500' : '' }}
                            flex flex-col-reverse  text-gray-500 hover:bg-indigo-500 hover:text-white rounded-lg py-4 px-2 duration-150 text-xs">
                            <span class="material-symbols-rounded ">
                                group
                            </span>
                        </a>

                        <form action="/logout" method="POST">
                            @csrf
                            <button class="flex flex-col-reverse justify-center items-center lg:w-full text-gray-500 hover:bg-indigo-500 hover:text-white rounded-lg py-4 px-2 duration-150 ">
                                <span class="material-symbols-rounded">
                                    logout
                                </span>    
                            </button>
                        </form>
            </div>
        </nav>

        <aside class="hidden lg:block  xl:w-1/2 container mx-auto lg:col-span-4">
            <div class="flex justify-between items-baseline">
                    <a href="/admin">
                        <img class="w-14 lg:w-20" src="{{ asset('images/hhc_logo.png') }}" alt="">
                    </a>

                    <x-dropdown>
                        <x-slot:title>
                            <img src="{{ asset("storage/" . auth()->user()->profile->picture) }}" alt="" class="w-14 h-14 rounded-full">
                        </x-slot>
                        @can('admin')
                            <x-dropdown-item type="link" :link="'/admin'">لوحة التحكم</x-dropdown-item>
                        @endcan
                        @can('supervisor')
                            <x-dropdown-item type="link" :link="'/supervisor'">صفحة المشرفين<</x-dropdown-item>
                        @endcan
                        <x-dropdown-item type="link" :link="'/profile'">ملف التعريف</x-dropdown-item>
                        <x-dropdown-item type="form" :action="'/logout'"> تسجيل الخروج</x-dropdown-item>
                    </x-dropdown>
            </div>
                    <ul class="mt-10 space-y-3">
                        <li>
                            <a href="{{ route('dashboard') }}"  class="{{ request()->routeIs('dashboard') ? 'bg-[#3e4378] text-white ' : '' }}flex justify-between gap-2 w-3/4  lg:w-full text-gray-500 hover:bg-white hover:text-[#3e4378] shadow-lg rounded-xl py-4 px-2 duration-150">
                                لوحة التحكم
                                <span class="material-symbols-rounded">
                                    dashboard
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('requests.index') }}" class="{{ request()->routeIs('requests*') ? 'bg-[#3e4378] text-white ' : '' }}flex justify-between gap-2 w-3/4 lg:w-full text-[#3e4378] rounded-lg py-4 px-2 duration-150 hover:bg-white hover:text-[#3e4378] shadow-lg rounded-xl ">
                                رؤية جميع الطلبات 
                                <span class="material-symbols-rounded">
                                    diversity_2
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}" class=" {{ request()->routeIs('users*') ? 'bg-[#3e4378] text-white ' : '' }}flex justify-between gap-2 w-3/4 lg:w-full  text-[#3e4378]   rounded-lg hover:bg-white hover:text-[#3e4378] shadow-lg rounded-xl py-4 px-2 duration-150">
                                أدارة المستخدمين
                                <span class="material-symbols-rounded">
                                    group
                                </span>
                            </a>
                        </li>
            
            
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="flex justify-between gap-2 w-3/4 lg:w-full rounded-lg text-[#3e4378] shadow-lg rounded-xl hover:bg-[#3e4378] hover:text-white py-4 px-2 duration-150">
                                    تسجيل الخروج
                                    <span class="material-symbols-rounded">
                                        logout
                                    </span>    
                                </button>
                            </form>
                        </li>
                        <li></li>
                    </ul>
            </aside>
     
        <div class=" lg:col-span-7 my-20 lg-my-0">
            {{ $slot }}  
        </div>
    </main>
     

    <div id="loader" class="loader">
        <img src="{{ asset('images/hhc_logo.png') }}" alt="">
    </div>

</body>
@if (session('success'))
    <div class="fixed bottom-6 right-6 bg-[#009b72] py-3 px-3 rounded-xl select-none ">
        <p class="text-white">{{ session('success') }}</p>
    </div>
@endif


</html>