<x-layout>
    <x-navbar/>
        <main class="container mx-auto p-20">
            <section class="flex justify-center">
                <form method="POST" action="/supervisor/request" class="border border-gray-200 rounded-lg py-20 px-5 w-1/2 bg-white ">
                    @csrf

                    @if ($errors->any())


                    @endif

                    <h1 class="text-2xl font-semibold text-[#286275] text-center m-1">طلب فرصة/مبادرة تطوعية  </h1>
                    <x-form.input title="أسم الطلب" class="text-red-900"  name="name"/>
                    

                    <x-form.select name="type" title="نوع الطلب"> 
                        
                            <option value="" selected></option>
                            <option value="صحية">صحية</option>
                            <option value="تقنية">تقنية</option>
                            <option value="أجتماعية">أجتماعية</option>
                            <option value="أدارية">أدارية</option>
                    </x-form.select> 

                    <x-form.input title="مدة الطلب" name="duration" type="number"/>

                    <x-form.select name="classification" title="تصنيف الطلب">        
                        <option value="" selected></option>
                        <option value="initiative">مبادرة تطوعية</option>
                        <option value="opportunity">فرصة تطوعية</option>
                    </x-form.select>

                    <x-form.input title="الجهة الخارجية" name="external_side" />

                    <x-form.input title="المكان" name="area"/>

                    <x-form.input title="اسم المنشأة" name="facility_name"/>

                    <x-form.input title="أسم القسم" name="department"/>

                    <x-form.input title="عدد المتطوعين" name="volunteers_number" type="number"/>

                    <x-form.input title="المهنة المطلوبة" name="profession"/>
                    
                    <x-form.input name="start_date" title="تاريخ بداية الطلب" type="date"/>

                    <x-form.input name="finished_date" title="تاريخ نهاية الطلب" type="date"/>

                    <x-form.input name="start_time" title="وقت بداية الطلب" type="time"/>

                    <x-form.input name="finished_time" title="وقت نهاية الطلب" type="time"/>

                    <x-form.textarea name="explained" title="شرح الطلب التطوعي"/>

                    <x-form.textarea name="volunteers_role" title="أدوار المتطوعين"/>

                    <div class=" text-sm text-red-400">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-6 flex justify-center">
                        
                        <button type="submit" class=" my-4 py-2 px-5 duration-150 border border-[#286275] rounded-md py-2 px-10  hover:text-white hover:bg-[#187873] text-lg font-semibold text-[#286275] ml-8">
                            رفع الطلب
                        </button>
                    </div>  
                </form>
            <section class="flex justify-center">
        </main>
</x-layout>