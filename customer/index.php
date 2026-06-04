<?php include 'action.php'; ?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#38485d",
                        "surface-container-low": "#f2f4f6",
                        "tertiary": "#855300",
                        "secondary-fixed": "#d3e4fe",
                        "primary-container": "#10b981",
                        "background": "#f7f9fb",
                        "inverse-primary": "#4edea3",
                        "outline": "#6c7a71",
                        "outline-variant": "#bbcabf",
                        "on-background": "#191c1e",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#0b1c30",
                        "on-primary": "#ffffff",
                        "surface-bright": "#f7f9fb",
                        "surface": "#f7f9fb",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#3c4a42",
                        "inverse-on-surface": "#eff1f3",
                        "surface-tint": "#006c49",
                        "secondary": "#505f76",
                        "on-tertiary-fixed-variant": "#653e00",
                        "tertiary-fixed": "#ffddb8",
                        "tertiary-fixed-dim": "#ffb95f",
                        "tertiary-container": "#e29100",
                        "surface-variant": "#e0e3e5",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#54647a",
                        "on-primary-fixed-variant": "#005236",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "inverse-surface": "#2d3133",
                        "secondary-fixed-dim": "#b7c8e1",
                        "primary-fixed-dim": "#4edea3",
                        "on-tertiary-fixed": "#2a1700",
                        "surface-dim": "#d8dadc",
                        "on-surface": "#191c1e",
                        "secondary-container": "#d0e1fb",
                        "surface-container-high": "#e6e8ea",
                        "primary-fixed": "#6ffbbe",
                        "on-primary-container": "#00422b",
                        "primary": "#006c49",
                        "surface-container": "#eceef0",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#e0e3e5",
                        "on-tertiary-container": "#523200",
                        "on-primary-fixed": "#002113",
                        "error": "#ba1a1a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "16px",
                        "margin": "24px",
                        "sm": "8px",
                        "md": "16px",
                        "lg": "24px",
                        "base": "4px",
                        "xl": "32px",
                        "xs": "4px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "price-display": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-md": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "fontWeight": "500"
                        }],
                        "price-display": ["40px", {
                            "lineHeight": "48px",
                            "letterSpacing": "-0.03em",
                            "fontWeight": "800"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fb;
        }
    </style>
</head>

<body class="bg-surface text-on-surface flex min-h-screen">

    <!-- SideNavBar Implementation -->
    <?php
    require_once '../layoutCustomer/sidebar.php';
    ?>
    <!-- Main Content Canvas -->
     <div class="flex flex-1 overflow-hidden">
    <main class="flex-1 flex flex-col h-screen overflow-hidden mr-[400px]">
        <!-- TopNavBar Implementation -->
        <?php
        require_once '../layoutCustomer/topnavbar.php';
        ?>
        <!-- Scrollable Canvas -->
        <div class="flex-1 overflow-y-auto p-6 space-y-6">
            <!-- Category Filter Chips -->
            <div class="flex items-center gap-3 mb-lg overflow-x-auto pb-2 scrollbar-hide">
                <button class="px-6 py-2 bg-emerald-600 text-white rounded-full font-label-lg shadow-md whitespace-nowrap">All Items</button>
                <?php
                $dataCategory = showDataCategory($conn);

                while ($row = $dataCategory->fetch_assoc()) {

                ?>
                    <button class="px-6 py-2 bg-white text-slate-600 border border-slate-200 rounded-full font-label-lg hover:bg-slate-50 transition-colors whitespace-nowrap"><?= $row['nama'] ?></button>
                <?php
                }

                ?>
            </div>
                <!-- Product Grid -->


                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-gutter">
                    <?php
                    $dataProduct = readProduct($conn);
                    while ($product = $dataProduct->fetch_assoc()) {
                    ?>
                        <!-- Product Card 1 -->
                        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden hover:shadow-lg transition-shadow cursor-pointer flex flex-col group">
                            <div class="aspect-square bg-slate-100 overflow-hidden relative">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="A high-quality studio shot of premium long-grain jasmine rice in a rustic burlap sack, positioned on a clean white background. The lighting is bright and airy, typical of a modern e-commerce platform, with soft shadows. The overall aesthetic is clean, minimalist, and dependable, conveying high-quality agricultural products." src="../product/image_product/<?php echo $product['image'] ?>" />
                                <div class="absolute top-2 right-2 bg-emerald-500 text-white text-[10px] font-bold px-2 py-1 rounded">STOCK: <?= $product['stock'] ?></div>
                            </div>
                            <div class="p-md flex flex-col flex-1">
                                <h3 class="font-headline-sm text-on-surface mb-1"><?= $product['nama'] ?></h3>
                                <p class="text-body-sm text-slate-500 mb-4"><?= $product['nama_category'] ?></p>
                                <div class="mt-auto flex justify-between items-center">
                                    <span class="font-headline-sm text-emerald-600">Rp <?= number_format($product['harga'], 0, ',', '.') ?></span>
                                    <a href="action.php?aksi=insertProductToCart&id_user=8&id_product=<?= $product['id'] ?>" class="w-10 h-10 bg-primary-container text-on-primary-container rounded-lg flex items-center justify-center hover:brightness-95 active:scale-90 transition-all">
                                        <span class="material-symbols-outlined" data-icon="add">add</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
        </div>
    </main>
    <!-- Right Sidebar: Current Order -->
    <?php
    require_once 'keranjang.php';
    ?>

</body>

</html>