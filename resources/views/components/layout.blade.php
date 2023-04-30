<!doctype html>
<html>
<head>
    <meta dir="rtl">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>html{visibility: hidden;opacity:0;}</style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>VOR</title>
</head>
<body class="">
    {{ $slot }}    

    <footer class="pt-5">
        <div class="flex justify-center items-center  flex-col bg-slate-200 text-gray-500">
            <p>هذا الموقع صُنع لأعادة مشروع قديم لأختبار مهاراتي</p>
            <p> بواسطة 
                <a href="https://mofayedh.com" class=" hover:underline">محمد الفايض</a>
            </p>
        </div>
        </footer>
<div id="loader" class="loader">
    <img src="{{ asset('images/hhc_logo.png') }}" alt="">
</div>
</body>
@if (session('success'))
    <div class="fixed bottom-6 right-6 bg-[#009b72] py-3 px-3 rounded-xl select-none ">
        <p class="text-white">{{ session('success') }}</p>
    </div>
@endif

</html>