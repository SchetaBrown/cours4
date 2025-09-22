<script setup>
import SideBar from "../Components/UI/Profile/SideBar.vue";
</script>

<template>
  <AppLayout>
    <div class="profile-container">
      <SideBar></SideBar>
      <slot name="content" />
    </div>
  </AppLayout>
</template>

<style scoped>
.profile-container {
  display: flex;
  gap: 25px;
}
</style>
