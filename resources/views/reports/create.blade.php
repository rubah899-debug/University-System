@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-100">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">تقديم بلاغ جديد</h3>

    <form method="POST" action="{{ route('reports.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- الصف الأول: اختيار التصنيف والتاريخ (سنضيف التاريخ تلقائياً) --}}
            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">اختر تصنيف البلاغ</label>
                <select id="category_id" name="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                    <option value="">-- اختر نوع المشكلة --</option>
                    <option value="1">عطل في الشبكة</option>
                    <option value="2">مشكلة في النظام الأكاديمي</option>
                    <option value="3">دعم فني عام</option>
                </select>
            </div>

             <div class="mb-4">
                 <label for="title" class="block text-sm font-medium text-gray-700">عنوان البلاغ</label>
                 <input id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="text" required>
             </div>
        </div>

        {{-- حقل التفاصيل (مستطيل كبير) --}}
        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700">تفاصيل المشكلة</label>
            <textarea id="description" name="description" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
        </div>

        {{-- رفع الملفات والزر --}}
        <div class="flex items-center justify-between border-t border-gray-200 pt-6">
             <div class="flex items-center">
                <label for="file" class="cursor-pointer flex items-center text-indigo-600 hover:text-indigo-500">
                    <svg class="w-6 h-6 ms-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.414 6.586a6 6 0 108.486 8.486L21 13"></path></svg>
                    <span>إرفاق ملف (صورة أو مستند)</span>
                    <input id="file" name="file" type="file" class="sr-only">
                </label>
             </div>

            <button type="submit" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-indigo-700 transition">
                إرسال البلاغ
            </button>
        </div>
    </form>
</div>
@endsection