@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>service</title>
    <!-- <link rel="stylesheet" media="screen" href="css/bulma.css"> -->

  </head>



<br><br><br><br>




<!-- -------------------------------------------------------------------- -->
<?php $types=array("ทรีทเมนท์ผิวหน้า", "ทรีทเมนท์ผิวกาย", "กระชับสัดส่วน","เลเซอร์","ปรับรูปหน้า");
$pic=array("img/10.png","img/11.png","img/12.png","img/13.png","img/14.png")

 ?>

<!-- <a class="button is-danger is-focused"  href="#ปรับรูปหน้า">ทรีทเมนท์ผิวหน้า</a> -->
<div class="columns is-mobile">
  <div class="column is-5 is-offset-4 is-medium is-large">
    <a class="button is-danger is-focused  "  href="#ทรีทเมนท์ผิวหน้า"  style="height:30px;font-size:110%;">ทรีทเมนท์ผิวหน้า</a>

    <a class="button is-danger is-focused"  href="#ทรีทเมนท์ผิวกาย"  style="height:30px;font-size:110%;">ทรีทเมนท์ผิวกาย</a>

    <a class="button is-danger is-focused"  href="#กระชับสัดส่วน"  style="height:30px;font-size:110%;">กระชับสัดส่วน</a>

    <a class="button is-danger is-focused"  href="#เลเซอร์"  style="height:30px;font-size:110%;">เลเซอร์</a>

    <a class="button is-danger is-focused"  href="#ปรับรูปหน้า"  style="height:30px;font-size:110%;">ปรับรูปหน้า</a>
  </div>
</div>
<br><br><br>
<!-- <a class="button is-danger is-focused"  href="#ทรีทเมนท์ผิวหน้า">ทรีทเมนท์ผิวหน้า</a>

<a class="button is-danger is-focused"  href="#ทรีทเมนท์ผิวกาย">ทรีทเมนท์ผิวกาย</a>

<a class="button is-danger is-focused"  href="#กระชับสัดส่วน">กระชับสัดส่วน</a>

<a class="button is-danger is-focused"  href="#เลเซอร์">เลเซอร์</a>

<a class="button is-danger is-focused"  href="#ปรับรูปหน้า">ปรับรูปหน้า</a> -->
<!--
<a class="button is-danger is-focused">ทรีทเมนท์ผิวกาย</a>
<a class="button is-danger is-focused">กระชับสัดส่วน</a>
<a class="button is-danger is-focused">เลเซอร</a>
<a class="button is-danger is-focused">ปรับรูปหน้า</a> -->

 @for($j = 0; $j < 5; $j++)
 <div class="columns is-multiline is-mobile" name="{{$types[$j]}}">
<!-- <div class="columns is-multiline is-mobile"  id="vue-detail" v-for="(index,d) in pic"> -->
<!-- <div class="column is-one-quarter"v-for="d in pic"> -->
<a name="{{$types[$j]}}"></a>
<div class="column is-one-third has-text-centered" >
<a class="button is-danger is-outlined column is-5 is-offset-1  is-large">{{$types[$j]}}</a><br><br>

 <!-- <img style="width:70%" src= 'img/10.png' > -->
   <img style="width:50%" src= "{{$pic[$j]}}" >
    <!-- <img style="width:80%" :src= "d.path" > -->

</div>
<br>
<div class="column">

@for ($i = 0; $i < count($data); $i++)
@if($data[$i]->category==$types[$j])
@if($data[$i]->type_id=='1')
@for ($c = 0; $c < count($data_promotion); $c++)
@if($data[$i]->id==$data_promotion[$c]->course_id)
<img class = " " style="width:10%" src="img/promotion.gif" >
@endif
@endfor

  <div class="click"   style="border-radius: 25px; background: 	#FFB6C1; padding: 20px; margin-top:5px; font-size:20px;"> {{$data[$i]->name}}   ราคา : {{$data[$i]->price}} บาท   <img style="width:3%" src="img/down-arrow.png" onclick="descw(this)" ></div>

  <div class="desc"  style="display: none; border-radius: 25px;
    border: 2px solid red; background: 	#fff;
    padding: 20px;  margin-top:5px; font-size:18px;" >
  <img img  src="img/up-arrow.png" onclick="descc(this)" style="float:right; margin: 3px 10px 5px 5px; width:3%;">
  <p>{{$data[$i]->detail}}</p>
  </div>
  @endif
  @endif
  @endfor

</div>

</div>
@endfor

<!-- -------------------------------------------------------------------- -->








<style type="text/css">
.desc { display: none; border-radius: 25px;
    border: 2px solid red; background: 	#fff;
    padding: 20px;  margin-top:5px; font-size:18px; }
.click {  border-radius: 25px;
    /*border: 2px solid #73AD21;*/
    background: 	#FFB6C1; padding: 20px; margin-top:5px; font-size:20px; }
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
@endsection
