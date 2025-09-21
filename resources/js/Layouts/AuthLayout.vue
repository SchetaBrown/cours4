<script setup>
import { reactive } from "vue";
import { useForm, usePage } from "@inertiajs/vue3";
const pageUrl = usePage().url;
const routeInfo = pageUrl === "/register" ? "register" : "login";

</script>

<template>
  <div class="auth-container center">
    <form class="auth-block">
      <div class="block-title">
        <slot name="title" />
      </div>
      <slot name="socialite" />
      <slot name="content" />
      <slot name="button" />
    </form>
  </div>
</template>

<style>
.form-title {
  font-size: 1.75rem;
}

.auth-container {
  block-size: 100vh;
}

.block-title {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-block-end: 40px;
  text-align: center;
  font-size: 1.75rem;
}

form.auth-block {
  background-color: var(--white);
  padding: 60px 50px;
  max-inline-size: 600px;
  inline-size: 100%;
  block-size: auto;
  border-radius: 30px;
}

.send-data-block {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  margin-top: 40px;
  gap: 20px;
}

button {
  height: 60px;
  width: 100%;
  max-width: 250px;
  background-color: var(--green);
  color: var(--white);
  border-radius: 40px;
  font-weight: bold;
}
</style>
