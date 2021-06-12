@extends('master')
@section('content')
<div class="container"> 
 <div class="card"> 
  <div class="container-fliud"> 
   <div class="wrapper row"> 
    <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
      <div class="tab-pane active" id="pic-1"> 
        <img src="source/img/{{$detail->image}}.jpg" class="card-img-top" alt="...">
      </div> 
     </div> 
    
    </div> 
    <div class="details col-md-6"> 
     <h3 class="product-title">Sản Phẩm {{$detail->name}}</h3> 
     <div class="rating"> 
      <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
     
     </div> 
     <h4 class="price">Giá bán:{{$detail->price}} </h4> 
     <div class="action"> <a href="http://hocwebgiare.com/" target="_blank">            <button class="add-to-cart btn btn-default" type="button">MUA NGAY</button>            </a> <a href="http://hocwebgiare.com/" target="_blank">            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>            </a> 
     </div> 
    </div> 
   </div> 
  </div> 
 </div>
</div> 
@endsection
