<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
{
    $total= ProductController::cardItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('produit_page') }}">E-Com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Oorders</a></li>

        <form action="{{ route('search_page') }}" class="d-flex" >
          <input class="form-control  search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
</ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link active" href="{{ route('cartList') }}">Cart({{ $total }})</a></li>
        @if(Session::has('user'))
      <li class="dropdown">
        <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown">{{ Session::get('user')['name'] }}</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </li>
      @else
      <li class="nav-item"><a class="nav-link active" href="{{ route('login') }}">Login</a></li>
      @endif

    </ul>

      </div>
    </div>
  </nav>
