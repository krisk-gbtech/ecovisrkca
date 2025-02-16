<?php $GLOBALS['base_url'] = "http://localhost/ecovis/ecovis/"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecovis</title>
    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">

    <!-- custom css link  -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- jquery cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap javascript cdn  -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- oul carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="row mx-0">
            <div
                class="col-md-12 contact-header d-flex justify-content-end font-weight-bold align-items-center text-light px-4 py-1">
                <a href="#" style="text-decoration: none;" class="text-light">Login</a>
                <a href="#" style="text-decoration: none;" class="text-light ml-3"> <span><i
                            class="fa-solid fa-envelope"></i></span> Info@ecovisrkca.com</a>
            </div>
            <div class="align-items-center col-md-12 d-flex justify-content-between main-header">
                <div class="logo py-2 text-center">
                    <a href="./index.php"><img src="./ecovis-images/ecovis-logo.jpeg" alt=""></a>
                </div>
                <div id="menu" class="menu ">
                    <ul class="d-flex mb-0 justify-content-around list-unstyled">
                        <a href="#">
                            <li id="about_us" class="about_us">About Us</li>
                        </a>
                        <a href="#">
                            <li id="services">Services</li>
                        </a>
                        <a href="#client_Stories">
                            <li>Client stories</li>
                        </a>
                        <a href="#">
                            <li>Collaboration</li>
                        </a>
                        <a href="./ecovis_india.php">
                            <li>Our team</li>
                        </a>
                        <a href="./careers.html">
                            <li>Careers</li>
                        </a>
                        <a href="./contact_us.html">
                            <li>Contact Us</li>
                        </a>
                        <a href="#">
                            <li><span><i class="fa-solid text-danger fa-magnifying-glass"></i></span></li>
                        </a>
                    </ul>
                   
                </div>
                    <span id="menu_icon" class="menu_icon mr-3 d-none" style="font-size: x-large;"><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
        <!-- about us -->
        <div class=" row position-absolute " style="display: none; z-index: 1; right: 0; left: 0;" id="aboutUs_menu">
            <div class="col-md-4 text-center" style="background: linear-gradient(0deg, #CD1432, #dc4f54);">
                <div class="Contact_image bg-light mt-5 mx-auto"></div>
                <h4 class="text-light  mt-3">Lets Contact</h4>
                <P class="mx-auto text-justify text-light mt-5 w-75">Our team is always on hand to answer
                    any questions and provide any help
                    we can. So let s start a conversation</P>
                <button class="btn header_connectBTN mt-3 font-weight-bold text-light">CONTACT US</button>
            </div>
            <div class="col-md-4 ourPresents pt-2">
                <h3 class="font-weight-normal d-inline ml-4 mt-3">Our Presence </h3>
                <ul class="list-unstyled">
                    <li class="justify-content-between mb-3 mt-4">
                        <div class="align-items-center row">
                            <div class="col-3 pr-0 text-center w-75">
                                <i class="fa-solid fa-location-pin text-danger" style="font-size: 2.5rem; "></i>
                            </div>
                            <div class="col-9 pl-0">
                                <span>India</span>
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="justify-content-between mb-1">
                        <div class="align-items-center row">
                            <div class="col-3 pr-0 text-center w-75">
                                <i class="fa-solid fa-earth-asia" style="font-size: 2.5rem; "></i>
                            </div>
                            <div class="col-9 pl-0">
                                <span>Ecovis International</span>
                                <p></p>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-md-4 ourValues pt-2">
                <h3 class="font-weight-normal d-inline ml-4 mt-3">Our Values</h3>
                <ul class="list-unstyled">
                    <li class="justify-content-between mt-4">
                        <div class="align-items-center row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/r_in.png" class="w-75">
                            </div>
                            <div class="col-9 pl-0">
                                <span>Responsibility</span>
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="justify-content-between ">
                        <div class="align-items-center row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/k_in.png" class="w-75" alt="">
                            </div>
                            <div class="col-9 pl-0">
                                <span>Knowledge</span>
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="justify-content-between ">
                        <div class="align-items-center row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/c_in.png"  style="width: 55%;" alt="">
                            </div>
                            <div class="col-9 pl-0">
                                <span>Commitment</span>
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="justify-content-between">
                        <div class="align-items-center row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/a_in.png" class="w-75" alt="">
                            </div>
                            <div class="col-9 pl-0">
                                <span>Accountability</span>
                                <p></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- services  -->
        <div class="mx-0 row position-absolute" style="display: none; z-index: 1;" id="services_menu">
            <div class="col-md-4 text-center" style="background: linear-gradient(0deg, #CD1432, #dc4f54);">
                <div class="Contact_image bg-light mt-5 mx-auto"></div>
                <h4 class="text-light  mt-3">Lets Contact</h4>
                <P class="mx-auto text-justify text-light w-75">Our team is always on hand to answer
                    any questions and provide any help
                    we can. So let s start a conversation</P>
                <button class="btn header_connectBTN font-weight-bold text-light">CONTACT US</button>
            </div>

            <div class="col-md-8 ourValues d-flex">

                <div class="w-75 mt-2">
                    <h3 class="font-weight-normal d-inline ml-4">Our Values</h3>
                    <div class="d-flex mt-2">
                        <div class="w-50">
                            <ul class="list-unstyled">
                                <li class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="align-items-center row">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <img src="./ecovis_icons/Assurance.png" class="w-75" alt="">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <h5 class="mb-1">Assurance</h5>
                                            <p class="small">Giving you the certainty to drive straightforward
                                                development
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="align-items-center row">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <img src="./ecovis_icons/TAXATION-removebg.png" class="" style="width: 67%;"
                                                alt="">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <h5 class="mb-1">Taxation</h5>
                                            <p class="small">Assisting companies with accounting and tax commitments</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="align-items-center row">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <img src="./ecovis_icons/RISK COMPLIANCE.png" class="" style="width: 67%;"
                                                alt="">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <h5 class="mb-1">Risk & Compliance</h5>
                                            <p class="small">We prepare organizations for any unexpected challenges</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="align-items-center row">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <img src="./ecovis_icons/Business-Support.png" class="" style="width: 67%;"
                                                alt="">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <h5 class="mb-1">Accounting Business support</h5>
                                            <p class="small">Offering accounting business support to grow your business.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="w-50">
                            <ul class="list-unstyled">
                                <li class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="align-items-center row">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <img src="./ecovis_icons/LEgal-Support.png" class="" style="width: 67%;"
                                                alt="">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <h5 class="mb-1">Legal Services</h5>
                                            <p class="small">We create a platform to offer you legal services and
                                                consultancy</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="align-items-center row">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <img src="./ecovis_icons/Growth-Services.png" class="" style="width: 67%;"
                                                alt="">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <h5 class="mb-1">Growth Services</h5>
                                            <p class="small">We develop your business growth quality</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="align-items-center row">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <img src="./ecovis_icons/Digital-Transformation.png" class=""
                                                style="width: 67%;" alt="">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <h5 class="mb-1">Digital transformation</h5>
                                            <p class="small">Transform and foster your business with our services</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <h3 class="font-weight-normal d-inline mt-3">Industries</h3>
                    <ul class="list-unstyled mt-3">
                        <li>
                            <h5>Creative</h5>
                        </li>
                        <li>
                            <h5>Technology</h5>
                        </li>
                        <li>
                            <h5>Finance</h5>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>

    <script>

        $("#about_us").click(function () {
            $("#aboutUs_menu").slideToggle();
            $("#services_menu").slideUp();
        });
        $("#services").click(function () {
            $("#services_menu").slideToggle();
            $("#aboutUs_menu").slideUp();
        });
        $("#menu_icon").click(function () {
            $("#menu").slideToggle();
        });
    </script>
</body>

</html>