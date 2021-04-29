@extends('layout.common')
@section('title', '詳細ページ')
@section('pageCss')
<link rel="stylesheet" href="/assets/css/product/show.css">
@endsection
@section('pageJs')
@endsection
@include('layout.header')
@section('content')
    <div class="p-productShow">
        <div class="p-prShow_img">
            <img src="{{asset('storage/' . $product->image)}}" class="c-img_showProduct" alt="商品画像">
        </div>
        <div class="p-prShow_details">
            <h3 class="proShow_name">{{$product -> name}}</h3>
            <?php $price = number_format($product->price); ?>
            <p class="p-proShow_detail"><span>価格：<?php echo $price; ?></span></p>
            <p class="p-proShow_detail"><span>在庫数：{{$product -> stock}}</span></p>
            <p class="p-proShow_detail p-proShow_desc"><span>商品紹介 : {{$product -> detail}}</span></p>
            <div class="p-reactionButton">
                <a href="" class="p-kartIn p-rctBtn">カートに入れる</a>
            </div>
        </div>
    </div>
@endsection
@include('layout.footer')
