<script setup>
// Пропсы
const PROPS = defineProps(["isAuth", "carCategories", "cars"]);

// Компоненты
import AppLayout from "./../Layouts/AppLayout.vue";
import FilterSidebar from "./../components/layout/sidebars/FilterSidebar.vue";
import CarCard from "./../components/layout/card-card/CarCard.vue";

// Хранилища Pinia
import { storeToRefs } from "pinia";
import { useUserStore, useCarStore } from "./../stores/ExportStores.js";
const USER_STORE = useUserStore();
const CAR_STORE = useCarStore();
USER_STORE.setUserAuthStatus(PROPS.isAuth);
CAR_STORE.setCarCategories(PROPS.carCategories);
CAR_STORE.setCarsInfo(PROPS.cars);

// Другое
const CAR_COUNT = CAR_STORE.carCount;

console.log(PROPS.cars);
</script>

<template>
  <AppLayout>
    <div class="container">
      <FilterSidebar />
      <div class="content-block">
        <CarCard
          v-for="car in cars.data"
          :carBrand="car.car_brand.title"
          :key="car.id"
          :id="car.id"
          :cost="car.cost_per_day"
          :title="car.title"
          :caseType="car.car_category.title"
          :tranmission="car.transmission"
          :fuelType="car.engine_fuel_type"
        />
      </div>
    </div>
  </AppLayout>
</template>

<style scoped>
.container {
  display: flex;
  gap: 40px;
}

.content-block {
  display: grid;
  width: 100%;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}
</style>
