<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Riverene Leadership</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Innovation, Growth, and Entrepreneurship">
    <meta name="keywords" content="viderent partners, viderent, viderentpartners, innovation">
    <meta name="author" content="@chrisvle">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Preloader -->
<div class="preloader"><i class="fa fa-spinner fa-spin fa-2x"></i></div>

<!-- Header -->
<section class="main-header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#"><img src="http://placehold.it/66x66" class="img-responsive" alt="logo"></a> -->
            </div>
            <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                <div class="col-md-12 col-sm-12 col-lg-12 nav-wrap">
                    <ul class="nav navbar-nav">
                        <li><a href="#owl-hero" class="page-scroll words">Home</a></li>
                        <li><a href="#welcome" class="page-scroll words">About</a></li>
                        <li><a href="#services" class="page-scroll words">Services</a></li>
                        <li><a href="#fun-facts" class="page-scroll words">Team</a></li>
                        <li><a href="#testimonials" class="page-scroll words">Testimonials</a></li>
                        <li><a href="#portfolio" class="page-scroll words">Clients</a></li>
                        <li><a href="#contact" class="page-scroll words">Contact</a></li>
                    </ul>
                </div>
                <!-- <div class="social-media hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="icons"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icons"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icons"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </nav>
    <div id="owl-hero" class="owl-carousel owl-theme">
        @foreach ($headers as $header)
        <div class="item carousel-picture" style="background-color: black">
            <div class="caption">
                <img src="img/logo/logo.png" style="width:20%; height:20%">
                <h1><span>{{{ $header->header }}}</span></h1>
                <h5 style="padding-bottom:5%; color: white;">{{{ $header->subheader }}}<h5>
            </div>
        </div>
        @endforeach
        {{--
         <div class="item carousel-picture" style="background-color: black">
            <div class="caption">
                <h1>{{{ $data["h2Text"] }}}</h1>
                <h5 style="padding-bottom:5%; color: white;">{{{ $data["h2SubText"] }}}<h5>
            </div>
        </div>
                <div class="item carousel-picture" style="background-color: black">
                    <div class="caption">
                        <h1>{{{ $data["h3Text"] }}}</h1>
                        <h5 style="padding-bottom:5%; color: white;">{{{ $data["h3SubText"] }}}<h5>
                    </div>
                </div>
        --}}
    </div>
</section>
@if (Session::has("message"))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{{ Session::get("message") }}}
            </div>
        </div>
    </div>
@endif
<!-- Welcome -->
<section id="welcome">
    <div class="container">
        <h2>{{{ $data["breakoutHeader"] }}}</h2>
        <hr class="sep">
        <h4 style="line-height:2;">{{{ $data["breakoutText"] }}}</h4>
    </div>
</section>

<!-- Services -->
<section id="services">
    <div class="container">
        <h1>Our Services</h1>
    </div>
</section>

<!-- Work Process -->
<section id="work-process">
    <div class="services-container">
        <div class="col-lg-3">
            <a class="btn" data-toggle="modal" data-target="#myModal1">
                <span class="fa fa-line-chart fa-2x"></span>
                <h2>{!!  $data["service1"] !!}</h2>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="btn" data-toggle="modal" data-target="#myModal2">
                <span class="fa fa-unlock fa-2x"></span>
                <h2>{!! $data["service2"] !!}</h2>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="btn" data-toggle="modal" data-target="#myModal3">
                <span class="fa fa-trophy fa-2x"></span>
                <h2>{!! $data["service3"] !!}</h2>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="btn" data-toggle="modal" data-target="#myModal4">
                <span class="fa fa-search fa-2x"></span>
                <h2>{!! $data["service4"] !!}</h2>
            </a>
        </div>
    </div>
</section>

<!-- Modals -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-left">
                  <img class="img-responsive center-block team-photo" src="http://riverene.com/img/breakthrough.jpg" alt="1" style="width:350px; height:600px; padding-bottom:0px">
                </div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel1">Achieving Breakthroughs </div>
                    <div class="modal-text" id="ModalText1">{{{ $data["service1Body"] }}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-left">
                  <img class="img-responsive center-block team-photo" src="http://riverene.com/img/leadership.jpg" alt="2" style="width:350px; height:600px; padding-bottom:0px">
                </div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel2">Adaptive Leadership Training </div>
                    <div class="modal-text" id="ModalText2">{{{ $data["service2Body"] }}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-left">
                  <img class="img-responsive center-block team-photo" src="http://riverene.com/img/coaching.jpg" alt="3" style="width:350px; height:600px; padding-bottom:0px">
                </div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel3">Coaching</div>
                    <div class="modal-text" id="ModalText3">{{{ $data["service3Body"] }}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-left">
                  <img class="img-responsive center-block team-photo" src="http://riverene.com/img/strategy.jpg" alt="4" style="width:350px; height:600px; padding-bottom:0px">
                </div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel4">Diagnosing Your Organization </div>
                    <div class="modal-text" id="ModalText4">{{{ $data["service4Body"] }}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facts -->
<section id="fun-facts">
    <div class="container">
        <h1>Our Team</h1>
    </div>
</section>

<!-- Fun Facts -->
<section id="team">
    <div class="team-container">
        <div class="team team-description">

            <div class="col-md-12">
                <div class="col-md-4">
                    <section class="magnific-all">
                        @if (strstr($data["teamContent1"], "youtube.com"))
                            <a href="{{{ $data["teamContent1"] }}}" class="magnific-youtube item" data-title="item 1">
                                <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage1"] }}}" alt="1">
                            </a>
                        @else
                            <a href="{{{ $data["teamContent1"] }}}" class="magnific item" data-title="item 1">
                                <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage1"] }}}" alt="1">
                            </a>
                        @endif
                    </section>
                </div>

                <div class="col-md-8">
                    <div class='team-description team-row'>
                        <h3>{{{ $data["teamName1"] }}}</h3>
                        <p> {{{ $data["teamBioText1"] }}}</p>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-4">
                    <section class="magnific-all">
                        @if (strstr($data["teamContent2"], "youtube.com"))
                            <a href="{{{ $data["teamContent2"] }}}" class="magnific-youtube item" data-title="item 1">
                                <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage2"] }}}" alt="1">
                            </a>
                        @else
                            <a href="{{{ $data["teamContent2"] }}}" class="magnific item" data-title="item 1">
                                <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage2"] }}}" alt="1">
                            </a>
                        @endif
                    </section>
                </div>

                <div class="col-md-8">
                    <div class='team-description team-row'>
                        <h3>{{{ $data["teamName2"] }}}</h3>
                        <p>{{{ $data["teamBioText2"] }}}</p>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-4">
                    <section class="magnific-all">
                        @if (strstr($data["teamContent3"], "youtube.com"))
                            <a href="{{{ $data["teamContent3"] }}}" class="magnific-youtube item" data-title="item 1">
                                <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage3"] }}}" alt="1">
                            </a>
                        @else
                            <a href="{{{ $data["teamContent3"] }}}" class="magnific item" data-title="item 1">
                                <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage3"] }}}" alt="1">
                            </a>
                        @endif
                    </section>
                </div>

                <div class="col-md-8">
                    <div class='team-description team-row'>
                        <h3>{{{ $data["teamName3"] }}}</h3>
                        <p>{{{ $data["teamBioText3"] }}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" style="background-color:#24242a;">
    <div class="container">
        <h1>Our Testimonials</h1>
    </div>
</section>

<section id="testimonials">
    <div class="container">
        <div id="owl-testi" class="owl-carousel owl-theme">
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>{{{ $data["testimonial1"] }}}</h5>
                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>{{{ $data["testimonial2"] }}}</h5>

                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>{{{ $data["testimonial3"] }}}</h5>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container-fluid">
        <!-- <h2>Our Work</h2> -->
        <!-- <hr class="sep"> -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/army.jpg" style="max-height:80px" alt="1">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/autodesk.jpg" style="max-height:80px" alt="2">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/premier-logo.png" style="max-height:80px" alt="3">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/clinica.png" style="max-height:80px" alt="4">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/hill.png" style="max-height:80px" alt="5">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/google.jpg" style="max-height:80px" alt="6">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/navy.png" style="max-height:80px" alt="7">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/airbnb.png" style="max-height:80px" alt="8">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/lucas.jpg" style="max-height:80px" alt="9">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/northface.jpg" style="max-height:80px" alt="10">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/oracle.png" style="max-height:80px" alt="11">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/roche.jpg" style="max-height:80px" alt="12">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/sap.jpg" style="max-height:80px" alt="13">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/startx.png" style="max-height:80px" alt="14">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/thermofisher.png" style="max-height:80px" alt="15">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/trulia.jpg" style="max-height:80px" alt="16">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/ideo.png" style="max-height:80px" alt="17">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/genentech.png" style="max-height:80px" alt="18">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/mulago.png" style="max-height:80px" alt="19">
                </div>
                <div class="col-lg-3 col-sm-4" style="height:100px">
                    <img class="img-responsive center-block" src="img/portfolio/blue.png" style="max-height:80px" alt="20">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Us -->
<section id="contact">
    <div class="contact-form">
        <div class="contact-container">
            <h2>Send a Message</h2>
            <form action="{{ route("sendcontact") }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="contact-messagebox">
                    <label>Your name</label>
                    <br>
                    <input type="text" name="name" placeholder="First Last"/>
                </div>
                <div class="contact-messagebox">
                    <label for="">Your e-mail</label>
                    <br>
                    <input type="email" name="email" placeholder="me@example.com"/>
                </div>
                <div class="contact-messagebox">
                    <label for="">Your message</label>
                    <br>
                    <textarea name="message" cols="40" row="10" placeholder="How can we help?"></textarea>
                </div>
                <div class="contact-messagebox">
                    <div style="padding-left: 5%;" class="g-recaptcha" data-sitekey="6Ld0wR0TAAAAAFVYdim6aslIInIpifx2Au8mq5O-"></div>
                </div>
                <br />
                <p>
                    <input type="submit" value="Send Message"/>
                </p>
            </form>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Javascript -->
<script src="bootstrap-assets/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

<!-- JS PLUGINS -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/jquery.easing.min.js"></script>
<script src="plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="plugins/countTo/jquery.countTo.js"></script>
<script src="plugins/inview/jquery.inview.min.js"></script>
<script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
<script src="plugins/WOW/dist/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- class="wow fadeInLeft" data-wow-delay=".3s"  -->

</body>

</html>
