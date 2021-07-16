<?php

require_once 'header.php';
ob_start();
session_start();

$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:kullanici_mail");
$kullanicisor->execute(array(
	'kullanici_mail' => $_SESSION['userkullanici_mail']
));
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);


?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Ana sayfa <i class="fa fa-chevron-right"></i></a></span> <span>Profil Bilgilerim <i class="fa fa-chevron-right"></i></span></p>
				<h1 class="mb-0 bread">Profil Bilgilerim</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9">
				<div class="wrapper">
					<div class="row no-gutters">
						<div class="col-lg-7 col-md-7 order-md-last d-flex align-items-stretch">
							<div class="contact-wrap w-100 p-md-5 p-4">

								<form action="nedmin/netting/islem.php" method="POST" id="contactForm" name="contactForm" class="contactForm">

									<div class="row">
										<div class="col-md-10">
											<div class="form-group">
												<label class="label" for="name">Adınız Soyadınız</label>
												<input type="text" class="form-control" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
												<label class="label" for="email">E-mailiniz</label>
												<input type="email" class="form-control" disabled name="kullanici_mail" id="email" value="<?php echo $kullanicicek['kullanici_mail'] ?>">
											</div>
										</div>

										<div class="col-md-10">
											<div class="form-group">
												<label class="label" for="email">Telefon Numaranız</label>
												<input type="text" class="form-control" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm'] ?>"">
												</div>
											</div>
										
											<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']  ?>">
												<div class="col-md-12">

													<br>

													<div class="form-group" align="right">
														<button type="submit" name="profilguncelle" class="btn btn-primary"> Güncelle </button>
														
														<div class="submitting"></div>
													</div>
												</div>
											</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>


		</div>
	</div>
</section>


<?php

require_once 'footer.php';
?>