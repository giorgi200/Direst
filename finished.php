<!DOCTYPE html>
<html>
<?php require_once('layout/head.php'); ?>
<body>    
	<?php require_once('layout/header.php'); ?>
	<main class="container mx-auto finished">
		<!--========-->
		<h1 class="finish-header">Order finished</h1>
		<!--========-->
		<div class="finish-res d-flex align-items-center">
			<p class="suc">Success!</p>
			<p class="success-res">The order was successfully sent to the restaurant</p>
		</div>
		<!--========-->
		<p class="you-confirm">You will get confirmation about an order!</p>
		<!--========-->
		<h4 class="order">Order details</h4>
		<!--========-->
		<p class="det-ord">
			Restaurant one <br>
			21-11-2018, 14:00 <br>
			4 persons <br>
			<br>
			2 mushroom cream soup, 2 pelmeni <br>
			kotanshi, some more dish, one more dish<br>
		</p>
		<!--========-->
		<p class="we-wo">
			We are working as a demo and apologise for anticipative problems. Please save our number and call us, If problem occures during the process.
		</p>
		<!--========-->
		<div class="tele-con d-flex justify-content-between">
			<img src="assets/img/to.svg">
			<p class="tele-no">(+995) 555 234599</p>
		</div>
		<!--========-->
	</main>
	<?php require_once('layout/footer.php'); ?>
</body>
</html>