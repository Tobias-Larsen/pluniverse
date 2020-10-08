<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">


<?php
include 'imports.php'
?>

    <link href="css/stylesIndex.min.css" rel="stylesheet" type="text/css">
    <link href="css/forsidevalue.min.css" rel="stylesheet" type="text/css">

    <link href="css/forsidswiper.min.css" rel="stylesheet" type="text/css">

    <!-- Fade in Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->


<?php
include 'header.php';
?>

<?php
include 'burgermenu.php';
?>

<?php
include 'forsideSwiper.php';
?>

<?php
include 'forsidevalue.php'
?>

<?php
include 'faq.php'; /*Daniel */
?>




<?php
include 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script>

    AOS.init({
        // Global settings:
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them

    });

    $(function () {

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // Disable preloading of all images
            preloadImages: false,
            // Enable lazy loading
            lazy: true
        })
    });
</script>



<script>

    $(function () {

    });

</script>
</body>
</html>