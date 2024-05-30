<x-admin-layout>

    
    <div class=" w-full md:w-1/2 p-5">
       <div class="flex items-center justify-between m-2">
            <h1 class="text-[#424178] font-semibold text-xl ">معلومات حساب {{ $user->name }}</h1>
            <a 
            class="  flex flex-col items-center justify-center hover:text-gray-600 text-gray-400 duration-150"
            href="{{ $user->id }}/edit">
                <span class="material-symbols-rounded bg-gray-400 text-white rounded-full p-1 ">
                    edit
                </span>
                <span class=" text-sm">تعديل</span>
            </a>
       </div>
        <div class="border border-gray-200 bg-white rounded-lg shadow-xl w-[26vw] h-[40vh] p-5">
            <p class=""> 
                <span class="font-semibold text-[#2e5b75]">اسم المستخدم:</span>
            </p>
             {{ $user->name }}
            <p>
                <span class="font-semibold text-[#2e5b75]">دور المستخدم:</span>
                
            </p>
            {{ $user->role }}
            <p>
                <span class="font-semibold text-[#2e5b75]">بريد المستخدم:</span>
            </p>
            {{ $user->email }}
            <p>
                <span class="font-semibold text-[#2e5b75] ">تاريخ أنشاء الحساب:</span>
               
            </p>
            {{ $user->created_at }}
            <p>
                <p>
                    <span class="font-semibold text-[#2e5b75] ">اخر تحديث للحساب:</span>
                
                </p>
                {{ $user->updated_at }}
            </p>
        </div>
        
    </div>
</x-admin-layout>