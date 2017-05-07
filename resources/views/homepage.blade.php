<!DOCTYPE html>
<html style="background: url( );">
<title>Home Page</title>
<meta charset="utf-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
<link href='//fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" media="screen" href="css/bulma.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<!-- <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css"> -->
<style>
.mySlides {display:none;}
</style>
<body style="font-family:Kanit; background: url(img/bg.png); background-attachment:fixed;">


  <!-- <div class="tabs is-centered is-boxed is-medium">
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
 -->

 <section class="hero is-danger is-medium" style="font-family:Fredoka One">
   <!-- Hero header: will stick at the top -->
   <div class="hero-head">
     <header class="nav">
       <div class="container">
         <div class="nav-left">
           <a class="nav-item">
             <!-- <img src="images/bulma-type-white.png" alt="Logo"> -->
           </a>
         </div>
         <span class="nav-toggle">
           <span></span>
           <span></span>
           <span></span>
         </span>
         <div class="nav-right nav-menu">
           <a class="nav-item is-active">
             Home
           </a>
           <a class="nav-item">
             Examples
           </a>
           <a class="nav-item">
             Documentation
           </a>
           <span class="nav-item">
             <a class="button is-primary is-inverted">
               <span class="icon">
                 <i class="fa fa-github"></i>
               </span>
               <span>Download</span>
             </a>
           </span>
         </div>
       </div>
     </header>
   </div>

   <!-- Hero content: will be in the middle -->
   <!-- <div class="hero-body"> -->
   <br>
     <div class="container has-text-centered"   style="font-size:70px">
         Beauty Clinic
     </div>
     <br>
   <!-- </div> -->

   <!-- Hero footer: will stick at the bottom -->
   <div class="hero-foot">
     <nav class="tabs">
       <div class="container" style="font-size:20px;">
         <ul>
           <li class="is-active"><a>Home</a></li>
           <li><a href="service">Service</a></li>
           <li><a  href="voucher">Voucher</a></li>
         </ul>
       </div>
     </nav>
   </div>
 </section>
 <br><br>
<!-- <h2 class="title is-1 is-centered has-text-centered">Promotions</h2> -->
<div class = "is-centered has-text-centered">
  <img src="img/pro.png">
</div>
<br><br>
<div class="w3-content w3-section" style="max-width:500px" id="vue-app">
  @foreach($data as $a)

  <a href='service'> <img class="mySlides"style="width:100%" src='img/{{$a->pic_path}}' alt='Test test' > </a>

  @endforeach
  <!-- <img class="mySlides"style="width:100%" v-for="d in pic" :src= "d.path" > -->
  <!-- <img class="mySlides" src="http://www.meuanphun-land.com/images/meuanphun/home-slide-01.jpg" style="width:100%">
  <img class="mySlides" src="http://www.advancehome.co.th/img/landing_page_mar017.jpg" style="width:100%"> -->
  <!-- <img class="mySlides" src="1.png" style="width:100%"> -->
</div>

<br><br>
<div class="columns column is-offset-1">
<span class="tag is-danger is-medium is-child title is-4 is-centered ">บริการ</span>
<!-- <span class="tag is-danger is-medium is-child">บริการทั้งหมด</span> -->
<a class="button is-danger is-outlined column is-2 is-offset-8" href="service">บริการทั้งหมด</a>
</div>
<br><br>


<div class="columns is-gapless has-text-centered"  >
  <div class="column "><a href="service/#ทรีทเมนท์ผิวหน้า"><img class=""src= "img/1.png" style="width:80%"></div></a>
  <div class="column"><a href="service/#ทรีทเมนท์ผิวกาย"><img class="" src="img/2.png" style="width:80%"></div></a>
  <div class="column"><a href="service/#กระชับสัดส่วน"><img class="" src="img/3.png" style="width:80%"></div></a>
  <div class="column"><a href="service/#เลเซอร์"><img class="" src="img/4.png" style="width:80%"></div></a>
  <div class="column"><a href="service/#ปรับรูปหน้า"><img class="" src="img/5.png" style="width:80%"></div></a>
</div>



<div class="columns is-gapless has-text-centered ">
  <div class="column ">ทรีทเมนท์ผิวหน้า</div>
  <div class="column">ทรีทเมนท์ผิวกาย</div>
  <div class="column">กระชับสัดส่วน</div>
  <div class="column">เลเซอร์</div>
  <div class="column">ปรับรูปหน้า</div>
</div>

<br><br><br><br>
<div class="columns column is-offset-1">
<span class="tag is-danger is-medium is-child title is-4 is-centered ">บทความที่น่าสนใจ</span><br><br>
</div>
<div class="columns is-gapless has-text-centered">
  <div class="column "><img class="" src="img/6.png" style="width:80%"></div>
  <div class="column"><img class="" src="img/7.png" style="width:80%"></div>
  <div class="column"><img class="" src="img/8.png" style="width:80%"></div>
  <div class="column"><img class="" src="img/9.png" style="width:80%"></div>
</div>



<div class="columns is-gapless has-text-centered">
  <a href="http://www.nitiponclinic.com/%E0%B8%81%E0%B8%B3%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B8%82%E0%B8%99-%E0%B8%99%E0%B8%B4%E0%B8%95%E0%B8%B4%E0%B8%9E%E0%B8%A5/" class="column" >กำจัดขนด้วยหลากหลายวิธี ทำกันอย่างไร</a>
  <a href="http://www.nitiponclinic.com/%E0%B8%9C%E0%B8%B4%E0%B8%A7%E0%B9%81%E0%B8%9E%E0%B9%89%E0%B8%87%E0%B9%88%E0%B8%B2%E0%B8%A2-%E0%B8%99%E0%B8%B4%E0%B8%95%E0%B8%B4%E0%B8%9E%E0%B8%A5/" class="column" >Hypo Allergic Treatment ดูแลผิวแพ้ง่ายให้กลับมาแข็งแรง</a>
  <a href="http://www.nitiponclinic.com/%E0%B8%97%E0%B8%B3%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B8%88%E0%B8%B1%E0%B8%81%E0%B8%81%E0%B8%B1%E0%B8%9A-%E0%B8%AA%E0%B8%B4%E0%B8%A7%E0%B8%9C%E0%B8%94-2/" class="column" >ทำความรู้จักกับ สิวผด</a>
  <a href="http://www.nitiponclinic.com/%E0%B8%A5%E0%B8%94%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%81-%E0%B8%99%E0%B8%B4%E0%B8%95%E0%B8%B4%E0%B8%9E%E0%B8%A5/" class="column" >ลดน้ำหนักอย่างไรให้หุ่นสวยพร้อมไปกับร่างกายที่แข็งแรง</a>
  <!-- <div class="column"  >กำจัดขนด้วยหลากหลายวิธี ทำกันอย่างไร</div> -->

</div>

<!-- <section class="hero"> -->
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        About website
      </h1>
      <div class="subtitle ">
        1. นายจอมพล เสริมสุข 5610450063<br>
2. นางสาว ปิยาณี สุขจำเริญ 5710404462<br>
3. นายจักรพันธ์ คล้ายสุบรรณ 5710404276<br>
4. นายกรวิชญ์ สิทธินันทคุณ 5610404169<br>
5. นายวรวุฒิ ฐิติธรรมจริยา 5710404616<br>
      </div>
    </div>
  </div>

<!-- </section> -->
<!-- <div>
    <img class="" src="1.png" style="width:100%">
</div> -->

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i <x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<script>
   var vm = new Vue({
     el: '#vue-app',
     data: {
       pic: [
         { path: 'http://www.meuanphun-land.com/images/meuanphun/home-slide-01.jpg' },
         { path: 'http://www.advancehome.co.th/img/landing_page_mar017.jpg' }
       ],
      //  pic_service: [
      //    path: 'img/1.png',
      //    path: 'img/1.png',
      //  ],
//        formpic: {
//         pic: '',
//       }
//
//      },
//       mounted: function(){
//
//      this.pic.push({
// path: "img/1.png"
//      });
//      this.pic.push({
// path: 'http://www.advancehome.co.th/img/landing_page_mar017.jpg'
//      });
//
   }
   });

  </script>
</body>
</html>
