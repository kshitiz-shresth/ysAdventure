<template>
    <section class="section service bg-gray mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2 class="mb-4">WHAT WE DO</h2>
                        <p>
                            {{ whatWeDo }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div
                    class="col-lg-4 col-md-6 col-sm-6"
                    v-for="(item, index) in services"
                    :key="item.id"
                >
                    <div
                        class="card mb-4 p-5 text-center"
                        data-aos="fade-up"
                        :data-aos-delay="changeDelay(index + 1)"
                    >
                        <i :class="item.icon"></i>
                        <h4 class="mb-3 mt-4">{{ item.title }}</h4>
                        <p>{{ item.short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: ['whatWeDo'],
    data() {
        return {
            services: ""
        };
    },
    mounted() {
        axios
            .get("/api/services")
            .then(response => (this.services = response.data));
    },
    methods: {
        changeDelay: index => index * 200
    }
};
</script>
