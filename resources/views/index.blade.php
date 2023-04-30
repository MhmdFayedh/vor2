<x-layout>
    <x-navbar/>
    <main class=" container mx-auto p-10">
        <h1 class="py-10 text-2xl">تطوع وأصنع الفرق في مجتمعنا</h1>
        {{-- <h1>{{ $opportunity->name }}</h1> --}}

        <article class="border border-b-gray-300 hover:shadow-lg rounded-md"> 
            <div class="py-6 px-5 lg:flex">
                <div class=" flex-1 lg:ml-8">
                    <img src="https://picsum.photos/600?u=1" alt="" class="rounded-xl">
                </div>

                <div class=" flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-0">
                        <div class="space-x-2">
                            <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">فرصة تطوعية</a>
                        </div>
    
                        <div class="mt-5 text-2xl">
                            {{-- <h1>{{ $request->name }}</h1> --}}
                            <span class="text-sm mt-2 block text-gray-600">
                                {{-- تم نشره <time>{{ $request->created_at->format('d M Y') }}</time> --}}
                            </span>
                        </div>

                        <div class=" leading-6 text-md mt-6">
                            <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                            <p class="mt-5">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                        </div>
                    </header>
                    
                    <footer class="flex justify-between items-center">
                            <div>
                                <a href="" class=" hover:border-b border-indigo-400"> محمد الشمري</a>
                                <span class="block text-xs text-indigo-500">المشرف لدى مستشفى الملك خالد</span>
                            </div>

                            <div>
                                <button class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">
                                    <a href="">عرض</a>
                                </button>
                            </div>
                    </footer>
                </div>
            </div>
        </article>


        <div class="grid gap-4  grid-cols-6 mt-10">
            <div class=" col-span-6  lg:col-span-3">  
                <article class="border border-b-gray-300 hover:shadow-lg rounded-md"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=2" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                    <p class="mt-5">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <a href="" class="hover:border-b border-indigo-400"> محمد الشمري</a>
                                        <span class="block text-xs text-indigo-500">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-span-6  lg:col-span-3">  
                <article class="border border-b-gray-300 hover:shadow-lg rounded-md"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=3" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                    <p class="mt-5">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <a href="" class=" hover:border-b border-indigo-400">محمد الشمري</a>
                                        <span class="block text-xs text-indigo-500">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>
            {{--  --}}
            <div class=" col-span-6  lg:col-span-2">  
                <article class="border border-b-gray-300 hover:shadow-lg rounded-md"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=4" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                    <p class="mt-5">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <a href="" class=" hover:border-b border-indigo-400">محمد الشمري</a>
                                        <span class="block text-xs text-indigo-500">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>   
            <div class="col-span-6  lg:col-span-2">  
                <article class="border border-b-gray-300 hover:shadow-lg rounded-md"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=5" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                    <p class="mt-5">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <a href="" class=" hover:border-b border-indigo-400">محمد الشمري</a>
                                        <span class="block text-xs text-indigo-500">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div> 
            <div class="col-span-6  lg:col-span-2 ">  
                <article class="border border-b-gray-300 hover:shadow-lg rounded-md"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=6" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                    <p class="mt-5">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <a href="" class=" hover:border-b border-indigo-400"> محمد الشمري</a>
                                        <span class="block text-xs text-indigo-500">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>
</x-layout>