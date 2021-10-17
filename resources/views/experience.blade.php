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
                        <li class="nav__item"><a href="/profile" class="nav__link">Profile</a></li>
                        <li class="nav__item"><a href="/skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="/experience" class="nav__link active">Experience</a></li>
                        <li class="nav__item"><a href="/contact" class="nav__link">Kontak</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

            </section>

        <main class="main">
            <!--===== EXPERIENCE =====-->
            <section class="experience section" id="experience">
                <h2 class="section-title">Experience</h2>

                <div class="experience__container bd-grid">
                    <div class="experience__img">
                        <img src="{{asset('img/expe1.jpg')}}" alt="">
                        <h1>Bakti Sosial 2021</h1>
                    </div>
                    <div class="experience__img">
                        <img src="{{asset('img/expe2.jpg')}}" alt="">
                        <h1>Panitia Sparta 20</h1>
                    </div>
                    <div class="experience__img">
                        <img src="{{asset('img/expe3.jpg')}}" alt="">
                        <h1>Sosialisasi Kampus</h1>
                    </div>
                    <div class="experience__img">
                        <img src="{{asset('img/expe4.jpg')}}" alt="">
                        <h1>Bakti Sosial 2020</h1>
                    </div>
                    <div class="experience__img">
                        <img src="{{asset('img/expe5.jpg')}}" alt="">
                        <h1>Panitia TOS 20</h1>
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