<?php include './actionAuth.php' ?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Register - Warung Averroes</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-background": "#191c1e",
                        "on-secondary-fixed": "#0b1c30",
                        "on-secondary-container": "#54647a",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed-variant": "#653e00",
                        "on-tertiary-fixed": "#2a1700",
                        "tertiary-fixed-dim": "#ffb95f",
                        "on-error-container": "#93000a",
                        "background": "#f7f9fb",
                        "secondary-fixed-dim": "#b7c8e1",
                        "tertiary": "#855300",
                        "on-primary-fixed-variant": "#520000",
                        "secondary": "#505f76",
                        "on-tertiary-container": "#523200",
                        "inverse-surface": "#2d3133",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "outline": "#6c7a71",
                        "surface-container-low": "#f2f4f6",
                        "secondary-fixed": "#d3e4fe",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#38485d",
                        "inverse-on-surface": "#eff1f3",
                        "surface-dim": "#d8dadc",
                        "surface-container-highest": "#e0e3e5",
                        "primary-fixed-dim": "#de4e4e",
                        "primary-container": "#8a4545fd",
                        "on-primary-fixed": "#002113",
                        "surface-variant": "#e0e3e5",
                        "primary-fixed": "#fb6f6f",
                        "on-error": "#ffffff",
                        "inverse-primary": "#de4e4e",
                        "tertiary-container": "#e29100",
                        "primary": "#a10909",
                        "surface-container-high": "#e6e8ea",
                        "on-secondary": "#ffffff",
                        "surface": "#f7f9fb",
                        "secondary-container": "#d0e1fb",
                        "error-container": "#ffdad6",
                        "on-primary-container": "#420000",
                        "tertiary-fixed": "#ffddb8",
                        "on-surface": "#191c1e",
                        "surface-tint": "#6c0000",
                        "surface-bright": "#f7f9fb",
                        "on-surface-variant": "#3c4a42",
                        "outline-variant": "#bbcabf",
                        "surface-container": "#eceef0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xs": "4px",
                        "margin": "24px",
                        "base": "4px",
                        "md": "16px",
                        "lg": "24px",
                        "sm": "8px",
                        "xl": "32px",
                        "gutter": "16px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "price-display": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "label-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "price-display": ["40px", {
                            "lineHeight": "48px",
                            "letterSpacing": "-0.03em",
                            "fontWeight": "800"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
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
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .form-input-focus:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
            outline: none;
        }
    </style>
</head>

<body class="bg-surface selection:bg-primary-fixed-dim selection:text-on-primary-fixed overflow-x-hidden">
    <main class="min-h-screen w-full flex flex-col md:flex-row">
     
       
        <!-- Right Side: Registration Form -->
        <section class="flex-1 bg-white flex items-center justify-center p-gutter relative">
            <div class="w-full max-w-[480px] py-xl">
                <!-- Mobile Branding -->
                <div class="md:hidden flex items-center gap-sm mb-xl">
                    <span class="material-symbols-outlined text-primary-container text-[28px]">storefront</span>
                    <span class="font-headline-sm text-headline-sm text-on-background">Matcha Time</span>
                </div>
                <div class="mb-xl">
                    <h2 class="font-headline-lg text-headline-lg text-on-background">Start creating an account</h2>
                    <p class="font-body-md text-body-md text-on-secondary-container mt-xs">Create your account to start entering restaurants.</p>
                </div>
                <form class="space-y-lg" action="actionAuth.php?aksi=register" method="post">
                    <!-- Full Name -->
                    <div class="space-y-xs">
                        <label class="font-label-lg text-label-lg text-on-surface-variant" for="full-name">Full Name</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">person</span>
                            <input class="w-full pl-[50px] pr-md py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 form-input-focus transition-all " id="full-name" placeholder="your name" type="text" name="nama"/>
                        </div>
                    </div>
                    <!-- Alamat -->
                    <div class="space-y-xs">
                        <label class="font-label-lg text-label-lg text-on-surface-variant" for="alamat">Alamat</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">person</span>
                            <input class="w-full pl-[50px] pr-md py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 form-input-focus transition-all " id="alamat" placeholder="Alamat" type="text" name="alamat"/>
                        </div>
                    </div>
                    <!-- No HP -->
                    <div class="space-y-xs">
                        <label class="font-label-lg text-label-lg text-on-surface-variant" for="no-hp">No HP</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">phone</span>
                            <input class="w-full pl-[50px] pr-md py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 form-input-focus transition-all" id="no-hp" placeholder="+62" type="text" name="no_hp" />
                        </div>
                    </div>
                    <!-- Full Name -->
                    <div class="space-y-xs">
                        <label class="font-label-lg text-label-lg text-on-surface-variant" for="full-name">Username</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">person</span>
                            <input class="w-full pl-[50px] pr-md py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 form-input-focus transition-all " id="full-name" placeholder="nama pengguna" type="text" name="username" />
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="space-y-xs">
                        <label class="font-label-lg text-label-lg text-on-surface-variant" for="password">Password</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">lock</span>
                            <input class="w-full pl-[50px] pr-xl py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 form-input-focus transition-all" id="password" placeholder="••••••••" type="password" name="password" />
                            <button class="absolute right-md top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors" type="button">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </div>
                    </div>
                  
                    <!-- Terms & Conditions -->
                    <div class="flex items-start gap-md">
                        <div class="pt-0.5">
                            <input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary-fixed transition-all cursor-pointer" id="terms" type="checkbox" />
                        </div>
                        <label class="font-body-sm text-body-sm text-on-surface-variant select-none cursor-pointer" for="terms">
                            I agree to the <a class="text-primary font-semibold hover:underline" href="#">Terms &amp; Conditions</a> and <a class="text-primary font-semibold hover:underline" href="#">Privacy Policy</a> of Warung Averroes.
                        </label>
                    </div>
                    <!-- Action Button -->
                    <button class="w-full bg-primary-container text-on-primary-container font-label-lg text-label-lg py-4 rounded-xl shadow-lg shadow-primary-container/20 hover:bg-primary transition-all active:scale-[0.98] flex items-center justify-center gap-sm" type="submit">
                        Create Account
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </form>
                <div class="mt-xl pt-lg border-t border-surface-container-highest flex flex-col items-center gap-md">
                    <p class="font-body-md text-body-md text-on-secondary-container">Already have an account?</p>
                    <a class="inline-flex items-center gap-xs text-primary font-semibold hover:gap-sm transition-all" href="./login.php">
                        Log in to Terminal
                        <span class="material-symbols-outlined text-[20px]">login</span>
                    </a>
                </div>
                <div class="mt-xl flex justify-center gap-lg">
                    <a class="text-outline hover:text-on-background transition-colors text-xs uppercase tracking-widest font-bold" href="#">Support</a>
                    <a class="text-outline hover:text-on-background transition-colors text-xs uppercase tracking-widest font-bold" href="#">Manual</a>
                    <a class="text-outline hover:text-on-background transition-colors text-xs uppercase tracking-widest font-bold" href="#">Enterprise</a>
                </div>
            </div>
        </section>
    </main>
    <!-- Background Decoration for Mobile -->
    <div class="md:hidden fixed -top-20 -right-20 w-40 h-40 bg-primary-fixed-dim/20 rounded-full blur-[60px] -z-10"></div>
    <div class="md:hidden fixed -bottom-20 -left-20 w-40 h-40 bg-primary-container/10 rounded-full blur-[60px] -z-10"></div>
    <script>
        // Simple Interaction logic
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('.material-symbols-outlined').classList.add('text-primary');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('.material-symbols-outlined').classList.remove('text-primary');
            });
        });

        // Toggle password visibility
        const toggleBtn = document.querySelector('button[type="button"]');
        const passInput = document.getElementById('password');
        if (toggleBtn && passInput) {
            toggleBtn.addEventListener('click', () => {
                const isPass = passInput.type === 'password';
                passInput.type = isPass ? 'text' : 'password';
                toggleBtn.querySelector('span').innerText = isPass ? 'visibility_off' : 'visibility';
            });
        }
    </script>
</body>

</html>