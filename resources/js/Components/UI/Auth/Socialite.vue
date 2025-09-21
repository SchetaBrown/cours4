<script setup>
const socialBlocks = [
  {
    provider: "google",
  },
  {
    provider: "github",
  },
];

const getSocialiteUrl = (provider) => {
  return `/auth/${provider}`;
};
</script>

<template>
  <div class="socialite-section">
    <a
      v-for="(social, index) in socialBlocks"
      :key="index"
      :href="getSocialiteUrl(social.provider)"
      class="socialite-block"
    >
      <span style="color: #000;">{{ social.provider }}</span>
    </a>
  </div>
</template>

<style scoped>
.socialite-section {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  margin-bottom: 40px;
}

.socialite-block {
  width: 60px;
  height: 60px;
  background-color: var(--page-background-color);
  border-radius: 8px;
}
</style>
