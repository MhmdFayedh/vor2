<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10">
        <section class="flex justify-center">
            <form method="POST" action="/profile" enctype="multipart/form-data" class="border rounded-lg py-20 px-5 w-full md:w-1/2">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <img 
                    style=""
                    src="{{ asset('storage/' . $user->profile->picture) }}" 
                    alt="User Picture"
                    class=" w-10 h-10 mb-1 rounded-full object-cover"
                    >
                    <input class="border border-gray-400 py-2 w-full" type="file" name="picture" id="picture">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>
                
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="name">
                            الاسم
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="text" name="name" id="name" value="{{ $user->name }}">
                        @error('name')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                            البريد الالكتروني
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="text" name="email" id="email" value="{{ $user->email }}">
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="cv">
                            السيرة الذاتية
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="file" name="cv" id="cv" value="{{ $user->profile->cv }}">
                        @error('cv')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="region">
                            المنطقة
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="text" name="region" id="region" value="{{ $user->profile->region }}">
                        @error('region')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="city">
                            المدينة
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="text" name="city" id="city" value="{{ $user->profile->city }}">
                        @error('city')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="job_title">
                            المسمى الوظيفي
    
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="text" name="job_title" id="job_title" value="{{ $user->profile->job_title }}">
                        @error('job_title')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6 flex justify-center">
                        <button type="submit" class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">تعديل</button>
                    </div>
                 
            </form>
        </section>
    </main>
</x-layout>







