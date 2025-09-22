<script setup>
import SmallCategorySection from "./SmallCategorySection.vue";
</script>

<template>
  <div class="sort-block">
    <SmallCategorySection></SmallCategorySection>
  </div>
</template>

<style scoped>
.sort-block {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 25px;
}
</style>
