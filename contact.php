<?php 
    define("Title","CONTACT US");
?> 
<?php include('includes/header.php'); ?>

<section class="contact_us">

    <div class="inner_page_background img_wrapper d-flex align-items-end">
        <div class="m-5">
            <h1>CONTACT US</h1>
            <p><a href="index.php">Home</a> >> Contact</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 contact_circle_wrap">
                <div class="circle_item">
                    <div class="item">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <p>Setopool Maitidevi</p>
                </div>
                <div class="circle_item">
                    <div class="item">
                        <i class="fas fa-tty"></i>
                    </div>
                    <p>+977 987654321</p>
                </div>
                <div class="circle_item">
                    <div class="item">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <p>example@gmail.com</p>
                </div>
                <div class="circle_item">
                    <div class="item">
                        <i class="fas fa-fax"></i>
                    </div>
                    <p>0987654321</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_us_form">
        <div class="container p-4">
            <div class="row d-flex justify-content-center align-items-center form_wrapper">
                <div class="col-12 col-md-5 left_wrap d-flex">
                    <div class="">
                        <h1>GET IN TOUCH</h1>
                        <div class="left">
                            <div class="text-center">
                                <h5>Drop by</h5>
                                <p>Sunday - Friday</p>
                                <p>10:00am - 5:00pm</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form class="">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="" placeholder="Enter your full name">
                            </div>  
                        </div>
                        <div class="form-row">  
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="" placeholder="Enter your address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="" placeholder="Enter your phone no.">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 map">
                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14129.849734265319!2d85.3358073!3d27.703005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x848c8754a5a606d3!2sSeto%20Pool!5e0!3m2!1sen!2snp!4v1567406895892!5m2!1sen!2snp" width="1200" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>