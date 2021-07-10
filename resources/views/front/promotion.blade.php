@extends('layouts.front')
@section('content')

    <div class="main-page">

        <div class="page-top bottom">
            <div class="wrapper">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Personal area</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="promotion">
            <div class="wrapper">
                <div class="promotion__top">
                    <div class="promotion__title title bottom">You are just one step away from the top...</div>
                    <div class="promotion__subtitle bottom">NFT projects listing options</div>
                </div>
                <promotions></promotions>
            </div>
        </div>

    </div>
@endsection
