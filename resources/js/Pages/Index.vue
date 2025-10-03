<script setup>
// импорты и props
const props = defineProps(["isAuth", "carCatetories", "cars"]);
import IndexPagePagination from "../components/layout/pagination/IndexPagePagination.vue";
import RentalConditionSection from "../components/layout/rentalCondition/RentalConditionSection.vue";
import IndexMap from "../components/layout/map/IndexMap.vue";
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

function getCarFullName(carInfo) {
  return `${carInfo.car_brand.title} ${carInfo.title}`;
}
</script>
<template>
  <AppLayout>
    <SortSection />
    <div class="cars-amount-block">
      <div class="cars-amount">Найдено автомобилей: {{ carCount }}</div>
    </div>
    <div class="car-section">
      <CarCard
        v-for="car in cars"
        :key="car.id"
        :title="getCarFullName(car)"
        :type="car.car_category.title"
        :transmission="car.transmission"
        :cost_per_day="car.cost_per_day"
      />
    </div>
    <IndexPagePagination />
    <RentalConditionSection />
    <IndexMap />
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
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 15px;
  margin-top: 40px;
}

@media (max-width: 1440px) {
  .car-section {
    grid-template-columns: repeat(3, 1fr);
    max-width: 1280px;
    gap: 10px;
  }
}

@media (max-width: 1024px) {
  .car-section {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .car-section {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 425px) {
  .car-section {
    grid-template-columns: repeat(1, 1fr);
  }
}
</style>
