<template>
    <section class="about">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div
                        class="about-img mb-5 mb-lg-0"
                        data-aos="fade-right"
                        data-aos-delay="200"
                    >
                        <img
                            :src="aboutSectionData.image"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-item pl-3">
                        <h2 class="mt-1 mb-4 font-secondary">
                            {{ aboutSectionData.title }}
                        </h2>
                        <p class="mb-5">
                            <span  v-html="aboutSectionData.description"></span>
                        </p>

                        <a :href="aboutSectionData.link" class="btn btn-main">ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: ['data'],
    data() {
        return {
            aboutSectionData: JSON.parse(this.data)
        }
    },
    mounted() {
    }
};
</script>
