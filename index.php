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

    <!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

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
include 'faq.php'; /*Daniel */
?>



<?php
include 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
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




        function showMenu() {
            $("body").animate({
                'margin-left' : "-250px"
            }, 600);
            $(".burgerMenu").animate({
                'width' : "250px"
            }, 600);

            $(".threeIcons").animate({
                'margin-left' : "-=200px"
            }, 600);

            $(".burgerBarContainer").animate({
                'margin-left' : "+=250px"
            }, 600);

            $(".burgerMenu a").fadeIn(1000);

            $(".fullScreenClickDetect").fadeIn(600);

            $(".burgerBar").addClass('cross');

            burgermenuShown = true;
        }


        function hideMenu() {
            $("body").animate({
                'margin-left' : "0"
            }, 600);

            $(".burgerMenu a").fadeOut(300);
            $(".burgerMenu").animate({
                'width' : "0"
            }, 600);

            $(".threeIcons").animate({
                'margin-left' : "+=150px"
            }, 600);

            $(".burgerBarContainer").animate({
                'margin-left' : "0"
            }, 600);

            $(".fullScreenClickDetect").fadeOut(400);

            $(".burgerBar").removeClass('cross');

            burgermenuShown = false;
        }

        var burgermenuShown = false;

        $(".burgerBarContainer").click(function() {
            if(burgermenuShown === false)
            {
                showMenu();
            } else {
                hideMenu();
            }
        });

        $(".fullScreenClickDetect").click(function() {
            if(burgermenuShown === true)
            {
                hideMenu();
            }
        });
    });
</script>


<script>

    $(function () {

    });

</script>
</body>
</html>