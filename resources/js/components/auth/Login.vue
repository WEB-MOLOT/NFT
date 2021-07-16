<template>
    <div id="signin-modal" class="signin-modal modal modal_item" style="display: none;">
        <div class="modal__top">
            <div class="modal__closed flex-center svg-contain" data-fancybox-close>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.7348 9.0794C16.8396 8.98169 16.9241 8.86431 16.9835 8.73394C17.043 8.60357 17.0761 8.46277 17.0811 8.31958C17.0862 8.17639 17.0629 8.03362 17.0127 7.89941C16.9626 7.76521 16.8865 7.64219 16.7888 7.5374C16.6911 7.4326 16.5737 7.34808 16.4433 7.28865C16.3129 7.22922 16.1721 7.19605 16.029 7.19104C15.8858 7.18603 15.743 7.20926 15.6088 7.25943C15.4746 7.30959 15.3516 7.3857 15.2468 7.4834L12.0548 10.4594L9.07877 7.26631C8.87965 7.06236 8.6086 6.94444 8.32364 6.9378C8.03868 6.93115 7.76244 7.0363 7.55402 7.23075C7.3456 7.4252 7.22156 7.69349 7.20845 7.97823C7.19534 8.26297 7.2942 8.54153 7.48387 8.75431L10.4599 11.9463L7.26677 14.9223C7.15828 15.019 7.0702 15.1364 7.00772 15.2677C6.94523 15.3989 6.9096 15.5413 6.90292 15.6865C6.89623 15.8317 6.91863 15.9767 6.96879 16.1131C7.01895 16.2496 7.09586 16.3746 7.19501 16.4808C7.29416 16.5871 7.41355 16.6725 7.54616 16.732C7.67877 16.7915 7.82194 16.8239 7.96724 16.8273C8.11254 16.8307 8.25706 16.805 8.3923 16.7517C8.52754 16.6985 8.65078 16.6188 8.75477 16.5172L11.9468 13.5423L14.9228 16.7343C15.0189 16.8448 15.1362 16.9348 15.2678 16.999C15.3995 17.0632 15.5427 17.1002 15.6889 17.1079C15.8351 17.1155 15.9814 17.0937 16.119 17.0436C16.2566 16.9935 16.3828 16.9162 16.4899 16.8164C16.597 16.7165 16.6829 16.5961 16.7425 16.4624C16.8021 16.3286 16.8341 16.1842 16.8367 16.0378C16.8393 15.8914 16.8124 15.7459 16.7576 15.6102C16.7028 15.4744 16.6212 15.351 16.5177 15.2474L13.5428 12.0554L16.7348 9.0794Z" fill="#8EA5B2"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37273 5.37273 0 12 0C18.6273 0 24 5.37273 24 12C24 18.6273 18.6273 24 12 24C5.37273 24 0 18.6273 0 12ZM12 21.8182C10.7107 21.8182 9.43394 21.5642 8.24274 21.0708C7.05155 20.5774 5.9692 19.8542 5.0575 18.9425C4.14579 18.0308 3.42259 16.9485 2.92918 15.7573C2.43577 14.5661 2.18182 13.2893 2.18182 12C2.18182 10.7107 2.43577 9.43394 2.92918 8.24274C3.42259 7.05155 4.14579 5.9692 5.0575 5.0575C5.9692 4.14579 7.05155 3.42259 8.24274 2.92918C9.43394 2.43577 10.7107 2.18182 12 2.18182C14.6039 2.18182 17.1012 3.21623 18.9425 5.0575C20.7838 6.89876 21.8182 9.39606 21.8182 12C21.8182 14.6039 20.7838 17.1012 18.9425 18.9425C17.1012 20.7838 14.6039 21.8182 12 21.8182Z" fill="#8EA5B2"/>
                </svg>
            </div>
        </div>
        <form @submit.prevent="login" class="modal@__body">
            <div class="modal__links flex">
                <a href="javascript:void(0)" class="modal__link active">Sign In</a>
                <a href="#" class="modal__link registration--js">Registration</a>
            </div>
            <div class="modal__social">
                <a href="/auth/google" class="modal__social-link google flex">
                    <div class="modal__social-icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="18" cy="18" r="18" fill="#C5331E"/>
                            <path d="M18.3074 16.5979V20.1604H23.1524C22.4399 22.0841 20.5874 23.3666 18.4499 23.3666C15.6712 23.3666 13.4624 21.1579 13.4624 18.3791C13.4624 15.6004 15.6712 13.3916 18.4499 13.3916C19.5187 13.3916 20.5162 13.7479 21.3712 14.3179L21.6562 14.5316L23.7937 11.7529L23.5087 11.5391C22.0124 10.4704 20.3024 9.90039 18.4499 9.90039C13.7474 9.90039 9.8999 13.7479 9.8999 18.4504C9.8999 23.1529 13.7474 27.0004 18.4499 27.0004C23.1524 27.0004 26.9999 23.1529 26.9999 18.4504V16.6691H18.3074V16.5979Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="modal__social-caption">Sign In with Google</div>
                </a>
                <a href="/auth/telegram" class="modal__social-link telegram flex">
                    <div class="modal__social-icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="18" cy="18" r="18" fill="#2F89CE"/>
                            <path d="M8.41573 18.3375L12.554 19.8805L14.1672 25.0709C14.2374 25.4216 14.6582 25.4918 14.9388 25.2813L17.2534 23.3876C17.4638 23.1771 17.8145 23.1771 18.0951 23.3876L22.2334 26.4036C22.5139 26.614 22.9348 26.4737 23.0049 26.123L26.0911 11.3936C26.1612 11.0429 25.8105 10.6922 25.4598 10.8325L8.41573 17.4256C7.99489 17.5659 7.99489 18.1972 8.41573 18.3375ZM13.9568 19.109L22.0931 14.129C22.2333 14.0589 22.3736 14.2693 22.2334 14.3395L15.57 20.5819C15.3596 20.7924 15.1492 21.0729 15.1492 21.4236L14.9388 23.107C14.9388 23.3174 14.5881 23.3875 14.5179 23.107L13.6762 20.0208C13.4658 19.6701 13.6061 19.2493 13.9568 19.109Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="modal__social-caption">Sign In with Telegram</div>
                </a>
                <a href="/auth/twitter" class="modal__social-link twitter flex">
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
                <div class="alert alert-danger" v-if="errors.length > 0">
                    <ul>
                        <li v-for="error in errors">{{ error[0] }}</li>
                    </ul>
                </div>
                <label class="modal__label">
                    <input type="text" name="text" v-model="email" class="modal__field field" placeholder="Enter email">
                </label>
                <label class="modal__label password">
                    <input type="password" name="text" v-model="password" class="modal__field field" placeholder="Password">
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
                        <input type="checkbox" v-model="remember" value="checkbox">
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
    </div>
</template>

<script>
export default {
    data() {
        return {
            valid: false,
            e1: false,
            password: '',
            email: '',
            remember: false,
            errors: []
        }
    },

    methods: {
        init() {
            $.fancybox.open({
                closeExisting: true,
                loop: false,
                src: '#signin-modal',
                baseClass: 'dark-fancybox',
                touch: false,
            });
        },

        login() {
            this.errors = [];
            axios.post('login', {
                email: this.email,
                password: this.password,
                remember: this.remember
            }).then(response => {
                location.reload();
            })
            .catch(error => {
                Object.entries(error.response.data.errors).forEach(([key, value]) => {
                    this.errors.push(value);
                });
            });
        },
    }
}
</script>

<style scoped>
.alert {
    background: #f44336;
    padding: 10px;
    color: white;
    border-radius: 10px;
    margin-bottom: 10px;
}
</style>
