<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{asset('css/style-web.css')}}">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Website Profile Pribadi</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Ida Kurniawati</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/index" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="/profile" class="nav__link active">Profile</a></li>
                        <li class="nav__item"><a href="/skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="/experience" class="nav__link">Experience</a></li>
                        <li class="nav__item"><a href="/contact" class="nav__link">Kontak</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--===== profil =====-->
            <section class="profil section " id="profil">
                <h2 class="section-title">Profile</h2>

                <div class="profil__container bd-grid">
                    <div class="profil__img">
                        <img src="{{asset('img/profile.jpg')}}">
                    </div>
                    <div>
                        <h2 class="profil__subtitle">Saya Ida Kurniawati</h2>
                        <p class="profil__text">Saya seorang mahasiswi semester 5, Prodi Pendidikan Teknologi Informasi, Jurusan Teknik Informatika, Fakultas Teknik, Universitas Negeri Surabaya.</p>
                        <br>
                        <a download="" href="https://drive.google.com/file/d/1fkj5TKHo91ZeRbgtdOPCArviGMkEzF_2/view" class="button">Download CV</a>
                    </div>
                </div>
            </section>
        </main>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>