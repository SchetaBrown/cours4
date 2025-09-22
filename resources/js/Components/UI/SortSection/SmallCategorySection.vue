<script setup>
import SmallCategory from "./SmallCategory.vue";
</script>

<template>
  <div class="small-category-section">
    <SmallCategory></SmallCategory>
  </div>
</template>

<style scoped>
.small-category-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 15px;
  max-width: 845px;
  width: 100%;
}
</style>
