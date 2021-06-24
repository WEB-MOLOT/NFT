<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $navigation->getTitle() }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.svg">
    <style>.page.page_hide{opacity:0;transition:.3s opacity}@media(max-width:760px){.filter__bottom{display:none}}</style>
    @stack('header')
</head>
<body>
<div class="page page_hide">
    <div class="unsubscribed message-bar" style="position: fixed;">
        <div class="unsubscribed__icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.3673 6.5397C10.4197 6.49085 10.462 6.43215 10.4917 6.36697C10.5214 6.30178 10.538 6.23138 10.5405 6.15979C10.543 6.0882 10.5314 6.01681 10.5063 5.94971C10.4812 5.8826 10.4432 5.8211 10.3943 5.7687C10.3455 5.7163 10.2868 5.67404 10.2216 5.64433C10.1564 5.61461 10.086 5.59803 10.0144 5.59552C9.94281 5.59301 9.87142 5.60463 9.80432 5.62971C9.73722 5.65479 9.67571 5.69285 9.62331 5.7417L8.02731 7.2297L6.53931 5.63315C6.43975 5.53118 6.30423 5.47222 6.16174 5.4689C6.01926 5.46558 5.88114 5.51815 5.77693 5.61537C5.67272 5.7126 5.61071 5.84675 5.60415 5.98912C5.5976 6.13148 5.64702 6.27077 5.74186 6.37715L7.22986 7.97315L5.63331 9.46115C5.57906 9.50951 5.53502 9.56822 5.50378 9.63383C5.47254 9.69945 5.45473 9.77064 5.45138 9.84324C5.44804 9.91583 5.45924 9.98836 5.48432 10.0566C5.5094 10.1248 5.54786 10.1873 5.59743 10.2404C5.64701 10.2936 5.7067 10.3363 5.773 10.366C5.83931 10.3957 5.91089 10.4119 5.98354 10.4136C6.0562 10.4153 6.12845 10.4025 6.19607 10.3759C6.26369 10.3492 6.32531 10.3094 6.37731 10.2586L7.97331 8.77115L9.46131 10.3672C9.50936 10.4224 9.56803 10.4674 9.63385 10.4995C9.69966 10.5316 9.77126 10.5501 9.84438 10.5539C9.91749 10.5578 9.99063 10.5468 10.0594 10.5218C10.1282 10.4968 10.1913 10.4581 10.2449 10.4082C10.2984 10.3583 10.3414 10.2981 10.3712 10.2312C10.401 10.1643 10.417 10.0921 10.4183 10.0189C10.4196 9.94569 10.4061 9.87297 10.3787 9.80508C10.3513 9.73718 10.3105 9.67549 10.2588 9.6237L8.77131 8.0277L10.3673 6.5397Z" fill="white"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 4.68636 4.68636 2 8 2C11.3136 2 14 4.68636 14 8C14 11.3136 11.3136 14 8 14C4.68636 14 2 11.3136 2 8ZM8 12.9091C7.35533 12.9091 6.71697 12.7821 6.12137 12.5354C5.52577 12.2887 4.9846 11.9271 4.52875 11.4713C4.0729 11.0154 3.7113 10.4742 3.46459 9.87863C3.21789 9.28303 3.09091 8.64467 3.09091 8C3.09091 7.35533 3.21789 6.71697 3.46459 6.12137C3.7113 5.52577 4.0729 4.9846 4.52875 4.52875C4.9846 4.0729 5.52577 3.7113 6.12137 3.46459C6.71697 3.21789 7.35533 3.09091 8 3.09091C9.30197 3.09091 10.5506 3.60812 11.4713 4.52875C12.3919 5.44938 12.9091 6.69803 12.9091 8C12.9091 9.30197 12.3919 10.5506 11.4713 11.4713C10.5506 12.3919 9.30197 12.9091 8 12.9091Z" fill="white"></path>
            </svg>
        </div>
        <div class="unsubscribed__caption"></div>
    </div>

    <header id="header" class="header  ">
        <div class="wrapper ">
            <div class="header__wrap flex">
                <div class="header__first">
                    <a href="/" class="logo flex">
                        <div class="logo__icon img-contain">
                            <img src="/img/icons/logo-icon.svg" alt="">
                        </div>
                        <div class="logo__caption">NFT projects</div>
                    </a>
                    <div class="header__first-box">
                        <div class="header__burger svg-contain">
                            <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="24" height="3" rx="1.5" fill="#2F3E46" />
                                <rect y="7.5" width="24" height="3" rx="1.5" fill="#2F3E46" />
                                <rect y="14.5" width="24" height="3" rx="1.5" fill="#2F3E46" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="header__contain">
                    <div class="header__top">
                        <div class="header__caption">Menu</div>
                        <div class="header__closed svg-contain">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.9457 7.56616C14.033 7.48475 14.1035 7.38692 14.153 7.27828C14.2025 7.16964 14.2302 7.05231 14.2343 6.93298C14.2385 6.81366 14.2191 6.69468 14.1773 6.58284C14.1355 6.471 14.0721 6.36849 13.9907 6.28117C13.9093 6.19384 13.8115 6.1234 13.7028 6.07388C13.5942 6.02435 13.4768 5.99671 13.3575 5.99253C13.2382 5.98835 13.1192 6.00772 13.0074 6.04952C12.8955 6.09132 12.793 6.15475 12.7057 6.23617L10.0457 8.71616L7.5657 6.05526C7.39976 5.8853 7.17389 5.78704 6.93642 5.7815C6.69896 5.77596 6.46875 5.86359 6.29507 6.02562C6.12139 6.18766 6.01803 6.41124 6.0071 6.64853C5.99618 6.88581 6.07855 7.11794 6.23661 7.29526L8.71661 9.95526L6.0557 12.4353C5.96529 12.5158 5.89189 12.6137 5.83982 12.7231C5.78775 12.8324 5.75806 12.9511 5.75249 13.0721C5.74692 13.1931 5.76558 13.3139 5.80738 13.4276C5.84918 13.5413 5.91328 13.6455 5.9959 13.734C6.07853 13.8226 6.17801 13.8938 6.28852 13.9433C6.39903 13.9929 6.51834 14.0199 6.63942 14.0227C6.76051 14.0255 6.88094 14.0041 6.99364 13.9598C7.10634 13.9154 7.20904 13.849 7.2957 13.7643L9.9557 11.2853L12.4357 13.9453C12.5158 14.0373 12.6136 14.1124 12.7233 14.1658C12.8329 14.2193 12.9523 14.2502 13.0741 14.2566C13.196 14.2629 13.3179 14.2447 13.4326 14.203C13.5473 14.1613 13.6524 14.0969 13.7416 14.0137C13.8309 13.9304 13.9025 13.8301 13.9521 13.7186C14.0018 13.6072 14.0285 13.4868 14.0306 13.3648C14.0328 13.2428 14.0104 13.1216 13.9647 13.0085C13.919 12.8953 13.851 12.7925 13.7648 12.7062L11.2857 10.0462L13.9457 7.56616Z"
                                    fill="#BAC1FE" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0 10C0 4.47727 4.47727 0 10 0C15.5227 0 20 4.47727 20 10C20 15.5227 15.5227 20 10 20C4.47727 20 0 15.5227 0 10ZM10 18.1818C8.92555 18.1818 7.86162 17.9702 6.86895 17.559C5.87629 17.1478 4.97433 16.5452 4.21458 15.7854C3.45483 15.0257 2.85216 14.1237 2.44099 13.131C2.02981 12.1384 1.81818 11.0745 1.81818 10C1.81818 8.92555 2.02981 7.86162 2.44099 6.86895C2.85216 5.87629 3.45483 4.97433 4.21458 4.21458C4.97433 3.45483 5.87629 2.85216 6.86895 2.44099C7.86162 2.02981 8.92555 1.81818 10 1.81818C12.17 1.81818 14.251 2.68019 15.7854 4.21458C17.3198 5.74897 18.1818 7.83005 18.1818 10C18.1818 12.17 17.3198 14.251 15.7854 15.7854C14.251 17.3198 12.17 18.1818 10 18.1818Z"
                                      fill="#BAC1FE" />
                            </svg>
                        </div>
                    </div>
                    <nav class="header__menu">
                        <ul>
                            <li>
                                <a href="#">Active NFT</a>
                            </li>
                            <li>
                                <a href="#">Upcoming NFT</a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="header__menu header__menu_hidden">
                        <ul>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy & Terms</a>
                            </li>
                            <li>
                                <a href="#">Rating</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social social_hidden">
                        <a href="#" class="social__link flex">
                            <div class="social__icon">
                                <img src="/img/icons/twitter.svg" alt="" width="100%" height="100%">
                            </div>
                            <div class="social__caption">Twitter</div>
                        </a>
                        <a href="#" class="social__link flex">
                            <div class="social__icon">
                                <img src="/img/icons/telegram.svg" alt="" width="100%" height="100%">
                            </div>
                            <div class="social__caption">Telegram News (ENG) </div>
                        </a>
                        <a href="#" class="social__link flex">
                            <div class="social__icon">
                                <img src="/img/icons/telegram.svg" alt="" width="100%" height="100%">
                            </div>
                            <div class="social__caption">Telegram Chat (ENG)</div>
                        </a>
                        <a href="#" class="social__link flex">
                            <div class="social__caption">Telegram News (RU)</div>
                        </a>
                        <a href="#" class="social__link flex">
                            <div class="social__caption">Telegram Chat (RU)</div>
                        </a>
                    </div>
                </div>
                <form action="#" class="header__search">
                    <div class="header__search-box">
                        <button class="header__search-btn">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.25 7.33333C3.25 4.80203 5.30203 2.75 7.83333 2.75C10.3646 2.75 12.4167 4.80203 12.4167 7.33333C12.4167 9.86464 10.3646 11.9167 7.83333 11.9167C5.30203 11.9167 3.25 9.86464 3.25 7.33333ZM7.83333 1.25C4.4736 1.25 1.75 3.9736 1.75 7.33333C1.75 10.6931 4.4736 13.4167 7.83333 13.4167C9.24289 13.4167 10.5405 12.9373 11.5719 12.1326L13.303 13.8637C13.5959 14.1566 14.0708 14.1566 14.3637 13.8637C14.6566 13.5708 14.6566 13.0959 14.3637 12.803L12.6326 11.0719C13.4373 10.0405 13.9167 8.74289 13.9167 7.33333C13.9167 3.9736 11.1931 1.25 7.83333 1.25Z"
                                      fill="#5E7C8D" />
                            </svg>
                        </button>
                        <input type="text" class="header__search-field field" placeholder="Search">
                        <div class="header__search-list">
                            <div class="header__search-list__project">
                                <div class="header__search-list__name-project">Name collections</div>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="/img/icons/avatar-project.svg" alt="">
                                            <span>Name project</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/img/icons/avatar-project.svg" alt="">
                                            <span>Name project</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__search-list__project">
                                <div class="header__search-list__name-project">Name collections</div>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="/img/icons/avatar-project.svg" alt="">
                                            <span>Name project</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="header__buttons flex">
                    <div class="header__buttons-hidden"></div>
                    <a href="#" class="header__promotion flex">
                        <div class="header__promotion-icon">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M4.56575 15.525C4.76375 15.8948 5.15 16.1257 5.57 16.125C5.747 16.1257 5.9225 16.0845 6.08 16.005L9.494 14.22C9.503 14.2147 9.5135 14.2118 9.524 14.2125L12.9148 15.9825C13.079 16.071 13.2628 16.1168 13.4488 16.116C13.508 16.116 13.568 16.1107 13.6265 16.1025C14.237 16.0027 14.654 15.4313 14.564 14.82L13.904 11.0625C13.9002 11.057 13.8991 11.0567 13.8989 11.0561C13.8988 11.0559 13.8988 11.0556 13.8988 11.055C13.8988 11.0527 13.904 11.0475 13.904 11.0475L16.6565 8.385C17.063 7.99275 17.1147 7.3605 16.7765 6.9075C16.5927 6.6705 16.3235 6.5145 16.0265 6.4725L12.23 5.925C12.2233 5.925 12.2157 5.9175 12.2083 5.91L10.5125 2.505C10.3212 2.12025 9.92975 1.87725 9.5 1.875C9.3755 1.875 9.251 1.8945 9.1325 1.935C8.84825 2.03175 8.6135 2.23575 8.48 2.505L6.7865 5.90025C6.7865 5.916 6.77075 5.92275 6.75575 5.92275L2.96825 6.47025C2.7365 6.50925 2.5205 6.61275 2.34575 6.77025C2.1245 6.987 2 7.28475 2 7.59525C2.00075 7.89 2.11925 8.172 2.33 8.3775L5.105 11.0475C5.111 11.0535 5.11325 11.0618 5.11325 11.07L4.445 14.8125C4.40525 15.057 4.448 15.3075 4.56575 15.525ZM9.47827 2.97526L9.48577 2.97001H9.50002L9.50677 2.97676C9.51352 2.97676 9.51952 2.97826 9.52477 2.98276C9.52927 2.98726 9.53152 2.99326 9.53077 3.00001L11.2258 6.38926C11.3885 6.72301 11.705 6.95551 12.0725 7.01176L15.869 7.56376C15.8758 7.56376 15.8825 7.56526 15.8885 7.56826C15.8923 7.56901 15.8953 7.56901 15.899 7.56826L15.9065 7.57501L15.899 7.59151L13.1465 10.2608C12.8728 10.5173 12.7505 10.8968 12.8233 11.265L13.484 15.0008L13.469 15.015H13.4533C13.4503 15.0165 13.4473 15.0165 13.4443 15.015C13.4368 15.0143 13.4293 15.0113 13.4225 15.0075H13.4158L10.0408 13.245C9.87877 13.161 9.69877 13.116 9.51577 13.1168C9.32752 13.1168 9.14152 13.164 8.97502 13.2525L5.57827 15.0338C5.57452 15.0345 5.57002 15.0345 5.56627 15.0338C5.55052 15.0338 5.53702 15.0233 5.53327 15.0083V14.9933L6.19327 11.2583C6.25477 10.893 6.13477 10.5203 5.87077 10.2608L3.09577 7.59826C3.09502 7.58701 3.09652 7.57726 3.10252 7.56751L3.14827 7.55251L6.92077 7.01176C7.28827 6.95476 7.60402 6.72301 7.76752 6.38926L9.46327 2.99176C9.46702 2.98501 9.47152 2.97901 9.47827 2.97526Z"
                                      fill="#E0592E" />
                            </svg>
                        </div>
                        <div class="header__promotion-caption">Promotion</div>
                    </a>
                    <div class="header__cabinet">
                        @auth
                            @include('visible.particles.layout.user')
                        @else
                            <a href="#" class="header__signin signin--js">Sign In</a>
                        @endauth
                    </div>
                </div>
                <a href="{{ route('visible.pages.submit') }}" class="header__btn flex">
                    <span>submit nft</span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path
                                d="M11.7696 7.99569C11.7695 7.81891 11.6993 7.64938 11.5743 7.52438C11.4493 7.39938 11.2798 7.32915 11.103 7.32912L8.6649 7.32912L8.6649 4.89102C8.66186 4.71624 8.5903 4.54965 8.46563 4.42712C8.34095 4.30459 8.17314 4.23594 7.99834 4.23594C7.82353 4.23594 7.65572 4.30459 7.53105 4.42712C7.40637 4.54965 7.33481 4.71624 7.33177 4.89102L7.33177 7.32912L4.89367 7.32912C4.71889 7.33216 4.55229 7.40372 4.42977 7.5284C4.30724 7.65307 4.23858 7.82088 4.23858 7.99569C4.23858 8.17049 4.30724 8.3383 4.42977 8.46298C4.55229 8.58765 4.71889 8.65922 4.89367 8.66225L7.33177 8.66225V11.1004C7.33481 11.2751 7.40637 11.4417 7.53105 11.5643C7.65572 11.6868 7.82353 11.7554 7.99834 11.7554C8.17314 11.7554 8.34095 11.6868 8.46563 11.5643C8.5903 11.4417 8.66186 11.2751 8.6649 11.1004L8.6649 8.66225L11.103 8.66225C11.2798 8.66223 11.4493 8.59199 11.5743 8.46699C11.6993 8.34199 11.7695 8.17246 11.7696 7.99569Z"
                                fill="#5E7C8D" />
                            <path
                                d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845885 10.121 0.00229405 8 0V0ZM8 14.6667C6.68146 14.6667 5.39253 14.2757 4.2962 13.5431C3.19987 12.8106 2.34539 11.7694 1.84081 10.5512C1.33622 9.33305 1.2042 7.9926 1.46144 6.6994C1.71867 5.40619 2.35361 4.2183 3.28596 3.28595C4.21831 2.3536 5.4062 1.71867 6.6994 1.46143C7.99261 1.2042 9.33305 1.33622 10.5512 1.8408C11.7694 2.34539 12.8106 3.19987 13.5431 4.2962C14.2757 5.39253 14.6667 6.68146 14.6667 8C14.6647 9.76751 13.9617 11.4621 12.7119 12.7119C11.4621 13.9617 9.76752 14.6647 8 14.6667Z"
                                fill="#5E7C8D" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <div class="main-page">
        @yield('content')
    </div>

    <div id="callback-modal" class="callback-modal modal" style="display: none;">
        <div class="modal__top">
            <div class="modal__closed flex-center svg-contain" data-fancybox-close>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.7348 9.0794C16.8396 8.98169 16.9241 8.86431 16.9835 8.73394C17.043 8.60357 17.0761 8.46277 17.0811 8.31958C17.0862 8.17639 17.0629 8.03362 17.0127 7.89941C16.9626 7.76521 16.8865 7.64219 16.7888 7.5374C16.6911 7.4326 16.5737 7.34808 16.4433 7.28865C16.3129 7.22922 16.1721 7.19605 16.029 7.19104C15.8858 7.18603 15.743 7.20926 15.6088 7.25943C15.4746 7.30959 15.3516 7.3857 15.2468 7.4834L12.0548 10.4594L9.07877 7.26631C8.87965 7.06236 8.6086 6.94444 8.32364 6.9378C8.03868 6.93115 7.76244 7.0363 7.55402 7.23075C7.3456 7.4252 7.22156 7.69349 7.20845 7.97823C7.19534 8.26297 7.2942 8.54153 7.48387 8.75431L10.4599 11.9463L7.26677 14.9223C7.15828 15.019 7.0702 15.1364 7.00772 15.2677C6.94523 15.3989 6.9096 15.5413 6.90292 15.6865C6.89623 15.8317 6.91863 15.9767 6.96879 16.1131C7.01895 16.2496 7.09586 16.3746 7.19501 16.4808C7.29416 16.5871 7.41355 16.6725 7.54616 16.732C7.67877 16.7915 7.82194 16.8239 7.96724 16.8273C8.11254 16.8307 8.25706 16.805 8.3923 16.7517C8.52754 16.6985 8.65078 16.6188 8.75477 16.5172L11.9468 13.5423L14.9228 16.7343C15.0189 16.8448 15.1362 16.9348 15.2678 16.999C15.3995 17.0632 15.5427 17.1002 15.6889 17.1079C15.8351 17.1155 15.9814 17.0937 16.119 17.0436C16.2566 16.9935 16.3828 16.9162 16.4899 16.8164C16.597 16.7165 16.6829 16.5961 16.7425 16.4624C16.8021 16.3286 16.8341 16.1842 16.8367 16.0378C16.8393 15.8914 16.8124 15.7459 16.7576 15.6102C16.7028 15.4744 16.6212 15.351 16.5177 15.2474L13.5428 12.0554L16.7348 9.0794Z" fill="#8EA5B2"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37273 5.37273 0 12 0C18.6273 0 24 5.37273 24 12C24 18.6273 18.6273 24 12 24C5.37273 24 0 18.6273 0 12ZM12 21.8182C10.7107 21.8182 9.43394 21.5642 8.24274 21.0708C7.05155 20.5774 5.9692 19.8542 5.0575 18.9425C4.14579 18.0308 3.42259 16.9485 2.92918 15.7573C2.43577 14.5661 2.18182 13.2893 2.18182 12C2.18182 10.7107 2.43577 9.43394 2.92918 8.24274C3.42259 7.05155 4.14579 5.9692 5.0575 5.0575C5.9692 4.14579 7.05155 3.42259 8.24274 2.92918C9.43394 2.43577 10.7107 2.18182 12 2.18182C14.6039 2.18182 17.1012 3.21623 18.9425 5.0575C20.7838 6.89876 21.8182 9.39606 21.8182 12C21.8182 14.6039 20.7838 17.1012 18.9425 18.9425C17.1012 20.7838 14.6039 21.8182 12 21.8182Z" fill="#8EA5B2"/>
                </svg>
            </div>
        </div>
        <form action="#" class="modal__body">
            <div class="modal__title">Enter your information</div>
            <div class="modal__subtitle">We will notify you one hour in advance</div>
            <div class="modal__box">
                <label class="modal__label">
                    <input type="text" name="text" class="modal__field field" placeholder="Enter nickname in telegram or email">
                </label>
                <label class="modal__label">
                    <input type="text" name="text" class="modal__field field" placeholder="Enter email">
                </label>
                <button class="modal__btn">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33388 9.19206V9.04607C2.3553 8.61415 2.49373 8.19564 2.7349 7.83372C3.13633 7.39896 3.41113 6.86619 3.53047 6.2913C3.53047 5.84698 3.53047 5.39632 3.56928 4.952C3.76979 2.81293 5.88485 1.33398 7.97403 1.33398H8.02578C10.115 1.33398 12.23 2.81293 12.437 4.952C12.4758 5.39632 12.437 5.84698 12.4693 6.2913C12.5903 6.86752 12.8648 7.40195 13.2649 7.84007C13.5079 8.19879 13.6465 8.61576 13.6659 9.04607V9.18572C13.6804 9.76601 13.4805 10.3319 13.1032 10.7789C12.6046 11.3016 11.9281 11.6268 11.2016 11.6929C9.07132 11.9215 6.92202 11.9215 4.79174 11.6929C4.06609 11.624 3.3905 11.2993 2.89013 10.7789C2.51866 10.3315 2.32149 9.76904 2.33388 9.19206Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.36995 13.9023C6.7028 14.3201 7.19159 14.5905 7.72814 14.6536C8.2647 14.7168 8.80477 14.5675 9.22884 14.2388C9.35926 14.1415 9.47662 14.0285 9.57811 13.9023" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>follow</span>
                </button>
            </div>
        </form>
    </div><!-- end callback-modal -->

    <div id="project-modal" class="project-modal modal" style="display: none;">
        <div class="modal__top">
            <div class="modal__closed flex-center svg-contain" data-fancybox-close>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.7348 9.0794C16.8396 8.98169 16.9241 8.86431 16.9835 8.73394C17.043 8.60357 17.0761 8.46277 17.0811 8.31958C17.0862 8.17639 17.0629 8.03362 17.0127 7.89941C16.9626 7.76521 16.8865 7.64219 16.7888 7.5374C16.6911 7.4326 16.5737 7.34808 16.4433 7.28865C16.3129 7.22922 16.1721 7.19605 16.029 7.19104C15.8858 7.18603 15.743 7.20926 15.6088 7.25943C15.4746 7.30959 15.3516 7.3857 15.2468 7.4834L12.0548 10.4594L9.07877 7.26631C8.87965 7.06236 8.6086 6.94444 8.32364 6.9378C8.03868 6.93115 7.76244 7.0363 7.55402 7.23075C7.3456 7.4252 7.22156 7.69349 7.20845 7.97823C7.19534 8.26297 7.2942 8.54153 7.48387 8.75431L10.4599 11.9463L7.26677 14.9223C7.15828 15.019 7.0702 15.1364 7.00772 15.2677C6.94523 15.3989 6.9096 15.5413 6.90292 15.6865C6.89623 15.8317 6.91863 15.9767 6.96879 16.1131C7.01895 16.2496 7.09586 16.3746 7.19501 16.4808C7.29416 16.5871 7.41355 16.6725 7.54616 16.732C7.67877 16.7915 7.82194 16.8239 7.96724 16.8273C8.11254 16.8307 8.25706 16.805 8.3923 16.7517C8.52754 16.6985 8.65078 16.6188 8.75477 16.5172L11.9468 13.5423L14.9228 16.7343C15.0189 16.8448 15.1362 16.9348 15.2678 16.999C15.3995 17.0632 15.5427 17.1002 15.6889 17.1079C15.8351 17.1155 15.9814 17.0937 16.119 17.0436C16.2566 16.9935 16.3828 16.9162 16.4899 16.8164C16.597 16.7165 16.6829 16.5961 16.7425 16.4624C16.8021 16.3286 16.8341 16.1842 16.8367 16.0378C16.8393 15.8914 16.8124 15.7459 16.7576 15.6102C16.7028 15.4744 16.6212 15.351 16.5177 15.2474L13.5428 12.0554L16.7348 9.0794Z" fill="#8EA5B2"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37273 5.37273 0 12 0C18.6273 0 24 5.37273 24 12C24 18.6273 18.6273 24 12 24C5.37273 24 0 18.6273 0 12ZM12 21.8182C10.7107 21.8182 9.43394 21.5642 8.24274 21.0708C7.05155 20.5774 5.9692 19.8542 5.0575 18.9425C4.14579 18.0308 3.42259 16.9485 2.92918 15.7573C2.43577 14.5661 2.18182 13.2893 2.18182 12C2.18182 10.7107 2.43577 9.43394 2.92918 8.24274C3.42259 7.05155 4.14579 5.9692 5.0575 5.0575C5.9692 4.14579 7.05155 3.42259 8.24274 2.92918C9.43394 2.43577 10.7107 2.18182 12 2.18182C14.6039 2.18182 17.1012 3.21623 18.9425 5.0575C20.7838 6.89876 21.8182 9.39606 21.8182 12C21.8182 14.6039 20.7838 17.1012 18.9425 18.9425C17.1012 20.7838 14.6039 21.8182 12 21.8182Z" fill="#8EA5B2"/>
                </svg>
            </div>
        </div>
        <div class="project project_modal">
            <div class="project__body flex">
                <div class="project__left">
                    <div class="project__title">EtherBear</div>
                    <div class="project__left-top flex">
                        <div class="active-item">Active</div>
                        <div class="star star_good flex">
                            <img src="/img/catalog/star.svg" alt="">
                            <span>8.0</span>
                        </div>
                        <div class="category category_amber">collectible</div>
                    </div>
                    <div class="project__profile flex">
                        <div class="project__avatar img-cover">
                            <img src="/img/project/avatar.jpg" alt="">
                        </div>
                        <div class="project__profile-box">
                            <div class="project__profile-caption">Start date</div>
                            <div class="project__profile-date">05-04-2021 3:00PM UTC</div>
                        </div>
                    </div>
                    <div class="timer">
                        <div class="timer__caption">before the start</div>
                        <div class="countdown">
                            <div class="timer__section">
                                <span class="count" id="days"></span>
                            </div>
                            <div class="timer__section">
                                <span class="count" id="hours"></span>
                            </div>
                            <div class="timer__section">
                                <span class="count" id="minutes"></span>
                            </div>
                            <div class="timer__section">
                                <span class="count" id="seconds"></span>
                            </div>
                        </div>
                    </div>
                    <div class="project__buttons flex">
                        <a href="#" class="project__btn btn btn_blue">
                            <div class="btn__caption">site project</div>
                            <div class="btn__icon svg-contain">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.33334 1.99967C9.33334 1.63148 9.63182 1.33301 10 1.33301H14C14.3682 1.33301 14.6667 1.63148 14.6667 1.99967C14.6667 2.36786 14.3682 2.66634 14 2.66634H10C9.63182 2.66634 9.33334 2.36786 9.33334 1.99967Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1.33301C14.3682 1.33301 14.6667 1.63148 14.6667 1.99967V5.99967C14.6667 6.36786 14.3682 6.66634 14 6.66634C13.6318 6.66634 13.3333 6.36786 13.3333 5.99967V1.99967C13.3333 1.63148 13.6318 1.33301 14 1.33301Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8047 2.19526C14.0651 2.45561 14.0651 2.87772 13.8047 3.13807L9.13807 7.80474C8.87772 8.06509 8.45561 8.06509 8.19526 7.80474C7.93491 7.54439 7.93491 7.12228 8.19526 6.86193L12.8619 2.19526C13.1223 1.93491 13.5444 1.93491 13.8047 2.19526Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.66667 3.33268C2.66667 2.96449 2.96515 2.66602 3.33334 2.66602H7.33334C7.70153 2.66602 8 2.96449 8 3.33268C8 3.70087 7.70153 3.99935 7.33334 3.99935H4.00001V11.9993H12V8.66602C12 8.29783 12.2985 7.99935 12.6667 7.99935C13.0349 7.99935 13.3333 8.29783 13.3333 8.66602V12.666C13.3333 13.0342 13.0349 13.3327 12.6667 13.3327H3.33334C2.96515 13.3327 2.66667 13.0342 2.66667 12.666V3.33268Z" fill="white"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="project__btn btn">
                            <div class="btn__icon svg-contain">
                                <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.833886 9.19109V9.0451C0.855303 8.61317 0.993735 8.19467 1.23491 7.83274C1.63634 7.39798 1.91114 6.86521 2.03048 6.29033C2.03048 5.84601 2.03048 5.39534 2.06929 4.95103C2.2698 2.81195 4.38485 1.33301 6.47404 1.33301H6.52578C8.61497 1.33301 10.73 2.81195 10.937 4.95103C10.9758 5.39534 10.937 5.84601 10.9693 6.29033C11.0903 6.86654 11.3648 7.40097 11.7649 7.83909C12.0079 8.19781 12.1465 8.61478 12.1659 9.0451V9.18474C12.1804 9.76504 11.9805 10.3309 11.6032 10.7779C11.1046 11.3007 10.4281 11.6259 9.70161 11.692C7.57133 11.9205 5.42202 11.9205 3.29175 11.692C2.5661 11.623 1.89051 11.2983 1.39014 10.7779C1.01867 10.3305 0.821496 9.76806 0.833886 9.19109Z" stroke="#3340B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.86996 13.9014C5.20281 14.3191 5.6916 14.5895 6.22815 14.6527C6.76471 14.7158 7.30478 14.5665 7.72884 14.2378C7.85927 14.1406 7.97663 14.0275 8.07812 13.9014" stroke="#3340B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="btn__caption">follow</div>
                        </a>
                    </div>
                    <div class="social-item">
                        <div class="social-item__caption">project links</div>
                        <div class="social-item__list flex">
                            <div class="social-item__coll">
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/mail.svg" alt="">
                                        <img src="/img/project/social/mail-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Email</div>
                                </a>
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/discord.svg" alt="">
                                        <img src="/img/project/social/discord-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Discord </div>
                                </a>
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/medium.svg" alt="">
                                        <img src="/img/project/social/medium-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Medium</div>
                                </a>
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/site.svg" alt="">
                                        <img src="/img/project/social/site-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">site.ru</div>
                                </a>
                            </div>
                            <div class="social-item__coll">
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/telegram.svg" alt="">
                                        <img src="/img/project/social/telegram-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Telegram <small>(142k followers)</small></div>
                                </a>
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/instagram.svg" alt="">
                                        <img src="/img/project/social/instagram-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Instagram <small>(142k followers)</small></div>
                                </a>
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/facebook.svg" alt="">
                                        <img src="/img/project/social/facebook-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Facebook <small>(142k followers)</small></div>
                                </a>
                                <a href="#" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/twitter.svg" alt="">
                                        <img src="/img/project/social/twitter-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Twitter <small>(142k followers)</small></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project__right">
                    <div class="project__wrap">
                        <div class="arrow arrow_prew">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.875 10.0002C16.875 9.57833 16.533 9.23633 16.1111 9.23633H3.88889C3.467 9.23633 3.125 9.57833 3.125 10.0002C3.125 10.4221 3.467 10.7641 3.88889 10.7641H16.1111C16.533 10.7641 16.875 10.4221 16.875 10.0002Z" fill="#3340B4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.77626 4.11241C9.47794 3.81409 8.99428 3.81409 8.69596 4.11241L3.34874 9.45963C3.05042 9.75795 3.05042 10.2416 3.34874 10.5399L8.69596 15.8872C8.99428 16.1855 9.47794 16.1855 9.77626 15.8872C10.0746 15.5888 10.0746 15.1052 9.77626 14.8069L4.96919 9.99978L9.77626 5.19271C10.0746 4.89439 10.0746 4.41073 9.77626 4.11241Z" fill="#3340B4"/>
                            </svg>
                        </div>
                        <div class="arrow arrow_next">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12524 9.99881C3.12524 10.4207 3.46725 10.7627 3.88913 10.7627L16.1114 10.7627C16.5332 10.7627 16.8752 10.4207 16.8752 9.99881C16.8752 9.57693 16.5332 9.23492 16.1114 9.23492L3.88913 9.23492C3.46725 9.23492 3.12524 9.57692 3.12524 9.99881Z" fill="#3340B4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.224 15.8866C10.5223 16.1849 11.006 16.1849 11.3043 15.8866L16.6515 10.5394C16.9498 10.2411 16.9498 9.75741 16.6515 9.45909L11.3043 4.11187C11.006 3.81355 10.5223 3.81355 10.224 4.11187C9.92567 4.41018 9.92567 4.89385 10.224 5.19217L15.0311 9.99924L10.224 14.8063C9.92566 15.1046 9.92566 15.5883 10.224 15.8866Z" fill="#3340B4"/>
                            </svg>
                        </div>
                        <div class="project__slick">
                            <div class="project__slide swiper-slide">
                                <a href="img/project/img-1.jpg" class="project__slide-box img-cover" data-fancybox="project">
                                    <img src="/img/project/img-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="project__slide swiper-slide">
                                <a href="img/project/img-2.jpg" class="project__slide-box img-cover" data-fancybox="project">
                                    <img src="/img/project/img-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="project__slide swiper-slide">
                                <a href="img/project/img-3.jpg" class="project__slide-box img-cover" data-fancybox="project">
                                    <img src="/img/project/img-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="project__slide swiper-slide">
                                <a href="img/project/img-2.jpg" class="project__slide-box img-cover" data-fancybox="project">
                                    <img src="/img/project/img-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project__items">
                        <div class="project__item">
                            <div class="project__item-caption">Min price</div>
                            <div class="project__item-desc">$0.01</div>
                        </div>
                        <div class="project__item">
                            <div class="project__item-caption">Max price</div>
                            <div class="project__item-desc">$239</div>
                        </div>
                        <div class="project__item">
                            <div class="project__item-caption">Available for sale</div>
                            <div class="project__item-desc">1 000 000 tokens</div>
                        </div>
                    </div>
                    <div class="project__row flex">
                        <div class="project__coll">
                            <div class="project__coll-item flex">
                                <div class="project__coll-caption">Website:</div>
                                <a href="#" class="project__coll-link">mariotestino-nft.art</a>
                            </div>
                            <div class="project__coll-item flex">
                                <div class="project__coll-caption">Calebrity:</div>
                                <a href="#" class="project__coll-link">Mario Testino</a>
                            </div>
                            <div class="project__coll-item flex">
                                <div class="project__coll-caption">Available on:</div>
                                <a href="#" class="project__coll-link">OpenSea.io</a>
                            </div>
                        </div>
                        <div class="project__coll">
                            <div class="project__coll-item flex">
                                <div class="project__coll-caption">BlockChain:</div>
                                <a href="#" class="project__coll-info flex">
                                    <div class="project__coll-icon">
                                        <img src="/img/project/icon-1.svg" alt="">
                                    </div>
                                    <div class="project__coll-name">Ethereum (ETH)</div>
                                </a>
                            </div>
                            <div class="project__coll-item flex">
                                <div class="project__coll-caption">Platform:</div>
                                <a href="#" class="project__coll-info flex">
                                    <div class="project__coll-icon">
                                        <img src="/img/project/icon-2.svg" alt="">
                                    </div>
                                    <div class="project__coll-name">Dmarket</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project__article">
                        <h2>About</h2>
                        <p>The Agoric testnet is a series of global, competitive challenges for validators to prepare, learn, and earn points in advance of Agoric's mainnet. The testnet will consist of five (5) phases, each phase focused on testing a different aspect of validating and securing the Agoric blockchain network. Points are earned by completing network and community tasks during each phase, with bonus points awarded to the winners of the challenge tasks. The Agoric testnet is a series of global, competitive challenges for validators to prepare, learn, and earn points in advance of Agoric's mainnet. The testnet will consist of five (5) phases, each phase focused on testing a different aspect of validating and securing the Agoric blockchain network. </p>
                    </div>
                    <div class="project__article">
                        <h2>Testnet Goals</h2>
                        <ol>
                            <li>Secure the Network Scale # of validators on our network. Take part in governance and upgrades, and keep the Agoric chain secure.</li>
                            <li>Train and Prepare Validators Prepare validators to be ready for mainnet. Learn about the nuances of running a node for mainnet and earn points.</li>
                            <li>Grow Community We want to work with the best people from all over the world. A diverse network of validators is the way forward to a strong network.</li>
                        </ol>
                    </div>
                    <div class="project__article">
                        <h2>Getting Started</h2>
                        <ol>
                            <li>Join the <a href="#">Agoric Discord Server</a></li>
                            <li>Complete the testnet <a href="#">application form</a> (if you don't have a node yet, more info below)</li>
                            <li>If your application is approved, Agoric will send you an email with a link to complete KYC/AML.</li>
                            <li>Agoric will then confirm your KYC/AML approval by email.</li>
                            <li>Agoric will then give you a unique tag on the Discord giving you access to an incentivized testnet channel.</li>
                            <li>You can now (if you haven't) set up your node by following the <a href="#">Validator Setup Guide</a> and add your Public Key into your original application form.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end project-modal -->

    <div id="delete-modal" class="delete-modal modal" style="display: none;">
        <div class="delete-modal__body">
            <div class="delete-modal__title">Delete selected project?</div>
            <div class="delete-modal__buttons">
                <a href="#" class="delete-modal__btn btn btn_blue">delete</a>
                <div class="delete-modal__btn btn btn_gray" data-fancybox-close>cancel</div>
            </div>
        </div>
    </div><!-- end delete-modal -->

    @guest
        <div id="signin-modal" class="signin-modal modal modal_item" style="display: none;">
            <div class="modal__top">
                <div class="modal__closed flex-center svg-contain" data-fancybox-close>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.7348 9.0794C16.8396 8.98169 16.9241 8.86431 16.9835 8.73394C17.043 8.60357 17.0761 8.46277 17.0811 8.31958C17.0862 8.17639 17.0629 8.03362 17.0127 7.89941C16.9626 7.76521 16.8865 7.64219 16.7888 7.5374C16.6911 7.4326 16.5737 7.34808 16.4433 7.28865C16.3129 7.22922 16.1721 7.19605 16.029 7.19104C15.8858 7.18603 15.743 7.20926 15.6088 7.25943C15.4746 7.30959 15.3516 7.3857 15.2468 7.4834L12.0548 10.4594L9.07877 7.26631C8.87965 7.06236 8.6086 6.94444 8.32364 6.9378C8.03868 6.93115 7.76244 7.0363 7.55402 7.23075C7.3456 7.4252 7.22156 7.69349 7.20845 7.97823C7.19534 8.26297 7.2942 8.54153 7.48387 8.75431L10.4599 11.9463L7.26677 14.9223C7.15828 15.019 7.0702 15.1364 7.00772 15.2677C6.94523 15.3989 6.9096 15.5413 6.90292 15.6865C6.89623 15.8317 6.91863 15.9767 6.96879 16.1131C7.01895 16.2496 7.09586 16.3746 7.19501 16.4808C7.29416 16.5871 7.41355 16.6725 7.54616 16.732C7.67877 16.7915 7.82194 16.8239 7.96724 16.8273C8.11254 16.8307 8.25706 16.805 8.3923 16.7517C8.52754 16.6985 8.65078 16.6188 8.75477 16.5172L11.9468 13.5423L14.9228 16.7343C15.0189 16.8448 15.1362 16.9348 15.2678 16.999C15.3995 17.0632 15.5427 17.1002 15.6889 17.1079C15.8351 17.1155 15.9814 17.0937 16.119 17.0436C16.2566 16.9935 16.3828 16.9162 16.4899 16.8164C16.597 16.7165 16.6829 16.5961 16.7425 16.4624C16.8021 16.3286 16.8341 16.1842 16.8367 16.0378C16.8393 15.8914 16.8124 15.7459 16.7576 15.6102C16.7028 15.4744 16.6212 15.351 16.5177 15.2474L13.5428 12.0554L16.7348 9.0794Z" fill="#8EA5B2"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37273 5.37273 0 12 0C18.6273 0 24 5.37273 24 12C24 18.6273 18.6273 24 12 24C5.37273 24 0 18.6273 0 12ZM12 21.8182C10.7107 21.8182 9.43394 21.5642 8.24274 21.0708C7.05155 20.5774 5.9692 19.8542 5.0575 18.9425C4.14579 18.0308 3.42259 16.9485 2.92918 15.7573C2.43577 14.5661 2.18182 13.2893 2.18182 12C2.18182 10.7107 2.43577 9.43394 2.92918 8.24274C3.42259 7.05155 4.14579 5.9692 5.0575 5.0575C5.9692 4.14579 7.05155 3.42259 8.24274 2.92918C9.43394 2.43577 10.7107 2.18182 12 2.18182C14.6039 2.18182 17.1012 3.21623 18.9425 5.0575C20.7838 6.89876 21.8182 9.39606 21.8182 12C21.8182 14.6039 20.7838 17.1012 18.9425 18.9425C17.1012 20.7838 14.6039 21.8182 12 21.8182Z" fill="#8EA5B2"/>
                    </svg>
                </div>
            </div>
            <form action="#" class="modal__body">
                <div class="modal__links flex">
                    <a href="javascript:void(0)" class="modal__link active">Sign In</a>
                    <a href="#" class="modal__link registration--js">Registration</a>
                </div>
                <div class="modal__social">
                    <a href="{{ route('login.social.google.redirect') }}" class="modal__social-link google flex">
                        <div class="modal__social-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="18" fill="#C5331E"/>
                                <path d="M18.3074 16.5979V20.1604H23.1524C22.4399 22.0841 20.5874 23.3666 18.4499 23.3666C15.6712 23.3666 13.4624 21.1579 13.4624 18.3791C13.4624 15.6004 15.6712 13.3916 18.4499 13.3916C19.5187 13.3916 20.5162 13.7479 21.3712 14.3179L21.6562 14.5316L23.7937 11.7529L23.5087 11.5391C22.0124 10.4704 20.3024 9.90039 18.4499 9.90039C13.7474 9.90039 9.8999 13.7479 9.8999 18.4504C9.8999 23.1529 13.7474 27.0004 18.4499 27.0004C23.1524 27.0004 26.9999 23.1529 26.9999 18.4504V16.6691H18.3074V16.5979Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="modal__social-caption">Sign In with Google</div>
                    </a>
                    <a href="#" class="modal__social-link telegram flex">
                        <div class="modal__social-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="18" fill="#2F89CE"/>
                                <path d="M8.41573 18.3375L12.554 19.8805L14.1672 25.0709C14.2374 25.4216 14.6582 25.4918 14.9388 25.2813L17.2534 23.3876C17.4638 23.1771 17.8145 23.1771 18.0951 23.3876L22.2334 26.4036C22.5139 26.614 22.9348 26.4737 23.0049 26.123L26.0911 11.3936C26.1612 11.0429 25.8105 10.6922 25.4598 10.8325L8.41573 17.4256C7.99489 17.5659 7.99489 18.1972 8.41573 18.3375ZM13.9568 19.109L22.0931 14.129C22.2333 14.0589 22.3736 14.2693 22.2334 14.3395L15.57 20.5819C15.3596 20.7924 15.1492 21.0729 15.1492 21.4236L14.9388 23.107C14.9388 23.3174 14.5881 23.3875 14.5179 23.107L13.6762 20.0208C13.4658 19.6701 13.6061 19.2493 13.9568 19.109Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="modal__social-caption">Sign In with Telegram</div>
                    </a>
                    <a href="#" class="modal__social-link twitter flex">
                        <div class="modal__social-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="18" fill="#55ACE3"/>
                                <path d="M27.5399 13.4092C26.9099 13.6792 26.1899 13.8592 25.4699 13.9492C26.1899 13.4992 26.8199 12.7792 27.0899 11.9692C26.3699 12.4192 25.6499 12.6892 24.7499 12.8692C24.1199 12.1492 23.1299 11.6992 22.1399 11.6992C20.1599 11.6992 18.5399 13.3192 18.5399 15.2992C18.5399 15.5692 18.5399 15.8392 18.6299 16.1092C15.6599 15.9292 12.9599 14.4892 11.1599 12.3292C10.8899 12.8692 10.7099 13.4992 10.7099 14.1292C10.7099 15.3892 11.3399 16.4692 12.3299 17.0992C11.6999 17.0992 11.1599 16.9192 10.7099 16.6492C10.7099 18.3592 11.9699 19.8892 13.5899 20.1592C13.3199 20.2492 12.9599 20.2492 12.5999 20.2492C12.3299 20.2492 12.1499 20.2492 11.8799 20.1592C12.3299 21.5992 13.6799 22.6792 15.2999 22.6792C14.0399 23.6692 12.5099 24.2092 10.7999 24.2092C10.5299 24.2092 10.2599 24.2092 9.8999 24.1192C11.5199 25.1092 13.4099 25.7392 15.4799 25.7392C22.1399 25.7392 25.7399 20.2492 25.7399 15.4792V15.0292C26.4599 14.7592 27.0899 14.1292 27.5399 13.4092Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="modal__social-caption">Sign In with Twitter</div>
                    </a>
                </div>
                <div class="modal__caption">
                    <span>Or Sign up with email</span>
                </div>
                <div class="modal__box">
                    <label class="modal__label">
                        <input type="text" name="text" class="modal__field field" placeholder="Enter email">
                    </label>
                    <label class="modal__label password">
                        <input type="password" name="text" class="modal__field field" placeholder="Password">
                        <div class="password__icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z" stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <button class="modal__btn">sign in</button>
                    <div class="modal__box-bottom">
                        <label class="modal__checkbox">
                            <input type="checkbox" value="checkbox">
                            <div class="modal__checkbox-icon flex-center">
                                <img src="/img/icons/modal-check.svg" alt="">
                            </div>
                            <div class="modal__checkbox-caption">stay login</div>
                        </label>
                    </div>
                </div>
                <div class="modal__bottom">
                    <a href="#" class="modal__bottom-link forgot--js">Forgot your password?</a>
                    <div class="modal__bottom-desc">Enter your email and within 15 minutes we will send a new password</div>
                </div>
            </form>
        </div><!-- end signin-modal -->

        <div id="registration-modal" class="registration-modal modal modal_item" style="display: none;">
            <div class="modal__top">
                <div class="modal__closed flex-center svg-contain" data-fancybox-close>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.7348 9.0794C16.8396 8.98169 16.9241 8.86431 16.9835 8.73394C17.043 8.60357 17.0761 8.46277 17.0811 8.31958C17.0862 8.17639 17.0629 8.03362 17.0127 7.89941C16.9626 7.76521 16.8865 7.64219 16.7888 7.5374C16.6911 7.4326 16.5737 7.34808 16.4433 7.28865C16.3129 7.22922 16.1721 7.19605 16.029 7.19104C15.8858 7.18603 15.743 7.20926 15.6088 7.25943C15.4746 7.30959 15.3516 7.3857 15.2468 7.4834L12.0548 10.4594L9.07877 7.26631C8.87965 7.06236 8.6086 6.94444 8.32364 6.9378C8.03868 6.93115 7.76244 7.0363 7.55402 7.23075C7.3456 7.4252 7.22156 7.69349 7.20845 7.97823C7.19534 8.26297 7.2942 8.54153 7.48387 8.75431L10.4599 11.9463L7.26677 14.9223C7.15828 15.019 7.0702 15.1364 7.00772 15.2677C6.94523 15.3989 6.9096 15.5413 6.90292 15.6865C6.89623 15.8317 6.91863 15.9767 6.96879 16.1131C7.01895 16.2496 7.09586 16.3746 7.19501 16.4808C7.29416 16.5871 7.41355 16.6725 7.54616 16.732C7.67877 16.7915 7.82194 16.8239 7.96724 16.8273C8.11254 16.8307 8.25706 16.805 8.3923 16.7517C8.52754 16.6985 8.65078 16.6188 8.75477 16.5172L11.9468 13.5423L14.9228 16.7343C15.0189 16.8448 15.1362 16.9348 15.2678 16.999C15.3995 17.0632 15.5427 17.1002 15.6889 17.1079C15.8351 17.1155 15.9814 17.0937 16.119 17.0436C16.2566 16.9935 16.3828 16.9162 16.4899 16.8164C16.597 16.7165 16.6829 16.5961 16.7425 16.4624C16.8021 16.3286 16.8341 16.1842 16.8367 16.0378C16.8393 15.8914 16.8124 15.7459 16.7576 15.6102C16.7028 15.4744 16.6212 15.351 16.5177 15.2474L13.5428 12.0554L16.7348 9.0794Z" fill="#8EA5B2"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37273 5.37273 0 12 0C18.6273 0 24 5.37273 24 12C24 18.6273 18.6273 24 12 24C5.37273 24 0 18.6273 0 12ZM12 21.8182C10.7107 21.8182 9.43394 21.5642 8.24274 21.0708C7.05155 20.5774 5.9692 19.8542 5.0575 18.9425C4.14579 18.0308 3.42259 16.9485 2.92918 15.7573C2.43577 14.5661 2.18182 13.2893 2.18182 12C2.18182 10.7107 2.43577 9.43394 2.92918 8.24274C3.42259 7.05155 4.14579 5.9692 5.0575 5.0575C5.9692 4.14579 7.05155 3.42259 8.24274 2.92918C9.43394 2.43577 10.7107 2.18182 12 2.18182C14.6039 2.18182 17.1012 3.21623 18.9425 5.0575C20.7838 6.89876 21.8182 9.39606 21.8182 12C21.8182 14.6039 20.7838 17.1012 18.9425 18.9425C17.1012 20.7838 14.6039 21.8182 12 21.8182Z" fill="#8EA5B2"/>
                    </svg>
                </div>
            </div>
            <form action="#" class="modal__body">
                <div class="modal__links flex">
                    <a href="#" class="modal__link signin--js">Sign In</a>
                    <a href="javascript:void(0)" class="modal__link active">Registration</a>
                </div>
                <div class="modal__box">
                    <label class="modal__label">
                        <input type="text" name="text" class="modal__field field" placeholder="Enter email*">
                    </label>
                    <label class="modal__label">
                        <input type="text" name="text" class="modal__field field" placeholder="Telegram">
                    </label>
                    <label class="modal__label">
                        <input type="text" name="text" class="modal__field field" placeholder="Twiter">
                    </label>
                    <label class="modal__label password">
                        <input type="password" name="text" class="modal__field field" placeholder="Password*">
                        <div class="password__icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z" stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <label class="modal__label password">
                        <input type="password" name="text" class="modal__field field" placeholder="Repeat password*">
                        <div class="password__icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z" stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <button class="modal__btn">greate an account</button>
                </div>
            </form>
        </div><!-- end registration-modal -->

        <div id="forgot-modal" class="forgot-modal modal modal_item" style="display: none;">
            <div class="modal__top">
                <div class="modal__closed flex-center svg-contain" data-fancybox-close>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.7348 9.0794C16.8396 8.98169 16.9241 8.86431 16.9835 8.73394C17.043 8.60357 17.0761 8.46277 17.0811 8.31958C17.0862 8.17639 17.0629 8.03362 17.0127 7.89941C16.9626 7.76521 16.8865 7.64219 16.7888 7.5374C16.6911 7.4326 16.5737 7.34808 16.4433 7.28865C16.3129 7.22922 16.1721 7.19605 16.029 7.19104C15.8858 7.18603 15.743 7.20926 15.6088 7.25943C15.4746 7.30959 15.3516 7.3857 15.2468 7.4834L12.0548 10.4594L9.07877 7.26631C8.87965 7.06236 8.6086 6.94444 8.32364 6.9378C8.03868 6.93115 7.76244 7.0363 7.55402 7.23075C7.3456 7.4252 7.22156 7.69349 7.20845 7.97823C7.19534 8.26297 7.2942 8.54153 7.48387 8.75431L10.4599 11.9463L7.26677 14.9223C7.15828 15.019 7.0702 15.1364 7.00772 15.2677C6.94523 15.3989 6.9096 15.5413 6.90292 15.6865C6.89623 15.8317 6.91863 15.9767 6.96879 16.1131C7.01895 16.2496 7.09586 16.3746 7.19501 16.4808C7.29416 16.5871 7.41355 16.6725 7.54616 16.732C7.67877 16.7915 7.82194 16.8239 7.96724 16.8273C8.11254 16.8307 8.25706 16.805 8.3923 16.7517C8.52754 16.6985 8.65078 16.6188 8.75477 16.5172L11.9468 13.5423L14.9228 16.7343C15.0189 16.8448 15.1362 16.9348 15.2678 16.999C15.3995 17.0632 15.5427 17.1002 15.6889 17.1079C15.8351 17.1155 15.9814 17.0937 16.119 17.0436C16.2566 16.9935 16.3828 16.9162 16.4899 16.8164C16.597 16.7165 16.6829 16.5961 16.7425 16.4624C16.8021 16.3286 16.8341 16.1842 16.8367 16.0378C16.8393 15.8914 16.8124 15.7459 16.7576 15.6102C16.7028 15.4744 16.6212 15.351 16.5177 15.2474L13.5428 12.0554L16.7348 9.0794Z" fill="#8EA5B2"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37273 5.37273 0 12 0C18.6273 0 24 5.37273 24 12C24 18.6273 18.6273 24 12 24C5.37273 24 0 18.6273 0 12ZM12 21.8182C10.7107 21.8182 9.43394 21.5642 8.24274 21.0708C7.05155 20.5774 5.9692 19.8542 5.0575 18.9425C4.14579 18.0308 3.42259 16.9485 2.92918 15.7573C2.43577 14.5661 2.18182 13.2893 2.18182 12C2.18182 10.7107 2.43577 9.43394 2.92918 8.24274C3.42259 7.05155 4.14579 5.9692 5.0575 5.0575C5.9692 4.14579 7.05155 3.42259 8.24274 2.92918C9.43394 2.43577 10.7107 2.18182 12 2.18182C14.6039 2.18182 17.1012 3.21623 18.9425 5.0575C20.7838 6.89876 21.8182 9.39606 21.8182 12C21.8182 14.6039 20.7838 17.1012 18.9425 18.9425C17.1012 20.7838 14.6039 21.8182 12 21.8182Z" fill="#8EA5B2"/>
                    </svg>
                </div>
            </div>
            <form action="#" class="modal__body">
                <div class="modal__title">Forgot your password?</div>
                <div class="modal__subtitle">Request an email with a link to reset your password</div>
                <div class="modal__box">
                    <label class="modal__label">
                        <input type="text" name="text" class="modal__field field" placeholder="Enter email">
                    </label>
                    <button class="modal__btn">reset the password</button>
                </div>
            </form>
        </div><!-- end signin-modal -->
    @endguest


    <a href="#header" class="arrow-top flex-center">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.99997 4H18V6H5.99997V4ZM6.70697 15.707L11 11.414V20H13V11.414L17.293 15.707L18.707 14.293L12 7.586L5.29297 14.293L6.70697 15.707Z" fill="white" />
        </svg>
    </a>

    <footer class="footer bottom">
        <div class="wrapper">
            <div class="footer__wrap flex">
                <a href="#" class="logo logo_white flex">
                    <div class="logo__icon img-contain">
                        <img src="/img/icons/logo-white.svg" alt="">
                    </div>
                    <div class="logo__caption">NFT projects</div>
                </a>
                <div class="footer__center flex">
                    <nav class="footer__menu">
                        <ul>
                            <li>
                                <a href="#">Active NFT</a>
                            </li>
                            <li>
                                <a href="#">Upcoming NFT</a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="footer__menu">
                        <ul>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy & Terms</a>
                            </li>
                            <li>
                                <a href="#">Rating</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="footer__menu">
                        <ul>
                            <li>
                                <a href="#">Promotion</a>
                            </li>
                            <li>
                                <a href="#">Submit NFT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="social">
                    <a href="#" class="social__link flex">
                        <div class="social__icon">
                            <img src="/img/icons/twitter.svg" alt="" width="100%" height="100%">
                        </div>
                        <div class="social__caption">Twitter</div>
                    </a>
                    <a href="#" class="social__link flex">
                        <div class="social__icon">
                            <img src="/img/icons/telegram.svg" alt="" width="100%" height="100%">
                        </div>
                        <div class="social__caption">Telegram News (ENG) </div>
                    </a>
                    <a href="#" class="social__link flex">
                        <div class="social__icon">
                            <img src="/img/icons/telegram.svg" alt="" width="100%" height="100%">
                        </div>
                        <div class="social__caption">Telegram Chat (ENG)</div>
                    </a>
                    <a href="#" class="social__link flex">
                        <div class="social__caption">Telegram News (RU)</div>
                    </a>
                    <a href="#" class="social__link flex">
                        <div class="social__caption">Telegram Chat (RU)</div>
                    </a>
                </div>
            </div>
            <div class="footer__copiright flex">
                <div class="footer__copiright-icon img-contain">
                    <img src="/img/icons/copyright.svg" alt="">
                </div>
                <div class="footer__copiright-caption">2021 All rights reserved</div>
            </div>
        </div>
    </footer>

</div>
<link rel="preload" media="all" href="{{ mix('css/visible.css') }}" as="style" onload="this.rel='stylesheet'">


<link rel="preload" as="image" href="/img/promo/bg.jpg">
<link rel="preload" as="image" href="/img/promo/bg-2.jpg">
@stack('footer')
<script src="{{ mix('js/visible.js') }}" rel="preload" as="script"></script>
</body>
</html>