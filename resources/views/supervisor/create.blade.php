<x-layout>
    <x-navbar/>
        <main class="container mx-auto p-20">
            <section class="flex justify-center">
                <form method="POST" action="/supervisor/request" class="border rounded-lg py-20 px-5 w-1/2">
                    @csrf

                    @if ($errors->any())
                    <div class=" text-xl text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <x-form.input title="أسم الطلب" name="name"/>

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

                    <x-form.input title="الجهة الخارجية" name="external_side"/>

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

                    <div class="mt-6 flex justify-center">
                        <button type="submit" class="border border-indigo-500 py-2 px-10 rounded hover:bg-indigo-500 hover:text-white duration-150">
                            رفع الطلب
                        </button>
                    </div>
                </form>
            <section class="flex justify-center">
        </main>
</x-layout>