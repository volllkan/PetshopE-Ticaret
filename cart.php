<!DOCTYPE html>
<html lang="en-US">

<body>


<?php include 'parts/header.php'; ?>


	<!--==================================================-->
	<!-- Start Cat Shop Banner Section Here -->
	<!--==================================================-->
    <section class="banner-inner-section">
        <video autoplay loop muted  class="banner-inner-bg">
            <source src="assets/images/video/banner-inner-bg.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-title wow fadeInRight">
                        <h1>Sepet</h1>
                    </div>
                    <div class="banner-inner-link wow fadeInRight" data-wow-delay=".3s">
                        <ul>
                            <li><a href="index.php"><i class="fas fa-home"></i>Anasayfa</a></li>
                            <li class="separator"><i class="bi bi-arrow-right"></i></li>
                            <li><a href="cart.php"><i class="far fa-hand-point-right"></i>Sepet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--==================================================-->
	<!-- End Cat Shop Banner Section Here -->
	<!--==================================================-->
	
	

	<?php include 'parts/sidebarcart.php' ?>
	
	
	
	<!--==================================================-->
	<!-- Start Cat Shop Cart Section Here -->
	<!--==================================================-->
	<section class="cart-section">
    <div class="container">
        <div class="row mb-n6 mb-lg-n10">
            <h2 class="cart-title mb-4">Sepet Listesi</h2>

            <div class="col-12 mb-6 mb-lg-10">

                <!-- Tablet ve Üstü Cihazlar İçin Sepet Tablosu Başlangıcı -->
                <table class="cart-table table table-bordered text-center align-middle mb-6 d-none d-md-table">
                    <thead>
                        <tr>
                            <th class="imag">Resim</th>
                            <th class="titl">Ürün</th>
                            <th class="pric">Fiyat</th>
                            <th class="quantit">Miktar</th>
                            <th class="tota">Toplam</th>
                            <th class="remov">Sil</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        <tr data-id="1">
                            <th><a href="shop-details.php">
                                    <img class="cart-thumb" src="assets/images/main-thumb/collection-thumb8.jpeg" alt="thumb">
                                </a></th>
                            <td><a href="shop-details.php">House Coffee Original</a></td>
                            <td class="price">₺110.00</td>
                            <td>
                                <div class="product-quantity-count">
                                    <input class="quantity" type="number" name="quantity" min="1" value="1">
                                </div>
                            </td>
                            <td class="total">₺110.00</td>
                            <td><button class="remove-btn"><i class="fas fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <th><a href="shop-details.php">
                                    <img class="cart-thumb" src="assets/images/main-thumb/collection-thumb4.jpeg" alt="thumb">
                                </a></th>
                            <td><a href="shop-details.php">Medium Roast Ground Coffee</a></td>
                            <td class="price">₺19.00</td>
                            <td>
                                <div class="product-quantity-count">
                                    <input class="quantity" type="number" name="quantity" min="1" value="1">
                                </div>
                            </td>
                            <td class="total">₺19.00</td>
                            <td><button class="remove-btn"><i class="fas fa-times"></i></button></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Tablet ve Üstü Cihazlar İçin Sepet Tablosu Sonu -->

                <!-- Mobil Cihazlar İçin Sepet Tablosu Başlangıcı -->
                <div class="cart-products-mobile d-md-none">
                    <div class="cart-product-mobile">
                        <div class="cart-product-mobile-thumb">
                            <a href="shop-details.php" class="cart-product-mobile-image">
                                <img src="assets/images/main-thumb/collection-thumb8.jpeg" alt="House Coffee Original" width="90" height="103">
                            </a>
                            <button class="cart-product-mobile-remove"><i class="bi bi-x-circle"></i></button>
                        </div>
                        <div class="cart-product-mobile-content">
                            <h5 class="cart-product-mobile-title"><a href="shop-details.php">House Coffee Original</a></h5>
                            <span class="cart-product-mobile-quantity">1 x <span class="price2">₺110.00</span></span>
                            <span class="cart-product-mobile-total"><b>Toplam:</b> <span class="total2">₺110.00</span></span>
                            <div class="product-quantity-count">
                                <input class="quantity2" type="number" name="quantity" min="1" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="cart-product-mobile">
                        <div class="cart-product-mobile-thumb">
                            <a href="shop-details.php" class="cart-product-mobile-image">
                                <img src="assets/images/main-thumb/collection-thumb4.jpeg" alt="" width="90" height="103">
                            </a>
                            <button class="cart-product-mobile-remove"><i class="bi bi-x-circle"></i></button>
                        </div>
                        <div class="cart-product-mobile-content">
                            <h5 class="cart-product-mobile-title"><a href="shop-details.php">Medium Roast Ground Coffee</a></h5>
                            <span class="cart-product-mobile-quantity">1 x <span class="price2">₺18.00</span></span>
                            <span class="cart-product-mobile-total"><b>Toplam:</b> <span class="total2">₺18.00</span></span>
                            <div class="product-quantity-count">
                                <input class="quantity2" type="number" name="quantity" min="1" value="1">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobil Cihazlar İçin Sepet Tablosu Sonu -->

                <!-- Sepet İşlem Butonları Başlangıcı -->
                <div class="row justify-content-between gap-3">
                    <div class="col-auto cat-shop-btn "><button>Alışverişe Devam Et <i class="bi bi-arrow-right-short"></i> <span></span></button></div>
                    <div class="col-auto d-flex flex-wrap gap-3 cat-shop-btn ">
                        <button>Sepeti Güncelle <i class="bi bi-arrow-right-short"></i> <span></span></button>
                        <button>Sepeti Temizle <i class="bi bi-arrow-right-short"></i> <span></span></button>
                    </div>
                </div>
                <!-- Sepet İşlem Butonları Sonu -->

            </div>

            <!-- Sepet Toplamları Başlangıcı -->
            <div class="col mb-6 d-none d-md-table">
                <div class="cart-totals">
                    <h4 class="title">Sepet Toplamları</h4>
                    <table class="table table-borderless bg-transparent">
                        <tbody>
                            <tr class="subtotal">
                                <th ara="subtotal">Ara Toplam</th>
                                <td><span id="subtotal">₺242.00</span></td>
                            </tr>
                            <tr class="shopping-fee">
                                <th>Alışveriş Ücreti</th>
                                <td><span id="shopping">₺5.00</span></td>
                            </tr>
                            <tr class="total">
                                <th>Toplam</th>
                                <td><strong><span id="total">₺242.00</span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="show-alert btn btn-dark" href="checkout.php">Ödeme Sayfasına Geç</button>
                </div>
            </div>
            <!-- Sepet Toplamları Sonu -->

            <!-- Mobil Cihazlar İçin Sepet Toplamları Başlangıcı -->
            <div class="col d-md-none">
                <div class="cart-totals">
                    <h4 class="title">Sepet Toplamları</h4>
                    <table class="table table-borderless bg-transparent">
                        <tbody>
                            <tr class="subtotal">
                                <th>Ara Toplam</th>
                                <td><span id="subtotal2">₺242.00</span></td>
                            </tr>
                            <tr class="shopping-fee">
                                <th>Alışveriş Ücreti</th>
                                <td><span id="shopping2">₺5.00</span></td>
                            </tr>
                            <tr class="total">
                                <th>Toplam</th>
                                <td><strong><span id="total2">₺242.00</span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="show-alert btn btn-dark">Ödeme Sayfasına Geç</button>
                </div>
            </div>
            <!-- Mobil Cihazlar İçin Sepet Toplamları Sonu -->

        </div>
    </div>
</section>

	<!--==================================================-->
	<!-- End Cat Shop Cart Section Here -->
	<!--==================================================-->
	
	
	

    <!-- Checkout Alert JS -->
    <div class="alert-js">
        <span class="alert-overlay"></span>
        <div class="alert-box">
        <i class="bi bi-check-circle"></i>
        <h2>Checkout</h2>
        <h3>You have sucessfully Product Selected.</h3>
        <div class="alert-buttons">
            <a class="closebtn" title="close">Ok, Close</a>
            <a href="checkout.php" title="Proceed">Checkout</a>
        </div>
        </div>
    </div>




	
	
	<!--==================================================-->
	<!-- Start Cat Shop Footer Section Here -->
	<!--==================================================-->
	<?php include 'parts/footer.php'; ?>
	<!--==================================================-->	
	
	
	
	
	
	
	<!--==================================================-->
	<!-- Start scrollup Section Here-->
	<!--==================================================-->
	<div class="scroll-area">
		<div class="top-wrap">
			<div class="go-top-btn-wraper">
				<div class="prgoress_indicator active-progress">
					<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
					  <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;"></path>
					</svg>
				</div>s
			</div>
		</div>
	</div>


</body>

</html>