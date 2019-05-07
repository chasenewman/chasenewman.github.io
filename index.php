<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chase Newman - Developer/Designer</title>
        <link rel="icon" href="images/favicon.jpg" type='image/x-icon'/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script type="text/javascript" src="js/main.js"></script>
        
    </head>

    <body>
        <section class="intro">
            <div class="container">
                <div class="row intro-row">
                    <div class="col-md-5 col-xs-12">
                        <img class="logo img-responsive" src="images/logo2-white.png" alt="logo">
                    </div>
                    <div class="col-md-7 col-xs-12 text-left">
                        <h1>Chase<br>Newman</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-md-offset-5 col-xs-12 bio-text">
                        <p>I'm a front-end web developer with a background in design. I primarily build custom Wordpress sites that look great and function well thanks to the talented designers I work with, and to the attention to detail and eye  for design I've developed over the years. My code is clean, and yes, I <i>can</i> Photoshop that image for you.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="work">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 dev-work" id="dev">
                        <h2>Web-Development Work</h2>
                        <a href="#dev-gallery" data-slide-to="0">
                            <div id="smilesdental" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#dev-modal"></div>
                        </a>
                        <a href="#dev-gallery" data-slide-to="1">
                            <div id="everwood" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#dev-modal"></div>
                        </a>
                        <a href="#dev-gallery" data-slide-to="2">
                            <div id="spanaway" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#dev-modal"></div>
                        </a>
                        <a href="#dev-gallery" data-slide-to="3">
                            <div id="pearlriver" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#dev-modal"></div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12 design-work" id="design">
                        <h2>Design Work</h2>
                        <a href="#design-gallery" data-slide-to="0">
                            <div id="magazine" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#design-modal"></div>
                        </a>
                        <a href="#design-gallery" data-slide-to="1">
                            <div id="email" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#design-modal"></div>
                        </a>
                        <a href="#design-gallery" data-slide-to="2">
                            <div id="digital" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#design-modal"></div>
                        </a>
                        <a href="#design-gallery" data-slide-to="3">
                            <div id="outdoor" class="col-xs-6 example modal-image wow fadeIn" data-toggle="modal" data-wow-delay="0.1s" data-target="#design-modal"></div>
                        </a>
                    </div>
                    <div id="dev-modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="controls">
                                        <h3>Sites I've Developed*<br><span>*(but did not design)</span></h3>
                                        <button class="close" title="Close" type="button" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <a class="left carousel-control" href="#dev-gallery" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <div id="dev-gallery" class="carousel slide" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/smilesdental_mockup.png" alt="Smiles Dental website">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Smiles Dental</h4>
                                                        <a class="bttn" href="https://welovesmiles.com" target="_blank">Check It Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/everwood_mockup.png" alt="Everwood Hospitality website">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Everwood Hospitality</h4>
                                                        <a class="bttn" href="http://everwoodhospitality.com" target="_blank">Check It Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/spanaway_mockup.png" alt="Spanaway Dental Wellness website">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Spanaway Dental Wellness</h4>
                                                        <a class="bttn" href="https://spanawaydentalwellness.com" target="_blank">Check It Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/pearlriver_mockup.png" alt="Pearl River Family Dentistry website">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Pearl River Family Dentistry</h4>
                                                        <a class="bttn" href="https://pearlriverfamilydentistry.com" target="_blank">Check It Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="right carousel-control" href="#dev-gallery" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="design-modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="controls">
                                        <h3>Stuff I've Designed</h3>
                                        <button class="close" title="Close" type="button" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <a class="left carousel-control" href="#design-gallery" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <div id="design-gallery" class="carousel slide" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/wv_roddersjournal.jpg" alt="Rodder's Journal magazine ad">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Rodder's Journal magazine ad</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/ctc_michelinpromo_email.jpg" alt="Coker Tire email">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Email design <b>(&amp; development)</b> for Coker Tire</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/MarmonWaspInfographic.jpg" alt="Marmon Wasp infographic">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Marmon Wasp infographic</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row item-row">
                                                    <div class="col-md-8 col-xs-12 image">
                                                        <img class="img-responsive" src="images/krystalmq_od.jpg" alt="Outdoor billboard for Krystal">
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 text">
                                                        <h4>Outdoor billboard for Krystal</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="right carousel-control" href="#design-gallery" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                        <a class="bttn" href="mailto:chase.nwmn@gmail.com">Contact Me</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="content-info">
            <div class="copy">
                <p>&copy; <?php echo date('Y'); ?> CHASE NEWMAN</p>
            </div>
        </footer>
    </body>
</html>