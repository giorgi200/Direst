<html>
<?php require_once('layout/head.php'); ?>
<body>    
	<?php require_once('layout/header.php'); ?>
	<main class="client-table container">
		<section class="my-table">
			<h1 class="main-h1">My table</h1>
			<h2 class="res-name">Restaurant name</h2>
			<div class="sell-sec">
				<div class="selected align-items-center ">
					<div class="sel-vis justify-content-between align-items-center d-flex">
						<div class="d-flex">
							<img src="assets/img/download.jpeg" class="m-img" alt="">
							<div class="sel-head align-items-center">                
								<div class="selected-child d-flex">
									<h1 class="select-h1">Mushroom cream Soup</h1>
									<p class="selected-des"> Short description goes here</p>
								</div>
							</div>
						</div>
						<p class="sel-lari">₾ 15</p>
						<button class="x-close btn">
							<img src="assets/img/to.svg" alt="to">
						</button>
						<button class="sel-remove btn">Remove</button>
					</div>
				</div>
				<div class="selected align-items-center ">
					<div class="sel-vis justify-content-between align-items-center d-flex">
						<div class="d-flex">
							<img src="assets/img/download.jpeg"  class="m-img" alt="">
							<div class="sel-head align-items-center">                
								<div class="selected-child d-flex">
									<h1 class="select-h1">Mushroom cream Soup</h1>
									<p class="selected-des"> Short description goes here</p>
								</div>
							</div>
						</div>
						<p class="sel-lari">₾ 15</p>
						<button class="x-close btn">
							<img src="assets/img/to.svg" alt="to">
						</button>
						<button class="sel-remove btn">Remove</button>
					</div>
				</div>
				<div class="selected align-items-center ">
					<div class="sel-vis justify-content-between align-items-center d-flex">
						<div class="d-flex">
							<img src="assets/img/download.jpeg"  class="m-img" alt="">
							<div class="sel-head align-items-center">                
								<div class="selected-child d-flex">
									<h1 class="select-h1">Mushroom cream Soup</h1>
									<p class="selected-des"> Short description goes here</p>
								</div>
							</div>
						</div>
						<p class="sel-lari">₾ 15</p>
						<button class="x-close btn">
							<img src="assets/img/to.svg" alt="to">
						</button>
						<button class="sel-remove btn">Remove</button>
					</div>
				</div>
			</div>
			<p class="total-table">Total <strong> 100 Gel</strong></p>
			<textarea id="send-comment" placeholder="Your comments to the restaurant"></textarea>
			<button class="btn send-request">Send order request</button>
		</section>
	</main>
	<?php require_once('layout/footer.php'); ?>
	<?php require_once('layout/scripts.php'); ?>
</body>
</html>