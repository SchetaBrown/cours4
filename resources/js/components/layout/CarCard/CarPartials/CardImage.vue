<script setup>
</script>

<template>
  <div class="card-image">Изображение</div>
</template>

<style scoped>
.card-image {
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  width: 100%;
  min-height: 350px;
  height: 100%;
  background-color: black;
  border-radius: 8px;
  font-size: 1.5rem;
}

@media (max-width:768px) {
    .card-image {
        min-height: 250px;
    }
}
</style>
