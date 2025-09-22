<script setup>
import { useForm } from "@inertiajs/vue3";
import AuthInput from "../../Components/UI/Auth/AuthInput.vue";
import AuthLayout from "../../Layouts/AuthLayout.vue";
import SendButton from "../../Components/UI/Auth/SendButton.vue";
import Return from "./../../Components/UI/Button/Return.vue";
import Socialite from "../../Components/UI/Auth/Socialite.vue";

const form = useForm({
  login: "",
  email: "",
  password: "",
});

const btnTitle = "Регистрация";
const inputTags = [
  {
    type: "text",
    name: "login",
    placeholder: "Имя",
  },
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
  {
    type: "password",
    name: "password_confirmation",
    placeholder: "Повтор пароля",
  },
];
</script>

<template>
  <AuthLayout>
    <template v-slot:title>
      <div class="form-title-block">
        <span class="form-title">Регистрация</span>
      </div>
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
          Уже есть аккаунт?
          <Link :href="route('login.index')" style="color: var(--green)"
            >Войдите в систему</Link
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
