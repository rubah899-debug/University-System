<x-app-layout>
    <!-- شريط التنقل العلوي الاحترافي تماماً مثل الصورة -->
    <div style="background: rgba(15, 23, 42, 0.95); backdrop-filter: blur(15px); border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding: 18px 40px; display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;" dir="rtl">
        
        <!-- روابط التنقل النصية في اليمين -->
        <div style="display: flex; gap: 30px; align-items: center;">
            <a href="{{ route('reports.index') }}" style="color: #ffffff; text-decoration: none; font-weight: 700; font-size: 15px; transition: 0.3s;">الرئيسية</a>
           
        </div>
        
        <!-- الأزرار التفاعلية في اليسار (دخول / تسجيل / خروج) -->
        <div style="display: flex; gap: 15px; align-items: center;">
            @auth
                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" style="background: rgba(239, 68, 68, 0.2); border: 1px solid rgba(239, 68, 68, 0.4); color: #fca5a5; padding: 10px 22px; border-radius: 10px; font-weight: bold; cursor: pointer; font-size: 14px; transition: 0.3s;">
                        تسجيل الخروج 🚪
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.15); color: #ffffff; padding: 10px 22px; border-radius: 10px; text-decoration: none; font-weight: 600; font-size: 14px; transition: 0.3s;">
                    تسجيل دخول 🔐
                </a>
                <a href="{{ route('register') }}" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 10px 22px; border-radius: 10px; text-decoration: none; font-weight: bold; font-size: 14px; box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3); transition: 0.3s;">
                    إنشاء حساب 📝
                </a>
            @endauth
        </div>
    </div>
    

    <div style="background: linear-gradient(135deg, #0f172a 0%, #091e3a 50%, #030712 100%); min-height: 90vh; padding: 10px 0 40px 0;" dir="rtl">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- الترويسة العلوية وزر الإضافة -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; background: rgba(255, 255, 255, 0.07); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12); padding: 25px 30px; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);">
                <div>
                    <h2 style="font-size: 26px; font-weight: 800; color: #ffffff; margin: 0 0 5px 0; text-align: right;">لوحة تحكم البلاغات 🚀</h2>
                    <p style="color: #94a3b8; font-size: 15px; margin: 0; text-align: right;">نظام إدارة وتتبع الشكاوى الأكاديمية والخدمية.</p>
                </div>
                <a href="{{ route('reports.create') }}" style="background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); color: white; padding: 12px 24px; border-radius: 10px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4); transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 8px;">
                    <span style="font-size: 18px;">+</span> تقديم بلاغ جديد
                </a>
            </div>

            <!-- بطاقات الإحصائيات السريعة -->
            <table style="width: 100%; border-collapse: separate; border-spacing: 20px 0; margin-bottom: 30px;" dir="rtl">
                <tr>
                    <td style="width: 50%; background: rgba(255, 255, 255, 0.07); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12); border-right: 5px solid #3b82f6; padding: 25px; border-radius: 14px; vertical-align: top;">
                        <div style="color: #94a3b8; font-size: 14px; font-weight: 600; margin-bottom: 10px; text-align: right;">إجمالي البلاغات المقدمة</div>
                        <div style="color: #ffffff; font-size: 32px; font-weight: 800; text-align: right;">{{ $reports->count() }}</div>
                    </td>
                    <td style="width: 50%; background: rgba(255, 255, 255, 0.07); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12); border-right: 5px solid #f59e0b; padding: 25px; border-radius: 14px; vertical-align: top;">
                        <div style="color: #94a3b8; font-size: 14px; font-weight: 600; margin-bottom: 10px; text-align: right;">حالة البلاغات النشطة</div>
                        <div style="color: #f59e0b; font-size: 32px; font-weight: 800; text-align: right;">{{ $reports->where('status', 'قيد المعالجة')->count() }}</div>
                    </td>
                </tr>
            </table>

            <!-- رسالة النجاح -->
            @if(session('success'))
                <div style="background: rgba(16, 185, 129, 0.15); border-right: 4px solid #10b981; color: #34d399; padding: 16px 20px; border-radius: 10px; margin-bottom: 25px; font-weight: 600; display: flex; align-items: center; gap: 10px;">
                    <span>✅</span> {{ session('success') }}
                </div>
            @endif

            <!-- قائمة البلاغات -->
            <div style="background: rgba(255, 255, 255, 0.07); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 16px; padding: 25px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);">
                <h3 style="font-size: 18px; font-weight: 700; color: #ffffff; margin: 0 0 20px 0; padding-bottom: 12px; border-bottom: 1px solid rgba(255, 255, 255, 0.12); text-align: right;">سجل البلاغات</h3>

                @forelse($reports as $report)
                    <div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 12px; padding: 20px; margin-bottom: 15px;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
                            <h4 style="font-size: 17px; font-weight: 700; color: #ffffff; margin: 0;">📌 {{ $report->title }}</h4>
                            <span style="background-color: rgba(245, 158, 11, 0.15); color: #fbbf24; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; border: 1px solid rgba(245, 158, 11, 0.3);">
                                ⏳ {{ $report->status }}
                            </span>
                        </div>
                        <p style="color: #cbd5e1; font-size: 14px; line-height: 1.6; margin: 0 0 12px 0; text-align: right;">{{ $report->description }}</p>
                        <div style="font-size: 12px; color: #64748b; border-top: 1px solid rgba(255, 255, 255, 0.06); padding-top: 10px; display: flex; justify-content: space-between;">
                            <span>تاريخ الإرسال: {{ $report->created_at->format('Y-m-d') }}</span>
                            <span>المعرف التعريفي: #{{ $report->id }}</span>
                        </div>
                    </div>
                @empty
                    <div style="text-align: center; padding: 50px 20px; color: #64748b;">
                        <p style="font-size: 18px; font-weight: 600; margin-bottom: 5px; color: #94a3b8;">لا توجد بلاغات مسجلة حالياً</p>
                        <p style="font-size: 14px;">ابدأ بتقديم بلاغك الأول لتظهر النتائج هنا.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>