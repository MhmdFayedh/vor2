<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10">
        <section class="flex justify-center">
            
            <form method="POST" action="/profile" enctype="multipart/form-data" class="border border-gray-100 rounded-lg py-10 px-4 w-full h-auto m-20 md:w-1/2 bg-white">
                @csrf
                @method('PUT')

                <h4 class="text-center font-bold text-2xl text-[#286275]">تعديل البيانات الشخصية </h4>

                <div class="mb-6">
                    <img style=""
                         src="{{ asset('storage/' . $user->profile->picture) }}"
                         class="w-20 h-20 mb-1 rounded-full object-cover border border-gray-900">
                    <span class="text-lg block mb-2 font-bold text-lg text-[#177a74] font-semibold">الصورة الشخصية</span>
                    <input class="border border-gray-400 py-2 w-full rounded-md bg-gray-50" type="file" name="picture" id="picture">
                    @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                
                    <div class="mb-6">
                        <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="name">
                            الاسم
                        </label>
                        <input class="border border-gray-400 py-2 w-full rounded-md bg-gray-50" type="text" name="name" id="name" value="{{ $user->name }}">
                        @error('name')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    
                    <div class="mb-6">
                        <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="email">
                            البريد الالكتروني
                        </label>
                        <input class="border border-gray-400 py-2 w-full rounded-md bg-gray-50" type="text" name="email" id="email" value="{{ $user->email }}">
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="cv">
                            السيرة الذاتية
                        </label>
                        <input class="border border-gray-400 py-2 w-full rounded-md bg-gray-50" type="file" name="cv" id="cv" value="{{ $user->profile->cv }}">
                        @error('cv')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="region">
                            المنطقة
                        </label>
                        <input class="border border-gray-400 py-2 w-full rounded-md bg-gray-50" type="text" name="region" id="region" value="{{ $user->profile->region }}">
                        @error('region')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold " for="city">
                            المدينة
                        </label>
                        <input class="border border-gray-400 py-2 w-full rounded-md bg-gray-50" type="text" name="city" id="city" value="{{ $user->profile->city }}">
                        @error('city')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2  font-bold text-lg text-[#177a74] font-semibold" for="job_title">
                            المسمى الوظيفي
    
                        </label>
                        <input class="border border-gray-400 py-2 w-full rounded-md bg-gray-50" type="text" name="job_title" id="job_title" value="{{ $user->profile->job_title }}">
                        @error('job_title')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6 flex justify-center">
                        <button type="submit" class="border border-white-900 rounded-md py-2 px-10 p-2  hover:text-white duration-100 hover:bg-[#009b72] text-lg font-semibold text-[#286275]">تعديل</button>
                    </div>
                 
            </form>
        </section>
    </main>
</x-layout>







