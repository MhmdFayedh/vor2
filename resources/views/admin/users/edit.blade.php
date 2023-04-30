<x-admin-layout>

    
    <div class=" mt-24 w-full md:w-1/2 p-5">
       <div class="mb-2 flex items-center justify-between">
            <h1 class="text-xl font-bold">تعديل حساب {{ $user->name }}</h1>
       </div>
    
        <form 
        class="border shadow py-2 px-2"
        action="/admin/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="name">
                    اسم المستخدم
                </label>
                <input 
                class="border border-gray-400 py-2 px-1 w-full" 
                type="text" 
                name="name" 
                id="name" 
                
                value="{{ $user->name }}"
                >
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</P>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="role">
                    دور المستخدم
                </label>
                <select 
                name="role" 
                id="role"
                class="border border-gray-400 py-2 px-1 w-full"
                >
                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>مدير نظام</option>
                    <option value="supervisor" {{ $user->role === 'supervisor' ? 'selected' : '' }}>مشرف</option>
                    <option value="volunteer" {{ $user->role === 'volunteer' ? 'selected' : '' }}>متطوع</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-sm">{{ $message }}</P>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                    بريد المستخدم
                </label>
                <input 
                class="border border-gray-400 py-2 px-1 w-full" 
                type="text" 
                name="email" 
                id="email" 
                value="{{ $user->email }}"
                >
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</P>
                @enderror
            </div>            

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password">
                    رمز المستخدم
                </label>
                <input 
                class="border border-gray-400 py-2 px-1 w-full" 
                type="password" 
                name="password" 
                id="password"
                value="{{ $user->password }}" 
                
                >
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</P>
                @enderror
            </div>

            <div>
                <button 
                class="px-2 py-2 bg-blue-500 text-white rounded hover:bg-blue-400 duration-150"
                type="submit">
                    تعديل المستخدم
                </button>
            </div>
        </form>  
        
        <a href="">
            تحديث المستخدم
        </a>
    </div>
</x-admin-layout>