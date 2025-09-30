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

    // сеттеры
    function setCarCategories(categories) {
        carCategories.value = categories;
    }

    function setCarsInfo(carsInfo) {
        carsInfo.value = carsInfo;
    }

    return {
        carCategories,
        carsInfo,
        carCategoriesCount,
        setCarCategories,
        setCarsInfo,
    }
})
