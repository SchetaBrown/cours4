<script setup>
import AppHeader from "../components/layout/AppHeader.vue";
import AppFooter from "../components/layout/AppFooter.vue";
</script>
<template>
  <div id="container">
    <AppHeader></AppHeader>
    <main class="main">
      <slot />
    </main>
    <AppFooter></AppFooter>
  </div>
</template>
<style scoped>
#container {
  display: flex;
  flex-direction: column;
  max-width: 1620px;
  width: 100%;
}
</style>
