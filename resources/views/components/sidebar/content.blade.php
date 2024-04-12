<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="menu.partie" :active="Str::startsWith(request()->route()->uri(), 'dashboard')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.link title="menu.customer" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="menu.suppliers" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    </x-sidebar.dropdown>


    <x-sidebar.dropdown title="menu.prod_manager" :active="Str::startsWith(request()->route()->uri(), 'dashboard')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.link title="brands" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="categories" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="variations" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="products" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    </x-sidebar.dropdown>



    <x-sidebar.dropdown title="menu.sales" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.link title="brands" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="categories" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="variations" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="products" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    </x-sidebar.dropdown>

    <x-sidebar.link title="stock_transfer" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    <x-sidebar.link title="stock_adjustment" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    <x-sidebar.link title="POS" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    <x-sidebar.link title="cash_bank" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />


    <x-sidebar.dropdown title="menu.expense_mana..." :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.link title="expense_categories" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="expense" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    </x-sidebar.dropdown>

    
    <x-sidebar.dropdown title="menu.reports" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.link title="payments" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="stock_alert" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="sales_summary" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="stock_summary" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="rate_list" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="product_sales_su..." href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="users_reports" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="expense_reports" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="profit_loss" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    </x-sidebar.dropdown>

    <x-sidebar.link title="online_orders" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />

        
    <x-sidebar.dropdown title="menu.website_setup" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.link title="product_cards" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="front_settings" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    </x-sidebar.dropdown>

       
    <x-sidebar.dropdown title="menu.HRM" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.link title="dashbord" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="staff_members" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="holidays" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="appreciations" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="leaves" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="attendances" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="payrolls" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
        <x-sidebar.link title="hrm_settings" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" />
    </x-sidebar.dropdown>

    
    <x-sidebar.link title="Settings" href="{{ route('dashboard') }}" :active="request()->routeIs('')" />
    <x-sidebar.link title="logout" href="{{ route('dashboard') }}" :active="request()->routeIs('')" />

</x-perfect-scrollbar>
