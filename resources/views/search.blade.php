@extends('master')
@section('content')

<div id="carouselExampleIndicators" class="row" data-ride="carousel">
  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div>
  <div class="col-sm-4">
  <div class="trending-wrapper">
    <h2>Result for products</h2>
    @foreach ($product as $item)
    <div class="searched-item">
    <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}">
  <div class="">
    <h2>{{$item['name']}}</h2>
    <h5>{{$item['description']}}</h5>
  </div>
  </a>
</div>
@endforeach
</div>
  </div>
  </div>
@endsection
