@extends('master')
@section('content')
    <div class="container custom-product">
    <div  class="col sm-4">
        <a href="#" class="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div  class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($data as $item )
            <div class="searched-item">
                <img src="{{ $item['gallery'] }}"  class="tredning-image" >
                <div class="">
                <a class="link_page" id="{{ $item['id'] }}" href="{{ route('detail_page',$item->id)}}"><h3>{{ $item['name'] }}</h3></a>
                <a class="link_page" id="{{ $item['id'] }}" href="{{ route('detail_page',$item->id)}}"><h3>{{ $item['description'] }}</h3></a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>

@stop
