<!DOCTYPE html>

<html>

<head>
</head>

<body>

<div class="faqWrapWrap">
<div class="faqcontainer">
    <h2 class="blue">De hurtige FAQ</h2>

    <div class="pluniverse">
        <div class="faqquestion">
            <div class="faqImgWrap"> 
                <img src="img/minusImg.png" alt="minus">
            </div>
            <h2 class="orange">Hvad er Pluniverse?</h2>
        </div>
        <p class="visible">Pluniverse ApS er en dansk bamse design- & produktionsvirksomhed, som beskæftiger sig med at lave sjove og unikke plys dyrs bamser til alle formål og aldre.</p>
    </div>

    <div class="plysdyr">
        <div class="faqquestion">
            <div class="faqImgWrap"> 
                <img src="img/plusImg.png" alt="minus">
            </div>
            <h2 class="orange">Hvad er Plysdyr?</h2>
        </div>
        <p class="faqhidden visible">Pluniverse ApS er en dansk bamse design- & produktionsvirksomhed, som beskæftiger sig med at lave sjove og unikke plys dyrs bamser til alle formål og aldre.</p>
    </div>

    <div class="safety">
        <div class="faqquestion">
            <div class="faqImgWrap"> 
                <img src="img/plusImg.png" alt="minus">
            </div>
            <h2 class="orange">Produktion & Sikkerhed</h2>
        </div>
        <p class="faqhidden visible">Pluniverse ApS er en dansk bamse design- & produktionsvirksomhed, som beskæftiger sig med at lave sjove og unikke plys dyrs bamser til alle formål og aldre.</p>
    </div>

    <div class="maalgruppe">
        <div class="faqquestion">
            <div class="faqImgWrap"> 
                <img src="img/plusImg.png" alt="minus">
            </div>
            <h2 class="orange">Hvilken målgruppe henvender produkterne sig til?</h2>
        </div>
        <p class="faqhidden visible">Pluniverse ApS er en dansk bamse design- & produktionsvirksomhed, som beskæftiger sig med at lave sjove og unikke plys dyrs bamser til alle formål og aldre.</p>
    </div>

    <div class="ownteddy">
        <div class="faqquestion">
            <div class="faqImgWrap"> 
                <img src="img/plusImg.png" alt="minus">
            </div>
            <h2 class="orange">Kan jeg designe min egen bamse?</h2>
        </div>
        <p class="faqhidden visible">Pluniverse ApS er en dansk bamse design- & produktionsvirksomhed, som beskæftiger sig med at lave sjove og unikke plys dyrs bamser til alle formål og aldre.</p>
    </div>

    <div class="mission">
        <div class="faqquestion">
            <div class="faqImgWrap"> 
                <img src="img/plusImg.png" alt="minus">
            </div>
            <h2 class="orange">Pluniverses Mission & Vision</h2>
        </div>
        <p class="faqhidden visible">Pluniverse ApS er en dansk bamse design- & produktionsvirksomhed, som beskæftiger sig med at lave sjove og unikke plys dyrs bamser til alle formål og aldre.</p>
    </div>

    <div class="charity">
        <div class="faqquestion faqbottom">
            <div class="faqImgWrap"> 
                <img src="img/plusImg.png" alt="minus">
            </div>
            <h2 class="orange">Velgørenhed</h2>
        </div>
        <p class="faqhidden visible bottomQuestion">Pluniverse ApS er en dansk bamse design- & produktionsvirksomhed, som beskæftiger sig med at lave sjove og unikke plys dyrs bamser til alle formål og aldre.</p>
    </div>






</div>
</div>

<script>

    $(".pluniverse .faqquestion").click(function(){
        $(".pluniverse p").slideToggle();
        
        let src = ($(".pluniverse .faqquestion img").attr("src") === "img/minusImg.png")
        ? "img/plusImg.png"
        : "img/minusImg.png";
        $(".pluniverse .faqquestion img").attr( "src", src );
    });

    $(".plysdyr .faqquestion").click(function(){
        $(".plysdyr p").slideToggle();
        $(".plysdyr p").toggleClass("faqhidden");
        
        let src = ($(".plysdyr .faqquestion img").attr("src") === "img/minusImg.png")
        ? "img/plusImg.png"
        : "img/minusImg.png";
        $(".plysdyr .faqquestion img").attr( "src", src );
    });

    $(".safety .faqquestion").click(function(){
        $(".safety p").slideToggle();
        $(".safety p").toggleClass("faqhidden");
        
        let src = ($(".safety .faqquestion img").attr("src") === "img/minusImg.png")
        ? "img/plusImg.png"
        : "img/minusImg.png";
        $(".safety .faqquestion img").attr( "src", src );
    });




    $(".maalgruppe .faqquestion").click(function(){
        $(".maalgruppe p").slideToggle();
        $(".maalgruppe p").toggleClass("faqhidden");
        
        let src = ($(".maalgruppe .faqquestion img").attr("src") === "img/minusImg.png")
        ? "img/plusImg.png"
        : "img/minusImg.png";
        $(".maalgruppe .faqquestion img").attr( "src", src );
    });

    $(".ownteddy .faqquestion").click(function(){
        $(".ownteddy p").slideToggle();
        $(".ownteddy p").toggleClass("faqhidden");
        
        let src = ($(".ownteddy .faqquestion img").attr("src") === "img/minusImg.png")
        ? "img/plusImg.png"
        : "img/minusImg.png";
        $(".ownteddy .faqquestion img").attr( "src", src );
    });

    $(".mission .faqquestion").click(function(){
        $(".mission p").slideToggle();
        $(".mission p").toggleClass("faqhidden");
        
        let src = ($(".mission .faqquestion img").attr("src") === "img/minusImg.png")
        ? "img/plusImg.png"
        : "img/minusImg.png";
        $(".mission .faqquestion img").attr( "src", src );
    });

    $(".charity .faqquestion").click(function(){
        $(".charity p").slideToggle();
        $(".charity p").toggleClass("faqhidden");
        
        let src = ($(".charity .faqquestion img").attr("src") === "img/minusImg.png")
        ? "img/plusImg.png"
        : "img/minusImg.png";
        $(".charity .faqquestion img").attr( "src", src );
    });


</script>

</body>
</html>