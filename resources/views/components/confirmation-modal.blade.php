@props(['deleteRoute', 'username' => ''])

<div>
    <button onclick="showModal('{{ $deleteRoute }}')", class="">
        {{$slot}}
    </button>

    <!-- Modal -->
    <div id="confirmation-modal" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="inline-block align-bottom bg-white rounded-lg text-right overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-right">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                عملية حذف
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    متأكد من حذف المستخدم <b>{{ $username }}</b>, لا يمكن التراجع  بعد الحذف
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <form id="delete-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            حذف
                        </button>
                    </form>
                    <button onclick="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        الغاء
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showModal(deleteRoute, name) {
        document.getElementById('delete-form').action = deleteRoute;
        document.getElementById('confirmation-modal').classList.remove('hidden');
    }

    function hideModal() {
        document.getElementById('confirmation-modal').classList.add('hidden');
    }
</script>
