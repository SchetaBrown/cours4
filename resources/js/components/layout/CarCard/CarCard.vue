<script setup>
import CardImage from "./CardImage.vue";
const props = defineProps(["id", "title"]);
</script>

<template>
  <div class="car-card">
    <CardImage />
  </div>
</template>

<style scoped>
.car-card {
  max-width: 530px;
  width: 100%;
  background-color: #d9d9d9;
  border-radius: 10px;
  padding: 10px;
}

@media (max-width: 1440px) {
  .car-card {
    max-width: 420px;
  }
}

@media (max-width: 768px) {
  .car-card {
    max-width: calc((100vw - 60px - 10px) / 2);
  }
}

@media (max-width: 425px) {
  .car-card {
    max-width: 100%;
  }
}
</style>
