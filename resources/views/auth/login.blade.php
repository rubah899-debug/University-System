@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row items-center justify-center bg-gray-50">
    
    {{-- قسم الترحيب (الذي رسمتِه) --}}
    <div class="md:w-1/2 p-8 text-center md:text-right">
        <x-application-logo class="h-20 w-20 mx-auto md:mx-0 mb-6" /> {{-- شعار الدائرة واليد --}}
        <h1 class="text-4xl font-bold text-gray-900 mb-4">مرحباً بك</h1>
        <p class="text-xl text-gray-600">النظام الأكاديمي / الدعم الوظيفي</p>
    </div>

    {{-- نموذج تسجيل الدخول --}}
    <div class="md:w-1/2 max-w-md w-full p-8 bg-white rounded-lg shadow-md border border-gray-100">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">تسجيل الدخول</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="employee_id" class="block text-sm font-medium text-gray-700">الرقم الوظيفي / الرقم الجامعي</label>
                <input id="employee_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="text" name="employee_id" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">كلمة المرور</label>
                <input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required>
            </div>

            <div class="flex items-center justify-between mb-6">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">تذكرني</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-500" href="{{ route('password.request') }}">
                        هل نسيت كلمة المرور؟
                    </a>
                @endif
            </div>

            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                تسجيل الدخول
            </button>

             <div class="mt-6 text-center">
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-500">
                    ليس لديك حساب؟ قم بإنشاء حساب جديد!
                </a>
            </div>
        </form>
    </div>
</div>
@endsection