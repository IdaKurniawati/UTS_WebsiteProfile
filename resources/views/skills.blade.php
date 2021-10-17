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
                        <li class="nav__item"><a href="/skills" class="nav__link active">Skills</a></li>
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
            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">      
                    <div class="skills__lain">
                        <h2 class="skills__subtitle">Soft Skills</h2>
                        <p class="skills__text">Berikut adalah soft skills yang saya miliki</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-microphone skills__icon'></i>
                                <span class="skills__name">MC</span>
                            </div>
                            <div class="skills__bar skills__mc">

                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-quote-single-left skills__icon'></i>
                                <span class="skills__name">Bahasa Jawa</span>
                            </div>
                            <div class="skills__bar skills__jawa">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-quote-single-right skills__icon'></i>
                                <span class="skills__name">Bahasa Indonesia</span>
                            </div>
                            <div class="skills__bar skills__bindo">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-quote-alt-right skills__icon'></i>
                                <span class="skills__name">Bahasa Inggris</span>
                            </div>
                            <div class="skills__bar skills__inggris">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                    </div>    
                    <div>
                        <h2 class="skills__subtitle">Kemampuan Profesional</h2>
                        <p class="skills__text">Berikut adalah kemampuan tentang bidang IT yang saya miliki</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">50%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
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