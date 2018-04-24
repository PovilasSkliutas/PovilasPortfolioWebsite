<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Povilas Skliutas Portfolio</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Custom fonts for this template -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/app.css">

    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- HEADER SECTION START-->
    <nav id="header-navbar" class="navbar navbar-toggleable-md navbar-light fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#home">Povilas Skliutas</a>

        <div id="navbarToggler" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- HEADER SECTION END-->

    <!-- MAIN SECTION START -->
    <div id="MainContainer">
        <!-- Banner Section start -->
        <div id="home" class="ParallaxContainer bg-img-1 d-flex">
            <div class="container banner-section my-auto">
                <div class="row align-items-left">
                    <div class="parallax-content col-md-6">
                        <h1 href="" class="typewrite" data-period="2000" data-type='[ "Hello, Im Povilas!", "Im Creative!", "I Love Design!", "I Love to Develop!" ]'>
                            <span class="wrap"></span>
                        </h1>
                        <p>I'm Front-End Developer who focuses on writing clean, elegant and efficient code. I'm available for your service.</p>
                        <p><strong>Let's</strong> Build <strong>Something</strong> Great <strong>Together</strong>!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section end -->

        <!-- ABOUT Section start -->
        <div id="about" class="ContentContainer">
            <div class="container about-section my-auto">
                <div class="row align-items-center">
                    <div class="section-title col text-center">
                        <h2 class="section-heading">About me</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <!-- <h3>Introduction</h3>
                        <hr class="my-3"> -->
                        <p class="mb-4">
                            <strong>HELLO</strong>, I am Povilas Sklutas, a freelance Front-End developer from Vilnius, Lithuania.

                        </p>
                        <!-- <h3>My skills</h3>
                        <hr class="my-3"> -->
                        <p class="mb-4">
                            I discovered and got interested in programming in 2017. My programmer's career started at 3W Academy courses.
                            In this academy I have been learning the basics of programming for 60 days.
                            3W Academy courses include five technologies that today are essential for
                            creating web pages:
                        </p>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3 (Boostrap4, Sass)</li>
                            <li>Javascript (Jquery)</li>
                            <li>PHP (Laravel)</li>
                            <li>MySQL</li>
                        </ul>
                        <hr class="my-3">
                        <!-- Button trigger modal -->
                        <!-- <div class="col-6" style="padding-left: 0px;">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#hireMeModal"> HIRE ME </button>
                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="method-box mx-auto">
                            <i class="fab fa-html5 fa-2x"></i><span>html 5</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                        <div class="method-box mx-auto">
                            <i class="fab fa-css3-alt fa-2x"></i><span>css 3</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                        <div class="method-box mx-auto">
                            <i class="fab fa-js-square fa-2x"></i><span>JavaScript</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </div>
                        <div class="method-box mx-auto">
                            <i class="fab fa-php fa-2x"></i><span>php</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                            </div>
                        </div>
                        <div class="method-box mx-auto">
                            <span>MySQL</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="button-down col text-center">
                        <a class="btn btn-xl" href="#services"><i class="fas fa-angle-double-down fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT Section end -->

        <!-- SERVICES Section start -->
        <div id="services" class="ContentContainer">
            <div class="container service-section my-auto">
                <div class="section-title col text-center">
                    <h2 class="section-heading">what i do</h2>
                </div>
                <!-- services -->
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="service-box mx-auto">
                            <img class="img-center img-responsive" src="http://www.emilyridge.ie/wp-content/uploads/galway-website-design.png" alt="">
                            <!-- <i class="icon-1 fas fa-desktop"></i>
                            <i class="icon-2 fas fa-paint-brush"></i> -->
                            <p></p>
                            <h3>Website Design</h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="service-box mx-auto">
                            <img class="img-center img-responsive" src="http://www.emilyridge.ie/wp-content/uploads/galway-responsive-website-design.png" alt="">
                            <!-- <i class="icon-1 fas fa-laptop"></i>
                            <i class="icon-4 fas fa-tablet-alt"></i>
                            <i class="icon-5 fas fa-mobile-alt"></i> -->
                            <p></p>
                            <h3>Responsive designe</h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="service-box mx-auto">
                            <img class="img-center img-responsive" src="http://www.emilyridge.ie/wp-content/uploads/galway-website-development.png" alt="">
                            <!-- <i class="icon-1 fas fa-code"></i> -->
                            <p></p>
                            <h3>Web development</h3>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="button-down col text-center">
                        <a class="btn btn-xl" href="#contacts"><i class="fas fa-angle-double-down fa-2x"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- SERVICES Section end -->

        <!-- PORTFOLIO Section start -->
        <!-- <div id="portfolio" class="ContentContainer">
            <div class="container portfolio-section my-auto">
                <div class="section-title col text-center">
                    <h2 class="section-heading">Awesome Works</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-1 mx-auto">
                            <div class="gallery-overlay">
                                <h3>WERTMACHER</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="http://wertmacher-werbeagentur.com/" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-2 mx-auto">
                            <div class="gallery-overlay">
                                <h3>TREFECTAMOBILITY</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="https://www.trefectamobility.com/" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-3 mx-auto">
                            <div class="gallery-overlay">
                                <h3>BENTLEY MOTORS</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="https://www.bentleymotors.com/en.html" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-4 mx-auto">
                            <div class="gallery-overlay">
                                <h3>PROJECT TITLE</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="https://www.ktm.com/lt/" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-1 mx-auto">
                            <div class="gallery-overlay">
                                <h3>WERTMACHER</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="http://wertmacher-werbeagentur.com/" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-2 mx-auto">
                            <div class="gallery-overlay">
                                <h3>TREFECTAMOBILITY</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="https://www.trefectamobility.com/" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-3 mx-auto">
                            <div class="gallery-overlay">
                                <h3>BENTLEY MOTORS</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="https://www.bentleymotors.com/en.html" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="gallery-item project-img-4 mx-auto">
                            <div class="gallery-overlay">
                                <h3>PROJECT TITLE</h3>
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                <a href="https://www.ktm.com/lt/" target="_blank" class="btn gallery-window">View Project</a>
                            </div>
                        </div>
                    </div>
                <div class="button-down col text-center">
                    <a class="btn btn-xl" href="#contacts"><i class="fas fa-angle-double-down fa-2x"></i></a>
                </div>
            </div>
        </div> -->
        <!-- PORTFOLIO Section end -->

        <!-- COUNTER Section start -->
        <div id="counter" class="ContentContainer">
            <div class="container counter-section my-auto">
                <!-- Counter Item Start -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="counter-item">
                            <div class="counter-num">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="CounterUp">60</span>
                            </div>
                            <div class="counter-text">DAYS STUDYING</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="counter-item">
                            <div class="counter-num">
                                <i class="fas fa-flag-checkered"></i>
                                <span class="CounterUp">25</span>
                            </div>
                            <div class="counter-text">PILOT PROJECTS</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="counter-item">
                            <div class="counter-num">
                               <i class="fas fa-code"></i>
                               <span class="CounterUp">6000</span>
                            </div>
                            <div class="counter-text">LINE OF CODE</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="counter-item">
                            <div class="counter-num">
                            <i class="fas fa-coffee"></i>
                            <span class="CounterUp">240</span>
                        </div>
                            <div class="counter-text">CUP OF COFFEE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER Section end -->

        <!-- CONTACT Section start -->
        <div id="contacts" class="ContentContainer">
            <div class="container contact-section my-auto">
                <div class="section-title col text-center">
                    <h2 class="section-heading">Contacts</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-box mx-auto">
                            <p>
                                Have a cool project in mind, and think I can help you with it? Feel free
                                to contact me by contacts listed below or fill out the contact form on the right.
                            </p>
                            <hr class="my-3">
                            <p><i class="fas fa-mobile-alt fa-lg"></i><span>+370 607 78888</span></p>
                            <hr class="my-3">
                            <p><i class="fas fa-envelope fa-lg"></i><span>povilas.skliutas@gmail.com</span></p>
                            <hr class="my-3">
                            <p>
                                <a href="https://www.facebook.com/povilas.skliutas" target="_blank"><i class="fab fa-facebook-square fa-lg"></i><span>Like me on Facebook</span></a>
                            </p>
                            <hr class="my-3">
                            <p>
                                <a href="https://www.linkedin.com/feed/?trk=" target="_blank"><i class="fab fa-linkedin fa-lg"></i><span>Connect on LinkedIn</span></a>
                            </p>
                            <hr class="my-3">
                        </div>
                    </div>
                    <!-- Contact form start -->
                    <div class="col-lg-6">
                        <div class="contact-form-box mx-auto">
                            <form method="POST" action="function.php">
                                <div class="row">
                                    <div class="input-area col form-group">
                                        <label for="name">Your name </label><span class="emsg-1 hidden"> (Please use letters only!)</span>
                                        <input name="Name" type="text" class="name form-control" placeholder="Enter your name" required>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-area col form-group">
                                        <label for="email">Your email </label><span class="emsg-2 hidden"> (Please Enter a Valid Email!)</span>
                                        <input name="Email" type="text" class="email form-control" placeholder="Enter your email" required>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-area col form-group">
                                        <label for="message">Your message </label><span class="emsg-3 hidden"> (Please use letters and numbers only!)</span>
                                        <textarea name="Message" class="message form-control" rows="3" placeholder="Enter your message" required></textarea>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button id="submit" type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                    <div class="col-md-8">
                                        <p id="returnmessage"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact form end -->
                </div>
            </div>
        </div>
        <!-- CONTACT Section end -->

        <!-- FOOTER start -->
        <footer>
            <p>© Copyright 2018 by Povilas Skliutas. All rights reserved</p>
        </footer>
        <!-- FOOTER end -->
    </div>
    <!-- MAIN SECTION END -->

    <!-- Hire me modal start -->
    <div id="hireMeModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <!-- Modal Content Start -->
            <div class="modal-content">
                <!-- Modal Header Start -->
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="modal-title" id="hireMeModalTitle">HAVE A PROJECT?</h5>
                            <p>I’m ready to help you. You just type details below, and/or send us a file.</p>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal Header end -->

                <!-- Modal Body Start -->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Form-controls section start -->
                            <div class="col-md-8 form-controls">
                                <div class="row">
                                    <div class="col-md-6 name">
                                        <input type="text" id="hire_name" name="hire_name" placeholder="Your Name..." required />
                                    </div>

                                    <div class="col-md-6 email">
                                        <input type="email" id="hire_email" name="hire_email" placeholder="Please Enter Your Email..." required />
                                    </div>

                                    <div class="col-md-6 project-title">
                                        <input type="text" id="project_title" name="project_title" placeholder="Your Project Title..." required/>
                                    </div>

                                    <div class="col-md-6 case-category">
                                        <select name="hire_category" id="hire_category" class="bg-fa-caret-down SelectMenu" required>
                                            <option value="">-Select Case Category-</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="UI/UX Designer">UI/UX Designer</option>
                                            <option value="Seo">Seo</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 budget">
                                        <select name="hire_budget" id="hire_budget" class="bg-fa-caret-down SelectMenu" required >
                                            <option value="">-Budget-</option>
                                            <option value="<500"> iki 500</option>
                                            <option value="500-1000">500-1000</option>
                                            <option value="1000-2000">1000-2000</option>
                                            <option value=">2000">virš 2000</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 date">
                                        <input type="text" id="hire_date" name="hire_date" class="DatePicker bg-fa-calender" placeholder="-Estimate Date-" />
                                    </div>

                                    <div class="col-md-12 message">
                                        <textarea id="hairing_description" name="hairing_description" rows="7">Your Message...</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Estimate container start -->
                            <div class="col-md-4 estimate-container ml-auto">
                                <div class="estimate-img">
                                    <img src="img/hire-me-pic.png" alt="image" class="center-block img-responsive"/>
                                </div>
                                <div class="estimate-text">
                                    <h5>I would like to recieve an estimate cost of services.</h5>
                                    <h5>I understand I need to allow 2-4 business days to receive the estimate.</h5>
                                    <button type="button" class="btn btn-info">Send offer</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Modal Body end -->
          </div>
          <!-- Modal Content end -->
        </div>
    </div>
    <!-- Hire Me Modal End -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Custom scripts for this template -->
    <script src="js/porfolio.js"></script>

    </body>
</html>
