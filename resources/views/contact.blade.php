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
                        <li class="nav__item"><a href="/experience" class="nav__link">Experience</a></li>
                        <li class="nav__item"><a href="/contact" class="nav__link active">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                @if(Session::get('success'))
                    <div class= "alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class= "alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                    <form action="add" method="post" class="contact__form">
                    @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="contact__input" value="{{old('name')}}">
                            <span>@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" class="contact__input"value="{{old('email')}}">
                            <span>@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" placeholder="Pesan" id="" cols="0" rows="10" class="contact__input"value="{{old('pesan')}}"></textarea>
                            <span>@error('pesan') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" value="Kirim" class="contact__button button">Kirim</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>