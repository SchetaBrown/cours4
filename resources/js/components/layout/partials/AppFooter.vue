<script setup>
import AppLogotype from "./AppLogotype.vue";
</script>

<template>
  <footer class="footer">
    <AppLogotype />
  </footer>
</template>

<style scoped>
footer.footer {
  display: flex;
  align-items: center;
  background-color: var(--white-color);
  height: 210px;
  border-radius: 20px 20px 0 0;
  margin-top: 80px;
  padding: 35px 70px;
}
</style>
