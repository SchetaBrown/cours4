<script setup>
import Header from "../Components/UI/Partials/Header.vue";
import Footer from "../Components/UI/Partials/Footer.vue";
</script>

<template>
  <Header></Header>

  <main>
    <slot />
  </main>

  <Footer></Footer>
</template>

