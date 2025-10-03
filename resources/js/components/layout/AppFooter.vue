<script setup>
import AppLogo from "./AppLogo.vue";
</script>
<template>
  <footer class="footer">
    <div class="about-company-section">
      <AppLogo />
      <div class="line"></div>
      <div class="about-company-block"></div>
    </div>
    <div class="social-links"></div>
  </footer>
</template>
<style scoped>
footer.footer {
  display: flex;
  align-items: center;
  padding: 35px 100px;
  background-color: #d9d9d9;
  border-radius: 25px 25px 0 0;
  margin-top: 80px;
}

.about-company-section {
  display: flex;
  align-items: center;
  gap: 30px;
}

.line {
  width: 4px;
  min-height: 180px;
  background-color: black;
}
</style>
