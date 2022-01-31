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

<section class="pt-8 pt-md-11 pb-8 pb-md-14">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">

                <!-- Heading -->
{{--                <h1 class="display-4 mb-2">--}}
{{--                    Privacy Policy--}}
{{--                </h1>--}}

{{--                <!-- Text -->--}}
{{--                <p class="fs-lg text-gray-700 mb-md-0">--}}
{{--                    Last Updated: October, 2021                </p>--}}

{{--            </div>--}}

{{--        </div> <!-- / .row -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}

{{--                <!-- Divider -->--}}
{{--                <hr class="my-6 my-md-8">--}}

{{--            </div>--}}
{{--        </div> <!-- / .row -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 col-md-12">--}}

{{--                <!-- Text -->--}}
{{--                <p class="fs-lg text-gray-800 mb-6 mb-md-8">--}}
{{--                    These Terms of Use and any terms incorporated herein (hereinafter, the “Terms”) apply to your (“user”, “you“) use of the Services, including https://ikhentinc.exchange/ (“Website“), the technology and the platform integrated therein and any related applications (including without limitation the mobile one) associated therewith, which are operated and maintained by iKHENT Exchange (A Subsidiary of iKHENT INC). We provide you with the possibility to use our Services as defined above on the following terms and conditions.--}}
{{--                </p>--}}

{{--                <!-- Heading -->--}}
{{--                <h3 class="mb-5">--}}
{{--                    1. Enforcement & Amendments--}}
{{--                </h3>--}}

{{--                <!-- Text -->--}}
{{--                <p class="text-gray-800">--}}
{{--                <ol>--}}
{{--                    <li>These Terms of Use constitutes a binding agreement between iKHENT Exchange and the user as soon as the user visits the Website and uses Services. By doing so, the user confirms that he has read and accepted these Terms of Use in their entirety before finishing the registration procedure. </li>--}}
{{--                    <li>The user accepts that Terms of Use may be updated by iKHENT Exchange from time to time. If the user does not read and accept the Terms of Use in its entirety he should not use or continue using the Services. </li>--}}
{{--                    <li>We reserve the right to alter, amend or modify these Terms from time to time, in our sole discretion. We will provide you with notice of such changes by sending an e-mail, providing notice on the homepage of the Website and/or by posting the amended Terms via our Website and updating the "Last Updated" date at the top of these Terms. The amended Terms will be deemed effective immediately upon posting on Website.</li>--}}
{{--                </ol>--}}
{{--                </p>--}}

{{--                <!-- Heading -->--}}
{{--                <h3 class="mb-5">--}}
{{--                    2. Provided Services--}}
{{--                </h3>--}}

{{--                <!-- Text -->--}}
{{--                <p class="text-gray-800">--}}
{{--                <ol>--}}
{{--                    <li>Our Services provide you with a possibility to Exchange Bitcoin and gift cards to Naira and also a platform to settle your utility bills. </li>--}}
{{--                    <li>For the purposes hereof "Exchange" shall mean an exchange of gift cards and bitcoin at the terms and conditions set forth by exchanging parties, which is executed via the Third-party service in respective block-chain network. When you exchange Bitcoin you acknowledge and agree that the Exchange will be processed through the third-party exchange service with additional fees applicable to such Exchange. You acknowledge and agree that the exchange rates information made available via the Services are estimation only and may differ from prevailing rates available via other sources outside of our Services. </li>--}}
{{--                    <li>"Crypto Assets" herein shall be deemed as type of assets which can only and exclusively be transmitted by means of block-chain technology, including but not limited to digital coins and digital tokens and any other type of digital mediums of exchange, such as Bitcoin, Ethereum, Ripple, etc, to the full and absolute exempt of the securities of any kind</li>--}}
{{--                    <li>To be able to use all possibilities and functionality of our Services you shall go through the registration process and create an iKHENT Exchange Account. "iKHENT Exchange Account" is a user account accessible after the registration process and via the Services where the user may request to make a Bitcoin exchange and perform utility bills settlement. When you create an iKHENT Exchange Account you oblige to:--}}
{{--                        <ul>--}}
{{--                            <li>Change the password, which is generated by our Services automatically, for a strong password that you do not use for any other websites, online or off-line services;</li>--}}
{{--                            <li>Provide accurate e-mail, which actually belongs to you and shall be, therefore, verified. The access to the services provided by the iKHENT Exchange without verification of the e-mail or phone number is not allowed; </li>--}}
{{--                            <li>Maintain the security of your Ikhentinc.exchange Account and promptly notify us if you discover any suspicious activity related to your account; </li>--}}
{{--                            <li>Agree to pass through AML/KYC procedures, which may be applied to you according to our internal AML/KYC policies. As a part of such procedures, Ikhentinc.exchange reserves the right to request additional information and documents, which are aimed without limitation to identify our user and to prove the source of the funds; </li>--}}
{{--                            <li>Take responsibility for all activities that occur under your Ikhentinc.exchange Account.</li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>In order to perform the Exchange via our Services, our system will automatically generate the particular address, which contains information about the User; (ii) the crypto asset that User wants to exchange and the crypto asset that User wants to receive (jointly - "crypto pair"); and (iii) the recipient address provided by the user (the address where exchanged Bitcoin will be deposited). All addresses are reusable: those addresses can be used to perform an unlimited amount of transactions with the same parameters. If crypto pair and/or recipient address change, a new address will be generated by our system.</li>--}}
{{--                    <li>YOU INDEMNIFY AND HOLD IKHENTINC.EXCHANGE HARMLESS AGAINST ANY DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH YOUR USE OF OUR SERVICES, INCLUDING BUT NOT LIMITED TO THOSE ARISING FROM YOUR PERSONAL ERROR AND MISBEHAVIOR SUCH AS INCORRECT USE OF REUSABLE ADDRESS, INCORRECTLY CONSTRUCTED TRANSACTIONS ETC</li>--}}
{{--                    <li>Ikhentinc.exchange does not provide custodial services, which means, we do not store your Bitcoin on deposits and balances. In limited cases such as e.g. necessity to carry out AML/KYC procedure, your Exchange may be delayed. YOU HEREBY UNDERSTAND AND ACKNOWLEDGE, THAT ANY DELAYS ARE POSSIBLE; YOU INDEMNIFY AND HOLD US HARMLESS AGAINST ANY CLAIMS, DEMANDS AND DAMAGES, WHETHER DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE EXCHANGE DELAY, WHETHER ORIGINATED FROM OUR FAULT OR NOT.</li>--}}
{{--                </ol>--}}
{{--                </p>--}}

{{--                <!-- Heading -->--}}
{{--                <h3 class="mb-5">--}}
{{--                    3. AML and KYC procedure--}}
{{--                </h3>--}}

{{--                <!-- Text -->--}}
{{--                <p class="text-gray-800">--}}
{{--                <ol>--}}
{{--                    <li>In furtherance of the clause 2.4.4 Ikhentinc.exchange reserves the right to apply the AML/KYC procedure to particular users, addresses and particular transactions of crypto assets. </li>--}}
{{--                    <li>The up-to-date information on the AML/KYC procedures can always be found at AML/KYC. </li>--}}

{{--                </ol>--}}
{{--                </p>--}}

                    <pre>
                        Privacy and Data Retention Policy

Last Updated: October, 2021

This Privacy and Data Retention Policy (the Policy) explains the way in which Ikhentinc.exchange. (hereinafter referred to as “iKHENT EXCHANGE”) collect, use, share, and protect Personal Information of Users (“you”) obtained through the Ikhentinc.exchange (“Website“), any related applications (including without limitation the mobile one) and its exchange tools integrated into third-party services (“Services”). The terms “we,” “us,” and “our” refer to “iKHENT EXCHANGE” (A Subsidiary of iKHENT INC).

“Personal Information” is an information that identifies or can be used to identify, contact, or locate the person to whom such information pertains.

At iKHENT EXCHANGE, we are fully committed to respecting privacy and to protecting any information that our clients provide. Your privacy and security are both our highest priorities and we make every effort to ensure that all the information provided by you is protected.

We follow and comply with best practices and regulation in the sphere of privacy including but not limited to General Data Protection Regulation (GDPR).

1. Who We Are

1. The Personal Information is collected, controlled and processed by the following entities:
1. Ikhentinc.exchange. Contact e-mail: help@ikhentinc.exchange Contact phone: +234 702 661 4198

2. Personal Information Which We May Collect

1. While providing our Services, we may collect Personal Information, namely:
1. Any information necessary for registration. In order to access the full functionality of the Service, you need  to register. When you go through the registration process, you shall provide an e-mail address, phone number and create a password. You may also choose to log in via supported third-party service provider (for example, Twitter, Facebook, Instagram and Google+). You can also choose to add a Google Authenticator account to be used for 2FA verification for improved security;
2. Transaction Information. For all personal user accounts, we collect transaction information including transaction history.
3. An information, which we may collect through automated means. Through your use of our Services, including exchange tools, we also monitor and collect tracking information related to usage such as access date & time, device identification, operating system, browser type and IP address. This information may be directly obtained by us or through third party services.
4. Sometimes you decide or we require (for example in case of KYC procedure) to share with us some other Personal Information, we may collect it as well.
2. We do not collect any information that may identify you without your permission. However, we use Google Analytics on Our Technology Platform. If You want to know more about Google Analytics and its “do not track” policy, please visit google analytics
                        
3. Children
1. We do not intend to solicit or collect Personal Information from anyone under the age of 18. If you are under 18, do not enter any personal information on our Website and Services platform.

4. Our Use of Your Information
1. We and our representatives store and use Personal Information only for providing and improving the Website and the Services. In particular, we use user's Personal Information for the following purposes:
1. To maintain our Website and the Services. We use Personal Information to ensure that our services function properly;
2. To improve our Website and Services. Personal Information helps our systems ensure that our interface is accessible for Users across all platforms;
3. To comply with our legal obligations. In many jurisdictions we are obliged to collect certain information about our users to be authorized to act (Know Your Client and Anti-Money Laundering regulations). We obliged to obtain Personal Information in order to be able to aid during criminal investigations;
 4. To protect your assets we may use information to identify you and the assets belonging to you in order to secure access to your accounts and to prevent the fraud. Information about your transaction allows us to monitor suspicious activity and protect you from fraud and scam activity;
5. To send periodic e-mails we may use the information we collect from you when you register or use certain other site features. This might be for security reasons, to ask your opinion about the website, or it may be to keep you updated on any changes to the services provided on the Website and our Services. We may also send periodic emails with news and Services updates, or use this information to follow up with you following live chat or email;
6. To resolve disputes and enforce our agreements to the extent necessary and sufficient for protecting your interests or interests of other users.
5. Data Retention
1. We will retain your information only for as long as is necessary for the purposes set out in this policy. We will retain your information just to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.
2. The User may request to remove the personal data. Should that be a case, user requests could be fulfilled by the erasure of personal data to the extent permissible by the applicable law and regulations. In certain cases we are obliged to store your information to be legally compliant.
6. Cookie Policy
1. Cookies are files with small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from the Website and stored on your computer's hard drive.
2. We use cookies to recognize your browser or device, learn more about your interests, and provide you with essential features and services and for additional purposes, including:
1. Recognizing you when you sign-in to use our services;
2. Keeping track of your specified wallet addresses for improving user experience;
3. Keeping track of transaction initiating process;
4. Preventing fraudulent activity;
5. Improving security;
 6. Reporting. This allows us to measure and analyze the performance of our services.
3. You can manage browser cookies through your browser settings. The "Help" feature on most browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, how to disable cookies, and when cookies will expire. If you disable all cookies on your browser, neither we nor third parties will transfer cookies to your browser. If you do this, however, you may have to manually adjust some preferences every time you visit a Website and some features and services may not work.
7. Security Measures
1. iKHENT Exchange  aim to protect your information as much as we aim to protect our own information and network. We will not permit any third parties to contact you directly on an unsolicited basis in relation to their own products or services. We do not sell, trade, or rent your personal identification information to others. You should never disclose your account password to unauthorized parties.
2. We use certain security measures to help keep your personal information safe, but we cannot guarantee that these measures will stop any users try to get around the privacy or security settings on the Website and Services platform through unforeseen and/or illegal activity. That is why we make no warranty, express, implied or otherwise, that we will prevent such access.
8. Your Rights to Your Information
1. In accordance with effective regulations You have a significant number of rights related to your Personal Information, such as e.g.:
1. The right to access and amend the personal information we hold about you. You have a right to request a copy of the personal information we hold about you. Also you have the right to correct or update your Personal Information at any time.
2. The right to delete the Personal Information. You may request to remove the personal data if you do not want to use our Services or want your data to be erased, you can request us to remove your account permanently. Should that be a case, your requests could be fulfilled by the erasure of personal data to the extent permissible by the applicable law and regulations. In certain cases we are obliged to store your information to be legally compliant.
3. The right to restrict processing. You have the right to ask us to restrict the processing of your Personal Information. When processing is restricted, we can still store your information, but will not use it further.
4. The right to object to the processing of your data. You have a right to object to our use of your Personal Information for our own purpose at any time. In other words you can withdraw your consent to processing your Personal Information by us. In case you want to exercise this right, you may contact us. This right also includes the right to object to processing your Personal Information for marketing and advertising purposes. You can do it by clicking on the special button (an unsubscribe button) or by contact us and opting out from receiving all e-mails.
5. The right to data portability. You have the right to receive Personal Information you provide to us, in a "commonly used machine-readable format". This allows you to obtain and reuse your information for your own purposes across different services.
6. The right to lodge a complaint with a Supervisory Authority.
2. In case you want to exercise your rights, please contact us.
3. There are exceptions to these rights, however. For example, access to Personal Information may be denied in some circumstances if making the information available would reveal Personal Information about another person or if we are legally prevented from disclosing such information. In addition, where some of the data is necessary to maintain our Website and Services or where that is a legal requirement, we may retain such data for the period it is needed or required even if you withdraw your consent or cancel your account. Such information will not be considered as subject to erasure.
9. Law and Harm
1. Notwithstanding anything to the contrary in this Policy, we may preserve or disclose your information if we believe that it is reasonably necessary to comply with a law, regulation, legal process, or governmental request; to protect the safety of any person; to address fraud, security or technical issues; or to protect our or our users’ rights or property. However, nothing in this Policy is intended to limit any legal defences or objections that you may have to a government’s request for disclosure of your information.
10. Changes to Policy
1. This Policy may be amended at our full discretion without prior notice. We encourage you to review it periodically in order to be aware of the changes we may have made. Reading it carefully and checking for any modifications is your responsibility. By using the Services, you accept and agree to the Policy and the Terms of Use.
11. Contact Us
1. If you have any questions about this Policy, please contact us via help@ikhentinc.exchange

                    </pre>


            </div>

        </div>
    </div> <!-- / .row -->
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
                        <a href="{{route('our-policy')}}" class="text-reset">
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

