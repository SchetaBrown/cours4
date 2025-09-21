<script setup>
defineProps({
  type: {
    type: String,
    default: "text",
  },
  name: {
    type: String,
    default: "",
  },
  placeholder: {
    type: String,
    default: "",
  },
});
</script>

<template>
  <input
    class="input-block"
    :type="type"
    :name="name"
    :placeholder="placeholder"
  />
</template>

<style scoped>
.input-block {
  width: 100%;
  height: 50px;
  border-radius: 4px;
  background-color: var(--page-background-color);
  color: var(--black);
  font-weight: 500;
  padding-left: 20px;
}
</style>
