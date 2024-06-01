<nav 
x-data="{navOpen: false}"
class="bg-gradient-to-r from-[#453a77] to-[#009b72] shadow-2xl text-gray-200 py-3 shrink-0">
    <div class="container mx-auto max-w-sm md:max-w-6xl flex justify-between items-center">
        <div id="icon ">
            <a href="/">
                <img src="{{ asset('images/hhc_logo.png') }}" alt="" class="w-14 ab">
            </a>
        </div>
        @auth
        <x-dropdown>


            
            <x-slot:title>
                
                <img src="{{ auth()->user()->profile->picture ? asset('storage/' . auth()->user()->profile->picture) : 'https://static.vecteezy.com/system/resources/previews/036/280/651/original/default-avatar-profile-icon-social-media-user-image-gray-avatar-icon-blank-profile-silhouette-illustration-vector.jpg'}}" alt="logo" class="w-10 h-10 rounded-full object-cover border border-white">
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
        @else 
        <ul class="flex justify-between  items-center gap-3 font-semibold text-sm">
            <li>
                <button  
                @click="navOpen = !navOpen"
                class=" md:hidden">
                    <span class="material-symbols-rounded">
                        menu
                    </span>
                </button>

            </li>
            <li>
                <a href="/login" class="hidden md:block border border-[#187873] py-2 px-10 rounded-md hover:bg-[#009b72] duration-150">
                    تسجيل دخول
                </a>
            </li>
            <li >
                <a href="/register" class="hidden md:block  border border-[#187873] py-2 px-10 rounded-md hover:bg-[#009b72] duration-150">
                    تسجيل حساب
                </a>
            </li>
        </ul>
        @endauth
    </div>

    <div
    x-transition.origin.top.duration.150ms
    x-show="navOpen"
    @click.outside="navOpen = false"
    class="duration-150">
        <ul class=" mt-10 flex flex-col gap-3 items-center">
            <li>
                <a href="/login" class=" text-gray-100 duration-150">
                    تسجيل دخول
                </a>
            </li>
            <li >
                <a href="/register" class="text-gray-100 duration-150">
                    تسجيل حساب
                </a>
            </li>
        </ul>
    </div>

</nav>