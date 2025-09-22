<script setup>
import { useForm } from "@inertiajs/vue3";

function logout() {
  console.log("Нажата кнопка выхода");

  useForm().post(route("login.destroy"), {
    onSuccess: () => {
      router.push("/");
    },
  });
}
</script>

<template>
  <div class="low-section">
    <button @click="logout" class="action-btn center">Выйти</button>
    <Link class="action-btn center">Сменить пароль</Link>
  </div>
</template>

<style scoped>
.low-section {
  display: flex;
  gap: 15px;
  margin-top: 40px;
}

.action-btn {
  width: 150px;
  height: 40px;
  background-color: var(--light-orange);
  border-radius: 6px;
  font-weight: bold;
  font-size: 0.85rem;
  color: var(--black);
}
</style>

