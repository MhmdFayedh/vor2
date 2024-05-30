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
            
            <form method="POST" action="/profile" enctype="multipart/form-data" class="border border-gray-100 rounded-lg py-10 px-4 w-full h-auto m-20 md:w-1/2 bg-white">
                @csrf
                @method('PUT')

                <h4 class="text-center font-bold text-2xl text-[#286275]">تعديل البيانات الشخصية </h4>

                <div class="mb-6">
                    <img style=""
                    src="{{ $user->profile->picture ? asset('storage/' . $user->profile->picture) : 'https://media.discordapp.net/attachments/1237107768910151700/1245428598320533574/IMG_2945.jpg?ex=6658b744&is=665765c4&hm=8479e5ff42f9b3a2cb54f175c3bc990c5f376bd9b629d3354f9484c8ad3cac7d&=&format=webp'}}"
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
                        <button type="submit" class="border border-white-900 rounded-md py-2 px-10 p-2  hover:text-white duration-100 hover:bg-[#187873] text-lg font-semibold text-[#286275]">تعديل</button>
                    </div>
                 
            </form>
        </section>
    </main>
</x-layout>







