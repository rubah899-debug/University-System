<nav x-data="{ open: false }" style="background: rgba(15, 23, 42, 0.8); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- الشعار أو اسم النظام -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('reports.index') }}" style="color: white; font-weight: 800; font-size: 1.2rem; text-decoration: none;">
                        نظام البلاغات 🛡️
                    </a>
                </div>
            </div>

            <!-- الأزرار العلوية -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 gap-4">
                @auth
                    <!-- المستخدم مسجل دخول -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="color: #94a3b8; font-size: 14px; background: none; border: none; cursor: pointer;">
                            تسجيل الخروج
                        </button>
                    </form>
                @else
                    <!-- زائر -->
                    <a href="{{ route('login') }}" style="color: #cbd5e1; font-size: 14px; text-decoration: none; padding: 8px 16px; border: 1px solid #3b82f6; border-radius: 8px;">دخول</a>
                    <a href="{{ route('register') }}" style="background: #3b82f6; color: white; font-size: 14px; text-decoration: none; padding: 8px 16px; border-radius: 8px;">إنشاء حساب</a>
                @endauth
            </div>
        </div>
    </div>
</nav>