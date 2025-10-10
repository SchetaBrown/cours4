<script setup>
import { storeToRefs } from "pinia";
import { useUserStore } from "./../../../stores/UserStore.js";
import AppLogotype from "./AppLogotype.vue";
const USER_STORE = useUserStore();
const IS_AUTH = USER_STORE.isAuth;
</script>

<template>
    <header class="header">
        <AppLogotype />
        <div class="nav-bar">
            <ul>
                <li v-if="IS_AUTH">
                    <Link :href="route('index')">Профиль</Link>
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
    justify-content: space-between;
    align-items: center;
    height: fit-content;
    width: 100%;
    padding: 15px 35px;
    background-color: var(--white-color);
    border-radius: 0 0 20px 20px;
    margin-bottom: 80px;
}

a {
    font-size: 1.25rem;
}
</style>
