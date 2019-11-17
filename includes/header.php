<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo Title ?></title>
    <link rel="stylesheet" href="assets_front/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_front/css/custom.css">
    <link rel="stylesheet" href="assets_front/css/responsive.css" media="screen and (max-width: 1200px)">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets_front/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets_front/css/slick-theme.css"/>
    <!-- OWL -->
    <link rel="stylesheet" href="assets_front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets_front/css/owl.theme.default.min.css">
    <!-- LIGHTBOX -->
    <link rel="stylesheet" href="assets_front/css/lightbox.min.css">
</head>
<body> 

<section class="top-nav">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <i class="fas fa-mobile"></i> <span>+977-123456</span> | <i class="fas fa-envelope"></i> <span>example@gmail.com</span> </<i>
        </div>
        <div class="top_socialmedia">
            <span>Visit our Social page:</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="apply_btn">
            <a href="#ex1" rel="modal:open">Apply Now</a>
        </div>
    </div>
</section>

<section>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="assets_front/img/lg2.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link effect" href="index.php">For Institutions<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link effect" href="service.php">For Consultants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link effect" href="gallery.php">For Students</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link effect" href="about.php">For Government</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link effect" href="contact.php">High Schools</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link effect" href="contact.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link signin" href="contact.php">SIGN IN</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="application_popup modal" id="ex1">
    <form>
        <div class="form-row">
            <div class="form-group col col-sm-6">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter your full name">
            </div>
            <div class="form-group col col-sm-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="" placeholder="Enter your email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col col-sm-6">
                <label for="email">Address</label>
                <input type="email" class="form-control" id="" placeholder="Enter your full address">
            </div>
            <div class="form-group col col-sm-6">
                <label for="fullname">Phone Number</label>
                <input type="text" class="form-control" id="" placeholder="Enter your phone number">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Education Level</label>
                <input type="text" class="form-control" id="" placeholder="Education level completed">
            </div>
            <div class="form-group col-md-6">
                <label for="">Education Completion year</label> 
                <input type="text" class="form-control" id="" placeholder="mm/dd/yyyy">
            </div>
        </div>
        <div class="form-row">
            <label for="message">Query</label>
            <textarea class="form-control" id="" rows="3" placeholder="Enter your query"></textarea>
        </div>
        <div class="form-row  mt-4">
            <button type="submit" class="btn">SUBMIT</button>
        </div>
    </form>
</section>
