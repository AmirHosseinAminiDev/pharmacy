@extends('user.layouts.master')
@section('content')
    <main class="main default space-top-10">
        {{--SLIDER START--}}
        @include('user.home.slider')
        {{--SLIDER END--}}
        {{--PRODUCTS SECTION START--}}
        {{--SERVICES START--}}
        @include('user.home.services')
        {{--PRODUCTS LIST OFFERS--}}
        @include('user.home.products-offer')
        {{--PRODUCTS LIST OFFERS--}}
        {{--USERS SUGGEST--}}
        @include('user.home.user-offers')
        {{--USERS SUGGEST--}}
        {{--SHOP CATEGORIES--}}
        @include('user.home.shop-categories')
        {{--SHOP CATEGORIES--}}
        {{--SHOP POPULAR BRANDS--}}
        @include('user.home.popular-brands')
        {{--SHOP POPULAR BRANDS--}}
        {{--PRODUCTS SECTION END--}}
        {{--BLOG SECTION--}}
        @include('user.home.blog')
        {{--BLOG SECTION--}}
    </main>
@endsection

