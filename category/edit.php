
 <?php 
  include 'action.php';
$id = $_GET['id'];
$data = showDataEditCategory($conn, $id);
$row = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Role - Warung Averroes</title>
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
                        "primary-container": "#10b981",
                        "primary": "#006c49",
                        "outline": "#6c7a71",
                        "tertiary": "#855300",
                        "error": "#ba1a1a",
                        "on-primary-container": "#00422b",
                        "on-background": "#191c1e",
                        "surface-container": "#eceef0",
                        "on-surface": "#191c1e",
                        "on-primary": "#ffffff",
                        "background": "#f7f9fb",
                        "surface": "#f7f9fb",
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
                        "xs": "4px", "sm": "8px", "lg": "24px",
                        "md": "16px", "base": "4px", "margin": "24px",
                        "gutter": "16px", "xl": "32px"
                    },
                    "fontSize": {
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
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
                        <h1 class="text-headline-md font-headline-md text-on-surface">Edit Kategori</h1>
                        <p class="text-body-sm text-slate-500 mt-1">Update the name of this kategori.</p>
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
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">edit_note</span>
                        </div>
                        <span class="text-headline-sm font-headline-sm text-on-surface">Kategori Information</span>
                    </div>

                    <form method="POST" action="action.php?aksi=update" class="p-6 space-y-5">
                        <input type="hidden" name="id" value="<?= $id ?>">

                        <!-- Kategori Name Input -->
                        <div class="flex flex-col space-y-1.5">
                            <label class="text-label-lg font-label-lg text-on-surface" for="nama">
                                Kategori Name <span class="text-error">*</span>
                            </label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-base">badge</span>
                                <input
                                    id="nama"
                                    name="nama"
                                    type="text"
                                    value="<?= htmlspecialchars($row['nama']) ?>"
                                    required
                                    class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-primary focus:border-primary text-body-sm transition-all outline-none"
                                />
                            </div>
                            <p class="text-label-md text-slate-400">Change the name for this Kategori.</p>
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
                                <span>Update Kategori</span>
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
