<script setup>
import { storeToRefs } from "pinia";
import SmallCarCard from "./SmallCarCard.vue";
import { useCarStore } from "./../../../../Stores/car.js";
import { computed } from "vue";
const carStore = useCarStore();
const { carCount } = storeToRefs(carStore);
</script>

<template>
  <div class="car-card-section">
    <h2>Найденно автомобилей: {{ carCount }}</h2>
    <div class="car-card-block">
      <SmallCarCard></SmallCarCard>
      <SmallCarCard></SmallCarCard>
      <SmallCarCard></SmallCarCard>
    </div>
  </div>
</template>

<style scoped>
.car-card-block {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

.car-card-section {
  margin-top: 25px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}
</style>
