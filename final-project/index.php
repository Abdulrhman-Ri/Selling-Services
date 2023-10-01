<?php

include './api/conn.php';
include './api/messages.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Freelance</title>
</head>
<body>

    <!-- scroll to top button -->
    <div class="scrollToTop-btn flex-center">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- light/dark theme button -->
    <div class="theme-btn flex-center">
        <i class="fas fa-moon"></i>
        <i class="fas fa-sun"></i>
    </div>
    
    <!-- header -->
    <?php include './inc/header.php' ?>

    <!-- home section -->
    <section class="home flex-center" id="home">
        <div class="home-container">
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="info">
                <h2>Freelance</h2>
                <h3>Selling Services Website</h3>
                <p>All the software services you need (front or backend), designs, office services and many more
If you have a job, welcome to our team, and if you are looking for someone to do it, we are here to serve you.</p>
                <a href="#contact" class="btn">Contact US <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <div class="home-img">
                <img src="./public/images/home-image.jpg" alt="" style="height: 400px; width: 400px; border-radius: 50px;">
            </div>
        </div>
        <a href="#about" class="scroll-down">Scroll Down <i class="fas fa-arrow-down"></i></a>
    </section>
    
    <!-- about section -->
    <section class="about section" id="about">
        <div class="container flex-center">
            <h1 class="section-title-01">About US</h1>
            <h2 class="section-title-02">About US</h2>
            <div class="content flex-center">
                <div class="about-img">
                    <img src="./public/images/about-image.jpg" alt="">
                </div>
                <div class="about-info">
                    <div class="description">
                        <h3>Freelance</h3>
                        <h4>A Team <span>Service Sale</span> based in <span>Syria</span></h4>
                        <p>we design and develop services for customers specializing creating stylish, modern websites, web services and online stores. We passion is to design digital user experiences through meaningful interactions, and all digital services</p>
                    </div>
                    <ul class="professional-list">
                        <li class="list-item">
                            <h3>5+</h3>
                            <span>Years<br/> Start</span>
                        </li>
                        <li class="list-item">
                            <h3>1K+</h3>
                            <span>Person<br>Team</span>
                        </li>
                        <li class="list-item">
                            <h3>99+</h3>
                            <span>Digital<br>Service</span>
                        </li>
                    </ul>
                    <a href="" class="btn">Download PDF US <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section -->
    <section class="services section" id="services">
        <div class="container flex-center">
            <h1 class="section-title-01">Our Services</h1>
            <h2 class="section-title-02">Our Services</h2>
            <div class="content">
                <div class="services-description">
                    <h3>What We provide</h3>
                </div>
                <ul class="service-list">
                    <li class="service-container">
                        <div class="service-card">
                            <i class="fas fa-pencil-ruler"></i>
                            <h3>UI/UX Consultancy</h3>
                            <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i></div>
                        </div> 
                        <div class="service-modal flex-center">
                            <div class="service-modal-body">
                                <i class="fas fa-times modal-close-btn"></i>
                                <h3>UI/UX Consultancy</h3>
                                <h4>What is UX consulting?</h4>
                                <p>UX consulting helps companies improve their product's overall usability and optimaize expenses by implementing the right UX processes, methods, and tools.</p>
                                <h4>What We provide</h4>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Establish the right UX processes</li>
                                    <li><i class="fas fa-check-circle"></i> Create exceptional user experiences</li>
                                    <li><i class="fas fa-check-circle"></i> Discover new business opportunities</li>
                                    <li><i class="fas fa-check-circle"></i> Save resources</li>
                                </ul>
                            </div>
                        </div>  
                    </li>
                    
                    <li class="service-container">
                        <div class="service-card">
                            <i class="fas fa-photo-video"></i>
                            <h3>Branding & Design</h3>
                            <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="service-modal flex-center">
                            <div class="service-modal-body">
                                <i class="fas fa-times modal-close-btn"></i>
                                <h3>Branding & Design</h3>
                                <h4>What is Brand & Design?</h4>
                                <p>Brand Design can be defined as one of the crucial marketing practices of creating the name, logo, design, and the symbolic elements related to the brand to create a distinctive identity in comparison to the other brands in the market and also providing impetus to the product differentiation.</p>
                                <h4>What We provide</h4>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Logo Design</li>
                                    <li><i class="fas fa-check-circle"></i> banner Design</li>
                                    <li><i class="fas fa-check-circle"></i>  Visual Identity Packages</li>
                                    <li><i class="fas fa-check-circle"></i> Business Cards & Business Systems</li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="service-container">
                        <div class="service-card">
                            <i class="fas fa-file-code"></i>
                            <h3>Web Development</h3>
                            <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="service-modal flex-center">
                            <div class="service-modal-body">
                                <i class="fas fa-times modal-close-btn"></i>
                                <h3>Web Development</h3>
                                <h4>What is Web Development?</h4>
                                <p>Web development services are used to design, build, support, and evolve all types of web-based software</p>
                                <h4>What We provide</h4>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Web application development</li>
                                    <li><i class="fas fa-check-circle"></i> Testing</li>
                                    <li><i class="fas fa-check-circle"></i> Maintenance</li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="service-container">
                        <div class="service-card">
                            <i class="fas fa-align-left"></i>
                            <h3>Content Writing</h3>
                            <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="service-modal flex-center">
                            <div class="service-modal-body">
                                <i class="fas fa-times modal-close-btn"></i>
                                <h3>Content Writing</h3>
                                <h4>What is Content Writing?</h4>
                                <p>Content Writing is the process of planning, Writing and editing content, typically for digital marketing purposes</p>
                                <h4>What We provide</h4>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Web content Writing</li>
                                    <li><i class="fas fa-check-circle"></i> Blog writing for website</li>
                                    <li><i class="fas fa-check-circle"></i> Social media content</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- our clients -->
        <div class="our-client sub-section">
                <div class="container flex-center">
                <h1 class="section-title-01">About Our Team</h1>
                <h2 class="section-title-02">About Our Team</h2>
                <div class="content">
                    <div class="swiper client-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide flex-center">
                                <div class="client-img">
                                    <img src="./public/images/13.jpg" alt="">
                                </div>
                                <div class="client-datails">
                                    <p>Hi, I'm Aria Collins and I am design & developer who dream making the world better place by produts. I am also very active for international clients.</p>
                                    <h3>Aria Collins</h3>
                                    <span>Marketing Manager</span>
                                </div>
                            </div>
                            <div class="swiper-slide flex-center">
                                <div class="client-img">
                                    <img src="./public/images/14.jpg" alt="">
                                </div>
                                <div class="client-datails">
                                    <p>This is outstanding work. Everything I needed to do has been done by the makers. I really like this template and more importantly my clients are blown away by it.</p>
                                    <h3>Cillian Metcalfe</h3>
                                    <span>Graphic Designer</span>
                                </div>
                            </div>
                            <div class="swiper-slide flex-center">
                                <div class="client-img">
                                    <img src="./public/images/15.jpg" alt="">
                                </div>
                                <div class="client-datails">
                                    <p>These people really know what they are doing! Great customer support availability and supperb kindness. I am very happy that I've purchased this liscense!!!</p>
                                    <h3>Kianna Baird</h3>
                                    <span>App Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact section" id="contact">
        <div class="container flex-center">
            <h1 class="section-title-01">Contact US</h1>
            <h2 class="section-title-02">Contact US</h2>
            <div class="content">
                <div class="content-left">
                    <h2>You Can Message for US</h2>
                    <ul class="contact-list">
                        <li>
                            <h3 class="item-title"><i class="fas fa-envelope"></i> Phone</h3>
                            <span>+963 938-729-667</span>
                        </li>
                        <li>
                            <h3 class="item-title"><i class="fas fa-phone"></i> Email Address</h3>
                            <span><a href="mailto:ar.alrihawi@gmail.com">ar.alrihawi@gmail.com</a></span>

                        </li>
                        <li>
                            <h3 class="item-title"><i class="fas fa-map-marker-alt"></i> Official Address</h3>
                            <span>Damascus. Syria, Middle East</span>
                        </li>
                    </ul>
                </div>
                <div class="contact-right">
                    <p>We always open to discussing proposals<br><span>members or clients.</span></p>
                    <form action="index.php" method="POST" class="contact-form">
                        <div class="first-row">
                            <input type="text" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="second-row">
                            <input type="email" name="email" id="email" placeholder="Email">
                            <input type="text" name="subject" id="subject" placeholder="Subject">
                        </div>
                        <div class="thrid-row">
                            <textarea name="message" id="message" rows="7" placeholder="Message"></textarea>
                        </div>
                        <button class="btn" type="submit" name="submit" value="send">Send Message <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- footer -->
    <?php include './inc/footer.php' ?>
    
    <!-- external scripts -->
    <script src="./public/js/swiper-bundle.min.js"></script>
    <script src="./public/js/main.js"></script>
    <script>
        function loadData() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "index.php", true);
        xhttp.send();
        }
    </script>

</body>
</html>
<?php
    mysqli_close($conn);
?>