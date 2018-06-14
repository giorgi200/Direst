<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php'); ?>  
<body>
    <?php require_once('layout/header.php'); ?>  
    <main class="container-fluid">
        <section class="hero" style="background:url('assets/img/header-bg-desktop.png')">
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
                        
                        <div class="input-calendar ins d-flex align-items-center">
                            <img src="assets/img/to.svg" alt="input-calendar">
                            <p class="in-label">Wed, Feb 10</p>
                        </div>

                        <div class="input-guests ins d-flex align-items-center">
                            <img src="assets/img/to.svg" alt="input-guest">
                            <p class="in-label">10 Guests</p>
                        </div>
                        
                        <button class="btn res-search-btn">Search</button>
                    
                    </form>
                </div>
            </div>
        </section>
        <section class="commerc">

            <div class="product-sec">
                <div class="prod-sec">
                    <h1 class="product-header">Featured Dishes</h1>
                    <h2 class="subheader">Staff Picks</h2>
                    <div class="row product-grid row">
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/download.jpeg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>₾ 15</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/images.jpeg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>₾ 15</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/download.jpeg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>₾ 15</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                    </div>

                    <h2 class="subheader">Recently Added</h2>
                    <div class="row product-grid row">
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/download.jpeg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>₾ 15</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/images.jpeg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>₾ 15</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/download.jpeg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>₾ 15</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                    </div>
                    <div class="rm-f">
                        <a href="#" class="rm">All Dishes ></a>
                    </div>
                </div>
                <div class="res-sec">
                    <h1 class="product-header mr-60">Featured Restaurants</h1>
                    <h2 class="subheader">Recently Added</h2>
                    <div class="row product-grid row">
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/Optimizar-ventas-en-restaurante.jpg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>$$$</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/sorella-clapham-5.jpg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>$$$</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                        <div class="prod col-4">
                            <div class="prod-img" style="background:url('assets/img/Optimizar-ventas-en-restaurante.jpg')"></div>
                            <div class="nm-price d-flex justify-content-between">
                                <h1>Dish Name</h1>
                                <p>$$$</p>
                            </div>
                            <p class="short-des">Dish Short Description</p>   
                            <strong class="res-name">At Restaurant One</strong> 
                        </div>
                    </div>
                    <div class="rm-f">
                        <a href="#" class="rm">All Restaurants ></a>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once('layout/footer.php'); ?>  
        <?php require_once('layout/scripts.php'); ?> 
    </body>
    </html>