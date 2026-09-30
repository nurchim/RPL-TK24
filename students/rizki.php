```php
<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Rizki Dwi Lestari
// NIM       : 240104007
// Username  : rizki
//
// Aturan: seluruh HTML, CSS, JavaScript, dan PHP tugas mahasiswa
//          ditempatkan pada SATU file ini.
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Rizki Dwi Lestari',
    'nim' => '240104007',
    'username' => 'rizki',
];

$pageTitle = 'Interface Web - ' . $student['name'];
$currentYear = date('Y');
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Tugas interface web Rekayasa Perangkat Lunak">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <style>

        /* =====================================================
           RESET & VARIABEL
        ===================================================== */

        :root {
            --bg: #f5f7ff;
            --surface: #ffffff;
            --text: #172033;
            --muted: #68738a;

            --primary: #4f46e5;
            --primary-dark: #3730a3;
            --secondary: #7c3aed;

            --border: #e4e7f0;

            --radius: 20px;

            --shadow:
                0 15px 40px rgba(40, 45, 80, .10);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                Inter,
                ui-sans-serif,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #f7f8ff 0%,
                    #eef2ff 100%
                );

            color: var(--text);
            line-height: 1.6;
        }

        .container {
            width: min(1100px, calc(100% - 32px));
            margin-inline: auto;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .topbar {
            position: sticky;
            top: 0;
            z-index: 100;

            background:
                rgba(255, 255, 255, .88);

            backdrop-filter: blur(14px);

            border-bottom:
                1px solid rgba(220, 225, 240, .8);
        }

        .nav {
            min-height: 70px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 24px;
        }

        .brand {
            font-size: 1.05rem;
            font-weight: 800;

            background:
                linear-gradient(
                    90deg,
                    var(--primary),
                    var(--secondary)
                );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            gap: 8px;
        }

        .nav-links a {
            color: var(--text);

            text-decoration: none;

            font-weight: 650;

            padding: 8px 14px;

            border-radius: 10px;

            transition:
                .25s ease;
        }

        .nav-links a:hover {
            color: white;

            background:
                linear-gradient(
                    90deg,
                    var(--primary),
                    var(--secondary)
                );

            transform: translateY(-2px);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            padding:
                90px 0 55px;

            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            background:
                linear-gradient(
                    135deg,
                    rgba(79, 70, 229, .14),
                    rgba(124, 58, 237, .08)
                );

            border-radius: 50%;

            top: -120px;
            right: -100px;

            filter: blur(10px);
        }

        .hero-grid {
            display: grid;

            grid-template-columns:
                1.25fr .75fr;

            gap: 45px;

            align-items: center;
        }


        /* =====================================================
           HERO TEXT
        ===================================================== */

        .hero-content {
            animation:
                fadeUp .8s ease forwards;
        }

        .eyebrow {
            display: inline-block;

            color: var(--primary);

            background:
                rgba(79, 70, 229, .10);

            padding:
                7px 13px;

            border-radius: 50px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: .08em;

            font-size: .78rem;
        }

        h1 {
            font-size:
                clamp(2.4rem, 6vw, 4.5rem);

            line-height: 1.04;

            letter-spacing: -.055em;

            margin:
                18px 0;
        }

        h1 span {
            background:
                linear-gradient(
                    90deg,
                    var(--primary),
                    var(--secondary)
                );

            -webkit-background-clip: text;

            -webkit-text-fill-color:
                transparent;
        }

        .lead {
            color: var(--muted);

            font-size: 1.08rem;

            max-width: 680px;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .actions {
            display: flex;

            gap: 12px;

            flex-wrap: wrap;

            margin-top: 28px;
        }

        .btn {
            display: inline-block;

            padding:
                12px 19px;

            border-radius: 12px;

            text-decoration: none;

            font-weight: 750;

            border:
                1px solid var(--border);

            transition:
                .25s ease;
        }

        .btn-primary {
            color: white;

            border: none;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );

            box-shadow:
                0 8px 20px
                rgba(79, 70, 229, .25);
        }

        .btn-primary:hover {
            transform:
                translateY(-3px);

            box-shadow:
                0 12px 28px
                rgba(79, 70, 229, .35);
        }

        .btn-secondary {
            background: white;

            color: var(--text);
        }

        .btn-secondary:hover {
            transform:
                translateY(-3px);

            border-color:
                var(--primary);

            color:
                var(--primary);
        }


        /* =====================================================
           PROFILE CARD
        ===================================================== */

        .profile-card {
            background:
                rgba(255, 255, 255, .92);

            border:
                1px solid var(--border);

            border-radius:
                var(--radius);

            padding: 28px;

            box-shadow:
                var(--shadow);

            animation:
                fadeUp .9s ease forwards;

            transition:
                .3s ease;
        }

        .profile-card:hover {
            transform:
                translateY(-6px);

            box-shadow:
                0 22px 55px
                rgba(40, 45, 80, .14);
        }

        .avatar {
            width: 78px;
            height: 78px;

            border-radius: 22px;

            display: grid;
            place-items: center;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );

            color: white;

            font-size: 1.9rem;

            font-weight: 850;

            margin-bottom: 18px;

            box-shadow:
                0 10px 25px
                rgba(79, 70, 229, .25);
        }

        .profile-card h2 {
            font-size: 1.5rem;

            margin-bottom: 18px;
        }

        .meta {
            display: grid;

            gap: 10px;
        }

        .meta-row {
            padding: 12px 0;

            border-bottom:
                1px solid var(--border);
        }

        .meta-row:last-child {
            border-bottom: none;
        }

        .label {
            display: block;

            color: var(--muted);

            font-size: .82rem;
        }

        .value {
            font-weight: 750;

            word-break: break-word;
        }


        /* =====================================================
           FITUR
        ===================================================== */

        section {
            padding:
                45px 0;
        }

        .section-title {
            margin-bottom: 24px;
        }

        .section-title p {
            color: var(--muted);

            margin-top: 5px;
        }

        .grid-3 {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;
        }

        .card {
            background:
                rgba(255, 255, 255, .95);

            padding: 25px;

            border:
                1px solid var(--border);

            border-radius:
                var(--radius);

            box-shadow:
                0 8px 25px
                rgba(40, 45, 80, .05);

            transition:
                .3s ease;

            animation:
                fadeUp 1s ease forwards;
        }

        .card:hover {
            transform:
                translateY(-8px);

            border-color:
                rgba(79, 70, 229, .3);

            box-shadow:
                0 18px 40px
                rgba(40, 45, 80, .10);
        }

        .card-number {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 38px;
            height: 38px;

            border-radius: 12px;

            color: var(--primary);

            background:
                rgba(79, 70, 229, .10);

            font-weight: 850;

            margin-bottom: 16px;
        }

        .card strong {
            display: block;

            font-size: 1.05rem;

            margin-bottom: 8px;
        }

        .card p {
            color: var(--muted);

            margin-bottom: 0;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            margin-top: 35px;

            padding: 40px 0;

            color: var(--muted);

            text-align: center;

            border-top:
                1px solid var(--border);

            background:
                rgba(255, 255, 255, .6);
        }


        /* =====================================================
           ANIMASI
        ===================================================== */

        @keyframes fadeUp {

            from {
                opacity: 0;

                transform:
                    translateY(25px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 780px) {

            .hero-grid,
            .grid-3 {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 60px;
            }

            .nav {
                align-items: flex-start;

                padding: 15px 0;

                flex-direction: column;

                gap: 8px;
            }

            .nav-links {
                width: 100%;

                justify-content: flex-start;

                overflow-x: auto;
            }

            h1 {
                font-size: 2.6rem;
            }

        }

    </style>
</head>

<body>

<header class="topbar">

    <div class="container nav">

        <div class="brand">
            RPL / <?= htmlspecialchars($student['username']) ?>
        </div>

        <nav class="nav-links" aria-label="Navigasi utama">

            <a href="#home">
                Home
            </a>

            <a href="#fitur">
                Fitur
            </a>

            <a href="#tentang">
                Tentang
            </a>

        </nav>

    </div>

</header>


<main>

    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="hero" id="home">

        <div class="container hero-grid">

            <div class="hero-content">

                <div class="eyebrow">
                    Tugas Interface Web
                </div>

                <h1>
                    Interface Web yang
                    <span>modern & sederhana.</span>
                </h1>

                <p class="lead">
                    Halaman ini merupakan tugas interface web
                    Rekayasa Perangkat Lunak yang dirancang
                    dengan tampilan sederhana, bersih,
                    responsif, dan mudah digunakan.
                </p>

                <div class="actions">

                    <a
                        class="btn btn-primary"
                        href="#fitur"
                    >
                        Lihat Fitur
                    </a>

                    <a
                        class="btn btn-secondary"
                        href="#tentang"
                    >
                        Profil Saya
                    </a>

                </div>

            </div>


            <!-- =================================================
                 PROFILE
            ================================================== -->

            <aside
                class="profile-card"
                id="tentang"
            >

                <div class="avatar">

                    <?= strtoupper(
                        substr(
                            $student['username'],
                            0,
                            1
                        )
                    ) ?>

                </div>

                <h2>
                    <?= htmlspecialchars(
                        $student['name']
                    ) ?>
                </h2>

                <div class="meta">

                    <div class="meta-row">

                        <span class="label">
                            NIM
                        </span>

                        <span class="value">
                            <?= htmlspecialchars(
                                $student['nim']
                            ) ?>
                        </span>

                    </div>


                    <div class="meta-row">

                        <span class="label">
                            Username
                        </span>

                        <span class="value">
                            <?= htmlspecialchars(
                                $student['username']
                            ) ?>
                        </span>

                    </div>


                    <div class="meta-row">

                        <span class="label">
                            Mata Kuliah
                        </span>

                        <span class="value">
                            Rekayasa Perangkat Lunak
                        </span>

                    </div>

                </div>

            </aside>

        </div>

    </section>


    <!-- =====================================================
         FITUR
    ====================================================== -->

    <section id="fitur">

        <div class="container">

            <div class="section-title">

                <h2>
                    Contoh Area Interface
                </h2>

                <p>
                    Beberapa prinsip yang digunakan
                    pada halaman ini.
                </p>

            </div>


            <div class="grid-3">


                <article class="card">

                    <div class="card-number">
                        01
                    </div>

                    <strong>
                        Informasi
                    </strong>

                    <p>
                        Informasi utama dibuat jelas
                        menggunakan hierarki visual
                        sehingga mudah ditemukan pengguna.
                    </p>

                </article>


                <article class="card">

                    <div class="card-number">
                        02
                    </div>

                    <strong>
                        Interaksi
                    </strong>

                    <p>
                        Tombol dan navigasi diberikan
                        efek sederhana agar halaman
                        terasa lebih interaktif.
                    </p>

                </article>


                <article class="card">

                    <div class="card-number">
                        03
                    </div>

                    <strong>
                        Responsif
                    </strong>

                    <p>
                        Tampilan dapat menyesuaikan
                        ukuran layar desktop maupun
                        perangkat mobile.
                    </p>

                </article>


            </div>

        </div>

    </section>

</main>


<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <div class="container">

        &copy;
        <?= htmlspecialchars($currentYear) ?>

        <?= htmlspecialchars($student['name']) ?>

        · RPL

    </div>

</footer>

</body>
</html>
```
