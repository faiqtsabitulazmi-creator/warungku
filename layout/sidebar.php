<?php
include ("active_sidebar.php");
?>

<aside class="hidden md:flex flex-col p-4 space-y-2 h-screen w-64 border-r border-emerald-700 bg-emerald-600">
    
    <!-- Logo Section -->
    <div class="flex flex-col items-center justify-center py-6 mb-2">
        <img src="/WARUNGKU/layoutCustomer/logo.png" alt="Matcha Time Logo" class="w-16 h-16 object-contain rounded-2xl shadow-md bg-white p-1" />
        <h1 class="text-base font-black text-white leading-tight mt-2">Matcha Time</h1>
        <p class="text-[10px] uppercase tracking-widest text-emerald-200 font-bold">Admin Terminal</p>
    </div>

    <!-- Divider -->
    <div class="border-t border-emerald-500 mb-2"></div>

    <!-- Nav -->
    <nav class="flex-1 space-y-1">
        <a class="<?= active_sidebar("dashboard") ?>" href="../dasboard/index.php">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span>Dashboard</span>
        </a>
        <a class="<?= active_sidebar("role") ?>" href="../role/index.php">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span>Role</span>
        </a>
        <a class="<?= active_sidebar("user") ?>" href="../user/index.php">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span>User</span>
        </a>
        <a class="<?= active_sidebar("product") ?>" href="../product/index.php">
            <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
            <span>Produk</span>
        </a>
        <a class="<?= active_sidebar("category") ?>" href="../category/index.php">
            <span class="material-symbols-outlined" data-icon="category">category</span>
            <span>Kategori</span>
        </a>
        <a class="<?= active_sidebar("transaksi") ?>" href="../transaksi/index.php">
            <span class="material-symbols-outlined" data-icon="money">money</span>
            <span>Transaksi</span>
        </a>
        <a class="<?= active_sidebar("detail_transaksi") ?>" href="../detail_transaksi/index.php">
            <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
            <span>Detail Transaksi</span>
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