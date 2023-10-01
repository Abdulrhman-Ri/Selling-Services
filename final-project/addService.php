<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Add Service</title>
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
            <a href="./index.php" class="logo"><- BACK</a>
            <div class="navigation">
                <div class="nav-items">
                    <div class="nav-close-btn"></div>
                    <a href="./view.php">💻 View</a> 
                </div>
            </div>
            <div class="nav-menu-btn"></div>
        </div>
    </header>

    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>

<section class="contact section" id="contact">
    <div class="container flex-center">
    <h1 class="section-title-01">Add Service</h1>
    <h2 class="section-title-02">Add Service</h2>
        <div class="add">
            <form action="./upload.php" method="POST" class="add-form" enctype="multipart/form-data">
                <div class="add-image">
                    <label class="text-add">Add Image</label>
                    <input type="file" name="my_image" class="file"> 
                </div>
                <div class="second-row">     
                    <input type="text" name="title" id="title" placeholder="Title" class="title">
                    <input type="text" name="category" id="category" placeholder="Category" class="category">
                </div>
                <div class="thrid-row">
                    <textarea name="description" id="description" rows="5" placeholder="Description"></textarea>
                </div>
                <button class="btn" type="submit" name="submit" value="Upload">➕ Add Service</button>
            </form>
        </div>
    </div>
</section>

<?php include './inc/footer.php' ?>


<script src="./src//theme.js"></script>


</body>
</html>

