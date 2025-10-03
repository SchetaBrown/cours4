<script setup>
import { RENTAL_CONDITIONS } from "./../../../constants/rentalConditions.js";
import RentalConditionBlock from "./RentalConditionBlock.vue";
</script>

<template>
  <div class="rental-condition-section">
    <div class="rental-condition-title">
      <h1>Условия аренды</h1>
    </div>
    <div class="rental-condition-bar">
      <RentalConditionBlock
        v-for="rental in RENTAL_CONDITIONS"
        :key="rental.id"
        :title="rental.info.title"
        :subtitle="rental.info.subtitle"
      />
    </div>
  </div>
</template>

<style scoped>
.rental-condition-section {
  margin-top: 60px;
}

.rental-condition-bar {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  width: fit-content;
  gap: 40px;
  margin-top: 40px;
}

.rental-condition-title {
  text-align: center;
}

.rental-condition-title > h1 {
  font-size: 2.25rem;
}

@media (max-width: 1440px) {
  .rental-condition-bar {
    grid-template-columns: repeat(3, 1fr);
    width: 100%;
  }
}

@media (max-width: 1024px) {
  .rental-condition-bar {
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    width: 100%;
  }
}

@media (max-width: 768px) {
  .rental-condition-bar {
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
  }
}

@media (max-width: 425px) {
  .rental-condition-bar {
    grid-template-columns: repeat(1, 1fr);
    gap: 10px;
  }
}
</style>
