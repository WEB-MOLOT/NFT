<template>
    <div class="catalog">
        <project-modal ref="modal"></project-modal>
        <div class="wrapper">
            <div class="filter_scroll--js">
                <div class="filter ">
                    <div class="filter__fixed bottom delay-6">
                        <div class="filter__wrap">
                            <div class="filter__top ">
                                <div class="filter__top-box flex">
                                    <div class="filter__top-first flex">
                                        <div class="filter__type flex">
                                            <label class="filter__checkbox active">
                                                <input type="checkbox" value="checkbox" v-model="filter.active" @change="init" check-all="active" name="caption-active" data-chenge="1" checked>
                                                <div class="filter__checkbox-icon">
                                                    <span></span>
                                                </div>
                                                <div class="filter__checkbox-caption">Active</div>
                                            </label>
                                            <label class="filter__checkbox active">
                                                <input type="checkbox" value="checkbox" v-model="filter.upcoming" @change="init" check-all="upcoming" name="caption-upcoming" data-chenge="2" checked>
                                                <div class="filter__checkbox-icon">
                                                    <span></span>
                                                </div>
                                                <div class="filter__checkbox-caption">Upcoming</div>
                                            </label>
                                        </div>
                                        <label class="filter__verified">
                                            <input type="checkbox" v-model="filter.verified" @change="init" value="checkbox">
                                            <div class="filter__verified-icon flex-center">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.50008 7.16667L3.16675 8.5L7.16675 12.5L13.8334 5.83333L12.5001 4.5L7.16675 9.83333L4.50008 7.16667Z" fill="white" />
                                                </svg>
                                            </div>
                                            <div class="filter__verified-img">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.4476 8.06068L14.2076 6.64068L14.3809 4.76068C14.4142 4.42735 14.1876 4.12068 13.8676 4.04735L12.0276 3.63402L11.0676 2.00735C10.8942 1.72068 10.5409 1.60068 10.2276 1.73402L8.5009 2.47402L6.77423 1.73402C6.46757 1.60068 6.10757 1.72068 5.9409 2.00735L4.97423 3.62735L3.1409 4.04068C2.81423 4.11402 2.58757 4.41402 2.6209 4.74735L2.79423 6.63402L1.54757 8.06068C1.32757 8.31402 1.32757 8.68735 1.54757 8.94068L2.79423 10.3607L2.6209 12.2473C2.58757 12.5807 2.81423 12.8873 3.13423 12.9607L4.97423 13.3807L5.93423 15.0007C6.10757 15.2873 6.46757 15.4073 6.77423 15.274L8.5009 14.5207L10.2276 15.2607C10.5342 15.394 10.8942 15.274 11.0609 14.9873L12.0209 13.3673L13.8609 12.9473C14.1876 12.874 14.4076 12.5673 14.3742 12.234L14.2009 10.354L15.4409 8.93402C15.5496 8.81492 15.6104 8.65985 15.6116 8.49863C15.6128 8.33741 15.5544 8.18142 15.4476 8.06068ZM7.3209 10.3873L5.90757 8.97402C5.84585 8.91229 5.79689 8.83902 5.76348 8.75838C5.73008 8.67774 5.71289 8.5913 5.71289 8.50402C5.71289 8.41673 5.73008 8.3303 5.76348 8.24965C5.79689 8.16901 5.84585 8.09574 5.90757 8.03402C5.96929 7.97229 6.04256 7.92333 6.12321 7.88993C6.20385 7.85653 6.29028 7.83934 6.37757 7.83934C6.46485 7.83934 6.55129 7.85653 6.63193 7.88993C6.71257 7.92333 6.78585 7.97229 6.84757 8.03402L7.78757 8.97402L10.1476 6.61402C10.2093 6.55229 10.2826 6.50333 10.3632 6.46993C10.4438 6.43653 10.5303 6.41933 10.6176 6.41933C10.7049 6.41933 10.7913 6.43653 10.8719 6.46993C10.9526 6.50333 11.0258 6.55229 11.0876 6.61402C11.1493 6.67574 11.1982 6.74901 11.2317 6.82965C11.2651 6.9103 11.2822 6.99673 11.2822 7.08402C11.2822 7.1713 11.2651 7.25774 11.2317 7.33838C11.1982 7.41902 11.1493 7.49229 11.0876 7.55402L8.2609 10.3807C8.00757 10.6473 7.5809 10.6473 7.3209 10.3873Z"
                                                        fill="#F3F6F7" />
                                                </svg>
                                            </div>
                                            <div class="filter__verified-caption">Verified</div>
                                        </label>
                                    </div>
                                    <div class="filter__prices flex">
                                        <div class="filter__prices-title">Price</div>
                                        <div class="filter__prices-caption">Price (Range $1—$999)</div>
                                        <div class="prices">
                                            <div class="prices__slider" @mouseleave="init" @click="init" id="price"></div>
                                            <input type="hidden" v-model="filter.max_price" name="maxPrice" ref="maxPrice">
                                            <input type="hidden" v-model="filter.min_price" name="minPrice" ref="minPrice">
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__btn flex">
                                    <div class="filter__btn-icon">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M6.58325 5.16699C6.58325 3.64821 7.81447 2.41699 9.33325 2.41699C10.592 2.41699 11.6533 3.26274 11.9797 4.41699H13.9999C14.4141 4.41699 14.7499 4.75278 14.7499 5.16699C14.7499 5.58121 14.4141 5.91699 13.9999 5.91699H11.9797C11.6533 7.07124 10.592 7.91699 9.33325 7.91699C7.81447 7.91699 6.58325 6.68577 6.58325 5.16699ZM9.33325 3.91699C8.6429 3.91699 8.08325 4.47664 8.08325 5.16699C8.08325 5.85735 8.6429 6.41699 9.33325 6.41699C10.0236 6.41699 10.5833 5.85735 10.5833 5.16699C10.5833 4.47664 10.0236 3.91699 9.33325 3.91699ZM1.33325 4.41699C0.919038 4.41699 0.583252 4.75278 0.583252 5.16699C0.583252 5.58121 0.919038 5.91699 1.33325 5.91699H5.33325C5.74747 5.91699 6.08325 5.58121 6.08325 5.16699C6.08325 4.75278 5.74747 4.41699 5.33325 4.41699H1.33325ZM1.33325 11.0837C0.919038 11.0837 0.583252 11.4194 0.583252 11.8337C0.583252 12.2479 0.919038 12.5837 1.33325 12.5837H3.35343C3.6799 13.7379 4.74114 14.5837 5.99992 14.5837C7.5187 14.5837 8.74992 13.3524 8.74992 11.8337C8.74992 10.3149 7.5187 9.08366 5.99992 9.08366C4.74114 9.08366 3.6799 9.92941 3.35343 11.0837H1.33325ZM4.74992 11.8338C4.75 12.5241 5.30961 13.0837 5.99992 13.0837C6.69027 13.0837 7.24992 12.524 7.24992 11.8337C7.24992 11.1433 6.69027 10.5837 5.99992 10.5837C5.30956 10.5837 4.74992 11.1433 4.74992 11.8337C4.74992 11.8337 4.74992 11.8338 4.74992 11.8338ZM9.99992 11.0837C9.58571 11.0837 9.24992 11.4194 9.24992 11.8337C9.24992 12.2479 9.58571 12.5837 9.99992 12.5837H13.9999C14.4141 12.5837 14.7499 12.2479 14.7499 11.8337C14.7499 11.4194 14.4141 11.0837 13.9999 11.0837H9.99992Z"
                                                  fill="#BAC1FE" />
                                        </svg>
                                    </div>
                                    <div class="filter__btn-caption">Filter</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__bottom">
                        <div class="filter__bottom-wrap flex bottom delay-6">
                            <div class="filter__bottom-title">
                                <div class="filter__title">
                                    <div class="filter__title-icon">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M6.58325 5.16699C6.58325 3.64821 7.81447 2.41699 9.33325 2.41699C10.592 2.41699 11.6533 3.26274 11.9797 4.41699H13.9999C14.4141 4.41699 14.7499 4.75278 14.7499 5.16699C14.7499 5.58121 14.4141 5.91699 13.9999 5.91699H11.9797C11.6533 7.07124 10.592 7.91699 9.33325 7.91699C7.81447 7.91699 6.58325 6.68577 6.58325 5.16699ZM9.33325 3.91699C8.6429 3.91699 8.08325 4.47664 8.08325 5.16699C8.08325 5.85735 8.6429 6.41699 9.33325 6.41699C10.0236 6.41699 10.5833 5.85735 10.5833 5.16699C10.5833 4.47664 10.0236 3.91699 9.33325 3.91699ZM1.33325 4.41699C0.919038 4.41699 0.583252 4.75278 0.583252 5.16699C0.583252 5.58121 0.919038 5.91699 1.33325 5.91699H5.33325C5.74747 5.91699 6.08325 5.58121 6.08325 5.16699C6.08325 4.75278 5.74747 4.41699 5.33325 4.41699H1.33325ZM1.33325 11.0837C0.919038 11.0837 0.583252 11.4194 0.583252 11.8337C0.583252 12.2479 0.919038 12.5837 1.33325 12.5837H3.35343C3.6799 13.7379 4.74114 14.5837 5.99992 14.5837C7.5187 14.5837 8.74992 13.3524 8.74992 11.8337C8.74992 10.3149 7.5187 9.08366 5.99992 9.08366C4.74114 9.08366 3.6799 9.92941 3.35343 11.0837H1.33325ZM4.74992 11.8338C4.75 12.5241 5.30961 13.0837 5.99992 13.0837C6.69027 13.0837 7.24992 12.524 7.24992 11.8337C7.24992 11.1433 6.69027 10.5837 5.99992 10.5837C5.30956 10.5837 4.74992 11.1433 4.74992 11.8337C4.74992 11.8337 4.74992 11.8338 4.74992 11.8338ZM9.99992 11.0837C9.58571 11.0837 9.24992 11.4194 9.24992 11.8337C9.24992 12.2479 9.58571 12.5837 9.99992 12.5837H13.9999C14.4141 12.5837 14.7499 12.2479 14.7499 11.8337C14.7499 11.4194 14.4141 11.0837 13.9999 11.0837H9.99992Z"
                                                  fill="#5E7C8D" />
                                        </svg>
                                    </div>
                                    <div class="filter__title-caption">Filter</div>
                                </div>
                                <div class="filter__closed svg-contain" style="width: 20px; height: 20px;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.9457 7.56616C14.033 7.48475 14.1035 7.38692 14.153 7.27828C14.2025 7.16964 14.2302 7.05231 14.2343 6.93298C14.2385 6.81366 14.2191 6.69468 14.1773 6.58284C14.1355 6.471 14.0721 6.36849 13.9907 6.28117C13.9093 6.19384 13.8115 6.1234 13.7028 6.07388C13.5942 6.02435 13.4768 5.99671 13.3575 5.99253C13.2382 5.98835 13.1192 6.00772 13.0074 6.04952C12.8955 6.09132 12.793 6.15475 12.7057 6.23617L10.0457 8.71616L7.5657 6.05526C7.39976 5.8853 7.17389 5.78704 6.93642 5.7815C6.69896 5.77596 6.46875 5.86359 6.29507 6.02562C6.12139 6.18766 6.01803 6.41124 6.0071 6.64853C5.99618 6.88581 6.07855 7.11794 6.23661 7.29526L8.71661 9.95526L6.0557 12.4353C5.96529 12.5158 5.89189 12.6137 5.83982 12.7231C5.78775 12.8324 5.75806 12.9511 5.75249 13.0721C5.74692 13.1931 5.76558 13.3139 5.80738 13.4276C5.84918 13.5413 5.91328 13.6455 5.9959 13.734C6.07853 13.8226 6.17801 13.8938 6.28852 13.9433C6.39903 13.9929 6.51834 14.0199 6.63942 14.0227C6.76051 14.0255 6.88094 14.0041 6.99364 13.9598C7.10634 13.9154 7.20904 13.849 7.2957 13.7643L9.9557 11.2853L12.4357 13.9453C12.5158 14.0373 12.6136 14.1124 12.7233 14.1658C12.8329 14.2193 12.9523 14.2502 13.0741 14.2566C13.196 14.2629 13.3179 14.2447 13.4326 14.203C13.5473 14.1613 13.6524 14.0969 13.7416 14.0137C13.8309 13.9304 13.9025 13.8301 13.9521 13.7186C14.0018 13.6072 14.0285 13.4868 14.0306 13.3648C14.0328 13.2428 14.0104 13.1216 13.9647 13.0085C13.919 12.8953 13.851 12.7925 13.7648 12.7062L11.2857 10.0462L13.9457 7.56616Z"
                                            fill="#8EA5B2" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M0 10C0 4.47727 4.47727 0 10 0C15.5227 0 20 4.47727 20 10C20 15.5227 15.5227 20 10 20C4.47727 20 0 15.5227 0 10ZM10 18.1818C8.92555 18.1818 7.86162 17.9702 6.86895 17.559C5.87629 17.1478 4.97433 16.5452 4.21458 15.7854C3.45483 15.0257 2.85216 14.1237 2.44099 13.131C2.02981 12.1384 1.81818 11.0745 1.81818 10C1.81818 8.92555 2.02981 7.86162 2.44099 6.86895C2.85216 5.87629 3.45483 4.97433 4.21458 4.21458C4.97433 3.45483 5.87629 2.85216 6.86895 2.44099C7.86162 2.02981 8.92555 1.81818 10 1.81818C12.17 1.81818 14.251 2.68019 15.7854 4.21458C17.3198 5.74897 18.1818 7.83005 18.1818 10C18.1818 12.17 17.3198 14.251 15.7854 15.7854C14.251 17.3198 12.17 18.1818 10 18.1818Z"
                                              fill="#8EA5B2" />
                                    </svg>
                                </div>
                            </div>
                            <div class="filter__category">
                                <div class="filter__category-title">Category</div>
                                <div class="filter__category-items flex">
                                    <div v-for="category in categories" :class="[`filter__category-item filter__category-item_${category.color}`, {active:  filter.categories.indexOf(category.id) !== -1}]" @click="chooseCategory(category)">
                                        <div class="filter__category-caption">{{ category.name }}</div>
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
                                </div>
                            </div>
                            <div class="filter__sort flex">
                                <div class="filter__sort-caption flex">
                                    <img src="/img/filter/sort-icon.svg" alt="">
                                    <span>Sort by</span>
                                </div>
                                <div class="filter__bottom-box flex">
                                    <div class="select select_active select-filter--js">
                                        <div class="select-title">
                                            <div class="select-title__value">By time</div>
                                        </div>
                                        <div class="select-options">
                                            <div class="select-options__value" @click="setSort('By time')">
                                                <span>By time</span>
                                            </div>
                                            <div class="select-options__value" @click="setSort('Will begin')">
                                                <span>Will begin</span>
                                            </div>
                                            <div class="select-options__value" @click="setSort('Started')">
                                                <span>Started</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="filter__items flex">
                                        <div class="filter__item filter__item_price filter-sort--js" @click="setSort('Price')">
                                            <span>Price</span>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5134 8.90699C12.4574 8.83949 12.3887 8.78369 12.3111 8.74278C12.2335 8.70188 12.1487 8.67669 12.0613 8.66863C11.974 8.66058 11.886 8.66984 11.8022 8.69587C11.7185 8.7219 11.6407 8.76419 11.5734 8.82033L8.66669 11.2403V3.33366C8.66669 3.15685 8.59645 2.98728 8.47142 2.86225C8.3464 2.73723 8.17683 2.66699 8.00002 2.66699C7.82321 2.66699 7.65364 2.73723 7.52861 2.86225C7.40359 2.98728 7.33335 3.15685 7.33335 3.33366V11.2403L4.42669 8.82033C4.35927 8.76429 4.28149 8.72209 4.19776 8.69612C4.11404 8.67015 4.02602 8.66093 3.93874 8.66898C3.85145 8.67703 3.7666 8.70219 3.68904 8.74303C3.61148 8.78386 3.54272 8.83958 3.48669 8.90699C3.43066 8.9744 3.38845 9.05219 3.36248 9.13591C3.33651 9.21964 3.32729 9.30765 3.33534 9.39494C3.34339 9.48223 3.36855 9.56708 3.40939 9.64464C3.45022 9.7222 3.50594 9.79096 3.57335 9.84699L7.57335 13.1803L7.67335 13.2403L7.76002 13.287C7.91447 13.3466 8.08557 13.3466 8.24002 13.287L8.32669 13.2403L8.42669 13.1803L12.4267 9.84699C12.4942 9.79103 12.55 9.72229 12.5909 9.64473C12.6318 9.56716 12.657 9.48229 12.665 9.39497C12.6731 9.30766 12.6638 9.21961 12.6378 9.13587C12.6118 9.05214 12.5695 8.97436 12.5134 8.90699Z"
                                                    fill="#5A7687" />
                                            </svg>
                                        </div>
                                        <div class="filter__item filter__item_rating filter-sort--js" @click="setSort('Rating')">
                                            <span>Rating</span>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5134 8.90699C12.4574 8.83949 12.3887 8.78369 12.3111 8.74278C12.2335 8.70188 12.1487 8.67669 12.0613 8.66863C11.974 8.66058 11.886 8.66984 11.8022 8.69587C11.7185 8.7219 11.6407 8.76419 11.5734 8.82033L8.66669 11.2403V3.33366C8.66669 3.15685 8.59645 2.98728 8.47142 2.86225C8.3464 2.73723 8.17683 2.66699 8.00002 2.66699C7.82321 2.66699 7.65364 2.73723 7.52861 2.86225C7.40359 2.98728 7.33335 3.15685 7.33335 3.33366V11.2403L4.42669 8.82033C4.35927 8.76429 4.28149 8.72209 4.19776 8.69612C4.11404 8.67015 4.02602 8.66093 3.93874 8.66898C3.85145 8.67703 3.7666 8.70219 3.68904 8.74303C3.61148 8.78386 3.54272 8.83958 3.48669 8.90699C3.43066 8.9744 3.38845 9.05219 3.36248 9.13591C3.33651 9.21964 3.32729 9.30765 3.33534 9.39494C3.34339 9.48223 3.36855 9.56708 3.40939 9.64464C3.45022 9.7222 3.50594 9.79096 3.57335 9.84699L7.57335 13.1803L7.67335 13.2403L7.76002 13.287C7.91447 13.3466 8.08557 13.3466 8.24002 13.287L8.32669 13.2403L8.42669 13.1803L12.4267 9.84699C12.4942 9.79103 12.55 9.72229 12.5909 9.64473C12.6318 9.56716 12.657 9.48229 12.665 9.39497C12.6731 9.30766 12.6638 9.21961 12.6378 9.13587C12.6118 9.05214 12.5695 8.97436 12.5134 8.90699Z"
                                                    fill="#5A7687" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input type="hidden" class="sort_order--js"
                                           ref="sortOrder"
                                           name="sort_order" value="By time">
                                    <input type="hidden" class="sort_by--js"
                                           ref="sortBy"
                                           name="sort_by" value="ASC">
                                </div>
                            </div>
                            <a href="#" class="filter__apply">
                                <div class="filter__apply-caption">apply</div>
                                <div class="filter__apply-icon svg-contain">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.875 6.75L2.5 8.125L6.625 12.25L13.5 5.375L12.125 4L6.625 9.5L3.875 6.75Z" fill="white" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__body">
                <div class="catalog__row">
                    <div class="catalog__coll">
                        <div class="catalog__coll-top flex bottom bottom_visible" v-if="(projects && projects.length > 0) || (activeProjects && activeProjects.length > 0) || (upcomingProjects && upcomingProjects.length > 0)">
                            <div :class="['catalog__coll-caption caption-active', {visible: filter.active}]">Active</div>
                            <div :class="['catalog__coll-caption caption-upcoming', {visible: filter.upcoming}]">Upcoming</div>
                        </div>
                        <div class="catalog__items" v-if="projects && projects.length > 0">
                            <project-card v-if="projects && projects.length > 0" v-for="project in projects" :key="project.id" :project="project"></project-card>
                        </div>

                        <div class="t-flex" v-else-if="activeProjects.length > 0 || upcomingProjects.length > 0">
                            <div class="t-flex-1">
                                <project-card v-for="project in activeProjects" :key="project.id" :full-width="true" :project="project"></project-card>
                            </div>
                            <div class="t-flex-1">
                                <project-card v-for="project in upcomingProjects" :key="project.id" :full-width="true" :project="project"></project-card>
                            </div>
                        </div>

                        <div v-else>Nothing was found. Change the filter conditions.</div>
                    </div>
                </div>


                <div class="catalog__bottom bottom" v-show="showMore">
                    <a class="catalog__btn flex-center"  @click="increaseLimit">
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
</template>


<script>

import ProjectModal from './modals/ProjectModal';
import ProjectCard from "./ProjectCard";
export default {
    components: {ProjectModal, ProjectCard},

    props: ['active', 'upcoming', 'category'],

    data() {
        return {
            filter: {
                active: this.active,
                upcoming: this.upcoming,
                verified: false,
                min_price: 0,
                max_price: 999,
                categories: [],
                sort_order: "By Time",
                sort_by: 'asc',
                limit: 8
            },

            showMore: true,

            user: null,

            categories: [],
            projects: [],
            activeProjects: [],
            upcomingProjects: []
        }
    },

    mounted(){
        if (this.category) this.filter.categories.push(this.category);
        this.init();
        this.getCategories();
    },

    methods: {
        init() {
            this.filter.max_price = this.$refs.maxPrice.value
            this.filter.min_price = this.$refs.minPrice.value

            let that = this;

            setTimeout(function () {
                that.filter.sort_order = that.$refs.sortOrder.value;
                that.filter.sort_by = that.$refs.sortBy.value;
            }, 3000)


            axios.get('/api/projects', { params: this.filter })
                .then(response => {

                    this.projects = this.activeProjects = this.upcomingProjects = [];
                    this.showMore = response.data.showMore;

                    if (this.filter.active && this.filter.upcoming) {
                        this.activeProjects = response.data.active;
                        this.upcomingProjects = response.data.upcoming;

                        console.log(this.activeProjects)
                    }
                    this.projects = response.data.projects;
                })
        },

        getCategories() {
            axios.get('/api/categories')
                .then(response => {
                    this.categories = response.data;
                })
        },

        chooseCategory(category) {
            if (this.filter.categories.indexOf(category.id) === -1) {
                this.filter.categories.push(category.id);
            } else {
                this.filter.categories.splice(this.filter.categories.indexOf(category.id), 1);
            }

            this.init();
        },

        setSort(sort) {
            if (this.filter.sort_order === sort) {
                if (this.filter.sort_by === 'asc') {
                    this.filter.sort_order = 'undefined';
                    this.filter.sort_by = 'undefined';
                } else {
                    this.filter.sort_by = 'asc';
                }
            } else {
                this.filter.sort_order = sort;
                this.filter.sort_by = 'desc';
            }

            this.init();
        },

        followProject(project) {
            if (window.user) {
                axios.post('api/projects/follow/' + project.id, { user_id: window.user.id})
                    .then(response => {
                        this.$swal('Success', 'Subscribed', 'success')
                        this.init();
                    })
            }
            else {
                alert('no auth')
            }
        },

        unfollowProject(project) {
            axios.post('api/projects/unfollow/' + project.id, {user_id: window.user.id})
                .then(response => {
                    this.$swal('Success', 'Unsubscribed', 'success')
                    this.init();
                })
        },

        showProjectModal(project) {
            this.$refs.modal.project = project;
            this.$refs.modal.init();
        },

        isUserSubscribed(project) {
            if (!window.user) {
                return false
            }

            if (project.subscribers.length < 1) {
                return false;
            }

            for (let i in project.subscribers) {
                if (window.user.id === project.subscribers[i].id) {
                    return true;
                }
            }

            return false;
        },

        increaseLimit() {
            this.filter.limit += 20;
            this.init();
        }
    }
}
</script>
