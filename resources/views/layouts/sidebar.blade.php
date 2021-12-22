<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="https://lh3.googleusercontent.com/proxy/PT-xsgpEQq1NycnE6UTM6oz6LvAVDNzDFuAQPxrAYW0PFS1APMNEB2wUFgNKrK0JzIYQhVU5Xq0CSwRoXJ31iUt6M4_fcgs-5TSkUPyeq-VD6UHppB2y5LnitBLk_RFUfsEJWcfl7cP7QDSI"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
