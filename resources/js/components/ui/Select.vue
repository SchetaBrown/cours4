<script setup>
const PROPS = defineProps(["title", "dataArray"]);
</script>

<template>
  <select name="" id="" class="select">
    <option value="">{{ title }}</option>
    <option :value="data.id" v-for="data in dataArray" :key="data.id">
      {{ data.title }}
    </option>
  </select>
</template>

<style scoped>
</style>
