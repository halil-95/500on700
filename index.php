<?php include "header.php"; ?>

<div id="all_construct">
	<!-- *********************************************side_bar********************************************* -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="./image/1.png" alt="" width="45px" height="50px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link active" href="#">Link</a></li>
					<li class="nav-item"><a class="nav-link active">some</a></li>
					<li class="nav-item"><a class="nav-link active">code</a></li>	
					<li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- *********************************************slide********************************************* -->
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="./image/spider1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			</div>
			<div class="carousel-item">
				<img src="./image/iron1.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<!-- arrow -->
		<div class="h_a_button">
			<button class="carousel-control-prev h_arrow p-x-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<img src="./image/arrow.png "  class="h_ar" style="transform: rotateY(200deg);" alt="">
			</button>
			<button class="carousel-control-next h_arrow p-x-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<img src="./image/arrow.png" class="h_ar" alt="">
			</button>
		</div>
	</div>
	<!-- *********************************************after_slide********************************************* -->
	<div class="construct">
		<div class="mini_construct  after_slide_all">
			<div class="after_slide">
				<div>FAQ</div><br><hr class="h_hr" style="display: none;">
				<div>
					<hr><br><h1>Как добраться до музея?</h1><br>
					<p>В Национальный музей Республики Татарстан можно добраться общественным транспортом: 1)<br>	 «Станция метро «Кремлевская», а затем по направлению к Кремлю пройдя 5 минут пешком;</p><br><hr><br>
					<h1>Есть ли поблизости удобная парковка?</h1><br><hr><br>
					<h1>Можно ли воспользоваться аудиогидом?</h1><br><hr>
				</div>
				<div></div>
			</div>
		</div>
	</div>
	<!-- *********************************************news********************************************* -->
	<div class="construct news_all">
		<div class="mini_construct">
			<div class="news">	
				<h1 class="news_header">News</h1>
				<div class="news_galary">
					<ul class="news_galary_ul">
						<li class="news_ul_li">
							<img src="./image/1 (1).png" alt=""> 
							<div class="news_parag">
								<p>Заголовок</p>
								<p>В Национальный музей Республики Татарстан можно добраться общественным транспортом</p>
							</div>
						</li>
						<li class="news_ul_li">
							<img src="./image/1 (2).png" alt=""> 
							<div class="news_parag">
								<p>Заголовок</p>
								<p>В Национальный музей Республики Татарстан можно добраться общественным транспортом</p>
							</div>
						</li>
						<li class="news_ul_li">
							<img src="./image/1 (3).png" alt=""> 
							<div class="news_parag">
								<p>Заголовок</p>
								<p>В Национальный музей Республики Татарстан можно добраться общественным транспортом</p>
							</div>
						</li>
						<li class="news_ul_li">
							<img src="./image/1 (4).png" alt=""> 
							<div class="news_parag">
								<p>Заголовок</p>
								<p>В Национальный музей Республики Татарстан можно добраться общественным транспортом</p>
							</div>
						</li>
						<li class="news_ul_li">
							<img src="./image/1 (5).png" alt=""> 
							<div class="news_parag">
								<p>Заголовок</p>
								<p>В Национальный музей Республики Татарстан можно добраться общественным транспортом</p>
							</div>
						</li>
						<li class="news_ul_li">
							<img src="./image/1 (6).png" alt=""> 
							<div class="news_parag">
								<p>Заголовок</p>
								<p>В Национальный музей Республики Татарстан можно добраться общественным транспортом</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php include "footer.php"; ?>