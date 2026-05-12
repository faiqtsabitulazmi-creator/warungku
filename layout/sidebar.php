<?php
include ("active_sidebar.php");
?>

<aside class="hidden md:flex flex-col p-4 space-y-2 h-screen w-64 border-r border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950">
    <div class="flex items-center space-x-3 px-2 mb-8">
        <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-white shadow-lg">
            <span class="material-symbols-outlined" data-icon="storefront">storefront</span>
        </div>
        <div>
            <h1 class="text-lg font-black text-slate-900 dark:text-white leading-tight">Warung Saya</h1>
            <p class="text-[10px] uppercase tracking-wider text-slate-500 font-bold">Admin Terminal</p>
        </div>
    </div>
    <nav class="flex-1 space-y-1">
        <a class="<?= active_sidebar("dashboard") ?>" 
        href="../dasboard/index.php">
            <span class="material-symbols-outlined" 
            data-icon="dashboard">dashboard</span>
            <span>Dashboard</span>
        </a>
           <a class="<?= active_sidebar("role") ?>" 
           href="../role/index.php">
            <span class="material-symbols-outlined" 
            data-icon="person">person</span>
            <span>Role</span>
        </a>
           <a class="<?= active_sidebar("user") ?>" 
           href="../user/index.php">
            <span class="material-symbols-outlined" 
            data-icon="person">person</span>
            <span>User</span>
        </a>
           <a class="<?= active_sidebar("product") ?>" 
           href="../product/index.php">
            <span class="material-symbols-outlined" 
            data-icon="inventory_2">inventory_2</span>
            <span>Produk</span>
        </a>
           <a class="<?= active_sidebar("category") ?>" 
           href="../category/index.php">
            <span class="material-symbols-outlined" 
            data-icon="category">dashboard</span>
            <span>kategori</span>
        </a>
           <a class="<?= active_sidebar("transaksi") ?>" 
           href="../transaksi/index.php">
            <span class="material-symbols-outlined" 
            data-icon="money">money</span>
            <span>Transaksi</span>
        </a>
       
    </nav>
    <div class="pt-4 border-t border-slate-200 dark:border-slate-800 space-y-1">
        <button class="w-full text-left flex items-center space-x-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-transform active:scale-95 font-medium text-sm">
            <span class="material-symbols-outlined" data-icon="help">help</span>
            <span>Support</span>
        </button>
        <button class="w-full text-left flex items-center space-x-3 px-3 py-2.5 text-error hover:bg-red-50 dark:hover:bg-red-900/10 transition-transform active:scale-95 font-medium text-sm">
            <span class="material-symbols-outlined" data-icon="logout">logout</span>
            <span>Logout</span>
        </button>
    </div>
</aside>