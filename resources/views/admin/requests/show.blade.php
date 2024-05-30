<x-admin-layout>
    <div class="border border-gray-200 p-2 px-2 shadow-xl bg-white rounded-xl ">
        <div class="flex justify-between m-5">
            <h1 class="text-2xl text-[#3e4378] font-semibold">تفاصيل الطلب {{ $request->name }}</h1>
            <a class="flex flex-col items-center justify-center hover:text-gray-600 text-gray-400 duration-150" href="{{ $request->id }}/edit">
                <span class="material-symbols-rounded bg-gray-400 rounded-full text-white p-1">edit</span>
                <span class=" text-sm text-black">تعديل</span>
            </a>
        </div>
        <div class="mt-5 grid grid-cols-6 gap-3">
            <div class=" border py-2 px-1 text-center col-span-6 md:col-span-3 shadow-xl bg-white-100  rounded-xl">
                <h2 class=" text-lg font-bold">تصنيف الطلب</h2>
                <p>{{ $request->classification }}</p>
            </div>
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl bg-white-100 rounded-xl">
                <h2 class=" text-lg font-bold">نوع الطلب</h2>
                <p>{{ $request->type }}</p>
            </div>
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl bg-gray-200  rounded-xl">
                <h2 class=" text-lg font-bold">مدة الطلب</h2>
                <p>{{ $request->duration }} يوم</p>
            </div>
            @if ($request->classification === 'initiative')
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl  rounded-xl">
                <h2 class=" text-lg font-bold">الجهة الخارجية للطلب</h2>
                <p>{{ $request->external_side }}</p>
            </div>
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl   rounded-xl">
                <h2 class=" text-lg font-bold">المكان</h2>
                <p>{{ $request->area }}</p>
            </div>
            @endif
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl bg-gray-200 rounded-xl">
                <h2 class=" text-lg font-bold">التخصص المطلوب</h2>
                <p>{{ $request->profession }}</p>
            </div>
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl bg-[#f5feff]  rounded-xl">
                <h2 class=" text-lg font-bold">المنشأة</h2>
                <p>{{ $request->facility_name }}</p>
            </div>
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl bg-[#f5feff]  rounded-xl">
                <h2 class="text-lg font-bold">القسم</h2>
                <p>{{ $request->department }}</p>
            </div>
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl bg-green-50 rounded-xl">
                <h2 class=" text-lg font-bold">تاريخ بداية الطلب</h2>
                <p>{{ $request->start_date }}</p>
            </div>
            <div class="border py-2 px-1 rounded text-center col-span-6 md:col-span-3 shadow-xl bg-green-50  rounded-xl">
                <h2 class=" text-lg font-bold">تاريخ نهاية الطلب</h2>
                <p>{{ $request->finished_date }}</p>
            </div>
            <div class="border py-2 px-1 rounded-x; text-center col-span-6 md:col-span-3 shadow-xl  bg-[#fff1c7]  rounded-xl">
                <h2 class=" text-lg font-bold">وقت بداية الطلب</h2>
                <p>{{ $request->start_time }}</p>
            </div>
            <div class="border py-2 px-1 rounded-xl text-center col-span-6 md:col-span-3 shadow-xl bg-[#fff1c7]   rounded-xl">
                <h2 class=" text-lg font-bold">وقت نهاية الطلب</h2>
                <p>{{ $request->finished_time }}</p>
            </div>
            <div class="border py-2 px-1 rounded-xl text-center col-span-6 bg-[#3e4378] ">
                <h2 class=" text-lg font-bold">عدد المتطوعين</h2>
                <p>{{ $request->volunteers_number }} متطوع</p>
            </div>
            <div class="border py-2 px-1 rounded-xl text-center col-span-6  bg-[#8c8fba]">
                <h2 class=" text-lg font-bold">شرح الطلب</h2>
                <p>{{ $request->explained }}</p>
            </div>
            <div class="border py-2 px-1 rounded-xl text-center col-span-6 bg-gray-50 ">
                <h2 class=" text-lg font-bold">أدوار المتطوعين</h2>
                <p>{{ $request->volunteers_role }}</p>
            </div>
        </div>
    </div>
</x-admin-layout>