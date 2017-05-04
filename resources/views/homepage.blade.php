<!DOCTYPE html>
<html>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
<style>
.mySlides {display:none;}
</style>
<body>
  <div class="tabs is-centered is-boxed is-medium">
    <ul>
      <li class="is-active">
        <a>
          <span class="icon is-small"><i class="fa fa-image"></i></span>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="fa fa-music"></i></span>
          <span>Service</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="fa fa-film"></i></span>
          <span>Voucher</span>
        </a>
      </li>
    </ul>
  </div>


<h2 class="title is-1 is-centered">Promotions</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="http://www.meuanphun-land.com/images/meuanphun/home-slide-01.jpg" style="width:100%">
  <img class="mySlides" src="http://www.advancehome.co.th/img/landing_page_mar017.jpg" style="width:100%">
  <!-- <img class="mySlides" src="1.png" style="width:100%"> -->
</div>

<div>
    <img class="" src="1.png" style="width:20%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
