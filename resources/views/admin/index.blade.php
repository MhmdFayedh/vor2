<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<x-admin-layout>
<div class="">
    <div class=" grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-6 border py-6 px-2 shadow-lg rounded-xl  bg-white border-gray-200 ">
            <h1 class=" text-md flex justify-between mb-3">
                عدد المبادرات النشطة
                <span class="material-symbols-rounded text">
                    menstrual_health
                </span>
            </h1>
            <div class="flex flex-col gap-4">
                <span class="text-2xl font-bold">{{ count($ActiveIniative) }}</span>
                <div class="">
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6 border py-6 px-2  shadow-lg rounded-xl  bg-gray-200 border-gray-200 ">
            <h1 class=" text-md flex justify-between mb-3">
                عدد الفرص النشطة النشطة
                <span class="material-symbols-rounded text=md">
                    <i class='bx bx-bookmark-alt-minus'>

                    </i>
                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($ActiveOpportunity) }}</span>
        </div>

        <div class="col-span-12 md:col-span-6 border py-6 px-2 bg-[#fff1c7] shadow-lg rounded-xl border-gray-200">
            <h1 class=" text-md flex justify-between mb-6">
                عدد المبادرات المعلقة
                <span class="material-symbols-rounded text=md">
                    <i class='bx bx-dna'></i>
                                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($PendingIniative) }}</span>
        </div>


        
        <div class="col-span-12 md:col-span-6 border py-6 px-2 bg-[#f5feff] shadow-lg rounded-xl border-gray-200">
            <h1 class=" text-md flex justify-between mb-6">
                عدد الفرص المعلقة
                <span class="material-symbols-rounded text=md">
                    <i class='bx bx-dna'></i>
                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($PendingOpportunity) }}</span>
        </div>


        <div class="col-span-12 md:col-span-8 border py-6 px-2 shadow-lg rounded-xl border-gray-200 bg-white w-[55vw] ">
            <h1 class=" text-md flex justify-between mb-6">
                عدد المستخدمين
                <span class="material-symbols-rounded text=md ">
                    group
                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($users)}}</span>

            <div class="w-full mt-5 border-t border-gray-200 py-6">
                <div class=" w-1/4 leading-7">
                    <p class="flex justify-between">مدراء النظام <span class="font-bold">{{count($adminUsers)}}</span></p>
                    <p class="flex justify-between">المشرفين <span class="font-bold">{{count($supervisorUsers)}}</span></p>
                    <p class="flex justify-between">المتطوعين <span class="font-bold">{{count($volunteerUsers)}}</span></p>
                </div>
            </div>
        </div>

   
    </div>

    <div class="col-span-12 md:col-span-4 border py-6 px-2 bg-green-50 mt-4 ">
        <h1 class=" text-l flex justify-between mb-6">
            مجموع الطلبات 
            <span class="material-symbols-rounded text=md">
                <i class='bx bx-notepad'></i>
            </span>
        </h1>
        <span class="text-2xl font-bold">{{ count($requests) }}</span>
    </div>
</div>    

</x-admin-layout>    