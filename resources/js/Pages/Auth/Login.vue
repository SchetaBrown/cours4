<script setup>
import AuthInput from "../../Components/UI/Auth/AuthInput.vue";
import SendButton from "../../Components/UI/Auth/SendButton.vue";
import AuthLayout from "../../Layouts/AuthLayout.vue";
import Return from "./../../Components/UI/Button/Return.vue";
const btnTitle = "Войти";
const inputTags = [
  {
    type: "text",
    name: "email",
    placeholder: "Email",
  },
  {
    type: "password",
    name: "password",
    placeholder: "Пароль",
  },
];
</script>

<template>
  <AuthLayout>
    <template v-slot:title>
      <span class="form-title">Вход в систему</span>
    </template>

    <template v-slot:socialite>
      <Socialite></Socialite>
    </template>

    <template v-slot:content>
      <div class="input-section">
        <AuthInput
          v-for="(input, index) in inputTags"
          :key="index"
          :type="input.type"
          :name="input.name"
          :placeholder="input.placeholder"
        />
      </div>
    </template>

    <template v-slot:button>
      <div class="send-data-block">
        <SendButton :title="btnTitle"></SendButton>
        <div>
          Нет аккаунта?
          <Link :href="route('register.index')" style="color: var(--green)"
            >К регистрации</Link
          >
        </div>
      </div>
    </template>
  </AuthLayout>
</template>

<style scoped>
.input-section {
  display: flex;
  flex-direction: column;
  gap: 15px;
}
</style>
