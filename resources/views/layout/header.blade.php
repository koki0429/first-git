@section('header')
<div class="l_header">
    <div class="l_header__top">
        <p class="l_header__titile">JIBIE STORE</p>
        <div class="l_header__userInfomation">
            <a href="{{ route('dashboard') }}"><i class="far fa-address-card"></i></a>
            <a href=""><i class="fas fa-cart-plus"></i></a>
        </div>
    </div>
    <ul class="l_header__navlists">
        <a href="<?php echo url("/product"); ?>" class="l_header__navlist"><li>HOME</li></a>
        <a href="<?php echo url("/product#jump_product"); ?>" class="l_header__navlist"><li>PRODUCT</li></a>
        <a href="{{ route('contact.index') }}" class="l_header__navlist"><li>CONTACT</li></a>
        <a href="<?php echo url("/product#jump_access") ?>" class="l_header__navlist"><li>ACCSECC</li></a>
        <a href="{{ route('product.about') }}" class="l_header__navlist"><li>ABOUT</li></a>
    </ul>
</div>
@endsection
