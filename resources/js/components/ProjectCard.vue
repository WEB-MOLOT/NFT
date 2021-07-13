<template>
    <a :class="['catalog__item project--js flex bottom bottom_visible', {catalog__item_100: fullWidth}]">
        <div class="catalog__left">
            <div class="catalog__img img-cover">
                <img :src="project.logo" alt="">
            </div>
            <div class="catalog__verified flex" v-show="project.verified">
                <div class="catalog__verified-icon img-contain">
                    <img src="img/catalog/verified-icon.svg" alt="">
                </div>
                <div class="catalog__verified-caption">
                    <span>Verified</span>
                </div>
            </div>
            <div class="catalog__left-box">
                <div class="catalog__left-info active" v-if="project.status === 2">
                    <div class="catalog__left-info__name">Active</div>
                    <div class="catalog__left-info__hidden">
                        <div class="catalog__left-info__caption">Heading</div>
                        <div class="catalog__left-info__desc">text description</div>
                    </div>
                </div>
                <div class="catalog__left-info upcoming" v-else>
                    <div class="catalog__left-info__name">Upcoming</div>
                    <div class="catalog__left-info__hidden">
                        <div class="catalog__left-info__caption">Heading</div>
                        <div class="catalog__left-info__desc">text description</div>
                    </div>
                </div>
                <div class="catalog__left-btn unfollow flex-center" v-if="isUserSubscribed(project)">
                    <div class="catalog__left-btn__unfollow" @click="unfollowProject(project)">
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
                <div class="catalog__left-btn follow flex-center" v-else>
                    <div class="catalog__left-btn__follow"  @click="followProject(project)">
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
                </div>

            </div>
        </div>
        <div class="catalog__right" @click="showProjectModal(project)">
            <div class="catalog__top flex">
                <div class="catalog__top-box">
                    <div class="catalog__caption">{{ project.name }}</div>
                    <div class="catalog__top-info">
                        <div v-for="category in project.categories" :class="`category category_${category.color}`">
                            {{ category.name }}
                        </div>
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
                <div class="star star_good flex" v-if="project.rating">
                    <img src="img/catalog/star.svg" alt="">
                    <span>{{ project.rating }}</span>
                </div>
            </div>
            <div class="catalog__desc">
                {{ project.description.slice(0, 125)}} <span v-if="project.description.length > 125"> ...</span>
            </div>
            <div class="catalog__item-bottom flex">
                <div class="catalog__prices">${{ project.min_price }} - ${{ project.max_price }}</div>
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
</template>


<script>

export default {
    props: ['project', 'fullWidth'],

    methods: {
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
            this.$parent.$refs.modal.project = project;
            this.$parent.$refs.modal.init();
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
    }
}
</script>

<style>
.catalog__item_100 {
    width: calc(100% - 17.5px) !important;
}
</style>
