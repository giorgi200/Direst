<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php'); ?>  
<body>
    <?php require_once('layout/header.php'); ?> 
    <main class="container single-dish">
        <section class="dish-com d-flex justify-content-between">
            <div class="img-sec">
                <img src="assets/img/download.jpeg" alt="">
            </div>
            <div class="details-sec">
                <div class="d-flex  justify-content-between pre-head">
                    <h1>Mushroom cream soup</h1>
                    <p class="lari">₾ 15</p>
                </div>
                <p class="single-result">150 results</p>
                <p class="single-res">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="single-size">
                    <h2 class="the-size">Size</h2>
                    <div class="single-choose d-flex justify-content-between align-items-center">
                        <div class="left-side d-flex align-items-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="single-radio" id="Small" class="customRadio custom-control-input">
                                <label class="custom-control-label" for="Small"></label>
                            </div> 
                            <div class="d-flex dificult">
                                <strong>Small</strong>
                                <p>14 cm</p>
                            </div>
                        </div>  
                        <p class="lari">₾ 15</p>
                    </div>
                    <div class="single-choose d-flex justify-content-between align-items-center">
                        <div class="left-side d-flex align-items-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="single-radio" id="Medium" class="customRadio custom-control-input">
                                <label class="custom-control-label" for="Medium"></label>
                            </div> 
                            <div class="d-flex dificult">
                                <strong>Medium</strong>
                                <p>14 cm</p>
                            </div>
                        </div>  
                        <p  class="lari">₾ 15</p>
                    </div>
                    <div class="single-choose d-flex justify-content-between align-items-center">
                        <div class="left-side d-flex align-items-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="single-radio" id="Large" class="customRadio custom-control-input">
                                <label class="custom-control-label" for="Large"></label>
                            </div>                           
                            <div class="d-flex dificult">
                                <strong>Large</strong>
                                <p >14 cm</p>
                            </div>
                        </div>  
                        <p class="lari">₾ 15</p>
                    </div>
                </div>
                <div class="Quantity">
                    <p class="the-size">Quantity</p>
                    <input type="number" id="Quantity" value="2">
                </div>
                <div class="send-single">
                    <a href="#"class="btn order">Order</a>
                    <a href="#" class="go-back">Go back</a>
                </div>
            </div>
        </section>
    </main>
    <?php require_once('layout/footer.php'); ?>  
    <?php require_once('layout/scripts.php'); ?> 
</body>
</html>