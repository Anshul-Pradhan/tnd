<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">
        <div class="container">
            <div class="nav-bar">
                <div class="nav-logo">
                    <img src="assets/logo (1).svg" alt="" class="icon">
                </div>
                <div class="nav-link">
                    <ul>
                        <li><a href="javascript:void(0)" id="first">Link</a></li>
                        <li><a href="javascript:void(0)" id="second">Link</a></li>
                        <li><a href="javascript:void(0)"id="third" >Link</a></li>
                        <li><a href="javascript:void(0)" id="fourth">Link</a></li>
                        <li><a href="javascript:void(0)" id="fifth">Link</a></li>
                        <li><a href="javascript:void(0)" id="sixth">Link</a></li>
                    </ul>
                </div>
                <div class="nav-cta">
                    <a href="#open-link" class="custom-button">Contact Us</a>
                </div>
            </div>
        </div>
    </header>

    <main class="main" data-scroll-container>

        <!-- Banner Section -->
        <section class="banner-section" id="banner" data-scroll-section>
            <div class="ban-wrapper">
                <div class="ban-img">
                    <div class="ban-img-con">
                        <img src="assets/ban-img.jpeg" alt="" class="img">
                    </div>
                </div>
                <div class="ban-txt">
                    <div class="container">
                        <div class="ban-txt-con" data-scroll="" data-scroll-position="top" data-scroll-speed="2">
                            <div class="head">
                                <h1>1, 2 & 3 BHK Apartments Starting At <span>₹ 1.15 Cr.</span> Onwards*</h1>
                            </div>
                            <div class="sub-head">
                                <p>Mahindra Lifespaces<br> Kandivali, East</p>
                            </div>
                            <div class="cta">
                                <a href="#open-link" class="custom-button">Enquire Now</a>
                                <a href="#open-link" class="custom-button"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                                    <path d="M 25 2 C 12.309534 2 2 12.309534 2 25 C 2 29.079097 3.1186875 32.88588 4.984375 36.208984 L 2.0371094 46.730469 A 1.0001 1.0001 0 0 0 3.2402344 47.970703 L 14.210938 45.251953 C 17.434629 46.972929 21.092591 48 25 48 C 37.690466 48 48 37.690466 48 25 C 48 12.309534 37.690466 2 25 2 z M 25 4 C 36.609534 4 46 13.390466 46 25 C 46 36.609534 36.609534 46 25 46 C 21.278025 46 17.792121 45.029635 14.761719 43.333984 A 1.0001 1.0001 0 0 0 14.033203 43.236328 L 4.4257812 45.617188 L 7.0019531 36.425781 A 1.0001 1.0001 0 0 0 6.9023438 35.646484 C 5.0606869 32.523592 4 28.890107 4 25 C 4 13.390466 13.390466 4 25 4 z M 16.642578 13 C 16.001539 13 15.086045 13.23849 14.333984 14.048828 C 13.882268 14.535548 12 16.369511 12 19.59375 C 12 22.955271 14.331391 25.855848 14.613281 26.228516 L 14.615234 26.228516 L 14.615234 26.230469 C 14.588494 26.195329 14.973031 26.752191 15.486328 27.419922 C 15.999626 28.087653 16.717405 28.96464 17.619141 29.914062 C 19.422612 31.812909 21.958282 34.007419 25.105469 35.349609 C 26.554789 35.966779 27.698179 36.339417 28.564453 36.611328 C 30.169845 37.115426 31.632073 37.038799 32.730469 36.876953 C 33.55263 36.755876 34.456878 36.361114 35.351562 35.794922 C 36.246248 35.22873 37.12309 34.524722 37.509766 33.455078 C 37.786772 32.688244 37.927591 31.979598 37.978516 31.396484 C 38.003976 31.104927 38.007211 30.847602 37.988281 30.609375 C 37.969311 30.371148 37.989581 30.188664 37.767578 29.824219 C 37.302009 29.059804 36.774753 29.039853 36.224609 28.767578 C 35.918939 28.616297 35.048661 28.191329 34.175781 27.775391 C 33.303883 27.35992 32.54892 26.991953 32.083984 26.826172 C 31.790239 26.720488 31.431556 26.568352 30.914062 26.626953 C 30.396569 26.685553 29.88546 27.058933 29.587891 27.5 C 29.305837 27.918069 28.170387 29.258349 27.824219 29.652344 C 27.819619 29.649544 27.849659 29.663383 27.712891 29.595703 C 27.284761 29.383815 26.761157 29.203652 25.986328 28.794922 C 25.2115 28.386192 24.242255 27.782635 23.181641 26.847656 L 23.181641 26.845703 C 21.603029 25.455949 20.497272 23.711106 20.148438 23.125 C 20.171937 23.09704 20.145643 23.130901 20.195312 23.082031 L 20.197266 23.080078 C 20.553781 22.728924 20.869739 22.309521 21.136719 22.001953 C 21.515257 21.565866 21.68231 21.181437 21.863281 20.822266 C 22.223954 20.10644 22.02313 19.318742 21.814453 18.904297 L 21.814453 18.902344 C 21.828863 18.931014 21.701572 18.650157 21.564453 18.326172 C 21.426943 18.001263 21.251663 17.580039 21.064453 17.130859 C 20.690033 16.232501 20.272027 15.224912 20.023438 14.634766 L 20.023438 14.632812 C 19.730591 13.937684 19.334395 13.436908 18.816406 13.195312 C 18.298417 12.953717 17.840778 13.022402 17.822266 13.021484 L 17.820312 13.021484 C 17.450668 13.004432 17.045038 13 16.642578 13 z M 16.642578 15 C 17.028118 15 17.408214 15.004701 17.726562 15.019531 C 18.054056 15.035851 18.033687 15.037192 17.970703 15.007812 C 17.906713 14.977972 17.993533 14.968282 18.179688 15.410156 C 18.423098 15.98801 18.84317 16.999249 19.21875 17.900391 C 19.40654 18.350961 19.582292 18.773816 19.722656 19.105469 C 19.863021 19.437122 19.939077 19.622295 20.027344 19.798828 L 20.027344 19.800781 L 20.029297 19.802734 C 20.115837 19.973483 20.108185 19.864164 20.078125 19.923828 C 19.867096 20.342656 19.838461 20.445493 19.625 20.691406 C 19.29998 21.065838 18.968453 21.483404 18.792969 21.65625 C 18.639439 21.80707 18.36242 22.042032 18.189453 22.501953 C 18.016221 22.962578 18.097073 23.59457 18.375 24.066406 C 18.745032 24.6946 19.964406 26.679307 21.859375 28.347656 C 23.05276 29.399678 24.164563 30.095933 25.052734 30.564453 C 25.940906 31.032973 26.664301 31.306607 26.826172 31.386719 C 27.210549 31.576953 27.630655 31.72467 28.119141 31.666016 C 28.607627 31.607366 29.02878 31.310979 29.296875 31.007812 L 29.298828 31.005859 C 29.655629 30.601347 30.715848 29.390728 31.224609 28.644531 C 31.246169 28.652131 31.239109 28.646231 31.408203 28.707031 L 31.408203 28.708984 L 31.410156 28.708984 C 31.487356 28.736474 32.454286 29.169267 33.316406 29.580078 C 34.178526 29.990889 35.053561 30.417875 35.337891 30.558594 C 35.748225 30.761674 35.942113 30.893881 35.992188 30.894531 C 35.995572 30.982516 35.998992 31.07786 35.986328 31.222656 C 35.951258 31.624292 35.8439 32.180225 35.628906 32.775391 C 35.523582 33.066746 34.975018 33.667661 34.283203 34.105469 C 33.591388 34.543277 32.749338 34.852514 32.4375 34.898438 C 31.499896 35.036591 30.386672 35.087027 29.164062 34.703125 C 28.316336 34.437036 27.259305 34.092596 25.890625 33.509766 C 23.114812 32.325956 20.755591 30.311513 19.070312 28.537109 C 18.227674 27.649908 17.552562 26.824019 17.072266 26.199219 C 16.592866 25.575584 16.383528 25.251054 16.208984 25.021484 L 16.207031 25.019531 C 15.897202 24.609805 14 21.970851 14 19.59375 C 14 17.077989 15.168497 16.091436 15.800781 15.410156 C 16.132721 15.052495 16.495617 15 16.642578 15 z"></path>
                                    </svg> For Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section Ends -->

        <!-- Overview Section -->
        <section class="overview-section padt-70 padb-70" id="overview" data-scroll-section>
            <div class="container">
                <div class="os-wrapper" data-scroll="" data-scroll-class data-offset="5%">
                    <div class="head center">
                        <h2>Overview</h2>
                    </div>
                    <div class="para center">
                        <p>Mahindra New Launch in Kandivali ensures a coveted lifestyle and offers a convenient living. It offers facilities such as Gymnasium, Power Backup. For families with kids, there is Children's Play Area, Kid's Pool, nearby apart from Swimming Pool. Sports enthusiasts can also make the most of Skating Rink. Residents can also enjoy Barbecue Area provisions in the project. There is 24x7 Security. It is a Gated Community. There is provision for Closed Car Parking.</p>
                    </div>
                    <div class="cta center">
                        <a href="#open-link" class="custom-button">Apply Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Overview Section Ends -->
        <!-- Pricing Section -->
        <section class="pricing pad-70" id="pricing" data-scroll-section>
            <div class="container">
                <div class="pricing-wrapper">
                    <div class="pricing-grid" data-scroll="" data-scroll-class data-offset="5%">
                        <div class="item" data-scroll="" data-scroll-position="" data-scroll-speed="2">
                            <div class="txt">
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Carpet Area</p>
                                    </div>
                                    <div class="para center">
                                        <h4>400 - 450 Sq.Ft</h4>
                                    </div>
                                </div>
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Price</p>
                                    </div>
                                    <div class="para center">
                                        <h4>1.15 - 1.20 Cr Onwards*</h4>
                                    </div>
                                </div>
                                <div class="txt-item cta center">
                                    <a href="#open-link" class="custom-button">Apply Now</a>
                                </div>
                            </div>
                            <div class="pg-img">
                                <img src="assets/1bhk.webp" alt="" class="img ab">
                            </div>
                            <div class="head center">
                                <h3>1 BHK</h3>
                            </div>
                        </div>
                        <div class="item" data-scroll="" data-scroll-position="" data-scroll-speed="3">
                            <div class="txt">
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Carpet Area</p>
                                    </div>
                                    <div class="para center">
                                        <h4>600 - 650 Sq.Ft.</h4>
                                    </div>
                                </div>
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Price</p>
                                    </div>
                                    <div class="para center">
                                        <h4>1.70 - 1.85 Cr* Onwards*</h4>
                                    </div>
                                </div>
                                <div class="txt-item cta center">
                                    <a href="#open-link" class="custom-button">Apply Now</a>
                                </div>
                            </div>
                            <div class="pg-img">
                                <img src="assets/2bhk.webp" alt="" class="img ab">
                            </div>
                            <div class="head center">
                                <h3>2 BHK</h3>
                            </div>
                        </div>
                        <div class="item" data-scroll="" data-scroll-position="" data-scroll-speed="4">
                            <div class="txt">
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Carpet Area</p>
                                    </div>
                                    <div class="para center">
                                        <h4>950 - 1050 Sq.Ft.</h4>
                                    </div>
                                </div>
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Price</p>
                                    </div>
                                    <div class="para center">
                                        <h4>2.89 - 2.99 Cr Onwards*</h4>
                                    </div>
                                </div>
                                <div class="txt-item cta center">
                                    <a href="#open-link" class="custom-button">Apply Now</a>
                                </div>
                            </div>
                            <div class="pg-img ">
                                <img src="assets/2bhk.webp" alt="" class="img ab">
                            </div>
                            <div class="head center">
                                <h3>3 BHK</h3>
                            </div>
                        </div>
                        <div class="item" data-scroll="" data-scroll-position="" data-scroll-speed="5">
                            <div class="txt">
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Carpet Area</p>
                                    </div>
                                    <div class="para center">
                                        <h4>1618 Sqft Sq.Ft.</h4>
                                    </div>
                                </div>
                                <div class="txt-item">
                                    <div class="head center">
                                        <p>Price</p>
                                    </div>
                                    <div class="para center">
                                        <h4>4.58 Cr* Onwards</h4>
                                    </div>
                                </div>
                                <div class="txt-item cta center">
                                    <a href="#open-link" class="custom-button">Apply Now</a>
                                </div>
                            </div>
                            <div class="pg-img">
                                <img src="assets/2bhk.webp" alt="" class="img ab">
                            </div>
                            <div class="head center">
                                <h3>4 BHK</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section Ends -->
        <!-- Highlights Section -->
        <section class="highlights-section pad-70" id="highlights" data-scroll-section>
            <div class="container">
                <div class="hs-wrapper">
                    <div class="hs-head">
                        <h2>Highlights</h2>
                    </div>
                    <div class="hs-txt">
                        <ul>
                            <li><img src="assets/icons8-location-100.png" alt=""><p>Prime Location</p></li>
                            <li><img src="assets/icons8-road-map-60.png" alt=""><p>Seamless Connectivity</p></li>
                            <li><img src="assets/icons8-swastik-100.png" alt=""><p>Vastu Compliant</p></li>
                            <li><img src="assets/icons8-gym-100.png" alt=""><p>Lifestyle Amenities</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Highlights Section Ends -->
        <!-- Amenities -->  
        <section class="amenities pad-70" id="connectivity" data-scroll-section>
            <div class="am-wrapper">
                <div class="ame-img-wrap">
                    <div class="ame-img">
                        <img src="assets/b1-1400w.webp" alt="" class="img">
                    </div>
                </div>
                <div class="am-txt-wrapper">
                    <div class="container">
                        <div class="ame-wrap" data-scroll="" data-scroll-class>
                            <div class="head center">
                                <h2>Connectivity</h2>
                            </div>
                            <div class="ame-txt">
                                <div class="am-map">
                                    <img src="assets/Screenshot 2024-01-24 at 12.18.06 AM.png" alt="" class="img ab">
                                </div>
                                <div class="am-grid">
                                    <div class="am-item">
                                        <div class="ami-icon">
                                            <img src="assets/icons8-gym-100.png" alt="" class="icon">
                                        </div>
                                        <ul>
                                            <li>Kandivali Railway Station - 2 Kms</li>
                                            <li>Borivali Metro Station - 3 Kms</li>
                                            <li>Metro Station - 0.3 Km</li>
                                        </ul>
                                    </div>
                                    <div class="am-item">
                                        <div class="ami-icon">
                                            <img src="assets/icons8-gym-100.png" alt="" class="icon">
                                        </div>
                                        <ul>
                                            <li>Growels 101 Mall - 4.8 Km</li>
                                            <li>Vishnu Shivam Mall - 5km</li>
                                        </ul>
                                    </div>
                                    <div class="am-item">
                                        <div class="ami-icon">
                                            <img src="assets/icons8-gym-100.png" alt="" class="icon">
                                        </div>
                                        <ul>
                                            <li> Ryan International School - 5.7 km</li>
                                            <li> Raj High School - 5.1 Km</li>
                                            <li>Lokhandwala Foundation School - 5 Km</li>
                                        </ul>
                                    </div>
                                    <div class="am-item">
                                        <div class="ami-icon">
                                            <img src="assets/icons8-gym-100.png" alt="" class="icon">
                                        </div>
                                        <ul>
                                            <li>Agrawal Hospital - 3.4 Km</li>
                                            <li>Shreeji Hospital - 1.4 Km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Amenities -->
        <!-- Ticker -->
        <section class="ticker pad-70" id="ticker" data-scroll-section>
            <div class="ticker-wrap" id="splide">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/gym-320w.webp" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/Halls-320w.webp" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/b1-1400w.webp" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/kids-320w.webp" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/walk-320w.webp" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/swim.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/spa-320w.webp" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/Retails-320w.webp" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticker-img">
                            <img src="assets/ref-320w.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!-- Ticker Ends -->
        <!-- Footer -->
        <footer class="pad-70" data-scroll-section>
            <div class="container">
                <div class="foot-wrap">
                    <div class="fw-head">
                        <p>Agent Maha RERA No. - A51700000043</p>
                        <p>Project Maha RERA - Coming Soon</p>
                    </div>
                    <div class="fw-para">
                        <p>Disclaimer : The information provided on this website is intended exclusively for informational purposes and should not be construed as an offer of services. This site is managed by a RERA authorized real estate agent namely The New Door. The pricing information presented on this website is subject to alteration without advance notification, and the assurance of property availability cannot be guaranteed. The images showcased on this website are for representational purposes only and may not accurately reflect the actual properties. We may share your data with Real Estate Regulatory Authority (RERA) registered Developers for further processing as necessary. Additionally, we may send updates and information to the mobile number or email address registered with us. All rights reserved. The content, design, and information on this website are protected by copyright and other intellectual property rights. Any unauthorized use or reproduction of the content may violate applicable laws.
                            For accurate and up-to-date information regarding services, pricing, availability, and any other details, it is recommended to contact us directly through the provided contact information on this website. Thank you for visiting our website. </p>
                    </div>
                    <div class="contact">
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                              </svg>
                              <a href="mailto:test@gmail.com">test@gmail.com</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                              </svg>
                              <a href="tel:1234567890">1234567890</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Ends -->
        <!-- Floating Buttons -->

<div class="floating-buttons">
	<div class="floating-wrap">
		<div class="fl-but">
			<a href="#open-link" class="fl-anc">
				<div class="fl-icon">
					 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
</svg>

				</div>
				<div class="fl-txt">
					Enquire Now
				</div>
			</a>
		</div>
		<div class="fl-but">
			<a href="tel: +919096966153" class="fl-anc">
				<div class="fl-icon">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
</svg>

				</div>
				<div class="fl-txt">
					Call us at +91 9096966153
				</div>
			</a>
		</div>
	</div>
</div>

<!-- Floating Button Ends -->

<!-- Pop Up -->
<div class="form-popup">
	<div class="form-pop-wrap">
		<div class="close-button">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
</svg>
		</div>
		<div class="pop-up-con">
			<div class="pop-img">
				<img src="https://kasturihomes-tnd.com/wp-content/uploads/2023/11/Balmoral-Collection-1.png" alt="">
			</div>
			<div class="popup-form-wrapper">
			    [wpforms id="2759"]
		    </div>
		</div>
	</div>
</div>
<!-- Pop Up -->
<script>
	// if (window.location.href === "https://kasturihomes-tnd.com/thank-you/") {
	//   // Wait for 5-7 seconds (in milliseconds) before redirecting
	//   const delay = 4000; // 5 seconds
	//   setTimeout(() => {
	// 	window.location.replace("https://kasturihomes-tnd.com/");
	//   }, delay);
	// }
</script>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="custom.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      // Initialize Locomotive Scroll
      const scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
      });

      // Add an event listener for the Locomotive Scroll "scroll" event
      scroll.on('scroll', (args) => {
        // Get the scroll position as a percentage of the content height
        const scrollPercentage = (args.scroll.y / args.limit.y) * 100;

        // Check if the scroll position is greater than or equal to 10%
        if (scrollPercentage >= 8) {
          // Add the "scrolled" class to the header
          document.getElementById("header").classList.add("scrolled");
        } else {
          // Remove the "scrolled" class if the scroll position is less than 10%
          document.getElementById("header").classList.remove("scrolled");
        }
      });

      const banner= document.querySelector('#banner');

        $('a#first').on('click', function() {
            scroll.scrollTo(banner);
        });

        const overview= document.querySelector('#overview');

        $('a#second').on('click', function() {
            scroll.scrollTo(overview);
        });

        const pricing= document.querySelector('#pricing');

        $('a#third').on('click', function() {
            scroll.scrollTo(pricing);
        });

        const highlights= document.querySelector('#highlights');

        $('a#fourth').on('click', function() {
            scroll.scrollTo(highlights);
        });

        const connectivity= document.querySelector('#connectivity');

        $('a#fifth').on('click', function() {
            scroll.scrollTo(connectivity);
        });

        const ticker= document.querySelector('#ticker');

        $('a#sixth').on('click', function() {
            scroll.scrollTo(ticker);
        });
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        items: 3,
        nav:false,
        loop: true,
        margin: 20,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        autoplayHoverPause: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
            },
            600:{
                items:3,
            },
            1000:{
                items:3,
            }
        }
    })
</script>
<script>
	$(document).ready(function($) {
	  $('a[href="#open-link"]').on('click', function(event) {
		event.preventDefault(); // Prevent the default anchor behavior

		// Toggle the 'open' class to show/hide the modal
		$('.form-popup').addClass('active');
	  });
	});

	$(document).ready(function(){
		$(".close-button").click(function(){
			$(".form-popup").removeClass("active");
		})
	});

</script>

<script>
	setTimeout(function() {
        $('.form-popup').addClass('active');
      }, 3500);
</script>
</html>