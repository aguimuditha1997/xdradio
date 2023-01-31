@extends('layouts.apps')

@section('front')
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <div class="home__container container grid">
            <img src="{{asset('front/img/home.png')}}" alt="" class="home__img">
            <div class="home__data">
                <h1 class="home__title">
                    XD Radio <br> Yudha
                </h1>
                <p class="home__description">
                    "Your Extraordinary Music Stasion "
                </p>
                <a href="#about" class="button button--flex">
                    Stream now <i class="ri-play-circle-line button__icon"></i>
                </a>
            </div>

            <div class="home__social">
                <span class="home__social-follow">Follow Us</span>

                <div class="home__social-links">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section container" id="about">
        <div class="about__container grid">
            {{-- <img src="{{asset('front/img/about.png')}}" alt="" class="about__img"> --}}

             <div class="video__content about__img">
                <video id="video-file">
                    <source src="{{asset('front/img/xdradio.mp4')}}" type="video/mp4">
                </video>

                <button class="button button--flex video__button" id="video-button">
                    <i class="ri-play-line video__button-icon" id="video-icon"></i>
                </button>
            </div>

            <div class="about__data">
                <h2 class="section__title about__title">
                    Sekilah Tentang XD Radio Yudha 90,20 fm
                </h2>
                <p class="about__description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium omnis eveniet laborum voluptate assumenda sapiente rerum impedit vero iure incidunt.
                </p>
                {{-- <div class="about__details">
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        Lorem, ipsum dolor..
                    </p>
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        Lorem ipsum dolor sit.
                    </p>
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        Lorem ipsum dolor sit amet..
                    </p>
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        Lorem ipsum dolor sit.
                    </p>
                </div> --}}
                <a href="#" class="button--link button--flex">
                    Selengkapnya<i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
        </div>
    </section>


    <!--==================== Headline ====================-->
    {{-- <section class="headline section container" id="headline">
        <h2 class="section__title-center">
            Headline Articles
        </h2>
        <div class="headline__container grid">
            <article class="headline__card">
                <img src="{{asset('front/img/about.png')}}" alt="" class="headline__img">
                <h4 class="headline__card-kategory">Olahraga</h4>
                <h3 class="headline__card-title">Siti Fadia Alami Cedera Engkel Kanan</h3>

            </article>

            <article class="headline__card">
                <img src="{{asset('front/img/about.png')}}" alt="" class="headline__img">
                <h4 class="headline__card-kategory">Olahraga</h4>
                <h3 class="headline__card-title">Siti Fadia Alami Cedera Engkel Kanan</h3>

            </article>

            <article class="headline__card">
                <img src="{{asset('front/img/about.png')}}" alt="" class="headline__img">
                <h4 class="headline__card-kategory">Olahraga</h4>
                <h3 class="headline__card-title">Siti Fadia Alami Cedera Engkel Kanan</h3>

            </article>
        </div>
    </section> --}}

     <!--==================== PROGRAM ====================-->
     <section class="program section container" id="program">
         <div class="program__bg">
            <h2 class="section__title-center program__title">
                Program XD Radio Yudha <br> 90.20 fm Bali
            </h2>
            <div class="program__container grid">
                <div class="program__card">
                   <a href="" class="">
                     <img src="{{asset('front/img/program2.png')}}" alt="" class="program__card-list">
                    </a>
                </div>

                <div class="program__card">
                    <a href="" class="">
                      <img src="{{asset('front/img/program2.png')}}" alt="" class="program__card-list">
                     </a>
                </div>

                <div class="program__card">
                    <a href="" class="">
                      <img src="{{asset('front/img/program2.png')}}" alt="" class="program__card-list">
                     </a>
                </div>


            </div>
         </div>
     </section>

     <!--==================== ANNOUNCER ====================-->
     <section class="announcer section container" id="announcer">
        <h2 class="section__title-center">
            Announcer
        </h2>
        <p class="announcer__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias consectetur voluptas tempore quia, eveniet saepe a dolor eius cumque tenetur?
        </p>
        <div class="announcer__container grid">
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>
            <article class="announcer__card">
                <img src="{{asset('front/img/circle.png')}}" alt="" class="announcer__circle">
                <div class="announcer__box">
                    <img src="{{asset('front/img/penyiar1.png')}}" alt="" class="announcer__img">
                <ul class="announcer__sosmed">
                   <a href=""><li class="sosmed__list"><i class="ri-instagram-line"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-facebook-box-fill"></i></li></a>
                   <a href=""><li class="sosmed__list""><i class="ri-linkedin-box-fill"></i></li></a>
                </ul>
                </div>
                <h3 class="announcer__title">Viola</h3>
            </article>




        </div>
     </section>

     <!--==================== RATE CARD ====================-->

     <section class="ratecard section" id="ratecard">
        <h2 class="section__title-center ratecard__title container">
            FAQs <br> XD Radio Yudha
        </h2>

        <div class="ratecard__container container grid">
            <div class="ratecard__group">
                <div class="ratecard__item">
                    <header class="ratecard__header">
                        <i class="ri-add-line ratecard__icon"></i>
                        <h3 class="ratecard__item-title">
                            Rate Card 2022
                        </h3>
                    </header>

                    <div class="ratecard__content">
                        <img src="{{asset('front/img/ratecard.png')}}" alt="" class="ratecard__img">
                        <a href="#about" class="button button--flex">
                            Downloads File <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>

                <div class="ratecard__item">
                    <header class="ratecard__header">
                        <i class="ri-add-line ratecard__icon"></i>
                        <h3 class="ratecard__item-title">
                            Profile Radio
                        </h3>
                    </header>

                    <div class="ratecard__content">
                        <ul class="ratecard__price">
                            <li class="ratecard__list"><span>Nama Badan Hukum :</span>PT. Radio Suara Yudha</li>
                            <li class="ratecard__list"><span>Nama Station Radio :</span> XD Radio Yudha</li>
                            <li class="ratecard__list"><span>Call Station:</span> XD Radio</li>
                            <li class="ratecard__list"><span>Frekuensi:</span> 90.2 Mhz </li>
                            <li class="ratecard__list"><span>Telp Marketing:</span> 081</li>
                            <li class="ratecard__list"><span>Alamat Studio:</span> Jl.Tukad Badung, No.135, Renon, Denpasar </li>
                            <li class="ratecard__list"><span>Email:</span> xdradio@primakara.ac.id</li>
                            <li class="ratecard__list"><span>Website:</span> xdradio.primakara.ac.id</li>
                            <li class="ratecard__list"><span>Tema Siaran:</span> Extraordinary Music Station</li>
                            <li class="ratecard__list"><span>Area Jangkuan:</span> Denpasar, Badung, Gianyar, Tabanan dan Klungkung</li>
                        </ul>
                    </div>
                </div>

                <div class="ratecard__item">
                    <header class="ratecard__header">
                        <i class="ri-add-line ratecard__icon"></i>
                        <h3 class="ratecard__item-title">
                            Komposisi Musik
                        </h3>
                    </header>

                    <div class="ratecard__content">
                        <ul class="ratecard__price">
                            <li class="ratecard__list"><span>Lagu Mancanegara:</span> 60%</li>
                            <li class="ratecard__list"><span>Lagu Indonesia :</span> 40%</li>
                            <li class="ratecard__list"><span>On Air Character:</span> Energetic & Cheerful</li>
                            <li class="ratecard__list"><span>Operation Time:</span> 08:00 - 22:00 </li>
                            <li class="ratecard__list"><span>Prime Time:</span> </li>
                            <li class="ratecard__list"><span>Reguler Time:</span>  </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="ratecard__group">
                <div class="ratecard__item">
                    <header class="ratecard__header">
                        <i class="ri-add-line ratecard__icon"></i>
                        <h3 class="ratecard__item-title">
                            Target Pendengar
                        </h3>
                    </header>

                    <div class="ratecard__content">
                        <ul class="ratecard__price">
                            <li class="ratecard__list"><span>Usia :</span> 15 - 25 ( Primary Target) <br> 26 - 50 (Secoundary Target)</li>
                            <li class="ratecard__list"><span>Character:</span> Smart, Creative</li>
                            <li class="ratecard__list"><span>Status:</span> Student, College & Daily Worker</li>
                            <li class="ratecard__list"><span>Sex:</span> Unisex </li>
                        </ul>
                    </div>
                </div>

                <div class="ratecard__item">
                    <header class="ratecard__header">
                        <i class="ri-add-line ratecard__icon"></i>
                        <h3 class="ratecard__item-title">
                            Profile Pendengar
                        </h3>
                    </header>

                    <div class="ratecard__content">
                        <ul class="ratecard__price">
                            <li class="ratecard__list"><span>Pelajar :</span> 50% </li>
                            <li class="ratecard__list"><span>Mahasiswa:</span> 30% </li>
                            <li class="ratecard__list"><span>Karyawan:</span> 15%</li>
                            <li class="ratecard__list"><span>Lain - Lain :</span> 5% </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--==================== CONTACT ====================-->



</main>
@endsection
