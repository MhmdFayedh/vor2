<x-admin-layout>
   
    
    <div class=" md:w-1/2 bg-white border border-gray-300 rounded-xl shadow-lg ">
        <div class="mb-2 flex items-center justify-between p-2 ">
            <h1 class="text-xl font-bold"> الطلب {{ $request->name }}</h1>
        </div>
    
        <form 
        class="border shadow py-2 px-2"
        action="/admin/requests/{{ $request->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label class="block mb-2  font-bold text-md text-gray-700 " for="status">
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
                <label class="block mb-2 font-bold text-md text-gray-700 " for="reason">
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
                class="border border-[#286275] rounded-md py-2 px-10  hover:text-white duration-100 hover:bg-[#009b72] text-lg font-semibold text-[#286275]"
                type="submit">
                    رفع حالة الطلب
                </button>
            </div>
        </form>    
    </div>
</x-admin-layout>