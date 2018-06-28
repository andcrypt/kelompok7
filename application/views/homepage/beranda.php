<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rock Music an entertainment Category Bootstrap responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Rock Music Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- gallery -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/cm-overlay.css" />
    <!-- //gallery -->
    <!-- font-awesome icons -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="<?php echo base_url() ?>//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script> 
    <!-- animation -->
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <script>
     new WOW().init();
 </script>
 <!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
    <!-- banner -->
    <div class="banner jarallax">
        <div class="agileinfo-dot">
            <div class="header">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="agileits-logo">
                                <h1><a href="index.html"><img src="assets/images/logo1.png" alt="" /> Rock Music</a></h1>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav>
                                <ul class="nav navbar-nav">
                                    <!--                                     <li class="active"><a href="index.html">Home</a></li> -->
                                    <li><a href="#about" class="scroll">About</a></li>
                                    <li><a href="#events" class="scroll">Category</a></li>
                                    <li><a href="#news" class="scroll">Event</a></li>                                    
                                    <!-- <li><a href="#team" class="scroll">Team</a></li> -->
                                    <li><a href="#mail" class="scroll">Contact Us</a></li>
                                    
                                    <li class="active"><a href="<?php echo base_url('homepage/registrasi') ?>">Registration</a></li>
                                    <?php if ($this->session->userdata('logged_in') == null): ?>

                                        <li class="active"><a href="<?php echo base_url('homepage/login') ?>">Login</a></li>
                                    <?php else: ?>

                                        <li class="active"><a href="<?php echo base_url('user/logout') ?>">Logout</a></li>
                                    <?php endif ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <div class="w3layouts-banner-info">
                <div class="container">
                    <div class="w3ls-text">
                        <h2>Week end DJ</h2>
                    </div>
                    <div class="w3-arrow bounce animated">
                        <a href="#indro" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- introduction -->
<!--     <div class="introduction" id="indro">
        <div class="container">
            <div class="w3l-heading">
                <h3>Introduction</h3>
                <div class="w3ls-border"> </div>
            </div>
            <div class="introduction-info">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus iaculis lacus in pharetra. Morbi tincidunt nisi et bibendum varius. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin vulputate arcu consequat enim vulputate posuere. Aenean malesuada quam vitae mi ullamcorper, vel lobortis risus rutrum.</p>
            </div>
        </div>
    </div> -->
    <!-- //introduction -->
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="w3l-heading about-heading">
                <h3>About Us</h3>
                <div class="w3ls-border about-border"> </div>
            </div>
            <div class="agileits-about-grids">
                <div class="about-grids">
                    <div class="col-md-6 about-grid">
                        <div class="col-xs-3 about-grid-left">
                            <span class="glyphicon glyphicon-asterisk effect-1" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 about-grid-right">
                            <h4>Cum soluta nobis est</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 about-grid">
                        <div class="col-xs-3 about-grid-left">
                            <span class="glyphicon glyphicon-road effect-1" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 about-grid-right">
                            <h4>Soluta nobis est cum</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="about-grids1">
                    <div class="col-md-6 about-grid">
                        <div class="col-xs-3 about-grid-left">
                            <span class="glyphicon glyphicon-plane effect-1" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 about-grid-right">
                            <h4>Eligendi cum soluta nobis</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 about-grid">
                        <div class="col-xs-3 about-grid-left">
                            <span class="glyphicon glyphicon-bed effect-1" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 about-grid-right">
                            <h4>Nobis cum soluta est</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- gallery -->
    <div class="gallery" id="events">
        <div class="container">
            <div class="w3l-heading">
                <h3>Our GALERI</h3>
                <div class="w3ls-border">

              </div>
          </div>

          <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div class="w3_tab_img">
                <?php foreach ($galeri as $key => $value): ?>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            <a class="cm-overlay" href="<?php echo base_url('homepage/pesan/'.$value['id_galeri']) ?>">
                              <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="<?php echo base_url() ?>assets/images/<?php echo $value['gambar'] ?>" alt=" " class="img-responsive" width=500 height=500/>
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                        <h5><?php echo $value['nama_foto'] ?></h5>
                        <p>--Desc--</p>
                    </div>
                </div>
            <?php endforeach ?>
            <div class="clearfix">
            </div>

        </div>
        <div class="col-12 text-center">
            <?php
            if (isset($links)) {
                echo $links;
            }
            ?>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/js/jquery.tools.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.mobile.custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.cm-overlay.js"></script>
    <script>
        $(document).ready(function(){
            $('.cm-overlay').cmOverlay();
        });
    </script>
</div>
</div>

    <!--TEAM <- Aktifkan <a href="#team" class="scroll">Team</a></li>>
        <!-- //gallery -->
        <!-- team -->
<!--     <div class="team jarallax" id="team">
        <div class="team-dot">
            <div class="container">
                <div class="w3l-heading about-heading">
                    <h3>Our Team</h3>
                    <div class="w3ls-border about-border"> </div>
                </div>
                <div class="agileits-team-grids">
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="assets/images/t1.jpg" alt="" />
                            <div class="team-caption"> 
                                <h4>Justo congue</h4>
                                <p>Fusce laoreet</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="assets/images/t2.jpg" alt="" />
                            <div class="team-caption"> 
                                <h4>Justo congue</h4>
                                <p>Fusce laoreet</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="assets/images/t3.jpg" alt="" />
                            <div class="team-caption"> 
                                <h4>Justo congue</h4>
                                <p>Fusce laoreet</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="assets/images/t4.jpg" alt="" />
                            <div class="team-caption"> 
                                <h4>Justo congue</h4>
                                <p>Fusce laoreet</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                -->                    <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- news -->
<div class="news" id="news">
    <div class="container">
        <div class="w3l-heading">
            <h3>Our Event</h3>
            <div class="w3ls-border">
                <ul class="nav nav-pills">
                      <?php foreach ($kategori as $key => $value): ?>
                        <li role="presentation"><a href="#"><?php echo $value->nama_kategori ?></a></li>
                      <?php endforeach ?>
                  </ul>
            </div>
        </div>
        <div class="wthree-news-grids">
            <!-- date -->
            <div id="design" class="date">
                <div id="cycler">   
                    <?php foreach ($event as $key => $value): ?>
                        <div class="wthree-news-grid">
                            <div class="wthree-news-left">
                                <h4><?php echo date('d',strtotime($value->tanggal_mulai)) ?> <span><?php echo date('M y',strtotime($value->tanggal_mulai)); ?></span></h4>
                            </div>
                            <div class="date-text">
                                <a href="<?php echo base_url('Homepage/pesan/'.$value->id_event) ?>" data-toggle="modal" data-target="#myModal"> <?php echo $value->nama_event ?></a>
                                <p><?php echo $value->deskripsi ?>.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    <?php endforeach ?>
                </div>                      
                <script>
                    function blinker() {
                        $('.blinking').fadeOut(500);
                        $('.blinking').fadeIn(500);
                    }
                    setInterval(blinker, 1000);
                </script>
                <script>
                    function cycle($item, $cycler){
                        setTimeout(cycle, 2000, $item.next(), $cycler);

                        $item.slideUp(1000,function(){
                            $item.appendTo($cycler).show();        
                        });
                    }
                    cycle($('#cycler div:first'),  $('#cycler'));
                </script>
            </div>
            <!-- //date -->
        </div>
    </div>
</div>
<!-- //news -->
<!-- modal -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                <h4 class="modal-title">Rock Music</h4>
                <h5>24 Sept 2017</h5>
            </div> 
            <div class="modal-body">
                <div class="agileits-w3layouts-info">
                    <img src="assets/images/1.jpg" alt="" />
                    <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //modal -->
<!-- contact -->
<div class="contact" id="mail">
    <div class="container">
        <div class="w3l-heading about-heading">
            <h3>Get In Touch</h3>
            <div class="w3ls-border about-border"> </div>
        </div>
        <div class="introduction-info contact-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus iaculis lacus in pharetra. Morbi tincidunt nisi et bibendum varius. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin vulputate arcu consequat enim vulputate posuere. Aenean malesuada quam vitae mi ullamcorper, vel lobortis risus rutrum.</p>
        </div>
    </div>
</div>
<div class="contact-form">
    <div class="col-md-4 contact-form-left">
        <h5>Our Location</h5>
        <div class="address-grids">
            <div class="address-grid">
                <div class="address-icon">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>  
                <div class="address-info">
                    <p>Indonesian<br>
                        St Soekarno-Hatta,<br>
                        Malang 617311.
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grid">
                <div class="address-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>  
                <div class="address-info">
                    <p>+62 822 2161 4411<br>
                    +62 815 1524 5655</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grid">
                <div class="address-icon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>  
                <div class="address-info">
                    <p><a href="mailto:example@email.com">nyikdewo@gmail.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
        <!-- <div class="col-md-8 contact-form-right">
            <h5>Contact Form</h5>
            <div class="contact-form-grid">
                <form action="#" method="post">
                    <div class="fields-grid">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Full Name" required="">
                            <label>Full Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Phone" required=""> 
                            <label>Phone</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="Email" required=""> 
                            <label>Email</label>
                            <span></span>
                        </div> 
                        <div class="styled-input">
                            <input type="text" name="Subject" required="">
                            <label>Subject</label>
                            <span></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="styled-input textarea-grid">
                        <textarea name="Message" required=""></textarea>
                        <label>Message</label>
                        <span></span>
                    </div>   
                    <input type="submit" value="SEND">
                </form>
            </div>
        </div> -->
        <div class="clearfix"> </div>
    </div>
    <!-- //contact -->
    <!-- footer -->
    <footer>
        <div class="container">
            <p>© 2017 Rock Music . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
        </div>
    </footer>
    <!-- //footer -->
    <script src="<?php echo base_url() ?>assets/js/jarallax.js"></script>
    <script src="<?php echo base_url() ?>assets/js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <script src="<?php echo base_url() ?>assets/js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/easing.js"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <!-- //here ends scrolling icon -->
    </body> 
    </html>