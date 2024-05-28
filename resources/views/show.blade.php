<x-layout>
    <x-navbar/>
    <main class=" container mx-full">
        <article class="border border-b-gray-300 shadow-sm rounded-md"> 
            <div class="py-6 px-5 lg:flex">
                <div class=" flex-1 lg:ml-8 ">
                    <img src="https://picsum.photos/600?u=1" alt="" class="rounded-xl h-4/6	w-[600px] ">
                </div>

                <div class=" flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-10">
                        <div class="space-x-2">
                            <a href="" class="text-md py-2 px-4 rounded-lg border border-[#187873] text-[#177a74]">{{ $request->classification }}</a>
                        </div>
    
                        <div class="mt-5 font-semibold text-2xl text-[#286275]">
                            <h1>{{ $request->name }}</h1>
                            <span class="text-lg mt-2 block text-gray-600">
                                تم نشره <time>{{ $request->created_at->format('d M Y') }}</time>
                            </span>
                        </div>

                        <div class=" leading-6 text-md mt-6 ">

                            <p class="">{{ $request->explained }}
                            </p>
                        </div>

                        <section class="flex justify-between items-center mt-2">
                            <div>
                                <h1 href="" class="block text-xl m-1 "> {{ $request->user->name }}</h1>
                                <span class="block text-xl text-center text-[#177a74]">المشرف لدى مستشفى الملك خالد</span>
                            </div>

                    </section>
                    </header>
                    
                 
                </div>
            </div>
        </article>
    </main>
</x-layout>