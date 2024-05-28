<x-layout>
<x-navbar/>



    <section class="flex justify-center items-center  m-16 ">
        <form method="POST" action="/password/check" enctype="multipart/form-data" class=" items-center border border-gray-400rounded-lg py-20 px-5 w-full md:w-1/2 bg-white">
            @csrf
                <div class="mb-6">
                    <label class="block mb-4  font-semibold font-bold text-2xl text-[#286275] " for="password">
                        الرمز السري الحالي
                    </label>
                    <input class="border border-gray-400 rounded-xl py-2 w-full " type="password" name="password" id="password">
                    @if (session('failed'))
                        <p class="text-red-500 text-sm">{{ session('failed') }}</P>
                    @endif
                        
                </div>
                <div class="mb-6 flex justify-center">
                    <button type="submit" class=" text-[#286275] border border-white-900 rounded-xl py-2 px-10  hover:text-white duration-100 hover:bg-[#009b72] text-lg font-semibold">تعديل</button>
                </div>
        </form>
    </section>

</x-layout>