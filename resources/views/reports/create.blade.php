<x-app-layout>
    <div style="background: linear-gradient(135deg, #0f172a 0%, #091e3a 50%, #030712 100%); min-height: 90vh; padding: 40px 0;" dir="rtl">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
            <!-- ترويسة الصفحة -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; background: rgba(255, 255, 255, 0.07); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12); padding: 25px 30px; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);">
                <div>
                    <h2 style="font-size: 24px; font-weight: 800; color: #ffffff; margin: 0 0 5px 0;">تقديم بلاغ جديد 📝</h2>
                    <p style="color: #94a3b8; font-size: 14px; margin: 0;">املئي الحقول أدناه بالتفاصيل لمعالجة مشكلتك في أسرع وقت.</p>
                </div>
                <a href="{{ route('reports.index') }}" style="background: rgba(255, 255, 255, 0.1); color: #cbd5e1; padding: 10px 18px; border-radius: 10px; text-decoration: none; font-weight: bold; border: 1px solid rgba(255, 255, 255, 0.15); transition: all 0.2s;">
                    ← العودة للقائمة
                </a>
            </div>
<!-- 1. اختيار التصنيف -->
                <div class="mb-4">
                    <label for="category" class="block font-medium text-sm text-gray-700">اختيار التصنيف</label>
                    <select id="category" name="category" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                        <option value="">اختر التصنيف المناسب</option>
                        <option value="academic">أكاديمي</option>
                        <option value="administrative">إداري</option>
                        <option value="technical">تقني / شبكات</option>
                        <option value="other">أخرى</option>
                    </select>
                </div>

                <!-- 4. إرفاق ملف -->
                <div class="mb-4">
                    <label for="attachment" class="block font-medium text-sm text-gray-700">إرفاق ملف (اختياري)</label>
                    <input id="attachment" type="file" name="attachment" class="block mt-1 w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" />
                </div>
                
            <!-- نموذج الإدخال -->
            <div style="background: rgba(255, 255, 255, 0.07); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 16px; padding: 30px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);">
                <form action="{{ route('reports.store') }}" method="POST">
                    @csrf
                    
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 14px; color: #cbd5e1; margin-bottom: 8px;">عنوان البلاغ</label>
                        <input type="text" name="title" required placeholder="مثلاً: مشكلة في شبكة الإنترنت بقاعة 5" style="width: 100%; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 12px 16px; color: white; font-size: 15px; outline: none;">
                    </div>

                    <div style="margin-bottom: 25px;">
                        <label style="display: block; font-weight: 600; font-size: 14px; color: #cbd5e1; margin-bottom: 8px;">الوصف التفصيلي</label>
                        <textarea name="description" rows="5" required placeholder="اكتبي تفاصيل المشكلة بوضوح..." style="width: 100%; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 12px 16px; color: white; font-size: 15px; outline: none; resize: vertical;"></textarea>
                    </div>

                    <div style="display: flex; justify-content: flex-end; gap: 12px;">
                        <a href="{{ route('reports.index') }}" style="background: transparent; color: #94a3b8; padding: 12px 20px; border-radius: 10px; text-decoration: none; font-weight: bold;">إلغاء</a>
                        <button type="submit" style="background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); color: white; padding: 12px 24px; border-radius: 10px; font-weight: bold; border: none; cursor: pointer; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);">إرسال البلاغ الآن</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>