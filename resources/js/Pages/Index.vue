<script setup>
import { router } from "@inertiajs/vue3";
import { provide } from "vue";

const props = defineProps({
  isAuth: {
    type: Boolean,
  },
});

provide('isAuth', props.isAuth)

const logout = () => {
  router.post("/logout");
};
</script>

<template>
  <AppLayout>
    <button v-if="props.isAuth" @click="logout">Выйти</button>
  </AppLayout>
</template>

<style scoped>
</style>
