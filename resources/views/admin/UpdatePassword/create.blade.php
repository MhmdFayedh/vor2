<x-admin-layout>

    
    <div class=" mt-24 w-full md:w-1/2 p-5">
       <div class="mb-2 flex items-center justify-between">
            <h1 class="text-xl font-bold font-semibold font-bold text-2xl text-[#286275]">تعديل حساب {{ $user->name }}</h1>
       </div>
    
        <form 
        class="border shadow py-2 px-2"
        action="/admin/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password">
                    رمز المستخدم القديم
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

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password">
                    رمز المستخدم الجديد
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
    </div>
</x-admin-layout>