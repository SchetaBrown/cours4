<script setup>
import { storeToRefs } from "pinia";
import { provide } from "vue";
import SortBlock from "./../Components/UI/SortSection/SortBlock.vue";
import { useCarStore } from "./../Stores/car.js";
import { useUserStore } from "./../Stores/user";
import SmallCarCardSection from "./../Components/UI/CarCard/SmallCarCard/SmallCarCardSection.vue";

const props = defineProps({
  isAuth: {
    type: Boolean,
  },
  carCatetories: {
    type: Object,
    required: true,
  },
  cars: {
    type: Object,
    required: true,
  },
});

const userStore = useUserStore();
const carStore = useCarStore();

userStore.setUserAuthStatus(props.isAuth);
carStore.setCategories(props.carCatetories);
carStore.setCars(props.cars);
</script>

<template>
  <AppLayout>
    <SortBlock></SortBlock>
    <SmallCarCardSection></SmallCarCardSection>
  </AppLayout>
</template>

<style scoped>
</style>
