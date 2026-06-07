<?php include './actionAuth.php' ?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login | Warung Averroes POS</title>
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
                        "on-primary-fixed": "#210000",
                        "surface-variant": "#e0e3e5",
                        "primary-fixed": "#fb6f6f",
                        "on-error": "#ffffff",
                        "inverse-primary": "#de4e4e",
                        "tertiary-container": "#e29100",
                        "primary": "#8a4545fd",
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
                        "on-surface-variant": "#4a3c3c",
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

        .login-image-overlay {
            background: linear-gradient(to top, rgba(0, 108, 73, 0.8), rgba(0, 108, 73, 0.2));
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex">
    <!-- Split Screen Layout -->
    <main class="w-full flex flex-row min-h-screen">
        <!-- Left Side: Login Form (Canvas) -->
        <section class="w-full flex flex-col justify-center items-center px-lg sm:px-xl py-xl bg-white">
            <div class="max-w-md w-full bg-white rounded-2xl shadow-lg p-xl space-y-xl">
                <!-- Branding Anchor -->
                <header class="space-y-sm">
                    <div class="flex items-center space-x-sm">

                        <h1 class="font-headline-md text-headline-md text-primary">Mie Kobong</h1>
                    </div>
                    <div class="space-y-xs">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Welcome</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Login to your account</p>
                    </div>
                </header>
                <!-- Login Form -->
                <form action="actionAuth.php?aksi=login" class="space-y-lg" id="loginForm" method="post" >
                    <div class="space-y-md">
                        <!-- Email Field -->
                        <div class="space-y-xs">
                            <label class="font-label-lg text-label-lg text-on-surface-variant block" for="email">Email or Username</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-outline">
                                    <span class="material-symbols-outlined" data-icon="mail">mail</span>
                                </div>
                                <input class="w-full h-12 pl-10 pr-4 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary transition-all duration-200 outline-none font-body-md text-body-md" id="email" name="username" placeholder="Email or Username" type="text" />
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div class="space-y-xs">
                            <label class="font-label-lg text-label-lg text-on-surface-variant block" for="password">Password</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-outline">
                                    <span class="material-symbols-outlined" data-icon="lock">lock</span>
                                </div>
                                <input class="w-full h-12 pl-10 pr-12 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary transition-all duration-200 outline-none font-body-md text-body-md" id="password" name="password" placeholder="••••••••" type="password" />
                                <button class="absolute inset-y-0 right-0 pr-3 flex items-center text-outline hover:text-primary transition-colors" onclick="togglePassword()" type="button">
                                    <span class="material-symbols-outlined" data-icon="visibility" id="passwordIcon">visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Helpers -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input class="h-5 w-5 rounded border-outline-variant text-primary focus:ring-primary-container cursor-pointer transition-all" id="remember" name="remember" type="checkbox" />
                            <label class="ml-2 block font-label-lg text-label-lg text-on-surface-variant cursor-pointer" for="remember">Remember me</label>
                        </div>
                        <a class="font-label-lg text-label-lg text-primary hover:text-on-primary-fixed-variant transition-colors" href="#">Forgot password?</a>
                    </div>
                    <!-- Actions -->
                    <button class="w-full h-12 bg-primary-container text-on-primary-container font-headline-sm text-headline-sm rounded-lg hover:brightness-110 active:scale-[0.98] transition-all duration-200 shadow-sm flex items-center justify-center space-x-sm" type="submit">
                        <span>Login</span>
                        <span class="material-symbols-outlined" data-icon="login">login</span>
                    </button>
                </form>
                <!-- Footer Link -->
                <footer class="text-center pt-md">
                    <p class="font-body-sm text-body-sm text-on-secondary-container">
                        Don't have an account?
                        <a class="text-primary font-label-lg hover:underline" href="./register.php">Register Store</a>
                    </p>
                </footer>
            </div>
        </section>
        <!-- Right Side: Brand Imagery -->
       
    </main>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('passwordIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.innerText = 'visibility_off';
                passwordIcon.setAttribute('data-icon', 'visibility_off');
            } else {
                passwordInput.type = 'password';
                passwordIcon.innerText = 'visibility';
                passwordIcon.setAttribute('data-icon', 'visibility');
            }
        }

        // Simple button press interaction
        const loginBtn = document.querySelector('button[type="submit"]');
        loginBtn.addEventListener('click', function() {
            if (!document.getElementById('email').value || !document.getElementById('password').value) {
                this.classList.add('bg-error');
                setTimeout(() => this.classList.remove('bg-error'), 500);
            }
        });
    </script>
</body>

</html>