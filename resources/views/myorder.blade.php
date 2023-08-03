@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
  <div class="trending-wrapper">
    <h4>My Orders</h4>
@foreach ($orders as $item)
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
    <h2>Name : {{$item->name}}</h2>
    <h5>Delivary status :{{$item->status}}</h5>
    <h5>Address : {{$item->address}}</h5>
    <h5>Payment status : {{$item->payment_status}}</h5>
    <h5>Payment method : {{$item->payment_method}}</h5>
  </div>
  </a>
        </div>
</div>
@endforeach
</div>
  </div>
</div>
<!-- <div class="paddinbottom">&nbsp;
</div> -->
@endsection
