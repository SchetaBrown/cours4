<script setup>
import { PROVIDERS } from "./../../constants/providers.js";
import ProviderBlock from "./ProviderBlock.vue";
</script>

<template>
  <div class="provider-section">
    <ProviderBlock
      v-for="provider in PROVIDERS"
      :key="provider.id"
      :title="provider.title"
    />
  </div>
</template>

<style scoped>
.provider-section {
  display: flex;
  gap: 10px;
}
</style>
