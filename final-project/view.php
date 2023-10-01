<?php

include './api/conn.php';
include './api/request.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <script src="https://unpkg.com/scrollreveal"></script>
    <title>View Services</title>
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

    <header>
        <div class="nav-bar">
            <a href="./index.php" class="logo">🌎 Home Page</a>
            <div class="navigation">
                <div class="nav-items">
                    <div class="nav-close-btn"></div>
                    <a href="./addService.php">➕ Add Service</a> 
                </div>
            </div>
            <div class="nav-menu-btn"></div>
        </div>
    </header>

    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>

    <!-- portfolio section -->
    <section class="portfolio section" id="portfolio">
        <div class="container flex-center">
            <h1 class="section-title-01">View Service</h1>
            <h2 class="section-title-02">View Service</h2>
            <div class="content">

            <?php
                $sql_img = "SELECT image FROM services";
                $res_img = mysqli_query($conn, $sql_img);

                $sql_title = "SELECT title FROM services";
                $res_title = mysqli_query($conn, $sql_title);

                $sql_category = "SELECT category FROM services";
                $res_category = mysqli_query($conn, $sql_category);

                $sql_description = "SELECT description FROM services";
                $res_description = mysqli_query($conn, $sql_description);
            ?>
            <?php while ($images = mysqli_fetch_assoc($res_img)) {
                         $title = mysqli_fetch_assoc($res_title);
                         $category = mysqli_fetch_assoc($res_category);
                         $description = mysqli_fetch_assoc($res_description); ?>

            <div class="portfolio-list">
                <div class="service-card">
                    <div class="img-card">
                        <img src="imageServices/<?=$images['image']?>">
                    </div>
                    <div class="service-info">
                        <p class="service-category"><?php echo htmlspecialchars($category['category']); ?></p>
                        <strong class="service-title">
                            <span><?php echo htmlspecialchars($title['title']); ?></span>
                        </strong>
                        <a href="#request" class="request-now">request Now</a>
                    </div>  
                </div>
                <div class="portfolio-model flex-center">
                    <div class="portfolio-model-body">
                        <i class="fas fa-times portfolio-close-btn"></i>
                        <h3><?php echo htmlspecialchars($title['title']); ?></h3>
                        <img src="imageServices/<?=$images['image']?>">
                        <p><?php echo htmlspecialchars($description['description']); ?><br/> ipsum dolor, sit amet consectetur adipisicing elit. Cumque reprehenderit debitis ratione cupiditate, blanditiis fugit molestias. Unde dolores ea rerum ad voluptatibus cumque officiis eligendi.</p>
                    </div>
                </div>
            </div>


            <?php }?>

        </div>
    </div>


        <!-- get-in-touct -->
    <section id="request">
        <div class="get-in-touch sub-section">
            <div class="container-req">
                <div class="content flex-center-req">
                    <div class="contact-card-req flex-center-req">
                        <div class="title">
                            <h4>Let's Talk</h4>
                            <h3>About Your</h3>
                            <h2>Next Request</h2>
                        </div>

                    <form action="view.php" method="POST" class="contact-form">  
                        <div class="first-row">
                            <input type="text" name="name-req" class="name-req" id="name-req" placeholder="Enter Your Name">
                            <input type="email" name="email-req" class="email-req" id="email-req" placeholder="Enter Your Email">
                            <input type="text" name="title-req" class="title-req" id="title-req" placeholder="Enter the title service">
                        </div>
                        <button class="btn" type="submit" name="submit_req" value="send">Add Order  <i class="fas fa-paper-plane"></i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
 <?php include './inc/footer.php' ?>



 <script src="./src/theme.js"></script>
 <script src="./src/service.js"></script>


</body>
</html>

<?php
    mysqli_close($conn);
?>

