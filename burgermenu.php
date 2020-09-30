<!DOCTYPE html>

<html>

<head>

</head>

<body>

<div class="siteContent"></div>

<div class="burgerMenu">

    <div class="menuLinkContainer">
    <a class="menuLink"> Produkter </a>

    <a class="menuLink"> Design din egen </a>

    <a class="menuLink"> Om os </a>

    <a class="menuLink"> Kontakt os </a>
    </div>
</div>


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
    });
</script>
</body>
</html>