<script setup>
import AuthLayout from "../../Layouts/AuthLayout.vue";
import { REGISTER_FIELDS } from "../../constants/auth/registerForm.js";
import { BUTTON_TITLES } from "./../../constants/auth/buttonTitles.js";
import AuthInput from "../../components/ui/input/AuthInput.vue";
</script>
<template>
  <AuthLayout>
    <span>Или зарегистрируйтесь с помощью email</span>
    <form action="" class="login-form-section">
      <div class="input-section">
        <AuthInput
          v-for="field in REGISTER_FIELDS"
          :key="field.placeholder"
          :placeholder="field.placeholder"
          :name="field.name"
          :type="field.type"
        />
      </div>

      <div class="auth-action-section">
        <button class="auth-action-btn">
          {{ BUTTON_TITLES.register_button_title }}
        </button>
      </div>
    </form>
  </AuthLayout>
</template>
<style scoped>
span {
  color: #b1b1b1;
  font-size: 1rem;
  font-weight: 100;
}

.login-form-section > .input-section {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.auth-action-section {
  display: flex;
  justify-content: center;
}

button.auth-action-btn {
  margin-top: 40px;
  max-width: 350px;
  min-height: 80px;
  height: 100%;
  width: 100%;
  color: black;
  font-size: 1.25rem;
  border-radius: 15px;
  font-weight: bold;
}
</style>
