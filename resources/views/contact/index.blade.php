@extends('layout.common')
@section('title', 'フォーム入力ページ')
@section('pageCss')
<link rel="stylesheet" href="/assets/css/contact/index.css">
@endsection
@section('pageJs')
<script src="{{asset('/assets/javascript/index.blade.js')}}"></script>
@endsection
@include('layout.header')
@section('content')
    <div class="contact load_up">
        <form method="POST" action="{{ route('contact.confirm') }}">
            @csrf

            <label for="mailaddress" class="p-labelName">メールアドレス</label><br>
            <input type="text" name="email" value="{{old('email')}}" class="p-formBox" placeholder="info@example.com"><br><br>
            @if($errors->has('email'))
                <p class="error-massage">メールアドレスを入力してください。</p><br><br>
            @endif

            <label for="title" class="p-labelName">タイトル</label><br>
            <input type="text" name="title" value="{{old('title')}}" class="p-formBox" placeholder="商品について"><br><br>
            @if($errors->has('title'))
                <p class="error-massage">タイトルを入力してください。</p><br><br>
            @endif

            <label for="content" class="p-labelName">お問い合わせ内容</label><br>
            <textarea name="content" class="p-formBox p-taxtBox">{{old('content')}}</textarea><br><br>
            @if($errors->has('content'))
                <p class="error-massage">お問い合わせ内容を入力してください。</p><br><br>
            @endif

            <button type="submit" class="c-formButton">入力内容確認</button>
        </form>
    </div>
@endsection
@include('layout.footer')
