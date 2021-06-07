@extends('layouts.visible')

@push('header')
    <style>
        @foreach($categories as $category)
            .filter__category-item_{{ $category->id  }}.active { color: {{ $category->color_code }}!important; border-color: {{ $category->color_code }}!important; background-color: unset!important; }
            .filter__category-item_{{ $category->id  }}:hover { color: {{ $category->color_code }}!important; border-color: {{ $category->color_code }}!important; }
            .filter__category-item_{{ $category->id  }} svg * { fill: {{ $category->color_code }}!important; }
        @endforeach
    </style>
@endpush

@section('content')
    @include('visible.particles.breadcrumbs')

    <div class="submit">
        <div class="wrapper wrapper_big">
            <div class="submit__body flex">
                <div class="submit__left">
                    <div class="submit__title title bottom">{{ $page->name }}</div>
                    <div class="submit__subtitle bottom">{!! $page->data['text'] ?? '' !!}</div>
                </div>
                <div class="submit__right">
                    <form method="post" action="#" class="contacts__form form">
                        <label class="form__label bottom">
                            <input type="text" name="text" class="form__field field" placeholder="The name of the project">
                        </label>
                        <label class="form__label bottom">
                            <div class="file flex success">
                                <div class="file__box flex">
                                    <div class="file__link">Select a file</div>
                                    <input type="file" class="file__value" name="calc_image" accept="image/png, image/jpeg" style="display:none;" multiple>
                                </div>
                                <div class="file__caption">Logotype (jpeg, png)</div>
                            </div>
                        </label>
                        <label class="form__label bottom">
                            <div class="file flex error">
                                <div class="file__box flex">
                                    <div class="file__link">Select a file</div>
                                    <input type="file" class="file__value" name="calc_image" accept="image/png, image/jpeg" style="display:none;" multiple>
                                </div>
                                <div class="file__caption">Project illustrations</div>
                            </div>
                        </label>
                        <label class="form__label bottom">
                            <div class="filter__category">
                                <div class="form__caption">Project category</div>
                                <div class="filter__category-items flex">
                                    @foreach($categories as $category)
                                        <div class="filter__category-item filter__category-item_{{ $category->id }} filter__category-item_violet">
                                            <div class="filter__category-caption">{{ $category->name }}</div>
                                            <div class="filter__category-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.76229 5.29632C9.82342 5.23932 9.87273 5.17085 9.90739 5.0948C9.94206 5.01875 9.96141 4.93662 9.96433 4.85309C9.96726 4.76956 9.9537 4.68628 9.92444 4.60799C9.89518 4.5297 9.85078 4.45795 9.79379 4.39682C9.7368 4.33569 9.66832 4.28638 9.59227 4.25171C9.51622 4.21705 9.43409 4.1977 9.35056 4.19477C9.26704 4.19185 9.18375 4.2054 9.10547 4.23467C9.02718 4.26393 8.95542 4.30832 8.89429 4.36532L7.03229 6.10132L5.29629 4.23868C5.18013 4.11971 5.02202 4.05092 4.8558 4.04705C4.68957 4.04317 4.52843 4.10451 4.40685 4.21794C4.28527 4.33136 4.21292 4.48787 4.20527 4.65397C4.19762 4.82007 4.25529 4.98256 4.36593 5.10668L6.10193 6.96868L4.23929 8.70468C4.176 8.76109 4.12462 8.82959 4.08817 8.90614C4.05173 8.98269 4.03094 9.06575 4.02704 9.15044C4.02314 9.23514 4.0362 9.31976 4.06546 9.39933C4.09473 9.47891 4.13959 9.55183 4.19743 9.61382C4.25527 9.67582 4.32491 9.72563 4.40227 9.76033C4.47962 9.79503 4.56313 9.81393 4.64789 9.8159C4.73266 9.81788 4.81696 9.8029 4.89585 9.77184C4.97474 9.74078 5.04663 9.69427 5.10729 9.63504L6.96929 7.89968L8.70529 9.76168C8.76134 9.82614 8.8298 9.87865 8.90658 9.91609C8.98336 9.95353 9.06689 9.97512 9.1522 9.97959C9.2375 9.98406 9.32283 9.97131 9.40311 9.9421C9.48338 9.91288 9.55694 9.86781 9.61943 9.80956C9.68191 9.75131 9.73202 9.68108 9.76678 9.60305C9.80154 9.52502 9.82023 9.44079 9.82175 9.35538C9.82326 9.26997 9.80757 9.18513 9.7756 9.10592C9.74362 9.02671 9.69603 8.95474 9.63565 8.89431L7.90029 7.03232L9.76229 5.29632Z"
                                                        fill="#3340B4"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M0 7C0 3.13409 3.13409 0 7 0C10.8659 0 14 3.13409 14 7C14 10.8659 10.8659 14 7 14C3.13409 14 0 10.8659 0 7ZM7 12.7273C6.24788 12.7273 5.50313 12.5791 4.80827 12.2913C4.1134 12.0035 3.48203 11.5816 2.95021 11.0498C2.41838 10.518 1.99651 9.8866 1.70869 9.19173C1.42087 8.49687 1.27273 7.75212 1.27273 7C1.27273 6.24788 1.42087 5.50313 1.70869 4.80827C1.99651 4.1134 2.41838 3.48203 2.95021 2.95021C3.48203 2.41838 4.1134 1.99651 4.80827 1.70869C5.50313 1.42087 6.24788 1.27273 7 1.27273C8.51897 1.27273 9.97572 1.87613 11.0498 2.95021C12.1239 4.02428 12.7273 5.48103 12.7273 7C12.7273 8.51897 12.1239 9.97572 11.0498 11.0498C9.97572 12.1239 8.51897 12.7273 7 12.7273Z"
                                                          fill="#3340B4"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </label>
                        <label class="form__label bottom">
                            <div class="form__info flex">
                                <div class="form__info-value flex">
                                    <div class="form__radio form__radio_1">
                                        <input type="radio" name="value" value="active" data-change="1">
                                        <div class="form__radio-caption">Active</div>
                                    </div>
                                    <div class="form__info-icon center flex-center">
                                        <span></span>
                                    </div>
                                    <div class="form__radio form__radio_2">
                                        <input type="radio" name="value" value="upcoming" data-change="2">
                                        <div class="form__radio-caption">Upcoming</div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <label class="form__label bottom">
                            <div class="form__info flex">
                                <div class="form__date">
                                    <div class="form__date-icon svg-contain">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M3.33333 3.33333C2.22876 3.33333 1.33333 4.22876 1.33333 5.33333V12C1.33333 13.1046 2.22876 14 3.33333 14H11.3333C12.4379 14 13.3333 13.1046 13.3333 12V5.33333C13.3333 4.22876 12.4379 3.33333 11.3333 3.33333H3.33333ZM0 5.33333C0 3.49238 1.49238 2 3.33333 2H11.3333C13.1743 2 14.6667 3.49238 14.6667 5.33333V12C14.6667 13.8409 13.1743 15.3333 11.3333 15.3333H3.33333C1.49238 15.3333 0 13.8409 0 12V5.33333Z"
                                                  fill="#8EA5B2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M4.66667 0.666992C5.03486 0.666992 5.33333 0.965469 5.33333 1.33366V4.00033C5.33333 4.36852 5.03486 4.66699 4.66667 4.66699C4.29848 4.66699 4 4.36852 4 4.00033V1.33366C4 0.965469 4.29848 0.666992 4.66667 0.666992Z"
                                                  fill="#8EA5B2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M9.99992 0.666992C10.3681 0.666992 10.6666 0.965469 10.6666 1.33366V4.00033C10.6666 4.36852 10.3681 4.66699 9.99992 4.66699C9.63173 4.66699 9.33325 4.36852 9.33325 4.00033V1.33366C9.33325 0.965469 9.63173 0.666992 9.99992 0.666992Z"
                                                  fill="#8EA5B2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.66667C0 6.29848 0.298477 6 0.666667 6H14C14.3682 6 14.6667 6.29848 14.6667 6.66667C14.6667 7.03486 14.3682 7.33333 14 7.33333H0.666667C0.298477 7.33333 0 7.03486 0 6.66667Z"
                                                  fill="#8EA5B2" />
                                        </svg>
                                    </div>
                                    <input type="text" name="date-from" class="form__field field date-from" placeholder="Start date" data-calendar-id="1" readonly>
                                </div>
                                <div class="form__date">
                                    <div class="form__date-icon svg-contain">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M3.33333 3.33333C2.22876 3.33333 1.33333 4.22876 1.33333 5.33333V12C1.33333 13.1046 2.22876 14 3.33333 14H11.3333C12.4379 14 13.3333 13.1046 13.3333 12V5.33333C13.3333 4.22876 12.4379 3.33333 11.3333 3.33333H3.33333ZM0 5.33333C0 3.49238 1.49238 2 3.33333 2H11.3333C13.1743 2 14.6667 3.49238 14.6667 5.33333V12C14.6667 13.8409 13.1743 15.3333 11.3333 15.3333H3.33333C1.49238 15.3333 0 13.8409 0 12V5.33333Z"
                                                  fill="#8EA5B2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M4.66667 0.666992C5.03486 0.666992 5.33333 0.965469 5.33333 1.33366V4.00033C5.33333 4.36852 5.03486 4.66699 4.66667 4.66699C4.29848 4.66699 4 4.36852 4 4.00033V1.33366C4 0.965469 4.29848 0.666992 4.66667 0.666992Z"
                                                  fill="#8EA5B2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M9.99992 0.666992C10.3681 0.666992 10.6666 0.965469 10.6666 1.33366V4.00033C10.6666 4.36852 10.3681 4.66699 9.99992 4.66699C9.63173 4.66699 9.33325 4.36852 9.33325 4.00033V1.33366C9.33325 0.965469 9.63173 0.666992 9.99992 0.666992Z"
                                                  fill="#8EA5B2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.66667C0 6.29848 0.298477 6 0.666667 6H14C14.3682 6 14.6667 6.29848 14.6667 6.66667C14.6667 7.03486 14.3682 7.33333 14 7.33333H0.666667C0.298477 7.33333 0 7.03486 0 6.66667Z"
                                                  fill="#8EA5B2" />
                                        </svg>
                                    </div>
                                    <input type="text" name="date-to" class="form__field field date-to" placeholder="Finish date" data-calendar-id="2" readonly>
                                </div>
                            </div>
                        </label>
                        <label class="form__label bottom">
                            <textarea class="form__field field" placeholder="Project description"></textarea>
                        </label>
                        <div class="form__label form__label_older bottom">
                            <div class="form__flex flex">
                                <div class="form__flex-box">
                                    <div class="form__currency">
                                        <div class="form__currency-title">
                                            <div class="form__currency-caption">Currency</div>
                                            <div class="form__currency-title__box">
                                                <div class="form__currency-title__value">USD</div>
                                                <div class="form__currency-title__arrow">
                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.7261 6.52333C3.75668 6.56774 3.7976 6.60405 3.84533 6.62914C3.89306 6.65423 3.94618 6.66734 4.0001 6.66734C4.05402 6.66734 4.10714 6.65423 4.15487 6.62914C4.2026 6.60405 4.24352 6.56774 4.2741 6.52333L7.2741 2.18999C7.30883 2.14001 7.32919 2.08147 7.33298 2.02073C7.33677 1.95999 7.32384 1.89937 7.2956 1.84546C7.26735 1.79155 7.22488 1.74641 7.17278 1.71494C7.12068 1.68348 7.06096 1.6669 7.0001 1.66699H1.0001C0.939382 1.66724 0.87988 1.68404 0.827995 1.71558C0.776109 1.74712 0.733802 1.79221 0.705624 1.84599C0.677446 1.89978 0.664463 1.96022 0.668071 2.02084C0.671679 2.08145 0.691741 2.13993 0.726101 2.18999L3.7261 6.52333Z"
                                                            fill="#2F3E46" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__currency-options">
                                            <div class="form__currency-options__item">
                                                <div class="form__currency-caption">Currency</div>
                                                <div class="form__currency-options__value">USD</div>
                                            </div>
                                            <div class="form__currency-options__item">
                                                <div class="form__currency-caption">Currency</div>
                                                <div class="form__currency-options__value">ETH</div>
                                            </div>
                                            <div class="form__currency-options__item">
                                                <div class="form__currency-caption">Currency</div>
                                                <div class="form__currency-options__value">BNB</div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="USD">
                                    </div>
                                </div>
                                <div class="form__flex-small">
                                    <input type="text" name="text" class="form__field field" placeholder="Min price">
                                </div>
                                <div class="form__flex-small">
                                    <input type="text" name="text" class="form__field field" placeholder="Max price">
                                </div>
                                <div class="form__flex-box">
                                    <input type="text" name="text" class="form__field field" placeholder="Available NFTs for sale">
                                </div>
                            </div>
                        </div>
                        <label class="form__label bottom">
                            <input type="text" name="text" class="form__field field" placeholder="To the project site*">
                        </label>
                        <label class="form__label bottom">
                            <input type="text" name="text" class="form__field field" placeholder="Email*">
                        </label>
                        <label class="form__label bottom">
                            <input type="text" name="text" class="form__field field" placeholder="Twitter*">
                        </label>
                        <label class="form__label form__label_social form__label_older bottom">
                            <div class="select-social">
                                <div class="select-social__title flex">
                                    <div class="select-social__title-value">Add a social network</div>
                                    <div class="select-social__arrow svg-contain">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="5.14307" width="1.71429" height="12" fill="#5E7C8D" />
                                            <rect x="12" y="5.14258" width="1.71429" height="12" transform="rotate(90 12 5.14258)" fill="#5E7C8D" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="select-social__options">
                                    <div class="select-social__options-value flex" data-value="Telegram *" data-name="telegram">
                                        <div class="select-social__options-icon">
                                            <img src="img/select-icons/telegram.svg" alt="">
                                        </div>
                                        <div class="select-social__options-caption">Telegram</div>
                                    </div>
                                    <div class="select-social__options-value flex" data-value="Instagram *" data-name="instagram">
                                        <div class="select-social__options-icon">
                                            <img src="img/select-icons/instagram.svg" alt="">
                                        </div>
                                        <div class="select-social__options-caption">Instagram</div>
                                    </div>
                                    <div class="select-social__options-value flex" data-value="Medium *" data-name="medium">
                                        <div class="select-social__options-icon">
                                            <img src="img/select-icons/medium.svg" alt="">
                                        </div>
                                        <div class="select-social__options-caption">Medium</div>
                                    </div>
                                    <div class="select-social__options-value flex" data-value="Discord *" data-name="discord">
                                        <div class="select-social__options-icon">
                                            <img src="img/select-icons/discord.svg" alt="">
                                        </div>
                                        <div class="select-social__options-caption">Discord</div>
                                    </div>
                                    <div class="select-social__options-value flex" data-value="Facebook *" data-name="facebook">
                                        <div class="select-social__options-icon">
                                            <img src="img/select-icons/facebook.svg" alt="">
                                        </div>
                                        <div class="select-social__options-caption">Facebook</div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <label class="form__label bottom">
                            <button class="form__btn btn btn_blue">
                                <div class="btn__caption">site project</div>
                                <div class="btn__icon svg-contain">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M2.47144 7.45148C2.2052 7.48813 2 7.71973 2 7.99997C2 8.30569 2.24421 8.55352 2.54545 8.55352L12.1333 8.55352L8.66986 12.0542L8.61692 12.1162C8.45804 12.3326 8.47501 12.6401 8.66826 12.8371C8.88083 13.0537 9.22619 13.0544 9.43965 12.8387L13.8323 8.39931C13.8543 8.37789 13.8745 8.35463 13.8927 8.32976L13.8927 8.32969C14.052 8.11265 14.0343 7.80406 13.8396 7.60737L9.43962 3.16129L9.37832 3.10782C9.16445 2.9475 8.86146 2.96603 8.66823 3.16297C8.45567 3.37961 8.45642 3.7301 8.66989 3.9458L12.1343 7.44642L2.54545 7.44642L2.47144 7.45148Z"
                                              fill="white" />
                                    </svg>
                                </div>
                            </button>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
