<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    First of us!
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-design-system.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="about-us">
  <?php
  require_once('../config.php');
  ?>

  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
        Landing Page
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover w-100">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <!-- <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
              <img src="assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
              <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
            </a> -->
            <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">

            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <!-- <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              Blocks
              <img src="assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
              <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
            </a> -->
            <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">

            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <!-- <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
              Docs
              <img src="assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
              <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
            </a> -->
            <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">

            </ul>
          </li>
          <li class="nav-item ms-lg-auto">
            <!-- <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/soft-ui-design-system" target="_blank">
              <i class="fa fa-github me-1"></i>
              <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
            </a> -->
          </li>
          <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="login.php" class="btn btn-sm  bg-white  btn-round mb-0 me-1 mt-2 mt-md-0">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('assets/img/office-dark.jpg');">
      <span class="mask bg-gradient-info opacity-8"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Bayar UKT yok!</h1>
            <p class="lead mb-4 text-white opacity-8">Kalau bisa sekarang ngapain nunggu kaya? Masuk dan temukan hal menarik disini</p>
            <a href="register.php">
              <button type="submit" class="btn bg-white text-dark">Create Account</button>
            </a>
            <h6 class="text-white mb-2 mt-5">Find us on</h6>
            <div class="d-flex justify-content-center">
              <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
          </g>
        </svg>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <!-- Section with four info areas left & one card right with image and waves -->
  <section class="py-7">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>spaceship</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(4.000000, 301.000000)">
                            <path class="color-foreground" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                            <path class="color-foreground" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                            <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                            <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3" opacity="0.598539807"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Fully integrated</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="43px" height="20px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>credit-card</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g id="credit-card" transform="translate(453.000000, 454.000000)">
                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743">
                            </path>
                            <path class="color-foreground" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Payments functionality</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="25px" height="25px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>box-3d-50</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                            <path class="color-foreground" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                            <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                            <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Prebuilt components</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="25px" height="25px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>customer-support</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(1.000000, 0.000000)">
                            <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path>
                            <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                            <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Improved platform</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
          <div class="card shadow-lg">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
              <div class="d-block blur-shadow-image">
                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg" alt="img-blur-shadow" class="img-fluid shadow rounded-3">
              </div>
              <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);"></div>
            </div>
            <div class="card-body">
              <a href="javascript:;">
                <h5 class="mt-3">
                  Get insights on Search
                </h5>
              </a>
              <p>
                Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Section with four info areas left & one card right with image and waves -->

  <div class="row justify-content-center text-center">
    <div class="col-md-3">
      <h1 class="text-gradient text-info" id="state1" countTo="5234">0</h1>
      <h5>Projects</h5>
      <p>Of “high-performing” level are led by a certified project manager</p>
    </div>
    <div class="col-md-3">
      <h1 class="text-gradient text-info"><span id="state2" countTo="3400">0</span>+</h1>
      <h5>Hours</h5>
      <p>That meets quality standards required by our users</p>
    </div>
    <div class="col-md-3">
      <h1 class="text-gradient text-info"><span id="state3" countTo="24">0</span>/7</h1>
      <h5>Support</h5>
      <p>Actively engage team members that finishes on time</p>
    </div>
  </div>
  </div>
  </section>
  <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  <section class="my-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <h4>Selalu jadi yang pertama update perkembangan kami</h4>
          <p class="mb-4">
            Akan selalu ada pembaruan dalam sistem untuk menjamin kemudahan anda dalam menuntut ilmu
          </p>
          <div class="row">
            <div class="col-8">
              <div class="input-group">
                <input type="text" class="form-control mb-sm-0" placeholder="Email Here...">
              </div>
            </div>
            <div class="col-4 ps-0">
              <button type="button" class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Subscribe</button>
            </div>
          </div>
        </div>
        <div class="col-md-5 ms-auto">
          <div class="position-relative">
            <img class="max-width-50 w-100 position-relative z-index-2" src="assets/img/illustrations/sign-up.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  <footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <h6 class="text-gradient text-primary font-weight-bolder">Soft UI Design System</h6>
          </div>
          <div>
            <h6 class="mt-3 mb-2 opacity-8">Social</h6>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-12">
          <div class="text-center">
            <p class="my-4 text-sm">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft UI Design System by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var limit = bgParallax.offsetTop + bgParallax.offsetHeight;
        if (scrollPosition > bgParallax.offsetTop && scrollPosition <= limit) {
          bgParallax.style.backgroundPositionY = (50 - 10 * scrollPosition / limit * 3) + '%';
        } else {
          bgParallax.style.backgroundPositionY = '50%';
        }
      });
    }
  </script>
</body>

</html>