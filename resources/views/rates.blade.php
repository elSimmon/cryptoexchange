<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('sky/images/favicon.jpg')}}" type="image/x-icon" />

    <!-- Map CSS -->
    <link rel="stylesheet" href="{{asset('landkit/api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css')}}" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('landkit/assets/css/libs.bundle.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('landkit/assets/css/theme.bundle.css')}}" />
    <!-- Title -->
    <title>iKHENT Exchange</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script>--}}
    {{--    <script>--}}
    {{--      window.dataLayer = window.dataLayer || [];--}}

    {{--      function gtag() {--}}
    {{--        dataLayer.push(arguments);--}}
    {{--      }--}}
    {{--      gtag("js", new Date());--}}
    {{--      gtag("config", "UA-156446909-2");--}}

    {{--    </script>--}}
</head>
<body>

<!-- MODALS -->
<!-- Example -->
<div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <!-- Close -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Image -->
                <div class="text-center">
                    <img src="{{asset('landkit/assets/img/illustrations/illustration-1.png')}}" alt="About Ikhent Exchange" class="img-fluid mb-3" style="width: 200px;">
                </div>

                <!-- Heading -->
                <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
                    Schedule a demo with us
                </h2>

                <!-- Text -->
                <p class="fs-lg text-center text-muted mb-6 mb-md-8">
                    We can help you solve company communication.
                </p>

                <!-- Form -->
                <form>
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- First name -->
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                                <label for="registrationFirstNameModal">First name</label>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Last name -->
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                                <label for="registrationLastNameModal">Last name</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Email -->
                            <div class="form-floating">
                                <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                                <label for="registrationEmailModal">Email</label>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Password -->
                            <div class="form-floating">
                                <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                                <label for="registrationPasswordModal">Password</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <!-- Submit -->
                            <button class="btn w-100 btn-primary mt-3 lift">
                                Request a demo
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{('/')}}">
            <img src="{{asset('landkit/assets/img/brand.png')}}" class="navbar-brand-img" alt="iKHENT Exchange">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-x"></i>
            </button>

            <!-- Navigation -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="{{('/')}}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('our-rates')}}">
                        Rates
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About Us
                    </a>
                </li>
                {{--            <li class="nav-item dropdown">--}}
                {{--              <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">--}}
                {{--                Contact Us--}}
                {{--              </a>--}}
                {{--            </li>--}}
                <li class="nav-item">
                    <a class="nav-link"  href="#faqs" >
                        FAQs
                    </a>
                </li>
            </ul>

            <!-- Button -->
            <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="{{route('login')}}">
                Sign In
            </a>

        </div>

    </div>
</nav>

<!-- WELCOME -->
<section class="pt-4 pt-md-11">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-12 col-lg-12 order-md-1" data-aos="fade-up">

                <!-- Heading -->
                <h1 class="display-3 text-center text-md-start">
                    <span class="text-danger text-bold">iKHENT Exchange</span> <br>
                    <span class="text-primary text-hightlighted">Bitcoin and Gift Card Rates</span>
                </h1>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- FEATURES -->
<section class="py-8 py-md-11 border-bottom">
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Bitcoin Rate
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th class="pl-0">From</th>
                            <th class="pl-0">To</th>
                            <th class="pl-0">Rate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rates as $item)
                            <tr>
                                <td class="">
                                    {{$item->from}}
                                </td>
                                <td class="">
                                    {{$item->to}}
                                </td>
                                <td class="">
                                    <span style="text-decoration: line-through;">N</span> {{$item->rate}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Giftcard Rates
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th class="pl-0">Card name</th>
                            <th class="pl-0">Sub-type</th>
                            <th class="pl-0">Country</th>
                            <th class="pl-0">Denomination</th>
                            <th class="pl-0">Rate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gift_cards as $item)
                            <tr>
                                <td class="pl-0">
                                    <div class="">
                                        {{$item->card_category->name}}
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <div class="">
                                        {{$item->country}}
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <div class="">
                                        {{$item->type}}
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <div class="">
                                        $  {{$item->denomination}}
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <div class="">
                                        <span style="text-decoration: line-through;">N</span> {{$item->rate}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- / .container -->
</section>

<!-- SHAPE -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
</div>

<!-- FOOTER -->
<footer class="py-8 py-md-11 bg-gray-200">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

                <!-- Brand -->
                <img src="{{asset('landkit/assets/img/brand.png')}}" alt="Ikhent Exchange Logo" class="footer-brand img-fluid mb-2">

                <!-- Text -->
                <p class="text-gray-700 mb-2">
                    A better way to trade digital currency.
                </p>

                <!-- Social -->
                <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="{{asset('landkit/assets/img/icons/social/instagram.svg')}}" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="{{asset('landkit/assets/img/icons/social/facebook.svg')}}" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="{{asset('landkit/assets/img/icons/social/twitter.svg')}}" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item">
                        <a href="#!" class="text-decoration-none">
                            <img src="{{asset('landkit/assets/img/icons/social/pinterest.svg')}}" class="list-social-icon" alt="...">
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    LINKS
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            How to Trade
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Trading Rates
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            FAQs
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Services
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Bitcoin Trading
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Gift Card Trading
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Policies and Disclaimers;
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{route('terms')}}" class="text-reset">
                            Terms of Service
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    iKHENT Exchange
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-3">
                        <a href="#about" class="text-reset">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{route('login')}}" class="text-reset">
                            Sign in
                        </a>
                    </li>
                </ul>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?43069';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled":true,
        "chatButtonSetting":{
            "backgroundColor":"#4dc247",
            "ctaText":"",
            "borderRadius":"25",
            "marginLeft":"10",
            "marginBottom":"50",
            "marginRight":"50",
            "position":"left"
        },
        "brandSetting":{
            "brandName":"iKHENT EXCHANGE",
            "brandSubTitle":"Typically replies within a day",
            "brandImg":"https://ikhentinc.exchange/landkit/assets/img/brand.png",
            "welcomeText":"Hi there!\nHow can I help you?",
            "messageText":"I want to know more about your rates",
            "backgroundColor":"#033963",
            "ctaText":"Start Chat",
            "borderRadius":"25",
            "autoShow":false,
            "phoneNumber":"2347026614198"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</body>
<!-- JAVASCRIPT -->
<!-- Map JS -->
<script src="{{asset('landkit/api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('landkit/assets/js/vendor.bundle.js')}}"></script>

<!-- Theme JS -->
<script src="{{asset('landkit/assets/js/theme.bundle.js')}}"></script>
<script src="//code.tidio.co/o5juznjvxxgi9bg0wq2khllvafkzyxyy.js" async></script>
<!-- Mirrored from landkit.goodthemes.co/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 04:14:38 GMT -->
</html>

