<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام البلاغات الجامعي</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Cairo', sans-serif; background-color: #F3F4F6; }
    </style>
</head>
<body>
    @include('layouts.navigation') {{-- شريط التنقل --}}

    <main class="container mx-auto p-4 md:p-8">
        @yield('content') {{-- مكان عرض المحتوى --}}
    </main>
</body>
</html>