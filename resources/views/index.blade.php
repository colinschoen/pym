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
                <div class="col-md-8 col-xs-12 nav-wrap">
                    <ul class="nav navbar-nav">
                        <li><a href="#owl-hero" class="page-scroll words">Home</a></li>
                        <li><a href="#services" class="page-scroll words">Services</a></li>
                        <li><a href="#portfolio" class="page-scroll words">Process</a></li>
                        <li><a href="#team" class="page-scroll words">Team</a></li>
                        <li><a href="#contact" class="page-scroll words">Contact</a></li>
                    </ul>
                </div>
                <div class="social-media hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="icons"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icons"> <i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icons"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="owl-hero" class="owl-carousel owl-theme">
        <div class="item" style="background-color: black">
            <div class="caption">
                <img src="img/logo/logo.png" style="width:20%; height:20%">
                <h1><span>{{{ $data["h1Text"] }}}</span></h1>
                <h5 style="padding-bottom:5%; color: white;">{{{ $data["h1SubText"] }}}<h5>
            </div>
        </div>
        <div class="item" style="background-color: black">
            <div class="caption">
                <h1>{{{ $data["h2Text"] }}}</h1>
                <h5 style="padding-bottom:5%; color: white;">{{{ $data["h2SubText"] }}}<h5>
            </div>
        </div>
        <!-- <div class="item" style="background-image: url(img/sliders/Slide3.jpg)"> -->
        <div class="item" style="background-color: black">
            <div class="caption">
                <h1>{{{ $data["h3Text"] }}}</h1>
                <h5 style="padding-bottom:5%; color: white;">{{{ $data["h3SubText"] }}}<h5>
            </div>
        </div>
    </div>
</section>

<!-- Welcome -->
<section id="welcome">
    <div class="container">
        <h2>{{{ $data["breakoutHeader"] }}}</h2>
        <hr class="sep">
        <h4 style="text-align:justify; letter-spacing: 1px; line-height: 60px">{{{ $data["breakoutText"] }}}<h4>
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
                <h2>1.{{{ $data["service1"] }}}</h2>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="btn" data-toggle="modal" data-target="#myModal2">
                <span class="fa fa-unlock fa-2x"></span>
                <h2>2.{{{ $data["service2"] }}}</h2>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="btn" data-toggle="modal" data-target="#myModal3">
                <span class="fa fa-trophy fa-2x"></span>
                <h2>3.{{{ $data["service3"] }}}</h2>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="btn" data-toggle="modal" data-target="#myModal4">
                <span class="fa fa-search fa-2x"></span>
                <h2>4.{{{ $data["service4"] }}}</h2>
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

                <div class="modal-left"></div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel1">Achieving Breakthroughs </div>
                    <h2>Based upon the research in Judah’s book, <i>The Breakthrough Myth</i>, this program helps your leaders and teams have big, game changing breakthroughs.</h2>
                    <div class="modal-text" id="ModalText1">We leverage the best tools from the biggest innovators to help your leaders and teams have high impact breakthroughs. Rather than talk about geniuses and their special processes this program offers specific, concrete tools for individuals and teams to use immediately to increase their chances of breaking through whatever may have been blocking them. By assessing the members of your team we customize the tools to be most effective for your people. </div>
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
                <div class="modal-left"></div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel2">Adaptive Leadership Training </div>
                    <h2>The most important leadership commodity in any organization is trust. It takes years to build and a moment to break.</h2>
                    <div class="modal-text" id="ModalText2">We are experts at rapidly establishing trust with our clients and helping them establish trust with their peers. Our trainings, designed using the latest findings in neuroscience, are 90 minutes, short enough to be digestible for your staff and integrate into their workday and be immediately applicable to their daily job. Our process is simple, the first 15 minutes we set the frame for the new knowledge. The next 45 minutes we teach one concrete tool and practice using that tool to make the knowledge immediately impactful. The final 30 minutes is devoted to the group identifying the challenges inherent in their system and using the tool to collaboratively design solutions to preempt them.
                    </div>
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
                <div class="modal-left"></div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel3">Coaching</div>
                    <h2>When you coach a leader you are by extension coaching their team.</h2>
                    <div class="modal-text" id="ModalText3">So, we have found in-the-moment data collection on leader/team dynamics to be an incomparably rich foundation for effective coaching of leaders and their teams. With this high-impact approach, we observe leaders and their teams interacting in their regularly scheduled weekly business meetings, we give real-time feedback to the team and follow-up with 1:1 developmental coaching sessions with the leader. Through a 3 to 12 month engagement that includes targeted leader coaching, as well as spot coaching for team members, plus the design and facilitation of quarterly off-sites, expect dramatic—even exponential—improvement in the effectiveness and satisfaction of leaders, their teams, and the whole organization.</div>
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
                <div class="modal-left"></div>
                <div class="modal-right">
                    <div class="modal-title" id="ModalLabel4">Diagnosing Your Organization </div>
                    <h2>If you want to get to where you’re going, you first need to know where you really are.</h2>
                    <div class="modal-text" id="ModalText4">We skillfully and productively surface the unspoken conflicts and misalignments in and across teams that are getting in the company’s way. We discover what the concrete, day-to-day blockers are to the organization’s mission and goals. Then we drill down to the underlying patterns to find the essential issues and present these to the executive team. Based upon this information we advise executive teams on how to build and maintain the company culture that will best move the organization forward.</div>
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
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-1.jpg" class="magnific item" data-title="item 1">
                            <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage1"] }}}" alt="1">
                        </a>
                        <a href="https://www.youtube.com/watch?v=pzot1TWuutY" class="magnific-youtube item" data-title="item 2"></a>
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-3.jpg" class="magnific item" data-title="item 3"></a>
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-4.jpg" class="magnific item" data-title="item 4"></a>
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
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-1.jpg" class="magnific item" data-title="item 1">
                            <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage2"] }}}" alt="1">
                        </a>
                        <a href="https://www.youtube.com/watch?v=pzot1TWuutY" class="magnific-youtube item" data-title="item 2"></a>
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-3.jpg" class="magnific item" data-title="item 3"></a>
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-4.jpg" class="magnific item" data-title="item 4"></a>
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
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-1.jpg" class="magnific item" data-title="item 1">
                            <img class="img-responsive center-block team-photo" src="{{{ $data["teamImage3"] }}}" alt="1">
                        </a>
                        <a href="https://www.youtube.com/watch?v=pzot1TWuutY" class="magnific-youtube item" data-title="item 2"></a>
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-3.jpg" class="magnific item" data-title="item 3"></a>
                        <a href="http://www.oxygenna.com/wp-content/uploads/2014/11/blog-4.jpg" class="magnific item" data-title="item 4"></a>
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
<section id="services">
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
        <div class="row">
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/army.jpg" alt="1">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/autodesk.jpg" alt="2">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/cholestech.jpg" alt="3">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/clinica.png" alt="4">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/hill.png" alt="8">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/google.jpg" alt="6">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/hba.png" alt="7">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/jansport.jpg" alt="9">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/lucas.jpg" alt="10">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/northface.jpg" alt="11">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/oracle.png" alt="12">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/roche.jpg" alt="13">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/sap.jpg" alt="14">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/startx.png" alt="15">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/thermofisher.png" alt="16">
            </div>
            <div class="col-lg-3 col-sm-4" style="height:100px">
                <img class="img-responsive center-block" src="img/portfolio/trulia.jpg" alt="17">
            </div>
        </div>
    </div>
</section>



<!-- Contact Us -->
<section id="contact">
    <div class="contact-form">
        <div class="contact-container">
            <h2>Send a Message</h2>
            <form>
                <div class="contact-messagebox">
                    <label>Your name</label>
                    <br>
                    <input type="text" name="your-name" placeholder="First Last"/>
                </div>
                <div class="contact-messagebox">
                    <label for="">Your e-mail</label>
                    <br>
                    <input type="email" name="your-email" placeholder="me@example.com"/>
                </div>
                <div class="contact-messagebox">
                    <label for="">Your message</label>
                    <br>
                    <textarea cols="40" row="10" placeholder="How can we help?"></textarea>
                </div>
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

