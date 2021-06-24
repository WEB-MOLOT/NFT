@extends('layouts.visible')

@section('content')
    @include('visible.particles.breadcrumbs')

    <div class="personal-area">
        <div class="wrapper">
            <div class="personal-area__title title bottom">Personal area</div>
            <div class="personal-area__tabs bottom flex">
                <div class="personal-area__tab active" data-personal-area="1">Profile</div>
                <div class="personal-area__tab" data-personal-area="2">Followed</div>
                <div class="personal-area__tab" data-personal-area="3">My NFT projects</div>
            </div>
            <div class="personal-area__body bottom">
                <div class="personal-area__block active" data-personal-area-block="1">
                    <form action="#" class="personal-area__form form">
                        <div class="personal-area__form-body flex">
                            <div class="personal-area__coll">
                                <label class="form__label bottom">
                                    <div class="form__caption">email</div>
                                    <input type="text" name="text" class="form__field field" placeholder="E-Mail">
                                </label>
                                <label class="form__label bottom">
                                    <div class="form__caption">twitter</div>
                                    <input type="text" name="text" class="form__field field" placeholder="Enter your twitter">
                                </label>
                                <label class="form__label bottom">
                                    <div class="form__caption">telegram</div>
                                    <input type="text" name="text" class="form__field field" placeholder="Enter your telegram">
                                </label>
                            </div>
                            <div class="personal-area__coll">
                                <label class="form__label bottom password">
                                    <div class="form__caption">current password</div>
                                    <input type="password" name="text" class="form__field field" placeholder="Password*">
                                    <div class="password__icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z"
                                                stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </label>
                                <label class="form__label bottom password success">
                                    <div class="form__caption">new password</div>
                                    <input type="password" name="text" class="form__field field success" placeholder="Password*">
                                    <div class="password__icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z"
                                                stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </label>
                                <label class="form__label bottom password error">
                                    <div class="form__caption">retype new password</div>
                                    <input type="password" name="text" class="form__field field error" placeholder="Password*">
                                    <div class="password__icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z"
                                                stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <button class="form__btn btn btn_blue bottom">
                            <div class="btn__caption">save</div>
                        </button>
                        <div class="personal-area__bottom">
                            <div class="personal-area__caption">Notification settings</div>
                            <div class="personal-area__type">
                                <label class="personal-area__checkbox">
                                    <input type="checkbox" value="checkbox" check-all="active" name="telegram" checked>
                                    <div class="personal-area__checkbox-icon">
                                        <span></span>
                                    </div>
                                    <div class="personal-area__checkbox-caption">Receive notifications on Telegram</div>
                                </label>
                                <label class="personal-area__checkbox">
                                    <input type="checkbox" value="checkbox" check-all="upcoming" name="email" checked>
                                    <div class="personal-area__checkbox-icon">
                                        <span></span>
                                    </div>
                                    <div class="personal-area__checkbox-caption">Receive notifications on Email</div>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="personal-area__block" data-personal-area-block="2">
                    <div class="catalog">
                        <div class="catalog__body">
                            <div class="catalog__items">
                                <a href="#" class="catalog__item project--js flex bottom ">
                                    <div class="catalog__left">
                                        <div class="catalog__img img-cover">
                                            <img src="img/catalog/img-2.jpg" alt="">
                                        </div>
                                        <div class="catalog__verified flex">
                                            <div class="catalog__verified-icon img-contain">
                                                <img src="img/catalog/verified-icon.svg" alt="">
                                            </div>
                                            <div class="catalog__verified-caption">
                                                <span>Verified</span>
                                            </div>
                                        </div>
                                        <div class="catalog__left-box">
                                            <div class="catalog__left-info active">
                                                <div class="catalog__left-info__name">Active</div>
                                                <div class="catalog__left-info__hidden">
                                                    <div class="catalog__left-info__caption">Heading</div>
                                                    <div class="catalog__left-info__desc">text description</div>
                                                </div>
                                            </div>
                                            <div class="catalog__left-btn unfollow flex-center">
                                                <div class="catalog__left-btn__follow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M2.04223 8.04281V7.91507C2.06097 7.53714 2.1821 7.17094 2.39312 6.85426C2.74437 6.47384 2.98482 6.00767 3.08925 5.50465C3.08925 5.11587 3.08925 4.72154 3.12321 4.33276C3.29865 2.46107 5.14933 1.16699 6.97736 1.16699H7.02264C8.85068 1.16699 10.7014 2.46107 10.8825 4.33276C10.9164 4.72154 10.8825 5.11587 10.9108 5.50465C11.0166 6.00884 11.2568 6.47646 11.6069 6.85982C11.8195 7.17369 11.9408 7.53854 11.9578 7.91507V8.03726C11.9704 8.54502 11.7955 9.04014 11.4654 9.43131C11.0291 9.88869 10.4371 10.1732 9.80148 10.2311C7.93749 10.431 6.05685 10.431 4.19286 10.2311C3.55792 10.1707 2.96677 9.8866 2.52895 9.43131C2.20391 9.03984 2.03139 8.54767 2.04223 8.04281Z"
                                                                  stroke="#3340B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M5.57373 12.1641C5.86497 12.5296 6.29267 12.7662 6.76215 12.8214C7.23164 12.8767 7.7042 12.746 8.07526 12.4584C8.18938 12.3734 8.29207 12.2744 8.38087 12.1641" stroke="#3340B4" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">Follow</div>
                                                </div>
                                                <div class="catalog__left-btn__unfollow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.1564 6.05293C11.2263 5.9878 11.2826 5.90954 11.3222 5.82263C11.3619 5.73571 11.384 5.64185 11.3873 5.54639C11.3907 5.45093 11.3752 5.35575 11.3417 5.26628C11.3083 5.1768 11.2576 5.0948 11.1924 5.02493C11.1273 4.95507 11.049 4.89872 10.9621 4.8591C10.8752 4.81948 10.7813 4.79737 10.6859 4.79403C10.5904 4.79068 10.4952 4.80618 10.4058 4.83962C10.3163 4.87306 10.2343 4.9238 10.1644 4.98893L8.03642 6.97293L6.05241 4.8442C5.91966 4.70824 5.73897 4.62963 5.54899 4.6252C5.35902 4.62077 5.17485 4.69087 5.03591 4.8205C4.89696 4.95013 4.81427 5.129 4.80553 5.31882C4.79679 5.50865 4.8627 5.69435 4.98914 5.8362L6.97314 7.9642L4.84441 9.9482C4.77208 10.0127 4.71337 10.091 4.67171 10.1784C4.63005 10.2659 4.6063 10.3609 4.60184 10.4576C4.59739 10.5544 4.61232 10.6511 4.64576 10.7421C4.6792 10.833 4.73047 10.9164 4.79657 10.9872C4.86267 11.0581 4.94226 11.115 5.03067 11.1547C5.11908 11.1943 5.21452 11.2159 5.31139 11.2182C5.40826 11.2204 5.50461 11.2033 5.59477 11.1678C5.68493 11.1323 5.76708 11.0792 5.83641 11.0115L7.96442 9.0282L9.94842 11.1562C10.0125 11.2299 10.0907 11.2899 10.1785 11.3327C10.2662 11.3755 10.3617 11.4001 10.4592 11.4052C10.5567 11.4104 10.6542 11.3958 10.7459 11.3624C10.8377 11.329 10.9217 11.2775 10.9931 11.2109C11.0645 11.1444 11.1218 11.0641 11.1615 10.9749C11.2013 10.8857 11.2226 10.7895 11.2244 10.6919C11.2261 10.5943 11.2082 10.4973 11.1716 10.4068C11.1351 10.3162 11.0807 10.234 11.0117 10.1649L9.02841 8.03693L11.1564 6.05293Z"
                                                                fill="white" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M0 8C0 3.58182 3.58182 0 8 0C12.4182 0 16 3.58182 16 8C16 12.4182 12.4182 16 8 16C3.58182 16 0 12.4182 0 8ZM8 14.5455C7.14044 14.5455 6.28929 14.3762 5.49516 14.0472C4.70103 13.7183 3.97947 13.2361 3.37166 12.6283C2.76386 12.0205 2.28173 11.299 1.95279 10.5048C1.62385 9.71071 1.45455 8.85956 1.45455 8C1.45455 7.14044 1.62385 6.28929 1.95279 5.49516C2.28173 4.70103 2.76386 3.97947 3.37166 3.37166C3.97947 2.76386 4.70103 2.28173 5.49516 1.95279C6.28929 1.62385 7.14044 1.45455 8 1.45455C9.73596 1.45455 11.4008 2.14415 12.6283 3.37166C13.8558 4.59918 14.5455 6.26404 14.5455 8C14.5455 9.73596 13.8558 11.4008 12.6283 12.6283C11.4008 13.8558 9.73596 14.5455 8 14.5455Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">unfollow</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="catalog__right">
                                        <div class="catalog__top flex">
                                            <div class="catalog__top-box">
                                                <div class="catalog__caption">PLUCK OUT HIS EYE</div>
                                                <div class="catalog__top-info">
                                                    <div class="category category_pearl">metaverse</div>
                                                    <div class="catalog__time catalog__time_good flex">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                                fill="#8EA5B2" />
                                                            <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                        </svg>
                                                        <span>15 min to start</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star star_good flex">
                                                <img src="img/catalog/star.svg" alt="">
                                                <span>8.0</span>
                                            </div>
                                        </div>
                                        <div class="catalog__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry...</div>
                                        <div class="catalog__item-bottom flex">
                                            <div class="catalog__prices">$0.01 - $239</div>
                                            <div class="catalog__time catalog__time_good flex">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                        fill="#8EA5B2" />
                                                    <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                </svg>
                                                <span>15 min to start</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="catalog__item project--js flex bottom ">
                                    <div class="catalog__left">
                                        <div class="catalog__img img-cover">
                                            <img src="img/catalog/img-6.jpg" alt="">
                                        </div>
                                        <div class="catalog__verified flex">
                                            <div class="catalog__verified-icon img-contain">
                                                <img src="img/catalog/verified-icon.svg" alt="">
                                            </div>
                                            <div class="catalog__verified-caption">
                                                <span>Verified</span>
                                            </div>
                                        </div>
                                        <div class="catalog__left-box">
                                            <div class="catalog__left-info active">
                                                <div class="catalog__left-info__name">Active</div>
                                                <div class="catalog__left-info__hidden">
                                                    <div class="catalog__left-info__caption">Heading</div>
                                                    <div class="catalog__left-info__desc">text description</div>
                                                </div>
                                            </div>
                                            <div class="catalog__left-btn follow flex-center">
                                                <div class="catalog__left-btn__follow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M2.04223 8.04281V7.91507C2.06097 7.53714 2.1821 7.17094 2.39312 6.85426C2.74437 6.47384 2.98482 6.00767 3.08925 5.50465C3.08925 5.11587 3.08925 4.72154 3.12321 4.33276C3.29865 2.46107 5.14933 1.16699 6.97736 1.16699H7.02264C8.85068 1.16699 10.7014 2.46107 10.8825 4.33276C10.9164 4.72154 10.8825 5.11587 10.9108 5.50465C11.0166 6.00884 11.2568 6.47646 11.6069 6.85982C11.8195 7.17369 11.9408 7.53854 11.9578 7.91507V8.03726C11.9704 8.54502 11.7955 9.04014 11.4654 9.43131C11.0291 9.88869 10.4371 10.1732 9.80148 10.2311C7.93749 10.431 6.05685 10.431 4.19286 10.2311C3.55792 10.1707 2.96677 9.8866 2.52895 9.43131C2.20391 9.03984 2.03139 8.54767 2.04223 8.04281Z"
                                                                  stroke="#3340B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M5.57373 12.1641C5.86497 12.5296 6.29267 12.7662 6.76215 12.8214C7.23164 12.8767 7.7042 12.746 8.07526 12.4584C8.18938 12.3734 8.29207 12.2744 8.38087 12.1641" stroke="#3340B4" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">Follow</div>
                                                </div>
                                                <div class="catalog__left-btn__unfollow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.1564 6.05293C11.2263 5.9878 11.2826 5.90954 11.3222 5.82263C11.3619 5.73571 11.384 5.64185 11.3873 5.54639C11.3907 5.45093 11.3752 5.35575 11.3417 5.26628C11.3083 5.1768 11.2576 5.0948 11.1924 5.02493C11.1273 4.95507 11.049 4.89872 10.9621 4.8591C10.8752 4.81948 10.7813 4.79737 10.6859 4.79403C10.5904 4.79068 10.4952 4.80618 10.4058 4.83962C10.3163 4.87306 10.2343 4.9238 10.1644 4.98893L8.03642 6.97293L6.05241 4.8442C5.91966 4.70824 5.73897 4.62963 5.54899 4.6252C5.35902 4.62077 5.17485 4.69087 5.03591 4.8205C4.89696 4.95013 4.81427 5.129 4.80553 5.31882C4.79679 5.50865 4.8627 5.69435 4.98914 5.8362L6.97314 7.9642L4.84441 9.9482C4.77208 10.0127 4.71337 10.091 4.67171 10.1784C4.63005 10.2659 4.6063 10.3609 4.60184 10.4576C4.59739 10.5544 4.61232 10.6511 4.64576 10.7421C4.6792 10.833 4.73047 10.9164 4.79657 10.9872C4.86267 11.0581 4.94226 11.115 5.03067 11.1547C5.11908 11.1943 5.21452 11.2159 5.31139 11.2182C5.40826 11.2204 5.50461 11.2033 5.59477 11.1678C5.68493 11.1323 5.76708 11.0792 5.83641 11.0115L7.96442 9.0282L9.94842 11.1562C10.0125 11.2299 10.0907 11.2899 10.1785 11.3327C10.2662 11.3755 10.3617 11.4001 10.4592 11.4052C10.5567 11.4104 10.6542 11.3958 10.7459 11.3624C10.8377 11.329 10.9217 11.2775 10.9931 11.2109C11.0645 11.1444 11.1218 11.0641 11.1615 10.9749C11.2013 10.8857 11.2226 10.7895 11.2244 10.6919C11.2261 10.5943 11.2082 10.4973 11.1716 10.4068C11.1351 10.3162 11.0807 10.234 11.0117 10.1649L9.02841 8.03693L11.1564 6.05293Z"
                                                                fill="white" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M0 8C0 3.58182 3.58182 0 8 0C12.4182 0 16 3.58182 16 8C16 12.4182 12.4182 16 8 16C3.58182 16 0 12.4182 0 8ZM8 14.5455C7.14044 14.5455 6.28929 14.3762 5.49516 14.0472C4.70103 13.7183 3.97947 13.2361 3.37166 12.6283C2.76386 12.0205 2.28173 11.299 1.95279 10.5048C1.62385 9.71071 1.45455 8.85956 1.45455 8C1.45455 7.14044 1.62385 6.28929 1.95279 5.49516C2.28173 4.70103 2.76386 3.97947 3.37166 3.37166C3.97947 2.76386 4.70103 2.28173 5.49516 1.95279C6.28929 1.62385 7.14044 1.45455 8 1.45455C9.73596 1.45455 11.4008 2.14415 12.6283 3.37166C13.8558 4.59918 14.5455 6.26404 14.5455 8C14.5455 9.73596 13.8558 11.4008 12.6283 12.6283C11.4008 13.8558 9.73596 14.5455 8 14.5455Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">unfollow</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="catalog__right">
                                        <div class="catalog__top flex">
                                            <div class="catalog__top-box">
                                                <div class="catalog__caption">PLUCK OUT HIS EYE</div>
                                                <div class="catalog__top-info">
                                                    <div class="category category_asparagus">game</div>
                                                    <div class="catalog__time catalog__time_bad flex">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                                fill="#8EA5B2" />
                                                            <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                        </svg>
                                                        <span>15 min to close</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star star_bad flex">
                                                <img src="img/catalog/star.svg" alt="">
                                                <span>3.0</span>
                                            </div>
                                        </div>
                                        <div class="catalog__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry...</div>
                                        <div class="catalog__item-bottom flex">
                                            <div class="catalog__prices">$0.01 - $239</div>
                                            <div class="catalog__time catalog__time_bad flex">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                        fill="#8EA5B2" />
                                                    <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                </svg>
                                                <span>15 min to close</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="catalog__item project--js flex bottom ">
                                    <div class="catalog__left">
                                        <div class="catalog__img img-cover">
                                            <img src="img/catalog/img-3.jpg" alt="">
                                        </div>
                                        <div class="catalog__verified flex">
                                            <div class="catalog__verified-icon img-contain">
                                                <img src="img/catalog/verified-icon.svg" alt="">
                                            </div>
                                            <div class="catalog__verified-caption">
                                                <span>Verified</span>
                                            </div>
                                        </div>
                                        <div class="catalog__left-box">
                                            <div class="catalog__left-info active">
                                                <div class="catalog__left-info__name">Active</div>
                                                <div class="catalog__left-info__hidden">
                                                    <div class="catalog__left-info__caption">Heading</div>
                                                    <div class="catalog__left-info__desc">text description</div>
                                                </div>
                                            </div>
                                            <div class="catalog__left-btn follow flex-center">
                                                <div class="catalog__left-btn__follow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M2.04223 8.04281V7.91507C2.06097 7.53714 2.1821 7.17094 2.39312 6.85426C2.74437 6.47384 2.98482 6.00767 3.08925 5.50465C3.08925 5.11587 3.08925 4.72154 3.12321 4.33276C3.29865 2.46107 5.14933 1.16699 6.97736 1.16699H7.02264C8.85068 1.16699 10.7014 2.46107 10.8825 4.33276C10.9164 4.72154 10.8825 5.11587 10.9108 5.50465C11.0166 6.00884 11.2568 6.47646 11.6069 6.85982C11.8195 7.17369 11.9408 7.53854 11.9578 7.91507V8.03726C11.9704 8.54502 11.7955 9.04014 11.4654 9.43131C11.0291 9.88869 10.4371 10.1732 9.80148 10.2311C7.93749 10.431 6.05685 10.431 4.19286 10.2311C3.55792 10.1707 2.96677 9.8866 2.52895 9.43131C2.20391 9.03984 2.03139 8.54767 2.04223 8.04281Z"
                                                                  stroke="#3340B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M5.57373 12.1641C5.86497 12.5296 6.29267 12.7662 6.76215 12.8214C7.23164 12.8767 7.7042 12.746 8.07526 12.4584C8.18938 12.3734 8.29207 12.2744 8.38087 12.1641" stroke="#3340B4" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">Follow</div>
                                                </div>
                                                <div class="catalog__left-btn__unfollow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.1564 6.05293C11.2263 5.9878 11.2826 5.90954 11.3222 5.82263C11.3619 5.73571 11.384 5.64185 11.3873 5.54639C11.3907 5.45093 11.3752 5.35575 11.3417 5.26628C11.3083 5.1768 11.2576 5.0948 11.1924 5.02493C11.1273 4.95507 11.049 4.89872 10.9621 4.8591C10.8752 4.81948 10.7813 4.79737 10.6859 4.79403C10.5904 4.79068 10.4952 4.80618 10.4058 4.83962C10.3163 4.87306 10.2343 4.9238 10.1644 4.98893L8.03642 6.97293L6.05241 4.8442C5.91966 4.70824 5.73897 4.62963 5.54899 4.6252C5.35902 4.62077 5.17485 4.69087 5.03591 4.8205C4.89696 4.95013 4.81427 5.129 4.80553 5.31882C4.79679 5.50865 4.8627 5.69435 4.98914 5.8362L6.97314 7.9642L4.84441 9.9482C4.77208 10.0127 4.71337 10.091 4.67171 10.1784C4.63005 10.2659 4.6063 10.3609 4.60184 10.4576C4.59739 10.5544 4.61232 10.6511 4.64576 10.7421C4.6792 10.833 4.73047 10.9164 4.79657 10.9872C4.86267 11.0581 4.94226 11.115 5.03067 11.1547C5.11908 11.1943 5.21452 11.2159 5.31139 11.2182C5.40826 11.2204 5.50461 11.2033 5.59477 11.1678C5.68493 11.1323 5.76708 11.0792 5.83641 11.0115L7.96442 9.0282L9.94842 11.1562C10.0125 11.2299 10.0907 11.2899 10.1785 11.3327C10.2662 11.3755 10.3617 11.4001 10.4592 11.4052C10.5567 11.4104 10.6542 11.3958 10.7459 11.3624C10.8377 11.329 10.9217 11.2775 10.9931 11.2109C11.0645 11.1444 11.1218 11.0641 11.1615 10.9749C11.2013 10.8857 11.2226 10.7895 11.2244 10.6919C11.2261 10.5943 11.2082 10.4973 11.1716 10.4068C11.1351 10.3162 11.0807 10.234 11.0117 10.1649L9.02841 8.03693L11.1564 6.05293Z"
                                                                fill="white" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M0 8C0 3.58182 3.58182 0 8 0C12.4182 0 16 3.58182 16 8C16 12.4182 12.4182 16 8 16C3.58182 16 0 12.4182 0 8ZM8 14.5455C7.14044 14.5455 6.28929 14.3762 5.49516 14.0472C4.70103 13.7183 3.97947 13.2361 3.37166 12.6283C2.76386 12.0205 2.28173 11.299 1.95279 10.5048C1.62385 9.71071 1.45455 8.85956 1.45455 8C1.45455 7.14044 1.62385 6.28929 1.95279 5.49516C2.28173 4.70103 2.76386 3.97947 3.37166 3.37166C3.97947 2.76386 4.70103 2.28173 5.49516 1.95279C6.28929 1.62385 7.14044 1.45455 8 1.45455C9.73596 1.45455 11.4008 2.14415 12.6283 3.37166C13.8558 4.59918 14.5455 6.26404 14.5455 8C14.5455 9.73596 13.8558 11.4008 12.6283 12.6283C11.4008 13.8558 9.73596 14.5455 8 14.5455Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">unfollow</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="catalog__right">
                                        <div class="catalog__top flex">
                                            <div class="catalog__top-box">
                                                <div class="catalog__caption">Tiny Tot #0308</div>
                                                <div class="catalog__top-info">
                                                    <div class="category category_blue">Sports</div>
                                                    <div class="catalog__time catalog__time_normal flex">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                                fill="#8EA5B2" />
                                                            <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                        </svg>
                                                        <span>Start 7 Apr</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star star_good flex">
                                                <img src="img/catalog/star.svg" alt="">
                                                <span>8.0</span>
                                            </div>
                                        </div>
                                        <div class="catalog__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry...</div>
                                        <div class="catalog__item-bottom flex">
                                            <div class="catalog__prices">$0.01 - $239</div>
                                            <div class="catalog__time catalog__time_normal flex">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                        fill="#8EA5B2" />
                                                    <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                </svg>
                                                <span>Start 7 Apr</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="catalog__item project--js flex bottom ">
                                    <div class="catalog__left">
                                        <div class="catalog__img img-cover">
                                            <img src="img/catalog/img-8.jpg" alt="">
                                        </div>
                                        <div class="catalog__verified flex">
                                            <div class="catalog__verified-icon img-contain">
                                                <img src="img/catalog/verified-icon.svg" alt="">
                                            </div>
                                            <div class="catalog__verified-caption">
                                                <span>Verified</span>
                                            </div>
                                        </div>
                                        <div class="catalog__left-box">
                                            <div class="catalog__left-info upcoming">
                                                <div class="catalog__left-info__name">Upcoming</div>
                                                <div class="catalog__left-info__hidden">
                                                    <div class="catalog__left-info__caption">Heading</div>
                                                    <div class="catalog__left-info__desc">text description</div>
                                                </div>
                                            </div>
                                            <div class="catalog__left-btn follow flex-center">
                                                <div class="catalog__left-btn__follow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M2.04223 8.04281V7.91507C2.06097 7.53714 2.1821 7.17094 2.39312 6.85426C2.74437 6.47384 2.98482 6.00767 3.08925 5.50465C3.08925 5.11587 3.08925 4.72154 3.12321 4.33276C3.29865 2.46107 5.14933 1.16699 6.97736 1.16699H7.02264C8.85068 1.16699 10.7014 2.46107 10.8825 4.33276C10.9164 4.72154 10.8825 5.11587 10.9108 5.50465C11.0166 6.00884 11.2568 6.47646 11.6069 6.85982C11.8195 7.17369 11.9408 7.53854 11.9578 7.91507V8.03726C11.9704 8.54502 11.7955 9.04014 11.4654 9.43131C11.0291 9.88869 10.4371 10.1732 9.80148 10.2311C7.93749 10.431 6.05685 10.431 4.19286 10.2311C3.55792 10.1707 2.96677 9.8866 2.52895 9.43131C2.20391 9.03984 2.03139 8.54767 2.04223 8.04281Z"
                                                                  stroke="#3340B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M5.57373 12.1641C5.86497 12.5296 6.29267 12.7662 6.76215 12.8214C7.23164 12.8767 7.7042 12.746 8.07526 12.4584C8.18938 12.3734 8.29207 12.2744 8.38087 12.1641" stroke="#3340B4" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">Follow</div>
                                                </div>
                                                <div class="catalog__left-btn__unfollow">
                                                    <div class="catalog__left-btn__icon">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.1564 6.05293C11.2263 5.9878 11.2826 5.90954 11.3222 5.82263C11.3619 5.73571 11.384 5.64185 11.3873 5.54639C11.3907 5.45093 11.3752 5.35575 11.3417 5.26628C11.3083 5.1768 11.2576 5.0948 11.1924 5.02493C11.1273 4.95507 11.049 4.89872 10.9621 4.8591C10.8752 4.81948 10.7813 4.79737 10.6859 4.79403C10.5904 4.79068 10.4952 4.80618 10.4058 4.83962C10.3163 4.87306 10.2343 4.9238 10.1644 4.98893L8.03642 6.97293L6.05241 4.8442C5.91966 4.70824 5.73897 4.62963 5.54899 4.6252C5.35902 4.62077 5.17485 4.69087 5.03591 4.8205C4.89696 4.95013 4.81427 5.129 4.80553 5.31882C4.79679 5.50865 4.8627 5.69435 4.98914 5.8362L6.97314 7.9642L4.84441 9.9482C4.77208 10.0127 4.71337 10.091 4.67171 10.1784C4.63005 10.2659 4.6063 10.3609 4.60184 10.4576C4.59739 10.5544 4.61232 10.6511 4.64576 10.7421C4.6792 10.833 4.73047 10.9164 4.79657 10.9872C4.86267 11.0581 4.94226 11.115 5.03067 11.1547C5.11908 11.1943 5.21452 11.2159 5.31139 11.2182C5.40826 11.2204 5.50461 11.2033 5.59477 11.1678C5.68493 11.1323 5.76708 11.0792 5.83641 11.0115L7.96442 9.0282L9.94842 11.1562C10.0125 11.2299 10.0907 11.2899 10.1785 11.3327C10.2662 11.3755 10.3617 11.4001 10.4592 11.4052C10.5567 11.4104 10.6542 11.3958 10.7459 11.3624C10.8377 11.329 10.9217 11.2775 10.9931 11.2109C11.0645 11.1444 11.1218 11.0641 11.1615 10.9749C11.2013 10.8857 11.2226 10.7895 11.2244 10.6919C11.2261 10.5943 11.2082 10.4973 11.1716 10.4068C11.1351 10.3162 11.0807 10.234 11.0117 10.1649L9.02841 8.03693L11.1564 6.05293Z"
                                                                fill="white" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M0 8C0 3.58182 3.58182 0 8 0C12.4182 0 16 3.58182 16 8C16 12.4182 12.4182 16 8 16C3.58182 16 0 12.4182 0 8ZM8 14.5455C7.14044 14.5455 6.28929 14.3762 5.49516 14.0472C4.70103 13.7183 3.97947 13.2361 3.37166 12.6283C2.76386 12.0205 2.28173 11.299 1.95279 10.5048C1.62385 9.71071 1.45455 8.85956 1.45455 8C1.45455 7.14044 1.62385 6.28929 1.95279 5.49516C2.28173 4.70103 2.76386 3.97947 3.37166 3.37166C3.97947 2.76386 4.70103 2.28173 5.49516 1.95279C6.28929 1.62385 7.14044 1.45455 8 1.45455C9.73596 1.45455 11.4008 2.14415 12.6283 3.37166C13.8558 4.59918 14.5455 6.26404 14.5455 8C14.5455 9.73596 13.8558 11.4008 12.6283 12.6283C11.4008 13.8558 9.73596 14.5455 8 14.5455Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </div>
                                                    <div class="catalog__left-btn__caption">unfollow</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="catalog__right">
                                        <div class="catalog__top flex">
                                            <div class="catalog__top-box">
                                                <div class="catalog__caption">AniEmoji #137 Sneeze</div>
                                                <div class="catalog__top-info">
                                                    <div class="category category_blue">Sports</div>
                                                    <div class="catalog__time catalog__time_normal flex">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                                fill="#8EA5B2" />
                                                            <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                        </svg>
                                                        <span>Start 7 Apr</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star star_normal flex">
                                                <img src="img/catalog/star.svg" alt="">
                                                <span>7.0</span>
                                            </div>
                                        </div>
                                        <div class="catalog__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry...</div>
                                        <div class="catalog__item-bottom flex">
                                            <div class="catalog__prices">$0.01 - $239</div>
                                            <div class="catalog__time catalog__time_normal flex">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                        fill="#8EA5B2" />
                                                    <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2" />
                                                </svg>
                                                <span>Start 7 Apr</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="catalog__bottom bottom">
                                <a href="#" class="catalog__btn flex-center">
                                    <div class="catalog__btn-caption">Show more</div>
                                    <div class="catalog__btn-icon svg-contain">
                                        <svg width="17" height="4" viewBox="0 0 17 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="2" cy="2" r="2" fill="#5A7687" />
                                            <circle cx="8.5" cy="2" r="2" fill="#5A7687" />
                                            <circle cx="15" cy="2" r="2" fill="#5A7687" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="personal-area__block" data-personal-area-block="3">
                    <div class="personal-area-proects">
                        <a href="#" class="personal-area-proects__top-btn flex">
                            <span>submit nft</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M11.7696 7.99569C11.7695 7.81891 11.6993 7.64938 11.5743 7.52438C11.4493 7.39938 11.2798 7.32915 11.103 7.32912L8.6649 7.32912L8.6649 4.89102C8.66186 4.71624 8.5903 4.54965 8.46563 4.42712C8.34095 4.30459 8.17314 4.23594 7.99834 4.23594C7.82353 4.23594 7.65572 4.30459 7.53105 4.42712C7.40637 4.54965 7.33481 4.71624 7.33177 4.89102L7.33177 7.32912L4.89367 7.32912C4.71889 7.33216 4.55229 7.40372 4.42977 7.5284C4.30724 7.65307 4.23858 7.82088 4.23858 7.99569C4.23858 8.17049 4.30724 8.3383 4.42977 8.46298C4.55229 8.58765 4.71889 8.65922 4.89367 8.66225L7.33177 8.66225V11.1004C7.33481 11.2751 7.40637 11.4417 7.53105 11.5643C7.65572 11.6868 7.82353 11.7554 7.99834 11.7554C8.17314 11.7554 8.34095 11.6868 8.46563 11.5643C8.5903 11.4417 8.66186 11.2751 8.6649 11.1004L8.6649 8.66225L11.103 8.66225C11.2798 8.66223 11.4493 8.59199 11.5743 8.46699C11.6993 8.34199 11.7695 8.17246 11.7696 7.99569Z"
                                        fill="#5E7C8D"></path>
                                    <path
                                        d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845885 10.121 0.00229405 8 0V0ZM8 14.6667C6.68146 14.6667 5.39253 14.2757 4.2962 13.5431C3.19987 12.8106 2.34539 11.7694 1.84081 10.5512C1.33622 9.33305 1.2042 7.9926 1.46144 6.6994C1.71867 5.40619 2.35361 4.2183 3.28596 3.28595C4.21831 2.3536 5.4062 1.71867 6.6994 1.46143C7.99261 1.2042 9.33305 1.33622 10.5512 1.8408C11.7694 2.34539 12.8106 3.19987 13.5431 4.2962C14.2757 5.39253 14.6667 6.68146 14.6667 8C14.6647 9.76751 13.9617 11.4621 12.7119 12.7119C11.4621 13.9617 9.76752 14.6647 8 14.6667Z"
                                        fill="#5E7C8D"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="personal-area-proects__body">
                            <div class="personal-area-proects__items flex">
                                <div class="personal-area-proects__item">
                                    <div class="personal-area-proects__img img-cover">
                                        <img src="img/catalog/img-7.jpg" alt="">
                                    </div>
                                    <div class="personal-area-proects__box">
                                        <div class="personal-area-proects__name">Chubbies #4454</div>
                                        <div class="personal-area-proects__box-bottom flex">
                                            <div class="personal-area-proects__info">
                                                <div class="personal-area-proects__info-caption">Project status</div>
                                                <div class="personal-area-proects__info-box moderate flex">
                                                    <span>Moderate</span>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                            fill="#8EA5B2"></path>
                                                        <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="personal-area-proects__buttons flex">
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.921 21.2C6.185 21.693 6.7 22.001 7.26 22C7.496 22.001 7.73 21.946 7.94 21.84L12.492 19.46C12.504 19.453 12.518 19.449 12.532 19.45L17.053 21.81C17.272 21.928 17.517 21.989 17.765 21.988C17.844 21.988 17.924 21.981 18.002 21.97C18.816 21.837 19.372 21.075 19.252 20.26L18.372 15.25C18.3671 15.2429 18.3656 15.2424 18.3652 15.2416C18.365 15.2412 18.365 15.2409 18.365 15.24C18.365 15.237 18.372 15.23 18.372 15.23L22.042 11.68C22.584 11.157 22.653 10.314 22.202 9.71C21.957 9.394 21.598 9.186 21.202 9.13L16.14 8.4C16.131 8.4 16.121 8.39 16.111 8.38L13.85 3.84C13.595 3.327 13.073 3.003 12.5 3C12.334 3 12.168 3.026 12.01 3.08C11.631 3.209 11.318 3.481 11.14 3.84L8.882 8.367C8.882 8.388 8.861 8.397 8.841 8.397L3.791 9.127C3.482 9.179 3.194 9.317 2.961 9.527C2.666 9.816 2.5 10.213 2.5 10.627C2.501 11.02 2.659 11.396 2.94 11.67L6.64 15.23C6.648 15.238 6.651 15.249 6.651 15.26L5.76 20.25C5.707 20.576 5.764 20.91 5.921 21.2ZM12.471 4.467L12.481 4.46H12.5L12.509 4.469C12.518 4.469 12.526 4.471 12.533 4.477C12.539 4.483 12.542 4.491 12.541 4.5L14.801 9.019C15.018 9.464 15.44 9.774 15.93 9.849L20.992 10.585C21.001 10.585 21.01 10.587 21.018 10.591C21.023 10.592 21.027 10.592 21.032 10.591L21.042 10.6L21.032 10.622L17.362 14.181C16.997 14.523 16.834 15.029 16.931 15.52L17.812 20.501L17.792 20.52H17.771C17.767 20.522 17.763 20.522 17.759 20.52C17.749 20.519 17.739 20.515 17.73 20.51H17.721L13.221 18.16C13.005 18.048 12.765 17.988 12.521 17.989C12.27 17.989 12.022 18.052 11.8 18.17L7.271 20.545C7.266 20.546 7.26 20.546 7.255 20.545C7.234 20.545 7.216 20.531 7.211 20.511V20.491L8.091 15.511C8.173 15.024 8.013 14.527 7.661 14.181L3.961 10.631C3.96 10.616 3.962 10.603 3.97 10.59L4.031 10.57L9.061 9.849C9.551 9.773 9.972 9.464 10.19 9.019L12.451 4.489C12.456 4.48 12.462 4.472 12.471 4.467Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Promotion</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M12.2882 4.25482L12.002 4.25C7.86108 4.25 4.12926 7.17308 2.06091 11.9558C1.9797 12.1436 1.9797 12.3564 2.06091 12.5442L2.20424 12.8668C4.24638 17.3431 7.77544 20.1144 11.7118 20.2452L11.998 20.25C16.1389 20.25 19.8707 17.3269 21.9391 12.5442C22.0213 12.354 22.0202 12.1384 21.9361 11.949L21.7968 11.6356C19.7497 7.15091 16.2192 4.38547 12.2882 4.25482ZM12.009 5.73942L12.2479 5.74456L12.5149 5.75845C15.7122 5.98484 18.6525 8.35553 20.429 12.2491L20.4197 12.2731C18.5987 16.2505 15.5569 18.6353 12.2589 18.755L12.004 18.7588L11.7469 18.7554L11.4806 18.7415C8.38271 18.5221 5.52637 16.2844 3.73914 12.6097L3.57 12.2491L3.72658 11.9162C5.61117 8.02315 8.69148 5.74027 12.009 5.73942ZM11.9995 8.36346C9.8391 8.36346 8.0885 10.1031 8.0885 12.2502C8.0885 14.3965 9.83929 16.1359 11.9995 16.1359C14.1598 16.1359 15.9115 14.3963 15.9115 12.2502C15.9115 10.1032 14.16 8.36346 11.9995 8.36346ZM11.9995 9.85378C13.3317 9.85378 14.4115 10.9264 14.4115 12.2502C14.4115 13.5731 13.3316 14.6456 11.9995 14.6456C10.6677 14.6456 9.5885 13.5734 9.5885 12.2502C9.5885 10.9261 10.6676 9.85378 11.9995 9.85378Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Preview</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.96867 14.1657L13.6592 4.66662C14.906 3.44446 16.9283 3.44446 18.175 4.66662L19.4694 5.9354C20.7162 7.15755 20.7162 9.13985 19.4694 10.362L9.74061 19.8986C9.1843 20.4439 8.43007 20.7499 7.64282 20.7499H3.65854C3.28841 20.7499 2.99098 20.451 3.00021 20.0883L3.10043 16.1475C3.12036 15.4026 3.43127 14.6925 3.96867 14.1657ZM18.5381 6.84831L17.2437 5.57953C16.5113 4.86156 15.323 4.86156 14.5905 5.57953L13.8382 6.31697L17.7862 10.1861L18.5381 9.44909C19.2705 8.73112 19.2705 7.56628 18.5381 6.84831ZM4.89998 15.0787L12.9069 7.22989L16.8549 11.099L8.8093 18.9857L8.70228 19.0817C8.4067 19.3245 8.03222 19.4588 7.64282 19.4588L4.33345 19.4584L4.41707 16.1805C4.42814 15.7669 4.60126 15.3715 4.89998 15.0787ZM21 20.1045C21 19.748 20.7052 19.4589 20.3415 19.4589H13.471L13.3816 19.4648C13.0602 19.5076 12.8125 19.7777 12.8125 20.1045C12.8125 20.461 13.1073 20.75 13.471 20.75H20.3415L20.4308 20.7441C20.7523 20.7014 21 20.4313 21 20.1045Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn delete--js">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.9391 3.64039C15.6523 2.79628 14.9075 2.25 14.0639 2.25H9.93592L9.779 2.25633C8.9492 2.32349 8.24111 2.91897 8.02304 3.75533L7.77543 5.01813L7.74642 5.12929C7.62785 5.48928 7.29636 5.73913 6.91772 5.73913H3.73139L3.63214 5.74598C3.27515 5.79564 3 6.10945 3 6.48916C3 6.90338 3.32745 7.23918 3.73139 7.23918L6.91772 7.23918H17.0821L20.2686 7.23918L20.3679 7.23234C20.7248 7.18267 21 6.86887 21 6.48916C21 6.07493 20.6725 5.73913 20.2686 5.73913H17.0821L16.9701 5.73177C16.6025 5.6832 16.2987 5.39872 16.2243 5.01783L15.9874 3.80209L15.9391 3.64039ZM14.9143 5.73913C14.881 5.65445 14.8522 5.56721 14.8282 5.47768L14.79 5.31208L14.5636 4.1428C14.5107 3.93991 14.3473 3.79138 14.1502 3.75742L14.0639 3.75006H9.93592C9.73071 3.75006 9.54829 3.87322 9.47252 4.02803L9.44682 4.09604L9.20979 5.31238C9.18087 5.46048 9.13899 5.60311 9.08551 5.73913H14.9143ZM18.9784 8.97017C19.3475 9.00069 19.6304 9.30716 19.65 9.67605L19.6405 9.88174L19.326 13.733L18.9961 17.4914C18.9263 18.2417 18.8638 18.8745 18.8099 19.3727C18.6225 21.1088 17.4955 22.1823 15.7966 22.2141C13.1494 22.263 10.6048 22.2625 8.13373 22.2091C6.48398 22.1744 5.37366 21.0893 5.18955 19.3797L5.0623 18.1202L4.83994 15.677L4.61216 12.9961L4.35172 9.77788C4.31935 9.36498 4.61951 9.00335 5.02215 8.97016C5.39123 8.93973 5.7183 9.19584 5.79519 9.55677L5.82511 9.85173L6.06966 12.8687L6.33669 15.9959C6.45646 17.3496 6.56034 18.4452 6.64346 19.2148C6.74838 20.189 7.26138 20.6904 8.16411 20.7093C10.6159 20.7624 13.1415 20.7629 15.7701 20.7143C16.7277 20.6964 17.2489 20.1999 17.356 19.2074L17.4827 17.9546C17.5198 17.5685 17.5594 17.1423 17.6014 16.6793L17.8686 13.6038L18.1906 9.6575C18.2204 9.27902 18.5192 8.9889 18.879 8.96882L18.9784 8.97017Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Remove</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-area-proects__item">
                                    <div class="personal-area-proects__img img-cover">
                                        <img src="img/catalog/img-4.jpg" alt="">
                                    </div>
                                    <div class="personal-area-proects__box">
                                        <div class="personal-area-proects__name">AniEmoji #137 Sneeze</div>
                                        <div class="personal-area-proects__box-bottom flex">
                                            <div class="personal-area-proects__info">
                                                <div class="personal-area-proects__info-caption">Project status</div>
                                                <div class="personal-area-proects__info-box published flex">
                                                    <span>Published</span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.612 1.66602H6.38783C3.55651 1.66602 1.66699 3.69318 1.66699 6.59602V13.4027C1.66699 16.3083 3.55147 18.3327 6.38783 18.3327H13.6112C16.4483 18.3327 18.3337 16.3082 18.3337 13.4027V6.59602C18.3337 3.6906 16.4485 1.66602 13.612 1.66602ZM6.38783 2.91602H13.612C15.7374 2.91602 17.0837 4.36182 17.0837 6.59602V13.4027C17.0837 15.637 15.7373 17.0827 13.6112 17.0827H6.38783C4.26263 17.0827 2.91699 15.6371 2.91699 13.4027V6.59602C2.91699 4.36466 4.26727 2.91602 6.38783 2.91602ZM13.4085 7.57992C13.1644 7.33584 12.7687 7.33584 12.5246 7.57992L9.01083 11.0925L7.4751 9.55732L7.40499 9.49682C7.16027 9.31533 6.81306 9.33557 6.59121 9.55751C6.34719 9.80164 6.34727 10.1974 6.5914 10.4414L8.56973 12.4189L8.63984 12.4794C8.88451 12.6609 9.23167 12.6407 9.45353 12.4188L13.4085 8.4638L13.469 8.3937C13.6506 8.14902 13.6304 7.8018 13.4085 7.57992Z"
                                                              fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="personal-area-proects__buttons flex">
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.921 21.2C6.185 21.693 6.7 22.001 7.26 22C7.496 22.001 7.73 21.946 7.94 21.84L12.492 19.46C12.504 19.453 12.518 19.449 12.532 19.45L17.053 21.81C17.272 21.928 17.517 21.989 17.765 21.988C17.844 21.988 17.924 21.981 18.002 21.97C18.816 21.837 19.372 21.075 19.252 20.26L18.372 15.25C18.3671 15.2429 18.3656 15.2424 18.3652 15.2416C18.365 15.2412 18.365 15.2409 18.365 15.24C18.365 15.237 18.372 15.23 18.372 15.23L22.042 11.68C22.584 11.157 22.653 10.314 22.202 9.71C21.957 9.394 21.598 9.186 21.202 9.13L16.14 8.4C16.131 8.4 16.121 8.39 16.111 8.38L13.85 3.84C13.595 3.327 13.073 3.003 12.5 3C12.334 3 12.168 3.026 12.01 3.08C11.631 3.209 11.318 3.481 11.14 3.84L8.882 8.367C8.882 8.388 8.861 8.397 8.841 8.397L3.791 9.127C3.482 9.179 3.194 9.317 2.961 9.527C2.666 9.816 2.5 10.213 2.5 10.627C2.501 11.02 2.659 11.396 2.94 11.67L6.64 15.23C6.648 15.238 6.651 15.249 6.651 15.26L5.76 20.25C5.707 20.576 5.764 20.91 5.921 21.2ZM12.471 4.467L12.481 4.46H12.5L12.509 4.469C12.518 4.469 12.526 4.471 12.533 4.477C12.539 4.483 12.542 4.491 12.541 4.5L14.801 9.019C15.018 9.464 15.44 9.774 15.93 9.849L20.992 10.585C21.001 10.585 21.01 10.587 21.018 10.591C21.023 10.592 21.027 10.592 21.032 10.591L21.042 10.6L21.032 10.622L17.362 14.181C16.997 14.523 16.834 15.029 16.931 15.52L17.812 20.501L17.792 20.52H17.771C17.767 20.522 17.763 20.522 17.759 20.52C17.749 20.519 17.739 20.515 17.73 20.51H17.721L13.221 18.16C13.005 18.048 12.765 17.988 12.521 17.989C12.27 17.989 12.022 18.052 11.8 18.17L7.271 20.545C7.266 20.546 7.26 20.546 7.255 20.545C7.234 20.545 7.216 20.531 7.211 20.511V20.491L8.091 15.511C8.173 15.024 8.013 14.527 7.661 14.181L3.961 10.631C3.96 10.616 3.962 10.603 3.97 10.59L4.031 10.57L9.061 9.849C9.551 9.773 9.972 9.464 10.19 9.019L12.451 4.489C12.456 4.48 12.462 4.472 12.471 4.467Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Promotion</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M12.2882 4.25482L12.002 4.25C7.86108 4.25 4.12926 7.17308 2.06091 11.9558C1.9797 12.1436 1.9797 12.3564 2.06091 12.5442L2.20424 12.8668C4.24638 17.3431 7.77544 20.1144 11.7118 20.2452L11.998 20.25C16.1389 20.25 19.8707 17.3269 21.9391 12.5442C22.0213 12.354 22.0202 12.1384 21.9361 11.949L21.7968 11.6356C19.7497 7.15091 16.2192 4.38547 12.2882 4.25482ZM12.009 5.73942L12.2479 5.74456L12.5149 5.75845C15.7122 5.98484 18.6525 8.35553 20.429 12.2491L20.4197 12.2731C18.5987 16.2505 15.5569 18.6353 12.2589 18.755L12.004 18.7588L11.7469 18.7554L11.4806 18.7415C8.38271 18.5221 5.52637 16.2844 3.73914 12.6097L3.57 12.2491L3.72658 11.9162C5.61117 8.02315 8.69148 5.74027 12.009 5.73942ZM11.9995 8.36346C9.8391 8.36346 8.0885 10.1031 8.0885 12.2502C8.0885 14.3965 9.83929 16.1359 11.9995 16.1359C14.1598 16.1359 15.9115 14.3963 15.9115 12.2502C15.9115 10.1032 14.16 8.36346 11.9995 8.36346ZM11.9995 9.85378C13.3317 9.85378 14.4115 10.9264 14.4115 12.2502C14.4115 13.5731 13.3316 14.6456 11.9995 14.6456C10.6677 14.6456 9.5885 13.5734 9.5885 12.2502C9.5885 10.9261 10.6676 9.85378 11.9995 9.85378Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Preview</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.96867 14.1657L13.6592 4.66662C14.906 3.44446 16.9283 3.44446 18.175 4.66662L19.4694 5.9354C20.7162 7.15755 20.7162 9.13985 19.4694 10.362L9.74061 19.8986C9.1843 20.4439 8.43007 20.7499 7.64282 20.7499H3.65854C3.28841 20.7499 2.99098 20.451 3.00021 20.0883L3.10043 16.1475C3.12036 15.4026 3.43127 14.6925 3.96867 14.1657ZM18.5381 6.84831L17.2437 5.57953C16.5113 4.86156 15.323 4.86156 14.5905 5.57953L13.8382 6.31697L17.7862 10.1861L18.5381 9.44909C19.2705 8.73112 19.2705 7.56628 18.5381 6.84831ZM4.89998 15.0787L12.9069 7.22989L16.8549 11.099L8.8093 18.9857L8.70228 19.0817C8.4067 19.3245 8.03222 19.4588 7.64282 19.4588L4.33345 19.4584L4.41707 16.1805C4.42814 15.7669 4.60126 15.3715 4.89998 15.0787ZM21 20.1045C21 19.748 20.7052 19.4589 20.3415 19.4589H13.471L13.3816 19.4648C13.0602 19.5076 12.8125 19.7777 12.8125 20.1045C12.8125 20.461 13.1073 20.75 13.471 20.75H20.3415L20.4308 20.7441C20.7523 20.7014 21 20.4313 21 20.1045Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn delete--js">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.9391 3.64039C15.6523 2.79628 14.9075 2.25 14.0639 2.25H9.93592L9.779 2.25633C8.9492 2.32349 8.24111 2.91897 8.02304 3.75533L7.77543 5.01813L7.74642 5.12929C7.62785 5.48928 7.29636 5.73913 6.91772 5.73913H3.73139L3.63214 5.74598C3.27515 5.79564 3 6.10945 3 6.48916C3 6.90338 3.32745 7.23918 3.73139 7.23918L6.91772 7.23918H17.0821L20.2686 7.23918L20.3679 7.23234C20.7248 7.18267 21 6.86887 21 6.48916C21 6.07493 20.6725 5.73913 20.2686 5.73913H17.0821L16.9701 5.73177C16.6025 5.6832 16.2987 5.39872 16.2243 5.01783L15.9874 3.80209L15.9391 3.64039ZM14.9143 5.73913C14.881 5.65445 14.8522 5.56721 14.8282 5.47768L14.79 5.31208L14.5636 4.1428C14.5107 3.93991 14.3473 3.79138 14.1502 3.75742L14.0639 3.75006H9.93592C9.73071 3.75006 9.54829 3.87322 9.47252 4.02803L9.44682 4.09604L9.20979 5.31238C9.18087 5.46048 9.13899 5.60311 9.08551 5.73913H14.9143ZM18.9784 8.97017C19.3475 9.00069 19.6304 9.30716 19.65 9.67605L19.6405 9.88174L19.326 13.733L18.9961 17.4914C18.9263 18.2417 18.8638 18.8745 18.8099 19.3727C18.6225 21.1088 17.4955 22.1823 15.7966 22.2141C13.1494 22.263 10.6048 22.2625 8.13373 22.2091C6.48398 22.1744 5.37366 21.0893 5.18955 19.3797L5.0623 18.1202L4.83994 15.677L4.61216 12.9961L4.35172 9.77788C4.31935 9.36498 4.61951 9.00335 5.02215 8.97016C5.39123 8.93973 5.7183 9.19584 5.79519 9.55677L5.82511 9.85173L6.06966 12.8687L6.33669 15.9959C6.45646 17.3496 6.56034 18.4452 6.64346 19.2148C6.74838 20.189 7.26138 20.6904 8.16411 20.7093C10.6159 20.7624 13.1415 20.7629 15.7701 20.7143C16.7277 20.6964 17.2489 20.1999 17.356 19.2074L17.4827 17.9546C17.5198 17.5685 17.5594 17.1423 17.6014 16.6793L17.8686 13.6038L18.1906 9.6575C18.2204 9.27902 18.5192 8.9889 18.879 8.96882L18.9784 8.97017Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Remove</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-area-proects__item">
                                    <div class="personal-area-proects__img img-cover">
                                        <img src="img/catalog/img-7.jpg" alt="">
                                    </div>
                                    <div class="personal-area-proects__box">
                                        <div class="personal-area-proects__name">Chubbies #4454</div>
                                        <div class="personal-area-proects__box-bottom flex">
                                            <div class="personal-area-proects__info">
                                                <div class="personal-area-proects__info-caption">Project status</div>
                                                <div class="personal-area-proects__info-box moderate flex">
                                                    <span>Moderate</span>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                            fill="#8EA5B2"></path>
                                                        <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="personal-area-proects__buttons flex">
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.921 21.2C6.185 21.693 6.7 22.001 7.26 22C7.496 22.001 7.73 21.946 7.94 21.84L12.492 19.46C12.504 19.453 12.518 19.449 12.532 19.45L17.053 21.81C17.272 21.928 17.517 21.989 17.765 21.988C17.844 21.988 17.924 21.981 18.002 21.97C18.816 21.837 19.372 21.075 19.252 20.26L18.372 15.25C18.3671 15.2429 18.3656 15.2424 18.3652 15.2416C18.365 15.2412 18.365 15.2409 18.365 15.24C18.365 15.237 18.372 15.23 18.372 15.23L22.042 11.68C22.584 11.157 22.653 10.314 22.202 9.71C21.957 9.394 21.598 9.186 21.202 9.13L16.14 8.4C16.131 8.4 16.121 8.39 16.111 8.38L13.85 3.84C13.595 3.327 13.073 3.003 12.5 3C12.334 3 12.168 3.026 12.01 3.08C11.631 3.209 11.318 3.481 11.14 3.84L8.882 8.367C8.882 8.388 8.861 8.397 8.841 8.397L3.791 9.127C3.482 9.179 3.194 9.317 2.961 9.527C2.666 9.816 2.5 10.213 2.5 10.627C2.501 11.02 2.659 11.396 2.94 11.67L6.64 15.23C6.648 15.238 6.651 15.249 6.651 15.26L5.76 20.25C5.707 20.576 5.764 20.91 5.921 21.2ZM12.471 4.467L12.481 4.46H12.5L12.509 4.469C12.518 4.469 12.526 4.471 12.533 4.477C12.539 4.483 12.542 4.491 12.541 4.5L14.801 9.019C15.018 9.464 15.44 9.774 15.93 9.849L20.992 10.585C21.001 10.585 21.01 10.587 21.018 10.591C21.023 10.592 21.027 10.592 21.032 10.591L21.042 10.6L21.032 10.622L17.362 14.181C16.997 14.523 16.834 15.029 16.931 15.52L17.812 20.501L17.792 20.52H17.771C17.767 20.522 17.763 20.522 17.759 20.52C17.749 20.519 17.739 20.515 17.73 20.51H17.721L13.221 18.16C13.005 18.048 12.765 17.988 12.521 17.989C12.27 17.989 12.022 18.052 11.8 18.17L7.271 20.545C7.266 20.546 7.26 20.546 7.255 20.545C7.234 20.545 7.216 20.531 7.211 20.511V20.491L8.091 15.511C8.173 15.024 8.013 14.527 7.661 14.181L3.961 10.631C3.96 10.616 3.962 10.603 3.97 10.59L4.031 10.57L9.061 9.849C9.551 9.773 9.972 9.464 10.19 9.019L12.451 4.489C12.456 4.48 12.462 4.472 12.471 4.467Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Promotion</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M12.2882 4.25482L12.002 4.25C7.86108 4.25 4.12926 7.17308 2.06091 11.9558C1.9797 12.1436 1.9797 12.3564 2.06091 12.5442L2.20424 12.8668C4.24638 17.3431 7.77544 20.1144 11.7118 20.2452L11.998 20.25C16.1389 20.25 19.8707 17.3269 21.9391 12.5442C22.0213 12.354 22.0202 12.1384 21.9361 11.949L21.7968 11.6356C19.7497 7.15091 16.2192 4.38547 12.2882 4.25482ZM12.009 5.73942L12.2479 5.74456L12.5149 5.75845C15.7122 5.98484 18.6525 8.35553 20.429 12.2491L20.4197 12.2731C18.5987 16.2505 15.5569 18.6353 12.2589 18.755L12.004 18.7588L11.7469 18.7554L11.4806 18.7415C8.38271 18.5221 5.52637 16.2844 3.73914 12.6097L3.57 12.2491L3.72658 11.9162C5.61117 8.02315 8.69148 5.74027 12.009 5.73942ZM11.9995 8.36346C9.8391 8.36346 8.0885 10.1031 8.0885 12.2502C8.0885 14.3965 9.83929 16.1359 11.9995 16.1359C14.1598 16.1359 15.9115 14.3963 15.9115 12.2502C15.9115 10.1032 14.16 8.36346 11.9995 8.36346ZM11.9995 9.85378C13.3317 9.85378 14.4115 10.9264 14.4115 12.2502C14.4115 13.5731 13.3316 14.6456 11.9995 14.6456C10.6677 14.6456 9.5885 13.5734 9.5885 12.2502C9.5885 10.9261 10.6676 9.85378 11.9995 9.85378Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Preview</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.96867 14.1657L13.6592 4.66662C14.906 3.44446 16.9283 3.44446 18.175 4.66662L19.4694 5.9354C20.7162 7.15755 20.7162 9.13985 19.4694 10.362L9.74061 19.8986C9.1843 20.4439 8.43007 20.7499 7.64282 20.7499H3.65854C3.28841 20.7499 2.99098 20.451 3.00021 20.0883L3.10043 16.1475C3.12036 15.4026 3.43127 14.6925 3.96867 14.1657ZM18.5381 6.84831L17.2437 5.57953C16.5113 4.86156 15.323 4.86156 14.5905 5.57953L13.8382 6.31697L17.7862 10.1861L18.5381 9.44909C19.2705 8.73112 19.2705 7.56628 18.5381 6.84831ZM4.89998 15.0787L12.9069 7.22989L16.8549 11.099L8.8093 18.9857L8.70228 19.0817C8.4067 19.3245 8.03222 19.4588 7.64282 19.4588L4.33345 19.4584L4.41707 16.1805C4.42814 15.7669 4.60126 15.3715 4.89998 15.0787ZM21 20.1045C21 19.748 20.7052 19.4589 20.3415 19.4589H13.471L13.3816 19.4648C13.0602 19.5076 12.8125 19.7777 12.8125 20.1045C12.8125 20.461 13.1073 20.75 13.471 20.75H20.3415L20.4308 20.7441C20.7523 20.7014 21 20.4313 21 20.1045Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn delete--js">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.9391 3.64039C15.6523 2.79628 14.9075 2.25 14.0639 2.25H9.93592L9.779 2.25633C8.9492 2.32349 8.24111 2.91897 8.02304 3.75533L7.77543 5.01813L7.74642 5.12929C7.62785 5.48928 7.29636 5.73913 6.91772 5.73913H3.73139L3.63214 5.74598C3.27515 5.79564 3 6.10945 3 6.48916C3 6.90338 3.32745 7.23918 3.73139 7.23918L6.91772 7.23918H17.0821L20.2686 7.23918L20.3679 7.23234C20.7248 7.18267 21 6.86887 21 6.48916C21 6.07493 20.6725 5.73913 20.2686 5.73913H17.0821L16.9701 5.73177C16.6025 5.6832 16.2987 5.39872 16.2243 5.01783L15.9874 3.80209L15.9391 3.64039ZM14.9143 5.73913C14.881 5.65445 14.8522 5.56721 14.8282 5.47768L14.79 5.31208L14.5636 4.1428C14.5107 3.93991 14.3473 3.79138 14.1502 3.75742L14.0639 3.75006H9.93592C9.73071 3.75006 9.54829 3.87322 9.47252 4.02803L9.44682 4.09604L9.20979 5.31238C9.18087 5.46048 9.13899 5.60311 9.08551 5.73913H14.9143ZM18.9784 8.97017C19.3475 9.00069 19.6304 9.30716 19.65 9.67605L19.6405 9.88174L19.326 13.733L18.9961 17.4914C18.9263 18.2417 18.8638 18.8745 18.8099 19.3727C18.6225 21.1088 17.4955 22.1823 15.7966 22.2141C13.1494 22.263 10.6048 22.2625 8.13373 22.2091C6.48398 22.1744 5.37366 21.0893 5.18955 19.3797L5.0623 18.1202L4.83994 15.677L4.61216 12.9961L4.35172 9.77788C4.31935 9.36498 4.61951 9.00335 5.02215 8.97016C5.39123 8.93973 5.7183 9.19584 5.79519 9.55677L5.82511 9.85173L6.06966 12.8687L6.33669 15.9959C6.45646 17.3496 6.56034 18.4452 6.64346 19.2148C6.74838 20.189 7.26138 20.6904 8.16411 20.7093C10.6159 20.7624 13.1415 20.7629 15.7701 20.7143C16.7277 20.6964 17.2489 20.1999 17.356 19.2074L17.4827 17.9546C17.5198 17.5685 17.5594 17.1423 17.6014 16.6793L17.8686 13.6038L18.1906 9.6575C18.2204 9.27902 18.5192 8.9889 18.879 8.96882L18.9784 8.97017Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Remove</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-area-proects__item">
                                    <div class="personal-area-proects__img img-cover">
                                        <img src="img/catalog/img-4.jpg" alt="">
                                    </div>
                                    <div class="personal-area-proects__box">
                                        <div class="personal-area-proects__name">AniEmoji #137 Sneeze</div>
                                        <div class="personal-area-proects__box-bottom flex">
                                            <div class="personal-area-proects__info">
                                                <div class="personal-area-proects__info-caption">Project status</div>
                                                <div class="personal-area-proects__info-box published flex">
                                                    <span>Published</span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.612 1.66602H6.38783C3.55651 1.66602 1.66699 3.69318 1.66699 6.59602V13.4027C1.66699 16.3083 3.55147 18.3327 6.38783 18.3327H13.6112C16.4483 18.3327 18.3337 16.3082 18.3337 13.4027V6.59602C18.3337 3.6906 16.4485 1.66602 13.612 1.66602ZM6.38783 2.91602H13.612C15.7374 2.91602 17.0837 4.36182 17.0837 6.59602V13.4027C17.0837 15.637 15.7373 17.0827 13.6112 17.0827H6.38783C4.26263 17.0827 2.91699 15.6371 2.91699 13.4027V6.59602C2.91699 4.36466 4.26727 2.91602 6.38783 2.91602ZM13.4085 7.57992C13.1644 7.33584 12.7687 7.33584 12.5246 7.57992L9.01083 11.0925L7.4751 9.55732L7.40499 9.49682C7.16027 9.31533 6.81306 9.33557 6.59121 9.55751C6.34719 9.80164 6.34727 10.1974 6.5914 10.4414L8.56973 12.4189L8.63984 12.4794C8.88451 12.6609 9.23167 12.6407 9.45353 12.4188L13.4085 8.4638L13.469 8.3937C13.6506 8.14902 13.6304 7.8018 13.4085 7.57992Z"
                                                              fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="personal-area-proects__buttons flex">
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.921 21.2C6.185 21.693 6.7 22.001 7.26 22C7.496 22.001 7.73 21.946 7.94 21.84L12.492 19.46C12.504 19.453 12.518 19.449 12.532 19.45L17.053 21.81C17.272 21.928 17.517 21.989 17.765 21.988C17.844 21.988 17.924 21.981 18.002 21.97C18.816 21.837 19.372 21.075 19.252 20.26L18.372 15.25C18.3671 15.2429 18.3656 15.2424 18.3652 15.2416C18.365 15.2412 18.365 15.2409 18.365 15.24C18.365 15.237 18.372 15.23 18.372 15.23L22.042 11.68C22.584 11.157 22.653 10.314 22.202 9.71C21.957 9.394 21.598 9.186 21.202 9.13L16.14 8.4C16.131 8.4 16.121 8.39 16.111 8.38L13.85 3.84C13.595 3.327 13.073 3.003 12.5 3C12.334 3 12.168 3.026 12.01 3.08C11.631 3.209 11.318 3.481 11.14 3.84L8.882 8.367C8.882 8.388 8.861 8.397 8.841 8.397L3.791 9.127C3.482 9.179 3.194 9.317 2.961 9.527C2.666 9.816 2.5 10.213 2.5 10.627C2.501 11.02 2.659 11.396 2.94 11.67L6.64 15.23C6.648 15.238 6.651 15.249 6.651 15.26L5.76 20.25C5.707 20.576 5.764 20.91 5.921 21.2ZM12.471 4.467L12.481 4.46H12.5L12.509 4.469C12.518 4.469 12.526 4.471 12.533 4.477C12.539 4.483 12.542 4.491 12.541 4.5L14.801 9.019C15.018 9.464 15.44 9.774 15.93 9.849L20.992 10.585C21.001 10.585 21.01 10.587 21.018 10.591C21.023 10.592 21.027 10.592 21.032 10.591L21.042 10.6L21.032 10.622L17.362 14.181C16.997 14.523 16.834 15.029 16.931 15.52L17.812 20.501L17.792 20.52H17.771C17.767 20.522 17.763 20.522 17.759 20.52C17.749 20.519 17.739 20.515 17.73 20.51H17.721L13.221 18.16C13.005 18.048 12.765 17.988 12.521 17.989C12.27 17.989 12.022 18.052 11.8 18.17L7.271 20.545C7.266 20.546 7.26 20.546 7.255 20.545C7.234 20.545 7.216 20.531 7.211 20.511V20.491L8.091 15.511C8.173 15.024 8.013 14.527 7.661 14.181L3.961 10.631C3.96 10.616 3.962 10.603 3.97 10.59L4.031 10.57L9.061 9.849C9.551 9.773 9.972 9.464 10.19 9.019L12.451 4.489C12.456 4.48 12.462 4.472 12.471 4.467Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Promotion</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M12.2882 4.25482L12.002 4.25C7.86108 4.25 4.12926 7.17308 2.06091 11.9558C1.9797 12.1436 1.9797 12.3564 2.06091 12.5442L2.20424 12.8668C4.24638 17.3431 7.77544 20.1144 11.7118 20.2452L11.998 20.25C16.1389 20.25 19.8707 17.3269 21.9391 12.5442C22.0213 12.354 22.0202 12.1384 21.9361 11.949L21.7968 11.6356C19.7497 7.15091 16.2192 4.38547 12.2882 4.25482ZM12.009 5.73942L12.2479 5.74456L12.5149 5.75845C15.7122 5.98484 18.6525 8.35553 20.429 12.2491L20.4197 12.2731C18.5987 16.2505 15.5569 18.6353 12.2589 18.755L12.004 18.7588L11.7469 18.7554L11.4806 18.7415C8.38271 18.5221 5.52637 16.2844 3.73914 12.6097L3.57 12.2491L3.72658 11.9162C5.61117 8.02315 8.69148 5.74027 12.009 5.73942ZM11.9995 8.36346C9.8391 8.36346 8.0885 10.1031 8.0885 12.2502C8.0885 14.3965 9.83929 16.1359 11.9995 16.1359C14.1598 16.1359 15.9115 14.3963 15.9115 12.2502C15.9115 10.1032 14.16 8.36346 11.9995 8.36346ZM11.9995 9.85378C13.3317 9.85378 14.4115 10.9264 14.4115 12.2502C14.4115 13.5731 13.3316 14.6456 11.9995 14.6456C10.6677 14.6456 9.5885 13.5734 9.5885 12.2502C9.5885 10.9261 10.6676 9.85378 11.9995 9.85378Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Preview</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.96867 14.1657L13.6592 4.66662C14.906 3.44446 16.9283 3.44446 18.175 4.66662L19.4694 5.9354C20.7162 7.15755 20.7162 9.13985 19.4694 10.362L9.74061 19.8986C9.1843 20.4439 8.43007 20.7499 7.64282 20.7499H3.65854C3.28841 20.7499 2.99098 20.451 3.00021 20.0883L3.10043 16.1475C3.12036 15.4026 3.43127 14.6925 3.96867 14.1657ZM18.5381 6.84831L17.2437 5.57953C16.5113 4.86156 15.323 4.86156 14.5905 5.57953L13.8382 6.31697L17.7862 10.1861L18.5381 9.44909C19.2705 8.73112 19.2705 7.56628 18.5381 6.84831ZM4.89998 15.0787L12.9069 7.22989L16.8549 11.099L8.8093 18.9857L8.70228 19.0817C8.4067 19.3245 8.03222 19.4588 7.64282 19.4588L4.33345 19.4584L4.41707 16.1805C4.42814 15.7669 4.60126 15.3715 4.89998 15.0787ZM21 20.1045C21 19.748 20.7052 19.4589 20.3415 19.4589H13.471L13.3816 19.4648C13.0602 19.5076 12.8125 19.7777 12.8125 20.1045C12.8125 20.461 13.1073 20.75 13.471 20.75H20.3415L20.4308 20.7441C20.7523 20.7014 21 20.4313 21 20.1045Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn delete--js">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.9391 3.64039C15.6523 2.79628 14.9075 2.25 14.0639 2.25H9.93592L9.779 2.25633C8.9492 2.32349 8.24111 2.91897 8.02304 3.75533L7.77543 5.01813L7.74642 5.12929C7.62785 5.48928 7.29636 5.73913 6.91772 5.73913H3.73139L3.63214 5.74598C3.27515 5.79564 3 6.10945 3 6.48916C3 6.90338 3.32745 7.23918 3.73139 7.23918L6.91772 7.23918H17.0821L20.2686 7.23918L20.3679 7.23234C20.7248 7.18267 21 6.86887 21 6.48916C21 6.07493 20.6725 5.73913 20.2686 5.73913H17.0821L16.9701 5.73177C16.6025 5.6832 16.2987 5.39872 16.2243 5.01783L15.9874 3.80209L15.9391 3.64039ZM14.9143 5.73913C14.881 5.65445 14.8522 5.56721 14.8282 5.47768L14.79 5.31208L14.5636 4.1428C14.5107 3.93991 14.3473 3.79138 14.1502 3.75742L14.0639 3.75006H9.93592C9.73071 3.75006 9.54829 3.87322 9.47252 4.02803L9.44682 4.09604L9.20979 5.31238C9.18087 5.46048 9.13899 5.60311 9.08551 5.73913H14.9143ZM18.9784 8.97017C19.3475 9.00069 19.6304 9.30716 19.65 9.67605L19.6405 9.88174L19.326 13.733L18.9961 17.4914C18.9263 18.2417 18.8638 18.8745 18.8099 19.3727C18.6225 21.1088 17.4955 22.1823 15.7966 22.2141C13.1494 22.263 10.6048 22.2625 8.13373 22.2091C6.48398 22.1744 5.37366 21.0893 5.18955 19.3797L5.0623 18.1202L4.83994 15.677L4.61216 12.9961L4.35172 9.77788C4.31935 9.36498 4.61951 9.00335 5.02215 8.97016C5.39123 8.93973 5.7183 9.19584 5.79519 9.55677L5.82511 9.85173L6.06966 12.8687L6.33669 15.9959C6.45646 17.3496 6.56034 18.4452 6.64346 19.2148C6.74838 20.189 7.26138 20.6904 8.16411 20.7093C10.6159 20.7624 13.1415 20.7629 15.7701 20.7143C16.7277 20.6964 17.2489 20.1999 17.356 19.2074L17.4827 17.9546C17.5198 17.5685 17.5594 17.1423 17.6014 16.6793L17.8686 13.6038L18.1906 9.6575C18.2204 9.27902 18.5192 8.9889 18.879 8.96882L18.9784 8.97017Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Remove</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-area-proects__item">
                                    <div class="personal-area-proects__img img-cover">
                                        <img src="img/catalog/img-7.jpg" alt="">
                                    </div>
                                    <div class="personal-area-proects__box">
                                        <div class="personal-area-proects__name">Chubbies #4454</div>
                                        <div class="personal-area-proects__box-bottom flex">
                                            <div class="personal-area-proects__info">
                                                <div class="personal-area-proects__info-caption">Project status</div>
                                                <div class="personal-area-proects__info-box moderate flex">
                                                    <span>Moderate</span>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.99992 1.33301C4.32392 1.33301 1.33325 4.32367 1.33325 7.99967C1.33325 11.6757 4.32392 14.6663 7.99992 14.6663C11.6759 14.6663 14.6666 11.6757 14.6666 7.99967C14.6666 4.32367 11.6759 1.33301 7.99992 1.33301ZM7.99992 13.333C5.05925 13.333 2.66659 10.9403 2.66659 7.99967C2.66659 5.05901 5.05925 2.66634 7.99992 2.66634C10.9406 2.66634 13.3333 5.05901 13.3333 7.99967C13.3333 10.9403 10.9406 13.333 7.99992 13.333Z"
                                                            fill="#8EA5B2"></path>
                                                        <path d="M8.66658 4.66699H7.33325V8.27633L9.52858 10.4717L10.4713 9.52899L8.66658 7.72433V4.66699Z" fill="#8EA5B2"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="personal-area-proects__buttons flex">
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.921 21.2C6.185 21.693 6.7 22.001 7.26 22C7.496 22.001 7.73 21.946 7.94 21.84L12.492 19.46C12.504 19.453 12.518 19.449 12.532 19.45L17.053 21.81C17.272 21.928 17.517 21.989 17.765 21.988C17.844 21.988 17.924 21.981 18.002 21.97C18.816 21.837 19.372 21.075 19.252 20.26L18.372 15.25C18.3671 15.2429 18.3656 15.2424 18.3652 15.2416C18.365 15.2412 18.365 15.2409 18.365 15.24C18.365 15.237 18.372 15.23 18.372 15.23L22.042 11.68C22.584 11.157 22.653 10.314 22.202 9.71C21.957 9.394 21.598 9.186 21.202 9.13L16.14 8.4C16.131 8.4 16.121 8.39 16.111 8.38L13.85 3.84C13.595 3.327 13.073 3.003 12.5 3C12.334 3 12.168 3.026 12.01 3.08C11.631 3.209 11.318 3.481 11.14 3.84L8.882 8.367C8.882 8.388 8.861 8.397 8.841 8.397L3.791 9.127C3.482 9.179 3.194 9.317 2.961 9.527C2.666 9.816 2.5 10.213 2.5 10.627C2.501 11.02 2.659 11.396 2.94 11.67L6.64 15.23C6.648 15.238 6.651 15.249 6.651 15.26L5.76 20.25C5.707 20.576 5.764 20.91 5.921 21.2ZM12.471 4.467L12.481 4.46H12.5L12.509 4.469C12.518 4.469 12.526 4.471 12.533 4.477C12.539 4.483 12.542 4.491 12.541 4.5L14.801 9.019C15.018 9.464 15.44 9.774 15.93 9.849L20.992 10.585C21.001 10.585 21.01 10.587 21.018 10.591C21.023 10.592 21.027 10.592 21.032 10.591L21.042 10.6L21.032 10.622L17.362 14.181C16.997 14.523 16.834 15.029 16.931 15.52L17.812 20.501L17.792 20.52H17.771C17.767 20.522 17.763 20.522 17.759 20.52C17.749 20.519 17.739 20.515 17.73 20.51H17.721L13.221 18.16C13.005 18.048 12.765 17.988 12.521 17.989C12.27 17.989 12.022 18.052 11.8 18.17L7.271 20.545C7.266 20.546 7.26 20.546 7.255 20.545C7.234 20.545 7.216 20.531 7.211 20.511V20.491L8.091 15.511C8.173 15.024 8.013 14.527 7.661 14.181L3.961 10.631C3.96 10.616 3.962 10.603 3.97 10.59L4.031 10.57L9.061 9.849C9.551 9.773 9.972 9.464 10.19 9.019L12.451 4.489C12.456 4.48 12.462 4.472 12.471 4.467Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Promotion</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M12.2882 4.25482L12.002 4.25C7.86108 4.25 4.12926 7.17308 2.06091 11.9558C1.9797 12.1436 1.9797 12.3564 2.06091 12.5442L2.20424 12.8668C4.24638 17.3431 7.77544 20.1144 11.7118 20.2452L11.998 20.25C16.1389 20.25 19.8707 17.3269 21.9391 12.5442C22.0213 12.354 22.0202 12.1384 21.9361 11.949L21.7968 11.6356C19.7497 7.15091 16.2192 4.38547 12.2882 4.25482ZM12.009 5.73942L12.2479 5.74456L12.5149 5.75845C15.7122 5.98484 18.6525 8.35553 20.429 12.2491L20.4197 12.2731C18.5987 16.2505 15.5569 18.6353 12.2589 18.755L12.004 18.7588L11.7469 18.7554L11.4806 18.7415C8.38271 18.5221 5.52637 16.2844 3.73914 12.6097L3.57 12.2491L3.72658 11.9162C5.61117 8.02315 8.69148 5.74027 12.009 5.73942ZM11.9995 8.36346C9.8391 8.36346 8.0885 10.1031 8.0885 12.2502C8.0885 14.3965 9.83929 16.1359 11.9995 16.1359C14.1598 16.1359 15.9115 14.3963 15.9115 12.2502C15.9115 10.1032 14.16 8.36346 11.9995 8.36346ZM11.9995 9.85378C13.3317 9.85378 14.4115 10.9264 14.4115 12.2502C14.4115 13.5731 13.3316 14.6456 11.9995 14.6456C10.6677 14.6456 9.5885 13.5734 9.5885 12.2502C9.5885 10.9261 10.6676 9.85378 11.9995 9.85378Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Preview</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.96867 14.1657L13.6592 4.66662C14.906 3.44446 16.9283 3.44446 18.175 4.66662L19.4694 5.9354C20.7162 7.15755 20.7162 9.13985 19.4694 10.362L9.74061 19.8986C9.1843 20.4439 8.43007 20.7499 7.64282 20.7499H3.65854C3.28841 20.7499 2.99098 20.451 3.00021 20.0883L3.10043 16.1475C3.12036 15.4026 3.43127 14.6925 3.96867 14.1657ZM18.5381 6.84831L17.2437 5.57953C16.5113 4.86156 15.323 4.86156 14.5905 5.57953L13.8382 6.31697L17.7862 10.1861L18.5381 9.44909C19.2705 8.73112 19.2705 7.56628 18.5381 6.84831ZM4.89998 15.0787L12.9069 7.22989L16.8549 11.099L8.8093 18.9857L8.70228 19.0817C8.4067 19.3245 8.03222 19.4588 7.64282 19.4588L4.33345 19.4584L4.41707 16.1805C4.42814 15.7669 4.60126 15.3715 4.89998 15.0787ZM21 20.1045C21 19.748 20.7052 19.4589 20.3415 19.4589H13.471L13.3816 19.4648C13.0602 19.5076 12.8125 19.7777 12.8125 20.1045C12.8125 20.461 13.1073 20.75 13.471 20.75H20.3415L20.4308 20.7441C20.7523 20.7014 21 20.4313 21 20.1045Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn delete--js">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.9391 3.64039C15.6523 2.79628 14.9075 2.25 14.0639 2.25H9.93592L9.779 2.25633C8.9492 2.32349 8.24111 2.91897 8.02304 3.75533L7.77543 5.01813L7.74642 5.12929C7.62785 5.48928 7.29636 5.73913 6.91772 5.73913H3.73139L3.63214 5.74598C3.27515 5.79564 3 6.10945 3 6.48916C3 6.90338 3.32745 7.23918 3.73139 7.23918L6.91772 7.23918H17.0821L20.2686 7.23918L20.3679 7.23234C20.7248 7.18267 21 6.86887 21 6.48916C21 6.07493 20.6725 5.73913 20.2686 5.73913H17.0821L16.9701 5.73177C16.6025 5.6832 16.2987 5.39872 16.2243 5.01783L15.9874 3.80209L15.9391 3.64039ZM14.9143 5.73913C14.881 5.65445 14.8522 5.56721 14.8282 5.47768L14.79 5.31208L14.5636 4.1428C14.5107 3.93991 14.3473 3.79138 14.1502 3.75742L14.0639 3.75006H9.93592C9.73071 3.75006 9.54829 3.87322 9.47252 4.02803L9.44682 4.09604L9.20979 5.31238C9.18087 5.46048 9.13899 5.60311 9.08551 5.73913H14.9143ZM18.9784 8.97017C19.3475 9.00069 19.6304 9.30716 19.65 9.67605L19.6405 9.88174L19.326 13.733L18.9961 17.4914C18.9263 18.2417 18.8638 18.8745 18.8099 19.3727C18.6225 21.1088 17.4955 22.1823 15.7966 22.2141C13.1494 22.263 10.6048 22.2625 8.13373 22.2091C6.48398 22.1744 5.37366 21.0893 5.18955 19.3797L5.0623 18.1202L4.83994 15.677L4.61216 12.9961L4.35172 9.77788C4.31935 9.36498 4.61951 9.00335 5.02215 8.97016C5.39123 8.93973 5.7183 9.19584 5.79519 9.55677L5.82511 9.85173L6.06966 12.8687L6.33669 15.9959C6.45646 17.3496 6.56034 18.4452 6.64346 19.2148C6.74838 20.189 7.26138 20.6904 8.16411 20.7093C10.6159 20.7624 13.1415 20.7629 15.7701 20.7143C16.7277 20.6964 17.2489 20.1999 17.356 19.2074L17.4827 17.9546C17.5198 17.5685 17.5594 17.1423 17.6014 16.6793L17.8686 13.6038L18.1906 9.6575C18.2204 9.27902 18.5192 8.9889 18.879 8.96882L18.9784 8.97017Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Remove</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-area-proects__item">
                                    <div class="personal-area-proects__img img-cover">
                                        <img src="img/catalog/img-4.jpg" alt="">
                                    </div>
                                    <div class="personal-area-proects__box">
                                        <div class="personal-area-proects__name">AniEmoji #137 Sneeze</div>
                                        <div class="personal-area-proects__box-bottom flex">
                                            <div class="personal-area-proects__info">
                                                <div class="personal-area-proects__info-caption">Project status</div>
                                                <div class="personal-area-proects__info-box published flex">
                                                    <span>Published</span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.612 1.66602H6.38783C3.55651 1.66602 1.66699 3.69318 1.66699 6.59602V13.4027C1.66699 16.3083 3.55147 18.3327 6.38783 18.3327H13.6112C16.4483 18.3327 18.3337 16.3082 18.3337 13.4027V6.59602C18.3337 3.6906 16.4485 1.66602 13.612 1.66602ZM6.38783 2.91602H13.612C15.7374 2.91602 17.0837 4.36182 17.0837 6.59602V13.4027C17.0837 15.637 15.7373 17.0827 13.6112 17.0827H6.38783C4.26263 17.0827 2.91699 15.6371 2.91699 13.4027V6.59602C2.91699 4.36466 4.26727 2.91602 6.38783 2.91602ZM13.4085 7.57992C13.1644 7.33584 12.7687 7.33584 12.5246 7.57992L9.01083 11.0925L7.4751 9.55732L7.40499 9.49682C7.16027 9.31533 6.81306 9.33557 6.59121 9.55751C6.34719 9.80164 6.34727 10.1974 6.5914 10.4414L8.56973 12.4189L8.63984 12.4794C8.88451 12.6609 9.23167 12.6407 9.45353 12.4188L13.4085 8.4638L13.469 8.3937C13.6506 8.14902 13.6304 7.8018 13.4085 7.57992Z"
                                                              fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="personal-area-proects__buttons flex">
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.921 21.2C6.185 21.693 6.7 22.001 7.26 22C7.496 22.001 7.73 21.946 7.94 21.84L12.492 19.46C12.504 19.453 12.518 19.449 12.532 19.45L17.053 21.81C17.272 21.928 17.517 21.989 17.765 21.988C17.844 21.988 17.924 21.981 18.002 21.97C18.816 21.837 19.372 21.075 19.252 20.26L18.372 15.25C18.3671 15.2429 18.3656 15.2424 18.3652 15.2416C18.365 15.2412 18.365 15.2409 18.365 15.24C18.365 15.237 18.372 15.23 18.372 15.23L22.042 11.68C22.584 11.157 22.653 10.314 22.202 9.71C21.957 9.394 21.598 9.186 21.202 9.13L16.14 8.4C16.131 8.4 16.121 8.39 16.111 8.38L13.85 3.84C13.595 3.327 13.073 3.003 12.5 3C12.334 3 12.168 3.026 12.01 3.08C11.631 3.209 11.318 3.481 11.14 3.84L8.882 8.367C8.882 8.388 8.861 8.397 8.841 8.397L3.791 9.127C3.482 9.179 3.194 9.317 2.961 9.527C2.666 9.816 2.5 10.213 2.5 10.627C2.501 11.02 2.659 11.396 2.94 11.67L6.64 15.23C6.648 15.238 6.651 15.249 6.651 15.26L5.76 20.25C5.707 20.576 5.764 20.91 5.921 21.2ZM12.471 4.467L12.481 4.46H12.5L12.509 4.469C12.518 4.469 12.526 4.471 12.533 4.477C12.539 4.483 12.542 4.491 12.541 4.5L14.801 9.019C15.018 9.464 15.44 9.774 15.93 9.849L20.992 10.585C21.001 10.585 21.01 10.587 21.018 10.591C21.023 10.592 21.027 10.592 21.032 10.591L21.042 10.6L21.032 10.622L17.362 14.181C16.997 14.523 16.834 15.029 16.931 15.52L17.812 20.501L17.792 20.52H17.771C17.767 20.522 17.763 20.522 17.759 20.52C17.749 20.519 17.739 20.515 17.73 20.51H17.721L13.221 18.16C13.005 18.048 12.765 17.988 12.521 17.989C12.27 17.989 12.022 18.052 11.8 18.17L7.271 20.545C7.266 20.546 7.26 20.546 7.255 20.545C7.234 20.545 7.216 20.531 7.211 20.511V20.491L8.091 15.511C8.173 15.024 8.013 14.527 7.661 14.181L3.961 10.631C3.96 10.616 3.962 10.603 3.97 10.59L4.031 10.57L9.061 9.849C9.551 9.773 9.972 9.464 10.19 9.019L12.451 4.489C12.456 4.48 12.462 4.472 12.471 4.467Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Promotion</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M12.2882 4.25482L12.002 4.25C7.86108 4.25 4.12926 7.17308 2.06091 11.9558C1.9797 12.1436 1.9797 12.3564 2.06091 12.5442L2.20424 12.8668C4.24638 17.3431 7.77544 20.1144 11.7118 20.2452L11.998 20.25C16.1389 20.25 19.8707 17.3269 21.9391 12.5442C22.0213 12.354 22.0202 12.1384 21.9361 11.949L21.7968 11.6356C19.7497 7.15091 16.2192 4.38547 12.2882 4.25482ZM12.009 5.73942L12.2479 5.74456L12.5149 5.75845C15.7122 5.98484 18.6525 8.35553 20.429 12.2491L20.4197 12.2731C18.5987 16.2505 15.5569 18.6353 12.2589 18.755L12.004 18.7588L11.7469 18.7554L11.4806 18.7415C8.38271 18.5221 5.52637 16.2844 3.73914 12.6097L3.57 12.2491L3.72658 11.9162C5.61117 8.02315 8.69148 5.74027 12.009 5.73942ZM11.9995 8.36346C9.8391 8.36346 8.0885 10.1031 8.0885 12.2502C8.0885 14.3965 9.83929 16.1359 11.9995 16.1359C14.1598 16.1359 15.9115 14.3963 15.9115 12.2502C15.9115 10.1032 14.16 8.36346 11.9995 8.36346ZM11.9995 9.85378C13.3317 9.85378 14.4115 10.9264 14.4115 12.2502C14.4115 13.5731 13.3316 14.6456 11.9995 14.6456C10.6677 14.6456 9.5885 13.5734 9.5885 12.2502C9.5885 10.9261 10.6676 9.85378 11.9995 9.85378Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Preview</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.96867 14.1657L13.6592 4.66662C14.906 3.44446 16.9283 3.44446 18.175 4.66662L19.4694 5.9354C20.7162 7.15755 20.7162 9.13985 19.4694 10.362L9.74061 19.8986C9.1843 20.4439 8.43007 20.7499 7.64282 20.7499H3.65854C3.28841 20.7499 2.99098 20.451 3.00021 20.0883L3.10043 16.1475C3.12036 15.4026 3.43127 14.6925 3.96867 14.1657ZM18.5381 6.84831L17.2437 5.57953C16.5113 4.86156 15.323 4.86156 14.5905 5.57953L13.8382 6.31697L17.7862 10.1861L18.5381 9.44909C19.2705 8.73112 19.2705 7.56628 18.5381 6.84831ZM4.89998 15.0787L12.9069 7.22989L16.8549 11.099L8.8093 18.9857L8.70228 19.0817C8.4067 19.3245 8.03222 19.4588 7.64282 19.4588L4.33345 19.4584L4.41707 16.1805C4.42814 15.7669 4.60126 15.3715 4.89998 15.0787ZM21 20.1045C21 19.748 20.7052 19.4589 20.3415 19.4589H13.471L13.3816 19.4648C13.0602 19.5076 12.8125 19.7777 12.8125 20.1045C12.8125 20.461 13.1073 20.75 13.471 20.75H20.3415L20.4308 20.7441C20.7523 20.7014 21 20.4313 21 20.1045Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="personal-area-proects__btn delete--js">
                                                    <div class="personal-area-proects__btn-icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.9391 3.64039C15.6523 2.79628 14.9075 2.25 14.0639 2.25H9.93592L9.779 2.25633C8.9492 2.32349 8.24111 2.91897 8.02304 3.75533L7.77543 5.01813L7.74642 5.12929C7.62785 5.48928 7.29636 5.73913 6.91772 5.73913H3.73139L3.63214 5.74598C3.27515 5.79564 3 6.10945 3 6.48916C3 6.90338 3.32745 7.23918 3.73139 7.23918L6.91772 7.23918H17.0821L20.2686 7.23918L20.3679 7.23234C20.7248 7.18267 21 6.86887 21 6.48916C21 6.07493 20.6725 5.73913 20.2686 5.73913H17.0821L16.9701 5.73177C16.6025 5.6832 16.2987 5.39872 16.2243 5.01783L15.9874 3.80209L15.9391 3.64039ZM14.9143 5.73913C14.881 5.65445 14.8522 5.56721 14.8282 5.47768L14.79 5.31208L14.5636 4.1428C14.5107 3.93991 14.3473 3.79138 14.1502 3.75742L14.0639 3.75006H9.93592C9.73071 3.75006 9.54829 3.87322 9.47252 4.02803L9.44682 4.09604L9.20979 5.31238C9.18087 5.46048 9.13899 5.60311 9.08551 5.73913H14.9143ZM18.9784 8.97017C19.3475 9.00069 19.6304 9.30716 19.65 9.67605L19.6405 9.88174L19.326 13.733L18.9961 17.4914C18.9263 18.2417 18.8638 18.8745 18.8099 19.3727C18.6225 21.1088 17.4955 22.1823 15.7966 22.2141C13.1494 22.263 10.6048 22.2625 8.13373 22.2091C6.48398 22.1744 5.37366 21.0893 5.18955 19.3797L5.0623 18.1202L4.83994 15.677L4.61216 12.9961L4.35172 9.77788C4.31935 9.36498 4.61951 9.00335 5.02215 8.97016C5.39123 8.93973 5.7183 9.19584 5.79519 9.55677L5.82511 9.85173L6.06966 12.8687L6.33669 15.9959C6.45646 17.3496 6.56034 18.4452 6.64346 19.2148C6.74838 20.189 7.26138 20.6904 8.16411 20.7093C10.6159 20.7624 13.1415 20.7629 15.7701 20.7143C16.7277 20.6964 17.2489 20.1999 17.356 19.2074L17.4827 17.9546C17.5198 17.5685 17.5594 17.1423 17.6014 16.6793L17.8686 13.6038L18.1906 9.6575C18.2204 9.27902 18.5192 8.9889 18.879 8.96882L18.9784 8.97017Z"
                                                                  fill="#5E7C8D" />
                                                        </svg>
                                                    </div>
                                                    <div class="personal-area-proects__btn-caption">
                                                        <span>Remove</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="personal-area-proects__bottom bottom">
                                <a href="#" class="personal-area-proects__bottom-btn flex-center">
                                    <div class="personal-area-proects__bottom-btn-caption">Show more</div>
                                    <div class="personal-area-proects__bottom-btn-icon svg-contain">
                                        <svg width="17" height="4" viewBox="0 0 17 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="2" cy="2" r="2" fill="#5A7687" />
                                            <circle cx="8.5" cy="2" r="2" fill="#5A7687" />
                                            <circle cx="15" cy="2" r="2" fill="#5A7687" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection