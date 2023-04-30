<x-layout>
    <x-navbar/>
    <main class=" container mx-auto">
        <article class="border border-b-gray-300 shadow-sm rounded-md"> 
            <div class="py-6 px-5 lg:flex">
                <div class=" flex-1 lg:ml-8">
                    <img src="https://picsum.photos/600?u=1" alt="" class="rounded-xl">
                </div>

                <div class=" flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-0">
                        <div class="space-x-2">
                            <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">{{ $request->classification }}</a>
                        </div>
    
                        <div class="mt-5 text-2xl">
                            <h1>{{ $request->name }}</h1>
                            <span class="text-sm mt-2 block text-gray-600">
                                تم نشره <time>{{ $request->created_at->format('d M Y') }}</time>
                            </span>
                        </div>

                        <div class=" leading-6 text-md mt-6">
                            <p class="">{{ $request->explained }}</p>
                        </div>
                    </header>
                    
                    <footer class="flex justify-between items-center">
                            <div>
                                <a href="" class=" hover:border-b border-indigo-400"> {{ $request->user->name }}</a>
                                <span class="block text-xs text-indigo-500">المشرف لدى مستشفى الملك خالد</span>
                            </div>

                            <div>
                                <button class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">
                                    <a href="">سجل</a>
                                </button>
                            </div>
                    </footer>
                </div>
            </div>
        </article>
    </main>
</x-layout>