<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.jpg') }}" width="40" height="30" class="d-inline-block align-top" style="margin-right: 5px;" alt="">OC shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorder">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cartlist">cart({{$total}})</a>
      </li>
      @if(Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
      </li>
      @else
      <li class="nav-item"><a class="top-header" href="/login">Login</a></li>
      <li class="nav-item"><a class="top-header" href="/register">Register</a></li>
      @endif
      <!-- Add more navigation items here -->
    </ul>
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input class="form-control search-box mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>