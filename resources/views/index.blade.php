<x-layout>
    <x-navbar/>
    <main class=" container mx-auto p-10">
        <h1 class="py-10 text-4xl text-center text-[#177a74] font-semibold">تطوع وأصنع الفرق في مجتمعنا</h1>
        {{-- <h1>{{ $opportunity->name }}</h1> --}}

        <article class="border border-b-gray-500 w-auto h-[63vh] bg-[#f5feff] hover:shadow-lg rounded-md"> 
            <div class="py-6 px-5 lg:flex">
                <div class=" flex-1 lg:ml-8" >
                    <img src="https://picsum.photos/600?u=1" alt="" class="rounded-xl h-4/6	w-[600px]">
                </div>

                <div class=" flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-0">
                        {{-- <div class="space-x-2">
                            <a href="" class="hover:shadow-lg border border-indigo-500 text-md py-2 px-4 rounded-lg text-indigo-500">فرصة تطوعية</a>
                        </div> --}}
    
                        <div class="mt-5 text-2xl">
                            {{-- <h1>{{ $request->name }}</h1> --}}
                            <span class="text-sm mt-2 block text-gray-600">
                                {{-- تم نشره <time>{{ $request->created_at->format('d M Y') }}</time> --}}
                            </span>
                        </div>

                        <div class=" leading-6 text-md mt-6">
                            <p class="mt-5 text-2xl leading-10">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                            {{-- <p class="mt-5 text-2xl leading-10">أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p> --}}
                            

                        </div>
                        
                        <div class="mt-5">
                            <a href="" class=" hover:border-b border-indigo-400 leading-9 text-2xl "> محمد الشمري</a>
                            <span class="block text-2xl leading-9 text-[#2d5e75]">المشرف لدى مستشفى الملك خالد</span>
                        </div>
                        
                    </header>
                </div>
            </div>
        </article>

        {{-- Section Two image and text --}}
        {{--             {{--  هنا بداية الجزء2 التي يوجد به صورتين ومحتوى شرح --}}


        <div class="grid gap-4 grid-cols-6 mt-10">
            <div class=" col-span-6  lg:col-span-3">  
                <article class="border border-b-gray-300 hover:shadow-lg rounded-xl w-[40vw] h-full bg-[#f5feff] "> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=2" alt="" class="rounded-xl h-4/6	w-[35vw] m-3">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg text-md py-2 px-4 rounded-lg border border-[#187873] text-[#177a74] hover:bg-[#187873] hover:text-white">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <p class="text-lg font-bold"> محمد الشمري</p>
                                        <span class="block text-xl text-center text-[#177a74]">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class=" px-10 py-2 text-white bg-gradient-to-r from-[#453a77] to-[#009b72] border-2 border-white bg-[#187873] rounded-xl  duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>

            {{-- secton two completing --}}


            <div class="col-span-6  lg:col-span-3">  
                <article class="border border-b-gray-300 hover:shadow-lg rounded-xl bg-[#f5feff] w-[40vw] h-full"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=3" alt="" class="rounded-xl h-4/6	w-[35vw] m-3">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg  text-md py-2 px-4 rounded-lg border border-[#187873] text-[#177a74] hover:bg-[#187873] hover:text-white">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <p class="text-lg font-bold">محمد الشمري</p>
                                        <span class="block text-xl text-center text-[#177a74]">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class=" px-10 py-2 text-white border-2 border-white bg-gradient-to-r from-[#453a77] to-[#009b72] rounded-xl hover:bg-gray-500 hover:text-gray-100 duration-100">
                                            <a href="" >عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>

            {{--  هنا نهاية الجزء2 التي يوجد به صورتين ومحتوى شرح --}}



            {{--  --}}
            <div class=" col-span-6  lg:col-span-2">  
                <article class="border border-b-gray-900 hover:shadow-lg rounded-md bg-gray-100"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=4" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg text-md py-2 px-4 rounded-lg border border-[#187873] text-[#177a74] hover:bg-[#187873] hover:text-white">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <p class="text-lg font-bold">محمد الشمري</p>
                                      <span class="block text-xl text-center text-[#177a74]">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class=" px-10 py-2 text-white border-2 border-white bg-gradient-to-r from-[#453a77] to-[#009b72] rounded-xl hover:bg-gray-500 hover:text-gray-100 duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>   
            <div class="col-span-6  lg:col-span-2">  
                <article class="border border-b-gray-900 hover:shadow-lg rounded-md bg-gray-100"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=5" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg border border-[#187873] text-[#177a74] hover:bg-[#187873] hover:text-white text-md py-2 px-4 rounded-lg ">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <p class="text-lg font-bold">محمد الشمري</p>
                                        <span class="block text-xl text-center text-[#177a74]">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class=" px-10 py-2 text-white border-2 border-white bg-gradient-to-r from-[#453a77] to-[#009b72] rounded-xl hover:bg-gray-500 hover:text-gray-100 duration-100">
                                            <a href="">عرض</a>
                                        </button>
                                    </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div> 
            <div class="col-span-6  lg:col-span-2 ">  
                <article class="border border-b-gray-900 hover:shadow-lg rounded-md bg-gray-100"> 
                    <div class="py-6 px-6 ">
                        <div class="">
                            <img src="https://picsum.photos/600?u=6" alt="" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="" class="hover:shadow-lg  text-md py-2 px-4 rounded-lg border border-[#187873] text-[#177a74] hover:bg-[#187873] hover:text-white">فرصة تطوعية</a>
                                </div>
            
                                <div class="mt-5 text-2xl">
                                    <h1>عنوان الفرصة او المبادرة التطوعية</h1>
                                    <span class="text-sm mt-2 block text-gray-600">
                                        تم نشره <time> 2021 Thu 4:50pm</time>
                                    </span>
                                </div>

                                <div class=" leading-6 text-md mt-6">
                                    <p >أنشأتُ حسابي على إنستقرام في 2014، حينما كانت المنصة مكتفية بصور مربّعة وفيديوهات لا تتجاوز خمس عشرة ثانية، وضمن دائرة معارفك. لكن بعد مرور تسع سنوات تطوّر إنستقرام كثيرًا، ليركّز على «الريلز»، ويعدّل الخوارزميات بحيث يشاركك محتوى من هم خارج دائرتك. </p>
                                </div>
                            </header>
                            
                            <footer class="flex justify-between items-center mt-6">
                                    <div>
                                        <p class="text-lg font-bold">محمد الشمري</p>
                                        <span class="block text-xl text-center text-[#177a74]">المشرف لدى مستشفى الملك خالد</span>
                                    </div>

                                    <div>
                                        <button class=" px-10 py-2 text-white border-2 border-white bg-gradient-to-r from-[#453a77] to-[#009b72] rounded-xl hover:bg-gray-500 hover:text-gray-100 duration-100">
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