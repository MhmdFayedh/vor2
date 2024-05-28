<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10">
        <section class="flex justify-center">
           
            <form method="POST" action="/register" class="border rounded-lg py-20 px-5 w-full h-[80vh] m-9 md:w-1/2 bg-white">
                <h4 class="text-center font-bold text-2xl text-[#286275]">تسجيل حساب جديد</h4>

                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold" for="name">
                       الاسم
                    </label>
                    <input class="border border-gray-300 py-2 px-2 w-full rounded" type="text" name="name" id="name" required>
                    @error('name')
                        
                    @enderror
                </div>
    
                    <div class="mb-6">
                        <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold" for="email">
                            البريد الالكتروني
                        </label>
                        <input class="border border-gray-300 py-2 px-2 w-full rounded  text-left" type="text" name="email" id="email" required>
                        @error('email')
                            
                        @enderror
                    </div>
        
                    <div class="mb-6">
                        <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold" for="password">
                            الرمز السري
                        </label>
                        <input class="border border-gray-300 py-2 px-2 w-full rounded" type="password" name="password" id="password" required>
                        @error('password')
                            
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold" for="password_confirmation">
                            تأكيد الرمز
                        </label>
                        <input class="border border-gray-300 py-2 px-2 w-full rounded" type="password" name="password_confirmation" id="password_confirmation" required>
                        @error('password_confirmation')
                            
                        @enderror
                    </div>

                    <div class="mb-6 flex justify-center">
                        <button type="submit" class="border border-white-900 rounded-md py-2 px-10  hover:text-white duration-100 hover:bg-[#009b72] text-lg font-semibold text-[#286275]">تسجيل الحساب</button>
                    </div>
                 
            </form>
        </section>
    </main>
    </x-layout>
    