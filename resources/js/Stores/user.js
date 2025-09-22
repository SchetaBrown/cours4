import { defineStore } from "pinia";
import { ref } from "vue";

export const useUserStore = defineStore('userStore', () => {
    const isAuth = ref(false);

    function setUserAuthStatus(status) {
        isAuth.value = status;
    }

    return {
        isAuth,
        setUserAuthStatus
    }
})
