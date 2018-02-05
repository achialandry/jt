<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', ' Vancouver Professional Roofing, Waterproofing, Concrete, & Building Envelope Consultants | J. Taylor & Associates, BC, Canada.') }}</title>

    <meta name="description" content="Roofing, Waterproofing, Concrete, Building
Envelope Consulting Services in B.C, Vancouver. Proudly Serving Metro Vancouver, All Lower Mainland, and Fraser Valley Locations of B.C">

    <meta name="keywords" content="building consulting services, Roofing professionals Vancouver, Expert Building Envelope Consultants, Waterproofing professionals, Concrete Consultants BC, Best Roofing professionals in Vancouver, Best Waterproofing professionals in Vancouver, Reliable Building envelope consultants in B.C, Expert waterproofing consultants in Vancouver, Moisture Leak consultants, professional roofing consultants Surrey, Fraser Valley Roofing professionals, Waterproofing professionals in Burnaby, concrete rehabilitation professionals Vancouver, Building project consultants, Building construction contract management consultants Vancouver, construction management Vancouver, Construction experts B.C Canada, JTABC, British Columbia, Building consultants, Basement waterproofing professionals, professional waterproofing services, home building science, building science vancouver, re-roofing, re-waterproofing, roofing replacement, waterproofing replacement">



    <!-- Font Awesome Icons  -->
    <!-- <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> -->

    <!-- Carousel   -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

    <!-- AOS CSS scripts  -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

    <!-- Custom CSS scripts  -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- flavicon -->
    <link rel="shortcut icon" href="{{{ asset('img-assets/favicon-16x16.png') }}}">

</head>
  <body data-spy="scroll" data-target=".navbar">

    <header>
      <nav  class="navbar navbar-expand-md navbar-dark fixed-top bg-dark  py-1">
          <div class="container">
              <a class="navbar-brand" href="#"><img src="{{asset('img-assets/JTA_logo-min.png') }}" width="90" height="90" class="d-inline-block align-top" alt="Jay Taylor & Associates Logo" /> <a href="#" class="text-light d-inline-block align-top" style="text-decoration:none; font-weight:bold;">J. Taylor & Associates Ltd</a></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse fill justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav ml-auto  ">
                  <li class="nav-item">
                    <a class="nav-link active" href="#homePage">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <!-- Authentication Links -->
                  @if (Route::has('login'))
                  <li class="nav-item">
                      @auth
                    <a class="nav-link" href="{{ url('/home') }}">My Account</a>
                      @else
                        <a class="nav-link" href="{{ route('login') }}">Client login</a>
                     @endauth
                  </li>
                   @endif
                </ul>
              </div>
          </div>

      </nav>
  </header>
    <main role="main">


    </main><!-- End Main Div-->
        <!-- FOOTER -->
        <footer class="page-footer  center-on-small-only">
            <div class="container text-light"><br>
                <div class="row"><br>

                        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                            <h5 class="title mb-4  font-bold">J. Taylor & Associates Ltd.</h5>
                            <ul>
                                <li>
                                    <p><i class="fa fa-home text-light"></i> 7164, 120th Surrey, BC. V3W 3M8</p>
                                    <p><i class="fa fa-envelope text-light"></i> 604-503-4161</p>
                                    <p><i class="fa fa-phone text-light"></i> Mobile(24hrs): 778-885-4161</p>
                                    <p><i class="fa fa-print text-light"></i> Fax: 604-503-4160</p>
                                </li>
                            </ul>

                        </div>
                        <div  class=" col-md-4 col-lg-4 col-xl42 mx-auto mt-3">
                            <h5 class="title mb-4 mt-3 font-bold">Links</h5>
                            <ul>
                                <li><a  href="#!">Home</a></li>
                                <li><a  href="#!">Services</a></li>
                                <li><a  href="#!">Projects</a></li>
                                <li><a  href="#!">About Us</a></li>
                                <li><a  href="#!">Contact</a></li>

                            </ul>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <p class="float-right"><a href="#">Back to top</a></p>
                        </div>


                </div>
                <!--Copyright-->
                <div class="footer-copyright">
                    <div class="container-fluid">
                        &copy; 2018 <a href="https://www.jtabc.com"> J.Taylor & Associates, Ltd.</a>

                    </div>
                </div>
                <!--/.Copyright-->
            </div>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        <script src="{{ asset('js/app.js') }}"></script>
        <script>window.jQuery || document.write('<script src="{{asset('js/jquery-slim.min.js')}}"><\/script>')</script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script src="{{asset('js/fade_in_effect.js')}}"></script>
        <script src="{{asset('js/ekko-lightbox.js')}}"></script>
        <!-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT1OuAzRKpH6y5o-PC-8Eu4wfDqvfXUrk  "></script> -->

        <script src="{{asset('js/aos.js')}}"></script>
        <!-- <script src="{{asset('js/popper.min.js')}}"></script> -->


        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/mdb.min.js')}}"></script>

        <script src="{{asset('js/holder.min.js')}}"></script>

        <!-- Font Awesome loader -->
        <!-- <script src="https://use.fontawesome.com/67abb49b50.js"></script> -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT1OuAzRKpH6y5o-PC-8Eu4wfDqvfXUrk&callback=jtabcMap"></script> -->
        <!-- <script src="/assets/gmap3.js?body=1" type="text/javascript"></script> -->
      </body>
    </html>
