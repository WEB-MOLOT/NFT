<template>
    <form @submit.prevent="submit" class="header__search">
        <div class="header__search-box">
            <button class="header__search-btn">
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M3.25 7.33333C3.25 4.80203 5.30203 2.75 7.83333 2.75C10.3646 2.75 12.4167 4.80203 12.4167 7.33333C12.4167 9.86464 10.3646 11.9167 7.83333 11.9167C5.30203 11.9167 3.25 9.86464 3.25 7.33333ZM7.83333 1.25C4.4736 1.25 1.75 3.9736 1.75 7.33333C1.75 10.6931 4.4736 13.4167 7.83333 13.4167C9.24289 13.4167 10.5405 12.9373 11.5719 12.1326L13.303 13.8637C13.5959 14.1566 14.0708 14.1566 14.3637 13.8637C14.6566 13.5708 14.6566 13.0959 14.3637 12.803L12.6326 11.0719C13.4373 10.0405 13.9167 8.74289 13.9167 7.33333C13.9167 3.9736 11.1931 1.25 7.83333 1.25Z"
                          fill="#5E7C8D" />
                </svg>
            </button>
            <input type="text" v-model="query" @input="search" class="header__search-field field" placeholder="Search">
            <div class="header__search-list" v-if="projects && projects.length > 0">
                <div class="header__search-list__project">
                    <div class="header__search-list__name-project">Name collections</div>
                    <ul>
                        <li v-for="project in projects">
                            <a :href="`/projects/${project.slug}`">
                                <img :src="project.logo" alt="">
                                <span>{{ project.name }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            query: '',
            projects: []
        }
    },

    methods: {
        search() {
            if (this.query.length > 2) {
                axios.get('/api/search', { params: {query: this.query}})
                    .then(response => {
                        this.projects = response.data.data
                    })
            }
        },

        submit() {
            if (this.projects.length > 0) {
                window.location = '/projects/' + this.projects[0].slug
                // console.log(this.projects[0]);
            }
        }
    }
}
</script>
