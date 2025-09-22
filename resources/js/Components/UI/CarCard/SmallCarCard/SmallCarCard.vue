<script setup>
import Image from "./Image.vue";
import AboutCarLink from "./AboutCarLink.vue";
import Link from "./AboutCarLink.vue";
import { useCarStore } from "./../../../../Stores/car.js";
import { storeToRefs } from "pinia";
const carStore = useCarStore();
const { carInfo } = storeToRefs(carStore);
</script>

<template>
  <div class="car-card">
    <Image></Image>
    <div class="car-info-block">
      <div class="car-info">
        <div class="car-info-container">
          <h3>Toyota mark 2</h3>
          <span class="car-price">3000р. / сутки</span>
        </div>
        <AboutCarLink></AboutCarLink>
      </div>
    </div>
  </div>
</template>

<style scoped>
h3 {
  font-size: 1.125rem;
}

.car-card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: var(--white);
  width: calc((100vw - 310px - 32px) / 3);
  height: 40vh;
  padding: 7px;
  border-radius: 20px;
}

.car-price {
  color: var(--light-blue);
  font-weight: 100;
}

.car-info-container {
  margin-top: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}

@media (max-width: 425px) {
  .car-card {
    width: 100%;
  }
}

@media (width: 768px) {
  .car-card {
    width: calc((100vw - 75px) / 2);
  }
}

@media (width: 1024px) {
  .car-card {
    width: calc((100vw - 120px - 30px) / 2);
  }
}
</style>
