<script setup>
import AppHeader from "../components/layout/AppHeader.vue";
import AppFooter from "../components/layout/AppFooter.vue";
</script>
<template>
  <AppHeader></AppHeader>
  <main class="main">
    <slot />
  </main>
  <AppFooter></AppFooter>
</template>
<style scoped>

</style>
