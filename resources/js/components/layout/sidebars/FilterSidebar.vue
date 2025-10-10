<script setup>
import { useCarStore } from "./../.././../stores/ExportStores.js";
import Line from "../../ui/Line.vue";
import { storeToRefs } from "pinia";
const CAR_STORE = useCarStore();
const CAR_CATEGORIES = CAR_STORE.carCategories;
</script>

<template>
    <div class="filter-section">
        <h1>Фильтры</h1>
        <Line />
    </div>
</template>

<style scoped>
.filter-section {
    max-width: 380px;
    height: fit-content;
    background-color: var(--white-color);
    border-radius: 8px;
    padding: 25px;
}

h1 {
    font-size: 1.5rem;
    margin-bottom: 5px;
}
</style>
