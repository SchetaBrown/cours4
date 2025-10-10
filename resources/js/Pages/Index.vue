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
console.log(PROPS.cars.data);
</script>

<template>
    <AppLayout>
        <div class="container">
            <FilterSidebar />
            <div class="content-block">
                <!-- <h2>{{ CAR_COUNT }}</h2> -->
                <CarCard
                    v-for="car in cars.data"
                    :key="car.id"
                    :title="car.title"
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
    grid-template-rows: repeat(2, 1fr);
    gap: 20px;
}
</style>
