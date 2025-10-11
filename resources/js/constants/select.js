import { useCarStore } from "./../stores/ExportStores.js";
const CAR_STORE = useCarStore();
const CAR_CATEGORIES = CAR_STORE.carCategories;
const FUEL_TYPE = [
    {
        id: 1,
        title: "Бензин",
    },
    {
        id: 2,
        title: "Дизель",
    },
    {
        id: 3,
        title: "Гибрид",
    },
    {
        id: 4,
        title: "Электричка",
    },
];

export const DATA_ARRAY = [
    {
        id: 1,
        title: "Тип кузова",
        data: CAR_CATEGORIES,
    },
    {
        id: 2,
        title: "Марки автомобилей",
        data: CAR_CATEGORIES,
    },
];
