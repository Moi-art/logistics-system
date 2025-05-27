<template>
    <div>
      <Navbar />
      <HeroSection />
      <FeaturesSection />
      <HowItWorks />
      <ContactForm />
      <FooterSection />
    </div>
  </template>

  <script>
  import Navbar from './Navbar.vue';
  import HeroSection from './HeroSection.vue';
  import FeaturesSection from './FeaturesSection.vue';
  import HowItWorks from './HowItWorks.vue';
  import ContactForm from './ContactForm.vue';
  import FooterSection from './FooterSection.vue';

  export default {
    components: {
      Navbar,
      HeroSection,
      FeaturesSection,
      HowItWorks,
      ContactForm,
      FooterSection
    }
  }
  </script>
