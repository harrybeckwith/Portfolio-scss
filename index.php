<!DOCTYPE html>
<html lang="en">
<?php
$title = "Page tittle goes here ! change on each page !";
$metaDescription = 'Meta description goes here! change on each page!';
?>
<?php include('inc/head.php'); ?>
  <body>
    <?php include('inc/header.php'); ?>
    <div class="container">
        <div class="page-title">
            <h1 class="page-title__heading">Harry Beckwith</h1>
            <span class ='page-title__underline'></span>
            <h2 class="page-title__description"> Front-End Web Developer</h2>
        </div>
    </div>
    <div class ='main-image'>
        <div class ='container'>
            <img src ='img/main.png' alt = 'waves'>
        </div>
    </div>
    <div class ='portfolio'>
        <div class ='container'>
            <ul>
                <li class="portfolio__item">
                    <a href = 'unitedwoodproducts.php'>
                        <img src = 'img/portfolio/unitedWood.png' alt = 'United Wood Products '>
                        <h3> United Wood Products | Development </h3>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href = 'digiflex.php'>
                        <img src = 'img/portfolio/digiflex.png' alt = 'digiflex'>
                        <h3> Digiflex | Front-End </h3>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href = 'http://harryjbeckwith.co.uk/blog/'>
                        <img src = 'img/portfolio/blog.png' alt = 'blog'>
                        <h3> Blog | Latest info </h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
     <?php include('inc/footer.php'); ?>
  </body>
</html>