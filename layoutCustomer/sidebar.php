<?php
include ("active_sidebar.php");
?>

<aside class="hidden md:flex flex-col p-4 space-y-2 h-screen w-64 border-r border-emerald-700 bg-emerald-600">
    
    <!-- Logo Section -->
    <div class="flex flex-col items-center justify-center py-6 mb-2">
        <img src="/WARUNGKU/layoutCustomer/logo.png" alt="Matcha Time Logo" class="w-16 h-16 object-contain rounded-2xl shadow-md border-0 border-white bg-white p-1" />
         <h1 class="text-base font-black text-white leading-tight mt-2">Matcha Time</h1>
        <p class="text-[10px] uppercase tracking-widest text-emerald-200 font-bold mt-2">Restourant</p>
    </div>

    <!-- Divider -->
    <div class="border-t border-emerald-500 mb-2"></div>

    <!-- Nav -->
    <nav class="flex-1 space-y-1">
    <a class="<?= active_sidebar("shopping_cart") ?> flex items-center space-x-3 px-3 py-2.5 rounded-lg text-white hover:bg-emerald-700 transition-all active:scale-95 font-medium text-sm" 
    href="../customer/index.php">
        <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
        <span>Pesan</span>
    </a>
</nav>

    <!-- Bottom Buttons -->
    <div class="pt-4 border-t border-emerald-500 space-y-1">
        <button class="w-full text-left flex items-center space-x-3 px-3 py-2.5 rounded-lg text-emerald-100 hover:bg-emerald-700 transition-all active:scale-95 font-medium text-sm">
            <span class="material-symbols-outlined" data-icon="help">help</span>
            <span>Support</span>
        </button>
        <button class="w-full text-left flex items-center space-x-3 px-3 py-2.5 rounded-lg text-red-200 hover:bg-emerald-700 transition-all active:scale-95 font-medium text-sm">
            <span class="material-symbols-outlined" data-icon="logout">logout</span>
            <span>Logout</span>
        </button>
    </div>
</aside>