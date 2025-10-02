<script setup>
import ProviderSection from "./../components/providers/ProviderSection.vue";
</script>

<template>
  <div class="auth-block">
    <div class="auth-form">
      <div class="select-action-section">
        <ul>
          <li>
            <Link :href="route('login.index')">Вход в систему</Link>
          </li>
          <li>
            <Link :href="route('register.index')">Регистрация</Link>
          </li>
        </ul>
      </div>
      <div class="auth-form-section">
        <div class="social-providers-section">
          <ProviderSection />
        </div>
        <slot />
      </div>
    </div>
  </div>
</template>

<style scoped>
.auth-block {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
}

.auth-form {
  background-color: white;
  border-radius: 10px;
  padding: 50px;
  max-width: 600px;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.select-action-section > ul {
  display: flex;
  gap: 30px;
}

.auth-form-section {
  display: flex;
  flex-direction: column;
  gap: 40px;
}
</style>
