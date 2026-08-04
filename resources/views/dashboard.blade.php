<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('لوحة التحكم') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- بطاقة التوجيه السريع لنظام البلاغات -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6 text-center">
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                    مرحباً بكِ في نظام البلاغات الجامعي
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    اضغطي على الزر أدناه للانتقال المباشر إلى صفحة إدارة البلاغات وإنشاء بلاغ جديد:
                </p>
                <a href="/reports" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-md">
                    🛡️ الانتقال إلى صفحة البلاغات
                </a>
            </div>

            <!-- المحتوى الافتراضي للداشبورد -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>