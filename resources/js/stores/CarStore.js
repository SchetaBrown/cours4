import { defineStore } from "pinia"
import { computed, ref } from "vue";

export const useCarStore = defineStore('car', () => {
    // свойства
    const carCategories = ref([]);
    const carsInfo = ref([]);

    // computed
    const carCategoriesCount = computed(() => {
        return carCategories.value.length;
    });

    const carCount = computed(() => {
        return carsInfo.value.length;
    });

    // сеттеры
    function setCarCategories(categories) {
        carCategories.value = categories;
    }

    function setCarsInfo(cars) {
        carsInfo.value = cars;
    }

    return {
        carCategories,
        carsInfo,
        carCategoriesCount,
        carCount,
        setCarCategories,
        setCarsInfo,
    }
})
