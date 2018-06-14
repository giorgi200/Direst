<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php'); ?>  
<body>
    <?php require_once('layout/header.php'); ?>  
    <div class="search-now">
                
    </div>
    <main class="container">            
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
</body>
</html>