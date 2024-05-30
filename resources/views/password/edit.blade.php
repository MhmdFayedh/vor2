<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10">
        <a href="{{ url()->previous() }}" class="flex gap-1"><?xml version="1.0" ?>
            <svg 
            fill="#000000" 
            width="30px" 
            height="30px" 
            viewBox="0 0 200 200" 
            transform="scale(-1, 1)"
            data-name="Layer 1"
            id="Layer_1"
            xmlns="http://www.w3.org/2000/svg"
            ><title/><path 
            d="M160,89.75H56l53-53a9.67,9.67,0,0,0,0-14,9.67,9.67,0,0,0-14,0l-56,56a30.18,30.18,0,0,0-8.5,18.5c0,1-.5,1.5-.5,2.5a6.34,6.34,0,0,0,.5,3,31.47,31.47,0,0,0,8.5,18.5l56,56a9.9,9.9,0,0,0,14-14l-52.5-53.5H160a10,10,0,0,0,0-20Z"/>
        </svg></a>
        <section class="flex justify-center">
            <form method="POST" action="/password" class="border border-gray-400 rounded-lg py-20 px-5 w-full md:w-1/2 bg-white m-16 ">
                @csrf
                @method('PUT')
                    <div class="mb-6">
                        <label class="block mb-4  font-semibold font-bold text-2xl text-[#286275] " for="password">
                            الرمز السري الجديد
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="password" name="password" id="password">
                        @error('password')
                            <p class="text-red-400 text-lg">{{ $message }}</P>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-4  font-semibold font-bold text-2xl text-[#286275]  " for="password_confirmation">
                            كرر الرمز السري الجديد
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="password" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
                    
    
                    <div class="mb-6 flex justify-center">
                        <button type="submit" class=" text-[#286275] border border-white-900 rounded-xl py-2 px-10  hover:text-white duration-100 hover:bg-[#187873] text-lg font-semibold">تعديل</button>
                    </div>
            </form>
        </section>
    </main>
    </x-layout>