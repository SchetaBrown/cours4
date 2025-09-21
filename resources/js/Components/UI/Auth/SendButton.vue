<script setup>
defineProps({
  title: {
    type: String,
    default: "Отправить",
    required: false,
  },
});
</script>

<template>
  <button type="submit">{{ title }}</button>
</template>

<style scoped>
button {
  height: 60px;
  width: 100%;
  max-width: 250px;
  background-color: var(--green);
  color: var(--white);
  border-radius: 40px;
  font-weight: bold;
}
</style>
