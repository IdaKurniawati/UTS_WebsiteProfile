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
                        <li class="nav__item"><a href="/index" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="/profile" class="nav__link">Profile</a></li>
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
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hallo,<br>Saya <span class="home__title-color">Ida Kurniawati</span><br>Mahasiswi TI Unesa</h1>
                    <a href="/contact" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/ida-kurnia-13540220a/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/IdaKurniawati/UTS_WebsiteProfile" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                    <a href="https://facebook.com/ida.kurniawati.35325" class="home__social-icon"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/idakurnia__/" class="home__social-icon"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="https://twitter.com/_idakurnia18/" class="home__social-icon"><i class='bx bxl-twitter'></i></a>
                </div>

                <div class="home__img">    
                    <svg class="home__blob"viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                        <image class="home__blob" href="{{asset('img/profile.jpg')}}"/>
                    </g>
                </svg>
                </div>
            </section>
        </main">

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>