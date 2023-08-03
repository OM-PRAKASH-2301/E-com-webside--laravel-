@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
  <div class="trending-wrapper">
    <h4>Result for Products</h4>
    <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
    @foreach ($products as $item)
    <div class="row searched-items cart-list-divider">
        <div class="col-sm-4">
        <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{$item->gallery}}">
  <div class="">
    <h2>{{$item->name}}</h2>
    <h5>{{$item->description}}</h5>
  </div>
  </a>
        </div>
        <div class="col-sm-4 mt-5">
  <div class="">
    <h2>{{$item->name}}</h2>
    <h5>{{$item->description}}</h5>
  </div>
  </a>
        </div>
        <div class="col-sm-4 mt-5">
            <a href="/removecart/{{$item->cart_id}}"><button class="btn btn-warning">Remove to cart</button></a>
        </div>
</div>
@endforeach
</div>
<a class="btn btn-success" href="ordernow">Order Now</a><br><br>

  </div>
</div>
<!-- <div class="paddinbottom">&nbsp;
</div> -->
@endsection
