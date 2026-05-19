<?php
// Determine the current page filename to apply active state in navigation
$current_page = basename($_SERVER['PHP_SELF']);

// Fallback to default page title if not set
if (!isset($page_title)) {
    $page_title = "Logistica - Global Transport & Logistics Solutions";
}
if (!isset($page_description)) {
    $page_description = "Logistica provides premium global air, ocean, road, and train freight shipping services, customs clearance, and secure warehouse storage solutions worldwide.";
}
if (!isset($page_keywords)) {
    $page_keywords = "logistics, shipping, air freight, ocean freight, road freight, cargo transport, customs clearance, warehousing, supply chain management";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo htmlspecialchars($page_keywords); ?>" name="keywords">
    <meta content="<?php echo htmlspecialchars($page_description); ?>" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.php" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Logistica</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>"><i class="fa fa-home me-2"></i>Home</a>
                <a href="about.php" class="nav-item nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>"><i class="fa fa-info-circle me-2"></i>About Us</a>
                <a href="service.php" class="nav-item nav-link <?php echo $current_page == 'service.php' ? 'active' : ''; ?>"><i class="fa fa-truck me-2"></i>Services</a>
                <a href="price.php" class="nav-item nav-link <?php echo $current_page == 'price.php' ? 'active' : ''; ?>"><i class="fa fa-tags me-2"></i>Pricing</a>
                <a href="contact.php" class="nav-item nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>"><i class="fa fa-envelope me-2"></i>Contact Us</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+91 98765 43210</h4>
        </div>
    </nav>
    <!-- Navbar End -->
