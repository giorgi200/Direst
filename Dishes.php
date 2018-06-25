<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php'); ?>  
<body >
    <?php require_once('layout/header.php'); ?>  
    <div class="search-now">
        <form action="#" class="row col-12 s-form">
            <div class="input-group input-calendar ins">
                <div class="input-group-prepend" id="back-of-calendar">
                    <!-- <span class="input-group-text" id="back-of-calendar"> </span> -->
                </div>
                <input type="text" id="datepicker" class=" form-control d-flex align-items-center">
            </div>
            <select id="speed">
                <option selected="">10 Guests</option>
                <option>9 Guests</option>
                <option>8 Guests</option>
                <option>7 Guests</option>
                <option>6 Guests</option>
                <option>5 Guests</option>
                <option>4 Guests</option>
                <option>3 Guests</option>
                <option>2 Guests</option>
                <option>1 Guests</option>
            </select>
            <button class="btn res-search-btn">Search</button>
        </form>
    </div>
    <main class="container"> 
        <section class="my-modal " id="chmodal">
            <div class="types-of-dishes mx-auto d-flex">
                <h2 class="type-header mx-auto">Choose dish type</h2>
                <img src="assets/img/to.svg" class="close-type">
                <!-- Dishes -->
                <?php for($rl = 0; $rl < 4; $rl++){ ?>
                    <div class="prod mx-auto">
                        <div class="prod-img" style="background:url('assets/img/download.jpeg')"></div>
                        <div class="nm-price d-flex justify-content-between">
                            <h1>Dish Name</h1>
                            <p>₾ 15</p>
                        </div>
                        <p class="short-des">Dish Short Description</p>  
                        <p class="shdf">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s. 
                        </p>
                    </div>
                <?php } ?>
            </div>
        </section>           
        <section class="commerc dish-com">

            <div class="prod-sec Dishes">
                <h1 class="Dishes-header">Featured Dishes</h1>
                <h2 class="result">150 results</h2>
                <div class="row product-grid row">
                <?php for($ra = 0; $ra < 9; $ra++){ ?>
                    <div class="prod col-4">
                        <div class="prod-img" style="background:url('assets/img/download.jpeg')"></div>
                        <div class="nm-price d-flex justify-content-between">
                            <h1>Dish Name</h1>
                            <p>₾ 15</p>
                        </div>
                        <p class="short-des">Dish Short Description</p>   
                        <strong class="res-name">At Restaurant One</strong> 
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>
        <div class="pagination d-flex justify-content-center">
            <a href="#">&lt; Prev</a>
            <a href="#">Next &gt;</a>
        </div>
    </main>
    <?php require_once('layout/footer.php'); ?>  
    <?php require_once('layout/scripts.php'); ?> 
    <script>
        const prod = document.getElementsByClassName('prod');
        const closeImg = document.querySelector('.close-type');
        const modal = document.getElementById('chmodal');
        
        for (let i = 0; i < prod.length; i++) {
            prod[i].addEventListener('click', openTypes);
        }
        closeImg.addEventListener('click', closeTypes)

        function openTypes() {
            $('#chmodal').show();
            $('body').css({"overflow-y": "hidden"});
        }
        function closeTypes() {
            $('#chmodal').hide();
            $('body').css({"overflow-y": "auto"});
        }

    </script>
</body>
</html>