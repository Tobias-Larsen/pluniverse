<!DOCTYPE html>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/b1.jpg"></div>
        <div class="swiper-slide"><img src="img/b1.jpg"></div>
        <div class="swiper-slide"><img src="img/b2.jpg"></div>
        <div class="swiper-slide"><img src="img/b3.jpg"></div>
        <div class="swiper-slide"><img src="img/b4.png"></div>
        <div class="swiper-slide"><img src="img/b5.png"></div>
        <div class="swiper-slide"><img src="img/b6.png"></div>
        <div class="swiper-slide"><img src="img/b7.png"></div>
        <div class="swiper-slide"></div>
        <div class="swiper-slide"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


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
        })
    });
</script>
</html>