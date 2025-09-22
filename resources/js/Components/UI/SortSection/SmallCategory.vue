<script setup>
import { storeToRefs } from "pinia";
import { computed } from "vue";
import { useCarStore } from "./../../../Stores/car.js";
const carStore = useCarStore();
const { carCategories } = storeToRefs(carStore);
const { bestCarCategories } = carStore;

function capitalizeText(val) {
  return String(val).charAt(0).toUpperCase() + String(val).slice(1);
}
</script>

<template>
  <div class="category-block center">Все категории</div>
  <div
    class="category-block center"
    v-for="category in bestCarCategories"
    :key="category"
  >
    {{ capitalizeText(category.title) }}
  </div>
  <div class="category-block center">Другие категории</div>
</template>

<style scoped>
.category-block {
  background-color: var(--dark-blue);
  border-radius: 10px;
  font-size: 1rem;
  font-weight: bold;
  width: 100%;
  max-width: 200px;
  height: 40px;
}
</style>
