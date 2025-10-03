<script setup>
import CardImage from "./CarPartials/CardImage.vue";
import CarTypeAndCost from "./CarPartials/CarTypeAndCost.vue";
import CarSpecification from "./CarPartials/CarSpecification.vue";
const props = defineProps([
  "id",
  "title",
  "type",
  "transmission",
  "cost_per_day",
]);
</script>

<template>
  <div class="car-card">
    <CardImage />
    <div class="car-info-section">
      <CarTypeAndCost
        :title="title"
        :type="type"
        :cost_per_day="cost_per_day"
      />
    </div>
    <button class="view-car-card">Подробнее</button>
  </div>
</template>

<style scoped>
.car-card {
  max-width: 530px;
  width: 100%;
  height: fit-content;
  background-color: #d9d9d9;
  border-radius: 10px;
  padding: 10px;
}

.car-info-section {
  margin-top: 20px;
}

.view-car-card {
  margin-top: 20px;
  width: 100%;
  height: 55px;
  background-color: black;
  color: white;
  font-size: 1.125rem;
  font-weight: 700;
  border-radius: 8px;
}

@media (max-width: 1440px) {
  .car-card {
    max-width: 420px;
  }
}

@media (max-width: 1024px) {
  .car-card {
    max-width: 100%;
  }
}

@media (max-width: 768px) {
  .car-card {
    max-width: 349px;
  }
}

@media (max-width: 425px) {
  .car-card {
    max-width: 100%;
  }
}
</style>
