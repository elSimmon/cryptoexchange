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

<div class="pt-8 pt-md-11 pb-8 pb-md-14">
    <p class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">

                <!-- Heading -->
                <h1 class="display-4 mb-2">
                    Terms of Service
                </h1>

                <!-- Text -->
                <p class="fs-lg text-gray-700 mb-md-0">
                    Last Updated: October, 2021                </p>

            </div>

        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12">

                <!-- Divider -->
                <hr class="my-6 my-md-8">

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-12">

                <!-- Text -->
                <p class="fs-lg text-gray-800 mb-6 mb-md-8">
                    These Terms of Use and any terms incorporated herein (hereinafter, the “Terms”) apply to your (“user”, “you“) use of the Services, including https://ikhentinc.exchange/ (“Website“), the technology and the platform integrated therein and any related applications (including without limitation the mobile one) associated therewith, which are operated and maintained by iKHENT Exchange (A Subsidiary of iKHENT INC). We provide you with the possibility to use our Services as defined above on the following terms and conditions.
                </p>

                <!-- Heading -->
                <h3 class="mb-5">
                    1. Enforcement & Amendments
                </h3>

                <!-- Text -->
                <p class="text-gray-800">
                <ol>
                    <li>These Terms of Use constitutes a binding agreement between iKHENT Exchange and the user as soon as the user visits the Website and uses Services. By doing so, the user confirms that he has read and accepted these Terms of Use in their entirety before finishing the registration procedure.</li>
                    <li>The user accepts that Terms of Use may be updated by iKHENT Exchange from time to time. If the user does not read and accept the Terms of Use in its entirety he should not use or continue using the Services. </li>
                    <li>We reserve the right to alter, amend or modify these Terms from time to time, in our sole discretion. We will provide you with notice of such changes by sending an e-mail, providing notice on the homepage of the Website and/or by posting the amended Terms via our Website and updating the "Last Updated" date at the top of these Terms. The amended Terms will be deemed effective immediately upon posting on Website.</li>
                </ol>
                </p>

                <!-- Heading -->
                <h3 class="mb-5">
                    2. Provided Services
                </h3>

                <!-- Text -->
                <p class="text-gray-800">
                <ol>
                    <li>Our Services provide you with a possibility to Exchange Bitcoin and gift cards to Naira and also a platform to settle your utility bills.  </li>
                    <li>For the purposes hereof "Exchange" shall mean an exchange of gift cards and bitcoin at the terms and conditions set forth by exchanging parties, which is executed via the Third-party service in respective block-chain network. When you exchange Bitcoin you acknowledge and agree that the Exchange will be processed through the third-party exchange service with additional fees applicable to such Exchange. You acknowledge and agree that the exchange rates information made available via the Services are estimation only and may differ from prevailing rates available via other sources outside of our Services. </li>
                    <li>"Crypto Assets" herein shall be deemed as type of assets which can only and exclusively be transmitted by means of block-chain technology, including but not limited to digital coins and digital tokens and any other type of digital mediums of exchange, such as Bitcoin, Ethereum, Ripple, etc, to the full and absolute exempt of the securities of any kind. </li>
                    <li>To be able to use all possibilities and functionality of our Services you shall go through the registration process and create an iKHENT Exchange Account. "iKHENT Exchange Account" is a user account accessible after the registration process and via the Services where the user may request to make a Bitcoin exchange and perform utility bills settlement. When you create an iKHENT Exchange Account you oblige to:
                        <ul>
                            <li>Change the password, which is generated by our Services automatically, for a strong password that you do not use for any other websites, online or off-line services;</li>
                            <li>Provide accurate e-mail, which actually belongs to you and shall be, therefore, verified. The access to the services provided by the iKHENT Exchange without verification of the e-mail or phone number is not allowed; </li>
                            <li>Maintain the security of your Ikhentinc.exchange Account and promptly notify us if you discover any suspicious activity related to your account; </li>
                            <li>Agree to pass through AML/KYC procedures, which may be applied to you according to our internal AML/KYC policies. As a part of such procedures, Ikhentinc.exchange reserves the right to request additional information and documents, which are aimed without limitation to identify our user and to prove the source of the funds; </li>
                            <li>Take responsibility for all activities that occur under your Ikhentinc.exchange Account.</li>
                        </ul>
                    </li>
                    <li>In order to perform the Exchange via our Services, our system will automatically generate the particular address, which contains information about the User; (ii) the crypto asset that User wants to exchange and the crypto asset that User wants to receive (jointly - "crypto pair"); and (iii) the recipient address provided by the user (the address where exchanged Bitcoin will be deposited). All addresses are reusable: those addresses can be used to perform an unlimited amount of transactions with the same parameters. If crypto pair and/or recipient address change, a new address will be generated by our system.</li>
                    <li>YOU INDEMNIFY AND HOLD IKHENTINC.EXCHANGE HARMLESS AGAINST ANY DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH YOUR USE OF OUR SERVICES, INCLUDING BUT NOT LIMITED TO THOSE ARISING FROM YOUR PERSONAL ERROR AND MISBEHAVIOR SUCH AS INCORRECT USE OF REUSABLE ADDRESS, INCORRECTLY CONSTRUCTED TRANSACTIONS ETC</li>
                    <li>Ikhentinc.exchange does not provide custodial services, which means, we do not store your Bitcoin on deposits and balances. In limited cases such as e.g. necessity to carry out AML/KYC procedure, your Exchange may be delayed. YOU HEREBY UNDERSTAND AND ACKNOWLEDGE, THAT ANY DELAYS ARE POSSIBLE; YOU INDEMNIFY AND HOLD US HARMLESS AGAINST ANY CLAIMS, DEMANDS AND DAMAGES, WHETHER DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE EXCHANGE DELAY, WHETHER ORIGINATED FROM OUR FAULT OR NOT.</li>
                </ol>
                </p>

                <!-- Heading -->
                <h3 class="mb-5">
                    3. AML and KYC procedure
                </h3>

                <!-- Text -->
                <p class="text-gray-800">
                <ol>
                    <li>In furtherance of the clause 2.4.4 Ikhentinc.exchange reserves the right to apply the AML/KYC procedure to particular users, addresses and particular transactions of crypto assets. </li>
                    <li>The up-to-date information on the AML/KYC procedures can always be found at AML/KYC. </li>

                </ol>
                </p>

                <!-- Heading -->
                <h3 class="mb-5">
                    4. Eligibility
                </h3>

                <p>Prior to your use of the Services and on an ongoing basis you represent, warrant, covenant and agree that: </p>

                <!-- Text -->
                <p class="text-gray-800">
                <ol>
                    <li>you use our Services at your sole option, discretion and risk; </li>
                    <li>you are solely responsible for any applicable taxes which may be payable while using our Services; </li>
                    <li>you are at least 18 years old or of other legal age, according to your relevant jurisdiction;  </li>
                    <li>you agree to pay the fees for Exchanges completed via Services as defined by iKHENT Exchange, which We may change from time to time;  </li>
                    <li>there are risks, associated with Internet-based system, such as the failure of hardware, software, and Internet connections and with the Blockchain Protocol, such as any malfunction, unintended function, unexpected functioning of or attack on the Blockchain protocol; </li>
                    <li>you guarantee that your Bitcoin belong to you and they are not sold, encumbered, not in contention, or under seizure, and that neither exist any rights of third parties to your crypto assets; </li>
                    <li>You shall provide correct information for constructing Exchange (e.g. paying and pay out wallet address). Such wallet addresses shall not be associated with terrorism, fraudulent, scam or any type of illegal activity. </li>

                </ol>
                </p>

                <p>You further represent, agree and warrant, that you will not violate any law, contract, thirdparty right or commit a tort by accessing or using the Services, and that you are solely responsible for your actions and/or inactions while using our Services. Without prejudice to the foregoing, you represent, agree and warrant that YOU WILL NOT:  </p>
                <p class="text-gray-800">
                    <ol>
                        <li>Use our Services or will immediately cease using those if any applicable law in your country prohibits or will prohibit you at any time from doing so; </li>
                        <li>Use our Services to participate in fraudulent, scam or any type of illegal activity; </li>
                        <li>Exchange via our Services or attempt to pay-in crypto assets, which are obtained from illegal gambling activities; fraud; money-laundering; or terrorist activities; or any other illegal activities. With our Services the user can only use crypto assets, which are obtained from legal sources; </li>
                        <li>Provide false, inaccurate, or misleading information; </li>
                        <li>Attempt to modify, decompile, reverse-engineer or disassemble our software in any way; </li>
                        <li>Use any robot, spider, crawler, scraper or other automated means or interface not provided by us to access the Services or to extract data;</li>
                        <li>Attempt to circumvent any content filtering techniques we employ, or attempt to access any service or area of our Services that you are not authorized to access; </li>
                        <li>Develop any third-party applications that interact with our Services without our prior written consent; AND</li>
                        <li>Encourage or induce any third party to engage in any of the activities prohibited under this Section.</li>
                    </ol>
                </p>

                <p>YOU INDEMNIFY AND HOLD US HARMLESS AGAINST ANY CLAIMS, DEMANDS AND DAMAGES, WHETHER DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA OR LOSS OF ASSETS, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ORIGINATED FROM OR IN ANY WAY CONNECTED WITH INVALIDITY OR BREACH OF ANY OF THE PROVISIONS OF THIS SECTION AND THE ENTIRE TERMS.</p>

                <!-- Heading -->
                <h3 class="mb-5">
                    5. Third-Party Content and Services
                </h3>
                <p class="text-gray-800">
                <ol>
                    <li>For the purposes hereof "Third-Party Content" shall mean the content provided by third parties, including without limitation links to web pages of such parties, which may be represented on the Website and other Services. At the same time "Third-party service" refers to any platform or network in which Bitcoin belong to you or where you are the beneficial owner of crypto assets; and this platform is maintained by a third party outside of the Services; including, but not limited to thirdparty accounts</li><li>No control over third-party services. You may be charged fees by the third-party service provider. iKHENT Exchange is not responsible for any third-party services' fees. You are solely responsible for your use of the third-party service, and you agree to comply with all terms and conditions applicable to any third-party service.</li><li>The exchange rates discrepancy is at any time possible due to the Third-Party algorithms. YOU INDEMNIFY AND HOLD iKHENT Exchange HARMLESS AGAINST ANY DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE AFORESAID EXCHANGE RATES DISCREPANCY.</li><li>While using our Services, you may view Third-Party Content. We do not control, endorse or adopt (unless otherwise expressly stated by Us) any Third-Party Content and shall have no responsibility for Third-Party Content, including without limitation material that may be misleading, incomplete, erroneous, offensive, indecent or otherwise objectionable. In addition, your business dealings or correspondence with such third parties are solely between you and the third parties. We are not responsible or liable for any loss or damage of any sort incurred as the result of any such dealings, and you understand that your use of Third-Party Content, and your interactions with third parties, is at your own risk.</li>
                    </ol></p>

                    <!-- Heading -->
                    <h3 class="mb-5">
                        6. Intellectual Property
                    </h3>
                    <p class="text-gray-800">
                        <ol>
                            <li>All our intellectual property assets ("IP") including but not limited to all copyrights, trademarks, patents, service marks, trade names, software code, icons, logos, characters, layouts, trade secrets, buttons, colour scheme and graphics are protected by local and international intellectual property laws and treaties</li><li>We hereby grant you a limited, nonexclusive and non-sub licensable license to access and use our IP for your personal use only.</li><li>In any case you may not alter, modify, reproduce, distribute or commercially exploit any materials, including text, graphics, video, audio, software code, user interface design or logos</li><li>The license granted under this Section will automatically terminate if We suspend or terminate your access to the Services </li><li>In case you upload or share any feedback, suggestion, idea or other information or material ("Content") with us you automatically grant us a worldwide license to use your content. It becomes part of the public domain as long as it remains on our Website and Services. It can be used for marketing or any other purposes at our sole discretion.</li>

                        </ol></p>

                        <!-- Heading -->
                        <h3 class="mb-5">
                            7. Communications
                        </h3>
                        <p class="text-gray-800">
                        <ol>
                            <li>You agree and consent to receive electronically all Communications that iKHENT Exchange may be willing to communicate to you in connection with your iKHENT Exchange Account and/or use of our Services. For the purposes hereof “Communications” shall mean all and any communication, agreement, document, receipt, notice and disclosure, which may be from time to time addressed to user by iKHENT Exchange. You may withdraw your consent to receive electronic Communications by sending a withdrawal notice to support. If this is a case you waive your right to plead ignorance. If you decline or withdraw consent to receive electronic Communications, iKHENT Exchange may suspend or terminate your use of the Services.</li>

                        </ol></p>

                        <!-- Heading -->
                        <h3 class="mb-5">
                            8. Limitation of Liabilities
                        </h3>

                        <p class="text-gray-800">
                        <ol>
                            <li>Except as expressly provided to the contrary in a writing by us, our Services are provided on an "As is" and "As available" basis. WE EXPRESSLY DISCLAIM, AND YOU WAIVE, ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, WITHOUT LIMITATION, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT AS TO OUR SERVICES, INCLUDING THE INFORMATION, CONTENT AND MATERIALS CONTAINED THEREIN. </li><li>Except as otherwise required by law, IN NO EVENT SHALL iKHENT Exchange, OUR DIRECTORS, OFFICERS, MEMBERS, EMPLOYEES OR AGENTS BE LIABLE FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OF OR INABILITY TO USE OUR SERVICES, INCLUDING WITHOUT LIMITATION ANY DAMAGES CAUSED BY OR RESULTING FROM RELIANCE BY ANY USER ON ANY INFORMATION OBTAINED FROM iKHENT Exchange, OR THAT RESULT FROM MISTAKES, OMISSIONS, INTERRUPTIONS, DELETION OF FILES OR EMAIL, ERRORS, DEFECTS, VIRUSES, DELAYS IN OPERATION OR TRANSMISSION OR ANY FAILURE OF PERFORMANCE, WHETHER OR NOT RESULTING FROM A FORCE MAJEURE EVENT, COMMUNICATIONS FAILURE, THEFT, DESTRUCTION OR UNAUTHORIZED ACCESS TO iKHENT Exchange’s RECORDS, PROGRAMS OR SERVICES.</li><li>. Exchanges via our Services cannot be canceled by iKHENT Exchange. Therefore, check the details of your exchange details before making such exchange. iKHENT Exchange is not responsible for your Bitcoin once they have been sent outside of the Services. Moreover, iKHENT Exchange doesn’t guarantee the uptime of the exchange.</li><li>To the maximum extent permitted by applicable law, IN NO EVENT SHALL THE AGGREGATE LIABILITY OF iKHENT Exchange (INCLUDING OUR DIRECTORS, OFFICERS, MEMBERS, EMPLOYEES AND AGENTS), WHETHER IN CONTRACT, WARRANTY, TORT (INCLUDING NEGLIGENCE, WHETHER ACTIVE, PASSIVE OR IMPUTED), PRODUCT LIABILITY, STRICT LIABILITY OR OTHER THEORY, ARISING OUT OF OR RELATING TO THE USE OF, OR INABILITY TO USE, iKHENT EXCHANGE OR TO THESE TERMS EXCEED THE FEES PAID BY YOU TO iKHENT EXCHANGE WITHIN 3 MONTHS IMMEDIATELY PRECEDING THE DATE OF ANY CLAIM GIVING RISE TO SUCH LIABILITY.  </li><li>We strive to protect our users from fraudulent and scam activities in the sphere of crypto assets. It is possible, that some Bitcoin are purposed for unlawful seizure of the property, or are construed as a fraud, scam or any other activity, recognized by the laws as illegal and/or noncompliant with legal requirements. iKHENT Exchange cooperates with law enforcements agencies and other competent authorities in order to determine and disclose such crypto assets. We reserve the right to prohibit and discontinue any Exchanges via our Services with such crypto asset at our sole discretion, without any prior notice to you and without publication of the reason for such decision, whenever this comes to our knowledge. YOU INDEMNIFY AND HOLD iKHENT EXCHANGE HARMLESS AGAINST ANY CLAIMS, DEMANDS AND DAMAGES, WHETHER DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ORIGINATED FROM OR IN ANY WAY CONNECTED WITH PROHIBITION AND DISCONTINUATION OF EXCHANGES IN OUR WEBSITE WITH ANY CRYPTO ASSET.</li>

                        </ol></p>

                        <!-- Heading -->
                        <h3 class="mb-5">
                            9. No Offer of Securities
                        </h3>
                        <p class="text-gray-800">
                        <ol>
                            <li>IKHENT Exchange takes all possible measures to integrate and exchange those digital coins and digital tokens and other types of digital mediums of exchange only that cannot be classified as “security“ by SEC or other competent national authorities. </li><li>The responsibility for the fact that the crypto asset cannot be treated as “security” lies with the owner of digital token and/or digital coin. IKHENT Exchange reserves the right at its sole discretion to prohibit and discontinue any exchanges (as well as any other type of transaction) with the token or the coin if there is any risk or speculations that such token and/or coin can be treated as “security”. </li><li>We follow the best practices to decide whether Bitcoin are security or not. However, for the avoidance of any doubt the provisions of this clause shall not constitute or deemed to be construed to constitute any warranty and/or investment, financial, legal or any other professional advice, that any crypto asset that any crypto asset available through our Services is not a security.</li>

                        </ol></p>

                        <!-- Heading -->
                        <h3 class="mb-5">
                            10. Termination of the Terms
                        </h3>
                        <p class="text-gray-800">
                        <ol>
                            <li>We reserve the right to terminate these Terms and delete your IKHENT Exchange Account and registration (including your Phone numbers, username and password) in the following cases: </li><li>If for any reason We decide to discontinue to provide the Service, by providing at least a 3 (three) calendar days’ notice (which shall be provided by e-mail); </li><li>If We believe that you have breached any of the terms of these Terms, immediately without notice; </li><li>If we decide to terminate our Services, immediately without notice</li>

                        </ol></p>


                        <!-- Heading -->
                        <h3 class="mb-5">
                            11. Applicable Law; Arbitration
                        </h3>
                        <p class="text-gray-800">
                        <ol>
                            <li>You and iKHENT EXCHANGE agree to arbitrate any dispute arising from these Terms or your use of the Services, except for disputes in which either party seeks equitable and other relief for the alleged unlawful use of copyrights, trademarks, trade names, logos, trade secrets or patents.   </li><li>You and iKHENT EXCHANGE agree to notify each other in writing of any dispute within thirty (30) days of when it arises. Notice to iKHENT EXCHANGE shall be sent to help@ikhentinc.exchange </li><li>. Any dispute, controversy, difference or claim arising out of or relating to the Terms, including the existence, validity, interpretation, performance, breach or termination thereof or any dispute regarding non-contractual obligations arising out of or relating to it shall be referred to and finally resolved by arbitration administered by the Nigeria Arbitration Centre under the Nigeria Arbitration Centre Administered Arbitration Rules in force when the Notice of Arbitration is submitted.  </li><li>The law of this arbitration clause shall be Nigerian law. </li><li>The seat of arbitration shall be in Nigeria. </li><li>The number of arbitrators shall be one. The arbitration proceedings shall be conducted in English language. </li><li>Other than class procedures and remedies discussed below, the arbitrator has the authority to grant any remedy that would otherwise be available in court. Any dispute between the parties will be governed by these Terms and the laws of Nigeria, without giving effect to any conflict of laws principles that may provide for the application of the law of another jurisdiction. </li><li>Whether the dispute is heard in arbitration or in court, you will not commence against iKHENT EXCHANGE a class action, class arbitration or representative action or proceeding.</li>

                        </ol></p>

                        <!-- Heading -->
                        <h3 class="mb-5">
                            12. Miscellaneous
                        </h3>
                        <p class="text-gray-800">
                        <ol>
                            <li>These Terms contain the entire agreement, and supersede all prior and contemporaneous understandings between the parties regarding the Services.  </li><li>In the event of any conflict between these Terms and any other agreement you may have with IKHENT EXCHANGE, the terms of that other agreement will prevail only if these Terms are specifically identified and declared to be overridden by such other agreement. </li><li>Our failure or delay in exercising any right, power or privilege under these Terms shall not operate as a waiver thereof.</li><li>The invalidity or unenforceability of any of these Terms shall not affect the validity or enforceability of any other of these Terms, all of which shall remain in full force and effect. </li><li>You may not assign or transfer any of your rights or obligations under these Terms without prior written consent from IKHENT EXCHANGE, including by operation of law or in connection with any change of control. IKHENT EXCHANGE may assign or transfer any or all of its rights under these Terms, in whole or in part, without obtaining your consent or approval.</li>

                        </ol></p>
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

