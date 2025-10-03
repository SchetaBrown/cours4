<script setup>
const props = defineProps(["title", "type", "cost_per_day"]);
</script>

<template>
  <div class="car-title-and-cost">
    <div class="car-type-and-title-block">
      <span class="car-title">{{ title }}</span>
      <span class="car-type">{{ type }}</span>
    </div>
    <div class="car-type-and-title-block" style="align-items: flex-end">
      <span class="car-title">{{ cost_per_day }} ₽</span>
      <span class="car-cost">Сутки</span>
    </div>
  </div>
</template>

<style scoped>
.car-title-and-cost {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.car-type-and-title-block {
  display: flex;
  flex-direction: column;
}

.car-title {
  font-size: 1.25rem;
  font-weight: bold;
}

.car-type,
.car-cost {
  color: #4c4c4c;
  font-weight: 100;
}
</style>
