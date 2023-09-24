<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Thave Healthcare LLP</title>
    <link rel="icon" href="assets/images/favicon.ico" sizes="any"><!-- 32×32 -->
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png"><!-- 180×180 -->
    <link rel="manifest" href="assets/images/manifest.webmanifest">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#8C7BFF">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- JQUERY --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- LAZY LOAD --->
    <script type="text/javascript"
        src="//cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.min.js">
        </script>
    <script src="//cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    <!-- INCLUDES -->
    <link rel="stylesheet preload" type="text/css" href="assets/css/app.min.css" as="style">

</head>

<body class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index1' ? 'homePage' : '' ?>">
    <header id="Header">
        <section class="HeaderMenu">
            <div class="container">
                <div class="FlexRow">
                    <a href="index1.php" class="LogoSec">
                        <img src="assets/images/logo.svg" alt="Logo" width="179" height="111" class="lazy logoNormal"
                            loading="lazy" data-src="assets/images/logo.svg">
                        <img src="assets/images/logo-white.svg" alt="Logo" width="179" height="111"
                            class="lazy logoWhite" loading="lazy" data-src="assets/images/logo-white.svg">
                    </a>
                    <div class="menuBx">
                        <div class="modal fade" id="HeaderPOP" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog mobile-menu" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="mobLogo">
                                            <img src="assets/images/logo.svg" alt="Logo" width="179" height="111"
                                                class="lazy" loading="lazy" data-src="assets/images/logo.svg">
                                        </div>
                                        <div class="accordion" id="AccordMenu">
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="index1.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index1' ? 'active' : '' ?>">
                                                        Home
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="about.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'about' ? 'active' : '' ?>">
                                                        About us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="services.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'services' ? 'active' : '' ?> <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'serviceListing' ? 'active' : '' ?> <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'serviceDetail' ? 'active' : '' ?>">
                                                        Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header dropdown hasAccord">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button">
                                                        Resourses
                                                    </a>
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 492.004 492.004">
                                                            <path
                                                                d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
                                                                c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
                                                                c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
                                                                c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#AccordMenu">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>
                                                                <a href="blogs.php">Blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="career.php">Careers</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery.php">Gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="faq.php">Faq</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="testimonial.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'testimonial' ? 'active' : '' ?>">
                                                        Testimonials
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="partners.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'partners' ? 'active' : '' ?>">
                                                        Our Partners
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contactSec">
                            <div class="Dflx">
                                <div class="lftSec">
                                    <svg id="emergency-call" xmlns="http://www.w3.org/2000/svg" width="27.999"
                                        height="27.999" viewBox="0 0 27.999 27.999">
                                        <path id="Path_26" data-name="Path 26"
                                            d="M20.132,108.956a2.769,2.769,0,0,0-3.912,0l-1.014,1.014a1.83,1.83,0,0,1-1.167.342c-.908,0-2.454-.464-4.662-2.672-2.128-2.128-2.626-3.638-2.669-4.53a1.889,1.889,0,0,1,.349-1.31l1-1a2.766,2.766,0,0,0,0-3.912L6.153,94.978a2.769,2.769,0,0,0-3.912,0L1.227,95.992a.822.822,0,0,0-.056.062A6.68,6.68,0,0,0,0,100.267,11.4,11.4,0,0,0,1.274,105a23.879,23.879,0,0,0,4.613,6.13,23.877,23.877,0,0,0,6.13,4.613,11.4,11.4,0,0,0,4.733,1.272l.216,0a6.6,6.6,0,0,0,4-1.171.835.835,0,0,0,.062-.056l1.014-1.014a2.766,2.766,0,0,0,0-3.912Z"
                                            transform="translate(0.001 -89.019)" fill="#fff" />
                                        <path id="Path_27" data-name="Path 27"
                                            d="M256.231,0a7.191,7.191,0,0,0-2.907,13.768v1.879a.82.82,0,0,0,1.234.708l4.107-2.4A7.191,7.191,0,0,0,256.231,0Zm.82,8.01v.956a.82.82,0,1,1-1.641,0V8.01h-.956a.82.82,0,0,1,0-1.641h.956V5.414a.82.82,0,1,1,1.641,0V6.37h.956a.82.82,0,0,1,0,1.641Z"
                                            transform="translate(-235.422)" fill="#fff" />
                                    </svg>
                                </div>
                                <div class="ritSec">
                                    <a href="tel:08040504777" class="bold">080 40504777</a>
                                    <a href="mailto:thavenursing@gmail.com">thavenursing@gmail.com</a>
                                </div>
                            </div>
                            <a href="contact.php" class="baseBtn fill"><span>Contact Us</span></a>
                        </div>
                    </div>
                    <div class="MenuIcon">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#HeaderPOP">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>

    </header>


    <div class="fixedRit">
        <ul>
            <li>
                <a href="tel:+08040504777">
                    <svg id="Group_311" data-name="Group 311" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        viewBox="0 0 40 40">
                        <path id="Path_847" data-name="Path 847" d="M20,0A20,20,0,1,1,0,20,20,20,0,0,1,20,0Z"
                            fill="#004c90" />
                        <g id="phone-call" transform="translate(31.674 19.964) rotate(135)">
                            <g id="Group_11" data-name="Group 11">
                                <path id="Path_23" data-name="Path 23"
                                    d="M16.126,12.179,13.81,9.863a1.54,1.54,0,0,0-2.564.579,1.576,1.576,0,0,1-1.82.993,7.141,7.141,0,0,1-4.3-4.3,1.5,1.5,0,0,1,.993-1.82A1.54,1.54,0,0,0,6.7,2.75L4.381.434a1.652,1.652,0,0,0-2.233,0L.576,2.006C-1,3.66.742,8.044,4.629,11.931s8.271,5.707,9.925,4.053l1.571-1.571A1.652,1.652,0,0,0,16.126,12.179Z"
                                    fill="#fff" />
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=97124444650" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35.764" height="35.759" viewBox="0 0 35.764 35.759">
                        <g id="Group_309" data-name="Group 309" transform="translate(-8)">
                            <g id="Group_216" data-name="Group 216" transform="translate(8)">
                                <ellipse id="Ellipse_25" data-name="Ellipse 25" cx="13.481" cy="12.941" rx="13.481"
                                    ry="12.941" transform="translate(4.314 4.938)" fill="#fff" />
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Color">
                                        <g id="_08.Whatsapp" data-name="08.Whatsapp">
                                            <path id="Icon"
                                                d="M53.888,36A17.879,17.879,0,0,0,39.41,64.361L38.492,70.1,44.054,68.8A17.879,17.879,0,1,0,53.888,36Zm9.5,25.286-1.9,1.9c-2,2-7.313-.2-12.019-4.917s-6.817-10.012-4.912-11.993l1.9-1.9a2,2,0,0,1,2.7,0l2.807,2.8a1.864,1.864,0,0,1-.7,3.1,1.819,1.819,0,0,0-1.2,2.208,8.648,8.648,0,0,0,5.212,5.207,1.909,1.909,0,0,0,2.186-1.216,1.868,1.868,0,0,1,3.129-.7l2.8,2.807a2,2,0,0,1,0,2.7Z"
                                                transform="translate(-36.015 -36)" fill="#07d97e" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>

                </a>
            </li>
            <li>
                <a href="mailto:thavenursing@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                        <g id="Group_312" data-name="Group 312" transform="translate(-4)">
                            <g id="Group_311" data-name="Group 311" transform="translate(4)">
                                <path id="Path_149" data-name="Path 149" d="M20,0A20,20,0,1,1,0,20,20,20,0,0,1,20,0Z"
                                    fill="#48bfdb" />
                                <g id="email" transform="translate(10.059 12.555)">
                                    <path id="Path_24" data-name="Path 24"
                                        d="M11.6,176.927a2.99,2.99,0,0,1-3.323,0L.132,171.5Q.065,171.451,0,171.4v8.9a1.83,1.83,0,0,0,1.83,1.83H18.052a1.83,1.83,0,0,0,1.83-1.83v-8.9c-.043.032-.087.064-.133.094Z"
                                        transform="translate(0 -167.242)" fill="#fff" />
                                    <path id="Path_25" data-name="Path 25"
                                        d="M.779,67.551l8.147,5.432a1.826,1.826,0,0,0,2.031,0L19.1,67.551a1.744,1.744,0,0,0,.779-1.455,1.832,1.832,0,0,0-1.83-1.83H1.83A1.832,1.832,0,0,0,0,66.1a1.744,1.744,0,0,0,.779,1.454Z"
                                        transform="translate(0 -64.266)" fill="#fff" />
                                </g>
                            </g>
                        </g>
                    </svg>

                </a>
            </li>
        </ul>
    </div>


    <div id="viewport">