@extends('layout.common')
@section('title', 'フォーム確認ページ')
@section('pageCss')
<link rel="stylesheet" href="/assets/css/contact/confirm.css">
@endsection
@section('pageJs')
@endsection
@include('layout.header')
@section('content')
    <div class="contact">
        <form method="POST" action="{{ route('contact.send') }}">
            @csrf

            <label for="mailaddress" class="p-labelName">メールアドレス</label><br>
            <p class="c-confirm">{{ $inputs['email'] }}</p>
            <input type="hidden" name="email" value="{{ $inputs['email'] }}"><br><br>
            @if($errors->has('email'))
                <p class="error-massage">{{$errors->first('email')}}</p>
            @endif

            <label for="title" class="p-labelName">タイトル</label><br>
            <p class="c-confirm">{{ $inputs['title'] }}</p>
            <input type="hidden" name="title" value="{{ $inputs['title'] }}"><br><br>
            @if($errors->has('title'))
                <p class="error-massage">{{$errors->first('title')}}</p>
            @endif

            <label for="content" class="p-labelName">お問い合わせ内容</label><br>
            <p class="c-confirm">{!! nl2br(e($inputs['content'])) !!}</p><br><br>
            <input type="hidden" name="content" value="{{ $inputs['content'] }}">
            @if($errors->has('content'))
                <p class="error-massage">{{$errors->first('content')}}</p><br><br>
            @endif

            <div class="p-reactionButton">
                <button type="submit" name="action" value="back" class="c-formButton">入力内容修正</button>
                <button type="submit" name="action" value="submit" class="c-formButton">送信する</button>
            </div>
        </form>
    </div>
@endsection
@include('layout.footer')
