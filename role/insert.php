<?php
include '../connection.php';
include 'action.php';
?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Add Role - Warung Averroes</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#bbcabf",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f2f4f6",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#10b981",
                        "surface-bright": "#f7f9fb",
                        "on-error": "#ffffff",
                        "surface-tint": "#006c49",
                        "surface-container-high": "#e6e8ea",
                        "primary": "#006c49",
                        "outline": "#6c7a71",
                        "tertiary": "#855300",
                        "surface-container-highest": "#e0e3e5",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#4edea3",
                        "on-primary-container": "#00422b",
                        "on-background": "#191c1e",
                        "surface-container": "#eceef0",
                        "on-surface": "#191c1e",
                        "primary-fixed": "#6ffbbe",
                        "on-primary": "#ffffff",
                        "surface-variant": "#e0e3e5",
                        "background": "#f7f9fb",
                        "error-container": "#ffdad6",
                        "surface": "#f7f9fb",
                        "surface-dim": "#d8dadc",
                        "tertiary-container": "#e29100",
                        "inverse-primary": "#4edea3",
                        "inverse-on-surface": "#eff1f3",
                        "inverse-surface": "#2d3133",
                        "secondary": "#505f76",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#3c4a42",
                        "secondary-container": "#d0e1fb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xs": "4px",
                        "sm": "8px",
                        "lg": "24px",
                        "md": "16px",
                        "base": "4px",
                        "margin": "24px",
                        "gutter": "16px",
                        "xl": "32px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-surface text-on-surface flex min-h-screen">
    <!-- SideNavBar -->
    <?php require_once '../layout/sidebar.php'; ?>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- TopNavBar -->
        <?php require_once '../layout/topnavbar.php'; ?>

        <!-- Scrollable Canvas -->
        <div class="flex-1 overflow-y-auto p-6 bg-surface-container-lowest">
            <div class="max-w-xl mx-auto">

                <!-- Page Header -->
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h1 class="text-headline-md font-headline-md text-on-surface">Add New Role</h1>
                        <p class="text-body-sm text-slate-500 mt-1">Create a new role for your system.</p>
                    </div>
                    <a href="index.php" class="flex items-center space-x-2 text-body-sm text-slate-500 hover:text-on-surface transition-colors">
                        <span class="material-symbols-outlined text-base">arrow_back</span>
                        <span>Back to list</span>
                    </a>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 flex items-center space-x-3">
                        <div class="w-9 h-9 bg-emerald-50 text-primary rounded-lg flex items-center justify-center">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
                        </div>
                        <span class="text-headline-sm font-headline-sm text-on-surface">Role Information</span>
                    </div>

                    <form method="POST" action="action.php?aksi=insert" class="p-6 space-y-5">
                        <!-- Role Name Input -->
                        <div class="flex flex-col space-y-1.5">
                            <label class="text-label-lg font-label-lg text-on-surface" for="nama">
                                Role Name <span class="text-error">*</span>
                            </label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-base">badge</span>
                                <input
                                    id="nama"
                                    name="nama"
                                    type="text"
                                    placeholder="e.g. Admin, Kasir, Manager..."
                                    required
                                    class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-primary focus:border-primary text-body-sm transition-all outline-none"
                                />
                            </div>
                            <p class="text-label-md text-slate-400">Enter a unique name for this role.</p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center justify-end space-x-3 pt-2">
                            <a href="index.php"
                               class="px-5 py-2.5 rounded-lg border border-slate-200 text-body-sm font-medium text-slate-600 hover:bg-slate-50 transition-all">
                                Cancel
                            </a>
                            <button
                                type="submit"
                                class="bg-primary text-white font-label-lg px-6 py-2.5 rounded-lg flex items-center space-x-2 hover:bg-emerald-700 transition-all active:scale-95 shadow-md shadow-emerald-200">
                                <span class="material-symbols-outlined text-base">save</span>
                                <span>Save Role</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- BottomNavBar Mobile -->
        <?php require_once '../layout/bottomnavbar.php'; ?>
    </main>
</body>

</html>