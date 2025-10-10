<script setup>
</script>

<template>
  <Link :href="route('index')">
    <div class="logotype"><span>s</span> cheta cars</div>
  </Link>
</template>

<style scoped>
.logotype {
  display: flex;
  align-items: center;
  gap: 5px;
  text-transform: uppercase;
  font-size: 1.5rem;
}

.logotype > span {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 70px;
  height: 70px;
  border-radius: 150px;
  color: var(--white-color);
  background-color: var(--dark-red-color);
  font-size: 1.5rem;
}
</style>
