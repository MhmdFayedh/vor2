<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10">
        <section class="flex justify-center">
            <form method="POST" action="/register" class="border rounded-lg py-20 px-5 w-full md:w-1/2">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="name">
                       الاسم
                    </label>
                    <input class="border border-gray-300 py-2 px-2 w-full rounded" type="text" name="name" id="name" required>
                    @error('name')
                        
                    @enderror
                </div>
    
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                            البريد الالكتروني
                        </label>
                        <input class="border border-gray-300 py-2 px-2 w-full rounded  text-left" type="text" name="email" id="email" required>
                        @error('email')
                            
                        @enderror
                    </div>
        
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password">
                            الرمز السري
                        </label>
                        <input class="border border-gray-300 py-2 px-2 w-full rounded" type="password" name="password" id="password" required>
                        @error('password')
                            
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password_confirmation">
                            تأكيد الرمز
                        </label>
                        <input class="border border-gray-300 py-2 px-2 w-full rounded" type="password" name="password_confirmation" id="password_confirmation" required>
                        @error('password_confirmation')
                            
                        @enderror
                    </div>

                    <div class="mb-6 flex justify-center">
                        <button type="submit" class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">تسجيل الحساب</button>
                    </div>
                 
            </form>
        </section>
    </main>
    </x-layout>
    