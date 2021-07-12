@extends('layouts.front')

@section('title') Active NFTs @endsection

@section('content')

    <div class="main-page">

        <div class="menu bottom">
            <div class="wrapper">
                <div class="menu__scroll dragscroll">
                    <div class="menu__slick">
                        <div class="menu__slide">
                            <a href="#" class="menu__item menu__item_music">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-1.svg" alt="">
                                </div>
                                <div class="menu__caption">Music</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="#" class="menu__item menu__item_art">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-2.svg" alt="">
                                </div>
                                <div class="menu__caption">Art</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="#" class="menu__item menu__item_collectible">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-3.svg" alt="">
                                </div>
                                <div class="menu__caption">Collectible</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="#" class="menu__item menu__item_game">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-4.svg" alt="">
                                </div>
                                <div class="menu__caption">Game</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="#" class="menu__item menu__item_metaverse">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-5.svg" alt="">
                                </div>
                                <div class="menu__caption">Metaverse</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="#" class="menu__item menu__item_sports">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-6.png" alt="">
                                </div>
                                <div class="menu__caption">Sports</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="#" class="menu__item menu__item_utility">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-7.svg" alt="">
                                </div>
                                <div class="menu__caption">Utility</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <projects :active="true" :upcoming="false"></projects>
    </div>
@endsection
