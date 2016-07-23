<!DOCTYPE html>
<html>
<title>Satellites Monitor India</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fontface.css">
    <style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 0.7;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('thanks.jpg');
    min-height: 100%;
}



.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}



/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
     <li><a href="index.html" class="w3-padding-large">HOME</a></li>
      <li><a href="news.html" class="w3-padding-large">RECENT NEWS</a></li>
      <li><a href="weather.html" class="w3-padding-large">WEATHER</a></li>
    
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">THANK <span class="w3-hide-small">YOU</span>   </span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64 w3-center w3-light-grey" id="about">
    <?php
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor)) 
  {
    echo("Select your experience.");
  } 
  else
  {
    $N = count($aDoor);
 
    echo("Your selected experience: ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
        $txt = $aDoor[$i] . "\n";
    }
  }
    
    $myfile = fopen("review.txt", "a") or die("Unable to open file!");

fwrite($myfile, $txt);

fclose($myfile);
    ?>
    </div>

    
    




<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>

</body>
</html>
