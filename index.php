<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chase Newman - Front-End Web Developer/Designer</title>
        <link rel="icon" href="images/favicon.jpg" type='image/x-icon'/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Suez+One&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>

    <body>
        <section class="intro">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xs-12">
                        <h1>Chase Newman</h1>
                        <h4>Front-End Web Developer/Designer</h4>
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <section class="content mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xs-12">
                        <h2>Web Development Work</h2>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="0">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#devModal" src="/images/ejm_500.jpg" alt="EJM Dental Studio site thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="1">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#devModal" src="/images/mds_500.png" alt="Marigold Dental Studio site thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="2">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#devModal" src="/images/cfhs_500.png" alt="CryoFire Health Spa site thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="3">
                                    <img data-bs-toggle="modal" data-bs-target="#devModal" class="img-fluid" src="/images/hhpo_500.png" alt="Haverhill Pediatric Dentistry and Orthodontics site thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="4">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#devModal" src="/images/mfd_500.png" alt="Mauka Family Dental site thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="5">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#devModal" src="/images/tsd_500.png" alt="Texas Star Dental site thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="6">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#devModal" src="/images/bsd_500.png" alt="Bright Smiles Dental site thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#devCarousel" data-bs-slide-to="7">
                                    <img data-bs-toggle="modal" data-bs-target="#devModal" class="img-fluid" src="/images/pearlriver_500.jpg" alt="Pearl River Family Dentistry site thumbnail">
                                </a>
                            </div>
                        </div>

                        <div class="modal fade" id="devModal" tabindex="-1" aria-labelledby="devModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="title-close">
                                            <h3 id="devModalLabel">Websites I've Built* <br><span class="sub">*(but did not design)</span></h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="carousel-control-buttons">
                                            <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#devCarousel" data-bs-slide="prev">
                                                <i class="fa fa-chevron-circle-left"></i>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control carousel-control-next" type="button" data-bs-target="#devCarousel" data-bs-slide="next">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div id="devCarousel" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="false">
                                                    <h5>EJM Dental Studio</h5>
                                                    <img class="img-fluid" src="/images/ejm_screens.png" alt="EJM Dental Studio site">
                                                    <a class="bttn" href="https://www.ejmdentalstudio.com/" target="_blank">Check It Out</a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Marigold Dental Studio</h5>
                                                    <img class="img-fluid" src="/images/mds_screens.png" alt="Marigold Dental Studio site">
                                                    <a class="bttn" href="https://marigolddentalstudio.com/" target="_blank">Check It Out</a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>CryoFire Health Spa</h5>
                                                    <img class="img-fluid" src="/images/cfhs_screens.png" alt="CryoFire Health Spa site">
                                                    <a class="bttn" href="https://cryofirehealthspa.com/" target="_blank">Check It Out</a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Haverhill Pediatric Dentistry and Orthodontics</h5>
                                                    <img class="img-fluid" src="/images/hhpo_screens.png" alt="Haverhill Pediatric Dentistry and Orthodontics site">
                                                    <a class="bttn bttn-white" href="https://haverhillpedoandortho.com/" target="_blank">Check It Out</a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Mauka Family Dental</h5>
                                                    <img class="img-fluid" src="/images/mfd_screens.png" alt="Mauka Family Dental site">
                                                    <a class="bttn" href="https://maukafamilydental.com/" target="_blank">Check It Out</a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Texas Star Dental</h5>
                                                    <img class="img-fluid" src="/images/tsd_screens.png" alt="Texas Star Dental site">
                                                    <a class="bttn" href="https://texasstardental.com/" target="_blank">Check It Out</a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Bright Smiles Dental</h5>
                                                    <img class="img-fluid" src="/images/bsd_screens.png" alt="Bright Smiles Dental site">
                                                    <a class="bttn" href="https://brightsmiles-dental.com/" target="_blank">Check It Out</a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Pearl River Family Dentistry</h5>
                                                    <img class="img-fluid" src="/images/pearlriver_mockup.png" alt="Pearl River Family Dentistry site">
                                                    <a class="bttn" href="https://www.pearlriverfamilydentistry.com/" target="_blank">Check It Out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xs-12">
                        <h2>Graphic Design Work</h2>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#designCarousel" data-bs-slide-to="0">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#designModal" src="/images/wv_500.jpg" alt="WV ad thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#designCarousel" data-bs-slide-to="1">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#designModal" src="/images/cokeremail_500.jpg" alt="Coker ad thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#designCarousel" data-bs-slide-to="2">
                                    <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#designModal" src="/images/marmon_500.jpg" alt="Marmon Wasp infographic thumbnail">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <a class="modal-link" href="#designCarousel" data-bs-slide-to="3">
                                    <img data-bs-toggle="modal" data-bs-target="#designModal" class="img-fluid" src="/images/krystal-od_500.jpg" alt="Krystal billboard thumbnail">
                                </a>
                            </div>
                        </div>

                        <div class="modal fade" id="designModal" tabindex="-1" aria-labelledby="designModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="title-close">
                                            <h3 id="designModalLabel">Designs I've Created</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="carousel-control-buttons">
                                            <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#designCarousel" data-bs-slide="prev">
                                                <i class="fa fa-chevron-circle-left"></i>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control carousel-control-next" type="button" data-bs-target="#designCarousel" data-bs-slide="next">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div id="designCarousel" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="false">
                                                    <h5>Rodder's Journal magazine ad</h5>
                                                    <img class="img-fluid" src="/images/wv_roddersjournal.jpg" alt="WV ad">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Email design (& development) for Coker Tire</h5>
                                                    <img class="img-fluid" src="/images/ctc_michelinpromo_email.jpg" alt="Coker email">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Marmon Wasp infographic</h5>
                                                    <img class="img-fluid" src="/images/MarmonWaspInfographic.jpg" alt="Marmon Wasp infographic">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="false">
                                                    <h5>Outdoor billboard for Krystal</h5>
                                                    <img class="img-fluid" src="/images/krystalmq_od.jpg" alt="Krystal billboard">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> CHASE NEWMAN</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
