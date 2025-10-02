<script setup>
import { storeToRefs } from "pinia";
import { useUserStore } from "./../../stores/UserStore.js";
import AppLogo from "./AppLogo.vue";
const userStore = useUserStore();
const isAuth = storeToRefs(userStore.isAuth);
</script>
<template>
  <header class="header">
    <AppLogo />
    <div class="nav-bar">
      <ul>
        <li v-if="!isAuth">
          <Link :href="route('profile.index')">Профиль</Link>
        </li>
        <li v-else>
          <Link :href="route('login.index')">Войти</Link>
        </li>
      </ul>
    </div>
  </header>
</template>
<style scoped>
header.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 50px;
  background-color: #d9d9d9;
  border-radius: 0 0 25px 25px;
}

ul > li > a {
  font-size: 1.5rem;
  font-weight: bold;
}
</style>
