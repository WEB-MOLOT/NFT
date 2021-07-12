@extends('layouts.front')

@section('title') NFT Projects @endsection

@section('content')

    <div class="main-page">

        <div class="menu bottom">
            <div class="wrapper">
                <div class="menu__scroll dragscroll">
                    <div class="menu__slick">
                        <div class="menu__slide">
                            <a href="{{ route('category', 'music') }}" class="menu__item menu__item_music">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-1.svg" alt="">
                                </div>
                                <div class="menu__caption">Music</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="{{ route('category', 'art') }}" class="menu__item menu__item_art">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-2.svg" alt="">
                                </div>
                                <div class="menu__caption">Art</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="{{ route('category', 'collectible') }}" class="menu__item menu__item_collectible">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-3.svg" alt="">
                                </div>
                                <div class="menu__caption">Collectible</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="{{ route('category', 'game') }}" class="menu__item menu__item_game">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-4.svg" alt="">
                                </div>
                                <div class="menu__caption">Game</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="{{ route('category', 'metaverse') }}" class="menu__item menu__item_metaverse">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-5.svg" alt="">
                                </div>
                                <div class="menu__caption">Metaverse</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="{{ route('category', 'sports') }}" class="menu__item menu__item_sports">
                                <div class="menu__icon">
                                    <img src="img/menu/icon-6.png" alt="">
                                </div>
                                <div class="menu__caption">Sports</div>
                            </a>
                        </div>
                        <div class="menu__slide">
                            <a href="{{ route('category', 'utility') }}" class="menu__item menu__item_utility">
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

        <div class="promo bottom delay-4">
            <div class="wrapper">
                <div class="promo__wrap">
                    <div class="arrow arrow_prew">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M16.875 10.0002C16.875 9.57833 16.533 9.23633 16.1111 9.23633H3.88889C3.467 9.23633 3.125 9.57833 3.125 10.0002C3.125 10.4221 3.467 10.7641 3.88889 10.7641H16.1111C16.533 10.7641 16.875 10.4221 16.875 10.0002Z" fill="#3340B4" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.77626 4.11241C9.47794 3.81409 8.99428 3.81409 8.69596 4.11241L3.34874 9.45963C3.05042 9.75795 3.05042 10.2416 3.34874 10.5399L8.69596 15.8872C8.99428 16.1855 9.47794 16.1855 9.77626 15.8872C10.0746 15.5888 10.0746 15.1052 9.77626 14.8069L4.96919 9.99978L9.77626 5.19271C10.0746 4.89439 10.0746 4.41073 9.77626 4.11241Z"
                                  fill="#3340B4" />
                        </svg>
                    </div>
                    <div class="arrow arrow_next">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M3.12524 9.99881C3.12524 10.4207 3.46725 10.7627 3.88913 10.7627L16.1114 10.7627C16.5332 10.7627 16.8752 10.4207 16.8752 9.99881C16.8752 9.57693 16.5332 9.23492 16.1114 9.23492L3.88913 9.23492C3.46725 9.23492 3.12524 9.57692 3.12524 9.99881Z"
                                  fill="#3340B4" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.224 15.8866C10.5223 16.1849 11.006 16.1849 11.3043 15.8866L16.6515 10.5394C16.9498 10.2411 16.9498 9.75741 16.6515 9.45909L11.3043 4.11187C11.006 3.81355 10.5223 3.81355 10.224 4.11187C9.92567 4.41018 9.92567 4.89385 10.224 5.19217L15.0311 9.99924L10.224 14.8063C9.92566 15.1046 9.92566 15.5883 10.224 15.8866Z"
                                  fill="#3340B4" />
                        </svg>
                    </div>
                    <div class="promo__slick">
                        <div class="promo__slide">
                            <div class="promo__item flex-center">
                                <div class="promo__bg img-cover">
                                    <img src="img/promo/bg-2.jpg" alt="">
                                </div>
                                <div class="promo__caption">All NFT Presales</div>
                            </div>
                        </div>
                        <div class="promo__slide">
                            <div class="promo__item flex-center">
                                <div class="promo__bg img-cover">
                                    <img src="img/promo/bg.jpg" alt="">
                                </div>
                                <div class="promo__caption">All NFT</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <projects :active="true" :upcoming="true"></projects>
    </div>
@endsection
