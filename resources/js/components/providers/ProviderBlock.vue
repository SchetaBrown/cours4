<script setup>
const props = defineProps(["title"]);

function sendProvider(title) {
  window.location.href = route("socialite.redirect", { provider: title });
}
</script>

<template>
  <button @click="sendProvider(title)" class="provider-block"></button>
</template>

<style scoped>
.provider-block {
  height: 50px;
  width: 50px;
  background-color: #d9d9d9;
  border-radius: 10px;
}
</style>
