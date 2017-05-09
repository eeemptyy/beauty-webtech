@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html style="background: url( );">
<title>Home Page</title>
<meta charset="utf-8">

<!-- Latest compiled and minified CSS -->

<style>
.mySlides {display:none;}
</style>
<body style="font-family:Kanit; background: url(img/bg.png); background-attachment:fixed;">


 <br><br>
<!-- <h2 class="title is-1 is-centered has-text-centered">Promotions</h2> -->
<div class = "is-centered has-text-centered">
  <img src="img/pro.png">
</div>

<div class="w3-content w3-section "  id="vue-app" style="padding:20px;">
  @foreach($data as $a)

  <a href='service'> <img class="mySlides w3-animate-left"style="width:70% ; margin:auto;" src='img/{{$a->pic_path}}' alt='Slide' > </a>

  @endforeach

</div>

<div style="background-color:#FFEEDD;padding:20px;">
<br />
<div class="columns column is-offset-1">
<span class="tag is-danger is-medium is-child title is-3 is-centered ">บริการ</span>
<!-- <span class="tag is-danger is-medium is-child">บริการทั้งหมด</span> -->
<a class="button is-danger is-outlined column is-2 is-offset-9" href="service" style="height:40px;font-size:110%;">บริการทั้งหมด</a>
</div>
<br>


<div class="columns is-gapless has-text-centered"  >
  <div class="column "><a href="service/#ทรีทเมนท์ผิวหน้า"><img class=""src= "img/1.png" style="width:80%;"></div></a>
  <div class="column"><a href="service/#ทรีทเมนท์ผิวกาย"><img class="" src="img/2.png" style="width:80%"></div></a>
  <div class="column"><a href="service/#กระชับสัดส่วน"><img class="" src="img/3.png" style="width:80%"></div></a>
  <div class="column"><a href="service/#เลเซอร์"><img class="" src="img/4.png" style="width:80%"></div></a>
  <div class="column"><a href="service/#ปรับรูปหน้า"><img class="" src="img/5.png" style="width:80%"></div></a>
</div>



<div class="columns is-gapless has-text-centered " style="margin-bottom:20px;">
  <div class="column " style="text-shadow:0.5px 0.5px;">ทรีทเมนท์ผิวหน้า</div>
  <div class="column" style="text-shadow:0.5px 0.5px;">ทรีทเมนท์ผิวกาย</div>
  <div class="column" style="text-shadow:0.5px 0.5px;">กระชับสัดส่วน</div>
  <div class="column" style="text-shadow:0.5px 0.5px;">เลเซอร์</div>
  <div class="column" style="text-shadow:0.5px 0.5px;">ปรับรูปหน้า</div>
</div>


</div>

<br><br>
<div class="columns column is-offset-1">
<span class="tag is-danger is-medium is-child title is-3 is-centered ">บทความที่น่าสนใจ</span><br><br>
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
@endsection
