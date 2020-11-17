<?php
          if (isset($_POST['cek']))
            {
              $reqs = $_POST["kebAwal"];
              $comp = $_POST["kompleks"];
              $time = $_POST["delivery"];
              $team = $_POST["SDM"];
              $skll = $_POST["ketrampilan"];
              $clnt = $_POST["klien"];
            }
            
            class methodology {
              //Props
              public $methName;
              public $methReqs;
              public $methComps;
              public $methTime;
              public $methTeams;
              public $methSkills;
              public $methClient;
              public $methLink;
              public $methNear = 0;

            }

            $inc = new methodology();
            $inc->methName = "Metodologi Incremental";
            $inc->methReqs = 1;
            $inc->methComps = 1;
            $inc->methTime = 2;
            $inc->methTeams = 1;
            $inc->methSkills = 2;
            $inc->methClient = 2;
            $inc->methLink = "incremental.html";

            $vsh = new methodology();
            $vsh->methName = "Metodologi VShaped";
            $vsh->methReqs = 1;
            $vsh->methComps = 2;
            $vsh->methTime = 3;
            $vsh->methTeams = 2;
            $vsh->methSkills = 1;
            $vsh->methClient = 1;
            $vsh->methLink = "vshaped.html";

            $spi = new methodology();
            $spi->methName = "Metodologi Spiral";
            $spi->methReqs = 2;
            $spi->methComps = 3;
            $spi->methTime = 4;
            $spi->methTeams = 2;
            $spi->methSkills = 1;
            $spi->methClient = 1;
            $spi->methLink = "spiral.html";

            $rad = new methodology();
            $rad->methName = "Metodologi Rapid Agile Development";
            $rad->methReqs = 2;
            $rad->methComps = 2;
            $rad->methTime = 2;
            $rad->methTeams = 1;
            $rad->methSkills = 1;
            $rad->methClient = 1;
            $rad->methLink = "rad.html";

            $pro = new methodology();
            $pro->methName = "Metodologi Prototyping";
            $pro->methReqs = 2;
            $pro->methComps = 2;
            $pro->methTime = 1;
            $pro->methTeams = 1;
            $pro->methSkills = 1;
            $pro->methClient = 1;
            $pro->methLink = "prototyping.html";

            $scr = new methodology();
            $scr->methName = "Metodologi Scrum";
            $scr->methReqs = 1;
            $scr->methComps = 2;
            $scr->methTime = 2;
            $scr->methTeams = 1;
            $scr->methSkills = 3;
            $scr->methClient = 1;
            $scr->methLink = "scrum.html";

            $xpr = new methodology();
            $xpr->methName = "Metodologi Extreme Programming";
            $xpr->methReqs = 1;
            $xpr->methComps = 1;
            $xpr->methTime = 1;
            $xpr->methTeams = 1;
            $xpr->methSkills = 1;
            $xpr->methClient = 1;
            $xpr->methLink = "xp.html";

            $answer = array($reqs,$comp,$time,$team,$skll,$clnt);
            $methods = array($inc,$vsh,$spi,$rad,$pro,$scr,$xpr);

          ?>