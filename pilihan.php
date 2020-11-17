<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Pilihan</title>
    <link rel="stylesheet" href="css/stylePilihan.css">
  </head>
  <body style="background:url('images/kantor.jpg')">
		<div id="container">
			<div id="section1" class="section1">
				<div class="container">
					<h1 align="center" style="margin-top:20px;"><b>SiCeMet</b></h1>	
					<br>
					<marquee
						direction="left"
						behavior="scroll"
						scrollamount="50"
						scrolldelay="400"
					>
						<h4>Kenali Proyek Anda dengan SiCeMet</h4>
					</marquee>

					<div class="form" style="color:black; margin-left:50px">
					  <h2 align="center">Metodologi Yang Cocok untuk Proyek Anda</h2>
						<br>
						<?php

						  include "decl_class.php";

						  foreach($methods as $mtd) {
							if ($mtd->methReqs == $answer[0]) {
							  $mtd->methNear +=1;
							}
							if ($mtd->methReqs == $answer[1]) {
							  $mtd->methNear +=1;
							}
							if ($mtd->methReqs == $answer[2]) {
							  $mtd->methNear +=1;
							}
							if ($mtd->methReqs == $answer[3]) {
							  $mtd->methNear +=1;
							}
							if ($mtd->methReqs == $answer[4]) {
							  $mtd->methNear +=1;
							}
							if ($mtd->methReqs == $answer[5]) {
							  $mtd->methNear +=1;
							}
						  }

						  $match = array();
						  foreach($methods as $mtd) {
							if($mtd->methNear >= 3) {
							  $match[] = $mtd;
							}
						  }

						?>

						<ul>

						  <?php
							foreach ($match as $cck) {
						  ?>

						  <li>
							<span class="metode" style="color:#000"><b><?php echo $cck->methName;?></b></span>
							<span class="det"><a href="<?php echo $cck->methLink;?>"><input type="submit" name="detail" value="Detail"></a></span>
						  </li>
						  <?php
							}
						  ?>
						</ul>
					</div>
				</div>
			</div>	
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>