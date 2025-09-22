<script setup>
import Header from "../Components/UI/Partials/Header.vue";
import Footer from "../Components/UI/Partials/Footer.vue";
</script>

<template>
  <Header></Header>

  <main class="main-container">
    <slot />
  </main>

  <Footer></Footer>
</template>

<style scoped>
.main-container {
  margin-top: 40px;
  margin-bottom: 60px;
  width: 100%;
}
</style>

