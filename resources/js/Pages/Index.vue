<script setup>
import { router } from "@inertiajs/vue3";
import { storeToRefs } from "pinia";
import SortBlock from "./../Components/UI/SortSection/SortBlock.vue";
import { useCarStore } from "./../Stores/car.js";
import { useUserStore } from "./../Stores/user";

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

console.log(props.cars)
</script>

<template>
  <AppLayout>
    <SortBlock></SortBlock>
  </AppLayout>
</template>

<style scoped>
</style>
