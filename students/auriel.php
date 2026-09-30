<?php
declare(strict_types=1);

$student = [
    'name' => 'Auriel Argi Ristama',
    'nim' => '240104002',
    'username' => 'auriel',
];

$pageTitle = 'Auriel Argi Ristama | RPL';
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <style>
        :root {
            --blue: #4f9cf9;
            --blue-dark: #2878e8;
            --mint: #39c6a5;
            --yellow: #ffd166;
            --navy: #17324d;
            --text: #38506b;
            --muted: #71859c;
            --bg: #f5fbff;
            --white: #ffffff;
            --border: #dceaf5;
            --shadow: 0 15px 40px rgba(50, 100, 150, 0.10);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background: linear-gradient(
                180deg,
                #ffffff 0%,
                #f3faff 50%,
                #ffffff 100%
            );
            line-height: 1.6;
        }

        .container {
            width: min(1100px, calc(100% - 32px));
            margin: auto;
        }

        /* NAVBAR */

        .topbar {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
        }

        .nav {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            text-decoration: none;
            font-weight: 800;
            color: var(--navy);
            font-size: 1.05rem;
        }

        .brand span {
            color: var(--blue-dark);
        }

        .nav-links {
            display: flex;
            gap: 8px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text);
            font-weight: 700;
            padding: 9px 13px;
            border-radius: 10px;
        }

        .nav-links a:hover {
            background: #eaf5ff;
            color: var(--blue-dark);
        }

        /* HERO */

        .hero {
            padding: 75px 0 65px;
            background:
                radial-gradient(
                    circle at 10% 20%,
                    #dff4ff 0,
                    transparent 25%
                ),
                radial-gradient(
                    circle at 90% 30%,
                    #fff3cc 0,
                    transparent 23%
                );
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 45px;
            align-items: center;
        }

        .eyebrow {
            display: inline-block;
            padding: 7px 13px;
            border-radius: 999px;
            background: #e8f5ff;
            color: var(--blue-dark);
            font-size: 0.78rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        h1 {
            margin: 18px 0;
            color: var(--navy);
            font-size: clamp(2.6rem, 6vw, 5rem);
            line-height: 1.03;
            letter-spacing: -0.05em;
        }

        .blue {
            color: var(--blue-dark);
        }

        .mint {
            color: var(--mint);
        }

        .lead {
            max-width: 680px;
            color: var(--muted);
            font-size: 1.08rem;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            display: inline-block;
            padding: 13px 18px;
            border-radius: 13px;
            text-decoration: none;
            font-weight: 800;
            border: 1px solid var(--border);
        }

        .btn-primary {
            color: white;
            background: linear-gradient(
                135deg,
                var(--blue),
                var(--blue-dark)
            );
            border: none;
            box-shadow: 0 10px 25px rgba(79,156,249,.25);
        }

        .btn-secondary {
            background: white;
            color: var(--navy);
        }

        /* PROFILE */

        .profile {
            padding: 30px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 25px;
            box-shadow: var(--shadow);
        }

        .avatar {
            width: 72px;
            height: 72px;
            display: grid;
            place-items: center;
            border-radius: 21px;
            color: white;
            background: linear-gradient(
                135deg,
                var(--blue),
                #72c9ff
            );
            font-size: 1.8rem;
            font-weight: 900;
            margin-bottom: 18px;
        }

        .username {
            color: var(--blue-dark);
            font-weight: 800;
        }

        .profile h2 {
            margin: 5px 0 25px;
            color: var(--navy);
            line-height: 1.2;
        }

        .meta {
            display: grid;
        }

        .meta-row {
            padding: 14px 0;
            border-top: 1px solid var(--border);
        }

        .label {
            display: block;
            color: var(--muted);
            font-size: 0.82rem;
        }

        .value {
            color: var(--navy);
            font-weight: 800;
        }

        /* FEATURES */

        section {
            padding: 65px 0;
        }

        .section-label {
            color: var(--blue-dark);
            font-size: 0.78rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        h2 {
            color: var(--navy);
            font-size: clamp(1.9rem, 4vw, 2.7rem);
            margin: 5px 0 10px;
        }

        .section-description {
            max-width: 650px;
            color: var(--muted);
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .card {
            padding: 25px;
            min-height: 200px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 22px;
            box-shadow: 0 10px 30px rgba(50,100,150,.06);
            transition: .2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: #eaf6ff;
            margin-bottom: 16px;
            font-size: 1.3rem;
        }

        .card:nth-child(2) .icon {
            background: #e8faf5;
        }

        .card:nth-child(3) .icon {
            background: #fff7dd;
        }

        .card:nth-child(4) .icon {
            background: #f0eaff;
        }

        .card:nth-child(5) .icon {
            background: #e8faf5;
        }

        .card:nth-child(6) .icon {
            background: #fff0f0;
        }

        .number {
            color: var(--blue-dark);
            font-size: .78rem;
            font-weight: 800;
        }

        .card h3 {
            color: var(--navy);
            margin: 5px 0 8px;
        }

        .card p {
            color: var(--muted);
            margin: 0;
        }

        /* ABOUT */

        .about-box {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            padding: 32px;
            background: linear-gradient(
                135deg,
                #f0f9ff,
                #f5fffb
            );
            border: 1px solid var(--border);
            border-radius: 25px;
        }

        .about-box p {
            color: var(--muted);
        }

        .list {
            display: grid;
            gap: 12px;
        }

        .list-item {
            padding: 13px 15px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 13px;
            font-weight: 700;
            color: var(--navy);
        }

        .list-item::before {
            content: "✓";
            color: var(--mint);
            font-weight: 900;
            margin-right: 10px;
        }

        /* FOOTER */

        footer {
            padding: 35px 0 45px;
            text-align: center;
            color: var(--muted);
        }

        .footer-line {
            width: 70px;
            height: 4px;
            margin: 0 auto 15px;
            border-radius: 999px;
            background: linear-gradient(
                90deg,
                var(--blue),
                var(--mint),
                var(--yellow)
            );
        }

        /* RESPONSIVE */

        @media (max-width: 800px) {
            .hero-grid,
            .about-box {
                grid-template-columns: 1fr;
            }

            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .container {
                width: min(100% - 24px, 1100px);
            }

            .nav {
                flex-direction: column;
                align-items: flex-start;
                padding: 12px 0;
            }

            .nav-links {
                width: 100%;
                justify-content: space-between;
            }

            .hero {
                padding: 50px 0;
            }

            h1 {
                font-size: 2.7rem;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .profile,
            .about-box {
                padding: 23px;
            }
        }
    </style>
</head>

<body>

<header class="topbar">
    <div class="container nav">

        <a class="brand" href="#home">
           📂 RPL / <span>@auriel</span>
        </a>

        <nav class="nav-links">
            <a href="#home">Home</a>
            <a href="#fitur">Fitur</a>
            <a href="#tentang">Tentang</a>
        </nav>

    </div>
</header>

<main>

    <section class="hero" id="home">
        <div class="container hero-grid">

            <div>
                <div class="eyebrow">
                    Tugas Interface Web
                </div>

                <h1>
                    
                    <span class="blue">HALLO🤙</span>
                    
                </h1>

                <p class="lead">
                    Selamat datang di halaman interface
                    <strong>Auriel Argi Ristama</strong>.
                    Website ini dirancang dengan tampilan yang sederhana,
                    modern, responsif, dan nyaman dilihat.
                </p>

                <div class="actions">
                    <a class="btn btn-primary" href="#fitur">
                        ✨ Lihat Fitur
                    </a>

                    <a class="btn btn-secondary" href="#tentang">
                        👤 Tentang Saya
                    </a>
                </div>
            </div>

            <aside class="profile" id="tentang">

                <div class="avatar">
                    A
                </div>

                <div class="username">
                    @<?= htmlspecialchars($student['username'], ENT_QUOTES, 'UTF-8') ?>
                </div>

                <h2>
                    <?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?>
                </h2>

                <div class="meta">

                    <div class="meta-row">
                        <span class="label">NIM</span>
                        <span class="value">
                            <?= htmlspecialchars($student['nim'], ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Username</span>
                        <span class="value">
                            @<?= htmlspecialchars($student['username'], ENT_QUOTES, 'UTF-8') ?>
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


    <section id="fitur">
        <div class="container">

            <div class="section-label">
                ✦ Showcase
            </div>

            <h2>
                Fitur interface
            </h2>

            <p class="section-description">
                Beberapa prinsip yang digunakan untuk membuat
                tampilan website lebih menarik dan nyaman digunakan.
            </p>

            <div class="grid">

                <article class="card">
                    <div class="icon">💡</div>
                    <div class="number">01 · INFORMASI</div>
                    <h3>Informasi jelas</h3>
                    <p>
                        Informasi penting ditempatkan dengan hierarki
                        visual yang mudah dipahami.
                    </p>
                </article>

                <article class="card">
                    <div class="icon">⚡</div>
                    <div class="number">02 · INTERAKSI</div>
                    <h3>Interaksi sederhana</h3>
                    <p>
                        Navigasi dan tombol dibuat sederhana agar
                        pengguna mudah berpindah halaman.
                    </p>
                </article>

                <article class="card">
                    <div class="icon">📱</div>
                    <div class="number">03 · RESPONSIF</div>
                    <h3>Responsive</h3>
                    <p>
                        Tampilan menyesuaikan desktop, tablet,
                        dan smartphone.
                    </p>
                </article>

                <article class="card">
                    <div class="icon">🎨</div>
                    <div class="number">04 · VISUAL</div>
                    <h3>Warna rileks</h3>
                    <p>
                        Kombinasi biru, mint, putih, dan kuning
                        memberikan suasana cerah dan santai.
                    </p>
                </article>

                <article class="card">
                    <div class="icon">🛡️</div>
                    <div class="number">05 · STRUKTUR</div>
                    <h3>Struktur rapi</h3>
                    <p>
                        HTML, CSS, JavaScript, dan PHP tetap
                        berada dalam satu file tugas.
                    </p>
                </article>

                <article class="card">
                    <div class="icon">⭐</div>
                    <div class="number">06 · EXPERIENCE</div>
                    <h3>User experience</h3>
                    <p>
                        Spasi, tipografi, warna, dan tombol dibuat
                        agar halaman terasa ringan.
                    </p>
                </article>

            </div>

        </div>
    </section>


    <section>
        <div class="container">

            <div class="about-box">

                <div>
                    <div class="section-label">
                        Tentang Interface
                    </div>

                    <h2>
                        Sederhana tetapi tetap menarik.
                    </h2>

                    <p>
                        Halaman ini dibuat sebagai tugas interface web
                        pada mata kuliah Rekayasa Perangkat Lunak.
                        Fokus desain adalah membuat tampilan yang
                        informatif, responsif, cerah, dan nyaman digunakan.
                    </p>
                </div>

                <div class="list">

                    <div class="list-item">
                        Responsive di berbagai perangkat
                    </div>

                    <div class="list-item">
                        Warna cerah dan nyaman
                    </div>

                    <div class="list-item">
                        Navigasi sederhana
                    </div>

                    <div class="list-item">
                        Satu file sesuai aturan tugas
                    </div>

                </div>

            </div>

        </div>
    </section>

</main>

<footer>
    <div class="container">

        <div class="footer-line"></div>

        © <?= htmlspecialchars($currentYear, ENT_QUOTES, 'UTF-8') ?>
        <?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?>
        · RPL

    </div>
</footer>

</body>
</html>