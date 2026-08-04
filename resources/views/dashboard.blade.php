@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-2xl font-semibold text-gray-800">متابعة البلاغات</h3>
        <a href="{{ route('reports.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 transition">
            + تقديم بلاغ جديد
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">رقم البلاغ</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">عنوان البلاغ</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">التاريخ</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">الحالة</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($reports as $report)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $report->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $report->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $report->created_at->format('Y/m/d') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @php
                            $statusClass = match($report->status) {
                                'مقبولة' => 'bg-green-100 text-green-800',
                                'قيد المعالجة' => 'bg-yellow-100 text-yellow-800',
                                'مرفوضة' => 'bg-red-100 text-red-800',
                                default => 'bg-gray-100 text-gray-800'
                            };
                        @endphp
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                            {{ $report->status }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">لم تقم بتقديم أي بلاغات بعد.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    {{-- إضافة روابط الترقيم (Pagination) --}}
    <div class="mt-6">
        {{ $reports->links() }}
    </div>
</div>
@endsection