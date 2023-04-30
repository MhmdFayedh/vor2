<x-admin-layout>

    <div class=" mt-28">
        <div class="w-full">
            <h1 class="text-xl font-bold mb-3">أنشاء مستخدم جديد</h1>
            <form 
            action="/admin/users" 
            method="POST"
            class="w-3/4 border py-2 px-2 shadow rounded"
            >
            @csrf
                <div class="mb-6">
                    <label class="block mb-2  font-bold text-md text-gray-700 " for="name">
                        الاسم
                    </label>
                    <input 
                    class="border border-gray-400 py-2 px-2 w-full rounded" 
                    type="text" 
                    name="name" 
                    id="name" 
                    required>
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2  font-bold text-md text-gray-700 " for="email">
                        الايميل
                    </label>
                    <input 
                    class="border border-gray-400 py-2 px-2 w-full rounded" 
                    type="email" 
                    name="email" 
                    id="email" 
                    required>
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2  font-bold text-md text-gray-700 " for="passwordemail">
                        الرمز
                    </label>
                    <input 
                    class="border border-gray-400 py-2 px-2 w-full rounded" 
                    type="password" 
                    name="password" 
                    id="password" 
                    required>
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</P>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2  font-bold text-md text-gray-700 " for="role">
                        دور المستخدم
                    </label>
                    <select 
                    name="role" 
                    id="role"
                    class="border border-gray-400 py-2 px-2 w-full rounded"
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
                    class="py-2 px-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded duration-150"
                    >
                        انشاء المستخدم
                    </button>
                </div>

            </form>
        </div>
        
    </div>
</x-admin-layout>