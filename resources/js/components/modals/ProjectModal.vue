<template>
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
                    <div class="project__title">{{ project.name }}</div>
                    <div class="project__left-top flex">
                        <div class="active-item" v-if="project.status === 2">Active</div>
                        <div class="active-item" v-if="project.status === 1">Upcoming</div>
                        <div class="star star_good flex" v-if="project.rating">
                            <img src="/img/catalog/star.svg" alt="">
                            <span>{{ project.rating }}</span>
                        </div>
                        <div v-for="category in project.categories" :class="`category category_${category.color}`">
                            {{ category.name }}
                        </div>
                    </div>
                    <div class="project__profile flex">
                        <div class="project__avatar img-cover">
                            <img :src="project.logo" alt="">
                        </div>
                        <div class="project__profile-box">
                            <div class="project__profile-caption">Start date</div>
                            <div class="project__profile-date">{{ project.start_date }}</div>
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
                        <a :href="project.website" class="project__btn btn btn_blue">
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
                                <a :href="`mailto:${project.email}`" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/mail.svg" alt="">
                                        <img src="/img/project/social/mail-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">Email</div>
                                </a>
                                <a :href="project.website" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img src="/img/project/social/site.svg" alt="">
                                        <img src="/img/project/social/site-hover.svg" alt="">
                                    </div>
                                    <div class="social-item__name">site.ru</div>
                                </a>
                                <a v-for="social in project.socials" :href="social.data" class="social-item__link flex">
                                    <div class="social-item__icon img-contain">
                                        <img :src="`/img/project/social/${social.name}.svg`" alt="">
                                        <img :src="`/img/project/social/${social.name}-hover.svg`" alt="">
                                    </div>
                                    <div class="social-item__name">{{ social.name.charAt(0).toUpperCase() + social.name.slice(1) }}</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project__right">
                    <div class="project__wrap">
                        <div class="arrow arrow_prew" @click="$refs.carousel.prev()">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.875 10.0002C16.875 9.57833 16.533 9.23633 16.1111 9.23633H3.88889C3.467 9.23633 3.125 9.57833 3.125 10.0002C3.125 10.4221 3.467 10.7641 3.88889 10.7641H16.1111C16.533 10.7641 16.875 10.4221 16.875 10.0002Z" fill="#3340B4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.77626 4.11241C9.47794 3.81409 8.99428 3.81409 8.69596 4.11241L3.34874 9.45963C3.05042 9.75795 3.05042 10.2416 3.34874 10.5399L8.69596 15.8872C8.99428 16.1855 9.47794 16.1855 9.77626 15.8872C10.0746 15.5888 10.0746 15.1052 9.77626 14.8069L4.96919 9.99978L9.77626 5.19271C10.0746 4.89439 10.0746 4.41073 9.77626 4.11241Z" fill="#3340B4"/>
                            </svg>
                        </div>
                        <div class="arrow arrow_next" @click="$refs.carousel.next()">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12524 9.99881C3.12524 10.4207 3.46725 10.7627 3.88913 10.7627L16.1114 10.7627C16.5332 10.7627 16.8752 10.4207 16.8752 9.99881C16.8752 9.57693 16.5332 9.23492 16.1114 9.23492L3.88913 9.23492C3.46725 9.23492 3.12524 9.57692 3.12524 9.99881Z" fill="#3340B4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.224 15.8866C10.5223 16.1849 11.006 16.1849 11.3043 15.8866L16.6515 10.5394C16.9498 10.2411 16.9498 9.75741 16.6515 9.45909L11.3043 4.11187C11.006 3.81355 10.5223 3.81355 10.224 4.11187C9.92567 4.41018 9.92567 4.89385 10.224 5.19217L15.0311 9.99924L10.224 14.8063C9.92566 15.1046 9.92566 15.5883 10.224 15.8866Z" fill="#3340B4"/>
                            </svg>
                        </div>
<!--                        <div class="project__slick">-->
                            <VueSlickCarousel
                                :arrows="false"
                                :slidesToShow="3"
                                :slidesToScroll="1"
                                :dots="false"
                                ref="carousel" v-if="project.images">
                                <div class="project__slide swiper-slide" v-for="image in project.images">
                                    <a :href="image.original_url" class="project__slide-box img-cover" data-fancybox="project">
                                        <img :src="image.original_url" alt="">
                                    </a>
                                </div>
                            </VueSlickCarousel>
                    </div>
                    <div class="project__items">
                        <div class="project__item">
                            <div class="project__item-caption">Min price</div>
                            <div class="project__item-desc">${{ project.min_price }}</div>
                        </div>
                        <div class="project__item">
                            <div class="project__item-caption">Max price</div>
                            <div class="project__item-desc">${{ project.max_price }}</div>
                        </div>
                        <div class="project__item">
                            <div class="project__item-caption">Available for sale</div>
                            <div class="project__item-desc">{{ project.available_count }} tokens</div>
                        </div>
                    </div>
                    <div class="project__row flex">
                        <div class="project__coll">
                            <div class="project__coll-item flex">
                                <div class="project__coll-caption">Website:</div>
                                <a :href="project.website" class="project__coll-link">{{ project.website }}</a>
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
                        <p>{{ project.description }}</p>
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
</template>


<script>

import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
// optional style for arrows & dots
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

export default {
    data() {
        return {
            project: {}
        }
    },

    components: {VueSlickCarousel},


    mounted() {

    },

    methods: {
        init() {
            $.fancybox.open({
                loop: false,
                src: '#project-modal',
                baseClass: 'dark-fancybox',
                touch: false,
            });

            if (this.project.images) {
                $(".project__slick").slick('setPosition');

                $('.fancybox-slide').on('scroll',  function (){
                    setTimeout(function(){
                        if ($('.project-modal').length > 0) {
                            var scroll = $('.fancybox-slide').scrollTop();

                            if(scroll  > 50  ) {
                                $('.project-modal .modal__closed').addClass('fixed')
                            } else {
                                $('.project-modal .modal__closed').removeClass('fixed')
                            }
                        }
                    }, 100);

                });
            }
        }
    }
}
</script>
