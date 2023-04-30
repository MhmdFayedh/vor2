<x-admin-layout>
<div class="p-5 mt-10 lg:mt-36">
    <div class=" grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-6 border py-6 px-2 shadow">
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

        <div class="col-span-12 md:col-span-6 border py-6 px-2 shadow">
            <h1 class=" text-md flex justify-between mb-3">
                عدد الفرص النشطة النشطة
                <span class="material-symbols-rounded">
                    menstrual_health
                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($ActiveOpportunity) }}</span>
        </div>

        <div class="col-span-12 md:col-span-6 border py-6 px-2 shadow">
            <h1 class=" text-md flex justify-between mb-6">
                عدد المبادرات المعلقة
                <span class="material-symbols-rounded">
                    menstrual_health
                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($PendingIniative) }}</span>
        </div>


        
        <div class="col-span-12 md:col-span-6 border py-6 px-2 shadow">
            <h1 class=" text-md flex justify-between mb-6">
                عدد الفرص المعلقة
                <span class="material-symbols-rounded">
                    menstrual_health
                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($PendingOpportunity) }}</span>
        </div>


        <div class="col-span-12 md:col-span-8 border py-6 px-2 shadow">
            <h1 class=" text-md flex justify-between mb-6">
                عدد المستخدمين
                <span class="material-symbols-rounded text-green-600 text=md">
                    group
                </span>
            </h1>
            <span class="text-2xl font-bold">1200</span>

            <div class="w-full mt-5 border-t border-gray-200 py-6">
                <div class=" w-1/4 leading-7">
                    <p class="flex justify-between">مدراء النظام <span class="font-bold">15</span></p>
                    <p class="flex justify-between">المشرفين <span class="font-bold">40</span></p>
                    <p class="flex justify-between">المتطوعين <span class="font-bold">1195</span></p>
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-4 border py-6 px-2 shadow">
            <h1 class=" text-l flex justify-between mb-6">
                مجموع الطلبات 
                <span class="material-symbols-rounded">
                    menstrual_health
                </span>
            </h1>
            <span class="text-2xl font-bold">{{ count($requests) }}</span>
        </div>
    </div>
</div>    

</x-admin-layout>    