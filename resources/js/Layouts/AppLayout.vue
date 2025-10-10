<script setup>
import AppHeader from '../components/layout/partials/AppHeader.vue';
import AppFooter from '../components/layout/partials/AppFooter.vue';
</script>

<template>
    <AppHeader />
    <main class="main">
        <slot />
    </main>
    <AppFooter />
</template>

<style>

</style>
