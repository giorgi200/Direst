<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php'); ?>  
<body>
    <?php require_once('layout/header.php'); ?>  
    <main >
        <section class="hero" >
            <div class="container con1 position-relative">
                <div class="filter position-absolute row">
                    <div class="fil-btn ">
                        <a href="#">Dishes</a>
                        <a href="#">Restaurants</a>
                        <div class="line">
                            <div class="line-br"></div>
                        </div> 
                    </div> 
                    <form action="#" class="row col-12 s-form">
                        <div class="input-group input-calendar ins">
                            <div class="input-group-prepend" id="back-of-calendar">
                                <!-- <span class="input-group-text" id="back-of-calendar"> </span> -->
                            </div>
                            <form action="#">
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
            </div>
        </section>
        <?php require_once("layout/modal.php"); ?>       
        <section class="commerc">

            <div class="product-sec">
                <div class="prod-sec">
                    <h1 class=" product-header col-10 col-md-12 mx-auto">Featured Dishes</h1>
                    <h2 class="subheader col-10 col-md-12 mx-auto">Staff Picks</h2>
                    <div class="row product-grid row">
                    <?php for($rp = 0; $rp < 3; $rp++){ ?>

                        <div class="prod col-xl-4 col-md-6 col-10 ">
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
                    <h2 class="subheader col-10 col-md-12 mx-auto">Recently Added</h2>
                    <div class="row product-grid row">
                        <?php for($ra = 0; $ra < 3; $ra++){ ?>
                            <div class="prod col-xl-4 col-md-6 col-10 ">
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
                    <div class="rm-f">
                        <a href="Dishes.php" class="rm col-md-12 col-10 mx-auto">All Dishes ></a>
                    </div>
                </div>
                <div class="res-sec">
                    <h1 class="product-header mr-60 col-10 col-md-12 mx-auto">Featured Restaurants</h1>
                    <h2 class="subheader col-10 col-md-12 mx-auto">Recently Added</h2>
                    <div class="row product-grid row">
                    <?php for($ra = 0; $ra < 3; $ra++){ ?>

                        <div class="prod col-xl-4 col-md-6 col-10 ">
                            <div class="prod-img" style="background:url('assets/img/Optimizar-ventas-en-restaurante.jpg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>$$$</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                    <?php } ?>
                    </div>
                    <div class="rm-f col-md-12 col-10 mx-auto">
                        <a href="Restaurants.php" class="rm ">All Restaurants ></a>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once('layout/footer.php'); ?>  
        <?php require_once('layout/scripts.php'); ?> 
    </body>
    </html>