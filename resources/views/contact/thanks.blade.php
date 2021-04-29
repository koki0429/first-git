@extends('layout.common')
@section('title', 'トップページ')
@section('pageCss')
<link rel="stylesheet" href="/assets/css/contact/thanks.css">
@endsection
@section('pageJs')
@endsection
@include('layout.header')
@section('content')
    <div class="p-thanks">
        <h1 class="p-thanksFinish">{{__('送信完了')}}</h1>
        <p class="p-thanksMessage">
            お問い合わせいただき誠にありがとうございます。<br>
            今後ともよろしくお願い致します。
        </p>
        <a href="{{ route('product.index') }}" class="c-formButton">トップページに戻る</a>
    </div>
@endsection
@include('layout.footer')
