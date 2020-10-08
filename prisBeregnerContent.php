
<section>
    <h1 class="py-5 text-center text-orange balooFont m-0">Prisberegner</h1>

    <div class="productCard mx-4 mb-4 py-3 px-3 bg-lightGrey border-darkGrey">
        <h3 class="balooFont text-blue pb-2">Haj</h3>
        <i class="fas fa-trash-alt ml-auto"></i>

        <div class="productImage productImg1"></div>

        <div class="priceContainer d-flex flex-wrap align-self-end">
            <p class="ml-auto mb-0">Vælg antal</p>

            <div class="inputContainer">
                <input class="text-blue nr1" type="text" value="125">
                <i class="fas fa-pen"></i>
            </div>

            <div class="w-100 d-flex justify-content-end align-items-end">
                <p class="price mb-0">142.10 DKK</p><p class="mb-1">&nbsp;pr. stk.</p>
            </div>
        </div>
    </div>

    <div class="productCard mx-4 mb-4 py-3 px-3 bg-lightGrey border-darkGrey">
        <h3 class="balooFont text-blue pb-2">Krokodille</h3>
        <i class="fas fa-trash-alt ml-auto"></i>

        <div class="productImage productImg2"></div>

        <div class="priceContainer d-flex flex-wrap align-self-end">
            <p class="ml-auto mb-0">Vælg antal</p>

            <div class="inputContainer">
                <input class="text-blue nr2" type="text" value="125">
                <i class="fas fa-pen"></i>
            </div>

            <div class="w-100 d-flex justify-content-end align-items-end">
                <p class="price mb-0">137,42 DKK</p><p class="mb-1">&nbsp;pr. stk.</p>
            </div>
        </div>
    </div>

    <div class="productCard mx-4 mb-4 py-3 px-3 bg-lightGrey border-darkGrey">
        <h3 class="balooFont text-blue pb-2">Pingvin</h3>
        <i class="fas fa-trash-alt ml-auto"></i>

        <div class="productImage productImg3"></div>

        <div class="priceContainer d-flex flex-wrap align-self-end">
            <p class="ml-auto mb-0">Vælg antal</p>

            <div class="inputContainer">
                <input class="inputNumber text-blue nr3" type="text" value="125">
                <i class="fas fa-pen"></i>
            </div>

            <div class="w-100 d-flex justify-content-end align-items-end">
                <p class="price mb-0">140.99 DKK</p><p class="mb-1">&nbsp;pr. stk.</p>
            </div>
        </div>
    </div>




</section>



<script>

    // document.querySelectorAll(".inputContainer > .fa-pen").forEach((e) => {
    //     e.addEventListener('click', () => {
    //        let siblingInput = e.previousElementSibling;
    //        siblingInput.click();
    //     })
    // });

    document.querySelectorAll(".inputContainer > .fa-pen").forEach((e) => {
        e.addEventListener('click', () => {
            document.querySelector(".inputNumber").click();
        })
    });


    console.log(nextSibling);
    nextSibling = nextSibling.nextElementSibling;
</script>
