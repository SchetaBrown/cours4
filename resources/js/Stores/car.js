import { defineStore } from "pinia";
import { computed, ref } from "vue";
export const useCarStore = defineStore('carStore', () => {
    // state
    const carCategories = ref([]);
    const carsInfo = ref([]);

    // computed
    const carCount = computed(() => {
        return carsInfo.value ? carsInfo.value.length : 0;
    });

    const bestCarCategories = computed(() => {
        return carCategories.value.slice(0, 2)
    });

    // getters
    function setCategories(categories) {
        carCategories.value = categories
    }

    function setCars(cars) {
        carsInfo.value = cars;
    }

    return {
        carCount,
        carsInfo,
        carCategories,
        bestCarCategories,
        setCategories,
        setCars,
    }
})
