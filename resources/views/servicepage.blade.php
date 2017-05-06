<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>service</title>
    <!-- <link rel="stylesheet" media="screen" href="css/bulma.css"> -->
    <link href='//fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <link rel="stylesheet" media="screen" href="css/bulma.css">
  </head>

<body style="font-family:Kanit;">
  <section class="hero is-danger is-medium">
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
    <div class="container has-text-centered">
      <h1 class="title">
        Beauty Clinic
      </h1>
      <h2 class="subtitle">
        คลีนิคเสริมความงาม
      </h2>
    </div>
  <!-- </div> -->

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs">
      <div class="container">
        <ul>
          <li ><a  href="/">Home</a></li>
          <li class="is-active"><a>Service</a></li>
          <li ><a  href="voucher">Voucher</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
<br><br><br><br>




<!-- -------------------------------------------------------------------- -->
<?php $types=array("ทรีทเมนท์ผิวหน้า", "ทรีทเมนท์ผิวกาย", "กระชับสัดส่วน","เลเซอร์","ปรับรูปหน้า");
$pic=array("img/10.png","img/11.png","img/12.png","img/13.png","img/14.png")

 ?>
 @for($j = 0; $j < 5; $j++)
 <div class="columns is-multiline is-mobile" name="treatment">
<!-- <div class="columns is-multiline is-mobile"  id="vue-detail" v-for="(index,d) in pic"> -->
<!-- <div class="column is-one-quarter"v-for="d in pic"> -->

<div class="column is-one-quarter" >

  <h1>{{$types[$j]}}</h1>
 <!-- <img style="width:70%" src= 'img/10.png' > -->
   <img style="width:80%" src= "{{$pic[$j]}}" >
    <!-- <img style="width:80%" :src= "d.path" > -->

</div>

<div class="column">
@for ($i = 0; $i < count($data); $i++)

@if($data[$i]->category==$types[$j])
@if($data[$i]->type_id=='1')
  <div class="click"> {{$data[$i]->name}}   ราคา : {{$data[$i]->price}} บาท  <img src="https://lh6.googleusercontent.com/-KHuovUcXCB0/T9P30NeOhyI/AAAAAAAACbI/Yt8JvRP8s6g/s24/plus.png" onclick="descw(this)" ></div>
  <div class="desc">
  <img src="https://lh6.googleusercontent.com/-wbz6cuxM6Tw/T9P30GA6azI/AAAAAAAACbM/O1eECuA2J7o/s24/minus.png" onclick="descc(this)" style="float:right; margin: 3px 10px 5px 5px;" >
  <p>{{$data[$i]->detail}}</p>
  </div>
  @endif
  @endif
  @endfor

</div>



  <!-- <div class="column"> -->
   <!-- <div  v-for="n in 5">    loop in database แบ่งตามประเภท v-for='data in allcourse database' v-if(type=ทริตเม้น)--> -->
    <!-- <div class="click"> Division @{{n}} <img src="https://lh6.googleusercontent.com/-KHuovUcXCB0/T9P30NeOhyI/AAAAAAAACbI/Yt8JvRP8s6g/s24/plus.png" onclick="descw(this)" ></div>
    <div class="desc">
    <img src="https://lh6.googleusercontent.com/-wbz6cuxM6Tw/T9P30GA6azI/AAAAAAAACbM/O1eECuA2J7o/s24/minus.png" onclick="descc(this)" style="float:right; margin: 3px 10px 5px 5px;" >
    <p>Description @{{num}}</p>
    </div>
    </div> -->
  <!-- </div> -->
<!-- </div> -->
</div>
@endfor

<!-- -------------------------------------------------------------------- -->








<style type="text/css">
.desc { display: none; padding: 5px; border: solid red 2px; background-color:#efefef; }
.click {border: 2px solid green; background-color:#FF88FF; padding:5px; margin-top:5px; font-size:25px;}
.click img {float:right; margin: 3px 10px 5px 5px;}
</style>

<script type="text/javascript">
function findParentDiv(from)
{
var node = from.parentNode;
while ( node != null )
{
if ( node.tagName == "DIV" ) return node;
}
return null;
}
function descw(image)
{
// get the div that contains that image
var which = findParentDiv(image);
// then find where that div is in the list of divs
var divs = document.getElementsByTagName("div");
for ( var d = 0; d < divs.length; ++d )
{
if ( divs[d] == which )
{
// and find the next "desc" div after that one...
for ( var dd = d+1; dd < divs.length; ++ddd )
{
if ( divs[dd].className == "desc" )
{
// and "open" it:
divs[dd].style.display = "block";
return;
}
}
}
}
}
function descc(image)
{
// find the div containing that image:
var div = findParentDiv(image);
// and if found, then "close" it:
if ( div != null ) div.style.display = "none";
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<script>
var vm = new Vue({
  el: '#vue-detail',
  data: {
    pic: [
      { path: 'img/10.png' },
      { path: 'img/11.png' },
      { path: 'img/12.png' },
      { path: 'img/13.png' },
      { path: 'img/14.png' },
    ],

}
});
</script>
  </body>
</html>
