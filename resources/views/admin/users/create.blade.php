<x-navbar/>

<x-admin-layout>

        <div class="w-full">
            <form 
            action="/admin/users" 
            method="POST"
            class="w-3/4 border border-gray-200 bg-white px-4 shadow rounded"
            >
            @csrf
                <div class="mb-6">
                    <h1 class="font-bold text-center font-bold text-2xl text-[#286275] m-6">أنشاء مستخدم جديد</h1>

                    <label class="block mb-2  text-xl text-[#177a74] font-semibold mb-2 " for="name">
                        الاسم
                    </label>
                    <input 
                    class="border border-gray-200 py-2 px-2 w-full rounded bg-white" 
                    type="text" 
                    name="name" 
                    id="name" 
                    required>
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2  text-xl text-[#177a74] font-semibold mb-2 " for="email">
                        الايميل
                    </label>
                    <input 
                    class="border border-gray-200 py-2 px-2 w-full rounded bg-white" 
                    type="email" 
                    name="email" 
                    id="email" 
                    required>
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2  text-xl text-[#177a74] font-semibold mb-2" for="passwordemail">
                        الرمز
                    </label>
                    <input 
                    class="border border-gray-200 py-2 px-2 w-full rounded bg-white" 
                    type="password" 
                    name="password" 
                    id="password" 
                    required>
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-xl text-[#177a74] font-semibold mb-2 " for="role">
                        دور المستخدم
                    </label>
                    <select 
                    name="role" 
                    id="role"
                    class="border border-gray-200 py-2 px-2 w-full rounded  bg-white"
                    >
                        <option value=""></option>
                        <option value="admin">مدير نظام</option>
                        <option value="supervisor">مشرف</option>
                        <option value="volunteer">متطوع</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>
                
                <div class="flex justify-center">
                    <button 
                    type="submit"
                    class=" text-[#286275] border border-white-900 rounded-md py-2 px-10 mb-5  hover:text-white duration-100 hover:bg-[#009b72] text-lg font-semibold"
                    >
                        انشاء المستخدم
                    </button>
                </div>

            </form>
        </div>
        

</x-admin-layout>