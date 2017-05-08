@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>voucher</title>

    <style>
    .mySlides {display:none;}
    </style>
  </head>

      <!-- Hero content: will be in the middle -->
      @section('pic')
            <div class="column "><img class="column is-2 is-offset-1"src= "img/gift-vouchers.jpg" style="width:80%"></div>
  @endsection

  <br><br><br><br>





<!-- <div class="w3-container">
  <h2>Animated Slides</h2>
  <p>Slide or fade in an element from the top, bottom, left or right of the screen with the w3-animate-* classes.</p>
</div> -->
<div class="w3-content w3-section" >
@foreach($data as $a)
@if($a->type_id=='2')

<img class="mySlides w3-animate-left"style="width:100%" src='img/{{$a->pic_path}}' alt='Test test'>
@endif
@endforeach
</div>

@for($j = 0; $j < count($data); $j++)
@if($data[$j]->type_id=='2')
<div class="columns is-multiline is-mobile" name="">
<!-- <div class="columns is-multiline is-mobile"  id="vue-detail" v-for="(index,d) in pic"> -->
<!-- <div class="column is-one-quarter"v-for="d in pic"> -->

<div class="column is-half has-text-centered" >

<br><br><br><br><br><br>
  <img style="width:80%" src= "img/{{$data[$j]->pic_path}}" >


</div>

<div class="column">
<br><br><br><br><br><br>
 <div class="tag is-danger is-large"> Voucher : {{$data[$j]->name}}   ใช้  {{$data[$j]->price}} Point </div>

 <br><br>
 <div class="desc">
 <!-- <img src="https://lh6.googleusercontent.com/-wbz6cuxM6Tw/T9P30GA6azI/AAAAAAAACbM/O1eECuA2J7o/s24/minus.png" onclick="descc(this)" style="float:right; margin: 3px 10px 5px 5px;" > -->
 <p>{{$data[$j]->detail}}</p>
 </div>


</div>




</div>
@endif
@endfor

<!-- <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-left" src="img/6.png" style="width:100%">
  <img class="mySlides w3-animate-left" src="img/7.png" style="width:100%">
  <img class="mySlides w3-animate-left" src="img/8.png" style="width:100%">
  <img class="mySlides w3-animate-left" src="img/9.png" style="width:100%">
</div> -->





    <!-- <div class="column "><img class=""src= "img/bow2.png" style="width:20%"></div> -->
<!-- <div class="column "><img class="column is-2 is-offset-1"src= "img/gift-vouchers.jpg" style="width:80%"></div> -->
      <!-- <div class="column "><img class="column is-2 is-offset-10"src= "img/end.png" style="width:20%"></div> -->
<!-- <div class="column "><img class="column is-2 is-offset-1"src= "img/card.png" style="width:80%"></div> -->
<!--
<div class="columns is-gapless has-text-centered">
  <div class="column "><img class="" src="img/6.png" style="width:80%"></div>
  <div class="column"><img class="" src="img/7.png" style="width:80%"></div>
  <div class="column"><img class="" src="img/8.png" style="width:80%"></div>
  <div class="column"><img class="" src="img/9.png" style="width:80%"></div>
</div> -->

<style type="text/css">
.desc {  border-radius: 25px;
    border: 2px solid red; background: 	#fff;
    padding: 20px;  margin-top:5px; font-size:18px; }
</style>
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
    setTimeout(carousel, 2500);
}
</script>
  </body>
</html>
@endsection
