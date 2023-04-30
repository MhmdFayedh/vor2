<x-admin-layout>

    
    <div class=" mt-24 w-full md:w-1/2 p-5">
       <div class="mb-2 flex items-center justify-between">
            <h1 class="text-xl font-bold">معلومات حساب {{ $user->name }}</h1>
            <a 
            class="flex flex-col items-center justify-center hover:text-gray-600 text-gray-400 duration-150"
            href="{{ $user->id }}/edit">
                <span class="material-symbols-rounded">
                    edit
                </span>
                <span class=" text-sm">تعديل</span>
            </a>
       </div>
        <div class="border shadow py-2 px-2">
            <p class=""> 
                <span class="font-bold">اسم المستخدم:</span>
                {{ $user->name }}
            </p>
            <p>
                <span class="font-bold">دور المستخدم:</span>
                {{ $user->role }}
            </p>
            <p>
                <span class="font-bold">بريد المستخدم:</span>
                {{ $user->email }}
            </p>
            <p>
                <span class="font-bold">تاريخ أنشاء الحساب:</span>
                {{ $user->created_at }}
            </p>

            <p>
                <p>
                    <span class="font-bold">اخر تحديث للحساب:</span>
                    {{ $user->updated_at }}
                </p>
            </p>
        </div>
        
    </div>
</x-admin-layout>