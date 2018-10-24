<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Menu Pendaftaran</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
{
    padding: 0;
    margin: 0;
    border: 0;
}
body, html {
    color: #373C40;
    font-family: Verdana,Arial, Helvetica, sans-serif;
    height: 100%;
    background-color: #75cbe7;
    margin:50px;
}
body {
    font-size: 70%;
}
p {
    padding: 7px 0 7px 0;
    font-weight: 500;
    font-size: 12pt;
}
a {
    color: #656565;
    text-decoration:none;
}
a:hover{
    color: #abda0f;
    text-decoration: none;
}
h1 {
    font-weight:200;
    color: #888888;
    font-size:16pt;
    background: transparent url(h1.png) no-repeat center left;
    padding-left:33px;
    margin:7px 5px 8px 8px;
}
h4 {
    padding:1px;
    color: #ACACAC;
    font-size:9pt;
    font-weight:100;
    text-transform:uppercase;
}
form.registrasi{
    width:800px;
    margin: 20px auto 0px auto;
    height:530px;
    background-color:#fff;
    padding:5px;
    -moz-border-radius:20px;
    -webkit-border-radius:20px;
}
form p{
    font-size: 8pt;
    clear:both;
    margin: 0;
    color:gray;
    padding:4px;
}
form.registrasi fieldset.baris1
{
    width:770px;
    padding:5px;
    float:left;
    border-top:2px solid #F5F5F5;
    margin-bottom:1px;
}
form.registrasi fieldset.baris1 label{
    width:140px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}

form.registrasi fieldset.baris4
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    padding:5px;
    float:left;
    clear:both;
    width:500px;
}
form.registrasi .kotakinfo{
    float:right;
    margin-top:20px;
    border: 1px solid #F1F1F1;
    padding:5px;
    width:380px;
    height:98px;
    font-size:9px;
    background: #FDFEFA url(bg_kotakinfo.gif) repeat-x top left;
}
form.registrasi legend
{
    color: #abda0f;
    padding:2px;
    margin-left: 14px;
    font-weight:bold;
    font-size: 14px;
    font-weight:100;
}
form.registrasi label{
    color:#444;
    width:98px;
    float: left;
    text-align: right;
    margin-right: 60px;
    margin-top:2px;
}
form.registrasi label.optional{
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
    color: #A3A3A3;
}
form.registrasi label.obinfo{
    float:right;
    padding:3px;
    font-style:italic;
}
form.registrasi input{
    width: 140px;
    color: #505050;
    float: left;
    margin-right: 5px;
}
form.registrasi input.long{
    width: 247px;
    color: #505050;
}
form.registrasi input.short{
    width: 40px;
    color: #505050;
}
form.registrasi input[type=radio]
{
    float:left;
    width:15px;
}
form.registrasi label.gender{
    margin-top:-1px;
    margin-bottom:2px;
    width:34px;
    float:left;
    text-align:left;
    line-height:19px;
}
form.registrasi input[type=text]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
form.registrasi input[type=password]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
.tombol
{
    background: #abda0f url(overlay.png) repeat-x;
    padding: 8px 10px 8px;
    color: #fff;
    text-decoration: none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    cursor: pointer;
    float:left;
    font-size:18px;
    margin:10px;
}
form.registrasi input[type=text].year
{
    border: 1px solid #E1E1E1;
    height: 18px;
    width:30px;
}
form.registrasi input[type=checkbox] {
    width:14px;
    margin-top:4px;
}
form.registrasi select
{
    border: 1px solid #E1E1E1;
    width: 130px;
    float:left;
    margin-bottom:3px;
    color: #505050;
    margin-right:5px;
}
form.registrasi select.date
{
    width: 40px;
}
input:focus, select:focus{
    background-color: #efffe0;
}
p.info{
    font-size:7pt;
    color: gray;
}
p.perjanjian{
    margin-left:15px;
}
p.perjanjian label{
    width:390px;
    text-align:left;
    margin-top:3px;
}
</style>
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h2>Telkom Indonesia</h2>
                </a>
            </div>

            <nav class="collapse navbar-collapse" id="primary-menu">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page"><h5>Home</h5></a></li>
                    <li><a href="#service-page"><h5>Info</h5></a></li>
                    <li><a href="#feature-page"><h5>Profil</h5></a></li>
                    <li><a href="#faq-page"><h5>FAQ</h5></a></li>
                    <li><a href="#blog-page"><h5>Blog</h5></a></li>
                    <li><a href="#contact-page"><h5>Contact</h5></a></li>
                    <li><a href="/akun"><h5>Buat Akun</h5></a></li>
                    <li><a href="/pendaftaran"><h5>Pendaftaran</h5></a></li>
                    </ul>
            </nav>
        </div>
    </div>

<div class="content">
<form action="" class="registrasi">
            <h1>Registrasi Data Peserta</h1>
            <fieldset class="baris1">
                <legend>Cek Hasil Pelatihan</legend>
                <p>
                    <label>Masukan Nama*
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Masukan Nik*
                    </label>
                    <input type="text"/>
                </p>

                <br><br><br>
                
                  <a href="#" class="btn btn-info btn-sm">Cek</a>
                  <a href="#" class="btn btn-warning btn-sm">Batal</a>
                  <a href="#" class="btn btn-success btn-sm">Hapus</a>
</form>

</div>

<footer class="footer-area relative sky-bg" id="contact-page">
<div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id corrupti architecto consequuntur, laborum quaerat sed nemo temporibus unde, beatae vel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>Heronselianus &copy;Copyright 2018 All right resurved.  </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Vendor-JS-->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/contact-form.js')}}"></script>
    <script src="{{ asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{ asset('js/scrollUp.min.js')}}"></script>
    <script src="{{ asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
