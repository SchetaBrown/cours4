<script setup>
import CarImage from "./CarImage.vue";
const PROPS = defineProps(["title", "cost", "caseType"]);
</script>

<template>
  <div class="car-card">
    <CarImage :imageUrl="123"></CarImage>
    <div class="car-info-block">
        <div class="block">
            <span class="props-data">{{ title }}</span>
            <span class="add-data">{{ caseType }}</span>
        </div>
        <div class="block">
            <span class="props-data">{{ cost }}</span>
            <span class="add-data">Сутки</span>
        </div>
    </div>
  </div>
</template>

<style scoped>
.car-card {
  max-width: 420px;
  width: 100%;
  height: fit-content;
  padding: 10px;
  background-color: var(--white-color);
  border-radius: 8px;
}

.car-info-block {
    display: flex;
    justify-content: space-between;
}

.block {
    display: flex;
    flex-direction: column;
}

.props-data {
    font-size: 1.125rem;
}

.add-data {
    font-size: .9375rem;
    color: var(--add-info-color);
}
</style>
