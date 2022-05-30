@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="col-sm-10">
            <div  class="trending-wrapper">
                <h4>Result for Products</h4>
                @foreach ($products as $item )
                <div class=" row searched-item cart-list-divider"  >
                    <div class="col-sm-4">
                        <a class="link_page"  href="{{ route('detail_page',$item->id)}}">
                            <img src="{{ $item->gallery }}"  class="tredning-image" >
                        </a>
                    </div>
                    <div class="col-sm-3">
                            <div class="">
                            <h2>{{ $item->name}}</h2>
                            <h5>{{ $item->description }}</h5>
                            </div>

                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning">Remove to Cart</button>
                    </div>

                </div>


            @endforeach
        </div>
    </div>
</div>

@stop
