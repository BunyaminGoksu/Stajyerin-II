<?php 

require_once 'header.php';

?>
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Ana sayfa <i class="fa fa-chevron-right"></i></a></span> <span>Giriş Yap <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Giriş Yap</h1>
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
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">E-mail</label>
													<input type="email" class="form-control" name="kullanici_mail" id="email" placeholder="E-mailinizi giriniz">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Parola</label>
													<input type="password" class="form-control" name="kullanici_password"  placeholder="Şifrenizi giriniz">
												</div>
											</div>
										
											
											<div class="col-md-12">
												
											<br><div class="form-group" align="right" >
													<button  type="submit" name="kullanicigiris" class="btn btn-primary"> Giriş Yap </button>
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