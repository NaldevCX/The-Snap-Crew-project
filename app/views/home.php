<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= ROOT ?>/vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet" >
    <link href="<?= ROOT ?>/assets/css/styles.css" rel="stylesheet">
    <title><?= WEBSITE_NAME ?></title>
</head>
<body>
<?php include "commons/header.php" ?>
<div class="homepage-container">
<div class="head-img-container ">
    <img src= "<?= ASSETS ?>/img/home-page/pexels-zukiman-mohamad-22185.jpg" class="home-top-img img-fluid" alt="homepage">
    <div class="top-img-text-bold">Welcome to<br> Snap Crew</div>
    <div class= "top-img-text-regular">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>
    incididunt ut labore et dolore magna aliqua. Volutpat consequat mauris nunc <br>
    congue nisi vitae. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam. <br> 
</div>
</div>


<div class="about-us-container">
<img src= "<?= ASSETS ?>img\home-page\pexels-ralph-rabago-3214692.jpg" class="home-about-us-img column-h-row" alt="Picture of Girl With Camera">
<img src= "<?= ASSETS ?>img\home-page\pexels-ralph-rabago-3214692.jpg" class="home-about-us-img-shdw" alt="Picture of Girl With Camera">
<div class="about-us column-h-row">
<div class="description-header-bold-b">About Us</div>
<div class="description-regular-b"><p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat consequat mauris nunc congue nisi vitae. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam.

</p></div>
</div>
</div>
</div>

<div class="our-services-container">
    <div class= "column-h-column">
    <div class="description-header-bold-y">Our services</div>
    <div class="description-regular-y"><p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat consequat mauris nunc congue nisi vitae. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam.
</p></div>
    </div>
    <div class= "services-column-h-row">
    <img src= "<?= ASSETS ?>\img\home-page\pexels-jc-romero-3236765.jpg" class="our-services-img column-h-row" alt="Picture of Girl Portrait">
    <img src= "<?= ASSETS ?>\img\home-page\pexels-athena-2983401.jpg" class="our-services-img column-h-row" alt="Picture of a Camera">
    <img src= "<?= ASSETS ?>\img\home-page\pexels-avonne-stalling-3916019.jpg" class="our-services-img column-h-row" alt="Picture of a Wed couple">
    <div class="services-description-header-bold-b">Portrait</div>
    <div class="services-description-header-bold-b">Equipment</div>
    <div class="services-description-header-bold-b">Wedding</div>
    </div>

</div>


<div class="why-us-container">
<img src= "<?= ASSETS ?>img\home-page\pexels-ralph-rabago-3214692.jpg" class="home-about-us-img column-h-row" alt="Picture of Girl With Camera">
<img src= "<?= ASSETS ?>img\home-page\pexels-ralph-rabago-3214692.jpg" class="home-about-us-img-shdw-l" alt="Picture of Girl With Camera">
<div class="about-us column-h-row">
<div class="description-header-bold-b-l">Why Us</div>
<div class="description-regular-b-l"><p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat consequat mauris nunc congue nisi vitae. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam.
</p></div>
</div>
</div>


<?php include "commons/footer.php" ?>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?= ROOT ?>/vendor/twbs/bootstrap/dist/js/bootstrap.js" ></script>
<script src="<?= ASSETS ?>/js/popper.min.js" ></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->

</body>
</html>