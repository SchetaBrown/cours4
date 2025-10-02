<script setup>
const props = defineProps(["placeholder", "name", "type"]);
</script>

<template>
  <input :type="type" :name="name" :placeholder="placeholder" class="auth-input" />
</template>

<style scoped>
.auth-input {
  background-color: white;
  width: 100%;
  border: 1px solid #d9d9d9;
  border-radius: 15px;
  padding: 16px 30px;
}
</style>
