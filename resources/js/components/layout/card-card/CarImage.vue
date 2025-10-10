<script setup>
defineProps(["imageUrl"]);
</script>

<template>
  <div class="car-image"></div>
  <img src="" alt="" />
</template>

<style scoped>
.car-image {
  width: 100%;
  height: 250px;
  background-color: var(--black-color);
  border-radius: 6px;
}
</style>
