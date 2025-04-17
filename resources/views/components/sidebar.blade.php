@php
    $currentRoute = Route::currentRouteName();
@endphp

<div class="fixed inset-y-0 left-0 z-30 w-64 bg-indigo-800 shadow-xl transform transition-transform duration-300 ease-in-out"
     :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">

    <!-- Logo/Header Section -->
    <div class="flex items-center justify-center h-16 bg-indigo-900">
        <div class="flex items-center px-4">
            <svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="ml-2 text-white font-bold text-lg">Ziyadbook</span>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-5 px-2">
        <div class="space-y-1">
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}"
               class="flex items-center px-2 py-3 text-sm font-medium rounded-md
               {{ $currentRoute === 'dashboard' ? 'text-white bg-indigo-900' : 'text-indigo-100 hover:text-white hover:bg-indigo-700' }}">
                <svg class="mr-3 h-5 w-5 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>

            <!-- Products -->
            <a href="{{ route('products.index') }}"
               class="flex items-center px-2 py-3 text-sm font-medium rounded-md
               {{ $currentRoute === 'products.index' ? 'text-white bg-indigo-900' : 'text-indigo-100 hover:text-white hover:bg-indigo-700' }}">
                <svg class="mr-3 h-5 w-5 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                Products
            </a>

            <!-- Orders -->
            <a href="{{ route('orders.index') }}"
               class="flex items-center px-2 py-3 text-sm font-medium rounded-md
               {{ $currentRoute === 'orders.index' ? 'text-white bg-indigo-900' : 'text-indigo-100 hover:text-white hover:bg-indigo-700' }}">
                <svg class="mr-3 h-5 w-5 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Orders
            </a>

            <!-- Shipping Methods -->
            <a href="{{ route('shipping.index') }}"
                class="flex items-center px-2 py-3 text-sm font-medium rounded-md
                {{ $currentRoute === 'shipping.index' ? 'text-white bg-indigo-900' : 'text-indigo-100 hover:text-white hover:bg-indigo-700' }}">
                <svg class="mr-3 h-5 w-5 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                </svg>
                Shipping Method
            </a>
        </div>
    </nav>
</div>
