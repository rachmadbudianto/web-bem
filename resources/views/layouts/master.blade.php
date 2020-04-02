<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img_bem/logobem.PNG')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>  
        #custom-button {
            padding: 10px;
            color: white;
            background-color: #009578;
            border: 1px solid #000;
            border-radius: 5px;
            cursor: pointer;
        }
        
        #custom-button:hover {
            background-color: #00b28f;
        }
        
        #custom-text {
            margin-left: 10px;
            font-family: sans-serif;
            color: #aaa;
        }
      </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    
    <!-- header-start -->
    <header>
        <div class="header-area">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a href="https://twitter.com/BEMFIK_UBL">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                                <a href="https://web.facebook.com/bem.fikubl">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/bemfik_ubl/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> BEM-FIK@student.ubl.ac.id</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i> 821-0920-1022</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{url('bem/welcome')}}">
                                        <img src="../img_bem/logoc.png " alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{url('/bem/welcome')}}">home</a></li>
                                            <li><a href="{{url('bem/about')}}">About Us</a></li>
                                            {{-- <li><a href="service.html">Services</a></li> --}}
                                            <li><a href="#">Struktur<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{url('struktur/struktur')}}">Struktur</a></li>
                                                    <li><a href="{{url('struktur/presiden')}}">Presiden dan Wakil</a></li>
                                                    <li><a href="{{url('struktur/litbang')}}">Litbang</a></li>
                                                    <li><a href="{{url('struktur/sekertaris')}}">Sekertaris</a></li>
                                                    <li><a href="{{url('struktur/bendahara')}}">Bendahara</a></li>
                                                    <li><a href="{{url('struktur/kewirausahaan')}}">Kewirausahaan</a></li>
                                                    <li><a href="{{url('struktur/kominfo')}}">Kominfo</a></li>
                                                    <li><a href="{{url('struktur/sosial')}}">Sosial Masyarakat</a></li>
                                                    <li><a href="{{url('struktur/dalam')}}">Dalam Kampus</a></li>
                                                    <li><a href="{{url('struktur/luar')}}">Luar Kampus</a></li>
                                                    <li><a href="{{url('struktur/ristek')}}">Ristek</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Galeri <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                     <li><a href="{{url('/kegiatan')}}">Kegiatan</a></li>
                                                    <li><a href="{{url('/berita')}}">Berita</a></li>
                                                    <li><a href="{{url('informasi')}}">Informasi</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('bem/contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    {{-- <div class="book_btn d-none d-lg-block">
                                        <a href="#">HAHHAH</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

@yield('content')

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                            </div>
                            <p>
                                BADAN EKSEKUTIF MAHASISWA <br>
                                FAKULTAS ILMU KOMPUTER <br>
                                UIVERSITAS BANDAR LAMPUNG
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://web.facebook.com/bem.fikubl">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/BEMFIK_UBL">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/bemfik_ubl/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCx4h7WqSTybhV8_W4lrLn-w">
                                            <i class="fa fa-youtube-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Terkait BEM FIK
                            </h3>
                            <ul>
                                <li><a href="{{url('bem/about')}}">About</a></li>
                                <li><a href="{{url('bem/about')}}">Blog</a></li>
                                <li><a href="{{url('bem/contact')}}"> Contact</a></li>
                                <li><a href="#"> Free quote</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-md-6 col-lg-6">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <ul>
                                    <li>
                                        <i class="fa fa-map-marker size:4x"></i>
                                        <a href="https://www.google.com/maps/place/Pascasarjana+UBL/@-5.3755268,105.2462114,19z/data=!4m8!1m2!2m1!1spasca+sarjana+ubl!3m4!1s0x0:0xd55d84fdfbf3f7d3!8m2!3d-5.3753367!4d105.246249" > 
                                            Gedung M, Pasca Sarjana U B L
                                        </a>
                                    </li>
                                    <li>+628-xxxx-xxxx</li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> BEM-FIK UBL | Dikembangkan oleh <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.instagram.com/bemfik_ubl/" target="_blank">KemenRistek BEM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- form itself end-->
    {{-- <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="popup_header">
                    <h3>Get Free Quote</h3>
                </div>
                <div class="custom_form">
                        <div class="row">
                                <div class="col-xl-12">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="col-xl-12">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-xl-12">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3">Send</button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </form> --}}

    <!-- form itself end -->

    <!-- JS here -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script>
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function() {
        realFileBtn.click();
        });

        realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
            /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
        } else {
            customTxt.innerHTML = "No file chosen, yet.";
        }
        });
    </script>
    
</body>

</html>