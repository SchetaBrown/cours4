<script setup>
import { storeToRefs } from "pinia";
import { useUserStore } from "./../../../../../Stores/user.js";

const userStore = useUserStore();
const { userInfo } = storeToRefs(userStore);
console.log(userInfo);
</script>

<template>
  <div class="upper-section">
    <div class="user-info-block">
      <div class="user-image"></div>
      <div class="user-info">
        <span class="user-name">{{ userInfo.login }}</span>
        <span class="register-date"
          >Дата регистрации: {{ userInfo.created_at }}</span
        >
      </div>
    </div>
    <Link class="admin-link center">Админ-панель</Link>
  </div>
</template>

<style scoped>
.upper-section {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.user-info-block {
  display: flex;
  align-items: center;
  gap: 10px;
}

.user-image {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  background-color: #d9d9d9;
}

.user-info {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.user-name {
  font-size: 1.125rem;
  font-weight: bold;
  color: var(--light-blue);
}

.register-date {
  font-size: 0.875rem;
  color: #8b8b8b;
}

.admin-link {
  width: 200px;
  height: 50px;
  background-color: var(--light-orange);
  border-radius: 6px;
  color: var(--black);
}
</style>

