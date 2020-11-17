<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form Metodelogi</title>
	<link rel="stylesheet" href="css/styleForm.css">
  </head>
  <body>
    <div id="container">
			<div id="section1" class="section1">
				<div class="container">
					<div class="right">
						<nav class="navbar navbar-expand-lg navbar-light fixed-top py-1" id="mainNav" style="background-color: #FAD7A0;">
							<div class="container">	
								<a class="navbar-brand" href="#">SiCeMet</a>
								<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
								data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" 
								aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
								<div class="collapse navbar-collapse" id="navbarResponsive">
									<ul class="navbar-nav ml-auto my-2 my-lg-0">
										<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Beranda</a></li>
										<li class="nav-item"><a class="nav-link js-scroll-trigger" href="formMetodelogi.php">Masuk</a></li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			
			<div id="section2" class="section2">
				<div class="container">
					<marquee
						direction="left"
						behavior="scroll"
						scrollamount="50"
						scrolldelay="400"
					>
						<h4>Kenali Proyek Anda dengan SiCeMet</h4>
					</marquee>
				</div>
			</div>
			
			<div id="section3" class="section3">
				<div class="container">
					<h3 align="center"><u>Kenali Proyek Anda</u></h3>
					<br>
					<br>
					<div class="alert alert-light" role="alert">
						<form action="pilihan.php" method="POST">
							<div class="form-group">
								<label class="kuning" for="formGroupExampleInput"><h5>Kebutuhan Awal</h5></label>
								<div class="form-check form-check-inline" style="margin-left:100px">
									<input class="form-check-input" type="radio" name="kebAwal" id="inlineRadio1" value="1" required>
									<label class="form-check-label" for="inlineRadio1">Dapat Dijelaskan</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:90px">
									<input class="form-check-input" type="radio" name="kebAwal" id="inlineRadio2" value="2" required>
									<label class="form-check-label" for="inlineRadio2">Belum Jelas</label>
								</div>
								<hr color="black" size="20px">
							</div>

							<div class="form-group">
								<label class="kuning" for="formGroupExampleInput2"><h5>Kompleksitas</h5></label>
								<div class="form-check form-check-inline" style="margin-left:125px">
									<input class="form-check-input" type="radio" name="kompleks" id="inlineRadio3" value="1" required>
									<label class="form-check-label" for="inlineRadio3">Sederhana</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:125px">
									<input class="form-check-input" type="radio" name="kompleks" id="inlineRadio4" value="2K" required>
									<label class="form-check-label" for="inlineRadio4">Kompleks</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:90px">
									<input class="form-check-input" type="radio" name="kompleks" id="inlineRadio5" value="3" required>
									<label class="form-check-label" for="inlineRadio5">Sangat Kompleks</label>
								</div>
								<hr color="black" size="20px">
							</div>

							<div class="form-group">
								<label class="kuning" for="formGroupExampleInput2"><h5>Waktu Delivery</h5></label>
								<div class="form-check form-check-inline" style="margin-left:110px">
									<input class="form-check-input" type="radio" name="delivery" id="inlineRadio6" value="1" required>
									<label class="form-check-label" for="inlineRadio6"> < 1 bulan</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:135px">
									<input class="form-check-input" type="radio" name="delivery" id="inlineRadio7" value="2" required>
									<label class="form-check-label" for="inlineRadio7">1-3 bulan</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:95px">
									<input class="form-check-input" type="radio" name="delivery" id="inlineRadio8" value="3" required>
									<label class="form-check-label" for="inlineRadio8">4-6 bulan</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:100px">
									<input class="form-check-input" type="radio" name="delivery" id="inlineRadio9" value="4" required>
									<label class="form-check-label" for="inlineRadio9">6-12 bulan</label>
								</div>
								<hr color="black" size="20px">
							</div>

							<div class="form-group">
								<label class="kuning" for="formGroupExampleInput"><h5>Jumlah Tim (SDM)</h5></label>
								<div class="form-check form-check-inline" style="margin-left:80px">
									<input class="form-check-input" type="radio" name="SDM" id="inlineRadio10" value="1" required>
									<label class="form-check-label" for="inlineRadio10">< 12 orang</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:125px">
									<input class="form-check-input" type="radio" name="SDM" id="inlineRadio11" value="2" required>
									<label class="form-check-label" for="inlineRadio11">> 12 orang</label>
								</div>
								<hr color="black" size="20px">
							</div>

							<div class="form-group">
								<label class="kuning" for="formGroupExampleInput2"><h5>Ketrampilan Tim</h5></label>
								<div class="form-check form-check-inline" style="margin-left:100px">
									<input class="form-check-input" type="radio" name="ketrampilan" id="inlineRadio12" value="1" required>
									<label class="form-check-label" for="inlineRadio12">Berpengalaman</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:95px">
									<input class="form-check-input" type="radio" name="ketrampilan" id="inlineRadio13" value="2" required>
									<label class="form-check-label" for="inlineRadio13">Campuran</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:90px">
									<input class="form-check-input" type="radio" name="ketrampilan" id="inlineRadio14" value="3" required>
									<label class="form-check-label" for="inlineRadio14">Tidak Berpengalaman</label>
								</div>
								<hr color="black" size="20px">
							</div>

							<div class="form-group">
								<label class="kuning" for="formGroupExampleInput"><h5>Keterlibatan Klien</h5></label>
								<div class="form-check form-check-inline" style="margin-left:90px">
									<input class="form-check-input" type="radio" name="klien" id="inlineRadio15" value="1" required>
									<label class="form-check-label" for="inlineRadio15">Terlibat</label>
								</div>
								<div class="form-check form-check-inline" style="margin-left:145px">
									<input class="form-check-input" type="radio" name="klien" id="inlineRadio16" value="2" required>
									<label class="form-check-label" for="inlineRadio16">Tidak Terlibat</label>
								</div>
							</div>
							
							<br/>
							<div class="tgh">
								<input type="submit" class="btn btn-secondary" name="cek" value="Cek Metodelogi" style="margin-left:700px">
								<input type="reset" class="btn btn-secondary" name="bersih" value="Bersihkan">
							</div>
						</form>
					</div>
					
					<?php
					  if (isset($_GET['cek'])) {
						if(isset($_GET['radioo']))
						{
						echo "<span>You have selected :<b> ".$_GET['radioo']."</b></span>";
						}
						else{ echo "<span>Please choose any radio button.</span>";}
						}
					?>
				</div>
			</div>
			
			<div id="section4" class="section4">
				<div class="container"> 
					<br>
					<div class="row row-cols-3" style="margin-left:100px">
						<div class="col">
							<h4> Get SiCeMet </h4>
							<div class="S_icons">
								<img src="images/4.png" alt="playstore" title="playstore" width="100" height="50">
								<img src="images/5.png" alt="appstore" title="appstore" width="100" height="30">
							</div>
							<br>
						</div>
						
						<div class="col" style="color:black">
							<div>
								<h4>SiCeMet Company</h4>
								<br>
								<p>Jl. Tunas Karya <br>Jakarta Selatan, Indonesia - 16281</p>
							</div>

							<div>
								<p>Email 	  		: Sicemet@gmail.com <br>
								Contact Center 	: 1400 0226 <br>
								Phone 	  		: 021 7564 321 <br>
								Whatsapp 		: 08228921022
								</p>
							</div>
						</div>
						
						<div class="col">
							<h4> Find Us on </h4>
							<div class="S_icons">
								<img src="images/linkedin_h.png" alt="linkedin" id="linkedin" width="30" height="30">
								<img src="images/facebook_h.png" alt="facebook" id="facebook" width="30" height="30">
								<img src="images/twitter_h.png" alt="twitter" id="twitter" width="30" height="30">
								<img src="images/youtube_h.png" alt="youtube" id="youtube" width="30" height="30">
								<img src="images/instagram_h.png" alt="instagram" id="instagram" width="30" height="30">
							</div>	
						</div>
					<div>
				</div>
			</div>
			
			<div id="section5" class="section5">
				<br>
				<div class="container" align="center" style="color:black">Hak Cipta &copy; SiCeMet 2020 <i>All rights reserved</i></div> 
			</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>