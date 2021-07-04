<template>
    <form action="#" class="contacts__form form" @submit.prevent="save">
        <label class="form__label bottom ">
            <input type="text" v-model="contact.name" class="form__field field validate--js" placeholder="Your name">
        </label>
        <label class="form__label bottom ">
            <input type="text" v-model="contact.email" class="form__field field validate--js validate-email--js" placeholder="E-Mail">
        </label>
        <label class="form__label bottom">
            <input type="text" v-model="contact.telegram" class="form__field field validate--js" placeholder="Your telegram">
        </label>
        <label class="form__label bottom ">
            <textarea class="form__field field validate--js" v-model="contact.message" placeholder="Message"></textarea>
        </label>
        <div class="form__box bottom">
            <div class="form__caption">TYPE OF INQUIRY</div>
            <div class="form__checkboxs flex">
                <label class="form__checkbox">
                    <input type="radio" value="Update ICO" v-model="contact.subject" checked>
                    <div class="form__checkbox-icon flex-center">
                        <img src="img/contacts/check.svg" alt="">
                    </div>
                    <div class="form__checkbox-caption">Update ICO</div>
                </label>
                <label class="form__checkbox">
                    <input type="radio" value="Advertising" v-model="contact.subject">
                    <div class="form__checkbox-icon flex-center">
                        <img src="img/contacts/check.svg" alt="">
                    </div>
                    <div class="form__checkbox-caption">Advertising</div>
                </label>
                <label class="form__checkbox">
                    <input type="radio" value="Business" v-model="contact.subject">
                    <div class="form__checkbox-icon flex-center">
                        <img src="img/contacts/check.svg" alt="">
                    </div>
                    <div class="form__checkbox-caption">Business</div>
                </label>
                <label class="form__checkbox">
                    <input type="radio" value="Update Airdrop" v-model="contact.subject">
                    <div class="form__checkbox-icon flex-center">
                        <img src="img/contacts/check.svg" alt="">
                    </div>
                    <div class="form__checkbox-caption">Update Airdrop</div>
                </label>
                <label class="form__checkbox">
                    <input type="radio" value="Other" v-model="contact.subject">
                    <div class="form__checkbox-icon flex-center">
                        <img src="img/contacts/check.svg" alt="">
                    </div>
                    <div class="form__checkbox-caption">Other</div>
                </label>
                <label class="form__checkbox">
                    <input type="radio" value="Feedback" v-model="contact.subject">
                    <div class="form__checkbox-icon flex-center">
                        <img src="img/contacts/check.svg" alt="">
                    </div>
                    <div class="form__checkbox-caption">Feedback</div>
                </label>
                <label class="form__checkbox">
                    <input type="radio" value="Report a problem" v-model="contact.subject">
                    <div class="form__checkbox-icon flex-center">
                        <img src="img/contacts/check.svg" alt="">
                    </div>
                    <div class="form__checkbox-caption">Report a problem</div>
                </label>
            </div>
        </div>
        <div class="form__captcha bottom">
            <img src="img/contacts/captcha.svg" alt="">
        </div>
        <button class="form__btn btn btn_blue bottom" type="submit">
            <div class="btn__caption">send message</div>
            <div class="btn__icon svg-contain">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M2.47144 7.45148C2.2052 7.48813 2 7.71973 2 7.99997C2 8.30569 2.24421 8.55352 2.54545 8.55352L12.1333 8.55352L8.66986 12.0542L8.61692 12.1162C8.45804 12.3326 8.47501 12.6401 8.66826 12.8371C8.88083 13.0537 9.22619 13.0544 9.43965 12.8387L13.8323 8.39931C13.8543 8.37789 13.8745 8.35463 13.8927 8.32976L13.8927 8.32969C14.052 8.11265 14.0343 7.80406 13.8396 7.60737L9.43962 3.16129L9.37832 3.10782C9.16445 2.9475 8.86146 2.96603 8.66823 3.16297C8.45567 3.37961 8.45642 3.7301 8.66989 3.9458L12.1343 7.44642L2.54545 7.44642L2.47144 7.45148Z"
                          fill="white" />
                </svg>
            </div>
        </button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            contact: {
                name: 'test',
                email: 'test@gmail.com',
                telegram: '111222333',
                message: 'test',
                subject: ''
            }
        }
    },

    methods: {
        save() {
            axios.post('api/message', this.contact)
                .then(response => {
                    this.$swal('Success', 'Your application has been successfully submitted!', 'success');
                    this.contact = {};
                })
        }
    }
}
</script>
