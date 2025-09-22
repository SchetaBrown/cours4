<script>
</script>

<template>
  <Link :href="route('index')" class="logotype"><div class="center">s</div>cheta cars</Link>
</template>

<style scoped>
.logotype {
  display: flex;
  align-items: center;
  gap: 3px;
  color: var(--white);
  font-size: 1.5rem;
  text-transform: uppercase;
}

.logotype > div {
  inline-size: 50px;
  block-size: 50px;
  background-color: var(--white);
  border-radius: 50%;
  font-size: 1.5rem;
  text-transform: uppercase;
  color: var(--dark-blue);
}
</style>
