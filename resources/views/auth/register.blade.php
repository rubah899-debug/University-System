<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إنشاء حساب - نظام البلاغات</title>
</head>
<body style="margin: 0; padding: 0; background: linear-gradient(135deg, #0f172a 0%, #091e3a 50%, #030712 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: Tahoma, sans-serif;">

    <div style="background: rgba(255, 255, 255, 0.07); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12); padding: 40px; border-radius: 20px; width: 100%; max-width: 420px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);">
        
        <div style="text-align: center; margin-bottom: 25px;">
            <h2 style="color: #ffffff; font-size: 26px; font-weight: 800; margin: 0 0 8px 0;">إنشاء حساب جديد 📝</h2>
            <p style="color: #94a3b8; font-size: 14px; margin: 0;">أدخل بياناتك للانضمام إلى نظام البلاغات.</p>
        </div>

        <!-- رسائل الخطأ إن وجدت -->
        @if ($errors->any())
            <div style="background: rgba(239, 68, 68, 0.15); border-right: 4px solid #ef4444; color: #fca5a5; padding: 12px 15px; border-radius: 8px; margin-bottom: 20px; font-size: 13px;">
                يرجى التأكد من صحة المدخلات أو تطابق كلمة المرور.
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- الاسم -->
            <div style="margin-bottom: 18px;">
                <label style="display: block; font-weight: 600; font-size: 14px; color: #cbd5e1; margin-bottom: 6px; text-align: right;">الاسم الكامل</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus style="width: 100%; background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 12px 16px; color: white; font-size: 15px; outline: none; box-sizing: border-box;">
            </div>
<!-- حقل الرقم الجامعي / الوظيفي بتنسيق HTML صريح مطابق لكلمة المرور -->
<div class="mt-4">
    <label for="student_id" class="block font-medium text-sm text-gray-300">الرقم الجامعي / الوظيفي</label>
    <input id="student_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-600 bg-gray-900/50 text-white focus:border-indigo-500 focus:ring-indigo-500" type="text" name="student_id" value="{{ old('student_id') }}" required autofocus autocomplete="username" />
    @error('student_id')
        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

            <!-- كلمة المرور -->
            <div style="margin-bottom: 18px;">
                <label style="display: block; font-weight: 600; font-size: 14px; color: #cbd5e1; margin-bottom: 6px; text-align: right;">كلمة المرور</label>
                <input type="password" name="password" required style="width: 100%; background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 12px 16px; color: white; font-size: 15px; outline: none; box-sizing: border-box;">
            </div>

            <!-- تأكيد كلمة المرور -->
            <div style="margin-bottom: 25px;">
                <label style="display: block; font-weight: 600; font-size: 14px; color: #cbd5e1; margin-bottom: 6px; text-align: right;">تأكيد كلمة المرور</label>
                <input type="password" name="password_confirmation" required style="width: 100%; background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 12px 16px; color: white; font-size: 15px; outline: none; box-sizing: border-box;">
            </div>

            <!-- زر التسجيل -->
            <button type="submit" style="width: 100%; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); color: white; padding: 14px; border-radius: 10px; font-weight: bold; border: none; cursor: pointer; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4); font-size: 16px; transition: 0.3s;">
                إنشاء الحساب
            </button>
        </form>

        <div style="margin-top: 25px; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <a href="{{ route('login') }}" style="color: #60a5fa; font-size: 14px; text-decoration: none; font-weight: 600;">لديك حساب بالفعل؟ سجل دخولك</a>
        </div>

    </div>

</body>
</html>