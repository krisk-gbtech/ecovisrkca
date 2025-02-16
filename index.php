<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecovis</title>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <style>
        .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    outline: none !important;
    text-decoration: none;
    background-color: #e7455f4a !important;
    font-weight: 500;
}
.dropdown-item.active, .dropdown-item:active {
    color: #16181b !important;
    text-decoration: none;
    background-color: #e7455f4a !important;
}
    </style>

</head>

<body>

    <!-- header -->
    <?php include_once "header.php" ?>

    <!-- ecovis banner  -->
    <div id="homebannner" class="carousel slide" style="height: 450px;" data-ride="carousel">
        <div class="carousel-inner h-100">
            <div class=" carousel-item active">
            <img class="d-block w-100" src="./images/ecovis_banners/homepage_b1_ecovis_india.png" style="height: 450px;" alt="First slide">

                <!-- <img class="d-block w-100" src="./ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <div class="">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 3rem;">ECOVIS INDIA</h1>
                        <h3 class="font-weight-normal">Broaden your business horizon with us</h3>
                        <a href="#"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">OUR
                                OFFICES</button></a>
                    </div>

                </div>
            </div>
            <div class="carousel-item ">
            <img class="d-block w-100" src="./images/ecovis_banners/homepage_b2_our_team.png" style="height: 450px;" alt="First slide">

                <!-- <img class="d-block w-100" src="./ecovis-images/careers_banner.png" style="height: 450px;" alt="Second slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-family: 'Libre Baskerville', serif; font-size: 3rem;">ECOVIS INDIA</h1>
                    <h3 class="font-weight-normal">Broaden your business horizon with us</h3>
                    <a href="#"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">OUR
                            OFFICES</button></a>

                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./images/ecovis_banners/homepage_b3_job_vaccancies.png" style="height: 450px;" alt="First slide">

            <!-- <img class="d-block w-100" src="./ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-family: 'Libre Baskerville', serif; font-size: 3rem;">ECOVIS INDIA</h1>
                    <h3 class="font-weight-normal">Broaden your business horizon with us </h3>
                    <a href="#"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">OUR
                            OFFICES</button></a>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#homebannner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homebannner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- banner problem solving drop down  -->
    <div class="bannerDD pb-5 pt-3">
        <h3 class="text-center text-light mt-3">
            Your Biggest challenge?
        </h3>
        <div class="d-flex mx-auto w-50 justify-content-around">
            <div class="btn-group py-3" style="width: 30%;">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false">
                Formation
                </button>
                <div class="dropdown-menu w-100">
                    <button class="dropdown-item" type="button">Formation</button>
                    <button class="dropdown-item" type="button">Regestration</button>
                    <button class="dropdown-item" type="button">Closure of Concern</button>
                </div>
            </div>
            <div class="btn-group py-3" style="width: 30%;">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false">
                    Right-aligned menu
                </button>
                <div class="dropdown-menu w-100">
                    <button class="dropdown-item" type="button">Private Limited Company</button>
                    <button class="dropdown-item" type="button">Limited Liability Partnerships</button>
                    <button class="dropdown-item" type="button">One Person Company (OPC)</button>
                    <button class="dropdown-item" type="button">Proprietorship</button>
                    <button class="dropdown-item" type="button">Partnership</button>
                    <button class="dropdown-item" type="button">Nidhi Company</button>
                    <button class="dropdown-item" type="button">NGO Registration</button>
                    <button class="dropdown-item" type="button">Society Registration</button>

                </div>
                <div class="dropdown-menu w-100">
                    <button class="dropdown-item" type="button">Professional Tax Registration</button>
                    <button class="dropdown-item" type="button">Goods and Services Tax Registration</button>
                    <button class="dropdown-item" type="button">Employee Provident Fund (EPF) Registration</button>
                    <button class="dropdown-item" type="button">Employees’ State Insurance (ESI) Registration</button>
                    <button class="dropdown-item" type="button">Permanent Account Number (PAN) Application</button>
                    <button class="dropdown-item" type="button">Digital Signature Registration</button>
                    <button class="dropdown-item" type="button">Tax Deduction and Collection Account Number – TAN</button>
                </div>
                <div class="dropdown-menu w-100">
                    <button class="dropdown-item" type="button">Close Your Public Limited Company</button>
                    <button class="dropdown-item" type="button">Closing a One Person Company</button>
                    <button class="dropdown-item" type="button">Closing a Partnership</button>
                    <button class="dropdown-item" type="button">Closing a Proprietorship</button>
                    <button class="dropdown-item" type="button">Closing a Nidhi Company</button>
                    <button class="dropdown-item" type="button">Closing a Private Limited Company</button>
                </div>
            </div>
            <!-- <div id="indexProblem" class="align-items-center bg-light d-flex font-weight-bold justify-content-between mt-4 mx-auto problemDD px-3 py-2 rounded text-dark">
                <p class="mb-0">Select our service</p>
                <span><i class="fa-solid fa-caret-down text-danger"></i></span>
            </div>
            <div id="indexProblem" class="align-items-center bg-light d-flex font-weight-bold justify-content-between mt-4 mx-auto problemDD px-3 py-2 rounded text-dark">
                <p class="mb-0">Select category</p>
                <span><i class="fa-solid fa-caret-down text-danger"></i></span>
            </div> -->
        </div>

        <div class="select_location border p-2 mb-3 mt-1 w-25 rounded" id="indexProblemDD">
            <p class="border-dark form-control mb-2 mx-auto genderValue activeSelection" onclick="genderValue(this,'Male');" style="border-radius: 7px; width: 95%; ">PROBLEM 1</p>
            <p class="border-dark form-control mb-2 mx-auto   genderValue" onclick="genderValue(this,'Female');" style="border-radius: 7px; width: 95%;">PROBLEM 2</p>
            <p class="border-dark form-control mb-2 mx-auto genderValue" onclick="genderValue(this,'Other');" style="border-radius: 7px; width: 95%;">PROBLEM 3</p>
        </div>

    </div>

    <!-- offering services  -->
    <div class="my-5">
        <h2 class="text-center ">Services offered by our experts at Ecovis</h2>

    </div>
    <div class="row mx-0 mb-4">

        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="text-center">
                <div class="mx-auto service_icons">
                    <div class=" w-75 mx-auto services_logo Assurance_logo"></div>
                    <!-- <img src="./ecovis_icons/Assurance.png" class="w-75" alt=""> -->
                </div>
                <h4 class="offeringservicesHeading">Strategy & Performance Consulting </h4>
                <p class="offeringservicesdetails">Giving you the certainty to drive open and straightforward development</p>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="text-center">
                <div class="mx-auto service_icons">
                    <img src="./ecovis_icons/Assurance.png" class="w-75" alt="">
                </div>
                <h4 class="offeringservicesHeading">Strategy & Performance Consulting </h4>
                <p class="offeringservicesdetails">Giving you the certainty to drive open and straightforward development</p>
            </div>
        </div> -->
        <div class="col-lg-3 col-md-4 col-sm-6 serviceColomn">
            <div class="text-center">
                <div class="mx-auto service_icons">
                <!-- <div class=" w-75 mx-auto Taxation_logo services_logo" style=""></div> -->
                    <img src="./ecovis_icons/TAXATION-removebg.png" class="w-75" alt="">
                </div>
                <h4 class="offeringservicesHeading">Taxation</h4>
                <p class="offeringservicesdetails">Assisting Companies With overseeing Accounting and Tax commitments</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 serviceColomn">
            <div class="text-center">
                <div class="mx-auto service_icons">
                <div class=" w-75 mx-auto Risk_Compliance_logo services_logo" ></div>
                    <!-- <img src="./new_icon_images/Governanceb_black.png" class="w-75" alt=""> -->
                </div>
                <h4 class="offeringservicesHeading">Risk & Compliance</h4>
                <p class="offeringservicesdetails">We prepare organizations for any unexpected challenges</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 serviceColomn">
            <div class="text-center">
                <div class="mx-auto service_icons">
                <div class=" w-75 mx-auto businessSupport_logo services_logo" ></div>
                    <!-- <img src="./new_icon_images/BusinessSupportb.png" class="w-75" alt=""> -->
                </div>
                <h4 class="offeringservicesHeading">Accounting Business support</h4>
                <p class="offeringservicesdetails">Offering accounting business support to grow your business.</p>
            </div>
        </div>
    </div>
    <div class="row mx-0">

        <div class="col-lg-3 col-md-4 col-sm-6 serviceColomn">
            <div class="text-center">
                <div class="mx-auto service_icons">
                <div class=" w-75 mx-auto services_logo Legalb_logo" ></div>

                    <!-- <img src="./new_icon_images/Legalb.png" class="w-75" alt=""> -->
                </div>
                <h4 class="offeringservicesHeading">Litigation & Legal Services</h4>
                <p class="offeringservicesdetails">We create a platform to offer you legal services and consultancy</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="text-center">
                <div class="mx-auto service_icons">
                    <img src="./ecovis_icons/Growth-Services.png" class="w-75" alt="">
                </div>
                <h4 class="offeringservicesHeading">Growth Services </h4>
                <p class="offeringservicesdetails">We demonstrate and further develop your business quality by offering growth services </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 serviceColomn">
            <div class="text-center">
                <div class="mx-auto service_icons">
                <div class=" w-75 mx-auto Digital_Transformationb_logo services_logo" ></div>
                
                    <!-- <img src="./new_icon_images/Digital_Transformationb.png" class="w-75" alt=""> -->
                </div>
                <h4 class="offeringservicesHeading">Digital Transformation</h4>
                <p class="offeringservicesdetails">Transform and foster your business digitally using our digital transformation services</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 serviceColomn">
            <div class="text-center">
                <div class="mx-auto service_icons">
                <div class=" w-75 mx-auto Capacityb_logo services_logo" ></div>

                    <!-- <img src="./new_icon_images/Capacityb.png" class="w-75" alt=""> -->
                </div>
                <h4 class="offeringservicesHeading">Capacity & Capability</h4>
                <p class="offeringservicesdetails">Offering accounting business support to grow your business.</p>
            </div>
        </div>
    </div>

    <!-- <div class="offer_services" style="margin-top: 7rem;">

        <h2 class="text-center " style="margin-bottom: 4rem;">Services offered by our experts at Ecovis</h2>

        <div class="row mx-0 justify-content-around">
            <div class="col-md-10">
                <div class="row justify-content-around">
                    <div class="col-md-4 col-lg-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Assurance.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Assurance</h4>
                            <p>Giving you the certainty to drive open and straightforward development</p>
                        </a>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/TAXATION-removebg.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Taxation</h4>
                            <p>Assisting Companies With overseeing
                                Accounting and Tax commitments</p>
                        </a>

                    </div>
                    <div class="col-md-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/RISK COMPLIANCE.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Risk & Compliance</h4>
                            <p>Preparing organizations for any unexpected,
                                distinguishing, alleviating chances, and
                                reinforcing business culture.</p>
                        </a>

                    </div>
                    <div class="col-md-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Business-Support.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Accounting Business support</h4>
                            <p>Offering accounting business support to
                                grow your business.
                            </p>
                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="row mx-0 justify-content-around mt-5">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/LEgal-Support.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Legal Services</h4>
                            <p>We create a platform to offer you legal
                                services and consultancy</p>
                        </a>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Growth-Services.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Growth Services</h4>
                            <p>We demonstrate and further develop your
                                business quality by offering growth services</p>
                        </a>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Digital-Transformation.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Digital Transformation</h4>
                            <p>Transform and foster your business digitally
                                using our digital transformation services</p>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div> -->

    <!-- Client stories  -->
    <div class="clientStoriesHeading text-center  mt-5" id="client_Stories">
        <h2>Know Us through Our Clients</h2>
    </div>
    <div class="owl-carousel owl-theme mt-4 mb-0 position-relative" >
        <div class="item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="./ecovis_new_images/baggingoutcomes_r.jpg" class="w-100 client_stories_images" alt="">
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Combined efforts bagging successful outcomes!</h5>
                    <p class="client_stories_details text-justify mb-2">The main motive of our company which is completely aimed at is to render professional services to its</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="item  client_story">
            <div class=" float-right">
            <img id="client_stories_1" src="./images/clientStoriesImages/lending hand_r.jpg" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Combined efforts bagging successful outcomes!</h5>
                    <p class="client_stories_details text-justify mb-2">The main motive of our company which is completely aimed at is to render professional services to its</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="item  client_story">
            <div class=" float-right">
            <img id="client_stories_1" src="./images/clientStoriesImages/rendering extensive_r.png" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Combined efforts bagging successful outcomes!</h5>
                    <p class="client_stories_details text-justify mb-2">The main motive of our company which is completely aimed at is to render professional services to its</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="item  client_story">
            <div class=" float-right">
            <img id="client_stories_1" src="./ecovis_new_images/baggingoutcomes_r.jpg" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Combined efforts bagging successful outcomes!</h5>
                    <p class="client_stories_details text-justify mb-2">The main motive of our company which is completely aimed at is to render professional services to its</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="item  client_story">
            <div class=" float-right">
            <img id="client_stories_1" src="./ecovis_new_images/baggingoutcomes_r.jpg" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Combined efforts bagging successful outcomes!</h5>
                    <p class="client_stories_details text-justify mb-2">The main motive of our company which is completely aimed at is to render professional services to its</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <!-- <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div> -->

    </div>
    <div class="text-center">
        <a href="#" ><button class="badge-pill btn btn-danger font-weight-bold mb-5 px-5">Explore All</button></a>
    </div>

    <!-- footer  -->
    <?php include_once "footer.php" ?>


    <script>
        $("#indexProblem").click(function() {
            $("#indexProblemDD").slideToggle("fast");
        });
    </script>

    <!-- oul carousel javascript cdn  -->
    <script src="./js/javascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<div class='nav-btn prev-slide bg-light prenavigate'> <i class='fa-solid fa-chevron-left text-danger'></i></div>", "<div class='nav-btn next-slide bg-light postnavigate'> <i class='fa-chevron-right fa-solid text-danger'></i></div>"],

            autoplay: false,
            autoplayTimeout: 3000,
            autoWidth: false,
            autoplayHoverPause: true,
            smartSpeed: 1300,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        })

        // $("#zebraFirst").mouseover(function() {
        //     this.src = "ecovis_new_images/baggingoutcomes_r.jpg"
        // }).mouseout(function() {
        //     this.src = "/ecovis_new_images/baggingoutcomes_b.jpg"
        // });
    </script>
</body>

</html>