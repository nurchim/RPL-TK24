<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Najwa Kania Hafizhah
// NIM       : 240104009
// Username  : najwa
//
// Aturan: seluruh HTML, CSS, JavaScript, dan PHP tugas mahasiswa
//          ditempatkan pada SATU file ini.
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Najwa Kania Hafizhah',
    'nim' => '240104009',
    'username' => 'najwa',
];

$pageTitle = 'Interface Web - ' . $student['name'];
$currentYear = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tugas interface web Rekayasa Perangkat Lunak">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <style>
        /* =====================================================
           ROOT / THEME
        ===================================================== */
        :root {
            --bg: #f4f7ff;
            --surface: rgba(255, 255, 255, .82);
            --surface-solid: #ffffff;
            --text: #172033;
            --muted: #68738a;
            --primary: #4f46e5;
            --primary-light: #818cf8;
            --primary-dark: #3730a3;
            --secondary: #06b6d4;
            --border: rgba(148, 163, 184, .25);
            --radius: 22px;
            --shadow: 0 20px 60px rgba(30, 41, 59, .10);
            --transition: .3s ease;
        }

        /* DARK MODE */
        body.dark {
            --bg: #0b1020;
            --surface: rgba(22, 30, 52, .82);
            --surface-solid: #161e34;
            --text: #f1f5f9;
            --muted: #a7b0c4;
            --border: rgba(148, 163, 184, .18);
            --shadow: 0 20px 60px rgba(0, 0, 0, .3);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family:
                Inter,
                ui-sans-serif,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(79, 70, 229, .12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 20%,
                    rgba(6, 182, 212, .10),
                    transparent 25%
                ),
                var(--bg);

            color: var(--text);
            line-height: 1.6;
            transition: background .4s ease, color .4s ease;
            overflow-x: hidden;
        }

        /* =====================================================
           BACKGROUND DECORATION
        ===================================================== */

        .background-shape {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
            z-index: -1;
            opacity: .35;
        }

        .shape-1 {
            width: 280px;
            height: 280px;
            background: #6366f1;
            top: 15%;
            left: -120px;
        }

        .shape-2 {
            width: 250px;
            height: 250px;
            background: #06b6d4;
            bottom: 5%;
            right: -100px;
        }

        /* =====================================================
           GENERAL
        ===================================================== */

        .container {
            width: min(1100px, calc(100% - 32px));
            margin-inline: auto;
        }

        section {
            padding: 55px 0;
        }

        /* =====================================================
           NAVBAR
        ===================================================== */

        .topbar {
            position: sticky;
            top: 0;
            z-index: 100;

            background: rgba(255, 255, 255, .72);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border-bottom: 1px solid var(--border);
            transition: background .3s ease;
        }

        body.dark .topbar {
            background: rgba(11, 16, 32, .75);
        }

        .nav {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            font-weight: 900;
            letter-spacing: -.03em;
            font-size: 1.1rem;
        }

        .brand span {
            color: var(--primary);
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav a {
            color: var(--text);
            text-decoration: none;
            font-weight: 650;
            position: relative;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            left: 0;
            bottom: -6px;
            background: var(--primary);
            transition: width .3s ease;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* =====================================================
           DARK MODE BUTTON
        ===================================================== */

        .theme-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--text);
            cursor: pointer;
            font-size: 1.1rem;

            display: grid;
            place-items: center;

            transition: transform .3s ease, background .3s ease;
        }

        .theme-btn:hover {
            transform: rotate(20deg) scale(1.08);
            background: var(--primary);
            color: white;
        }

        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            padding: 100px 0 65px;
            min-height: 650px;
            display: flex;
            align-items: center;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 50px;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            color: var(--primary);
            font-weight: 850;
            text-transform: uppercase;
            letter-spacing: .1em;
            font-size: .78rem;

            padding: 8px 14px;
            border-radius: 50px;

            background: rgba(79, 70, 229, .09);
            border: 1px solid rgba(79, 70, 229, .15);
        }

        .eyebrow::before {
            content: "";
            width: 8px;
            height: 8px;
            background: #22c55e;
            border-radius: 50%;
            box-shadow: 0 0 0 5px rgba(34, 197, 94, .12);
        }

        h1 {
            font-size: clamp(2.5rem, 6vw, 5rem);
            line-height: 1.02;
            letter-spacing: -.065em;
            margin: 20px 0;
        }

        h1 .gradient {
            background: linear-gradient(
                90deg,
                var(--primary),
                #8b5cf6,
                var(--secondary)
            );

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        h2 {
            font-size: clamp(1.6rem, 3vw, 2.3rem);
            letter-spacing: -.04em;
            margin-top: 0;
        }

        .lead {
            color: var(--muted);
            font-size: 1.1rem;
            max-width: 700px;
        }

        /* =====================================================
           BUTTON
        ===================================================== */

        .actions {
            display: flex;
            gap: 13px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 13px 20px;
            border-radius: 14px;

            text-decoration: none;
            font-weight: 800;

            border: 1px solid var(--border);
            transition:
                transform .25s ease,
                box-shadow .25s ease,
                background .25s ease;
        }

        .btn:hover {
            transform: translateY(-4px);
        }

        .btn-primary {
            background: linear-gradient(
                135deg,
                var(--primary),
                #7c3aed
            );

            color: white;
            border-color: transparent;

            box-shadow:
                0 12px 30px rgba(79, 70, 229, .28);
        }

        .btn-primary:hover {
            box-shadow:
                0 16px 35px rgba(79, 70, 229, .4);
        }

        .btn-secondary {
            background: var(--surface);
            color: var(--text);
            backdrop-filter: blur(10px);
        }

        /* =====================================================
           PROFILE CARD
        ===================================================== */

        .profile-card,
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }

        .profile-card {
            padding: 30px;
            position: relative;
            overflow: hidden;

            transform-style: preserve-3d;
            transition:
                transform .25s ease,
                box-shadow .3s ease;
        }

        .profile-card::before {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;

            background: linear-gradient(
                135deg,
                var(--primary),
                var(--secondary)
            );

            filter: blur(40px);
            opacity: .2;
            top: -80px;
            right: -80px;
        }

        .profile-card:hover {
            box-shadow:
                0 25px 70px rgba(79, 70, 229, .16);
        }

        .avatar {
            width: 82px;
            height: 82px;
            border-radius: 25px;

            display: grid;
            place-items: center;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    #8b5cf6
                );

            color: white;
            font-size: 2rem;
            font-weight: 900;

            margin-bottom: 20px;

            box-shadow:
                0 15px 30px rgba(79, 70, 229, .25);
        }

        .profile-card h2 {
            margin-bottom: 25px;
        }

        .meta {
            display: grid;
            gap: 0;
        }

        .meta-row {
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
        }

        .meta-row:last-child {
            border-bottom: 0;
        }

        .label {
            display: block;
            color: var(--muted);
            font-size: .8rem;
            margin-bottom: 3px;
        }

        .value {
            font-weight: 750;
            word-break: break-word;
        }

        /* =====================================================
           SECTION TITLE
        ===================================================== */

        .section-heading {
            max-width: 650px;
            margin-bottom: 30px;
        }

        .section-heading p {
            color: var(--muted);
        }

        /* =====================================================
           CARDS
        ===================================================== */

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            padding: 28px;
            box-shadow: none;

            transition:
                transform .3s ease,
                box-shadow .3s ease,
                border-color .3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow);
            border-color: rgba(79, 70, 229, .3);
        }

        .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;

            display: grid;
            place-items: center;

            font-size: 1.3rem;

            background: rgba(79, 70, 229, .1);
            margin-bottom: 20px;
        }

        .card:nth-child(2) .card-icon {
            background: rgba(6, 182, 212, .1);
        }

        .card:nth-child(3) .card-icon {
            background: rgba(139, 92, 246, .1);
        }

        .card strong {
            font-size: 1.05rem;
        }

        .card p {
            color: var(--muted);
            margin-bottom: 0;
        }

        /* =====================================================
           STATS
        ===================================================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 30px;
        }

        .stat {
            text-align: center;
            padding: 25px;

            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 18px;
        }

        .stat-number {
            display: block;
            font-size: 2rem;
            font-weight: 900;

            background: linear-gradient(
                90deg,
                var(--primary),
                var(--secondary)
            );

            -webkit-background-clip: text;
            color: transparent;
        }

        .stat-label {
            color: var(--muted);
            font-size: .9rem;
        }

        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            padding: 55px 0;
            color: var(--muted);
            text-align: center;
        }

        .footer-line {
            width: 80px;
            height: 4px;
            border-radius: 20px;
            background: linear-gradient(
                90deg,
                var(--primary),
                var(--secondary)
            );

            margin: 0 auto 20px;
        }

        /* =====================================================
           SCROLL REVEAL
        ===================================================== */

        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition:
                opacity .8s ease,
                transform .8s ease;
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* =====================================================
           BACK TO TOP
        ===================================================== */

        #backTop {
            position: fixed;
            right: 24px;
            bottom: 24px;

            width: 46px;
            height: 46px;

            border: 0;
            border-radius: 50%;

            background: var(--primary);
            color: white;

            cursor: pointer;

            display: grid;
            place-items: center;

            font-size: 1.1rem;

            opacity: 0;
            visibility: hidden;

            transform: translateY(20px);

            transition:
                opacity .3s ease,
                visibility .3s ease,
                transform .3s ease;

            box-shadow:
                0 10px 25px rgba(79, 70, 229, .3);

            z-index: 50;
        }

        #backTop.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        #backTop:hover {
            transform: translateY(-4px);
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 780px) {
            .hero-grid,
            .grid-3,
            .stats {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 65px;
                min-height: auto;
            }

            .nav {
                align-items: flex-start;
                padding: 15px 0;
                flex-direction: column;
                gap: 12px;
            }

            .nav-right {
                width: 100%;
                justify-content: space-between;
            }

            .nav-links {
                gap: 14px;
            }

            h1 {
                font-size: 3rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>

<!-- Background -->
<div class="background-shape shape-1"></div>
<div class="background-shape shape-2"></div>

<header class="topbar">
    <div class="container nav">

        <div class="brand">
            RPL / <span><?= htmlspecialchars($student['username']) ?></span>
        </div>

        <div class="nav-right">
            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="#home" class="active">Home</a>
                <a href="#fitur">Fitur</a>
                <a href="#tentang">Tentang</a>
            </nav>

            <button
                class="theme-btn"
                id="themeToggle"
                aria-label="Ganti tema"
                title="Ganti tema"
            >
                🌙
            </button>
        </div>

    </div>
</header>

<main>

    <!-- HERO -->
    <section class="hero" id="home">
        <div class="container hero-grid">

            <div class="reveal">

                <div class="eyebrow">
                    Tugas Interface Web
                </div>

                <h1>
                    Bangun interface
                    <span class="gradient" id="typingText">
                        yang menarik.
                    </span>
                </h1>

                <p class="lead">
                    Interface modern yang dirancang dengan fokus pada
                    tampilan visual, kemudahan penggunaan, responsivitas,
                    dan pengalaman pengguna.
                </p>

                <div class="actions">
                    <a class="btn btn-primary" href="#fitur">
                        ✨ Lihat Komponen
                    </a>

                    <a class="btn btn-secondary" href="#tentang">
                        👤 Identitas
                    </a>
                </div>

            </div>

            <!-- PROFILE -->
            <aside
                class="profile-card reveal"
                id="tentang"
                data-tilt
            >

                <div class="avatar">
                    <?= strtoupper(substr($student['username'], 0, 1)) ?>
                </div>

                <h2>
                    <?= htmlspecialchars($student['name']) ?>
                </h2>

                <div class="meta">

                    <div class="meta-row">
                        <span class="label">NIM</span>
                        <span class="value">
                            <?= htmlspecialchars($student['nim']) ?>
                        </span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Username</span>
                        <span class="value">
                            <?= htmlspecialchars($student['username']) ?>
                        </span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Mata Kuliah</span>
                        <span class="value">
                            Rekayasa Perangkat Lunak
                        </span>
                    </div>

                </div>
            </aside>

        </div>
    </section>

    <!-- FITUR -->
    <section id="fitur">

        <div class="container">

            <div class="section-heading reveal">
                <div class="eyebrow">Interface</div>

                <h2>
                    Contoh area interface
                </h2>

                <p>
                    Beberapa prinsip yang digunakan dalam pembuatan
                    interface ini untuk menghasilkan halaman yang
                    lebih modern dan nyaman digunakan.
                </p>
            </div>

            <div class="grid-3">

                <article class="card reveal">

                    <div class="card-icon">
                        🎨
                    </div>

                    <strong>
                        01 · Informasi
                    </strong>

                    <p>
                        Gunakan hierarki visual, warna, dan tipografi
                        agar informasi utama mudah ditemukan pengguna.
                    </p>

                </article>

                <article class="card reveal">

                    <div class="card-icon">
                        ⚡
                    </div>

                    <strong>
                        02 · Interaksi
                    </strong>

                    <p>
                        Tambahkan tombol, animasi, efek hover,
                        dark mode, dan interaksi JavaScript.
                    </p>

                </article>

                <article class="card reveal">

                    <div class="card-icon">
                        📱
                    </div>

                    <strong>
                        03 · Responsif
                    </strong>

                    <p>
                        Layout dapat menyesuaikan ukuran layar
                        desktop, tablet, maupun perangkat mobile.
                    </p>

                </article>

            </div>

            <!-- STATS -->
            <div class="stats">

                <div class="stat reveal">
                    <span class="stat-number" data-target="3">0</span>
                    <span class="stat-label">
                        Komponen Utama
                    </span>
                </div>

                <div class="stat reveal">
                    <span class="stat-number" data-target="100">0</span>
                    <span class="stat-label">
                        Responsif
                    </span>
                </div>

                <div class="stat reveal">
                    <span class="stat-number" data-target="1">0</span>
                    <span class="stat-label">
                        File PHP
                    </span>
                </div>

            </div>

        </div>

    </section>

</main>

<footer>
    <div class="container">

        <div class="footer-line"></div>

        &copy;
        <?= htmlspecialchars($currentYear) ?>
        <?= htmlspecialchars($student['name']) ?>
        · Rekayasa Perangkat Lunak

    </div>
</footer>

<!-- BACK TO TOP -->
<button id="backTop" aria-label="Kembali ke atas">
    ↑
</button>


<script>
    /* =========================================================
       DARK MODE
    ========================================================= */

    const themeToggle = document.getElementById("themeToggle");

    const savedTheme = localStorage.getItem("theme");

    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        themeToggle.textContent = "☀️";
    }

    themeToggle.addEventListener("click", () => {

        document.body.classList.toggle("dark");

        const isDark = document.body.classList.contains("dark");

        themeToggle.textContent = isDark ? "☀️" : "🌙";

        localStorage.setItem(
            "theme",
            isDark ? "dark" : "light"
        );
    });


    /* =========================================================
       SCROLL REVEAL
    ========================================================= */

    const revealElements =
        document.querySelectorAll(".reveal");

    const revealObserver = new IntersectionObserver(
        (entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {

                    entry.target.classList.add("show");

                    revealObserver.unobserve(entry.target);
                }

            });

        },
        {
            threshold: 0.15
        }
    );

    revealElements.forEach((element) => {
        revealObserver.observe(element);
    });


    /* =========================================================
       TYPING EFFECT
    ========================================================= */

    const typingText =
        document.getElementById("typingText");

    const words = [
        "yang menarik.",
        "yang modern.",
        "yang responsif.",
        "yang mudah digunakan."
    ];

    let wordIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function typingEffect() {

        const currentWord =
            words[wordIndex];

        if (!deleting) {

            typingText.textContent =
                currentWord.substring(
                    0,
                    charIndex + 1
                );

            charIndex++;

            if (charIndex === currentWord.length) {

                deleting = true;

                setTimeout(
                    typingEffect,
                    1600
                );

                return;
            }

        } else {

            typingText.textContent =
                currentWord.substring(
                    0,
                    charIndex - 1
                );

            charIndex--;

            if (charIndex === 0) {

                deleting = false;

                wordIndex =
                    (wordIndex + 1) % words.length;
            }
        }

        setTimeout(
            typingEffect,
            deleting ? 50 : 90
        );
    }

    typingEffect();


    /* =========================================================
       BACK TO TOP
    ========================================================= */

    const backTop =
        document.getElementById("backTop");

    window.addEventListener("scroll", () => {

        if (window.scrollY > 400) {
            backTop.classList.add("show");
        } else {
            backTop.classList.remove("show");
        }

    });

    backTop.addEventListener("click", () => {

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    });


    /* =========================================================
       ACTIVE NAVIGATION
    ========================================================= */

    const sections =
        document.querySelectorAll("main section");

    const navLinks =
        document.querySelectorAll(".nav-links a");

    window.addEventListener("scroll", () => {

        let current = "";

        sections.forEach((section) => {

            const sectionTop =
                section.offsetTop - 120;

            if (window.scrollY >= sectionTop) {
                current = section.getAttribute("id");
            }

        });

        navLinks.forEach((link) => {

            link.classList.remove("active");

            if (
                link.getAttribute("href") ===
                "#" + current
            ) {
                link.classList.add("active");
            }

        });

    });


    /* =========================================================
       PROFILE 3D TILT EFFECT
    ========================================================= */

    const tiltCard =
        document.querySelector("[data-tilt]");

    if (tiltCard) {

        tiltCard.addEventListener("mousemove", (event) => {

            const rect =
                tiltCard.getBoundingClientRect();

            const x =
                event.clientX - rect.left;

            const y =
                event.clientY - rect.top;

            const centerX =
                rect.width / 2;

            const centerY =
                rect.height / 2;

            const rotateX =
                ((y - centerY) / centerY) * -4;

            const rotateY =
                ((x - centerX) / centerX) * 4;

            tiltCard.style.transform =
                `perspective(900px)
                 rotateX(${rotateX}deg)
                 rotateY(${rotateY}deg)
                 translateY(-5px)`;
        });

        tiltCard.addEventListener("mouseleave", () => {

            tiltCard.style.transform =
                "perspective(900px) rotateX(0) rotateY(0)";

        });

    }


    /* =========================================================
       NUMBER COUNTER
    ========================================================= */

    const counters =
        document.querySelectorAll(".stat-number");

    const counterObserver =
        new IntersectionObserver(
            (entries, observer) => {

                entries.forEach((entry) => {

                    if (!entry.isIntersecting) return;

                    const counter =
                        entry.target;

                    const target =
                        Number(
                            counter.dataset.target
                        );

                    let current = 0;

                    const increment =
                        Math.max(
                            1,
                            Math.ceil(target / 40)
                        );

                    const updateCounter = () => {

                        current += increment;

                        if (current >= target) {

                            counter.textContent =
                                target + (
                                    target === 100
                                    ? "%"
                                    : ""
                                );

                            return;
                        }

                        counter.textContent =
                            current;

                        requestAnimationFrame(
                            updateCounter
                        );
                    };

                    updateCounter();

                    observer.unobserve(counter);
                });

            },
            {
                threshold: .7
            }
        );

    counters.forEach((counter) => {
        counterObserver.observe(counter);
    });
</script>

</body>
</html>