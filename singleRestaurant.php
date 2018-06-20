<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php'); ?>  
<body>
    <?php require_once('layout/header.php'); ?> 
    <main class="container single-dish">
        <section class="dish-com d-flex justify-content-between">
            <div class="img-sec">
                <img src="assets/img/sorella-clapham-5.jpg" alt="">
            </div>
            <div class="details-sec">
                <div class="d-flex  justify-content-between pre-head">
                    <h1>Restaurant name</h1>
                    <p class="lari">$$$</p>
                </div>
                <p class="single-result">Georgian Traditional</p>
                <p class="single-res">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="call-dir d-flex justify-content-between">
                        <!-- call -->
                        <div class="call-loc d-flex">
                            <img src="assets/img/to.svg" alt="">
                            <p class="con-des">Call</p>   
                        </div>
                        <!-- Directions -->
                        <div class="call-loc d-flex">
                            <img src="assets/img/to.svg" alt="">
                            <p class="con-des">Directions</p>   
                        </div>
                </div>
                <!-- adress -->
                <div class="d-flex loc-adress">
                    <img src="assets/img/to.svg" alt="">
                    <p class="adress">Vakhtang gorgasali str. 17</p>
                </div>
                <!-- DISHES -->
                <div class="dish-list">
                    <h1 class="dish-list-header">Dishes</h1>
                    <?php require_once('layout/dishesdd.php'); ?>  
                </div>
            </div>
        </section>
    </main>
    <?php require_once('layout/footer.php'); ?>  
    <?php require_once('layout/scripts.php'); ?> 
</body>
</html>