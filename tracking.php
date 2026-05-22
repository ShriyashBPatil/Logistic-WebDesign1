<?php
$page_title = "Track Your Shipment - Logistica";
$page_description = "Track your cargo and shipments in real-time with our advanced logistics tracking system.";
$page_keywords = "logistics tracking, shipment tracking, cargo track, track and trace";
include 'header.php';
?>

<!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tracking</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Tracking</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Tracking Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Track Your Shipment</h6>
                    <h1 class="mb-5">Real-Time Tracking!</h1>
                    <p class="mb-5">Enter your tracking number below to see the current status of your shipment. We provide real-time updates so you always know where your cargo is.</p>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Enter Tracking Number" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Track Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tracking End -->


    <!-- Tracking Features Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Why Track With Us?</h6>
                    <h1 class="mb-5">Advanced Tracking Solutions For Peace of Mind</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-satellite text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Real-Time GPS Tracking</h5>
                            <p class="mb-0">Stay updated with exact coordinates and real-time movement of your shipments across air, land, and sea.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-shield-alt text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Secure & Transparent</h5>
                            <p class="mb-0">Get full transparency into your supply chain with our secure tracking portal, ensuring data privacy at all times.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-bell text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Instant Notifications</h5>
                            <p class="mb-0">Receive automated alerts and email notifications at every major transit milestone, from dispatch to delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                    <img class="img-fluid about-img-custom" src="img/feature.jpg" alt="Tracking Features" style="border-radius: 20px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Tracking Features End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Qoute!</h1>
                    <p class="mb-5">Need a custom shipping or warehousing quote for your business? Request a free, no-obligation estimate today. Our team will analyze your requirements and provide you with the most efficient plan.</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+91 98765 43210</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Freight</option>
                                        <option value="1">Air Freight</option>
                                        <option value="2">Ocean Freight</option>
                                        <option value="3">Road Freight</option>
                                        <option value="4">Train Freight</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

<?php include 'footer.php'; ?>
