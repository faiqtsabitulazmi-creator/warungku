<aside class="fixed right-0 h-screen w-[400px] bg-white shadow-xl z-30 flex flex-col border-l border-slate-200">
    <div class="p-lg border-b border-slate-100 flex justify-between items-center">
        <h2 class="font-headline-md text-on-surface">Pesanan saat ini</h2>
        <button class="text-slate-400 hover:text-red-500 transition-colors">
            <span class="material-symbols-outlined" data-icon="delete_sweep">delete_sweep</span>
        </button>
    </div>
    <!-- Cart Items -->
    <div class="flex-1 overflow-y-auto p-lg space-y-4">
        <?php
        $dataCart = showDataCart($conn, $_SESSION['id_user']);
        while ($row = $dataCart->fetch_assoc()) {
        ?>
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-lg bg-slate-100 overflow-hidden flex-shrink-0">
                    <img class="w-full h-full object-cover" src="../product/image_product/<?= $row['image'] ?>" />
                </div>
                <div class="flex-1 min-w-0">
                    <p class="font-label-lg text-on-surface truncate"><?= $row['nama_product'] ?></p>
                    <p class="text-body-sm text-red-600 font-semibold">Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
                </div>
                <div class="flex items-center gap-2 bg-slate-50 rounded-lg p-1">
                    <a href="action.php?aksi=deleteCart&id_user=<?= $_SESSION['id_user'] ?>&id_product=<?= $row['id_product'] ?>" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors">
                        <span class="material-symbols-outlined text-sm" data-icon="remove">remove</span>
                    </a>
                    <span class="font-label-lg px-2"><?= $row['qty'] ?></span>
                    <a href="action.php?aksi=insertProductToCart&id_user=<?= $_SESSION['id_user'] ?>&id_product=<?= $row['id_product'] ?>" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors">
                        <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Payment Summary -->
    <div class="p-lg bg-slate-50 border-t border-red-200 space-y-3">
        <div class="flex justify-between text-headline-sm font-bold text-on-surface pt-2">
            <span>Total</span>
            <?php
            $total = showTotalCart($conn, $_SESSION['id_user']);
            if ($total['total']) {
            ?>
                <span class="text-red-700">Rp <?= number_format($total['total'], 0, ',', '.') ?></span>
            <?php
            } else {
            ?>
                <span class="text-red-700">Rp 0</span>
            <?php
            }
            ?>
        </div>
        <div class="grid grid-cols-2 gap-3 pt-4">
            <a href="action.php?aksi=deleteAllCart&id_user=<?= $_SESSION['id_user'] ?>" 
               class="py-4 border border-slate-300 rounded-xl font-label-lg text-slate-600 hover:bg-slate-100 active:scale-[0.98] transition-all text-center" 
               onclick="return confirm('Yakin mau hapus semua data cartnya?')">Hapus Semua</a>
            <a href="action.php?aksi=checkout&id_user=<?= $_SESSION['id_user'] ?>"
               class="py-4 bg-red-700 text-white text-center rounded-xl font-label-lg shadow-lg hover:bg-red-800 active:scale-[0.98] transition-all"
               onclick="return confirm('Yakin mau checkout?')">
               Checkout
            </a>
        </div>
    </div>
</aside>