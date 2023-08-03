@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>Name : {{$product['name']}}</h2>
            <h4>Price : {{$product['price']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            <h4>Description : {{$product['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-success">Add to cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection
