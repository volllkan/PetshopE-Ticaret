<!DOCTYPE html>
<html lang="en-US">

	
	<body>
		
		<?php include("parts/header.php") ?>

	<!--==================================================-->
	<!--==================================================-->
	<section class="banner-inner-section">
		<video autoplay loop muted class="banner-inner-bg">
			<source src="assets/images/video/banner-inner-bg.mp4" type="video/mp4">
		</video>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-inner-title wow fadeInRight">
						<h1>Bilgiler</h1>
					</div>
					<div class="banner-inner-link wow fadeInRight" data-wow-delay=".3s">
						<ul>
							<li><a href="index.php"><i class="fas fa-home"></i>Anasayfa</a></li>
							<li class="separator"><i class="bi bi-arrow-right"></i></li>
							<li><a href="checkout.html"><i class="far fa-hand-point-right"></i>Bilgiler</a></li>
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
	<!-- Start Cat Shop Checkout Section Here -->
	<!--==================================================-->
	<div class="shop-product-section">
		<div class="container">
			<form action="#" class="checkout-form">
				<div class="row g-4">

					<div class="col-lg-7">

						<!-- Fatura Adresi -->
						<div id="billing-form">
							<h4 class="mb-4">Fatura Adresi</h4>
							<div class="row row-cols-sm-2 row-cols-1 g-4">
								<div class="col">
									<label>Ad*</label>
									<input class="form-field" type="text" placeholder="Ad" id="c-name1" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Soyad*</label>
									<input class="form-field" type="text" placeholder="Soyad" id="c-name2" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Email Adresi*</label>
									<input class="form-field" type="email" placeholder="Email Adresi" id="c-mail1" name="email">
								</div>
								<div class="col">
									<label>Telefon No*</label>
									<input class="form-field" type="text" placeholder="Telefon numarası" id="c-numb1" name="number" autocomplete="off">
								</div>
								<div class="col-sm-12">
									<label>Şirket Adı</label>
									<input class="form-field" type="text" placeholder="Şirket Adı" id="c-cname1" name="name" autocomplete="off">
								</div>
								<div class="col-sm-12">
									<label>Adres*</label>
									<input class="form-field" type="text" placeholder="Adres satırı 1" id="c-addr1" name="name" autocomplete="off">
								</div>
								<div class="col-sm-12">
									<input class="form-field" type="text" placeholder="Adres satırı 2" id="c-addr2" name="name" autocomplete="off">
								</div>
								<div class="col">
									<label>Ülke*</label>
									<select class="form-field">
										<option>Türkiye</option>
									</select>
								</div>
								<div class="col">
									<label>İl/İlçe*</label>
									<input class="form-field" type="text" placeholder="İl/İlçe" id="c-city1" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Eyalet*</label>
									<input class="form-field" type="text" placeholder="Eyalet" id="c-state1" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Posta Kodu*</label>
									<input class="form-field" type="text" placeholder="Posta Kodu" id="c-zip1" name="name" autocomplete="on">
								</div>
								<div class="col-sm-12 d-flex flex-wrap">
									<div class="form-check me-4">
										<input class="form-check-input" type="checkbox" id="create_account">
										<label class="form-check-label" for="create_account">Hesap Oluştur?</label>
									</div>
									<div class="form-check m-0">
										<input class="form-check-input" type="checkbox" id="shiping_address" data-toggle-shipping="#shipping-form">
										<label class="form-check-label" for="shiping_address">Farklı Adrese Gönder</label>
									</div>
								</div>
							</div>

						</div>

						<!-- Teslimat Adresi -->
						<div id="shipping-form" class="mt-md-8 mt-6">
							<h4 class="mb-4">Teslimat Adresi</h4>
							<div class="row row-cols-sm-2 row-cols-1 g-4">
								<div class="col">
									<label>Ad*</label>
									<input class="form-field" type="text" placeholder="Ad" id="c-nam1" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Soyad*</label>
									<input class="form-field" type="text" placeholder="Soyad" id="c-nam2" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Email Adresi*</label>
									<input class="form-field" type="email" placeholder="Email Adresi" id="c-mil1" name="email" autocomplete="on">
								</div>
								<div class="col">
									<label>Telefon No*</label>
									<input class="form-field" type="text" placeholder="Telefon numarası" id="c-num1" name="number" autocomplete="off">
								</div>
								<div class="col-sm-12">
									<label>Şirket Adı</label>
									<input class="form-field" type="text" placeholder="Şirket Adı" id="c-comp1" name="name" autocomplete="off">
								</div>
								<div class="col-sm-12">
									<label>Adres*</label>
									<input class="form-field" type="text" placeholder="Adres satırı 1" id="c-add1" name="name" autocomplete="on">
								</div>
								<div class="col-sm-12">
									<input class="form-field" type="text" placeholder="Adres satırı 2" id="c-add2" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Ülke*</label>
									<select class="form-field">
										<option>Bangladeş</option>
										<option>Çin</option>
										<option>Ülke</option>
										<option>Hindistan</option>
										<option>Japonya</option>
									</select>
								</div>
								<div class="col">
									<label>İl/İlçe*</label>
									<input class="form-field" type="text" placeholder="İl/İlçe" id="c-town1" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Eyalet*</label>
									<input class="form-field" type="text" placeholder="Eyalet" id="c-state3" name="name" autocomplete="on">
								</div>
								<div class="col">
									<label>Posta Kodu*</label>
									<input class="form-field" type="text" placeholder="Posta Kodu" id="c-zipc1" name="name" autocomplete="on">
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-5">

						<!-- Sipariş Özeti Başlangıç -->
						<div class="checkout-box">

							<h4 class="mb-4">Sepet Toplamı</h4>

							<table class="checkout-summary-table table table-borderless">
								<thead>
									<tr>
										<th>Ürün</th>
										<th>Toplam</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Kedi Maması x 1</td>
										<td>₺110.00</td>
									</tr>
									<tr>
										<td>Köpek Maması x 1</td>
										<td>₺19.00</td>
									</tr>
									<tr>
										<td class="border-top">Ara Toplam</td>
										<td class="border-top">₺129.00</td>
									</tr>
									<tr>
										<td class="border-top">Kargo Ücreti</td>
										<td class="border-top">₺5.00</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th class="border-top">Genel Toplam</th>
										<th class="border-top">₺139.00</th>
									</tr>
								</tfoot>
							</table>

						</div>
						<!-- Sipariş Özeti Bitiş -->

						<!-- Ödeme Yöntemi Başlangıç -->
						<div class="checkout-box">

							<h4 class="mb-4">Ödeme Yöntemi</h4>

							<div class="checkout-payment-method">

								<div class="single-method form-check">
									<input class="form-check-input" type="radio" id="payment_check" name="payment-method">
									<label class="form-check-label" for="payment_check">Çek Ödemesi</label>
									<p>Lütfen Mağaza Adına, Mağaza Sokağı, Mağaza İlçesi, Mağaza Eyaleti, Mağaza Posta Kodu, Mağaza Ülkesi'ne bir Çek gönderin.</p>
								</div>

								<div class="single-method form-check">
									<input class="form-check-input" type="radio" id="payment_bank" name="payment-method" onclick="showBankTransferPopup()">
									<label class="form-check-label" for="payment_bank">Doğrudan Banka Havalesi</label>
									<p>Lütfen Mağaza Adına, Mağaza Sokağı, Mağaza İlçesi, Mağaza Eyaleti, Mağaza Posta Kodu, Mağaza Ülkesi'ne bir Çek gönderin.</p>
								</div>

								<div class="single-method form-check">
									<input class="form-check-input" type="radio" id="payment_cash" name="payment-method">
									<label class="form-check-label" for="payment_cash">Kapıda Ödeme</label>
									<p>Lütfen Mağaza Adına, Mağaza Sokağı, Mağaza İlçesi, Mağaza Eyaleti, Mağaza Posta Kodu, Mağaza Ülkesi'ne bir Çek gönderin.</p>
								</div>

								<!-- <div class="single-method form-check">
									<input class="form-check-input" type="radio" id="payment_card" name="payment-method" onclick="showCardPaymentForm()">
									<label class="form-check-label" for="payment_card">Kartla Ödeme</label>
								</div> -->

								<div class="single-method form-check">
									<input class="form-check-input" type="checkbox" id="accept_terms">
									<label class="form-check-label mb-4" for="accept_terms">Şartlar ve koşulları okudum ve kabul ediyorum</label>
								</div>

							</div>

							<button class="btn btn-dark btn-primary-hover rounded-0 mt-6"> <a href="siparis.php" style="color: white;"> Sipariş Ver</a></button>

						</div>
						<!-- Ödeme Yöntemi Bitiş -->

					</div>

				</div>
			</form>
		</div>
	</div>

	<!-- Banka Havalesi Popup -->
	<!-- <div id="bankTransferPopup" class="popup">
		<div class="popup-content">
			<span class="close" onclick="closeBankTransferPopup()">&times;</span>
			<p>Banka Havalesi için aşağıdaki bilgileri kullanın:</p>
			<p>Alıcı: Sarı Pati Şirketi</p>
			<p>IBAN: <span id="iban">TR33 0000 0000 0000 0000 0000 00</span></p>
			<button onclick="copyIban()">IBAN'ı Kopyala</button>
		</div>
	</div> -->

	<!-- Kart Bilgileri Formu -->
	<div id="cardPaymentForm" class="card-form" style="display: none;">
		<h4 class="mb-4">Kart Bilgileri</h4>
		<form>
			<div class="form-group">
				<label for="cardName">Kart Üzerindeki İsim</label>
				<input type="text" id="cardName" class="form-control" placeholder="Kart Üzerindeki İsim">
			</div>
			<div class="form-group">
				<label for="cardNumber">Kart Numarası</label>
				<input type="text" id="cardNumber" class="form-control" placeholder="Kart Numarası">
			</div>
			<div class="form-group">
				<label for="expiryDate">Son Kullanma Tarihi</label>
				<input type="text" id="expiryDate" class="form-control" placeholder="AA/YY">
			</div>
			<div class="form-group">
				<label for="cvv">CVV</label>
				<input type="text" id="cvv" class="form-control" placeholder="CVV">
			</div>
		</form>
	</div>

	<script>
		function showBankTransferPopup() {
			var popup = document.getElementById("bankTransferPopup");
			popup.style.display = "block";
		}

		function closeBankTransferPopup() {
			var popup = document.getElementById("bankTransferPopup");
			popup.style.display = "none";
		}

		function copyIban() {
			var ibanText = document.getElementById("iban").innerText;
			var textArea = document.createElement("textarea");
			textArea.value = ibanText;
			document.body.appendChild(textArea);
			textArea.select();
			document.execCommand("Copy");
			textArea.remove();
			closeBankTransferPopup();
		}


		function showCardPaymentForm() {
    var cardForm = document.getElementById("cardPaymentForm");
    cardForm.style.display = "block";
}
	</script>


	<!--==================================================-->
	<!-- End Cat Shop Checkout Section Here -->
	<!--==================================================-->






	<!--==================================================-->
	<!-- Start Cat Shop Footer Section Here -->
	<!--==================================================-->
	<?php include 'parts/footer.php'; ?>
	<!--==================================================-->
	<!-- End Cat Shop Footer Section Here -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start Cat Shop White Sidebar Section Here -->
	<!--==================================================-->
	


	<!-- ödeme yöntemi tarafı -->







	<!--==================================================-->
	<!-- End Cat Shop Bar Sidebar Section Here -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- End Cat Shop Bar Sidebar Section Here -->
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
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Ends scrollup Section Here -->
	<!--==================================================-->


</body>

</html>