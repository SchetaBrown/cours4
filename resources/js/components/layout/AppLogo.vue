<script setup>
</script>
<template>
  <Link :href="route('index')">
    <div class="logotype"><span>S</span> cheta cars</div>
  </Link>
</template>
<style scoped>
.logotype {
  display: flex;
  align-items: center;
  gap: 5px;
  font-size: 1.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.logotype > span {
  width: 80px;
  height: 80px;
  border-radius: 999px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.75rem;
  font-weight: bold;
  color: white;
  background-color: black;
}
</style>
