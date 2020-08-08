<template>
<div>
    <AboutSection :data="aboutSectionData"/>
    <ServiceSection :whatWeDo="whatWeDo"/>
    <PackageSection />
</div>
</template>

<script>
import AboutSection from '../home-components/AboutSection';
import ServiceSection from '../home-components/ServiceSection';
import PackageSection from '../home-components/PackageSection';
export default {
    name: 'HomeContent',
    props : ['aboutSectionData','whatWeDo'],
    components: {
        AboutSection,
        ServiceSection,
        PackageSection
    },
    mounted() {
    }

}
</script>

<style>

</style>