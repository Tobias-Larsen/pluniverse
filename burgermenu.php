<div class="d-md-none fullScreenClickDetect"></div>
<div class="d-md-none burgerMenu">

    <div class="menuLinkContainer">

    <a href="produkter.php" class="menuLink"> Produkter </a>

    <a href="#" class="menuLink"> Design din egen </a>

    <a href="omos.php" class="menuLink"> Om os </a>

    <a href="index.php#kontakt" class="menuLink"> Kontakt os </a>
    </div>
</div>



<script>
    $(function () {

        function showMenu() {
            $("body").animate({
                'margin-left' : "-250px"
            }, 300);
            $(".burgerMenu").animate({
                'width' : "250px"
            }, 300);

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
            }, 400);

            $(".burgerMenu a").fadeOut(300);
            $(".burgerMenu").animate({
                'width' : "0"
            }, 400);

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

        $(".menuLink").click(function() {
            if(burgermenuShown === true)
            {
                hideMenu();
            }
        });
    });
</script>