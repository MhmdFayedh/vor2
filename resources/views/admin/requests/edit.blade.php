<x-admin-layout>

    
    <div class=" mt-24 w-full md:w-1/2">
        <div class="mb-2 flex items-center justify-between">
            <h1 class="text-xl font-bold"> الطلب {{ $request->name }}</h1>
        </div>
    
        <form 
        class="border shadow py-2 px-2"
        action="/admin/requests/{{ $request->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-md text-gray-700 " for="status">
                    قبول أم رفض الطلب
                </label>
                <select 
                name="status"
                id="status"
                class="border border-gray-400 py-2 px-1 w-full"
                >
                    <option value=""></option>
                    <option value="accepted" {{ $request->status == 'accepted' ? 'selected' : '' }}>قبول</option>
                    <option value="rejected" {{ $request->status == 'rejected' ? 'selected' : '' }}>رفض</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-sm">{{ $message }}</P>
                @enderror
            </div>
            

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-md text-gray-700 " for="reason">
                    قبول أم رفض الطلب
                </label>

                <textarea 
                name="reason" 
                id="reason" 
                placeholder="أكتب سبب فحالة رفض الطلب"
                class="border border-gray-400 py-2 px-1 w-full"
                ></textarea>
                
                @error('reason')
                    <p class="text-red-500 text-sm">{{ $message }}</P>
                @enderror
            </div>
            <div class=" flex justify-center">
                <button 
                class="px-2 py-2 bg-blue-500 text-white rounded hover:bg-blue-400 duration-150"
                type="submit">
                    رفع حالة الطلب
                </button>
            </div>
        </form>    
    </div>
</x-admin-layout>