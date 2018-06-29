<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php'); ?>  
<body>
    <?php require_once('layout/header.php'); ?>  
    <div class="search-now">
        <form action="#" class="row container s-form-dish justify-content-start">
            <div class="input-group input-calendar-dish ins-dish">
                <input type="text" id="datepicker-dish" placeholder="When"  class=" form-control d-flex align-items-center">
                <div class="input-group-prepend" id="back-of-calendar-dish"></div>
            </div>
            <select id="speed-dish">
                <option disabled selected>Guests</option>
                <option>10 Guests</option>
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
        </form>
    </div>
    <main class="container">            
        <section class="commerc dish-com">

            <div class="prod-sec Dishes">
                <h1 class="Dishes-header col-10 col-md-12 mx-auto">Featured Dishes</h1>
                <h2 class="result col-10 col-md-12 mx-auto">150 results</h2>
                <div class="row product-grid row">
                <?php for($ra = 0; $ra < 9; $ra++){ ?>

                    <div class="prod col-xl-4 col-md-6 col-10">
                        <div class="prod-img" style="background:url('assets/img/sorella-clapham-5.jpg')"></div>
                        <div class="nm-price d-flex justify-content-between">
                            <h1>Dish Name</h1>
                            <p>$$$</p>
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
</body>
</html>