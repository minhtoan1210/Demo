@extends('master')
@section('content')
<div class="container">
      <?php foreach ($products as $key => $pr): ?>
<div class="col-3" style="margin: 15px;display: inline-block;border:0px solid black;">
    <div class="card" style="border:none;">
  <img src="source/img/{{$pr->image}}.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="chitiet/{{$pr->id}}">  <h5 class="card-title">{{$pr->name}}</h5></a>
    <p class="card-text">{{$pr->price}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
  <?php endforeach ?>
</div>

 {{ $products->links() }}
@endsection