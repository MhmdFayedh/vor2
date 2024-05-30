<x-admin-layout>

{{--     
    <div class=" mt-24 ">
       <div class="mb-2 flex items-center justify-between">
       </div> --}}
    
        <form 
        class="border shadow-xl border-gray-200 bg-white p-3 py-2 px-2 w-[50vw] h-[73vh] m-9"
        action="/admin/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <h1 class=" mt-6 text-center font-bold text-2xl text-[#286275] ">تعديل حساب {{ $user->name }}</h1>

                <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold" for="name">
                    اسم المستخدم
                </label>
                <input 
                class=" py-2 px-1 w-full border border-gray-300 py-2 px-2 w-full rounded bg-white"
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
                <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold " for="role">
                    دور المستخدم
                </label>
                <select 
                name="role" 
                id="role"
                class="border border-gray-300 py-2 px-2 w-full rounded bg-white py-2 px-1 w-full"
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
                <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold" for="email">
                    بريد المستخدم
                </label>
                <input 
                class=" py-2 px-1 w-full border border-gray-300 py-2 px-2 w-full rounded bg-white" 
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
                <label class="block mb-2 uppercase text-lg text-[#177a74] font-semibold" for="password">
                    رمز المستخدم
                </label>
                <input 
                class=" py-2 px-1 w-full border border-gray-300 py-2 px-2 w-full rounded bg-white" 
                type="password" 
                name="password" 
                id="password"
                value="{{ $user->password }}" 
                
                >
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</P>
                @enderror
            </div>

            <div class="flex justify-center col">
                <button 
                class="border border-white-900 rounded-md py-2 px-10  hover:text-white duration-100 hover:bg-[#009b72] text-lg font-semibold text-[#286275]"
                type="submit">
                    تعديل المستخدم
                </button>
            </div>

        </form>  
   
    </div>
</x-admin-layout>