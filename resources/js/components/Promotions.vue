<template>
    <div>
        <div class="promotion__row flex-center" v-if="promotions.length > 0">
            <a v-for="promotion in promotions" class="promotion__coll bottom bottom_visible" :class="[ {promotion__active: promotion.id === selectedPromotion.id}]" @click="selectPromotion(promotion)">
                <div class="promotion__coll-top">
                    <div class="promotion__icon img-contain">
                        <img src="img/promotion/star.svg" alt="">
                    </div>
                    <div class="promotion__name">{{ promotion.title }}</div>
                    <div class="promotion__price">{{ promotion.price }} <span v-if="promotion.price !== '-'">USD</span></div>
                </div>
                <div class="promotion__list">
                    <ul>
                        <li v-for="feature in promotion.features">{{ feature.feature }}</li>
                    </ul>
                </div>
                <div class="promotion__bottom">
                    <a href="#orderForm" class="promotion__btn btn">order now</a>
                </div>
            </a>
        </div>
        <div class="promotion__order" id="orderForm">
            <div class="promotion__order-title title bottom">Place Order</div>
            <form @submit.prevent="sendOrder" class="promotion__form form">
                <div class="promotion__form-body">
                    <label class="form__label bottom error">
                        <input type="text" name="text" class="form__field field  validate--js" v-model="selectedPromotion.title" placeholder="Project name">
                    </label>
                    <label class="form__label bottom success">
                        <input type="text" name="text" class="form__field field validate--js  validate-email--js" v-model="email" placeholder="Your e-mail">
                    </label>
                    <label class="form__label form__label_older bottom">
                        <div class="form__promotion">
                            <div class="form__promotion-title">
                                <div class="form__promotion-caption">{{ selectedPromotion.title }}</div>
                                <div class="form__promotion-arrow">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.7261 6.52333C3.75668 6.56774 3.7976 6.60405 3.84533 6.62914C3.89306 6.65423 3.94618 6.66734 4.0001 6.66734C4.05402 6.66734 4.10714 6.65423 4.15487 6.62914C4.2026 6.60405 4.24352 6.56774 4.2741 6.52333L7.2741 2.18999C7.30883 2.14001 7.32919 2.08147 7.33298 2.02073C7.33677 1.95999 7.32384 1.89937 7.2956 1.84546C7.26735 1.79155 7.22488 1.74641 7.17278 1.71494C7.12068 1.68348 7.06096 1.6669 7.0001 1.66699H1.0001C0.939382 1.66724 0.87988 1.68404 0.827995 1.71558C0.776109 1.74712 0.733802 1.79221 0.705624 1.84599C0.677446 1.89978 0.664463 1.96022 0.668071 2.02084C0.671679 2.08145 0.691741 2.13993 0.726101 2.18999L3.7261 6.52333Z"
                                            fill="#2F3E46" />
                                    </svg>
                                </div>
                            </div>
                            <div class="form__promotion-options">
                                <div class="form__promotion-options__item" v-for="promotion in promotions">
                                    <div class="form__promotion-options__caption">{{ promotion.title }}</div>
                                </div>
                            </div>
                            <input type="hidden" name="type" v-model="selectedPromotion.title">
                        </div>
                    </label>
                    <label class="form__label bottom ">
                        <textarea class="form__field field validate--js" v-model="comment" placeholder="Describe your order in as much detail as possible"></textarea>
                    </label>
                </div>
                <div class="promotion__form-bottom bottom">
                    <div class="form__captcha bottom">
                        <img src="img/contacts/captcha.svg" alt="">
                    </div>
                    <button class="form__btn btn btn_blue bottom" type="submit">
                        <div class="btn__caption">place order</div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedPromotion: {},
            email: '',
            comment: '',

            promotions: []
        }
    },

    mounted() {
        this.init()
    },

    methods: {
        init() {
            axios.get('api/promotions')
                .then(response => {
                    this.promotions = response.data.data;
                    this.selectedPromotion = this.promotions[0];
                })
        },

        selectPromotion(promotion) {
            this.selectedPromotion = promotion;
        },

        sendOrder() {
            axios.post('api/promotions/send-order', {promotion: this.selectedPromotion, email: this.email, comment: this.comment})
                .then(response => {
                    this.$swal('Success', 'Successfully ordered', 'success');
                    this.selectedPromotion = {};
                    this.email = '';
                    this.comment = ''
                })
        }
    }
}
</script>

<style>
.promotion__active {
    background-color: #0ead69 !important;
    box-shadow: 0 100px 80px rgba(14, 173, 105, 0.07), 0 41.7776px 33.4221px rgba(14, 173, 105, 0.0503198), 0 22.3363px 17.869px rgba(14, 173, 105, 0.0417275), 0 12.5216px 10.0172px rgba(14, 173, 105, 0.035), 0 6.6501px 5.32008px rgba(14, 173, 105, 0.0282725), 0 2.76726px 2.21381px rgba(14, 173, 105, 0.0196802) !important;
    transition: background-color 0.3s, box-shadow 0.3s !important;
}

.promotion__active .promotion__btn {
    background-color: #2f3e46 !important;
    color: #fff !important;
}

</style>
