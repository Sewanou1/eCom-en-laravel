@extends('master')
@section('content')
    <div class="container custom-product" style="display:flex">

        <div  >
            <img src="{{ $product->gallery }}" alt="">
        </div>
       <div style="padding: 50px">
        <h3>
            <a href="{{ route("produit_page") }}" style="text-decoration: none">Go Back</a>
        </h3>
        <h2>{{ $product->name }}</h2>
        <h4>Price: {{ $product->price }}</h4>
        <h4> Detail: {{ $product->description }}</h4>
        <h4>Categorie: {{ $product->categorie }}</h4>
        <br> <br>

        <form action="{{ route('add_Cart') }}" method="POST" >
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button class="btn btn-primary">Add to cart</button>
        </form>

      <div>

        <button class="btn btn-success">Buy now</button>
      </div>



       </div>
    </div>
@stop
