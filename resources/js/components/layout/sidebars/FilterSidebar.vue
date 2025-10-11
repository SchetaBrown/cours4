<script setup>
// Импорты
import { useCarStore } from "./../.././../stores/ExportStores.js";
import { storeToRefs } from "pinia";
import Line from "../../ui/Line.vue";
import Select from "./../../ui/Select.vue";
</script>

<template>
  <div class="filter-section">
    <h1>Фильтры</h1>
    <Line />
    <Select />
  </div>
</template>

<style scoped>
.filter-section {
  max-width: 380px;
  width: 100%;
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
