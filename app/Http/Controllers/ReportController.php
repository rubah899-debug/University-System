<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    // عرض صفحة عرض جميع بلاغات الطالب
    public function index()
    {
        // جلب بلاغات المستخدم الحالي فقط
        $reports = Report::where('user_id', Auth::id())->latest()->get();
        return view('reports.index', compact('reports'));
    }

    // عرض صفحة نموذج إنشاء بلاغ جديد
    public function create()
    {
        return view('reports.create');
    }

    // حفظ البلاغ الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        // التحقق من المدخلات
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // إنشاء البلاغ بربطه مع معرف المستخدم الحالي
        Report::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'قيد المعالجة',
        ]);

        return redirect()->route('reports.index')->with('success', 'تم تقديم البلاغ بنجاح');
    }
    public function destroy($id)
{
    $report = Report::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    $report->delete();

    return redirect()->route('reports.index')->with('success', 'تم حذف البلاغ بنجاح.');
}
}