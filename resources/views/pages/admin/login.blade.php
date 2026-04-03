<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Login - KYH Kita Yang Handle Wedding & Event Organizer">
    <title>Admin Login — KYH Kita Yang Handle</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Vite CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* ===================================================
           KYH ADMIN LOGIN — PREMIUM IVORY THEME
           =================================================== */
        :root {
            --ivory:          #FDFAF5;
            --ivory-deep:     #F5F0E8;
            --ivory-shadow:   #EDE6D8;
            --gold:           #C9A84C;
            --gold-light:     #E2BE7A;
            --gold-mid:       #D4AF37;
            --gold-dark:      #A07830;
            --gold-text:      #8B6914;
            --charcoal:       #2C2C2C;
            --charcoal-soft:  #4A4A4A;
            --text-muted:     #7A7166;
            --border-gold:    rgba(201, 168, 76, 0.35);
            --border-input:   rgba(44, 44, 44, 0.18);
            --shadow-gold:    rgba(201, 168, 76, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: 'Inter', sans-serif;
            background-color: var(--ivory);
            color: var(--charcoal);
            -webkit-font-smoothing: antialiased;
        }

        /* --------- BACKGROUND TEXTURE --------- */
        .login-bg {
            min-height: 100vh;
            background-color: var(--ivory);
            background-image:
                /* Subtle dot grid texture */
                radial-gradient(circle, rgba(201,168,76,0.06) 1px, transparent 1px),
                /* Gentle radial glow center */
                radial-gradient(ellipse 80% 70% at 50% 50%, rgba(201,168,76,0.04) 0%, transparent 70%),
                /* Ivory gradient depth */
                linear-gradient(160deg, #FDFAF5 0%, #F7F1E8 45%, #F1EAD8 100%);
            background-size: 28px 28px, 100% 100%, 100% 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            position: relative;
            overflow: hidden;
        }

        /* Watermark rings decoration */
        .login-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                /* Wedding ring silhouette watermark - ring 1 */
                radial-gradient(ellipse 120px 120px at 15% 25%, transparent 55px, rgba(201,168,76,0.04) 56px, rgba(201,168,76,0.06) 63px, transparent 64px),
                /* Wedding ring silhouette watermark - ring 2 */
                radial-gradient(ellipse 120px 120px at 19% 25%, transparent 55px, rgba(201,168,76,0.04) 56px, rgba(201,168,76,0.06) 63px, transparent 64px),
                /* Event lights top right */
                radial-gradient(circle 180px at 85% 10%, rgba(201,168,76,0.06) 0%, transparent 100%),
                /* Soft bokeh corner glow */
                radial-gradient(circle 300px at 5% 85%, rgba(201,168,76,0.04) 0%, transparent 100%),
                radial-gradient(circle 250px at 95% 80%, rgba(212,175,55,0.05) 0%, transparent 100%);
            pointer-events: none;
        }

        /* Event light streaks */
        .login-bg::after {
            content: '';
            position: absolute;
            top: -100px;
            right: -80px;
            width: 400px;
            height: 600px;
            background: conic-gradient(from 200deg at 80% 10%,
                transparent 0deg,
                rgba(201,168,76,0.03) 10deg,
                transparent 20deg,
                rgba(201,168,76,0.025) 30deg,
                transparent 40deg
            );
            pointer-events: none;
        }

        /* Floating bokeh orbs */
        .bokeh-container {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .bokeh-orb {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(201,168,76,0.18) 0%, transparent 70%);
            animation: floatBokeh var(--dur, 8s) ease-in-out infinite alternate;
        }

        @keyframes floatBokeh {
            from { transform: translateY(0px) scale(1); opacity: 0.6; }
            to   { transform: translateY(-20px) scale(1.08); opacity: 1; }
        }

        /* --------- LOGIN CARD --------- */
        .login-card {
            position: relative;
            width: 100%;
            max-width: 440px;
            background: rgba(253, 250, 245, 0.88);
            backdrop-filter: blur(20px) saturate(1.4);
            -webkit-backdrop-filter: blur(20px) saturate(1.4);
            border: 1px solid var(--border-gold);
            border-radius: 2px;
            padding: 3rem 3rem 2.5rem;
            box-shadow:
                0 0 0 0.5px rgba(201,168,76,0.15),
                0 4px 6px -1px rgba(44,44,44,0.04),
                0 20px 50px -10px rgba(44,44,44,0.10),
                inset 0 1px 0 rgba(255,255,255,0.90),
                0 0 80px rgba(201,168,76,0.06);
            animation: cardEntrance 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @keyframes cardEntrance {
            from {
                opacity: 0;
                transform: translateY(28px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Ultra-thin gold border glow */
        .card-border-glow {
            position: absolute;
            inset: -1px;
            border-radius: 3px;
            background: linear-gradient(135deg,
                rgba(201,168,76,0.4) 0%,
                rgba(226,190,122,0.2) 25%,
                rgba(201,168,76,0.1) 50%,
                rgba(226,190,122,0.2) 75%,
                rgba(201,168,76,0.35) 100%
            );
            z-index: -1;
            pointer-events: none;
        }

        /* --------- LOGO AREA --------- */
        .logo-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
        }

        .logo-img {
            height: 80px;
            width: auto;
            object-fit: contain;
            filter:
                drop-shadow(0 0 8px rgba(201,168,76,0.5))
                drop-shadow(0 2px 4px rgba(160,120,48,0.3));
            animation: logoGlow 3s ease-in-out infinite alternate;
        }

        @keyframes logoGlow {
            from { filter: drop-shadow(0 0 6px rgba(201,168,76,0.4)) drop-shadow(0 2px 4px rgba(160,120,48,0.25)); }
            to   { filter: drop-shadow(0 0 14px rgba(201,168,76,0.7)) drop-shadow(0 2px 8px rgba(160,120,48,0.4)); }
        }

        .brand-name {
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.35em;
            color: var(--charcoal);
            text-transform: uppercase;
            margin-top: 0.85rem;
            margin-bottom: 0.2rem;
        }

        .brand-sub {
            font-family: 'Cormorant Garamond', 'Playfair Display', serif;
            font-size: 0.72rem;
            font-weight: 400;
            letter-spacing: 0.25em;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        /* Gold divider */
        .gold-divider {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 1.5rem 0 1.75rem;
        }

        .gold-divider::before,
        .gold-divider::after {
            content: '';
            flex: 1;
            height: 0.5px;
            background: linear-gradient(90deg, transparent, rgba(201,168,76,0.5), transparent);
        }

        .gold-divider-diamond {
            width: 5px;
            height: 5px;
            background: var(--gold);
            transform: rotate(45deg);
            opacity: 0.6;
        }

        /* --------- FORM FIELDS --------- */
        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-size: 0.695rem;
            font-weight: 600;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--charcoal-soft);
            margin-bottom: 0.55rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: var(--gold-dark);
            opacity: 0.7;
            transition: opacity 0.2s ease;
        }

        .input-icon svg {
            width: 15px;
            height: 15px;
        }

        .form-input {
            width: 100%;
            padding: 0.85rem 1rem 0.85rem 2.75rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            color: var(--charcoal);
            background: rgba(255, 255, 255, 0.75);
            border: 1px solid var(--border-input);
            border-radius: 1px;
            outline: none;
            transition: all 0.25s ease;
            letter-spacing: 0.01em;
        }

        .form-input::placeholder {
            color: rgba(122, 113, 102, 0.5);
            font-weight: 300;
        }

        .form-input:focus {
            background: rgba(255, 255, 255, 0.95);
            border-color: rgba(201, 168, 76, 0.55);
            box-shadow:
                0 0 0 3px rgba(201,168,76,0.08),
                0 1px 4px rgba(201,168,76,0.12);
        }

        .form-input:focus ~ .input-focus-bar {
            width: 100%;
        }

        .form-input:focus + .input-icon-wrapper .input-icon {
            opacity: 1;
        }

        /* Animated bottom border focus line */
        .input-focus-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 1.5px;
            width: 0%;
            background: linear-gradient(90deg, var(--gold-dark), var(--gold), var(--gold-light));
            border-radius: 0 0 1px 1px;
            transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
        }

        input:focus ~ .input-focus-bar {
            width: 100%;
        }

        /* Password toggle */
        .pw-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            opacity: 0.6;
            padding: 0;
            transition: opacity 0.2s ease, color 0.2s ease;
            display: flex;
            align-items: center;
        }

        .pw-toggle:hover {
            opacity: 1;
            color: var(--gold-dark);
        }

        /* --------- GOLD FOIL BUTTON --------- */
        .btn-gold-login {
            width: 100%;
            padding: 0.9rem 1rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #ffffff;
            border: none;
            border-radius: 1px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            background: linear-gradient(135deg,
                #8B6914 0%,
                #A07830 10%,
                #C9A84C 30%,
                #E2BE7A 45%,
                #D4AF37 50%,
                #C9A84C 55%,
                #B8971F 70%,
                #A07830 85%,
                #C9A84C 100%
            );
            background-size: 200% 100%;
            box-shadow:
                0 2px 8px rgba(160, 120, 48, 0.35),
                0 4px 20px rgba(201, 168, 76, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.25),
                inset 0 -1px 0 rgba(0, 0, 0, 0.15);
            margin-top: 0.25rem;
        }

        .btn-gold-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                transparent,
                rgba(255,255,255,0.22),
                transparent
            );
            transition: left 0.5s ease;
        }

        .btn-gold-login:hover {
            background-position: 100% 0;
            box-shadow:
                0 4px 14px rgba(160, 120, 48, 0.45),
                0 8px 28px rgba(201, 168, 76, 0.30),
                inset 0 1px 0 rgba(255, 255, 255, 0.30),
                inset 0 -1px 0 rgba(0, 0, 0, 0.15);
            transform: translateY(-1px);
        }

        .btn-gold-login:hover::before {
            left: 100%;
        }

        .btn-gold-login:active {
            transform: translateY(0px);
            box-shadow:
                0 1px 6px rgba(160, 120, 48, 0.35),
                inset 0 1px 0 rgba(255, 255, 255, 0.15);
        }

        /* Loading spinner */
        .btn-spinner {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            vertical-align: middle;
            margin-right: 0.5rem;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* --------- LINKS --------- */
        .link-subtle {
            color: var(--text-muted);
            font-size: 0.775rem;
            text-decoration: none;
            font-weight: 400;
            transition: color 0.2s ease;
        }

        .link-subtle:hover {
            color: var(--gold-text);
        }

        .link-gold {
            color: var(--gold-text);
            font-size: 0.775rem;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
            border-bottom: 1px solid transparent;
        }

        .link-gold:hover {
            color: var(--gold-dark);
            border-bottom-color: rgba(201,168,76,0.4);
        }

        /* --------- SEPARATOR --------- */
        .sep-line {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 1.25rem 0;
        }

        .sep-line::before,
        .sep-line::after {
            content: '';
            flex: 1;
            height: 0.5px;
            background: rgba(44,44,44,0.1);
        }

        .sep-line span {
            font-size: 0.7rem;
            color: rgba(122,113,102,0.6);
            letter-spacing: 0.08em;
        }

        /* --------- FOOTER BRANDING --------- */
        .card-footer {
            margin-top: 1.75rem;
            padding-top: 1.25rem;
            border-top: 0.5px solid rgba(201,168,76,0.15);
            text-align: center;
        }

        .card-footer p {
            font-size: 0.68rem;
            color: rgba(122,113,102,0.5);
            letter-spacing: 0.05em;
        }

        /* --------- BACK TO HOME --------- */
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.72rem;
            color: var(--text-muted);
            text-decoration: none;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.2s ease;
            margin-bottom: 1.5rem;
        }

        .back-link:hover {
            color: var(--gold-text);
            gap: 0.6rem;
        }

        .back-link svg {
            width: 12px;
            height: 12px;
            transition: transform 0.2s ease;
        }

        .back-link:hover svg {
            transform: translateX(-2px);
        }

        /* --------- ALERT MESSAGES --------- */
        .alert-error {
            background: rgba(220, 38, 38, 0.06);
            border: 1px solid rgba(220, 38, 38, 0.2);
            border-radius: 1px;
            padding: 0.7rem 1rem;
            margin-bottom: 1rem;
            font-size: 0.775rem;
            color: #991B1B;
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
        }

        .alert-success {
            background: rgba(201,168,76,0.06);
            border: 1px solid rgba(201,168,76,0.25);
            border-radius: 1px;
            padding: 0.7rem 1rem;
            margin-bottom: 1rem;
            font-size: 0.775rem;
            color: var(--gold-text);
        }

        /* ===================================================
           RESPONSIVE
           =================================================== */
        @media (max-width: 480px) {
            .login-card {
                padding: 2.25rem 1.75rem 2rem;
                border-radius: 0;
                border-left: none;
                border-right: none;
            }

            .card-border-glow {
                display: none;
            }
        }

        /* Input focus ring override */
        input:focus-visible {
            outline: none;
        }
    </style>
</head>
<body>

<div class="login-bg">

    {{-- Bokeh particles --}}
    <div class="bokeh-container">
        <div class="bokeh-orb" style="width:200px;height:200px;top:8%;left:5%;--dur:9s;opacity:0.5;"></div>
        <div class="bokeh-orb" style="width:120px;height:120px;top:65%;left:2%;--dur:7s;animation-delay:1s;opacity:0.4;"></div>
        <div class="bokeh-orb" style="width:180px;height:180px;top:10%;right:3%;--dur:11s;animation-delay:2s;opacity:0.4;"></div>
        <div class="bokeh-orb" style="width:90px;height:90px;top:50%;right:5%;--dur:8s;animation-delay:3s;opacity:0.5;"></div>
        <div class="bokeh-orb" style="width:140px;height:140px;bottom:8%;left:30%;--dur:10s;animation-delay:1.5s;opacity:0.35;"></div>
        {{-- Wedding ring watermark shapes --}}
        <div style="
            position:absolute;
            width:90px; height:90px;
            border-radius:50%;
            border: 5px solid rgba(201,168,76,0.07);
            top:12%; left:8%;
            pointer-events:none;
        "></div>
        <div style="
            position:absolute;
            width:90px; height:90px;
            border-radius:50%;
            border: 5px solid rgba(201,168,76,0.07);
            top:12%; left:12%;
            pointer-events:none;
        "></div>
        {{-- Bottom right rings --}}
        <div style="
            position:absolute;
            width:70px; height:70px;
            border-radius:50%;
            border: 4px solid rgba(201,168,76,0.06);
            bottom:10%; right:8%;
            pointer-events:none;
        "></div>
        <div style="
            position:absolute;
            width:70px; height:70px;
            border-radius:50%;
            border: 4px solid rgba(201,168,76,0.06);
            bottom:10%; right:12%;
            pointer-events:none;
        "></div>
    </div>

    {{-- Card --}}
    <div class="login-card" x-data="{
        showPassword: false,
        loading: false,
        username: '',
        password: '',
        submitForm() {
            this.loading = true;
            this.$refs.loginForm.submit();
        }
    }">
        <div class="card-border-glow"></div>

        {{-- Back to Home --}}
        <div>
            <a href="{{ route('home') }}" class="back-link">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
                </svg>
                Kembali ke Beranda
            </a>
        </div>

        {{-- Logo & Branding --}}
        <div class="logo-wrapper">
            <img
                src="{{ asset('assets/icons/icons_kyh.png') }}"
                alt="KYH Logo"
                class="logo-img"
            >
            <p class="brand-name">Kita Yang Handle</p>
            <p class="brand-sub">Wedding &amp; Event Organizer</p>
        </div>

        {{-- Gold Divider --}}
        <div class="gold-divider">
            <div class="gold-divider-diamond"></div>
        </div>

        {{-- Session Alerts --}}
        @if (session('error'))
            <div class="alert-error" role="alert">
                <svg style="width:14px;height:14px;flex-shrink:0;margin-top:1px;" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                </svg>
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        {{-- Login Form --}}
        <form
            x-ref="loginForm"
            action="{{ route('admin.login.post') }}"
            method="POST"
            @submit.prevent="submitForm"
            novalidate
        >
            @csrf

            {{-- Username Field --}}
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <div class="input-wrapper">
                    <span class="input-icon">
                        {{-- User Icon --}}
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                    </span>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        x-model="username"
                        class="form-input"
                        placeholder="admin"
                        value="{{ old('username') }}"
                        autocomplete="username"
                        required
                    >
                    <div class="input-focus-bar"></div>
                </div>
                @error('username')
                    <p style="color:#991B1B;font-size:0.72rem;margin-top:0.35rem;">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password Field --}}
            <div class="form-group">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:0.55rem;">
                    <label for="password" class="form-label" style="margin-bottom:0;">Kata Sandi</label>
                    <a href="{{ route('admin.password.request') }}" class="link-subtle" style="font-size:0.7rem;">Lupa Kata Sandi?</a>
                </div>
                <div class="input-wrapper">
                    <span class="input-icon">
                        {{-- Lock Icon --}}
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </span>
                    <input
                        :type="showPassword ? 'text' : 'password'"
                        id="password"
                        name="password"
                        x-model="password"
                        class="form-input"
                        placeholder="••••••••"
                        autocomplete="current-password"
                        required
                        style="padding-right:3rem;"
                    >
                    <div class="input-focus-bar"></div>
                    {{-- Show/Hide toggle --}}
                    <button
                        type="button"
                        class="pw-toggle"
                        @click="showPassword = !showPassword"
                        :title="showPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi'"
                    >
                        {{-- Eye open --}}
                        <svg x-show="!showPassword" style="width:16px;height:16px;" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{-- Eye closed --}}
                        <svg x-show="showPassword" style="width:16px;height:16px;display:none;" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                        </svg>
                    </button>
                </div>
                @error('password')
                    <p style="color:#991B1B;font-size:0.72rem;margin-top:0.35rem;">{{ $message }}</p>
                @enderror
            </div>



            {{-- LOGIN BUTTON --}}
            <button
                type="submit"
                id="btn-login"
                class="btn-gold-login"
                :disabled="loading"
            >
                <span x-show="loading">
                    <span class="btn-spinner"></span>
                    Memverifikasi...
                </span>
                <span x-show="!loading">LOGIN</span>
            </button>

        </form>



        {{-- Card Footer --}}
        <div class="card-footer">
            <p>© {{ date('Y') }} Kita Yang Handle &nbsp;·&nbsp; Admin Panel</p>
        </div>

    </div>
</div>

</body>
</html>
