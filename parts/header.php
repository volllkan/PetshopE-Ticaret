<!doctype html>
<html class="no-js" lang="Tr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Cat Shop">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sarı Pati </title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="200x200" href="assets/images/favicon/fav-icon.png">
	<!-- Bootstrap CSS Link -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- Animate CSS Link -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
	<!-- Animated text CSS Link -->
	<link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all">
	<!-- Font Awesome CSS Link -->
	<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
	<!-- Font Flaticon CSS Link -->
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<!-- Flaticon CDN Link -->
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
	<!-- Custom Default CSS Link -->
	<link rel="stylesheet" href="assets/css/custom-default.css" type="text/css" media="all">
	<!-- Meanmenu CSS Link -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- Venobox CSS Link -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
	<!-- Bootstrap Icons Link -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Slick CSS Link -->
	<link rel="stylesheet" href="assets/css/slick.css" type="text/css" media="all">
	<!-- Custom Style CSS Link -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<!-- Responsive CSS Link -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">

	<link rel="stylesheet" href="assets/css2/ozel.css" type="text/css" media="all">

	<link rel="stylesheet" href="assets/css2/mobileheader.css" type="text/css" media="all">

	<link rel="stylesheet" href="assets/css2/uyeform.css" type="text/css" media="all">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>


<header class="header-manu-section" id="header-sticky">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2">
				<div class="Cat Shop-logo ">
					<a href="index.php" title="Sarı Pati">
						<div class="menu-butonu4" onclick="toggleDropdown()">
							<h6 style="color: orange; font-weight: bold; font-size: 40px"> SarıPati</h6>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-5">
				<nav class="header-menu ">
					<ul>
						<li><a href="#" class="active">Anasayfa </a>
						</li>
						<li><a href="#">Alışveriş<i class="fas fa-chevron-down"></i></a>
							<div class="submenu">
								<ul>
									<li><a href="shop.php">Ürünler</a></li>
									<li><a href="shop-details.php">Ürün Detayları</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#">Sayfalar <i class="fas fa-chevron-down"></i></a>
							<div class="submenu">
								<ul>
									<li><a href="about.php">Hakkımızda</a></li>
									<!-- <li><a href="service.html">Hizmetler</a></li>
									<li><a href="service-details.html">Hizmet Detayları</a></li>
									<li><a href="team-member.html">Takım Arkadaşlarımız</a></li>
									<li><a href="testimonial.html">Referanslar</a></li>
									<li><a href="pricing.html">Fiyatlar</a></li>
									<li><a href="why-choose-us.html">Neden Bizi Seçmelisiniz</a></li> -->
									<li><a href="cart.php">Sepet</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<!-- <li><a href="faq.php">Faq</a></li> -->
								</ul>
							</div>
						</li>
						<!-- <li><a href="#">Blog <i class="fas fa-chevron-down"></i></a>
							<div class="submenu">
								<ul>
									<li><a href="blog.php">Blog Grid</a></li>
									<li><a href="blog-list.php">Diğer Bloglar</a></li>
									<li><a href="blog-details.php">Blog Detayları</a></li>
								</ul>
							</div>
						</li> -->
						<li><a href="contact.php">İletişim</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-5">
				<div class="header-menu-right">
					<form action="#">
						<div class="header-search">
							<input type="text" id="search" name="search" placeholder="Arama">
							<button type="submit"><i class="bi bi-search"></i></button>
						</div>
					</form>
					<div class="header-menu-btn">
						<ul>
							<li><button class="cart_btn headers-button" type="button">
									<i class="bi bi-cart3"></i>
									<!-- <small class="cart_counter"></small> -->
								</button>
							</li>
							<div class="hesap-menu">
								<button class="hesap-buton">Hesap <img src="assets\images\foto\hesaplogo.png" /><i class="fas fa-chevron-down"></i></button>
								<div class="menu-icerik">
									<a href="uyeform.php" class="menu-item">Giriş Yap</a>
									<a href="uye-kayit.php" class="menu-item">Kayıt Ol</a>
								</div>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="mobil-baslik4 d-lg-none">
	<!-- Mobil Header -->
	<div class="mobil-header4">
		<div class="menu-butonu4" onclick="toggleDropdown()">
			<span>&#9776; SarıPati</span>
		</div>
		<div class="sepet4">
			<li><button class="cart_btn headers-button" type="button">
					<i class="bi bi-cart3"></i>
					<!-- <small class="cart_counter"></small> -->
				</button>
			</li>
		</div>
	</div>

	<!-- Dropdown Menü -->
	<div id="dropdownMenu4" class="dropdown-menu4" style="display: none;">
		<a href="shop.php">
			<div class="menu-item4"><img src="assets\images\hayvan-icon\kopek.png"> Köpek Ürünleri</div>
			<div class="menu-item4"><img src="assets\images\hayvan-icon\kedi.png"> Kedi Ürünleri</div>
			<div class="menu-item4"><img src="assets\images\hayvan-icon\kus.png"> Kuş Ürünleri</div>
			<div class="menu-item4"><img src="assets\images\hayvan-icon\balik.png"> Balık Ürünleri</div>
			<div class="menu-item4"><img src="assets\images\hayvan-icon\mouse.png"> Kemirgen Ürünleri</div>

		</a>
	</div>
	<div class="hesap-menu">
		<a href="uyeform.php"><button class="hesap-buton"> <img src="assets\images\foto\hesaplogo.png"/></button></a>
		<!-- <div class="menu-icerik">
			<a href="#" class="menu-item">Giriş Yap</a>
			<a href="#" class="menu-item">Kayıt Ol</a>
		</div> -->
	</div>
</div>
<div class="arama-cubugu4 d-lg-none">
	<input type="text" placeholder="Ürün kategori veya marka ara.">
	<button type="submit"><i class="bi bi-search"></i></button>
</div>