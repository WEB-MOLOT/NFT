<template>
    <div id="delete-modal" class="delete-modal modal" style="display: none;">
        <div class="delete-modal__body">
            <div class="delete-modal__title">Delete selected project?</div>
            <div class="delete-modal__buttons">
                <a href="#" class="delete-modal__btn btn btn_blue" @click="removeProject">delete</a>
                <div class="delete-modal__btn btn btn_gray" data-fancybox-close>cancel</div>
            </div>
        </div>
    </div><!-- end delete-modal -->
</template>

<script>
export default {
    data() {
        return {
            project: {}
        }
    },

    methods: {
        init() {
            $('.delete--js').on('click', function (event) {
                event.preventDefault();
                $.fancybox.open({
                    loop: false,
                    src: '#delete-modal',
                    baseClass: 'dark-fancybox',
                    touch: false,
                });
            });
        },

        removeProject() {
            axios.delete(`api/projects/${this.project.id}`)
                .then(response => {
                    $.fancybox.close();
                    this.$swal('Success', 'successfully deleted', 'success')
                    this.$parent.init();
                })
        }
    }
}
</script>
