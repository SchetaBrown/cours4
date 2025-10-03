<script setup>
// импорты и props
const props = defineProps(["isAuth", "carCatetories", "cars"]);
import SortSection from "../components/layout/sort/pages/index/SortSection.vue";
import AppLayout from "./../Layouts/AppLayout.vue";
import CarCard from "../components/layout/CarCard/CarCard.vue";
import { useCarStore } from "./../stores/CarStore.js";
import { useUserStore } from "./../stores/UserStore.js";

// хранилища
const carStore = useCarStore();
const userStore = useUserStore();

// сеттеры для хранилищ
carStore.setCarsInfo(props.cars);
userStore.setUserAuthStatus(props.isAuth);

// другие значения
const carCount = carStore.carCount;
</script>
<template>
  <AppLayout>
    <SortSection />
    <div class="cars-amount-block">
      <div class="cars-amount">Найдено автомобилей: {{ carCount }}</div>
    </div>
    <div class="car-section">
      <CarCard />
    </div>
  </AppLayout>
</template>
<style scoped>
.cars-amount-block {
  display: flex;
  justify-content: center;
  margin-top: 40px;
}

.cars-amount {
  font-size: 1.4rem;
}

.car-section {
  display: flex;
  gap: 15px;
  margin-top: 40px;
}

@media (max-width: 1440px) {
  .car-section {
    flex-wrap: wrap;
    gap: 10px;
  }
}
</style>
