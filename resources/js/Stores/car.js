import { defineStore } from "pinia";
import { ref } from "vue";
export const useCarStore = defineStore('carStore', () => {
    const carCategories = ref([]);

    function setCategories(categories) {
        carCategories.value = categories
    }

    return {
        carCategories,
        setCategories,
    }
})
