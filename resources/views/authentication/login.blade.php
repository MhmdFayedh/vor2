<x-layout>
<x-navbar/>
<main class="container mx-auto px-5 md:p-20">
    <section class="flex justify-center">
        <form method="POST" action="/login" class="border rounded-lg py-20 px-5 w-full md:w-1/2">
            @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                        البريد الالكتروني
                    </label>
                    <input class="border border-gray-300 py-2 w-full rounded" type="text" name="email" id="email" required>
                    @error('email')
                        <p class="text-red-500 text-sm ">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password">
                        الرقم السري
                    </label>
                    <input class="border border-gray-300 py-2 w-full rounded" type="password" name="password" id="password" required>
                    @error('password')
                        <p class="text-red-500 text-sm ">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 flex justify-center">
                    <button type="submit" class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">تسجيل دخولك</button>
                </div>
                
            </form>
        </section>
</main>
</x-layout>


{{-- Extract this as componntn or just use on registerion form --}}
{{-- 
<div class="border py-2">
    <h1 class="py-1 mr-3 text-xl"> متطلبات الرمز</h1>
     <ul class=" text-sm space-y-2 mr-3">
         <li class="text-green-500">يجب أن يكون على الأقل 8 حروف</li>
         <li class="text-green-500 ">يجب ان يتكون من حروف كبيره وصغيره  </li>
         <li class="text-red-500">يجب أن يحتوي على أرقام</li>
         <li class="text-red-500">يجب أن يحتوي على رموز</li>
     </ul>
 </div> --}}