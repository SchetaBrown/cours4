<script setup>
import { computed } from "vue";
import { useProfilestore } from "./../../../Stores/profile.js";
const profileStore = useProfilestore();
const navItems = [
  { id: "my-data", title: "Мои данные" },
  { id: "my-rentals", title: "Мои аренды" },
  { id: "my-achievements", title: "Мои достижения" },
  { id: "privacy", title: "Конфиденциальность" },
];

function setActiveTab(tab) {
  profileStore.setActiveTab(tab);
}
</script>

<template>
  <aside class="profile-side-bar">
    <h2>Настройка профиля</h2>
    <div class="profile-side-section">
      <button
        class="profile-section-btn"
        v-for="item in navItems"
        :key="item.id"
        @click="setActiveTab(item.id)"
      >
        <div class="profile-section-image"></div>
        {{ item.title }}
      </button>
    </div>
  </aside>
</template>

<style scoped>
.profile-side-bar {
  width: fit-content;
  height: auto;
}

h2 {
  font-weight: bold;
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.profile-side-section {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  gap: 15px;
  background-color: var(--white);
  border-radius: 6px;
  padding: 40px 25px;
  max-width: 280px;
  height: auto;
}

.profile-section-btn {
  display: flex;
  align-items: center;
  gap: 10px;
  background-color: transparent;
  font-size: 1.125rem;
  font-weight: 600;
  transition: 0.3s;
  position: relative;
  padding-bottom: 8px;
}

.profile-section-image {
  width: 30px;
  height: 30px;
  border-radius: 5px;
  background-color: #d9d9d9;
}
</style>
