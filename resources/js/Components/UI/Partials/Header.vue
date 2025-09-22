<script setup>
import { storeToRefs } from "pinia";
import { useUserStore } from "./../../../Stores/user.js";
import Logotype from "./Logotype.vue";

const userStore = useUserStore();
const { isAuth } = storeToRefs(userStore);
</script>

<template>
  <header class="header">
    <Logotype></Logotype>
    <div class="nav-block">
      <Link v-if="!isAuth" :href="route('login.index')">Войти</Link>
      <Link v-else :href="route('profile.index')">Профиль</Link>
    </div>
  </header>
</template>

<style scoped>
.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  min-height: 80px;
  background-color: var(--dark-blue);
  border-radius: 0 0 20px 20px;
  padding: 0 45px;
}
</style>
