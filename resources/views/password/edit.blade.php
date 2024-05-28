<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10">
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
                        <button type="submit" class=" text-[#286275] border border-white-900 rounded-xl py-2 px-10  hover:text-white duration-100 hover:bg-[#009b72] text-lg font-semibold">تعديل</button>
                    </div>
            </form>
        </section>
    </main>
    </x-layout>