<script setup>
const props = defineProps(["title", "subtitle"]);
</script>

<template>
  <div class="rental-condition-block">
    <div class="rental-condition-container">
      <div class="title">{{ title }}</div>
      <div class="subtitle">{{ subtitle }}</div>
    </div>
  </div>
</template>

<style scoped>
.rental-condition-block {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 375px;
  width: 100%;
  height: 375px;
  background-color: #d9d9d9;
  border-radius: 20px;
  padding: 15px;
}

.rental-condition-container {
    display: flex;
    text-align: center;
    flex-direction: column;
    gap: 8px;
}

.title {
    font-size: 1.6rem;
    font-weight: bold;
}

.subtitle {
    font-size: 1.2rem;
    color: #4c4c4c;
}

@media (max-width:425px) {
    .rental-condition-block {
        max-width: 100%;
    }
}

@media (max-width:1024px) {
    .rental-condition-block {
        max-width: 100%;
    }
}

@media (max-width:1440px) {
    .rental-condition-block {
        max-width: 100%;
    }
}
</style>
